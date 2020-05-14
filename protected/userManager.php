<?php 
function IsUserLoggedIn() {
	return $_SESSION  != null && array_key_exists('uid', $_SESSION) && is_numeric($_SESSION['uid']);
}

function IsUserAdmin(){
	if(IsUserLoggedIn() && isset($_SESSION['permission'])){
		return $_SESSION['permission'] == 2;
	}
}

function UserLogout() {
	session_unset();
	session_destroy();
	header('Location: index.php');
}

function UserLogin($email, $password) {
	$query = "SELECT id, fname, lname, email, permission FROM users WHERE email = :email AND password = :password";
	$params = [
		':email' => $email,
		':password' => sha1($password)
	]; 

	require_once DATABASE_CONTROLLER;
	$record = getRecord($query, $params);
	if(!empty($record)) {
		$_SESSION['uid'] = $record['id'];
		$_SESSION['fname'] = $record['fname'];
		$_SESSION['lname'] = $record['lname'];
		$_SESSION['email'] = $record['email'];
		$_SESSION['permission'] = $record['permission'];
		header('Location: index.php');
	}
	return false;
}

function UserRegister($email, $password, $fname, $lname) {
	$query = "SELECT id FROM users email = :email";
	$params = [ ':email' => $email ];

	require_once DATABASE_CONTROLLER;
	$record = getRecord($query, $params);
	if(empty($record)) {
		$query = "INSERT INTO users (fname, lname, email, password) VALUES (:first_name, :last_name, :email, :password)";
		$params = [
			':first_name' => $fname,
			':last_name' => $lname,
			':email' => $email,
			':password' => sha1($password)
		];

		if(executeDML($query, $params)) 
			header('Location: index.php?P=login');
	} 
	return false;
}

?>