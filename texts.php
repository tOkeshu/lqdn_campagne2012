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
		    _("Information")
		    => _("<strong>Action since 2008, a web-dossier, 120 press releases</strong><br> La Quadrature du Net has documented and analyzed each and every <a target=\"_blank\" href=\"http://www.laquadrature.net/wiki/ACTA:_Procedure_in_the_European_Parliament\" title=\"www.laquadrature.net/wiki/ACTA:_Procedure_in_the_European_Parliament\">step</a> of <a target=\"_blank\" href=\"http://lqdn.fr/acta\" title=\"lqdn.fr/acta\">ACTA</a> since <a target=\"_blank\" href=\"http://www.laquadrature.net/en/squaring-net-debate-open\" title=\"www.laquadrature.net/en/squaring-net-debate-open\">June 2008</a>. Through <a target=\"_blank\" href=\"http://www.laquadrature.net/en/0118-version-of-acta-consolidated-text-leaks\" title=\"www.laquadrature.net/en/0118-version-of-acta-consolidated-text-leaks\">leaking drafts</a>, <a target=\"_blank\" href=\"http://www.laquadrature.net/en/acta-a-global-threat-to-freedoms-open-letter\" title=\"www.laquadrature.net/en/acta-a-global-threat-to-freedoms-open-letter\">alerting</a> Members of the European Parliament and publishing various <a target=\"_blank\" href=\"http://www.laquadrature.net/en/acta-updated-analysis-of-the-final-version\" title=\"www.laquadrature.net/en/acta-updated-analysis-of-the-final-version\">analyses</a> and <a target=\"_blank\" href=\"http://www.laquadrature.net/en/quad-news/acta\" title=\"www.laquadrature.net/en/quad-news/acta\">press releases</a>, La Quadrature helped raise awareness among <a target=\"_blank\" href=\"http://www.laquadrature.net/en/acta-why-we-take-to-the-streets\" title=\"www.laquadrature.net/en/acta-why-we-take-to-the-streets\">citizens</a> and <a target=\"_blank\" href=\"http://www.laquadrature.net/wiki/Against_ACTA\" title=\"www.laquadrature.net/wiki/Against_ACTA\">organizations</a>, and worked from within the EU Parliament to defeat ACTA."),
		    _("Action")
		    => _("<strong>Citizen action in the European Parliament</strong><br> Throughout the various stages of ACTA's parliamentary process, <a target=\"_blank\" href=\"http://mediakit.laquadrature.net/view.php?id=777\" title=\"mediakit.laquadrature.net/view.php?id=777\">dozens of citizens</a> from <a target=\"_blank\" href=\"http://mediakit.laquadrature.net/view.php?id=779\" title=\"mediakit.laquadrature.net/view.php?id=779\">all around Europe</a> were flown to the EU Parliament thanks to La Quadrature's funding and logisistics. This enabled important <a target=\"_blank\" href=\"http://www.laquadrature.net/en/eu-parliament-will-vote-on-acta-without-delay\" title=\"www.laquadrature.net/en/eu-parliament-will-vote-on-acta-without-delay\">victories</a> at every <a target=\"_blank\" href=\"http://www.laquadrature.net/en/important-victories-on-acta-moving-on-to-final-steps\" title=\"www.laquadrature.net/en/important-victories-on-acta-moving-on-to-final-steps\">step of the process</a>, in all the <a target=\"_blank\" href=\"http://www.laquadrature.net/en/encouraging-draft-acta-report-still-under-copyright-lobbies-influence\" title=\"www.laquadrature.net/en/encouraging-draft-acta-report-still-under-copyright-lobbies-influence\">committees</a> and with all the political groups of the EU Parliament."),
		    _("Campaigns")
		    => _("<strong>An animated movie seen over 2.5 million times</strong><br> \"<a target=\"_blank\" href=\"http://www.laquadrature.net/en/video-acta-get-informed-take-action\" title=\"www.laquadrature.net/en/video-acta-get-informed-take-action\">NO to ACTA</a>\" explains in 2 minutes and in simple terms the dangers of ACTA for Internet users as well as for access to medicines, while calling for action. It helped spread the word on ACTA in mainstream media, reaching a wider audience through powerful symbols and messages. It was spontaneously translated into 15 languages by volunteers."),
		    _("Mobilisation")
		    => _("<strong>Let's bury it and build a post-ACTA world!</strong><br> Citizens must <a target=\"_blank\" href=\"http://www.laquadrature.net/en/over-1-million-views-for-no-to-acta-video-now-take-action\" title=\"www.laquadrature.net/en/over-1-million-views-for-no-to-acta-video-now-take-action\">remain mobilized</a> until the <a target=\"_blank\" href=\"https://memopol.lqdn.fr/europe/parliament/committee/INTA/\" title=\"memopol.lqdn.fr/europe/parliament/committee/INTA/\">INTA</a> committee's <a target=\"_blank\" href=\"http://www.europarl.europa.eu/sides/getpdf.do?type=COMPARL&reference=PE-486.174&format=PDF&language=EN&secondRef=02\" title=\"www.europarl.europa.eu/sides/getpdf.do?type=COMPARL&reference=PE-486.174&format=PDF&language=EN&secondRef=02\">report</a> is finalized and adopted (20th June), and until the final consent vote in plenary (3, 4 or 5th of July). This final step will allow Members of the EU Parliament to destroy ACTA once and for all, <a target=\"_blank\" href =\"http://www.laquadrature.net/en/a-strategy-looking-through-acta-and-beyond\">paving the way</a> for a positive reform of copyright."),
		    );

$beyondpoints = array(
		      _("Sharing")
		      => _("<strong>Our cultural practices (sharing, remixing, etc.) must be made legal!</strong><br> Editing and modifying works of art (remix) has become a means of expression for a whole generation. The <a target=\"_blank\" href=\"http://www.laquadrature.net/en/citizens-artists-and-consumers-in-favour-of-the-legal-recognition-of-file-sharing\" title=\"www.laquadrature.net/en/citizens-artists-and-consumers-in-favour-of-the-legal-recognition-of-file-sharing\">sharing of files</a>, between individuals and not for profit, is an essential way to access and share culture. Our cultural practices must be <a target=\"_blank\" href=\"http://www.laquadrature.net/en/future-of-copyright-la-quadrature-calls-on-the-commission-to-reassert-the-publics-rights>encouraged and protected</a> instead of being <a target=\"_blank\" href=\" title=\"www.laquadrature.net/en/future-of-copyright-la-quadrature-calls-on-the-commission-to-reassert-the-publics-rights>encouraged and protected</a> instead of being <a target=\"_blank\" href=\"http://www.laquadrature.net/en/the-pirate-bay-decision-or-the-political-persecution-of-sharing\"vilified</a> and <a target=\"_blank\" href=\"http://www.laquadrature.net/en/notice-action-eu-commission-must-put-freedom-of-expression-first\" title=\"www.laquadrature.net/en/notice-action-eu-commission-must-put-freedom-of-expression-first\">repressed</a>. The <a target=\"_blank\" href=\"http://www.laquadrature.net/en/megaupload-copyright-industry-at-war-against-monsters-of-its-own-making\" title=\"www.laquadrature.net/en/megaupload-copyright-industry-at-war-against-monsters-of-its-own-making\">war on sharing</a> has to end; <a target=\"_blank\" href=\"http://www.laquadrature.net/en/sharing-is-legitimate\" title=\"www.laquadrature.net/en/sharing-is-legitimate\">copyright must evolve</a>."),
		      _("Freedom Online")
		      => _("<strong>Safeguard a universal Internet and free expression online</strong><br> The <a target=\"_blank\" href=\"http://www.laquadrature.net/en/eu-governments-oppose-an-open-wireless-infrastructure\" title=\"www.laquadrature.net/en/eu-governments-oppose-an-open-wireless-infrastructure\">network's decentralized architecture</a> is key to <a target=\"_blank\" href=\"http://www.laquadrature.net/en/net-filtering-violates-the-rule-of-law\" title=\"www.laquadrature.net/en/net-filtering-violates-the-rule-of-law\">freedom of communication and online innovation</a>. It must be protected, on <a target=\"_blank\" href=\"http://www.laquadrature.net/en/more-than-half-of-the-eu-with-restrictions-to-net-access-what-will-neelie-kroes-do\" title=\"www.laquadrature.net/en/more-than-half-of-the-eu-with-restrictions-to-net-access-what-will-neelie-kroes-do\">both landline and mobile networks</a>, from operators who <a target=\"_blank\" href=\"http://www.laquadrature.net/en/eu-telecom-regulators-wake-up-call-on-net-neutrality\" title=\"www.laquadrature.net/en/eu-telecom-regulators-wake-up-call-on-net-neutrality\">increasingly restrict</a> their users' communications. <a target=\"_blank\" href=\"http://www.laquadrature.net/en/Net_neutrality\" title=\"www.laquadrature.net/en/Net_neutrality\">Net neutrality</a> and other <a target=\"_blank\" href=\"http://www.laquadrature.net/en/proposals\" title=\"www.laquadrature.net/en/proposals\">policies</a> must guarantee by law the capacity to create, access and share knowledge and information."),
		      _("Empowerment")
		      => _("<strong>Building tools empowering citizens to change things</strong><br> La Quadrature du Net provides <a target=\"_blank\" href=\"http://www.laquadrature.net/en/tools\" title=\"www.laquadrature.net/en/tools\">tools</a> for citizens who want to take action and participate in the public debate. Tools such as <a target=\"_blank\" href=\"https://memopol.lqdn.fr\">Political Memory</a>, La Quadrature's <a target=\"_blank\" href=\"http://mediakit.laquadrature.net/\">Mediakit</a> the <a target=\"_blank\" href=\"http://piphone.lqdn.fr\">Pi-Phone</a> or ad-hoc campaigning tools such as <a target=\"_blank\" href=\"http://respectmynet.eu\">Respect My Net</a> are under constant development, in track with La Quadrature's campaigning, and participate in the technical and political empowerment of <a target=\"_blank\" href=\"http://www.laquadrature.net/en/how-to-participate\" title=\"www.laquadrature.net/en/how-to-participate\">citizens</a>."),
		      _("Infrastructure")
		      => _("<strong>Funding full-time activists and volunteers' actions</strong><br> La Quadrature du Net's infrastructure allows three full-time and one part-time activists as well as an intern to work together out of a shared space/office in Paris. This space enables volunteers to participate in workshops and campaigning. Funding also serves to organize volunteer action such as bringing citizens from all over Europe to the EU Parliament."),
		      );

