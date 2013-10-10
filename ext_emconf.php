<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "newscalendar".
 *
 * Auto generated 10-10-2013 23:11
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array (
	'title' => 'News Calendar',
	'description' => 'Calendar for Ext:tt_news. Provides calendar and a list view functionality. Main sponsors: geefgratis.nl, eventonizer.nl, phase2-networks.com, digital-park.de',
	'category' => 'plugin',
	'shy' => 0,
	'version' => '2.1.8',
	'dependencies' => '',
	'conflicts' => '',
	'priority' => '',
	'loadOrder' => '',
	'module' => '',
	'state' => 'stable',
	'uploadfolder' => 0,
	'createDirs' => '',
	'modify_tables' => 'tt_news',
	'clearcacheonload' => 0,
	'lockType' => '',
	'author' => 'Philip Almeida, Clemens Riccabona',
	'author_email' => 'philip.almeida@freedomson.com, clemens-at-riccabona{dot}it',
	'author_company' => 'freedomson.com riccabona.it',
	'CGLcompliance' => NULL,
	'CGLcompliance_note' => NULL,
	'constraints' => 
	array (
		'depends' => 
		array (
			'php' => '5.2.0-5.3.99',
			'typo3' => '4.5.0-6.1.0',
		),
		'conflicts' => 
		array (
		),
		'suggests' => 
		array (
		),
	),
);

?>