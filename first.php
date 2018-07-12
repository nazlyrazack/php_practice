<?php 
	class Car
	{
		private $speed;
		public $color="red";

		public function accelerate($value)
		{
			$this->speed+=$value;
			echo "Car speed is". $this->speed;
		}
		public function break()
		{
			$speed=0;
		}

	}

	$carObj=new Car();
	$carObj->accelerate("20");
	echo $carObj->color;
 ?>