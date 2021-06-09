<?php
require_once $_SERVER["DOCUMENT_ROOT"].'/dercs/libs/database.php';
/**
* Model class for User
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

	/**
	* Static method All()
	* this method will retrieve all user data in database 
	* and will return the data as array of user object
	*/

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

			

	public static function All()
	{
		$query = "SELECT * FROM customer";
		try {
			// use static method run() from class DB 
	    	if ($stmt = DB::run($query)) { // this will run the build query
	    		// assign all of the data fetch from database to variable data
				$user = $stmt->fetchAll(PDO::FETCH_ASSOC); // need to add fetchAll for pdo 
				// in order for pdo to retrieve the data from database
				// return the array of users filled with user array
				return $user;
			};
		} catch (PDOException $e) {
			return $e->getMessage();
		}

		$query = "SELECT * FROM courier";
		try {
			// use static method run() from class DB 
	    	if ($stmt = DB::run($query)) { // this will run the build query
	    		// assign all of the data fetch from database to variable data
				$user = $stmt->fetchAll(PDO::FETCH_ASSOC); // need to add fetchAll for pdo 
				// in order for pdo to retrieve the data from database
				// return the array of users filled with user array
				return $user;
			};
		} catch (PDOException $e) {
			return $e->getMessage();
		}

		$query = "SELECT * FROM staff";
		try {
			// use static method run() from class DB 
	    	if ($stmt = DB::run($query)) { // this will run the build query
	    		// assign all of the data fetch from database to variable data
				$user = $stmt->fetchAll(PDO::FETCH_ASSOC); // need to add fetchAll for pdo 
				// in order for pdo to retrieve the data from database
				// return the array of users filled with user array
				return $user;
			};
		} catch (PDOException $e) {
			return $e->getMessage();
		}
	}

	public static function checkCustLatestID()
	{
		$query = "SELECT substr(customer_id,-4) as code FROM customer order by customer_id DESC LIMIT 1";
		return DB::run($query);
	}

	public static function checkCourierLatestID()
	{
		$query = "SELECT substr(courier_id,-4) as code FROM courier order by courier_id DESC LIMIT 1";
		return DB::run($query);
	}

	public static function checkStaffLatestID()
	{
		$query = "SELECT substr(staff_id,-4) as code FROM staff order by staff_id DESC LIMIT 1";
		return DB::run($query);
	}

	/**
	* Static method getById()
	* this method will retrieve 1 row of data from database
	* based on the id passed to the method
	* @param int id
	*/
	public static function getById($id)
	{
		$query = "SELECT * FROM customer WHERE customer_id = :customer_id LIMIT 1";
		$param = [':customer_id' => $customer_id]; // the parameter that will be bind by pdo
		try {
			// use static method run() from class DB 
	    	if ($stmt = DB::Run($query, $param)) { // this will run the build query
				// need to use fetch to retrieve only 1 row of data
				$user = $stmt->fetch(PDO::FETCH_ASSOC); // this will retrieve the row of data
													    // that is associated to the passed id
				// return the user object
				return $user;
			};
		} catch (PDOException $e) {
			return $e->getMessage();
		}

		$query = "SELECT * FROM courier WHERE courier_id = :courier_id LIMIT 1";
		$param = [':courier_id' => $courier_id]; // the parameter that will be bind by pdo
		try {
			// use static method run() from class DB 
	    	if ($stmt = DB::Run($query, $param)) { // this will run the build query
				// need to use fetch to retrieve only 1 row of data
				$user = $stmt->fetch(PDO::FETCH_ASSOC); // this will retrieve the row of data
													    // that is associated to the passed id
				// return the user object
				return $user;
			};
		} catch (PDOException $e) {
			return $e->getMessage();
		}

		$query = "SELECT * FROM staff WHERE staff_id = :staff_id LIMIT 1";
		$param = [':staff_id' => $staff_id]; // the parameter that will be bind by pdo
		try {
			// use static method run() from class DB 
	    	if ($stmt = DB::Run($query, $param)) { // this will run the build query
				// need to use fetch to retrieve only 1 row of data
				$user = $stmt->fetch(PDO::FETCH_ASSOC); // this will retrieve the row of data
													    // that is associated to the passed id
				// return the user object
				return $user;
			};
		} catch (PDOException $e) {
			return $e->getMessage();
		}

	}

	public function registerCustomer()
	{
		$query = "INSERT INTO customer (customer_id, customer_username, customer_name, customer_password, customer_phone, customer_address) VALUES (:customer_id, :customer_username, :customer_name, :customer_password, :customer_phone, :customer_address)";
		$param = [ // the parameter that will be bind by pdo
		':customer_id' => $this->customer_id,
		':customer_username' => $this->customer_username,
		':customer_name, ' => $this->customer_name,
		':customer_password' => $this->customer_password,
		':customer_phone' => $this->customer_phone,
		':customer_address' => $this->customer_address
	];	

	try { 
			// use static method run() from class DB
	    	if ($stmt = DB::Run($query, $param)) { // we dont use fetch() or fetchAll() here
			// because no data will be return when we
			// perform update operation
	    		return true;
	    	};
	    } catch (PDOException $e) {
	    	return $e->getMessage();
	    }
	}

	public function registerCourier()
	{
		$query = "INSERT INTO courier (courier_id, courier_username, courier_name, courier_password, courier_phone, courier_address) VALUES (:courier_id, :courier_username, :courier_name, :courier_password, :courier_phone, :courier_address)";
		$param = [ // the parameter that will be bind by pdo
		':courier_id' => $this->courier_id,
		':courier_username' => $this->courier_username,
		':courier_name, ' => $this->courier_name,
		':courier_password' => $this->courier_password,
		':courier_phone' => $this->courier_phone,
		':courier_address' => $this->courier_address
	];	

	try { 
			// use static method run() from class DB
	    	if ($stmt = DB::Run($query, $param)) { // we dont use fetch() or fetchAll() here
			// because no data will be return when we
			// perform update operation
	    		return true;
	    	};
	    } catch (PDOException $e) {
	    	return $e->getMessage();
	    }
	}

	function viewCustomer(){
        $sql = "select * from customer where customer_id=:customer_id";
        $args = [':customer_id'=>$this->customer_id];
        return DB::run($sql,$args);
    }


    function modifyCustomer(){

            $sql = "update customer set  customer_username=:customer_username, customer_password=:customer_password, customer_name=:customer_name, customer_phone=:customer_phone, customer_address=:customer_address where customer_id=:customer_id";

           $args = [':customer_username'=>$this->customer_username, ':customer_password'=>$this->customer_password,':customer_name'=>$this->customer_name, ':customer_phone'=>$this->customer_phone, ':customer_address'=>$this->customer_address,':customer_id'=>$this->customer_id];
          // }

            return DB::run($sql,$args);
        }

	

	
}