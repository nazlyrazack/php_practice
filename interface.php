<?php 
  interface Test 
  {
  	public function helloworld();
  }

  class Test1 implements Test
  {
  	public function helloworld()
  		{
  			echo "This is method implementation";
  		}
  }

 ?>