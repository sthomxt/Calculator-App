<?php 
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

// include view controller
include_once 'include/view.inc.php';

// call view methods
echo View::show_view('header');
// different contents would be handled with model
echo View::show_view('contents');
echo View::show_view('footer');
?>