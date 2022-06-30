<?php
require('Animal.php');
require('Aligator.php');

$aligator = new aligator();
echo $aligator->getSpecies();
echo '<br>';
echo $aligator->makeSound();

