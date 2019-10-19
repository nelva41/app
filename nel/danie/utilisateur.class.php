<?php

class Utilisateur 
{
    private $Identifiant;
    private $Nom;
    private $Prenom;
    private $MotDePasse; 
    private $Compte;
    private $Telephone;


    Public function __construct($id,$nom,$prenom,$motDePasse,$compte,$telephone)
    {
        $this->Identifiant = $id;
        $this->Nom = $nom;
        $this->Prenom = $prenom;
        $this->MotDePasse = $motDePasse;
        $this->Compte = $compte;
        $this->Telephone = $telephone;
    }

    Public function getIdentifiant()
    {
        return $this->Identifiant;
    }

    Public function getNom()
    {
        return $this->Nom;
    }

    Public function getPrenom()
    {
        return $this->Prenom;
    }

    Public function getMotDePasse()
    {
        return $this->MotDePasse;
    }

    Public function getCompte()
    {
        return $this->Compte;
    }

    Public function getTelephone()
    {
        return $this->Telephone;
    }

    Public function setIdentifiant()
    {
        $this->Identifiant = $id;
    }

    Public function setNom()
    {
        $this->Nom = $nom;
    }

    Public function setPrenom()
    {
        $this->Prenom = $prenom;
    }

    Public function setMotDePasse()
    {
        $this->MotDePasse = $motDePasse;
    }

    Public function setCompte()
    {
        $this->Compte = $compte;
    }

    Public function setTelephone()
    {
        $this->Telephone = $telephone;
    }
   
}

?>