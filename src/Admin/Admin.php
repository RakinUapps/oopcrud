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
       private $id;


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
         if(array_key_exists('id',$postData)){$this->id = $postData['id']; }

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
                      $sql="select * from book WHERE soft_delete='No'";
                  }
              if ($_GET['id']=='author'){
                  $sql="select * from author WHERE soft_delete='No'";
              }
              if ($_GET['id']=='category'){
                  $sql="select * from category WHERE soft_delete='No'";
              }
              if ($_GET['id']=='staff'){
                  $sql="select * from staff WHERE soft_delete='No'";
              }
              if ($_GET['id']=='student'){
                  $sql="select * from student WHERE soft_delete='No'";
              }
              $STH=$this->DBH->query($sql);
              $STH->setFetchMode(PDO::FETCH_OBJ);
              return $STH->fetchAll();
              }

      public function  trashview(){
        $sql='';
        if ($_GET['id']=='book'){
            $sql="select * from book WHERE soft_delete='Yes'";
        }
        if ($_GET['id']=='author'){
            $sql="select * from author WHERE soft_delete='Yes'";
        }
        if ($_GET['id']=='category'){
            $sql="select * from category WHERE soft_delete='Yes'";
        }
        if ($_GET['id']=='staff'){
            $sql="select * from staff WHERE soft_delete='Yes'";
        }
        if ($_GET['id']=='student'){
            $sql="select * from student WHERE soft_delete='Yes'";
        }
        $STH=$this->DBH->query($sql);
        $STH->setFetchMode(PDO::FETCH_OBJ);
        return $STH->fetchAll();
    }


          public function  delete(){
         //var_dump($_GET);
         //die();
        $sql='';

        if ($_GET['deleteid']=='book'){
            $sql="UPDATE book SET soft_delete='Yes' WHERE id='$this->id'";
        }
        if ($_GET['deleteid']=='author'){
            $sql="UPDATE author SET soft_delete='Yes' WHERE id='$this->id'";
        }
        if ($_GET['deleteid']=='category'){
            $sql="UPDATE category SET soft_delete='Yes' WHERE id='$this->id'";
        }
        if ($_GET['deleteid']=='staff'){
            $sql="UPDATE staff SET soft_delete='Yes' WHERE id='$this->id'";
        }
        if ($_GET['deleteid']=='student'){
            $sql="UPDATE student SET soft_delete='Yes' WHERE id='$this->id'";
        }
        
         $STH = $this->DBH->prepare($sql);

        $result =$STH->execute();

        if($result)
            Message::message("Success! Data Has Been Deleted Successfully :)");
        else
            Message::message("Failed! Data Has Not Been Deleted  :( ");

        Utility::redirect('index.php');
    }
    public function  editview(){
        $sql='';

        if ($_GET['editid']=='book'){
            $sql="select * from book WHERE id=$this->id";
        }
        if ($_GET['editid']=='author'){
            $sql="select * from author WHERE id=$this->id";
        }
        if ($_GET['editid']=='category'){
            $sql="select * from category WHERE id=$this->id";
        }
        if ($_GET['editid']=='staff'){
            $sql="select * from staff WHERE id=$this->id";
        }
        if ($_GET['editid']=='student'){
            $sql="select * from student WHERE id=$this->id";
        }
        $STH=$this->DBH->query($sql);
        $STH->setFetchMode(PDO::FETCH_OBJ);
        return $STH->fetchAll();

    }

    public function update(){

        $arrData='';
        $sql='';
        if ($_POST['editid']=='book') {
            //var_dump($_POST);
            //die();
            $arrData = array($this->name, $this->authorid, $this->dop, $this->isbn, $this->categoryid, $this->remarks, $this->price, $this->modified);
            $sql = "UPDATE book SET name=?,authorid=?,dop=?,isbn=?,categoryid=?,remarks=?,price=?,modified=? WHERE id='$this->id'";
        }
        if ($_POST['editid']=='author'){
            $arrData = array($this->name, $this->dob, $this->remarks, $this->modified);

            $sql = "UPDATE author SET name=?,dob=?,remarks=?,modified=? WHERE id='$this->id'";

        }
        if ($_POST['editid']=='staff'){
            $arrData = array($this->name, $this->doj, $this->remarks, $this->staffid,$this->modified);

            $sql = "UPDATE staff SET name=?,doj=?,remarks=?,staffid=?,modified=? WHERE id='$this->id'";

        }
        if ($_POST['editid']=='student'){
            $arrData = array($this->name, $this->joined, $this->remarks, $this->studentid);

            $sql = "UPDATE student SET name=?,joined=?,remarks=?,studentid=? WHERE id='$this->id'";

        }
        if ($_POST['editid']=='category'){
            $arrData = array($this->name);

            $sql = "UPDATE category SET name=? WHERE id='$this->id'";

        }

        $STH = $this->DBH->prepare($sql);

        $result =$STH->execute($arrData);


        if($result)
            Message::message("Success! Data Has Been Inserted Successfully :)");
        else
            Message::message("Failed! Data Has Not Been Inserted :( ");

        Utility::redirect('index.php');


    }
    public function  restore(){
        //var_dump($_GET);
        //die();
        $sql='';

        if ($_GET['restoreid']=='book'){
            $sql="UPDATE book SET soft_delete='No' WHERE id='$this->id'";
        }
        if ($_GET['restoreid']=='author'){
            $sql="UPDATE author SET soft_delete='No' WHERE id='$this->id'";
        }
        if ($_GET['restoreid']=='category'){
            $sql="UPDATE category SET soft_delete='No' WHERE id='$this->id'";
        }
        if ($_GET['restoreid']=='staff'){
            $sql="UPDATE staff SET soft_delete='No' WHERE id='$this->id'";
        }
        if ($_GET['restoreid']=='student'){
            $sql="UPDATE student SET soft_delete='No' WHERE id='$this->id'";
        }

        $STH = $this->DBH->prepare($sql);

        $result =$STH->execute();

        if($result)
            Message::message("Success! Data Has Been Restored Successfully :)");
        else
            Message::message("Failed! Data Has Not Been Restored  :( ");

        Utility::redirect('index.php');
    }

          }
