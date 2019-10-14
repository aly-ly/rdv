<?php
include_once("Utilisateur.php");
include_once("Connexion.php");
class Gestionnaire extends Utilisateur{
   
    public function __construct($donnes){
        parent::__construct($donnes);
        $this->idStatus=Utilisateur::NIVEAU_3;
    }
     //recuperer le nombre de médecin medecin
     public function countUser(){
        $bdd=Connexion::getInstance();
        $req="select count(matricule) as nbr from utilisateur ";
        $rep= $bdd->query($req);
        
        return $rep->fetch();
        
    }

    //recuperer tous les service
    public function selectService(){
        $bdd=Connexion::getInstance();
        $req="select * from service ";
        $rep=$bdd->query($req);
        return $rep->fetchall();
        
    }
     //recuperer tous les Specialite
     public function selectSpecialite(){
        $bdd=Connexion::getInstance();
        $req="select * from specialite ";
        $rep=$bdd->query($req);
        return $rep->fetchall();
        
    }
}