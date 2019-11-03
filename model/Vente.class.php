<?php

class Vente{
    private $Id;
    private $Nom;
    private $Adresse;
    private $GoogleMap;


//Getter atrributs
function getId(): STRING{
    if (isset($Id)) {
        return $this->Id;
    }else{
        return null;
    }
}

function getNom() : STRING{
    if(isset($Nom)){
        return $this->Nom;
    }else{
        return null;
    }
}

function getAdresse() : STRING{
        return $this->Adresse;
    
}

function getGoogleMap() : string {
    return $this->GoogleMap;
}
}
?>