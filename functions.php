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

/* AddSlashes contextuel : ne fait addslashes que si magic-quotes est OFF */
if (get_magic_quotes_gpc()) {
	function asl($str) {
		return $str;
	}
} else {
	function asl($str) {
		return addslashes($str);
	}
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

/* Check an email address, use checkloginmail and checkfqdn */
function checkmail($mail) {
  // Retourne 0 si tout va bien, sinon retourne un code erreur...
  // 1 s'il n'y a rien devant l'@
  // 2 3 ou 4 si le domaine est incorrect.
  // 5 s'il y a caractï¿½res interdits dans la partie gauche du @
  // 6 si le mail contient aucun ou plus d'un @
  $t=explode("@",$mail);
  if (count($t)!=2) {
    return 6;
  }
  $c=checkfqdn($t[1]);
  if ($c)
    return $c;
  // Verification de la partie gauche :
  if (!checkloginmail($t[0])) {
    if ($t[0]=="") {
      return 1;
    } else {
      return 5;
    }
  }
  return 0;
}


/* Check that a domain name is fqdn compliant */
function checkfqdn($fqdn) {
  // (RFC 1035 http://www.cis.ohio-state.edu/cgi-bin/rfc/rfc1035.html)
  // Retourne 0 si tout va bien, sinon, retourne un code erreur...
  // 1. Nom de domaine complet trop long.
  // 2. L'un des membres est trop long.
  // 3. Caractere interdit dans l'un des membres.
  if (strlen($fqdn)>255)
    return 1;
  $members=explode(".", $fqdn);
  if (count($members)>=1) {
    reset($members);
    while (list ($key, $val) = each ($members)) {
      if (strlen($val)>63)
        return 2;
      if (!eregi("^[a-z0-9][a-z0-9-]*[a-z0-9]$",$val)) {
        /*"*/                  return 3;
      }
    }
  } else {
    return 4;
  }
  return 0;
}

/* Check a login mail ... mhhh returns true ;) */
function checkloginmail($mail) {
  if (strpos($mail,"\n")!==false || strpos($mail,"\r")!==false) return false;
  return true;
  /*
  if (!ereg("^[a-zA-Z0-9_.:\+,-]+$",$mail)) {
    return false;
  } else {
    return true;
  }
  */
}






function is_rib($cbanque, $cguichet, $nocompte, $clerib)  {
        $tabcompte = "";
        $len = strlen($nocompte);
        if ($len != 11) {
                return false;
        }
        for ($i = 0; $i < $len; $i++) {
                $car = substr($nocompte, $i, 1);
                if (!is_numeric($car)) {
                        $c = ord($car) - (ord('A') - 1);
                        $b = ($c + pow(2, ($c - 10)/9)) % 10;
                        $tabcompte .= $b;
                }
                else {
                        $tabcompte .= $car;
                }
        }
        $int = $cbanque . $cguichet . $tabcompte . $clerib;
        return (strlen($int) >= 21 && bcmod($int, 97) == 0);
}


function make_don($data, $lang = 'fr') {
	$sum = 0;
	if (!empty($data['sum']))
	{
		$sum = intval($data['sum']);
	}
	if ($sum <= 0 && !empty($data['othersum']))
	{
		$sum = intval($data['othersum']);
	}
	$envoi_cados = ($sum >= 50 && empty($data['nocado']));
	$don_mensuel = (!empty($data['monthly']));
	$abo_lettres = (!empty($data['aboactu']));
	$don_public  = (!empty($data['public']));
	$taille_ts = (empty($data['taille']))?0:intval($data['taille']);

	$champs_texte = array('pseudo', 'name', 'fname', 'titulaire', 'bq_nom', 'bq_addr', 'bq_cp', 'bq_ville','email','nomadresse','adresse','codepostal','ville', 'pays', 'bq', 'gu', 'cpt', 'rib', 'passwd', 'passwd2');
	foreach($champs_texte as $champ)
	{
		$$champ = '';
		if (!empty($data[$champ]))
		{
			$$champ = substr(trim($data[$champ]), 0, 255);
		}
	}
	// TODO return 1 si problème inattendu
	if ($sum < 5)
	{
		return 2;
	}
	if ($don_mensuel && checkmail($data['email']) !== 0)
	{
		return 112;
	}
	if (empty($data['email']))
	{
		return 3;
	}
	if (checkmail($data['email']) !== 0)
	{
		return 4;
	}
	if (empty($data['pseudo']))
	{
		return 5;
	}
	if (empty($adresse) || empty($codepostal) || empty($ville))
	{
		if ($don_mensuel)
		{
			return 113;
		}
		if ($envoi_cados)
		{
			return 6;
		}
	}
	if ($don_mensuel)
	{
		if (empty($name))
		{
			return 102;
		}
		if (empty($fname))
		{
			return 103;
		}
		if (empty($titulaire))
		{
			$titulaire = $fname.' '.$name;
		}
		if (empty($bq_nom))
		{
			return 104;
		}
		if (empty($bq_addr))
		{
			return 105;
		}
		if (empty($bq_cp))
		{
			return 106;
		}
		if (empty($bq_ville))
		{
			return 107;
		}
                if (!($bq && $gu && $cpt && $rib))
		{
			return 108;
		}
		if (!is_rib($bq, $gu, $cpt, $rib))
		{
			return 109;
		}
		if (empty($passwd) || $passwd !== $passwd2)
		{
			return 110;
		}
		if (strlen($passwd) < 6 || strlen($passwd) > 20)
		{
			return 111;
		}
	}

	// On convertit le UTF-8 du nom en ISO si besoin
	$u=new Utils();
	if ($u->isUTF8_str($nom)==true && $u->surelyUTF8==true) {
		$nom=iconv("UTF-8", "ISO-8859-1//TRANSLIT",$nom);
	}

	if (!$lang) $lang="fr_FR";

	$status = 0;
	if ($don_mensuel) 
	{
		$status = 100;
	}

	$sql = "INSERT INTO dons SET status='".$status."', datec=NOW(), somme='".$sum."', email='".asl($email)."', 
		nom='".asl($pseudo)."',
		adresse='".asl(trim($nomadresse."\n".$adresse))."',
		codepostal='".asl($codepostal)."',
		ville='".asl($ville)."',
		pays='".asl($pays)."',
		abo='".intval($abo_lettres)."',
		taille='".intval($taille_ts)."',
		public='".intval($don_public)."',
		cadeau='".intval($envoi_cados)."',
		lang='".$lang."'
		;";

	mysql_query($sql);
	$id=mysql_insert_id();
	if (!$id) 
	{
		@mail(SYSADMIN, 'LQDN Don, bug Mysql', mysql_error());
		return 7;
	}
	if (!$don_mensuel)
	{
		$str = @file_get_contents(FDNNURL1."?target=lqdn&montant=".$sum."&email=".urlencode($email)."&name=".urlencode(trim($nom))."&id=".intval($id)."&lang=".$lang."");
		if (!$str) {
			return 8;
		}
	}
	if ($don_mensuel) 
	{
		$varvador = array(
			'type'		=> 'mensuel',
			'dest'		=> 'lqdn',
			'bq_addr'	=> $bq_addr,
			'bq_cp'		=> $bq_cp,
			'bq_nom'	=> $bq_nom,
			'bq_ville'	=> $bq_ville,
			'bq'		=> $bq,
			'gu'		=> $gu,
			'cpt'		=> $cpt,
			'rib'		=> $rib,
			'email'		=> $email,
			'montant'	=> $sum,
			'name'		=> $name,
			'fname'		=> $fname,
			'titulaire'	=> $titulaire,
			'user_addr'	=> $adresse,
			'user_cp'	=> $codepostal,
			'user_ville'	=> $ville,
			'passwd'	=> $passwd
		);
		$str = '<form action="'.FDNNURL2.'" method="post">';
		foreach ($varvador as $var=>$val)
		{
			$str .= '<input type="hidden" name="'.$var.'" value="'.htmlspecialchars($val).'"/>';
		}
		if ($lang == 'en')
		{
			$str .= '<input type="submit" value="Make this monthly donation."/></form>';
		}
		else
		{
			$str .= '<input type="submit" value="Je confirme ce don mensuel"/></form>';
		}
	}
	@mail(SYSADMIN, 'LQDN Don', print_r($data, true). $str);
	$str = '<div id="paiementbouton">'.$str.'</div>';
	$str .= '<script type="text/javascript">';
	if ($lang == 'en')
	{
		$str .= '$("#paiementbouton form input[type=submit]").val("Pay with credit card");';
	}
	$str .= 'document.forms[1].submit();';
	$str .= '</script>';
	return $str;
}












class Utils {

  public $surelyUTF8=false;
  public $parsePos=0;
  public $parseLine=0;

// Memory : 
// 10000000 = 128   1100000 = 192  11100000 = 224   11110000 = 240  11111000 = 248

/** **********************************************************************
 * Tells you if a file contains valid UTF-8 characters only.
 *  UTF-8 encoding is made as follow :
 *  B  b   representation
 *  1  7   0bbbbbbb
 *  2  11  110bbbbb 10bbbbbb
 *  3  16  1110bbbb 10bbbbbb 10bbbbbb
 *  4  21  11110bbb 10bbbbbb 10bbbbbb 10bbbbbb
 *
 * @param string $f Opened file handle (that will be read)
 * @return boolean TRUE if the file is only UTF-8, FALSE else.
 * Set surelyUTF8 to true if we are sure that this is UTF8 text (ie when we found at least 1 control character)
 */ 
function isUTF8($f) {
  $this->surelyUTF8=false;
  $this->parsePos=0;
  $this->parseLine=0;
  fseek($f,0);
  $status=1;  // Status is 1 for ascii text, 2 for 7bits string, 3 for 11bits strings etc.
  $pos=0;  // Pos is 0 for "at first byte in a 2 bytes representation", 1 for "at second byte" etc.
  while ($s=fgets($f,1024)) {
    $this->parseLine++;
    for($i=0;$i<strlen($s);$i++) {
      $c=ord(substr($s,$i,1));
      //      echo "CHAR:".chr($c)." = $c | Status $status $pos\n";
      $this->parsePos++;
      switch ($status) {
      case 4:
      case 3:
      case 2:
	if (($c & 192)==128) { 
	  $pos++; 
	  if ($pos>=$status) return false;  // YES, it's a f...ing tricky algorithm out there ...
	  break; 
	} else {
	  // If we didn't find 0x10bbbbbb after a special code whene $pos<$status, it's a failure 
	  if ($pos<$status-1) return false;
	}
	// Note : no break here : we continue by testing other cases
      case 1:
	if (($c & 192)==128) return false; // 10xxxxxx in ASCII mode (impossible in UTF-8)
	if (($c & 224)==192) { $status=2; $pos=0; $this->surelyUTF8=true; break; } // 2 bytes sequence start code.
	if (($c & 240)==224) { $status=3; $pos=0; $this->surelyUTF8=true; break; } // 2 bytes sequence start code.
	if (($c & 248)==240) { $status=4; $pos=0; $this->surelyUTF8=true; break; } // 2 bytes sequence start code.
	$status=1;
      }
    }
  }
  return true;
}


function isUTF8_str($s) {
  $this->surelyUTF8=false;
  $this->parsePos=0;
  $this->parseLine=0;
  $status=1;  // Status is 1 for ascii text, 2 for 7bits string, 3 for 11bits strings etc.
  $pos=0;  // Pos is 0 for "at first byte in a 2 bytes representation", 1 for "at second byte" etc.
  for($i=0;$i<strlen($s);$i++) {
    $c=ord(substr($s,$i,1));
    //      echo "CHAR:".chr($c)." = $c | Status $status $pos\n";
    $this->parsePos++;
    switch ($status) {
    case 4:
    case 3:
    case 2:
      if (($c & 192)==128) { 
	$pos++; 
	if ($pos>=$status) return false;  // YES, it's a f...ing tricky algorithm out there ...
	break; 
      } else {
	// If we didn't find 0x10bbbbbb after a special code whene $pos<$status, it's a failure 
	if ($pos<$status-1) return false;
      }
      // Note : no break here : we continue by testing other cases
    case 1:
      if (($c & 192)==128) return false; // 10xxxxxx in ASCII mode (impossible in UTF-8)
      if (($c & 224)==192) { $status=2; $pos=0; $this->surelyUTF8=true; break; } // 2 bytes sequence start code.
      if (($c & 240)==224) { $status=3; $pos=0; $this->surelyUTF8=true; break; } // 2 bytes sequence start code.
      if (($c & 248)==240) { $status=4; $pos=0; $this->surelyUTF8=true; break; } // 2 bytes sequence start code.
      $status=1;
    }
  }
  return true;
}


} // Class Utils

/*
$u=new Utils();

$files=array("text_1.txt","text_2.txt","text_3.txt","text_4.txt");
foreach($files as $file) {
  $f=fopen($file,"rb");
  if ($u->isUTF8($f)) {
    echo "$file IS UTF-8 ".(($u->surelyUTF8)?"(surely)":"(in fact, plain ASCII...)")."\n";
  } else {
    echo "$file IS NOT UTF-8 pos:".$u->parsePos." line:".$u->parseLine."\n";
  }
}
*/

