<?php
/*
 ===========================================================================================
 + Cerberus Content Management System.
 + ---
 + - Author : Gary Christopher Johnson
 + - E-Mail : TinkeSoftware@Protonmail.com // GCJohnsonChevalier@Protonmail.com
 + - Company: Tinke Software
 + - Notes  : Please view this file in Notepad or similar for proper indentation display
 + ---
 +
 +
 +
 +
 +
 +
 +
 +
 +
 +
 +
 + ---
 + - File Location: root->System->Printable->News->index.php
 + - File Version:  0.4 - Wednesday, June, 19, 2019
 + ---
 +%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
 +%%%()()%%()()()%%()()()%%()()()%%()()()%%()()()%%()%%()%%%%%%()()()%%%%%%%%%%%%
 +%%()%%%%%()%%%%%%()%%()%%()%%()%%()%%%%%%()%%()%%()%%()%%%%%%()%%%%%%%%%%%%%%%%
 +%%()%%%%%()%%%%%%()%%()%%()%%()%%()%%%%%%()%%()%%()%%()%%%%%%()%%%%%%%%%%%%%%%%
 +%%()%%%%%()%%%%%%()%%()%%()%%()%%()%%%%%%()%%()%%()%%()%%%%%%()%%%%%%%%%%%%%%%%
 +%%()%%%%%()()()%%()()()%%()()()%%()()()%%()()()%%()%%()%%%%%%()%%%%%%%%%%%%%%%%
 +%%()%%%%%()%%%%%%()%%()%%()%%()%%()%%%%%%()%%()%%()%%()%%%%%%()%%%%%%%%%%%%%%%%
 +%%()%%%%%()%%%%%%()%%()%%()%%()%%()%%%%%%()%%()%%()%%()%%%%%%()%%%%%%%%%%%%/-\%
 +%%()%%%%%()%%%%%%()%%()%%()%%()%%()%%%%%%()%%()%%()%%()%%%%%%()%%%%%%%%%%%%|4|%  ~ Wyn ~
 +%%%()()%%()()()%%()%%()%%()()()%%()()()%%()%%()%%()()()%%()()()%%%%%%%%%%%%\-/% Build 0.6
 ===========================================================================================
*/

/*
 ===========================
 +
 +
 + DIRECTORY ACCESS
 +
 +
 ===========================
*/

$_DIRECTORY_DENIAL	= "../../Default/Denied/index.php";

if (file_exists("$_DIRECTORY_DENIAL")) {
	include_once "$_DIRECTORY_DENIAL";
} else {
	echo ("Missing Path: $_DIRECTORY_DENIAL");
} // [ + ] IF_FILE_EXISTS
?>