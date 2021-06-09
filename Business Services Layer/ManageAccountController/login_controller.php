<?php

require_once $_SERVER["DOCUMENT_ROOT"].'/dercs_project/Business Services Layer/ManageAccountModel/account_model.php';


class LoginController
{
	public function loginCustomer()
	{
		//call static method All from user class
		$uname = $_POST['uname'];
		$pwd = $_POST['pwd'];
		$user = User::validateCustomer($uname,$pwd);

		while ($user) {
			//Login Successful

			session_regenerate_id();
			$_SESSION ['customer_id'] = $user['customer_id'];
			$_SESSION ['customer_username'] = $user['customer_username'];
			$_SESSION ['customer_password'] = $user['customer_password'];
			$_SESSION ['customer_name'] = $user['customer_name'];
			$_SESSION ['customer_phone'] = $user['customer_phone'];
			$_SESSION ['customer_address'] = $user['customer_address'];
			
		   	session_write_close();
			header("Location: ../ManageAccountView/customer_edit_profile.php");
		 }
		return $user;
	}

	function viewCustomer($customer_id){
        $user = new User();
        $user->customer_id = $customer_id;
        return $user->viewCustomer();
    }

    function editCustomer(){
        $user = new User();
        $user->customer_id = $_POST['customer_id'];
        $user->customer_username = $_POST['customer_username'];
        $user->customer_password = $_POST['customer_password'];
        $user->customer_name = $_POST['customer_name'];
        $user->customer_phone = $_POST['customer_phone'];
        $user->customer_address = $_POST['customer_address'];

        
         if($user->modifyCustomer()){
            $message = "Successfully Update!";
        echo "<script type='text/javascript'>alert('$message');
    window.location = '../ManageAccountView/customer_edit_profile.php';
    </script>";
        }
    }

	public function loginCourier()
	{
		//call static method All from user class
		$uname = $_POST['uname'];
		$pwd = $_POST['pwd'];
		$user = User::validateCourier($uname,$pwd);

		while ($user) {
			//Login Successful

			session_regenerate_id();
			$_SESSION ['courier_id'] = $user['courier_id'];
			$_SESSION ['courier_username'] = $user['courier_username'];
			$_SESSION ['courier_password'] = $user['courier_password'];
			$_SESSION ['courier_name'] = $user['courier_name'];
			$_SESSION ['courier_phone'] = $user['courier_phone'];
			$_SESSION ['courier_address'] = $user['courier_address'];
			
		   	session_write_close();
			header("Location: ../ManageAccountView/courier_edit_profile.php");
		 }
		return $user;
	}

	function viewCourier($courier_id){
        $user = new User();
        $user->courier_id = $courier_id;
        return $user->viewCourier();
    }

    function editCourier(){
        $user = new User();
        $user->courier_id = $_POST['courier_id'];
        $user->courier_username = $_POST['courier_username'];
        $user->courier_password = $_POST['courier_password'];
        $user->courier_name = $_POST['courier_name'];
        $user->courier_phone = $_POST['courier_phone'];
        $user->courier_address = $_POST['courier_address'];

        
         if($user->modifyCourier()){
            $message = "Successfully Update!";
        echo "<script type='text/javascript'>alert('$message');
    window.location = '../ManageAccountView/courier_edit_profile.php';
    </script>";
        }
    }

	public function loginStaff()
	{
		//call static method All from user class
		$uname = $_POST['uname'];
		$pwd = $_POST['pwd'];
		$user = User::validateStaff($uname,$pwd);

		while ($user) {
			//Login Successful
			session_regenerate_id();
			$_SESSION ['staff_id'] = $user['staff_id'];

		   	session_write_close();
			header("Location: ../ManageAccountView/user_accounts.php");
		 }
		return $user;
	}

	public function loginRole()
	{

		if($_POST['uname']!=null AND $_POST['pwd']!=null AND $_POST['role']!= null)
		{
			switch($_POST['role'])
			{
				case "customer";
				$this->loginCustomer();
				break;

				case "courier";
				$this->loginCourier();
				break;

				case "staff";
				$this->loginStaff();
				break;

			}
		}
	}
}
?>