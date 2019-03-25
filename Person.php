<?php

/**
 * Created by PhpStorm.
 * User: User
 * Date: 3/24/2019
 * Time: 11:00 AM
 */

//class can not be a reserved keyword from php
class Person
{

    //properties

    public $name = "Fahim";
    public $age;

    public function personName()
    {

        // $this key word represent the class itself and accessing its properties
        echo "person name is ".$this->name;

    }

    //person age with parameter
    public function PersonAge($age)
    {

        echo "person age is ".$this->age = $age;


    }


}
//makign object
$personOne = new Person();

//accessing properties
echo $personOne->name;

//accessing method
echo $personOne->personName();

//sending parameter to the object method and prnting it
echo $personOne->PersonAge(18);