<?php

abstract class animal
{
    private string $species;
    abstract public function getSpecies();
    abstract public function makeSound();

}