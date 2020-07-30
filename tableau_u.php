<?php
function ValeursUniques($tableau) {

  // On récupère les mêmes valeurs dans 1 seule case
  for ($i = 0; $i < count($tableau); $i++)
    $uTableau[$tableau[$i]] = 1;

  // On crée le nouveau tableau
  reset($uTableau);
  for ($i = 0 ; $i < count($tableau); $i++) {
    $tUnique[] = key($uTableau);
    next($uTableau);
  }
  return($tUnique);
}

$tVals = Array(5, 3, 5, 1, 8, 3, 5, 1, 3, 2, 2, 9, 1);
ValeursUniques($tVals);


?>