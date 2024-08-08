<?php 
	$page='payment';
	include "header.php"; 
?>
<div class="page_content payment_result_content">
	<div class="img_side">
		<div class="img_content">
			<img src="img/nout-payment-unsuccess.svg">
		</div>
		<div class="img_stars">
			<img src="img/stars-payment.svg">
		</div>
		<div class="img_bg">
			<img src="img/bg-payment-unsuccess.svg">
		</div>
	</div>
	<div class="payment_message">
		<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
			<path d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM175 175c9.4-9.4 24.6-9.4 33.9 0l47 47 47-47c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9l-47 47 47 47c9.4 9.4 9.4 24.6 0 33.9s-24.6 9.4-33.9 0l-47-47-47 47c-9.4 9.4-24.6 9.4-33.9 0s-9.4-24.6 0-33.9l47-47-47-47c-9.4-9.4-9.4-24.6 0-33.9z" fill="#ED2F2F"/>
		</svg>
		<h2>Oops!</h2>
		<p>Failed payment attempt</p>
	</div>
	<p><a href="/pricing.php">Back to tariff page</a></p>
</div>
<?php include "footer.php"; ?>