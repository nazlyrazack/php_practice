<?php 

interface Shape{

	public function get_color();

	public function set_color($color);

	public function describe();
	
}

class Triangle implements Shape{

	private $color = null;
	 public function get_color()
	 {
	 	return $this->color;
	 }

	 public function set_color($color)
	 {
	 	$this->color=$color;

	 	
	 }

	 public function describe() {
      return sprintf("I'm a %s %s\n", $this->get_color(), get_class($this));
  }   

}

$obj = new Triangle;
$obj->set_color('red');

print $obj->describe();

 ?>