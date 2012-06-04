<?php 


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

$actapoints = array(
		    _("Information since 2008, a web-dossier, 120 press releases")
		    => _("La Quadrature du Net documents and analyzes each and every <a href=\"http://www.laquadrature.net/wiki/ACTA:_Procedure_in_the_European_Parliament\">step</a> of <a href=\"http://lqdn.fr/acta\">ACTA</a> since <a href=\"http://www.laquadrature.net/wiki/index.php?title=ACTA&oldid=22271\">June 2008</a>. Through <a href=\"http://www.laquadrature.net/en/0118-version-of-acta-consolidated-text-leaks\">leaking drafts</a>, <a href=\"http://www.laquadrature.net/en/acta-a-global-threat-to-freedoms-open-letter\">alerting</a> Members of the European Parliament and publishing various <a href=\"http://www.laquadrature.net/en/acta-updated-analysis-of-the-final-version\">analysis</a> and press releases, La Quadrature helped raising awareness among citizens and organizations."),
		    _("Citizen actions in the European Parliament")
		    => _("During the various stages of the parliamentary process of ACTA, <a href=\"http://mediakit.laquadrature.net/view.php?id=777\">dozens of citizens</a> from <a href=\"http://mediakit.laquadrature.net/view.php?id=779\">all around Europe</a> were flown in the European Parliament by La Quadrature's fundings and logisistics. This allowed important <a href=\"http://www.laquadrature.net/en/important-victories-on-acta-moving-on-to-final-steps\">victories</a> all along the process, from <a href=\"http://www.laquadrature.net/en/encouraging-draft-acta-report-still-under-copyright-lobbies-influence\">committee</a> to <a href=\"http://www.laquadrature.net/en/important-victories-on-acta-moving-on-to-final-steps\">committe</a> in the European Parliament."),
		    _("Animated movie seen more than 2 million times")
		    => _("The 2 minutes <a href=\"http://www.laquadrature.net/en/video-acta-get-informed-take-action\">movie</a>  explained in very simple terms ACTA's dangers for Internet users, the distribution of seeds and generic medicines, while calling for action. It helped spread the word on ACTA through mainstream media, therefore reaching a wider audience with powerful symbolism and messages. It got spontaneously translated in 15 languages."),
		    _("Let's destroy it and build a post-ACTA world!")
		    => _("Citizens must stay mobilized until the <a href=\"https://memopol.lqdn.fr/europe/parliament/committee/INTA/\">INTA</a> committee's <a href=\"http://www.europarl.europa.eu/sides/getpdf.do?type=COMPARL&reference=PE-486.174&format=PDF&language=EN&secondRef=02\">report</a> is finalized and voted (21st of June). The final consent vote will be hold in the early July plenary (3, 4 or 5th of July). This final step will be the occasion for the Members of the EU Parliament to kill ACTA once and for all, therefore opening the way for a positive reform of copyright."),
		    );

$beyondpoints = array(
		      _("Our cultural practices (sharing, remix, etc) must be legal")
		      => _("Editing and modifying artworks (remix) has become a mean of  expression for a whole generation. The sharing of files, between individuals and not for profit, is an essential way to access and share culture. Our cultural practices must be be encouraged and protected instead of being enforced. The war on sharing has to end; copyright has to evolve."),
		      _("Safeguard a universal Internet and free expression online")
		      => _("The network's decentralized architecture is key to freedom of  communication and online innovation. It must be protected, on both landline and mobile network as operators increasingly restrict their users' communications. <a href=\"http://www.laquadrature.net/en/Net_neutrality\">Net neutrality</a> and other <a href=\"http://www.laquadrature.net/en/proposals\">policies</a> must guarantee the capacity to create, access and share knowledge and information."),
		      _("Building tools for empowering citizens to change things")
		      => _("La Quadrature du Net provides tools to citizen willing to take action and participate in public debate. Generic tools such as <a href=\"https://memopol.lqdn.fr\">Political Memory</a>, La Quadrature's <a href=\"http://mediakit.laquadrature.net/\">Mediakit</a> the <a href=\"http://piphone.lqdn.fr\">Pi-Phone</a> or ad-hoc campaigning tools such as <a href=\"http://respectmynet.eu\">Respect My Net</a> are developped in the course of campaigning and participate to technical and political empowerment of individual citizens."),
		      _("Funding full-time activists and volunteers' actions")
		      => _("La Quadrature du Net's infrastructure allow 3 full time, 1 part time activists and 1 intern to cooperate in a common space in Paris. Volunteers can participate there in workshops and campaigning. Funding also allows travelling to Brussels from all over Europe, in order to bring citizen to the European Parliament."),
		      );