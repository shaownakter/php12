<?php


namespace App\classes;


 abstract class ExampleOne
{
   public $hello = "Arif";
   protected $helloOne = "Shaown";
   public $helloTwo = "Santo";

   public function helloFour()
   {
       echo 'hello four';
   }
    abstract  function helloFive();
}