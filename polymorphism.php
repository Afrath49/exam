<?php 
 interface shape{
 	function area();
 }

 class square implements shape{
 	private $width;
 	function __construct($width){
 		$this->width=$width;
 	}
 	public function area()
 	{
 		return $this->width * $this->width;
 	}
 }

 class circle implements shape{
 	private $radius;
 	function __construct($radius){
 		$this->radius=$radius;
 	}
 	public function area()
 	{
 		return $this->radius * $this->radius * 3.14;
 	}
 }

 function pr(shape $shape)
 {
 	return $shape->area();
 }

 echo "area of square is:" .pr(new square(5));
 echo "<br>";
 echo "area of circle is:" .pr(new circle(7));


?>