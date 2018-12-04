<?php

class Person { 
    private $firstname;
    private $lastname;

    public function setFirstname($pFirstname) { 
        $this->firstname = $pFirstname;
    }
    public function setLastname($pLastname) { 
        $this->Lastname = $pLastname;
    }
}

$person1 = new Person();
//$person1->firstname = "Lala";
//$person1->lastname = "Teletubbies";
$person1->setFirstname("Lala");
$person1->setLastname("Teletubbies");
var_dump($person1);

$person2 = new Person();
$person2->setFirstname("Po");
$person2->setLastname("Teletubbies");
var_dump($person2);


//$person2 = new Person();
//$person2->firstname = "Po";
//$person2->lastname = "Teletubbies";
//var_dump($person2);