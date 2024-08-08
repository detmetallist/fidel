<?php 
	$page='payment';
	include "header.php"; 
?>
<div class="page_content payment_content">
	<div class="payment_method">
		<div class="payment_head">
			<h2 class="mobile_invisible">Payment method</h2>
			<h2>Order Summary</h2>
		</div>
		<div class="payment_body">
			<div class="payment_side left">
				<h2 class="desctop_invisible">Payment method</h2>
				<p>Location for future script display</p>
			</div>
			<img class="img_vertical" src="img/payment-side-vr.svg">
			<img class="img_horisontal wide" src="img/payment-side-hr.svg">
			<img class="img_horisontal short" src="img/payment-side-hr-short.svg">
			<div class="payment_side right">
				<h3>Package 1 SITE</h3>
				<div class="order_block">
					<div class="left">
						<p>2 Year Plan ($3,75/mo)<span>$90</span></p>
						<div class="pricing_gift"><img src="img/pricing-gift.svg">+ 6 months as a gift</div>
					</div>
				</div>
				<div class="total_block">
					<div class="left">Total</div>
					<div class="right">
						$90
					</div>
				</div>
				<p>Any other necessary textual information can be found here.</p>
			</div>
		</div>
	</div>
</div>
<?php include "footer.php"; ?>