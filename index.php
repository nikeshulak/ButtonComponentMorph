<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
		<meta name="viewport" content="width=device-width, initial-scale=1"> 
		<title>Morphing Buttons Concept | Demo 1</title>

		<!-- <link rel="stylesheet" type="text/css" href="css/normalize.css" /> -->
		<!-- <link rel="stylesheet" type="text/css" href="css/demo.css" /> -->
		<!-- <link rel="stylesheet" type="text/css" href="css/content.css" /> -->

		<link rel="stylesheet" type="text/css" href="css/component.css" />
		<script src="js/modernizr.custom.js"></script>
	</head>
	<body>
		This is a test popup.
		<div class="container">
			<section>
				<div class="mockup-content">
					<div class="morph-button morph-button-modal morph-button-modal-2 morph-button-fixed">
						<button type="btn btn-sm btn-primary plan-custom-trip">Plan Your Trip</button>
						<div class="morph-content">
							<div>
								<div class="content-style-form content-style-form-1">
									<!-- <span class="icon icon-close">Close the dialog</span> -->
									<!-- <h2 class="">Login</h2> -->



									<!-- <form>
										<p><label>Email</label><input type="text" /></p>
										<p><label>Password</label><input type="password" /></p>
										<p><button>Login</button></p>
									</form> -->
									<div class="modal fade" id="planTripModal">
							      <div class="modal-dialog" id="">
							        <div class="modal-content">
							            <div class="modal-body">
							                <button type="button" class="close icon-close" data-dismiss="modal">&times;</button>
							                <div class="for-success-msg">
							                  <div class="box-head-wrap parent-height">
							                    <div class="box-head clearfix child-height">Plan Your Trip</div>

							                    <div class="box-head-caption child-height">Talk to a specialist and start designing your dream trip straight away. <br>Fill up the form below. We reply within 24 hours</div>
							                  </div>

							                  <form name="appbundle_enquiry" method="post" class="form-horizontal">
							                    <div class="row">
							                      <div class="col-md-7">
						                          <div class="form-group- m-t">
						                              <div class="-col-sm-9">
						                                  <input type="text" id="appbundle_enquiry_name" name="appbundle_enquiry[name]" maxlength="255" placeholder="Name" class="form-control">
						                              </div>

						                              <div class="-col-sm-9">
						                                  <input type="email" id="appbundle_enquiry_email" name="appbundle_enquiry[email]" maxlength="255" placeholder="Email" class="form-control">
						                              </div>
						                          </div>

							                                                  
						                          <div class="form-group- clearfix">
						                              <label class="-col-sm-3 control-label m-b" for="">Number of People *</label>

						                              <div id="numberOfPeople" class="-col-sm-9 radio i-checks number-of-people">
						                                <div class="">
						                                  <div class="people-type">
						                                    <label class="nopaddingleft"><input type="radio" id="appbundle_enquiry_groupId_Solo" name="appbundle_enquiry[groupId]" value="solo" style="" checked="checked">Solo</label>
						                                  </div>
						                                  <div class="people-type">
						                                    <label><input type="radio" id="appbundle_enquiry_groupId_Family" name="appbundle_enquiry[groupId]" value="family" style="">Family</label>

						                                    <div class="form-group- pax-box pax-box-family clearfix" style="display: none;">
						                                        <div class="pax-item">
						                                            <label class="-col-sm-3 control-label" for="appbundle_enquiry_paxAdult">Adults</label>
						                                            <div class="-col-sm-9">
						                                                <input type="number" id="appbundle_enquiry_paxAdult" name="appbundle_enquiry[paxAdult]" class="form-control">
						                                            </div>
						                                        </div>

						                                        <div class="pax-item nomarginright nomarginbottom">
						                                            <label class="-col-sm-3 control-label" for="appbundle_enquiry_paxChild">Children</label>
						                                            <div class="-col-sm-9">
						                                                <input type="number" id="appbundle_enquiry_paxChild" name="appbundle_enquiry[paxChild]" class="form-control">
						                                            </div>
						                                        </div>
						                                    </div>

						                                  </div>

						                                  <div class="people-type">
						                                    <label><input type="radio" id="appbundle_enquiry_groupId_Couple" name="appbundle_enquiry[groupId]" value="couple" style="">Couple</label>
						                                  </div>
						                                  <div class="people-type">
						                                    <label><input type="radio" id="appbundle_enquiry_groupId_Group" name="appbundle_enquiry[groupId]" value="group" style="">Group</label>

						                                    <div class="form-group- pax-box pax-box-group clearfix" style="display: none;">
						                                        <div class="pax-item">
						                                            <label class="-col-sm-3 control-label" for="appbundle_enquiry_paxAdult">Adults</label>
						                                            <div class="-col-sm-9">
						                                                <input type="number" id="appbundle_enquiry_paxAdult" name="appbundle_enquiry[paxAdult]" class="form-control">
						                                            </div>
						                                        </div>

						                                        <div class="pax-item nomarginright nomarginbottom">
						                                            <label class="-col-sm-3 control-label" for="appbundle_enquiry_paxChild">Children</label>
						                                            <div class="-col-sm-9">
						                                                <input type="number" id="appbundle_enquiry_paxChild" name="appbundle_enquiry[paxChild]" class="form-control">
						                                            </div>
						                                        </div>
						                                    </div>
						                                  </div>
						                                </div>
						                                
						                                

						                                
						                              </div>
						                          </div>
							                        
						                          <div class="row">
						                            <div class="col-sm-5">
						                              <div class="form-group-">
						                                  <label class="-col-sm-3 control-label m-b" for="">Budget <small>(per person)</small> *</label>

						                                  <div class="pax-box pax-box-budget clearfix relative" style="display: block !important;">
						                                    <div class="pax-item">
						                                      <label class="-col-sm-3 control-label" for="appbundle_enquiry_budget">$</label>
						                                      <div class="-col-sm-9">
						                                          <input type="number" min="0" step="50" id="appbundle_enquiry_budget" name="appbundle_enquiry[budget]" class="form-control">
						                                      </div>
						                                    </div>
						                                  </div>
						                              </div>
						                            </div>

						                            <div class="col-sm-7">
                                          <div class="form-group-">
					                                  <label class="-col-sm-3 control-label m-b" for="appbundle_enquiry_travelDatesFrom">Travel Dates *</label>

					                                  <div class="-col-sm-3 datepicker-box">From
					                                      <input type="text" id="appbundle_enquiry_travelDatesFrom" name="appbundle_enquiry[travelDatesFrom]" required="required" class="form-control datepicker form-control" data-provide="datepicker" data-date-format="yyyy/mm/dd">
					                                  </div>
					                                  <div class="-col-sm-3 datepicker-box nomarginright">To
					                                      <input type="text" id="appbundle_enquiry_travelDatesTo" name="appbundle_enquiry[travelDatesTo]" required="required" class="form-control input-inline datepicker form-control" data-provide="datepicker" data-date-format="yyyy/mm/dd">
					                                  </div>
					                                  <div class="clear"></div>
					                                 
					                              </div>
						                            </div>
						                          </div>
							                        
							                      </div>

							                      <div class="col-md-5">
							                        
						                          <div class="form-group-">
						                              <label class="-col-sm-3 control-label" for="appbundle_enquiry_tripIdea">Tell us what you want to experience *</label>
						                              <div class="-col-sm-9">
						                                  <textarea id="appbundle_enquiry_tripIdea" name="appbundle_enquiry[tripIdea]" class="form-control"></textarea>
						                              </div>
						                          </div>
							                      </div>
							                    </div>
							                    

							                    
							                    <div class="">
							                        <button class="btn btn-primary btn-submit bottom-right" type="submit" id="btn-add">Plan</button>
							                    </div>
							                    
							                  </form>
							                </div>
							            </div>
							            
							        </div>
							      </div>
							    </div>
								</div>
							</div>
						</div>
					</div>

					<!-- <div class="morph-button morph-button-modal morph-button-modal-3 morph-button-fixed">
						<button type="button">Signup</button>
						<div class="morph-content">
							<div>
								<div class="content-style-form content-style-form-2">
									<span class="icon icon-close">Close the dialog</span>
									<h2>Sign Up</h2>
									<form>
										<p><label>Email</label><input type="text" /></p>
										<p><label>Password</label><input type="password" /></p>
										<p><label>Repeat Password</label><input type="password" /></p>
										<p><button>Sign Up</button></p>
									</form>
								</div>
							</div>
						</div>
					</div> -->
				</div><!-- /form-mockup -->
			</section>
		</div><!-- /container -->

		<script src="js/classie.js"></script>
		<script src="js/uiMorphingButton_fixed.js"></script>
		<script src="js/morph-init.js"></script>

		<?php
		function site_url() {
			return 'http://10.0.1.32:3000/bundles/';//start etp on local
		}
		?>

		<link rel="stylesheet" type="text/css" href="<?php echo site_url();?>app/css/bootstrap.min.css">

		<link rel="stylesheet" type="text/css" href="<?php echo site_url();?>kazi/css/frontend.css">
		<link rel="stylesheet" type="text/css" href="<?php echo site_url();?>kazi/css/frontend-etp.css">

		<style type="text/css">
			body,
			.morph-button-modal-2 > button, .morph-button-modal-2 .morph-content, .morph-button-modal-3 > button, .morph-button-modal-3 .morph-content {
				color: #131516;
			}
			.morph-content .modal {
			    position: inherit;
			    opacity: 1;
			    display: block;
			}
			.morph-button-modal-2.open .morph-content {
			    width: 600px;
			    margin-left: -300px;
			}
			@media (min-width: 830px) {
				.morph-button-modal-2.open .morph-content {
					width: 800px;
					margin-left: -400px;
				}
			}
			.morph-button-modal-2.open .modal.fade .modal-dialog {				
				transform: translate(0,0);
			}
			.morph-button-modal-2.open .modal-dialog {
				margin-top: 0;
			}

			.morph-button-modal.open .plan-custom-trip {
			    display: none;
			}

			.morph-button-modal.open .morph-content {
			    height: auto;
			}
			.morph-button-modal.open .morph-content {
			    top: 30px !important;
			    margin-top: 30px;
			}
			.morph-button-modal-2.open .modal.fade .modal-dialog {
			    margin-bottom: 0;
			}
			.form-control, .single-line {
			    border-radius: 0;
			}


			.plan-custom-trip,
.morph-button-modal > button {
    position: fixed !important;
    z-index: 10;
    right: 0;
    height: auto;
    display: block;
    text-align: left;
    top: 50%;
    margin-top: -36px;
    font-size: 16px;
    font-weight: 500;
    color: #140226;
    padding: 5px;
    line-height: 20px;
    width: 65px;
    background: #ffc72c;
    border: 1px solid #000;
    border-radius: 0;
}

.morph-button-modal .morph-content {
    /*background: #ffc72c;	*/
    background: #ffffff;
}
.morph-button.morph-button-modal-2, .morph-button.morph-button-modal-3 {
    margin: 0;
}

.plan-custom-trip, .morph-button-modal > button {
    font-family: 'Oswald';
}
body {
	height: 900px;
}
		</style>
	</body>
</html>