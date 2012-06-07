            <div class="row donations" id="donations">
                <div class="span6">

                    <div class="row">
                        <div class="span6">
                            <h2>
	       <?php __("Support us (step 2/3)"); ?>
                            </h2>
                        </div>
                    </div>

<?php
	       if (isset($errno) && $errno) {
?>
                    <div class="row">
                        <div class="error">
<?php if (is_array($errno)) {
foreach($errno as $e) echo "- "._($errors[$e])."<br />";
} else echo _($errors[$errno]); ?>
                        </div>
                    </div>
<?php 
	       }
?>

                    <form method="post" action="/#progressbar" name="f1" id="f1">
                    <div class="row">
                        <div class="span6">

    <input type="hidden" name="etape2" value="1"/>
    <input type="hidden" name="sum" value="<?php eher("sum"); ?>" />
    <input type="hidden" name="monthly" value="<?php eher("monthly"); ?>" />
	       <p> <?php printf(_('Make a donation of: <b>%s &euro;</b>'),$_REQUEST["sum"]); ?></p>
                        </div>
                    </div>                            


                    <div class="row">
                        <div class="span6">
	       <?php if ($_REQUEST["monthly"])  { ?>
		     <div class="information">  <?php __("You wish to support us with a monthly donation, thank you for your kind support. For your convenience, you will have to possibility to pause or stop this donation each month."); ?></div>
	     <?php } ?>
			<p>
                                <label for="email"><?php __("Email:"); ?></label><br /> <input type="text" id="email" name="email" size="60" class="largeinput<?php badfield(array(3,4)); ?>" value="<?php eher("email"); ?>"/> 
                            </p>
			<p>
                                <label for="pseudo"><?php __("First Name, Full Name or Nickname:"); ?></label><br /> <input type="text" id="pseudo" name="pseudo" size="60" class="largeinput<?php badfield(5); ?>" value="<?php eher("pseudo"); ?>"/> 
                            </p>
			<p>
                          <input type="checkbox" id="public" name="public"<?php ifcheck($_REQUEST["public"]); ?>/> <label for="public"><?php __("Please show me in the public donor list"); ?></label>
                            </p>
			<p>
                          <input type="checkbox" id="aboactu" name="aboactu"<?php ifcheck($_REQUEST["aboactu"]); ?>/> <label for="aboactu"><?php __("Please send me La Quadradure du Net's monthly newsletter"); ?></label>
                            </p>
                        </div>
                    </div>                            

	       <?php if ($_REQUEST["monthly"])  { ?>

                    <div class="row">
                        <div class="span6">
		       <h3><?php __("Bank information for your monthly donation"); ?></h3>
                            <p>
                                <label for="name"><?php __("Donor's Last Name:"); ?></label><br /> <input type="text" id="name" name="name" size="60" class="largeinput<?php badfield(102); ?>" value="<?php eher("name"); ?>"/> 
                            </p>
                            <p>
                                <label for="fname"><?php __("Donor's First Name:"); ?></label><br /> <input type="text" id="fname" name="fname" size="60" class="largeinput<?php badfield(102); ?>" value="<?php eher("fname"); ?>"/> 
                            </p>
                            <p>
                                <label for="titulaire"><?php __("Bank account holder's name<br />(if different):"); ?></label><br /> <input type="text" id="titulaire" name="titulaire" size="60" class="largeinput" value="<?php eher("titulaire"); ?>"/> 
                            </p>
                            <p>
                                <label for="rib-bq"><?php __("Bank account details:"); ?></label> <br />
				<input type="text" id="rib-bq" name="bq" maxlength="5" size="5" style="width: 50px" class="<?php badfield(array(108,109)); ?>" value="<?php eher("bq"); ?>" title="Code Banque" /> 
				<input type="text" id="rib-gu" name="gu" maxlength="5" size="5"  style="width: 50px" class="<?php badfield(array(108,109)); ?>" value="<?php eher("gu"); ?>" title="Code Guichet"/> 
				<input type="text" id="rib-cpt" name="cpt" maxlength="11" size="11"  style="width: 110px" class="<?php badfield(array(108,109)); ?>" value="<?php eher("cpt"); ?>" title="Numéro de compte"/> 
				<input type="text" id="rib-rib" name="rib" maxlength="2" size="2"  style="width: 20px" class="<?php badfield(array(108,109)); ?>" value="<?php eher("rib"); ?>" title="Clé RIB"/> 
                            </p>
                            <p>
                                <label for="bq_nom"><?php __("Financial Institution's Name:"); ?></label><br /> <input type="text" id="bq_nom" name="bq_nom" size="60" class="largeinput<?php badfield(104); ?>" value="<?php eher("bq_nom"); ?>"/> 
                            </p>
                            <p>
                                <label for="bq_addr"><?php __("Institution's postal address:"); ?></label> <br /><textarea type="text" id="bq_addr" name="bq_addr" class="<?php badfield(105); ?>"><?php eher("bq_addr"); ?></textarea> 
                            </p>
                            <p>
                                <label for="bq_cp"><?php __("Postal Code:"); ?></label><br /> <input type="text" id="bq_cp" name="bq_cp" size="5" class="<?php badfield(106); ?>" value="<?php eher("bq_cp"); ?>"/> 
                            </p>
                            <p>
                                <label for="bq_ville"><?php __("City:"); ?></label><br /> <input type="text" id="bq_ville" name="bq_ville" size="60" class="largeinput<?php badfield(107); ?>" value="<?php eher("bq_ville"); ?>"/> 
                            </p>
                            <p>
                                <label for="passwd"><?php __("Mot de passe :"); ?></label><br /> <input type="password" id="passwd" name="passwd" size="60" class="largeinput<?php badfield(array(110,111)); ?>" value="<?php eher("passwd"); ?>"/> 
                            </p>
                            <p>
                                <label for="passwd2"><?php __("De nouveau (vérification) :"); ?></label><br /> <input type="password" id="passwd2" name="passwd2" size="60" class="largeinput<?php badfield(array(110,111)); ?>" value="<?php eher("passwd2"); ?>"/> 
                            </p>
                        </div>
                    </div>                          
	     <?php } ?>


<?php  if ($_REQUEST["sum"] >= 50 || ($_REQUEST["sum"] >= 15 && $_REQUEST["monthly"])) { ?>

                    <div class="row">
                        <div class="span6">
                            <p>
                          <input type="checkbox" id="nocado" name="nocado"<?php ifcheck($_REQUEST["nocado"]); ?>/> <label for="nocado"><?php __("Please do <b>not</b> send me any goodies, so my entire donation can be used directly to help La Quadrature du Net."); ?></label>
                            </p>

                        </div>
                    </div>                          

<?php if ($_REQUEST["sum"] >= 50 || ($_REQUEST["sum"] >= 15 && $_REQUEST["monthly"])) { ?>

                    <div class="row" id="needcado">
                        <div class="span6">

		       <?php if ($_REQUEST["sum"] >= 100 || ($_REQUEST["sum"] >= 15 && $_REQUEST["monthly"])) { ?>
                            <p>
                                <label for="taille"><?php __("Style/Size of your pi-shirt:"); ?></label><br /> <select id="taille" name="taille" ><?php eoption($atailles,$_REQUEST["taille"]); ?></select> 
                            </p>
			     <?php } ?>
                            <p>
                                <label for="nomadresse"><?php __("Donor's name (for the parcel):"); ?></label><br /> <input type="text" id="nomadresse" name="nomadresse" size="60" class="largeinput<?php badfield(6); ?>" value="<?php eher("nomadresse"); ?>"/> 
                            </p>
                            <p>
                                <label for="adresse"><?php __("Donor's Postal Address:"); ?></label> <br /><textarea type="text" id="adresse" name="adresse" class="largeinput<?php badfield(6); ?>" ><?php eher("adresse"); ?></textarea> 
                            </p>
                            <p>
                                <label for="codepostal"><?php __("Donor's Zipcode:"); ?></label><br /> <input type="text" id="codepostal" name="codepostal" size="5" value="<?php eher("codepostal"); ?>" class="<?php badfield(6); ?>"/> 
                            </p>
                            <p>
                                <label for="ville"><?php __("Donor's City:"); ?></label><br /> <input type="text" id="ville" name="ville" size="60" class="largeinput<?php badfield(6); ?>" value="<?php eher("ville"); ?>"/> 
                            </p>
                            <p>
                                <label for="pays"><?php __("Donor's Country:"); ?></label><br /> <input type="text" id="pays" name="pays" size="60" class="largeinput<?php badfield(6); ?>" value="<?php eher("pays"); ?>"/> 
                            </p>
		       </div>
                    </div>                          
        
	     <?php } /* gift needs postal address ? */ ?>
	     <?php } /* gift requested ? */ ?>

                    <div class="row">
                        <div class="span6">
                            <p>
                                <input type="submit" class="btn btn-large btn-inverse" value="<?php __("Yes, make this donation to La Quadrature du Net"); ?> &gt;&gt;"/>                                
                            </p>
			    <p>
<div class="information">
<?php 
   if ($_REQUEST["monthly"]) { 
   __("Vous allez être redirigé vers le site de FDNN (Fonds de Défense de la Neutralité du Net)");
   } else {
   __("You will now be redirected to our bank's server (Crédit Mutuel) in the name of FDNN (Fonds de Défense de la Net Neutralité), the NGO which manages La Quadrature du Net's accounts.");
   } 
?>
</div>
			    </p>
                        </div>
                    </div>                          
        
                    </form><!-- donation form -->
                </div>
