<?php

/**
 * This is a Customer class holding information of a certain customer
 *
 * @author Shifat Khan
 */
class Customer {

    private $firstName;
    private $lastName;
    private $birthdate;
    private $salary;
    private $civicnumber;
    private $street;
    private $city;
    private $state;
    private $postcode;

    /**
     * Non-default constructor
     * @param type $firstName
     * @param type $lastName
     * @param type $birthdate
     * @param type $salary
     * @param type $civicnumber
     * @param type $street
     * @param type $city
     * @param type $state
     * @param type $postcode
     */
    function __construct($firstName="", $lastName="", $birthdate=null, $salary=0, 
            $civicnumber=0, $street="", $city="", $state="", $postcode="") {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->birthdate = $birthdate;
        $this->salary = $salary;
        $this->civicnumber = $civicnumber;
        $this->street = $street;
        $this->city = $city;
        $this->state = $state;
        $this->postcode = $postcode;
    }
    
    public function getFirstName(){
        return $this->firstName;
    }
    
    public function setFirstName($firstname){
        $this->firstName = $firstname;
    }
    
    public function getLastName(){
        return $this->lastName;
    }
    
    public function setLastName($lastName){
        $this->lastName = $lastName;
    }
    
    public function getBirthdate(){
        return $this->birthdate;
    }
    
    public function setBirthdate(DateTime $birthdate){
        $this->birthdate = $birthdate;
    }
    
    public function getSalary(){
        return $this->salary;
    }
    
    public function setSalary($salary){
        $this->salary = $salary;
    }
    
    public function getCivicnumber(){
        return $this->civicnumber;
    }
    
    public function setCivicnumber($civicnumber){
        $this->civicnumber = $civicnumber;
    }
    
    public function getStreet(){
        return $this->street;
    }
    
    public function setStreet($street){
        $this->street = $street;
    }
    
    public function getCity(){
        return $this->city;
    }
    
    public function setCity($city){
        $this->city = $city;
    }
    
    public function getState(){
        return $this->state;
    }
    
    public function setState($state){
        $this->state = $state;
    }
    
    public function getPostcode(){
        return $this->postcode;
    }
    
    public function setPostcode($postcode){
        $this->postcode = $postcode;
    }
    
}
