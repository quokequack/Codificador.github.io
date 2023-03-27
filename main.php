<?php

$caracteres = array(
  'a' => 'w',
  'b' => 't',
  'c' => 'x',
  'd' => '3',
  'e' => 'd',
  'f' => '2',
  'g' => 'o',
  'h' => 'a',
  'i' => '1',
  'j' => 'c',
  'k' => 'z',
  'l' => 'm',
  'm' => 'x',
  'c' => 'l',
  'n' => 's',
  'o' => 'k',
  'p' => 'g',
  'q' => 'h',
  'r' => 'b',
  's' => 'v',
  't' => 'q',
  'u' => 'p',
  'v' => '6',
  'w' => '4',
  'x' => '8',
  'y' => 'r',
  'z' => 'f',
  '1' => '0',
  '2' => 'e',
  '3' => 'i',
  '4' => 'n',
  '5' => 'j',
  '6' => 'u',
  '7' => 'y',
  '8' => '5',
  '9' => '7',
);

$palavra = readline('digite a palavra pra criptografar: ');

$palavra = strtolower($palavra);

for($i = 0; $i < strlen($palavra); $i++){
  $caractere = substr($palavra, $i, 1);
  if(array_key_exists($caractere, $caracteres)){
    $palavra_criptografada .= $caracteres[$caractere];
  } else {
    $palavra_criptografada .= $caractere;
  }
}

echo($palavra_criptografada);

?>
