<?php 

 	class Student
 	{
 		public $name;
 		public $id;
 		public static $count = 0;

 		public function __construct()
 		{
 			self::$count+=1;
 			$this->name = $name;
 			$this->id = $id;
 		}
 	}
 	echo Student::$count."<br>";
 	 $obj = new Student("name1",1);
 	 $obj = new Student("name2",2);
 	 $obj = new Student("name3",3);
 	 $obj = new Student("name4",4);
 	 $obj = new Student("name5",5);
 	 echo Student::$count."<br>";
 ?>