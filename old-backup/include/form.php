<!-- hidden inline form -->
<div id="inline">
<p style="font-size:16px; margin:0 0 15px 0px;">QUICK ENQUIRY</p>
<form id="contact" name="contact" action="mail.php" method="post">
        <label for="name">Name :</label>
		<input type="name" id="name" name="name" class="txt"><br />
		<label for="email">E-mail :</label>
		<input type="email" id="email" name="email" class="txt">
		<br>
        <label for="name">Phone :</label>
		<input type="phone" id="name" name="phone" class="txt"><br />
        <label for="name">Subject :</label>
		<input type="product" id="product code" name="product" class="txt"><br />
		<label for="msg">Enquiry :</label>
		<textarea id="msg" name="msg" class="txtarea"></textarea>
		
		<button id="send">Submit</button>
	</form>
</div>

<!-- basic fancybox setup -->
<script type="text/javascript">

	function validateEmail(email) { 
		var reg = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
		return reg.test(email);
	}
	
	$(document).ready(function() {
		$(".modalbox").fancybox();
		$("#contact").submit(function() { return false; });

		
		$("#send").on("click", function(){
			var emailval  = $("#email").val();
			var msgval    = $("#msg").val();
			var msglen    = msgval.length;
			var mailvalid = validateEmail(emailval);
			
			if(mailvalid == false) {
				$("#email").addClass("error");
			}
			else if(mailvalid == true){
				$("#email").removeClass("error");
			}
			
			if(msglen < 4) {
				$("#msg").addClass("error");
			}
			else if(msglen >= 4){
				$("#msg").removeClass("error");
			}
			
			
			if(mailvalid == true && msglen >= 4) {
				// if both validate we attempt to send the e-mail
				// first we hide the submit btn so the user doesnt click twice
				$("#send").replaceWith("<em>sending...</em>");
				
				$.ajax({
					type: 'POST',
					url: 'sendmessage.php',
					data: $("#contact").serialize(),
					success: function(data) {
						if(data == "true") {
							$("#contact").fadeOut("fast", function(){
								$(this).before("<p><strong>Success! Your feedback has been sent, thanks :)</strong></p>");
								setTimeout("$.fancybox.close()", 1000);
							});
						}
					}
				});
			}
		});
	});
</script>