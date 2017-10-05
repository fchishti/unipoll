<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

/**** class test ****/
$test = new Survery('Faaez', 'Chishti');

echo "<pre>".var_dump($test,true)."</pre>";

//echo $test->getFirstName()."<br>";
//echo $test->getLastName();
/** Class test **/

class Survery {
	protected $fname;
	protected $lname;
	protected $email;
	protected $address;
	protected $phoneNum;
	
	public function __construct($fname = '', $lname = ''){
		$this->fname = $fname;
		$this->lname = $lname;
	}
	
	public function getFirstName(){
		return $this->fname;
	}
	
	public function getLastName(){
		return $this->lname;
	}
	
	public function getEmail(){
		return $this->email;
	}
	
	public function getAddress(){
		return $this->address;
	}
	
	public function getPhone(){
		return $this->phoneNum;
	}
	
	public function setFirstName($firstnName){
		$this->firstname = $firstName;
	}
	
	public function setLastName($lastName){
		$this->lname = $lastname;
	}
	
	public function setEmail($email){
		try{
			$this->validateEmail($email);
			$this->email = $email;
		} catch (Exception $e){
			throw new Exception($e);
		}
	}
	
	public function setAddress(){
		try{
			$this->validateAddress();
		} catch (Exception $e){
			throw new Exception($e);
		}
	}
	
	private function validateEmail($email){
		$valid = true;
		$pos = strpos($email,"@");
		
		if(!$valid)
			throw new Exception('Email not Valid');
		return $valid;
	}
}

?>