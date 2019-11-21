<?php

$array = array();

echo "Hoe veel activiteiten wil je doen?" . PHP_EOL;

$a = readline();

for ($b = 1; $b <= $a; $b++) {
   echo "Wat wil je toevoegen aan jouw bucket list?" . PHP_EOL; 
   $c = readline("");
   array_push($array, $c);
}

echo "Op jouw bucket list staat:" .PHP_EOL;
print_r($array);

echo 'owo';