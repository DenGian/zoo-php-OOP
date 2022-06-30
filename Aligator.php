<?php

class Aligator extends Animal
{
    private string $species = 'Aligator';
    public function getSpecies()
    {
        return $this->species;
    }

    public function makeSound() : string
    {
        return 'see you later' . ' ' . $this->getSpecies();
    }
}
