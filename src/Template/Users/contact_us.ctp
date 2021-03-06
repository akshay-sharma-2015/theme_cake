<!--header section -->
<div class="container-fluid page-title">
	<div class="row blue-banner">
		<div class="container main-container">
			<div class="col-lg-4 col-md-4 col-sm-5 col-xs-12">
				<h3 class="white-heading">Contact us </h3>
			</div>
			<div class="col-lg-8 col-md-8 col-sm-7 col-xs-12">
				<h5>Say hi, drop a letter, and follow us in social media websites.</h5>
			</div>
		</div>
	</div> 
</div> 
<!--header section -->
<!-- full width section forms -->
<div class="container-fluid white-bg contact_us">
	<div class="row">
		<div class="container main-container" id="form-style-2">
			<div class="col-lg-9 col-lg-push-1">
			<?php  echo $this->Flash->render(); ?>
			<?php echo $this->Form->create("User"); ?>
					<div class="form-group">
					   <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12"><label>Name *</label></div>
					   <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12"><?php echo $this->Form->text("name",["data-validation"=>"required"]); ?></div>
					</div>
					<div class="form-group">
					  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12"> <label>Email *</label></div>
					  <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12"><?php echo $this->Form->email("email",["data-validation"=>"email"]); ?></div>
					</div>
					<div class="form-group">
					   <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12"><label>Message *</label></div>
					   <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12"><?php echo $this->Form->textarea("message",["data-validation"=>"required"]); ?></div>
					</div>
					<div class="form-group submit">						
						<div class="col-lg-10 col-lg-push-2 col-md-10 col-md-push-2 col-sm-10 col-sm-push-2 col-xs-12"><input type="submit" name="submit" value="Send message"/></div>
					</div>
				<?php echo $this->Form->end(); ?>
			</div>
		</div>
	</div>
</div>

<!-- full width section forms -->
   
   <!-- full width section Map -->
   	<div class="container-fluid white-bg">
    	<div class="row">
        	<div class="container main-container">
            	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                	<iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d5035856.888588961!2d19.134378650000002!3d51.953750649999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1smaps!5e0!3m2!1spl!2spl!4v1486029286335" width="1170" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
   <!-- full width section Map-->
   
   <!-- full width section about us-->
 	<div class="container-fluid white-bg about_section">
    	<div class="container">
        	<div class="row">
            	<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                	<h3>Information</h3>
                    <p><strong>Philadelphia</strong><br />
                            726 Fitzwatertown Rd, Ste 6<br />
                            Willow Grove, PA 19090<br /> 
                     </p>
                  
                  	<ul class="contacts">
                    	<li><i class="fa fa-phone"></i>+1 (215) 422-3324</li>
                        <li><i class="fa fa-phone"></i>+1 (215) 422-3512</li>
                        <li><i class="fa fa-phone"></i>office@yoursite.com</li>
                    </ul>
                    
                    <ul class="social">
                    	<li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus-square"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                       
                </div>
                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                	<h3>About us</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tempus dui id nisi gravida, eget elementum nisi lobortis. Curabitur lacinia ipsum quis ullamcorper maximus. Ut pharetra mi sit amet elit pellentesque accumsan. In vel tellus in massa elementum auctor at pulvinar mauris. Vivamus rhoncus a ante vel consectetur. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Suspendisse iaculis, turpis porttitor consequat commodo, odio sem faucibus velit, nec consectetur mi neque posuere augue. Curabitur a felis augue. Donec sed elit quis massa consectetur lobortis quis et enim. In finibus aliquam lacus, eget sodales mi ullamcorper at. Praesent a nisi dolor.</p>
                </div>
            </div>
        </div>
    </div>
   <!-- full width section about us-->
 	