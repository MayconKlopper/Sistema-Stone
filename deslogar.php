<?php
	
	include('conexaodb.php');
	session_start();
	session_destroy();
	echo"<script language='javascript'
 type='text/javascript'>alert('Você foi deslogado');
 window.location.href='index.php';</script>";
	header('location:index.php');
?>