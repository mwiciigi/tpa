
function save_mylisting(){

alert('Your file will be saved shortly');
		$div_listing_error = $("#div_listing_error");
		$div_listing_success = $("#div_listing_success");

		$business_name = $("#business_name").val();
		$business_regnumber = $("#business_regnumber").val();
		$business_regdate = $("#business_regdate").val();
		$business_krapin= $("#business_krapin").val();
		$business_phonenumber= $("#business_phonenumber").val();
		$business_email = $("#business_email").val();
    $business_fax = $("#business_fax").val();
		$business_website = $("#business_website").val();
		$procurement_date = $("#procurement_date").val();
		$invoice_overduedate= $("#invoice_overduedate").val();
		$invoice_amount= $("#invoice_amount").val();
		$product_description = $("#product_description").val();
    $measures_debtrecovery	 = $("#measures_debtrecovery").val();
		$more_information = $("#more_information").val();
//alert('I hope you see me');

		$valmsg = "";
		$valmsg2 = "";


		if ($business_name == "" || $business_name == null){$valmsg = $valmsg + "<i class='fa fa-exclamation-circle'></i> Please enter Business Name<br/>";}
		if ($business_regnumber == "" || $business_regnumber == null){$valmsg = $valmsg + "<i class='fa fa-exclamation-circle'></i> Please enter Business Registration Number <br/>";}
		if ($business_regdate == "" || $business_regdate == null){$valmsg = $valmsg + "<i class='fa fa-exclamation-circle'></i> Please enter Registration Date <br/>";}
		if ($business_krapin == "" || $business_krapin == null){$valmsg = $valmsg + "<i class='fa fa-exclamation-circle'></i> Please enter KRA Pin <br/>";}
		if ($business_phonenumber == "" || $business_phonenumber == null){$valmsg = $valmsg + "<i class='fa fa-exclamation-circle'></i> Please enter Phone Number <br/>";}
		if ($business_email == "" || $business_email == null){$valmsg = $valmsg + "<i class='fa fa-exclamation-circle'></i> Please enter email <br/>";}
    if ($business_fax == "" || $business_fax == null){$valmsg = $valmsg + "<i class='fa fa-exclamation-circle'></i> Please enter KRA Pin <br/>";}
    if ($business_website == "" || $business_website == null){$valmsg = $valmsg + "<i class='fa fa-exclamation-circle'></i> Please enter Phone Number <br/>";}
    if ($procurement_date == "" || $procurement_date == null){$valmsg = $valmsg + "<i class='fa fa-exclamation-circle'></i> Please enter email <br/>";}
    if ($invoice_overduedate == "" || $invoice_overduedate == null){$valmsg = $valmsg + "<i class='fa fa-exclamation-circle'></i> Please enter KRA Pin <br/>";}
    if ($invoice_amount == "" || $invoice_amount == null){$valmsg = $valmsg + "<i class='fa fa-exclamation-circle'></i> Please enter Phone Number <br/>";}
    if ($product_description == "" || $product_description == null){$valmsg = $valmsg + "<i class='fa fa-exclamation-circle'></i> Please enter email <br/>";}
    if ($measures_debtrecovery == "" || $measures_debtrecovery == null){$valmsg = $valmsg + "<i class='fa fa-exclamation-circle'></i> Please enter Phone Number <br/>";}
    if ($more_information == "" || $more_information == null){$valmsg = $valmsg + "<i class='fa fa-exclamation-circle'></i> Please enter email <br/>";}


		if ($valmsg != $valmsg2){
			$div_listing_error.html($valmsg);
			$div_listing_success.fadeOut("fast");
			$div_listing_error.fadeIn("fast");
		}

		else{
			$div_listing_error.fadeOut("fast");
			$div_listing_success.fadeOut("fast");

			//$("#add_listing_type_loader").show();

			var form = document.getElementById('mylisting');
			var formData = new FormData(form);

			$.ajax({
            	url: baseDir+'user/home/save_mylisting',
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
						$div_listing_error.html(res.message);
						$div_listing_success.fadeOut("fast");
						$div_listing_error.fadeIn("fast");
					}else if (res.status == 'SUCCESS'){
						$div_listing_success.html(res.message);
						$div_listing_error.fadeOut("fast");
						$div_listing_success.fadeIn("fast");

						$( '#mylisting' ).each(function(){
							this.reset();
						});

						//_listing_types();

					}
            	},
				error: function(){
					//$("#add_listing_type_loader").hide();
					$div_listing_error.html("Something went wrong. Please check your network and try again.");
					$div_listing_success.fadeOut("fast");
					$div_listing_error.fadeIn("fast");
				}
        	});

		}
		return false;
}
