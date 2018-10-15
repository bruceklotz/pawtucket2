<?php
	$va_errors = $this->getVar("errors");
	$vn_num1 = rand(1,10);
	$vn_num2 = rand(1,10);
	$vn_sum = $vn_num1 + $vn_num2;
?>
<div class="container"><div class="row"><div class="col-sm-12">
<H1><?php print _t("Contact"); ?></H1>
<?php
	if(is_array($va_errors["display_errors"]) && sizeof($va_errors["display_errors"])){
		print "<div class='alert alert-danger'>".implode("<br/>", $va_errors["display_errors"])."</div>";
	}
?>
	<form id="contactForm" action="<?php print caNavUrl($this->request, "", "Contact", "send"); ?>" role="form" method="post">
	    <input type="hidden" name="crsfToken" value="<?php print caGenerateCSRFToken($this->request); ?>"/>
		<div class="row">
		<div class="col-md-10">
			<div class="row">
				<div class="col-sm-4">
					<label for="name">Name</label>
					<div class="form-group<?php print (($va_errors["name"]) ? " has-error" : ""); ?>">
						<input type="text" class="form-control input-sm" id="email" placeholder="Enter name" name="name" value="{{{name}}}">
					</div>
				</div><!-- end col -->
				<div class="col-sm-4">
					<label for="email">Email address</label>
					<div class="form-group<?php print (($va_errors["email"]) ? " has-error" : ""); ?>">						
						<input type="text" class="form-control input-sm" id="email" placeholder="Enter email" name="email" value="{{{email}}}">
					</div>
				</div><!-- end col -->
				<div class="col-sm-4">
					<label for="security">Security Question</label>
						<div class='row'>
							<div class='col-sm-4'>
								<p class="form-control-static"><?php print $vn_num1; ?> + <?php print $vn_num2; ?> = </p>
							</div>
							<div class='col-sm-8'>
								<div class="form-group<?php print (($va_errors["security"]) ? " has-error" : ""); ?>">
									<input name="security" value="" id="security" type="text" class="form-control input-sm" />
								</div>
							</div>
						</div><!--end col-sm-8-->	
						</div><!-- end row -->
					
				</div><!-- end row -->
			</div><!-- end col -->
		</div><!-- end row -->
		<div class="row">
			<div class="col-sm-10">
				<label for="message">Message</label>
				<div class="form-group<?php print (($va_errors["message"]) ? " has-error" : ""); ?>">		
					<textarea class="form-control input-sm" id="message" name="message" rows="5">{{{message}}}</textarea>
				</div>
			</div><!-- end col -->
		</div><!-- end row -->
		<div class="row">
			<div class="col-sm-10">
				<div class="form-group-submit">
					<button type="submit" class="btn btn-default">Send</button>
				</div><!-- end form-group -->
				<input type="hidden" name="sum" value="<?php print $vn_sum; ?>">
			</div>
		</div>
	</form>
	
</div><!-- end col --></div><!-- end row --></div><!-- end container -->