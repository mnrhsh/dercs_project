<?php
require_once '../../libs/database.php';

class ManageServicesModel{
    public $device_id, $device_type, $device_model, $serialNo, $device_os, $damage_type, $damage_desc;
    
    //add device & damange info
    function addDevice(){
        $sql = "insert into device(device_type, device_model, serialNo, device_os, damage_type, damage_desc, customer_id) values(:device_type, :device_model, :serialNo, :device_os, :damage_type, :damage_desc, :customer_id)";
       

        $args = [':device_type'=>$this->device_type, ':device_model'=>$this->device_model, ':serialNo'=>$this->serialNo, ':device_os'=>$this->device_os, ':damage_type'=>$this->damage_type, ':damage_desc'=>$this->damage_desc, 'customer_id'=>$this->customer_id];

        $stmt = DB::run($sql, $args);
        $count = $stmt->rowCount();

        return $count;
    }
    
    //view all damage device service requested for staff
    function viewallDevice(){
        $sql = "select * from device";
        return DB::run($sql);
    }
    
    //view device info for staff
    function viewDevice($customer_id){
      $sql = "select * from device where device_id=:device_id";
      $args = [':device_id'=>$this->device_id];
      return DB::run($sql,$args);
    }

    //confirm service details for customer
    function viewDetails(){
      //$sql = "select * from device inner join customers on device.customer_id = customers.customer_id";
      //test
      $sql = "select * from device where customer_id='1'";
      //$args = [':device_id'=>$this->device_id];
      return DB::run($sql);
    }


    
   // function modifyStud(){
     //   $sql = "update student set phone=:phone,residence=:residence where studidd=:studid";
       // $args = [':studid'=>$this->studid, ':phone'=>$this->phone, ':residence'=>$this->residence];
      //  return DB::run($sql,$args);
    //}
    
   function deleteDevice(){
     $sql = "delete from device where serialNo=:device_id";
     $args = [':device_id'=>$this->device_id];
     return DB::run($sql,$args);
  }
}
?>
