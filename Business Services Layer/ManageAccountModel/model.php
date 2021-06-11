<?php
/*
 Filename: model.php
 Purpose: for user account and registration
*/
require_once $_SERVER["DOCUMENT_ROOT"].'/dercs_project/libs/database.php';

class customerModel{
   
    public $customer_id, $customer_username, $customer_name, $customer_password, $customer_phone, $customer_address;
    
    //Function to add customer
    function addCustomer(){


        $sql = "insert into customer(customer_id, customer_username, customer_name, customer_password, customer_phone, customer_address) values(:customer_id, :customer_username, :customer_name, :customer_password, :customer_phone, :customer_address)";


        $args = [':customer_id'=>$this->customer_id, ':customer_username'=>$this->customer_username, ':customer_name'=>$this->customer_name, ':customer_password'=>$this->customer_password, ':customer_phone'=>$this->customer_phone, ':customer_address'=>$this->customer_address];


        $stmt = DB::run($sql, $args);
        $count = $stmt->rowCount();
        return $count;
    }

    //Function to add courier
    function addCourier(){


        $sql = "insert into courier(courier_id, courier_username, courier_name, courier_password, courier_phone, courier_address) values(:courier_id, :courier_username, :courier_name, :courier_password, :courier_phone, :courier_address)";


        $args = [':courier_id'=>$this->courier_id, ':courier_username'=>$this->courier_username, ':courier_name'=>$this->courier_name, ':courier_password'=>$this->courier_password, ':courier_phone'=>$this->courier_phone, ':courier_address'=>$this->courier_address];


        $stmt = DB::run($sql, $args);
        $count = $stmt->rowCount();
        return $count;
    
    }    
    
    //Function to view all cust acc
    function viewall(){
        $sql = "select * from customer";
        return DB::run($sql);
    }


   //Function to view cust acc details  
    function viewCustomer(){
        $sql = "select * from customer where customer_id=:customer_id";
        $args = [':customer_id'=>$this->customer_id];
        return DB::run($sql,$args);
    }
    
    //Fucntion to edit cust details
    function modifyCustomer(){
      

            $sql = "update customer set  customer_username=:customer_username, customer_password=:customer_password, customer_name=:customer_name, customer_phone=:customer_phone, customer_address=:customer_address where customer_id=:customer_id";

           $args = [':customer_username'=>$this->customer_username, ':customer_password'=>$this->customer_password,':customer_name'=>$this->customer_name, ':customer_phone'=>$this->customer_phone, ':customer_address'=>$this->customer_address,':customer_id'=>$this->customer_id];

            return DB::run($sql,$args);
        }
    
    //Function to delete cust acc
    function deleteMenu(){
        $sql = "delete from customer where customer_id=:customer_id";
        $args = [':customer_id'=>$this->customer_id];
        return DB::run($sql,$args);
    }
}
?>

