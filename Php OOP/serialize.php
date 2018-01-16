<?php

/*

1. We can use serialize() to store user info (such as: country, ip, email, user password) into the database in STRING format.

2. We can show our preferred info/data using __sleep() magic method.

*/

class UserInfo
{

	public $country;
	public $state;
	public $zip;

	public function __construct($countryName, $stateName, $zipCode)
	{
		$this->country = $countryName;
		$this->state = $stateName;
		$this->zip = $zipCode;
		return $this->country. " " .$this->state. " " .$this->zip;
	}

	public function __sleep(){
		return array("zip");
	}

}

$objOne = new UserInfo("United State","Ohio","AWS");

$serialize = serialize($objOne);
echo $serialize;

?>
