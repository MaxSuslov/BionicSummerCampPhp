<?php

date_default_timezone_set('Europe/Kiev');

function dbConnection () {
	$host = 'ashost.mysql.ukraine.com.ua';
	$dbname = 'ashost_poligon';
	$user = 'ashost_poligon';
	$pass = '3dsh3l78';
	$encoding = 'utf8';

	$dsn = "mysql:host=$host;dbname=$dbname;charset=$encoding";
	$options = array(
		PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
	);

	try {
		$DBH = new PDO($dsn, $user, $pass, $options);
	}
	catch(PDOException $e) {
		echo 'Connection aborted: '.$e->getMessage();
	}
	return $DBH;
}

function date2id () {
	return date ("Y-m-d H:i:s");
}

function conv4send ($string) {	//	converts STRING for SITE-showing
	return iconv("UTF-8", "CP1251", $string);
}

function getLetter ($post) {
	$msg = "<div>\r\n";
	$msg .= "<p>Name : <b>{$post[name]}</b></p>\r\n";
	$msg .= "<p>E-mail : <b>{$post[email]}</b></p>\r\n";
	$msg .= "<p>Phone : <b>{$post[phone]}</b></p>\r\n";
	$msg .= "<p>Spec : <b>{$post[spec]}</b></p>\r\n";
	$msg .= "</div>\r\n";
	return $msg;
}

function user2db ($post) {
	$DBH = dbConnection ();
	$sql = "INSERT INTO landing16 (name, phone, email, spec, dt) values (:name, :phone, :email, :spec, SYSDATE())";
	$STH = $DBH->prepare($sql);
	$data = array('name' => $post['name'], 'phone' => $post['phone'], 'email' => $post['email'], 'spec' => $post['spec']);
	$STH->execute($data);
	$user = $DBH->lastInsertId();
	$STH = null;
	$DBH = null;
	return $user;
}

function sndMail ($post) {
	$to  = "ADMIN <dennicza@gmail.com>\r\n";
	$to .= ", MANAGER <tetiana.k.ua@gmail.com>\r\n";
	
	$subject = conv4send("BU Summer Camp - Request")."\r\n";
	
	$message = getLetter ($post);
	$message = wordwrap($message,70);
	$message .= "\r\n";
	
	$headers = "MIME-Version: 1.0\r\n";
	$headers .= "Content-type: text/html; charset=utf-8\r\n";
	$headers .= "From: BU Summer Camp <noreply@promo.net.ua>\r\n";
	mail($to, $subject, $message, $headers);
}

?>