<!DOCTYPE html>
<html lang="ru-RU" data-livestyle-extension="available">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Fidel - Hide website IP address with proxy</title>
	<link rel="icon" href="img/logo.svg">
	<link rel="stylesheet" type="text/css" href="/style.css?v=1.02" async>
	<link rel="stylesheet" type="text/css" href="/media.css?v=1.02" async>
</head>
<body>
	<div class="popup">
		<div class="popup_container popup_thanks">
			<p class="strong">Thank you!</p>
			<p>Your request has been registered!</p>
		</div>
		<div class="popup_login_over">
			<div class="popup_container popup_login">
				<form>
					<h2>To come in</h2>
					<p>Your account will be <span>automatically created after payment</span></p>
					<label for="email">Email</label>
					<input type="text" name="email" id="email">
					<div class="form_group">
						<label for="password">Password</label>
						<input type="password" name="password" id="password">
						<img src="img/invisible-password.svg" class="invisible-password">
						<img src="img/visible-password.svg" class="visible-password">
					</div>
					<a href="#">Forgot password?</a>
					<button type="submit">Login</button>
				</form>
			</div>
			<div class="popup_over"></div>
		</div>
		<div class="popup_over"></div>
	</div>
	<div class="mobile_menu">
		<header>
			<div class="mobile_menu_close">
				<img src="img/mobile_menu_close.svg">
			</div>
			<div class="logo">
				<a href="/">
					<img src="img/logo.svg">
				</a>
			</div>
		</header>
		<div class="mobile-menu-container">
			<ul>
				<li class="active"><img src="img/icon-about.svg"><a href="/">About<span><img src="img/icon_hover_menu.svg"></span></a></li>
				<li><img src="img/icon-faq.svg"><a href="/faq.php">FAQ<span><img src="img/icon_hover_menu.svg"></span></a></li>
				<li><img src="img/icon-support.svg"><a href="/contacts.php">Support<span><img src="img/icon_hover_menu.svg"></span></a></li>
				<li><img src="img/money-bill-1-wave.svg"><a href="/pricing.php">Pricing<span><img src="img/icon_hover_menu.svg"></span></a></li>
			</ul>
		</div>
	</div>
	<header>
		<div class="mobile_menu_button">
			<img src="img/mobile_menu_button.svg">
		</div>
		<div class="logo">
			<a href="/">
				<img src="img/logo.svg">
			</a>
		</div>
		<?php if($page=='page'): ?>
			<div class="header-menu">
				<ul>
					<li><a href="/">About<span><img src="img/icon_hover_menu.svg"></span></a></li>
					<li><a href="/faq.php">FAQ<span><img src="img/icon_hover_menu.svg"></span></a></li>
					<li><a href="/contacts.php">Support<span><img src="img/icon_hover_menu.svg"></span></a></li>
					<li><a href="/pricing.php">Pricing<span><img src="img/icon_hover_menu.svg"></span></a></li>
				</ul>
			</div>
		<?php elseif($page=='payment'): ?>
			<div class="header_login_text">
				<p>Do you already have a Fidel Аccount?<a href="#login">Login</a></p>
			</div>
		<?php endif; ?>
	</header>
	<div class="content">