<?php

define('__ROOT__', dirname(dirname(__FILE__)));
require_once(__ROOT__.'/../config.php');
  session_start();
  
 function get_header(){
	 GLOBAL $path;
	 require_once($_SERVER['DOCUMENT_ROOT'].$path."/admin/include/header.php");	
 }

  function get_sidebar(){
	  GLOBAL $path;
	 require_once($_SERVER['DOCUMENT_ROOT'].$path."/admin/include/sidebar.php");	
 }

 function get_footer(){
	 GLOBAL $path;
	 require_once($_SERVER['DOCUMENT_ROOT'].$path."/admin/include/footer.php");	
 }
  function get_logId(){
   return !empty($_SESSION['userId']) ? true:false;
 }
 function needLogged(){
   $check=get_logId();
   if(!$check){
     header('Location:auth/login.php');

   }
 }
?>