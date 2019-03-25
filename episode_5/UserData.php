<?php

/**
 * Created by PhpStorm.
 * User: User
 * Date: 3/25/2019
 * Time: 11:30 AM
 */

// in this we are seeing a example of constructor and destructor
class UserData
{

    //declearing the properties

    public $user;
    public $userId;

    //constructor initialize data first
    public function __construct($userName,$userId)
    {
        $this->user = $userName;
        $this->userId  = $userId;

        echo "user name is {$this->user} and id is {$this->userId}";

    }
    public function __destruct()
    {
        // TODO: Implement __destruct() method.
    }


}

//making instance or object

$user = "fahim";
$id = 25;


$ur = new UserData($user,$id);