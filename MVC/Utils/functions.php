<?php


/**
 * Fonction échappant les caractères html dans $message
 * @param  string $message chaîne à échapper
 * @return string          chaîne échappée
 */
function e($message)
{
    return htmlspecialchars($message, ENT_QUOTES);
}
function a($message)
{
  if ($message==null)
  return "???";
}
function estPasVide($chn){
  return (preg_match("# *$#", $chn));
}
function estUnEntierPositif($chn){
  return (preg_match("#[1-9]{1}[0-9]*$#", $chn));
}
