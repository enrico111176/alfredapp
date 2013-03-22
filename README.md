Alfred 2 Helpers and Workflows
=========

This repository contains my created Alfred 2 (http://www.alfredapp.com) workflows:

Leo Dictionary
---------
![Searching with leo](Leo%20Dictionary/screenshot_de.png)

Searches the Leo dictionary (http://dict.leo.org) for the languages german and english and feeds back the results into Alfred for instantly seeing the translated word. When hitting 'Enter' the translated word is copied to the clipboard. When hitting 'Shift + Enter' the selected word translation is opened with Leo.
With Version 1.2 newly introduced a somewhat "automatic" detection of the language of the entered word. 

There are two ways to search Leo:
* de - Translating a german word to english and vice versa.
* df - Translating a german word to french and vice versa.
* ds - Translating a german word to spanish and vice versa.

Download the workflow: [Leo Dictionary](https://github.com/psistorm/alfredapp/blob/master/Leo%20Dictionary/LeoDictionary.alfredworkflow?raw=true)

Release Notes:
V 1.1:
- Added two hotkey inputs, transferring the current selected text to Alfred for getting translation. The used hotkeys are not imported and need to be set as wished.
V 1.2:
- Only one keyword per language needed now. The language of the entered word is automatically detected.
- Opening Leo with the selected word when hitting 'Shift + Enter'.
- Fixed problem with german umlauts.