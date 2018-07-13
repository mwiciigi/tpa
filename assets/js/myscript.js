

function save_comment(){

	//alert('hehe i am here');

		$div_mycomment_error = $("#div_mycomment_error");
		$div_mycomment_success = $("#div_mycomment_success");

		$fullname = $("#fullname").val();
		$email = $("#email").val();
		$comment = $("#comment").val();

		$valmsg = "";
		$valmsg2 = "";

		if ($fullname == "" || $fullname == null){$valmsg = $valmsg + "<i class='fa fa-exclamation-circle'></i> Please enter your Full Name <br/>";}
		if ($email == "" || $email == null){$valmsg = $valmsg + "<i class='fa fa-exclamation-circle'></i> Please enter your valid email <br/>";}
		if ($comment== "" || $comment == null){$valmsg = $valmsg + "<i class='fa fa-exclamation-circle'></i> Please enter a message <br/>";}

		if ($valmsg != $valmsg2){
			$div_mycomment_error.html($valmsg);
			$div_mycomment_success.fadeOut("fast");
			$div_mycomment_error.fadeIn("fast");
		}


		else{
			$div_mycomment_error.fadeOut("fast");
			$div_mycomment_success.fadeOut("fast");

			//$("#add_listing_type_loader").show();

			var form = document.getElementById('contactform');
			var formData = new FormData(form);

			$.ajax({
            	url: baseDir+'home/comment',
            	type: 'POST',
            	data: formData,
				dataType: 'json',
            	xhr: function() {
               		var myXhr = $.ajaxSettings.xhr();
               		return myXhr;
            	},
            	cache: false,
            	contentType: false,
            	processData: false,
            	success: function (res) {
					//$("#add_listing_type_loader").hide();
					if(res.status == 'ERR'){
						$div_mycomment_error.html(res.message);
						$div_mycomment_success.fadeOut("fast");
						$div_mycomment_error.fadeIn("fast");
					}else if (res.status == 'SUCCESS'){
						$div_mycomment_success.html(res.message);
						$div_mycomment_error.fadeOut("fast");
						$div_mycomment_success.fadeIn("fast");

						$( '#contactform' ).each(function(){
							this.reset();
						});

						//_listing_types();

					}
            	},
				error: function(){
					//$("#add_listing_type_loader").hide();
					$div_mycomment_error.html("Something went wrong. Please check your network and try again.");
					$div_mycomment_success.fadeOut("fast");
					$div_mycomment_error.fadeIn("fast");
				}
        	});

		}
		return false;
}
