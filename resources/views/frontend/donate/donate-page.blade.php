@extends('frontend.home_dashboard')

@section('home')
@section('title')
Donate Page
@endsection
<div style=" display: flex; flex-direction: column; min-height: 100vh; margin: 0;">
	<div class="container mb-5">

		<div class="row">
			<div class="col-md-12 mb-5">
				<span class="welcome-text ">
					<span>Mirësevini në faqen tonë!<span> <br>
							<span>Ne, në portalin tonë Bota Islame, shpërndajmë informacione që shërbejnë për të
								ndriçuar dhe frymëzuar komunitetin tonë.
								<span><br>
									<span>Duke mbështetur portalin tonë, po i hapim rrugën për të pasur një impakt edhe
										më të madh në shoqërinë tonë dhe përtej saj.
									</span><br>

									<span>Çdo donacion që pranojmë është një hapi drejt të shërbyerit dhe informimit më
										të mirë. Përmes kontributit tuaj, mundësojmë prodhimin e më shumë materialeve
										edukuese.
									</span><br>

									<span>Ju ftojmë të bëheni pjesë e kësaj rrugëtimi të mirë. Asokohe që vendosni të
										dhuroni, po ndihmoni në rritjen e cilësisë së informacionit. Çdo donacion,
										madhështor ose i vogël, ka një rëndësi të jashtëzakonshme.
										<span> <br>

											<span>Faleminderit që jeni pjesë e portalit tonë dhe që po ndihmoni në
												ndërtimin e një komuniteti të fortë dhe të përgjegjshëm.
											</span>
										</span>
			</div>
			<div class="col-md-6">
				<img src="{{ asset('backend/assets/images/donate.png') }}" style="min-height: 440px;">
			</div>

			<div class="col-md-6">

				<div class="donation-box">
					<div class="title">Donation Information</div>

					<div class="fields">
						<input type="text" id="firstName" placeholder="First Name"> </input>
						<input type="text" id="lastName" placeholder="Last Name"> </input>
						<input type="text" id="email" placeholder="Email"> </input>
					</div>

					<div class="amount">
						<div class="button">$30</div>
						<div class="button">$50</div>
						<div class="button">$100</div>
						<div class="button">$<input type="text" class="set-amount" placeholder=""> </input></div>
					</div>

					<div class="switch">
						<input type="radio" class="switch-input" name="view" value="One-Time" id="one-time" checked="">
						<label for="one-time" class="switch-label switch-label-off">One-Time</label>
						<input type="radio" class="switch-input" name="view" value="Monthly" id="monthly">
						<label for="monthly" class="switch-label switch-label-on">Monthly</label>
						<span class="switch-selection"></span>
					</div>

					<div class="checkboxes mt-4">
						<input type="checkbox" id="receipt" class="checkbox" />
						<label for="receipt">Email Me A Receipt</label>
						<br />
						<input type="checkbox" id="anon" class="checkbox" />
						<label for="anon">Give Anonymously</label>
						<br />
						<input type="checkbox" id="list" class="checkbox" />
						<label for="list">Add Me To Email List</label>
					</div>

					<div class="confirm">

					</div>

					<div class="donate-button"><i class="fa fa-credit-card"></i> Donate Now</div>
				</div>

			</div>
		</div>
	</div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://raw.githubusercontent.com/jerryluk/jquery.autogrow/master/jquery.autogrow-min.js"></script>
<script>
	var firstName = "";
		var lastName = "";
		var email = "";
		var dType = "";
		var receipt = "";
		var anon = "";
		var list = "";
		var amount = "";
		
		$('.set-amount').autoGrow(0);
		
		
			if(isiPad || jQuery.browser.mobile){
				$('#team').hide()
				$('.team-mobile').show();	
			}else{
				$('#team').show()
				$('.team-mobile').hide();
			}
		
		
		//Set & Highlight Donation Amount
		$(".button").click(function(){
			$(".button").removeClass("selected");
			$(this).addClass("selected");
			
			$(this).find("input").focus();
		});
		
		//Grow the donation box if they type more than 4 numbers
		$(".set-amount").keyup(function(){
			
			if (this.value != this.value.replace(/[^0-9\.]/g, '')) {
		       this.value = this.value.replace(/[^0-9\.]/g, '');
		    }

		});
		
		
		$("input").on("change", function(){
			 $(".donation-box").css("height", "500px");
			
			firstName = $("#firstName").val();
			lastName = $("#lastName").val();
			email = $("#email").val();
			
			if ( $("#one-time").prop( "checked" ) ){
				dType = "One-Time";
			}
			if ( $("#monthly").prop( "checked" ) ){
				dType = "Monthly";
			}

		});
</script>

<style>
	.welcome-text {
		font-size: 18px;
		color: #333;
		line-height: 1.2;
	}

	.welcome-text span {
		display: block;
		margin-bottom: 5px;
		font-weight: 400;
		color: #1d5562;
		/* A different color for the headings */
	}

	.welcome-text span:first-child {
		font-size: 19px;
		/* Larger font size for the first span (heading) */
		color: #8ab042;
		/* A different color for the first span (heading) */
	}

	.donation-container {
		height: 1000px;
		font-family: 'Montserrat', sans-serif;
		font-weight: 500;
		font-size: 12px;
		text-transform: uppercase;
		margin-top: 30px;
	}

	.donation-box {
		width: 390px;
		height: 440px;
		background-color: #F5F5F5;
		border-top-left-radius: 4px;
		border-top-right-radius: 4px;
		position: relative;
		margin-left: auto;
		margin-right: auto;

		-webkit-transition: all 0.15s ease-out;
		-moz-transition: all 0.15s ease-out;
		-o-transition: all 0.15s ease-out;
		transition: all 0.15s ease-out;
	}

	.donation-box .title {
		background-color: #1d5562;
		width: 100%;
		border-top-left-radius: 4px;
		border-top-right-radius: 4px;
		color: white;
		text-align: center;
		padding-top: 12px;
		padding-bottom: 12px;
		font-size: 15px;
	}

	.donation-box .donate-button {
		background-color: #1d5562;
		width: 100%;
		color: white;
		text-align: center;
		padding-top: 12px;
		padding-bottom: 12px;
		font-size: 18px;
		bottom: 0px;
		position: absolute;
		cursor: pointer;
		font-weight: 800;
	}

	.donation-box .fields {
		width: 59%;
		display: block;
		position: absolute;
		top: 60px;
		left: 15px;
	}

	.donation-box .fields input {
		width: 90%;
		font-size: 17px;
		padding: 10px;
		border-radius: 4px;
		border-width: 0px;
		color: #5C5C5C;
		font-family: 'Montserrat', sans-serif;
		font-weight: 500;
		margin-bottom: 10px;
		-webkit-font-smoothing: antialiased;
	}

	::-webkit-input-placeholder {
		color: #cdcdcd;
		font-size: 15px;
	}

	:-moz-placeholder {
		/* Firefox 18- */
		color: #cdcdcd;
		font-size: 15px;
	}

	::-moz-placeholder {
		/* Firefox 19+ */
		color: #cdcdcd;
		font-size: 15px;
	}

	:-ms-input-placeholder {
		color: #cdcdcd;
		font-size: 15px;
	}

	.donation-box .amount {
		width: 30%;
		display: block;
		position: absolute;
		top: 60px;
		right: 15px;
	}

	.donation-box .amount .button {
		width: 100%;
		background-color: gray;
		margin-bottom: 10px;
		text-align: center;
		color: white;
		padding: 15px 0px 15px 0px;
		border-radius: 4px;
		font-size: 20px;
		cursor: pointer;

		-webkit-transition: 400ms background-color;
		-moz-transition: 800ms opacity, 800ms right;
		-ms-transition: 800ms opacity, 800ms right;
		-o-transition: 800ms opacity, 800ms right;
		transition: 200ms background-color;
	}

	.donation-box .amount .button:hover {
		background-color: #393939;
	}

	.donation-box .amount .button.selected {
		background-color: #393939;
	}

	.donation-box .amount .button input {
		min-width: 34px;
		font-size: 20px;
		font-weight: 500;
		border: none;
		background-color: transparent;
		color: white;
		font-family: Montserrat, sans-serif;
		font-size: 20px;
		font-stretch: normal;
		font-style: normal;
		font-variant: normal;
		font-weight: 500;
		border-bottom: 2px dashed white;
		-webkit-font-smoothing: antialiased;

		-webkit-transition: all 0.15s ease-out;
		-moz-transition: all 0.15s ease-out;
		-o-transition: all 0.15s ease-out;
		transition: all 0.15s ease-out;
	}

	.set-amount {
		max-width: 96px;
	}

	.switch {
		position: absolute;
		top: 190px;
		left: 15px;
		margin: 40px auto;
		height: 26px;
		width: 58.5%;
		background: white;
		border-radius: 3px;
	}

	.switch-label {
		position: relative;
		z-index: 2;
		float: left;
		width: 49%;
		line-height: 26px;
		font-size: 11px;
		color: #5C5C5C;
		text-align: center;
		cursor: pointer;
		font-weight: bold;
	}

	.switch-label:active {
		font-weight: bold;
	}

	.switch-label-off {
		padding-left: 2px;
	}

	.switch-label-on {
		padding-right: 2px;
	}

	.switch-input {
		display: none;
	}

	.switch-input:checked+.switch-label {
		font-weight: bold;
		color: rgba(0, 0, 0, 0.65);

		-webkit-transition: 0.15s ease-out;
		-moz-transition: 0.15s ease-out;
		-o-transition: 0.15s ease-out;
		transition: 0.15s ease-out;
	}

	.switch-input:checked+.switch-label-on~.switch-selection {
		left: 114px;
	}

	.switch-selection {
		display: block;
		position: absolute;
		z-index: 1;
		top: 2px;
		left: 2px;
		width: 49%;
		height: 22px;
		background: #65bd63;
		border-radius: 3px;
		background-color: #C1D82F;

		-webkit-transition: left 0.15s ease-out;
		-moz-transition: left 0.15s ease-out;
		-o-transition: left 0.15s ease-out;
		transition: left 0.15s ease-out;
	}

	.checkboxes {
		position: absolute;
		top: 249px;
		left: 13px;
	}

	.checkboxes label {
		position: relative;
		top: -2px;
		font-size: 13px;
		color: gray;
	}

	.checkbox {
		background-color: #fafafa;
		border: 1px solid #C1D82F;
		border-radius: 3px;
		display: inline-block;
		position: relative;
	}
</style>

@endsection