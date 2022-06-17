<?php
class User {
    public $firstname;
    public $lastname;
    public $email;
    public $password;
    public $adress;
    public $zipcode;
    public $town;
    public $country;
    public $birthday;
    public $securitynumber;

    public function GetFullName(){
        //$this   da vi er inde i et nyt scope 
        return "<p>Fuldenavn: $this->firstname $this->lastname<br></p>
        
        <p>Fødselsdag: $this->birthday</p>";
    }
    public function GetAdress(){
        return "<p>Adresse: $this->adress<br>$this->zipcode 
        $this->town<br>$this->country<br></p>";
    }

}
?>