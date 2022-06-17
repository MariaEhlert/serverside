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

    function GetData(){
        echo "Fuldenavn: $this->firstname $this->lastname <br>" ;
        echo "Adresse: $this->adress<br> $this->zipcode $this->town <br>$this->country<br>";
        echo "Fødselsdag: $this->birthday";
    }
}
?>