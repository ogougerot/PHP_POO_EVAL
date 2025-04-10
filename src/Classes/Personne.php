<?php
namespace App\Classes;

use App\Interface\Presentation;

class Personne implements Presentation {
    private string $nom;
    public function __construct(string $nom)
    {
        $this->nom = $nom;
    }

    public function sePresenter(): string
    {
        return "Bonjour je m'appelle " . $this->nom . " !";
    }
}
