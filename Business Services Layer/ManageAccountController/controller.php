<?php
/*
 Filename: controller.php
 Purpose: Controller page for menu
*/
require_once $_SERVER["DOCUMENT_ROOT"].'/dercs_project/Business Services Layer/ManageAccountModel/model.php';

class customerController{
    
    //Add customer
    function addCustomer(){
        $cust = new customerModel();
        $cust->customer_id = $this->generateO_ID();
        $cust->customer_username = $_POST['customer_username'];
        $cust->customer_name = $_POST['customer_name'];
        $cust->customer_password = $_POST['customer_password']; 
        $cust->customer_phone = $_POST['customer_phone'];
        $cust->customer_address = $_POST['customer_address'];

        $cust->addCustomer();
        if($cust == true){
            $message = "Registration Successful!";
            echo "<script type='text/javascript'>alert('$message');
            window.location = 'login.php';</script>";
        }
    }

    //Add courier
    function addCourier(){
        $courier = new customerModel();
        $courier->courier_id = $this->generateO_ID();
        $courier->courier_username = $_POST['courier_username'];
        $courier->courier_name = $_POST['courier_name'];
        $courier->courier_password = $_POST['courier_password']; 
        $courier->courier_phone = $_POST['courier_phone'];
        $courier->courier_address = $_POST['courier_address'];

        $courier->addCourier();
        if($courier == true){
            $message = "Registration Successful!";
            echo "<script type='text/javascript'>alert('$message');
            window.location = 'login.php';</script>";
        }
    }
    
    //View all
    function viewAll(){
        $cust = new customerModel();
        return $cust->viewall();
    }
    
    //View particular details
    function viewCustomer($customer_id){
        $cust = new customerModel();
        $cust->customer_id = $customer_id;
        return $cust->viewCustomer();
    }
    
    //Edit details
    function editCustomer(){
        $cust = new customerModel();
        list($cust->menu_id, $menu->oldphoto) = explode("-", $_POST['data'], 2); 
        $cust->customer_id = $_POST['customer_id'];
        $cust->customer_username = $_POST['customer_username'];
        $cust->customer_password = $_POST['customer_password'];
        $cust->customer_name = $_POST['customer_name'];
        $cust->customer_phone = $_POST['customer_phone'];
        $cust->customer_address = $_POST['customer_address'];

        
         if($cust->modifyCustomer()){
            $message = "Success Update!";
        echo "<script type='text/javascript'>alert('$message');
    window.location = '../ManageAccountView/user_accounts.php';
    </script>";
        }
    }
    
    //Delete account
    function delete(){
        $cust = new customerModel();
        $cust->customer_id = $_POST['customer_id'];
        if($cust->deleteMenu()){
            $message = "Success Delete!";
        echo "<script type='text/javascript'>alert('$message');
        window.location = '../ManageAccountView/user_accounts.php';</script>";
        }
    }
}
?>