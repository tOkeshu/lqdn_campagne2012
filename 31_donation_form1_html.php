            <div class="row donations" id="donations">
                <div class="span6">

                    <div class="row">
                        <div class="span6">
                            <h2>
                            <?php __("Support Us"); ?>
                            </h2>
                        </div>
                    </div>

<?php
	       if (isset($errno) && $errno) {
?>
                    <div class="row">
                        <div class="error">
<?php if (is_array($errno)) {
foreach($errno as $e) echo _($errors[$e])."<br />";
} else echo _($errors[$errno]); ?>
                        </div>
                    </div>
<?php 
	       }
?>
                    <form method="post" action="/#progressbar" name="f1" id="f1">
                    <div class="row">
                        <div class="span6">
                    

                            <div class="span1 amounts_holder">
	       <input type="radio" name="sum" value="10" id="sum10"<?php ifcheck($_REQUEST["sum"]=="10"); ?> class="predef"  />
                                    <label for="sum10">10&nbsp;&euro;</label>

                                    <div class="alert" id="piplome_pdf" style="display:none">
								 <p><?php __("To thank you for your generous donation, La Quadrature du Net will send you a personnalised diploma with your very own 1 000 π digits, which <strong>you will receive as a PDF by email.</strong>."); ?></p>
                                        <p class="cadeaux"><img src="images/piplomepdf.png"></p>
                                    </div>
                            </div>
                            <div class="span1 amounts_holder">
                                    <input type="radio" name="sum" value="25" id="sum25"<?php ifcheck($_REQUEST["sum"]=="25"); ?> class="predef" />
                                    <label for="sum25">25&nbsp;&euro;</label>
                                    <div class="alert" id="piplome_pdf2" style="display:none">
								 <p><?php __("To thank you for your generous donation, La Quadrature du Net will send you a personnalised diploma with your very own 1 000 π digits, which <strong>you will receive as a PDF by email.</strong>."); ?></p>
                                        <p class="cadeaux"><img src="images/piplomepdf.png"></p>
                                    </div>
                            </div>
                            <div class="span1 amounts_holder">
                                    <input type="radio" name="sum" value="50" id="sum50"<?php ifcheck($_REQUEST["sum"]=="50"); ?> class="predef" />
                                    <label for="sum50">50&nbsp;&euro;</label>
                                    <div class="alert " id="piplome" style="display:none">
                                        <p><?php __("To thank you for your generous donation, La Quadrature du Net will send you a personnalised diploma with your very own 1 000 π digits, which <strong>you will receive as a PDF by email + an original print on high quality paper</strong>."); ?></p>
                                        <p class="cadeaux"><img src="images/piplomemail.png"></p>
                                    </div>    
                            </div>

                            <div class="span1 amounts_holder">
                                    <input type="radio" name="sum" value="100" id="sum100"<?php ifcheck($_REQUEST["sum"]=="100"); ?> class="predef" />
                                    <label for="sum100">100&nbsp;&euro;</label>
                                    <div class="alert " id="piplome_ts"  style="display:none">
                                        <p><?php __("To thank you for your generous donation, La Quadrature du Net will send you a personnalised diploma with your very own 1 000 π digits, which <strong>you will receive as a PDF by email + an original print on high quality paper + a wonderful tee-shirt!</strong>"); ?></p>
                                        <p class="cadeaux"><img src="images/piplomemail.png">
                                            <img src="images/pishirt.png"></p>
				    </div>    
                            </div>
                            <div class="span1 amounts_holder">
                                    <input type="radio" name="sum" value="250" id="sum250"<?php ifcheck($_REQUEST["sum"]=="25"); ?> class="predef" />
                                    <label for="sum250">250&nbsp;&euro;</label>
                                    <div class="alert " id="piplome_ts2"  style="display:none">
                                        <p><?php __("To thank you for your generous donation, La Quadrature du Net will send you a personnalised diploma with your very own 1 000 π digits, which <strong>you will receive as a PDF by email + an original print on high quality paper + a wonderful tee-shirt!</strong>"); ?></p>
                                        <p class="cadeaux"><img src="images/piplomemail.png">
                                            <img src="images/pishirt.png"></p>
				    </div>    
                            </div>
                            <div class="span1 amounts_holder othersum">
				    <input type="radio" name="sum" value="-1" id="sum1"<?php ifcheck(!in_array($_REQUEST["sum"],$asums)); ?> />
                                    <input type="text" name="othersum" value="<?php if (in_array($_REQUEST["sum"],$asums)) __("Other"); else echo intval($_REQUEST["sum"]); ?>" />
                                    <label for="sum1">&euro;</label>
                                    <div class="alert " id="nocado5" style="display:none">
				      <p><?php __("Please enter the amount you want to give. due to high banking costs, we cannot accept donations under 5&nbsp;&euro;. You can still <a href=\"http://www.laquadrature.net/en/how-to-participate\">help us in other ways!</a>"); ?></p>
                                    </div>
                            </div>
                        </div>                            
                    </div>                            
                    <div class="row">
                        <div class="span6 checkbox_holder">
                                    <input type="checkbox" id="monthly" name="monthly"<?php ifcheck($_REQUEST["monthly"]); ?>/> <label for="monthly"><?php __("Make this a monthly donation (<b>french bank accounts only</b>)"); ?></label>
                        </div>
                    </div>                            
                    <div class="row">
                        <div class="span6">
					  <p class="btn-support">
					  <input type="submit" class="btn btn-large btn-inverse" value="<?php __("I support La Quadrature du Net"); ?> &gt;&gt;"/>
					  </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="span6">
                                <div class="giftContainer ui-widget-content" style="display:none;"></div>
                        </div>                            
                    </div>                            
                    </form><!-- donation form -->
                </div>
