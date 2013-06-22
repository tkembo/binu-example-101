<?php
require_once('biNu-application-framework--PHP-master/class.biNu.php');

// Assign application configuration variables during constructor
$app_config = array (
	'dev_id' => 17768,								// Your DevCentral developer ID goes here
	'app_id' => 5951,								// Your DevCentral application ID goes here
	'app_name' => 'My First biNu App',				// Your application name goes here
	'app_home' => 'http://binu-example-101.azurewebsites.net/',	// Publically accessible URI
	'ttl' => 1										// Your page "time to live" parameter here
);

try {
	// Construct biNu object
	$binu_app = new biNu_app($app_config);
	
	$binu_app->add_style( array('name' => 'body_text', 'color' => '#1540eb') );
	$binu_app->add_style( array('name' => 'body_text2', 'color' => '#FF0000') );
	
	
$binu_app->add_text('Urban Dictionary','body_text');
$binu_app->add_text('Random Word','body_text2');

$binu_app->add_link('letter.php?letter=a&amp;pageNum_wordsRecordset=0','1','body_text2');
$binu_app->add_link('letter.php?letter=a&amp;pageNum_wordsRecordset=0','2','body_text2');
$binu_app->add_link('letter.php?letter=a&amp;pageNum_wordsRecordset=0','3','body_text2');
$binu_app->add_link('letter.php?letter=a&amp;pageNum_wordsRecordset=0','4','body_text2');
$binu_app->add_link('letter.php?letter=a&amp;pageNum_wordsRecordset=0','5','body_text2');
$binu_app->add_link('letter.php?letter=a&amp;pageNum_wordsRecordset=0','6','body_text2');
$binu_app->add_link('letter.php?letter=a&amp;pageNum_wordsRecordset=0','7','body_text2');


	/* Show biNu page */
	$binu_app->generate_BML();

} catch (Exception $e) {
	app_error('Error: '.$e->getMessage());
}


?>