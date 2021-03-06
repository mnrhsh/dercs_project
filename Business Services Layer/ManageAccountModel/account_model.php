<?php
require_once $_SERVER["DOCUMENT_ROOT"].'/dercs_project/libs/database.php';
/*
 Filename: account_model.php
 Purpose: for login and user profile
*/
class User
{
	public $customer = 'customer';
	public $courier = 'courier';
	public $staff = 'staff';

	// Attributes
	public $customer_id;
	public $customer_username;
	public $customer_name;
	public $customer_password;
	public $customer_phone;
	public $customer_address;

	public $courier_id;
	public $courier_username;
	public $courier_name;
	public $courier_password;
	public $courier_phone;
	public $courier_address;

	public $staff_id;
	public $staff_username;
	public $staff_password;

	public  function validateCustomer($uname,$pwd)
	{
		// $pass = $pwd;
		$query = "SELECT * FROM customer WHERE customer_username='$uname' AND customer_password='$pwd'";
		try {
			// use static method run() from class DB 
	    	if ($stmt = DB::run($query)) { // this will run the build query
	    		// assign all of the data fetch from database to variable data
	    		$user = $stmt->fetch(PDO::FETCH_ASSOC);
				// in order for pdo to retrieve the data from database
				// return the array of users filled with user array
	    		return $user;
	    	};
	    } catch (PDOException $e) {
	    	return $e->getMessage();
	    }
	}

	public  function validateCourier($uname,$pwd)
	{
		// $pass = base64_encode($pwd);
		$query = "SELECT * FROM courier WHERE courier_username='$uname' AND courier_password='$pwd'";
		try {
			// use static method run() from class DB 
	    	if ($stmt = DB::run($query)) { // this will run the build query
	    		// assign all of the data fetch from database to variable data
	    		$user = $stmt->fetch(PDO::FETCH_ASSOC);
				// in order for pdo to retrieve the data from database
				// return the array of users filled with user array
	    		return $user;
	    	};
	    } catch (PDOException $e) {
	    	return $e->getMessage();
	    }
	}

	public  function validateStaff($uname,$pwd)
	{
		// $pass = base64_encode($pwd);
		$query = "SELECT * FROM staff WHERE staff_username='$uname' AND staff_password='$pwd'";
		try {
			// use static method run() from class DB 
	    	if ($stmt = DB::run($query)) { // this will run the build query
	    		// assign all of the data fetch from database to variable data
	    		$user = $stmt->fetch(PDO::FETCH_ASSOC);
				// in order for pdo to retrieve the data from database
				// return the array of users filled with user array
	    		return $user;
	    	};
	    } catch (PDOException $e) {
	    	return $e->getMessage();
	    }
	}
	

	function modifyCustomer(){

            $sql = "update customer set  customer_username=:customer_username, customer_password=:customer_password, customer_name=:customer_name, customer_phone=:customer_phone, customer_address=:customer_address where customer_id=:customer_id";

           $args = [':customer_username'=>$this->customer_username, ':customer_password'=>$this->customer_password,':customer_name'=>$this->customer_name, ':customer_phone'=>$this->customer_phone, ':customer_address'=>$this->customer_address,':customer_id'=>$this->customer_id];

            return DB::run($sql,$args);
    }

	function viewCustomer(){
        $sql = "select * from customer where customer_id=:customer_id";
        $args = [':customer_id'=>$this->customer_id];
        return DB::run($sql,$args);
    }

    function modifyCourier(){
      
            $sql = "update courier set  courier_username=:courier_username, courier_password=:courier_password, courier_name=:courier_name, courier_phone=:courier_phone, courier_address=:courier_address where courier_id=:courier_id";

           $args = [':courier_username'=>$this->courier_username, ':courier_password'=>$this->courier_password,':courier_name'=>$this->courier_name, ':courier_phone'=>$this->courier_phone, ':courier_address'=>$this->courier_address,':courier_id'=>$this->courier_id];

            return DB::run($sql,$args);
    }

	function viewCourier(){
        $sql = "select * from courier where courier_id=:courier_id";
        $args = [':courier_id'=>$this->courier_id];
        return DB::run($sql,$args);
    }

	

	
}