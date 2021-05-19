<?php
require_once '../../Business Services Layer/ServicesModel.php';

class ManageServicesController{
    
    function add(){
        $device = new ManageServicesModel();
        $device->device_id = $_POST['device_id'];
        $device->device_type = $_POST['device_type'];
        $device->device_model = $_POST['device_model'];
        $device->serialNo = $_POST['serialNo'];
        $device->device_os = $_POST['device_os'];
        $device->damage_type = $_POST['damage_type'];
        $device->damage_desc = $_POST['damage_desc'];
        if($device->addDevice() > 0){
            $message = "Success Insert!";
        echo "<script type='text/javascript'>alert('$message');
        window.location = '../view';</script>";
        }
    }
    
    function viewAll(){
       $device = new ManageServicesModel();
      return $device->viewallDevice();
   }
    
    function viewDevice($device_id){
      $device = new ManageServicesModel();
      $device->device_id = $device_id;
      return $device->viewDevice();
    }
    
   // function editUser(){
      //  $student = new studentModel();
      //  $student->studid = $_POST['studID'];
      //  $student->phone = $_POST['phone'];
      //  $student->residence = $_POST['residence'];
       // if($student->modifyStud()){
       //     $message = "Success Update!";
		//echo "<script type='text/javascript'>alert('$message');
		//window.location = '../view/view.php?studID=".$_POST['studID']."';</script>";
      //  }
   // }
    
   function delete(){
      $device = new ManageServicesModel();
      $device->device_id = $_POST['serialNo'];
      if($device->deleteDevice()){
        $message = "Request Rejected";
		"<script type='text/javascript'>alert('$message');
		window.location = '../view';</script>";
        }
    }
}
?>
