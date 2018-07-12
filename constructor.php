<?php 

	class Student 
	{
		private $firstname;
		private $lastname;
		private $age;

		public function __construct( $fname, $lname, $age)
		{

			$this->firstname = $fname;
			$this->lastname = $lname;
			$this->age = $age;


		}
		public function show_details()
		{
			echo "firstname : ".$this->firstname."<br>";
			echo "lastname: ".$this->lastname."<br>";
			echo "age : ".$this->age."<br>";
			
		}
	}

	$obj = new Student("nazly" , "razack" , 20);

	$obj->show_details();
 ?> 