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
 + ---
 + - File Location: root->Theme->TinkeSoftware->Theme.php
 + - File Version:  0.3 - Saturday, November, 10, 2018
 + ---
 +%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
 +%%%()()%%()()()%%()()()%%()()()%%()()()%%()()()%%()%%()%%%%%%()()()%%%%%%%%%%%%
 +%%()%%%%%()%%%%%%()%%()%%()%%()%%()%%%%%%()%%()%%()%%()%%%%%%()%%%%%%%%%%%%%%%%
 +%%()%%%%%()%%%%%%()%%()%%()%%()%%()%%%%%%()%%()%%()%%()%%%%%%()%%%%%%%%%%%%%%%%
 +%%()%%%%%()%%%%%%()%%()%%()%%()%%()%%%%%%()%%()%%()%%()%%%%%%()%%%%%%%%%%%%%%%%
 +%%()%%%%%()()()%%()()()%%()()()%%()()()%%()()()%%()%%()%%%%%%()%%%%%%%%%%%%%%%%
 +%%()%%%%%()%%%%%%()%%()%%()%%()%%()%%%%%%()%%()%%()%%()%%%%%%()%%%%%%%%%%%%%%%%
 +%%()%%%%%()%%%%%%()%%()%%()%%()%%()%%%%%%()%%()%%()%%()%%%%%%()%%%%%%%%%%%%/-\%
 +%%()%%%%%()%%%%%%()%%()%%()%%()%%()%%%%%%()%%()%%()%%()%%%%%%()%%%%%%%%%%%%|4|%
 +%%%()()%%()()()%%()%%()%%()()()%%()()()%%()%%()%%()()()%%()()()%%%%%%%%%%%%\-/%
 ===========================================================================================
*/

/*
 ===========================
 +
 +
 + THEME FOLDER NAME
 +
 +
 ===========================
*/

$_THEME_DIRECTORY			= "TinkeSoftware";
$_THEME_DIRECTORY_IMAGE			= "Image";

/*
 ===========================
 +
 +
 + BLOCKS, LEFT TABLE
 +
 +
 ===========================
*/

$_THIS_THEMES_BLOCKS_1			= "
						<CENTER>
							<TABLE BORDER=\"0\" CELLPADDING=\"0\" CELLSPACING=\"0\">
								<TR>
									<TD><IMG SRC=\"Theme/$_THEME_DIRECTORY/$_THEME_DIRECTORY_IMAGE/Block/1.png\" ALT=\"Image\"></TD>
									<TD CLASS=\"BI2\"></TD>
									<TD><IMG SRC=\"Theme/$_THEME_DIRECTORY/$_THEME_DIRECTORY_IMAGE/Block/3.png\" ALT=\"Image\"></TD>
								</TR>

								<TR>
									<TD CLASS=\"BI4\"></TD>
									<TD CLASS=\"BI5\" WIDTH=\"600\">
";

/*
 ===========================
 +
 +
 + BLOCKS, RIGHT TABLE
 +
 +
 ===========================
*/

$_THIS_THEMES_BLOCKS_2			= "
									<TD CLASS=\"BI6\"></TD>
								</TR>

								<TR>
									<TD><IMG SRC=\"Theme/$_THEME_DIRECTORY/$_THEME_DIRECTORY_IMAGE/Block/7.png\" ALT=\"Image\"></TD>
									<TD CLASS=\"BI8\"></TD>
									<TD CLASS=\"BI9\"></TD>
								</TR>
							</TABLE>
						</CENTER>

						<BR>
";

/*
 ===========================
 +
 +
 + MODULES, CENTER TABLE
 +
 +
 ===========================
*/

$_THIS_THEMES_MODULES_1			= "
						<CENTER>
							<TABLE BORDER=\"0\" CELLPADDING=\"0\" CELLSPACING=\"0\">
								<TR>
									<TD><IMG SRC=\"Theme/$_THEME_DIRECTORY/$_THEME_DIRECTORY_IMAGE/Module/1.png\" ALT=\"Image\"></TD>
									<TD CLASS=\"MI2\"></TD>
									<TD><IMG SRC=\"Theme/$_THEME_DIRECTORY/$_THEME_DIRECTORY_IMAGE/Module/3.png\" ALT=\"Image\"></TD>
								</TR>

								<TR>
									<TD CLASS=\"MI4\"></TD>
									<TD CLASS=\"MI5\" WIDTH=\"600\">
";

$_THIS_THEMES_MODULES_2			= "
									<TD CLASS=\"MI6\"></TD>
								</TR>

								<TR>
									<TD><IMG SRC=\"Theme/$_THEME_DIRECTORY/$_THEME_DIRECTORY_IMAGE/Module/7.png\" ALT=\"Image\"></TD>
									<TD CLASS=\"MI8\"></TD>
									<TD CLASS=\"MI9\"></TD>
								</TR>
							</TABLE>
						</CENTER>
";

/*
 ===========================
 +
 +
 + META INFORMATION
 +
 +
 ===========================
*/

$_GLOBAL_META_TAGS			= "
		<Link REL=\"shortcut icon\" HREF=\"Theme/$_THEME_DIRECTORY/$_THEME_DIRECTORY_IMAGE/Icon/favicon.ico\" TYPE=\"image/x-icon\">
		<META NAME=\"COPYRIGHT\" CONTENT=\"(C) Tinke Software\">
		<META NAME=\"KEYWORDS\" CONTENT=\"Tinke Software, Content, Management, System, Cerberus, PHP, MySQL, SQL\">
		<META NAME=\"DESCRIPTION\" CONTENT=\"Cerberus Content Management System Version: 4, Build: 0.6\">
		<META NAME=\"ROBOTS\" CONTENT=\"Cerberus Content Management System Version: 4, Build: 0.6\">
		<META NAME=\"REVISIT-AFTER\" CONTENT=\"1 DAYS\">
		<META NAME=\"RATING\" CONTENT=\"GLOBAL\">
		<META NAME=\"GENERATOR\" CONTENT=\"Cerberus Content Management System Version: 4, Build: 0.6\">
";

/*
 ===========================
 +
 +
 + LAYOUT VARIABLES [ 1 ]
 +
 +
 ===========================
*/

$_GLOBAL_LAYOUT_1			= "
		<CENTER><A HREF=\"?Application&#61;News\"><IMG SRC=\"Theme/$_THEME_DIRECTORY/$_THEME_DIRECTORY_IMAGE/Banner/Banner.png\" WIDTH=\"75%\" TITLE=\"Open Application :: News\" ALT=\"Open Application :: News\"></A></CENTER>

		<CENTER>
			<TABLE WIDTH=\"75%\">
				<TR>
					<TD VALIGN=\"Top\">
";

/*
 ===========================
 +
 +
 + LAYOUT VARIABLES [ 2 ]
 +
 +
 ===========================
*/

$_GLOBAL_LAYOUT_2			= "
					</TD>

					<TD VALIGN=\"Top\" WIDTH=\"100%\">
						$_THIS_THEMES_MODULES_1
";

/*
 ===========================
 +
 +
 + LAYOUT VARIABLES [ 3 ]
 +
 +
 ===========================
*/

$_GLOBAL_LAYOUT_3			= "
						$_THIS_THEMES_MODULES_2
					</TD>

					<TD VALIGN=\"Top\">
";

/*
 ===========================
 +
 +
 + LAYOUT VARIABLES [ 4 ]
 +
 +
 ===========================
*/

$_GLOBAL_LAYOUT_4			= "
					</TD>
				</TR>
			</TABLE>
		</CENTER>

		<CENTER><IMG SRC=\"Theme/$_THEME_DIRECTORY/$_THEME_DIRECTORY_IMAGE/Banner/Banner_Bottom.png\" WIDTH=\"75%\" TITLE=\"- Cerberus Content Management System -\" ALT=\"- Cerberus Content Management System -\"></CENTER>
";
?>