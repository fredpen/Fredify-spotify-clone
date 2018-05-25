<?php

   class Car {
  // The properties
   public $comp;
   public $color = "beige";
   public $hasSunRoof = true;
   // The method that says hello
   public function hello()  {
   return "Beep I am a <i>" . $this -> comp . "</i>, and I am <i>" . $this -> color ;
   }
    }
   // We can now create an object from the class
   $bmw = new Car();
   $mercedes = new Car();
   // Set the values of the class properties
   $bmw -> color = "blue";
   $bmw -> comp = "BMW";
   $mercedes -> comp = "Mercedes Benz";
   // Call the hello method for the the $bmw object
   echo $bmw -> hello(). "<br>";
   echo $mercedes -> hello() . "<br>";
   echo "++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++" . "<br>";

   // undesrstanding acces modifier
   // public
   class Name{
     public $height;

     public function heightecho(){
       echo $this->height;
     }
   }

   $fred =  new Name;
   $fred->height = 18;
   $fred->heightecho(). "<br>";
   echo "++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++" . "<br>";

   // ++++++++++++++++++++++++++++++++private
   class Meme{
     private $fredy;
          // setter methods
     public function setWeight($weight){
       $this->fredy = $weight;
       return $this->fredy;
     }
      }
   $fred =  new Meme;
   $fredv = $fred->setWeight(18);
   echo $fredv + 10;
   echo "++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++" . "<br>";

   class School{
     private $name;
     public $names = array("olivet", "lautech", "victory");

     function setName($name){
       if (in_array($name, $this->names)){
         $this->name = $name;
         return $this->name;
       }else {
         return $name . " is not a recognised school";
       }
         }
   }

   $olivet = new School;
   $mysch = $olivet->setName("google ga ga");
   echo $mysch;


   echo "++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++" . "<br>";
   // another way of gaining access into the private property and function is through the magic constructor
   /**
    *
    */
   class Test  {
     // private $test1;
     private $test2;
    public function __construct($userinput2)     {
        // $this->test1 = $userinput1;
        $this->test2 = $userinput2;
       }
      public function getTest(){
        return $this->test2;
      }
   }

    $test1 = new Test(15);
    echo $test1->getTest();

    echo "++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++" . "<br>";
    class Church{
      private $name;
      private $location;
      private $length;

      public function __construct($name, $location){
        $this->name = $name;
        $this->location = $location;
        $this->length = 45;
        }

      public function getChurch(){
        echo "The name of my church is ". $this->name . " and its located at ". $this->location . " ";
        echo $this->length;
      }
    }

    $christ = new Church("winners chapel", "sango ota");
    echo $christ->getChurch();
  

 ?>
