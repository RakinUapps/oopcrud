<?php

namespace App\Admin;
use App\Message\Message;
use App\Utility\Utility;
use App\Model\Database as DB;
use PDO;
use PDOException;

class Admin extends DB
{

       public $name,$authorid,$dop,$dob,$doj,$staffid,$isbn,$categoryid,$remarks,$price,$modified,$studentid,$joined;


     public function setData($postData){

        //var_dump($postData);

         if(array_key_exists('name',$postData)){$this->name = $postData['name'];         }
         if(array_key_exists('authorid',$postData)){$this->authorid = $postData['authorid']; }
         if(array_key_exists('dop',$postData)){$this->dop = $postData['dop']; }
         if(array_key_exists('dob',$postData)){$this->dob = $postData['dob']; }
         if(array_key_exists('isbn',$postData)){$this->isbn = $postData['isbn']; }
         if(array_key_exists('categoryid',$postData)){$this->categoryid = $postData['categoryid']; }
         if(array_key_exists('remarks',$postData)){$this->remarks = $postData['remarks']; }
         if(array_key_exists('price',$postData)){$this->price = $postData['price']; }
         if(array_key_exists('modified',$postData)){$this->modified = $postData['modified']; }
         if(array_key_exists('doj',$postData)){$this->doj = $postData['doj']; }
         if(array_key_exists('staffid',$postData)){$this->staffid = $postData['staffid']; }
         if(array_key_exists('studentid',$postData)){$this->studentid = $postData['studentid']; }
         if(array_key_exists('joined',$postData)){$this->joined = $postData['joined']; }

     }


      public function store(){

          $arrData='';
           $sql='';

           if (isset($_POST['addbook'])) {
               $arrData = array($this->name, $this->authorid, $this->dop, $this->isbn, $this->categoryid, $this->remarks, $this->price, $this->modified);
               $sql = "INSERT INTO book(name,authorid,dop,isbn,categoryid,remarks,price,modified) VALUES(?,?,?,?,?,?,?,?)";
           }
           if (isset($_POST['addauthor'])){
               $arrData = array($this->name, $this->dob, $this->remarks, $this->modified);

               $sql = "INSERT into author (name,dob,remarks,modified) VALUES(?,?,?,?)";

           }
          if (isset($_POST['addstaff'])){
              $arrData = array($this->name, $this->doj, $this->remarks, $this->staffid,$this->modified);

              $sql = "INSERT into staff (name,doj,remarks,staffid,modified) VALUES(?,?,?,?,?)";

          }
          if (isset($_POST['addstudent'])){
              $arrData = array($this->name, $this->joined, $this->remarks, $this->studentid);

              $sql = "INSERT into student (name,joined,remarks,studentid) VALUES(?,?,?,?)";

          }
          if (isset($_POST['addcategory'])){
              $arrData = array($this->name);

              $sql = "INSERT into category (name) VALUES(?)";

          }

          $STH = $this->DBH->prepare($sql);

          $result =$STH->execute($arrData);

          if($result)
              Message::message("Success! Data Has Been Inserted Successfully :)");
          else
              Message::message("Failed! Data Has Not Been Inserted :( ");

          Utility::redirect('index.php');


      }


          public function  view(){
                  $sql='';

                  if ($_GET['id']=='book'){
                      $sql="select * from book";
                  }
              if ($_GET['id']=='author'){
                  $sql="select * from author";
              }
              if ($_GET['id']=='category'){
                  $sql="select * from category";
              }
              if ($_GET['id']=='staff'){
                  $sql="select * from staff";
              }
              if ($_GET['id']=='student'){
                  $sql="select * from student";
              }
              $STH=$this->DBH->query($sql);
              $STH->setFetchMode(PDO::FETCH_OBJ);
              return $STH->fetchAll();
              }




          }
