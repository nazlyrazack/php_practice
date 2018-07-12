<?php 
	
	abstract class Vehicle
	{
		private $noOfWheels;
		
		public function getWheels()
		{
			return $this->noOfWheels;
		}
		public function setWheels($wheels)
		{
			$this->noOfWheels=$wheels;
			echo "Vehicle has ".$this->noOfWheels."wheels.<br>";

		}
		public function start()
		{
			echo "The vehicle is starting <br>";
		}
		public function accelerate()
		{
			echo "The vehicle is accelerating<br>";
		}
		public function break()
		{
			echo "The vehicle is stopping<br>";
		}

		abstract public function do_maintenence();

		
	}
	
	abstract class PassengerVehicle extends Vehicle
	{
		private $passengerseats;

		public function getSeats()
		{
			return $this->passengerseats;
		}
		public function setPassengerSeats($seats)
		{
			 $this->passengerseats = $seats;

			echo "Seats -".$this->passengerseats."<br>";
		}
	}
	
	
	class Car extends PassengerVehicle
	{
		private $noOfDoors;
		public function getDoors()
		{
			return $this->noOfDoors;
		}
		public function setDoors($Doors)
		{
			$this->noOfDoors = $Doors;
			echo "no. of Doors -".$this->noOfDoors."<br>";
		}
		public function do_maintenence()
		{
			echo "Car Maintainance";
		}

	}

	$carObj = new Car();
	$carObj->start();
	$carObj->setPassengerSeats(5);
	$carObj->setDoors(4);
	$carObj->setWheels(4);
	$carObj->accelerate();
	$carObj->break();
	$carObj->do_maintenence();
	

 ?>