<!-- Start Main Body Wrap -->
    <div id="main-wrap">
            
        <!-- Start Full Width -->
        <div class="boxes-full">
        
            <div class="contacttitle">
            
                <h2>Contact Responsive</h2>
            
            </div>
        
        	<div class="boxes-padding fullpadding">
                <div id="contactwarning"></div>
                <div id="contactajax"></div>
            
                <form action="javascript:parseResponse();" method="post" name="ajaxcontactform" id="ajaxcontactform">
                	<div class="contacttextarea">
                    	<input name="contactformid" id="contactformid" type="hidden" value="1" />
                    	<fieldset>
                        	<textarea name="comment" id="comment" cols="5" rows="5" class="contacttextarea"onfocus="if (this.value == 'Please Leave A Message') {this.value = '';}">Please Leave A Message</textarea>
                        </fieldset>
                    </div>

                    <div class="contacttextboxes">
                    	<fieldset>
                        	<input id="name" name="name" type="text" class="contacttextform" onfocus="if (this.value == 'Please Insert Your Name') {this.value = '';}"value="Please Insert Your Name">
                        </fieldset>
                        
                    	<fieldset>
                        	<input id="phone" name="phone" type="text" class="contacttextform" onfocus="if (this.value == 'Please Insert Your Phone Number') {this.value = '';}"value="Please Insert Your Phone Number">
                        </fieldset>
                        
                    	<fieldset>
                        	<input id="email" name="email" type="text" class="contacttextform" onfocus="if (this.value == 'Please Insert Your Email') {this.value = '';}"value="Please Insert Your Email">
                        </fieldset>
                        
                    	<fieldset>
                        	<input name="send" type="submit" class="contactformbutton" value="Send">
                        </fieldset>
                    </div>
                </form>
            </div>
            
            <span class="box-arrow"></span>
            
        </div>
        <!-- End Full Width -->

        <!-- Contact form 7 -->
        <div class="boxes-full">
            <div class="contacttitle">
                <h2>Contact Responsive</h2>
            </div>
            <div class="boxes-padding fullpadding">
                <div id="contactwarning"></div>
                <div id="contactajax"></div>
                <?php echo do_shortcode('[contact-form-7 id="30" title="Contactform"]'); ?>
            </div>
            <span class="box-arrow"></span>
        </div>
        <!-- End contact form 7 -->
        
    </div>
    <!-- End Main Body Wrap