<?php 
	class Account
	{
		private $amount=0;
		public function deposit($amount)
		{
			$this->balance+=$amount;
			echo "Amount has been deposited";
			echo "New balance is ".$this->balance;
		}
		public function getBalance()
		{
			return $this->balance;
		}
		public function withdraw($amount)
		{
			if($amount<=$this->balance)
			{
				$this->balance-=$amount;
				echo "amount is withdrawn . Balance ".$this->balance;

			}
			else
			{
				echo "Insufficient balance";
			}
		}
	}

	$accountObj = new Account();
	echo $accountObj->getBalance();
	$accountObj->deposit("1000");
	echo "<br>";
	$accountObj->withdraw(200);
	echo "<br>"
 ?>