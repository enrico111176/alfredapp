<?php

class LeoParser{
	
	function get($input) {
		libxml_use_internal_errors( true );
		libxml_clear_errors();
		
		$doc = new DOMDocument();
		$doc->loadHtml($input);
		$xpath = new DOMXPath($doc);
		$mainElements = $xpath->query("//div[@class='section results']");
		
		$resultArray = array();
		foreach ($mainElements as $mainElement) {
			$this->parseEntries($doc->saveHtml($mainElement), $resultArray);
		}
		return $resultArray;
	}
	
	function parseEntries($input, array & $resultArray) {
		$wordDoc = new DOMDocument();
		$wordDoc->loadHtml($input);
		$wordXPath = new DOMXPath($wordDoc);
		$elements = $wordXPath->query("//table/*/tr/td[@class='text']");
		$output = "";

		$i = 1;
		$wordArray = array();
		
		foreach ($elements as $element) {
			$subElements = $element->getElementsByTagName("small");
			do {
				$moreTags = $this->removeSmallTags($element);
			} while($moreTags->length != 0);
			$this->removeSmallTags($element);
			$value = utf8_decode(trim($element->nodeValue));

			array_push($wordArray, $value);
			if ($i % 2 == 0) {
		    	array_push($resultArray, $wordArray);
				$wordArray = array();
 			}
			$i++;
		}
	}
	
	function removeSmallTags($element) {
		$subElements = $element->getElementsByTagName("small");
		foreach ($subElements as $subElement) {
			$element->removeChild($subElement);
		}
		return $element->getElementsByTagName("small");
	}
	
}

?>