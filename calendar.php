<?php

while(true){
  $texte = readline("Choisissez une date : ");
  $tab = explode(" ", $texte);
  $mois = array(1=>'Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre');
  $jours = array('Lu', 'Ma', 'Me', 'Je', 'Ve', 'Sa', 'Di');

  // STEP 1
  if(count($tab) == 2){

    // ENTETE DU CALENDRIER
    // // 1ER CAS: MOIS / ANNEE
    if(strlen($tab[0]) == 2 && strlen($tab[1]) == 4){
  		if($tab[0][0] == 0){
  			$tab[0] = substr($tab[0], 1);
  			echo str_repeat("=", 36) . PHP_EOL . "||";
  			echo str_repeat(" ", 10) . $mois[$tab[0]] . " " . $tab[1] . str_repeat(" ", 10) . "||" . PHP_EOL;
  			echo str_repeat("=", 36) . PHP_EOL;
  		}else {
  			echo str_repeat("=", 36) . PHP_EOL . "||";
  			echo str_repeat(" ", 10) . $mois[$tab[0]] . " " . $tab[1] . str_repeat(" ", 10) . "||" . PHP_EOL;
  			echo str_repeat("=", 36) . PHP_EOL;
  		}
  	}

    // // 2EME CAS: ANNEE / MOIS
    else {
  		$save = $tab[0];
  		$tab[0] = $tab[1];
  		$tab[1] = $save;
  		if($tab[0][0] == 0){
  			$tab[0] = substr($tab[0], 1);
  			echo str_repeat("=", 36) . PHP_EOL . "||";
  			echo str_repeat(" ", 10) . $mois[$tab[0]] . " " . $tab[1] . str_repeat(" ", 10) . "||" . PHP_EOL;
  			echo str_repeat("=", 36) . PHP_EOL;
  		}else {
  			echo str_repeat("=", 36) . PHP_EOL . "||";
  			echo str_repeat(" ", 10) . $mois[$tab[0]] . " " . $tab[1] . str_repeat(" ", 10) . "||" . PHP_EOL;
  			echo str_repeat("=", 36) . PHP_EOL;
  		}
  	}

    // // JOURS DE LA SEMAINE
    foreach ($jours as $jour){
  		if($jour == "Di"){
  			echo "| ". $jour . " |";
  		}else {
  			echo "| " . $jour . " ";
  		}
  	}
  	echo PHP_EOL . str_repeat("-", 36) . PHP_EOL;

    // 1ER JOUR DU MOIS
  	$day_one = date("N", mktime(0, 0, 0, $tab[0], 1, $tab[1]));
  	$numero_jour = $day_one;

    // DERNIER JOUR DU MOIS
    $date = $tab[1] . "-" . $tab[0] . "-01";
  	$semi = date("Y-m-t", strtotime($date));
  	$last_day = substr($semi, -2);
  	intval($last_day);

    // TOUS LES AUTRES JOURS
    intval($last_day);
  	$compteur = 1;
  	$compteur2 = $numero_jour;
  	echo str_repeat("|    ", $numero_jour-1);
  	while($compteur <= $last_day){
  		while($compteur2 <= 7){
  			echo "|";
  			if($compteur < 10){
  				echo "  " . $compteur . " ";
  			}elseif($compteur >= 10 && $compteur <= $last_day){
  				echo " " . $compteur . " ";
  			}elseif($compteur <= 35){
  				echo "    ";
  			}if($compteur2 == 7){
          echo "|" . PHP_EOL . str_repeat("-", 36) . PHP_EOL;
        }
  			$compteur += 1;
  			$compteur2 += 1;
  		}
  		$compteur2 = 1;
  		if($compteur == $last_day){
  			break;
  		}
  	}
  }

  // STEP 2
  if(count($tab) == 1){

    $numero_mois = 1;
    while($numero_mois <= 12){

      // ENTETE DU CALENDRIER
      $month = $mois[$numero_mois] . " " . $tab[0];
    	if(strlen($month) == 14){
    		echo str_repeat("=", 36) . PHP_EOL . "||";
    		echo $month = str_repeat(" ", 10) . $mois[$numero_mois] . " " . $tab[0] . str_repeat(" ", 9) . "||" . PHP_EOL;
    		echo str_repeat("=", 36) . PHP_EOL;
    	}
    	if(strlen($month) == 12 || strlen($month) == 13){
    		echo str_repeat("=", 36) . PHP_EOL . "||";
    		echo $month = str_repeat(" ", 10) . $mois[$numero_mois] . " " . $tab[0] . str_repeat(" ", 10) . "||" . PHP_EOL;
    		echo str_repeat("=", 36) . PHP_EOL;
    	}
    	if(strlen($month) == 10){
    		echo str_repeat("=", 36) . PHP_EOL . "||";
    		echo $month = str_repeat(" ", 11) . $mois[$numero_mois] . " " . $tab[0] . str_repeat(" ", 11) . "||" . PHP_EOL;
    		echo str_repeat("=", 36) . PHP_EOL;
    	}
    	if(strlen($month) == 9){
    		echo str_repeat("=", 36) . PHP_EOL . "||";
    		echo $month = str_repeat(" ", 12) . $mois[$numero_mois] . " " . $tab[0] . str_repeat(" ", 11) . "||" . PHP_EOL;
    		echo str_repeat("=", 36) . PHP_EOL;
    	}
    	if(strlen($month) == 8){
    		echo str_repeat("=", 36) . PHP_EOL . "||";
    		echo $month = str_repeat(" ", 13) . $mois[$numero_mois] . " " . $tab[0] . str_repeat(" ", 11) . "||" . PHP_EOL;
    		echo str_repeat("=", 36) . PHP_EOL;
    	}

      // JOURS DE LA SEMAINE
      foreach ($jours as $jour){
    		if($jour == "Di"){
    			echo "| ". $jour . " |";
    		}else {
    			echo "| " . $jour . " ";
    		}
    	}
    	echo PHP_EOL . str_repeat("-", 36) . PHP_EOL;

      // 1ER JOUR DU MOIS
      $day_one = date("N", mktime(0, 0, 0, $numero_mois, 1, $tab[0]));
    	$numero_jour = $day_one;

      // DERNIER JOUR DU MOIS
      $date = $tab[0] . "-" . $numero_mois . "-01";
    	$semi = date("Y-m-t", strtotime($date));
    	$last_day = substr($semi, -2);
    	intval($last_day);

      // TOUS LES AUTRES JOURS
      intval($last_day);
    	$compteur = 1;
    	$compteur2 = $numero_jour;
    	echo str_repeat("|    ", $numero_jour-1);
    	while($compteur <= $last_day){
    		while($compteur2 <= 7){
    			echo "|";
    			if($compteur < 10){
    				echo "  " . $compteur . " ";
    			}elseif($compteur >= 10 && $compteur <= $last_day){
    				echo " " . $compteur . " ";
    			}elseif($compteur <= 35){
    				echo "    ";
    			}if($compteur2 == 7){
    				echo "|" . PHP_EOL . str_repeat("-", 36) . PHP_EOL;
    			}
    			$compteur += 1;
    			$compteur2 += 1;
    		}
    		$compteur2 = 1;
    		if($compteur == $last_day){
    			break;
    		}
    	}
    	echo PHP_EOL;

      // CHANGEMENT DE MOIS
      $numero_mois += 1;
    }
  }

  // CAS D'ERREUR
  else {
    $texte = readline("Choisissez une date : ");
  }
}
