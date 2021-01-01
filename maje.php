<?php
require 'functions.php';
	//checkLogin();
	//checkPermissionAdmin();
	$db_link = connect();
require 'config/pepper.php';
$pswd = "Password";

$user_pw = password_hash(sanitize($db_link,$pswd).$pepper, PASSWORD_DEFAULT);
	echo $user_pw;

	if(password_verify($pswd.$pepper, $user_pw)){
		echo "Correct";
	}else{
		echo "failed";
	}
