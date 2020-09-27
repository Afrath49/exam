<?php 
 class Animal{
 	public $family;
 	public $food;

 	function __construct($family,$food){
 		$this->family=$family;
 		$this->food=$food;
 	}

 	function display()
 	{
 		echo "the family is {$this->family} that food is {$this->food}";
 	}
 }

 class cat extends Animal{

 	function msg()
 	{
 		echo "who am i";
 	}
 }

 $a = new cat("jimmy","rat");

 $a->display();
 echo "<br>";
 $a->msg();

?>