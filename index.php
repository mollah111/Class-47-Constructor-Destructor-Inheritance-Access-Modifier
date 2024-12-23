
<?php

// Class Test {

//    public function show (){
//         echo "Hello World! <br>";
//    }

//    public function __construct(){
//     echo "This is constructor function <br>";
//   }

//   public function __destruct()
//   {
//    echo "This is destructor function <br>";
//   }

//    public function greetings(){
//         echo "Good Evening <br>";
//    }

// }


// $testObject = new Test ();

// $testObject->show ();
// $testObject->greetings();
 

//Inheritance....


class Parents{
     public function flat(){
          echo "2BHK Flat <br>";
     }

     public function car(){
          echo "Allion <br>";
     }

     private function diary(){
          echo "This a diary";
      }

      private function readDiary(){
          $this->diary();
      }

      protected function bankAccess(){
          echo "Bank Access";
      }

}

class Child extends Parents{

     private function parentBankAccess(){
          $this->bankAccess();
     }

     public function bike(){
          echo "Royal Enfild <br>";
     }
}

// $parentObject = new Parents();

// $parentObject-> flat();
// $parentObject-> car();

$childObject = new Child();

$childObject-> bike();
$childObject-> flat();
$childObject-> car();


?>