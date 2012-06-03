            <div class="row donations">
                <div class="span6">

                    <div class="row">
                        <div class="span6">
                            <h2>
                            <?= $t->t('support_us_step_2') ?>
                            </h2>
                        </div>
                    </div>
                    <form method="post" action="/#progressbar" name="f1" id="f1">
                    <div class="row">
                        <div class="span6">


<?php

$content .= <<<EOF
  <form action="" method="post">
    <input type="hidden" name="etape2" value="1"/>
    <input type="hidden" name="sum" value="$sum"/>
    <input type="hidden" name="monthly" value="$don_mensuel"/>
    <ul id="etape2inputs">
EOF;
      $content .= '<li>' . t('Make a donation of:') . ' <b>' . $sum . '&nbsp;&euro;</b></li>';
      //t: Montant du don&nbsp;:

      if ($don_mensuel)
      {
        $content .= "<li>" . t("You wish to support us with a monthly donation, thank you for your kind support. For your convenience, you will have to possibility to pause or stop this donation each month.") . "</li>";
	//t: Vous souhaitez effectuer ce don tous les mois, La Quadrature du Net vous en remercie&nbsp;! La possibilité vous sera bien entendu donnée, chaque mois, de faire une pause ou stoper ce don récurrent.
      }
      $content .= '<li class="input-text input-email">';
      $content .= '<label for="email" >' . t('Email:') . '</label>';
      //t: E-mail&nbsp;:
      $content .= '<input type="email" name="email" id="email" value="' . $_POST['email'] . '"/></li>';

      $content .= '<li class="input-text input-pseudo">';
      $content .= '<label for="pseudo" class="text pseudo">' . t('First Name, Full Name or Nickname:') . '</label>';
      //t: Prénom, nom ou pseudonyme&nbsp;:
      $content .= '<input type="text" name="pseudo" id="pseudo" value="' . $_POST['pseudo'] . '"/></li>';

      $content .= '<li class="input-box input-public">';
      $content .= '<input type="checkbox" name="public" id="donpublic"/>';
      $content .= '<label for="donpublic">' . t("Please add my name to the public list of donators") . '</label></li>';
      //t: Je souhaite apparaitre dans la liste des soutiens
      
      $content .= '<li class="input-box input-aboactu">';
      $content .= '<label for="aboactu">' . t("Please send me La Quadradure du Net's monthly newsletter") . '</label>';
      //t: Je souhaite recevoir la lettre mensuelle d'actualité de La Quadrature du Net
      $content .= '<input type="checkbox" name="aboactu" id="aboactu"/></li>';

      if ($don_mensuel)
      {
        $content .= '<li class="input-text">';
        $content .= '<label for="name" class="text">' . t("Donor's Last Name:") . '</label>';
	//t: Nom&nbsp;:
        $content .= '<input type="text" id="name" name="name"  value="' . $_POST['name'] . '"/></li>';

        $content .= '<li class="input-text">';
        $content .= '<label for="fname" class="text">' . t("Donor's First Name:") . '</label>';
	//t: Prénom&nbsp;:
        $content .= '<input type="text" id="fname" name="fname"  value="' . $_POST['fname'] . '"/></li>';

        $content .= '<li class="input-text">';
        $content .= '<label for="titulaire" class="text">' . t("Bank account holder's name<br />(if different):") . '</label>';
	//t: Titulaire du compte bancaire<br />(si différent)&nbsp;:
        $content .= '<input type="text" id="titulaire" name="titulaire"  value="' . $_POST['titulaire'] . '"/></li>';

        $content .= '<li class="input-rib">';
        $content .= '<label for="rib-bq" class="text rib">' . t("Bank account details:") . '</label>';
	//t: RIB&nbsp;:
        $content .= '<input type="text" id="rib-bq" name="bq" maxlength="5" size="5" value="' . $_POST['bq'] . '"/>';
        $content .= '<input type="text" id="rib-gu" name="gu" maxlength="5" size="5" value="' . $_POST['gu'] . '"/>';
        $content .= '<input type="text" id="rib-cpt" name="cpt" maxlength="11" size="11" value="' . $_POST['cpt'] . '"/>';
        $content .= '<input type="text" id="rib-rib" name="rib" maxlength="2" size="2" value="' . $_POST['rib'] . '"/>';
        $content .= '</li>';
        
        $content .= '<li class="input-text">';
        $content .= '<label for="bq_nom">' . t("Financial Institution's Name:") . '</label>';
	//t: Établissement teneur du compte&nbsp;:
        $content .= '<input type="text" name="bq_nom" id="bq_nom"  value="' . $_POST['bq_nom'] . '"/></li>';
        
        $content .= '<li class="input-text">';
        $content .= '<label for="bq_addr">' . t("Institution's postal address:") . '</label>';
	//t: Adresse de la banque&nbsp;:
        $content .= '<textarea name="bq_addr" id="bq_addr">' . $_POST['bq_addr'] . '</textarea></li>';
        
        $content .= '<li class="input-text">';
        $content .= '<label for="bq_cp" class="text codepostal">' . t("Postal Code:") . '</label>';
	//t: Code postal&nbsp;:
        $content .= '<input type="text" id="bq_cp" name="bq_cp" value="' . $_POST['bq_cp'] . '"/></li>';
        
        $content .= '<li class="input-text">';
        $content .= '<label for="bq_ville" class="text ville">' . t("City:") . '</label>';
	//t: Ville&nbsp;:
        $content .= '<input type="text" id="bq_ville" name="bq_ville"  value="' . $_POST['bq_ville'] . '"/></li>';
 	
	$content .= '<li class="input-text">';
        $content .= '<label for="passwd" class="text passwd">' . t("Mot de passe :") . '</label>';
        $content .= '<input type="password" id="passwd" name="passwd"  value=""/></li>';
      
      	$content .= '<li class="input-text">';
        $content .= '<label for="passwd2" class="text passwd">' . t("De nouveau (vérification) :") . '</label>';
        $content .= '<input type="password" id="passwd2" name="passwd2"  value=""/></li>';

	}
      if ($sum >= 50 || ($sum >= 15 && $don_mensuel))
      {
        $content .= '<li class="input-box input-nocado">';
        $content .= '<label for="nocado">' . t("Please do not send me any goodies, so my entire donation can be used directly to help La Quadrature du Net.") . '</label>';
	//t: Je ne souhaite pas recevoir de cadeaux, afin que l'intégralité de mon don serve à La Quadrature du Net
        $content .= '<input type="checkbox" name="nocado" id="nocado"/></li>';
        if ($sum >= 100 || ($sum >= 15 && $don_mensuel))
	{
        $content .= '<li class="input-text input-select input-taille donli-sendmecado">';
        $content .= '<label for="taille">' . t("Style/Size of your pi-shirt:") . '</label>';
	//t: Coupe/Taille de votre pi-shirt&nbsp;:
        $content .= '<select name="taille" id="taille">';

        $tailles = array(
          1 => t('Male, Size S'),
	  //t: Coupe Homme, Taille S
          2 => t('Male, Size M'),
	  //t: Coupe Homme, Taille M
          3 => t('Male, Size L'),
	  //t: Coupe Homme, Taille L
          4 => t('Male, Size XL'),
	  //t: Coupe Homme, Taille XL
          5 => t('Female, Size S'),
	  //t: Coupe Femme, Taille S
          6 => t('Female, Size M'),
	  //t: Coupe Femme, Taille M
          7 => t('Female, Size L'),
	  //t: Coupe Femme, Taille L
          8 => t('Female, Size XL'),
	  //t: Coupe Femme, Taille XL
        );
        for ($i = 1 ; $i <= 8 ; $i++)
        {
          $selected = ($_POST['taille'] == $i) ? ' selected=selected' : '';
          $content .= '<option value="' . $i . '"' . $selected . '>' . $tailles[$i] . '</option>';
        }
        $content .= '</select></li>';
	}
	}
      if ($don_mensuel || $sum >= 50) 
      {
	$sendmecadoclass = (!$don_mensuel)?'donli-sendmecado':'';
        $content .= '<li class="input-text '.$sendmecadoclass.'">';
        $content .= '<label for="adressse"  class="text adresse">' . t("Donor's Postal Address:") . '</label>';
	//t: Votre adresse postale&nbsp;:
        $content .= '<textarea name="adresse" id="adresse">' . $_POST['adresse'] . '</textarea></li>';
        
        $content .= '<li class="input-text '.$sendmecadoclass.'">';
        $content .= '<label for="codepostal" class="text codepostal">' . t("Donor's Postcode:") . '</label>';
	//t: Code postal&nbsp;:
        $content .= '<input type="text" id="codepostal" name="codepostal" value="' . $_POST['codepostal'] . '" /></li>';
        $content .= '<li class="input-text '.$sendmecadoclass.'">';
        $content .= '<label for="ville" class="text ville">' . t("Donor's City:") . '</label>';
	//t: Ville&nbsp;:
        $content .= '<input type="text" id="ville" name="ville"  value="' . $_POST['ville'] . '"/></li>';
        
        $content .= '<li class="input-text '.$sendmecadoclass.'">';
        $content .= '<label for="pays" class="text pays">' . t("Donor's Country:") . '</label>';
	//t: Pays&nbsp;:
        $content .= '<input type="text" id="pays" name="pays" value="' . $_POST['pays'] . '"/></li>';
      }
      $content .= '</ul>';
      $content .= '<p class="monthlychoice">';
      $content .= '<input style="float:right" type="submit" value="' . t("Yes, make this donation to La Quadrature du Net") . '"/>';
      //t: Je confirme ce don à La Quadrature du Net
      if (!$don_mensuel) 
      {
      	$content .= '<b>' . t("You will now be redirected to our bank's server (Crédit Mutuel) in the name of FDNN (Fonds de Défense de la Net Neutralité), the NGO which manages La Quadrature du Net's accounts.") . '</b>';
	//t: Vous allez être redirigé vers le serveur de notre banque (le Crédit Mutuel) au nom de l'association FDNN (Fonds de Défense de la Neutralité du Net)
      }
      else
      {
	      $content .= '<b>' . t("Vous allez être redirigé vers le site de FDNN (Fonds de Défense de la Neutralité du Net).") . '</b>';
      }
      $content .= '</p>';
      $content .= '</form>';

?>


                    

                            <div class="span1 amounts_holder">
	       <input type="radio" name="sum" value="10" id="sum10"<?php ifcheck($_REQUEST["sum"]=="10"); ?> class="predef"  />
                                    <label for="sum10">10&nbsp;&euro;</label>

                                    <div class="alert" id="piplome_pdf" style="display:none">
                                        <p class="cadeaux"><img src="images/upiplomepdf.png"></p>
                                        <p>En remerciement de votre don, vous recevrez 1 000 décimales de π 
                                            dans un certificat personnalisé, envoyé <strong>par mail au format PDF</strong>.</p>
                                    </div>
                            </div>
                            <div class="span1 amounts_holder">
                                    <input type="radio" name="sum" value="25" id="sum25"<?php ifcheck($_REQUEST["sum"]=="25"); ?> class="predef" />
                                    <label for="sum25">25&nbsp;&euro;</label>
                                    <div class="alert" id="piplome_pdf2" style="display:none">
                                        <p class="cadeaux"><img src="images/upiplomepdf.png"></p>
                                        <p>En remerciement de votre don, vous recevrez 1 000 décimales de π 
                                            dans un certificat personnalisé, envoyé <strong>par mail au format PDF</strong>.</p>
                                    </div>
                            </div>
                            <div class="span1 amounts_holder">
                                    <input type="radio" name="sum" value="50" id="sum50"<?php ifcheck($_REQUEST["sum"]=="50"); ?> class="predef" />
                                    <label for="sum50">50&nbsp;&euro;</label>
                                    <div class="alert " id="piplome" style="display:none">
                                        <p class="cadeaux"><img src="images/upiplome.png"></p>
                                        <p>En remerciement de votre don, vous recevrez 1 000 décimales de π 
                                            dans un certificat personnalisé, envoyé <strong>par courriel au format PDF 
                                                + un  tirage original de qualité supérieure</strong>.
                                        </p>
                                    </div>    
                            </div>

                            <div class="span1 amounts_holder">
                                    <input type="radio" name="sum" value="100" id="sum100"<?php ifcheck($_REQUEST["sum"]=="100"); ?> class="predef" />
                                    <label for="sum100">100&nbsp;&euro;</label>
                                    <div class="alert " id="piplome_ts"  style="display:none">
                                        <p class="cadeaux"><img src="images/upiplome.png">
                                            <span class="plus">+</span><img src="images/upishirt.png"></p>
                                        <p>En remerciement de votre don, vous recevrez 1 000 
                                            décimales de π dans un certificat personnalisé, 
                                            envoyé par courriel au format PDF + un  
                                            tirage original de qualité supérieure + un 
                                            'pi-shirt' portant le logo de La Quadrature 
                                            du Net !</p></div>    
                            </div>
                            <div class="span1 amounts_holder">
                                    <input type="radio" name="sum" value="250" id="sum250"<?php ifcheck($_REQUEST["sum"]=="25"); ?> class="predef" />
                                    <label for="sum250">250&nbsp;&euro;</label>
                                    <div class="alert " id="piplome_ts2"  style="display:none">
                                        <p class="cadeaux"><img src="images/upiplome.png">
                                            <span class="plus">+</span><img src="images/upishirt.png"></p>
                                        <p>En remerciement de votre don, vous recevrez 1 000 
                                            décimales de π dans un certificat personnalisé, 
                                            envoyé par courriel au format PDF + un  
                                            tirage original de qualité supérieure + un 
                                            'pi-shirt' portant le logo de La Quadrature 
                                            du Net !</p></div>    
                            </div>
                            <div class="span1 amounts_holder othersum">
				    <input type="radio" name="sum" value="-1" id="sum1"<?php ifcheck(!in_array($_REQUEST["sum"],$asums)); ?> />
                                    <input type="text" name="othersum" value="<?php if (in_array($_REQUEST["sum"],$asums)) echo $t->t('other_placeholder'); else echo intval($_REQUEST["sum"]); ?>" />
                                    <label for="sum1">&euro;</label>
                                    <div class="alert " id="nocado5" style="display:none">
				      Entrez le montant de votre don au choix. Notez que 
                                        nous ne pouvons pas accepter les soutiens 
                                        inf&eacute;rieurs &agrave; 5&nbsp;&euro; 
                                        (frais bancaires trop importants). 
                                        Vous pouvez toujours nous aider par 
                                        <a href="/fr/participer">votre action</a>&nbsp;!
                                    </div>
                            </div>
                        </div>                            
                    </div>                            
                    <div class="row">
                        <div class="span6">
                                <div class="giftContainer ui-widget-content" style="display:none;"></div>
                        </div>                            
                    </div>                            
                    <div class="row">
                        <div class="span6 checkbox_holder">
                                    <input type="checkbox" id="monthly" name="monthly"<?php ifcheck($_REQUEST["monthly"]); ?>/> <label for="monthly"><?= $t->t('recurent_donation') ?></label>
                        </div>
                    </div>                            
                    <div class="row">
                        <div class="span6">
                            </p>
                                <input type="submit" class="btn btn-large btn-inverse" value="Je soutiens La Quadrature du Net &gt;&gt;"/>
                        </div>
                    </div>
                    </form><!-- donation form -->
                </div>
