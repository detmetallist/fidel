<?php 
	$page='page';
	include "header.php"; 
?>
<div class="page_content">
	<h1><span>Contacts</span></h1>
	<p>Leave your message and we will reply as soon as possible</p>
	<form>
		<label for="first_name">First name</label>
		<input type="text" name="first_name" id="first_name">
		<label for="second_name">Second name</label>
		<input type="text" name="second_name" id="second_name">
		<label for="email">Email</label>
		<input type="text" name="email" id="email">
		<label for="message">Your message</label>
		<textarea name="message" id="message"></textarea>
		<button type="submit"><span>Send</span></button>
	</form>
</div>
<?php include "footer.php" ?>