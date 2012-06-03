<?php


function ifcheck($str) {
  if ($str) {
    echo " checked=\"checked\"";
  }
}


function eher($str) {
  echo htmlentities($_REQUEST[$str],ENT_COMPAT,"UTF-8");
}
function ehe($str) {
  echo htmlentities($str,ENT_COMPAT,"UTF-8");
}

function __($str) {
  echo _($str);
}


/* select_values($arr,$cur) echo des <option> du tableau $values ou de la table sql $values
   selectionne $current par defaut. Par defaut prends les champs 0 comme id et 1 comme
   donnees pour la table. sinon utilise $info[0] et $info[1].
*/
function eoption($values,$cur,$info="") {
  if (is_array($values)) {
    foreach ($values as $k=>$v) {
      echo "<option value=\"$k\"";
      if ($k==$cur) echo " selected=\"selected\"";
      echo ">".$v."</option>";
    }
  } else {
    if (is_array($info)) {
      $r=mqlist("SELECT ".$info[0].", ".$info[1]." FROM $values ORDER BY ".$info[0].";");
    } else {
      $r=mqlist("SELECT * FROM $values ORDER BY 2;");
    }

    foreach ($r as $c) {
      echo "<option value=\"".$c[0]."\"";
      if ($c[0]==$cur) echo " selected=\"selected\"";
      echo ">".sts($c[1])."</option>";
    }
  }
}


$asums=array(10,25,50,100,250); // standard sums

$errors = array(
      0 => _("You should now be redirected to the payment process. If not, please click on previous in your browser."),
      //t: Vous devriez être redirigé vers le système de paiement. Sinon, cliquez sur ce précédent bouton.
      1 => _("An error happened while handling the form. Please contact us if the error persists."),
      //t: Une erreur est intervenue dans le formulaire. Contactez-nous si cela persiste !
      2 => _("Sorry, we can not accept donations under 5€."),
      //t: Les dons inférieurs à 5€ ne sont pas possibles.
      3 => _("Please enter an email address (it can be a disposable one) so we can send you our warmest thank you and your pi-ploma!"),
      //t: Laissez-nous une adresse e-mail, éventuellement jetable, pour que l'on puisse vous envoyer nos remerciements et votre pi-plome&nbsp;!
      4 => _("Your email address seems incorrect (accentuated and special characters can not be used)."),
      //t: Votre adresse e-mail semble incorrecte (les accents et caract&egrave;res sp&eacute;ciaux sont interdits).
      5 => _("Please give as at least a nickname to personnalise your pi-ploma!"),
      //t: Veuillez au moins laisser un pseudonyme, pour la personnalisation de votre pi-plome&nbsp;!
      6 => _("Your complete address is needed to send you your goodies!"),
      //t: Votre adresse complète est nécessaire pour l'envoi de vos cadeaux&nbsp;!
      7 => _("We're experiencing technical difficulties, please try again in a few moments…"),
      //t: Probl&egrave;me technique, merci de r&eacute;essayer plus tard ...
      8 => _("Our online payment processor is unavailable right now. We have been notified of the problem and are working hard to get it back up and running quickly. Please try again in a few hours. Sorry and thank you!"),
      //t: Notre système de paiement en ligne est indisponible pour l'instant. Nous avons été prévenu de ce problème et faisons le nécessaire pour qu'il revienne rapidement. Réessayez d'ici quelques heures. Merci !
      101 => "Veuillez préciser le titulaire du compte bancaire.",
      102 => "Veuillez préciser votre nom et votre prénom, pour l'autorisation de prélèvement.", // nom
      103 => "Veuillez préciser votre nom et votre prénom, pour l'autorisation de prélèvement.", // prenom
      104 => "Nous avons besoin du nom de votre banque.",
      105 => "Nous avons besoin de l'adresse complète de votre banque.",
      106 => "Nous avons besoin de l'adresse complète de votre banque.", // CP
      107 => "Nous avons besoin de l'adresse complète de votre banque.", // Ville
      108 => "Votre RIB semble incorrect. Merci de le vérifier.", // un element de rib est vide
      109 => "Votre RIB semble incorrect. Merci de le vérifier.",
      110 => "Vous devez entrer un mot de passe pour la création du compte de donateur FDNN. Entrez deux fois le même mot de passe.",
      111 => "Votre mot de passe doit faire entre 6 et 20 caractères.",
      112 => "Une adresse email valide est indispensable dans le cas d'un don mensuel.",
      113 => "Votre adresse complète est nécessaire pour l'enregistrement d'un don mensuel.",

    );


$atailles = array(
		 1 => _('Male, Size S'),
		 //t: Coupe Homme, Taille S
		 2 => _('Male, Size M'),
		 //t: Coupe Homme, Taille M
		 3 => _('Male, Size L'),
		 //t: Coupe Homme, Taille L
		 4 => _('Male, Size XL'),
		 //t: Coupe Homme, Taille XL
		 5 => _('Female, Size S'),
		 //t: Coupe Femme, Taille S
		 6 => _('Female, Size M'),
		 //t: Coupe Femme, Taille M
		 7 => _('Female, Size L'),
		 //t: Coupe Femme, Taille L
		 8 => _('Female, Size XL'),
		 //t: Coupe Femme, Taille XL
		 );
