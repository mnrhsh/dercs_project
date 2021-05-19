<?php
require_once '../../libs/database.php';

class ManageServicesModel{
    public $device_id, $device_type, $device_model, $serialNo, $device_os, $damage_type, $damage_desc;
    
    function addDevice(){
        $sql = "insert into device(device_type, device_model, serialNo, device_os, damage_type, damage_desc) values(:device_type, :device_model, :serialNo, :device_os, :damage_type, :damage_desc)";
       

        $args = [':device_type'=>$this->device_type, ':device_model'=>$this->device_model, ':serialNo'=>$this->serialNo, ':device_os'=>$this->device_os, ':damage_type'=>$this->damage_type, ':damage_desc'=>$this->damage_desc];

        $stmt = DB::run($sql, $args);
        $count = $stmt->rowCount();

        return $count;
    }
    
    function viewallDevice(){
        $sql = "select * from device";
        return DB::run($sql);
    }
    
    function viewDevice(){
      $sql = "select * from device where device_id=:device_id";
      $args = [':device_id'=>$this->device_id];
      return DB::run($sql,$args);
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
