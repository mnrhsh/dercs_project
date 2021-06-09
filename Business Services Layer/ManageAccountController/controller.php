<?php
/*
 Filename: controller.php
 Purpose: Controller page for menu
*/
require_once $_SERVER["DOCUMENT_ROOT"].'/dercs/Business Services Layer/ManageAccountModel/model.php';

class customerController{

    function generateO_ID()
    {
        //generate new custom customer ID
        // $menu = menuModel::checkOrderLatestID();
        // $used_id = $menu->fetch(PDO::FETCH_ASSOC);
        // $key = "F";

        // if($used_id == null){
        //     $nextId = "1";
        //     $menu_id = $key.str_pad($nextId, 4, "0", STR_PAD_LEFT);
        // }
        // else{
        //     $id = implode("|",$used_id);      
        //     $nextId = $id+1;
        //     $menu_id = $key.str_pad($nextId, 4, "0", STR_PAD_LEFT);
        // }
        // return $menu_id;
    }
    
    //Add cust
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
    
    //View all menu
    function viewAll(){
        $cust = new customerModel();
        return $cust->viewall();
    }

    //view menu according to type
    // function viewAllMenu($menu_type){
    //     $menu = new menuModel();
    //     $menu->menu_type = $menu_type;
    //     return $menu->viewAllMenu();

    // }
    
    //view particular menu details
    function viewCustomer($customer_id){
        $cust = new customerModel();
        $cust->customer_id = $customer_id;
        return $cust->viewCustomer();
    }
    
    //edit menu details
    function editCustomer(){
        $cust = new customerModel();
        list($cust->menu_id, $menu->oldphoto) = explode("-", $_POST['data'], 2); 
        $cust->customer_id = $_POST['customer_id'];
        $cust->customer_username = $_POST['customer_username'];
        $cust->customer_password = $_POST['customer_password'];
        $cust->customer_name = $_POST['customer_name'];
        $cust->customer_phone = $_POST['customer_phone'];
        $cust->customer_address = $_POST['customer_address'];
    

        // //file directory to save image
        // $menu->target_dir = "../MenuView/menu/";

        // //target file to save in directory
        // $menu->target_file = $menu->target_dir . basename($_FILES["photofile"]["name"]);

        // // Select file type
        // $menu->imageFileType = strtolower(pathinfo($menu->target_file,PATHINFO_EXTENSION));

        // // Valid file extensions
        // $menu->extensions_arr = array("jpg","jpeg","png","gif");

        
         if($cust->modifyCustomer()){
            $message = "Success Update!";
        echo "<script type='text/javascript'>alert('$message');
    window.location = '../ManageAccountView/user_accounts.php';
    </script>";
        }
    }
    
    
    //delete menu
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