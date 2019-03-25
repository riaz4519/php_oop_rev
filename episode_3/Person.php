<?php

/**
 * Created by PhpStorm.
 * User: User
 * Date: 3/25/2019
 * Time: 11:01 AM
 */
class Person
{

    public $name;
    public $age;

    //constructor is s magic method . it run when object is made.

    //receving value to the constructor
    public function __construct($name,$age)
    {
        //initializing the recevied value

        $this->name = $name;
        $this->age = $age;
    }

    public function personDetails(){

        echo "Person name is {$this->name} and Age is {$this->age}";

    }

/*
    public function personName(){

        echo  "Person Name".$this->name;

    }

    public function personAge($age){

        echo $this->age = $age;

    }
    */

}

//creating object

//sending value when creating object . is also called instacne of the class
$personOne = new Person("fahim",28);
/*//can be assingend from here;
$personOne->name = "fahim";
$personOne->personAge(18);*/

//getting the details

$personOne->personDetails();