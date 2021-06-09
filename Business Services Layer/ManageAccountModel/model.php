<?php
/*
 Filename: model.php
 Purpose: Entity Class for menu model
*/
require_once $_SERVER["DOCUMENT_ROOT"].'/dercs/libs/database.php';

class customerModel{
   
    public $customer_id, $customer_username, $customer_name, $customer_password, $customer_phone, $customer_address; //$image, $target_dir,$target_file,$imageFileType,$extensions_arr,$search_value,$oldphoto, $paging;

    public static function checkCustomerLatestID()
    {
        $query = "SELECT substr(customer_id,-4) as code FROM customer order by customer_id DESC LIMIT 1";
        return DB::run($query);
    }
    
    //Function to add cust
    function addCustomer(){

        //if( in_array($this->imageFileType,$this->extensions_arr) ){

        $sql = "insert into customer(customer_id, customer_username, customer_name, customer_password, customer_phone, customer_address) values(:customer_id, :customer_username, :customer_name, :customer_password, :customer_phone, :customer_address)";


        $args = [':customer_id'=>$this->customer_id, ':customer_username'=>$this->customer_username, ':customer_name'=>$this->customer_name, ':customer_password'=>$this->customer_password, ':customer_phone'=>$this->customer_phone, ':customer_address'=>$this->customer_address];

        // move_uploaded_file($_FILES['photofile']['tmp_name'],$this->target_dir.$this->image);


        $stmt = DB::run($sql, $args);
        $count = $stmt->rowCount();
        return $count;
    //}
}

function addCourier(){

        //if( in_array($this->imageFileType,$this->extensions_arr) ){

        $sql = "insert into courier(courier_id, courier_username, courier_name, courier_password, courier_phone, courier_address) values(:courier_id, :courier_username, :courier_name, :courier_password, :courier_phone, :courier_address)";


        $args = [':courier_id'=>$this->courier_id, ':courier_username'=>$this->courier_username, ':courier_name'=>$this->courier_name, ':courier_password'=>$this->courier_password, ':courier_phone'=>$this->courier_phone, ':courier_address'=>$this->courier_address];

        // move_uploaded_file($_FILES['photofile']['tmp_name'],$this->target_dir.$this->image);


        $stmt = DB::run($sql, $args);
        $count = $stmt->rowCount();
        return $count;
    //}
}    
    //Function to view all menu
    function viewall(){
        $sql = "select * from customer";
        return DB::run($sql);
    }

    


    //Function to view menu according to the type
    // function viewAllMenu(){
    //     $sql = "select * from menu where menu_type=:menu_type";
    //     $args = [':menu_type'=>$this->menu_type];
    //     return DB::run($sql,$args);
    // }


   //Function to view menu details  
    function viewCustomer(){
        $sql = "select * from customer where customer_id=:customer_id";
        $args = [':customer_id'=>$this->customer_id];
        return DB::run($sql,$args);
    }
    
    //Fucntion to edit menu details
    function modifyCustomer(){
      
    // if(empty($_FILES['photofile']['tmp_name'])){

    //         //don't update image.
    //         $sql = "update menu set menu_description=:menu_description, menu_price=:menu_price where menu_id=:menu_id";

    //         $args = [':menu_description'=>$this->menu_description,':menu_price'=>$this->menu_price, ':menu_id'=>$this->menu_id];

    //       }

    //     else{
    //         //update image.
    //         if(in_array($this->imageFileType,$this->extensions_arr) ){

            $sql = "update customer set  customer_username=:customer_username, customer_password=:customer_password, customer_name=:customer_name, customer_phone=:customer_phone, customer_address=:customer_address where customer_id=:customer_id";

           $args = [':customer_username'=>$this->customer_username, ':customer_password'=>$this->customer_password,':customer_name'=>$this->customer_name, ':customer_phone'=>$this->customer_phone, ':customer_address'=>$this->customer_address,':customer_id'=>$this->customer_id];


            // unlink("../MenuView/menu/".$this->oldphoto);

            // move_uploaded_file($_FILES['photofile']['tmp_name'],$this->target_dir.$this->image);

          //   }
          // }

            return DB::run($sql,$args);
        }
    
    //Function to delete menu
    function deleteMenu(){
        // unlink("../MenuView/menu/".$this->image);
        $sql = "delete from customer where customer_id=:customer_id";
        $args = [':customer_id'=>$this->customer_id];
        return DB::run($sql,$args);
    }
}
?>

