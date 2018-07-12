
<?php 
	final class A
	{
		final public function test()
		{
			echo "Test method of A";
		}

	}
	class B extends class A{
		final public function test()
		{
			echo "Test method of B";
		}
	}

 ?>