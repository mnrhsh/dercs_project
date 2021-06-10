<?php
require_once '../../Business Services Layer/ManageServicesModel/ServicesModel.php';

class ManageServicesController{
    

    //********CUSTOMER FUNCTION***********

    //add customer device & damage info
    function add($customer_id){
        $device = new ManageServicesModel();
        //$device->device_id = $_POST['device_id'];
        $device->device_type = $_POST['device_type'];
        $device->device_model = $_POST['device_model'];
        $device->serialNo = $_POST['serialNo'];
        $device->device_os = $_POST['device_os'];
        $device->damage_type = $_POST['damage_type'];
        $device->damage_desc = $_POST['damage_desc'];
        $device->customer_id = $customer_id;
        $device->request_status = 0;
        

        if ($_POST['damage_desc'] == "Hardware Repairs"){
          $device->estimate_price = 150.00;
        }
        else if ($_POST['damage_desc'] == "Virus Removal"){
          $device->estimate_price = 80.00;
        }
        else if ($_POST['damage_desc'] == "Data Recovery & Backup") {
          $device->estimate_price = 50.00;
        }
        else {
          $device->estimate_price = 30.00;
        }
        
        $device->quotation_status = 0;

        if($device->addDevice() > 0){
            $message = "Thank you for using our service. Please confirm your details and services request!";
        echo "<script type='text/javascript'>alert('$message');
        window.location = '../ManageServices/confirm_service_details.php';</script>";
        }
    }
    
    //customer view to confirm details
    function viewDetails($customer_id){
    	 $device = new ManageServicesModel();
      	$device->customer_id = $customer_id;
      	return $device->viewDetails();
    }



    //customer reject quotation
    function delete($customer_id){
      $device = new ManageServicesModel();
      $device->customer_id = $customer_id;

      if($device->deleteRequest()){
        $message = "Request has been cancelled. Thank you for using our service!";

        echo "<script type='text/javascript'>alert('$message');
        window.location = '../../Application Layer/ManageServices/service_request_form.php';</script>";

        }
    }

    //customer accept quotation
    function accept($customer_id){
      $device = new ManageServicesModel();
      $device->customer_id=$customer_id;
      $device->quotation_status=$quotation_status;

      if ($device->acceptRequest()){
        //fgfg;
        $message = "Thank you for using our service. Your request has been sent! We will respond to your request within 1 hour.";
      echo "<script type='text/javascript'>alert('$message');
        window.location = '../../Application Layer/ManageServices/service_request_form.php';</script>";
      }

    }
      

 
    //******STAFF FUNCTION**********

    //staff view all incoming services
    function viewAll(){
       $device = new ManageServicesModel();
      return $device->viewallDevice();
   }
    
    //staff view all accepted services
   function viewAllAccepted(){
      $device = new ManageServicesModel();
      return $device -> viewallAccepted();
   }
    //staff view each details of incoming services
    function viewDevice($device_id){
      $device = new ManageServicesModel();
      $device->device_id = $device_id;
      return $device->viewDevice();
    }

    //staff accept service request
    function editRequestStatus($device_id){

      $device = new ManageServicesModel();
      $device->device_id=$device_id;
      $device->request_status=$request_status;
        
        if($device->modifyRequest()){
            $message = "Request Accepted!";
        echo "<script type='text/javascript'>alert('$message');
        window.location = 'view_approved_request.php?device_id=".$_POST['device_id']."';</script>";
        }
    }

    }

  //staff delete incoming requests
   function delete(){
      $device = new ManageServicesModel();
      $device->device_id = $_POST['serialNo'];
      if($device->deleteDevice()){
        $message = "Request Rejected";
		"<script type='text/javascript'>alert('$message');
		window.location = '../view';</script>";
        }
    }

?>
