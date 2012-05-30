<?php

########################################################################
# Extension Manager/Repository config file for ext "ke_search_hooks".
#
# Auto generated 30-05-2012 15:53
#
# Manual updates:
# Only the data in the array - everything else is removed by next
# writing. "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF[$_EXTKEY] = array(
	'title' => 'Faceted Search Hooks Example',
	'description' => 'Hooks example for ke_search. Feel free to use this as a kickstarter for your own custom indexer or hooks. Implements a news indexer as example.',
	'category' => 'backend',
	'shy' => 0,
	'version' => '1.0.0',
	'dependencies' => 'ke_search',
	'conflicts' => '',
	'priority' => '',
	'loadOrder' => '',
	'module' => '',
	'state' => 'stable',
	'uploadfolder' => 0,
	'createDirs' => '',
	'modify_tables' => '',
	'clearcacheonload' => 0,
	'lockType' => '',
	'author' => 'Christian Buelter(kennziffer.com)',
	'author_email' => 'buelter@kennziffer.com',
	'author_company' => 'www.kennziffer.com GmbH',
	'CGLcompliance' => '',
	'CGLcompliance_note' => '',
	'constraints' => array(
		'depends' => array(
			'ke_search' => '',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'_md5_values_when_last_written' => 'a:6:{s:28:"class.user_kesearchhooks.php";s:4:"063e";s:27:"customnews-indexer-icon.gif";s:4:"339d";s:12:"ext_icon.gif";s:4:"1e65";s:17:"ext_localconf.php";s:4:"7735";s:14:"ext_tables.php";s:4:"b3a0";s:14:"doc/manual.sxw";s:4:"fb90";}',
	'suggests' => array(
	),
);

?>