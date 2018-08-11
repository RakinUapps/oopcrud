<?php

namespace App\Admin;
use App\Message\Message;
use App\Utility\Utility;
use App\Model\Database as DB;
use PDO;
use PDOException;

class Admin extends DB
{

       public $name,$authorid,$dop,$isbn,$categoryid,$remarks,$price,$modified;


     public function setData($postData){

        //var_dump($postData);

         if(array_key_exists('name',$postData)){$this->name = $postData['name'];         }
         if(array_key_exists('authorid',$postData)){$this->authorid = $postData['authorid']; }
         if(array_key_exists('dop',$postData)){$this->dop = $postData['dop']; }
         if(array_key_exists('isbn',$postData)){$this->isbn = $postData['isbn']; }
         if(array_key_exists('categoryid',$postData)){$this->categoryid = $postData['categoryid']; }
         if(array_key_exists('remarks',$postData)){$this->remarks = $postData['remarks']; }
         if(array_key_exists('price',$postData)){$this->price = $postData['price']; }
         if(array_key_exists('modified',$postData)){$this->modified = $postData['modified']; }

     }


      public function store(){


          $arrData='';
           $sql='';

           if (isset($_POST['addbook'])) {
               $arrData = array($this->name, $this->authorid, $this->dop, $this->isbn, $this->categoryid, $this->remarks, $this->price, $this->modified);
               $sql = "INSERT INTO book(name,authorid,dop,isbn,categoryid,remarks,price,modified) VALUES(?,?,?,?,?,?,?,?)";
           }
           if (isset($_POST['addauthor'])){
               $sql = "INSERT into author (name,dob,remarks,modified) VALUES(?,?,?,?)";
           }




          $STH = $this->DBH->prepare($sql);

          $result =$STH->execute($arrData);

          if($result)
              Message::message("Success! Data Has Been Inserted Successfully :)");
          else
              Message::message("Failed! Data Has Not Been Inserted :( ");

          Utility::redirect('index.php');


      }
   }