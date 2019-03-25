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
    public $id;

    //constructor is s magic method . it run when object is made.

    //receving value to the constructor
    public function __construct($name,$age)
    {
        //initializing the recevied value

        $this->name = $name;
        $this->age = $age;
    }

    public function setId($id){

        $this->id = $id;

    }

    //creating a destruct function

    public function __destruct()
    {
        // TODO: Implement __destruct() method.

        if (!empty($this->id)){
            echo "Saving person";
        }
    }


}

//creating object

$personOne = new Person("fahim",29);

$personOne->setId(1);

//callign destructor by unset .

unset($personOne);
