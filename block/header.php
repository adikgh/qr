<!DOCTYPE html>
<html lang="<?=$lang?>" id="html" class="html">
<head>

	<? include 'head.php' ?>

</head>
<body id="body" class="body <?=($user_id?'body_user':'')?>">

	<? // include "preloader.php"; ?>
	
	<!-- body start -->
	<div class="app <?=($site_set['app_none']?'app_none':'')?>">

		<? include "menu.php"; ?>