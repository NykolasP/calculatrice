<?php 

class User {
    private $email;
    private $nom;
    private $prenom;
    private $age;

    function __construct($email,$nom,$prenom,$age){
        $this->email = $email;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->age = $age;
    }

    function getEmail(){
        return $this->email;
    }

    function getNom(){
        return $this->nom;
    }

    function getPrenom(){
        return $this->prenom;
    }

    function getAge(){
        return $this->age;
    }

    function isValid(){
        $erreurs = [];
        if(!filter_var($this->email, FILTER_VALIDATE_EMAIL)){
            $erreurs[] = "Email non valide";
        }
        if(!$this->nom){
            $erreurs []= "Nom non valide";
        }
        if(!$this->prenom){
            $erreurs[] = "Prenom non valide";
        }
        if($this->age <= 13){
            $erreurs[] = "Vous êtes trop jeune";
        }
        return $erreurs;
    }
}