<?php

namespace App\Model;
use PDO, PDOException;

class Database
{
    public $conn;
    //public $username="";
    //public $password="";
    public $DBH;

    public function __construct()
    {

        try{

            //$this->conn = new PDO("mysql:host=localhost;dbname=olineit_salabir", $this->username, $this->password);
            $this->DBH = new PDO('mysql:host=localhost;dbname=oopcrud', "root", "");
            $this->DBH->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );


        }
        catch(PDOException $error){

           echo "Database Error: ". $error->getMessage();
        }



    }


}