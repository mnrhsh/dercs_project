<?php
require_once '../../Business Services Layer/RepairStatusModel/RepairStatusModel.php';

class RepairStatusController {

    function addRepair($device_id, $customer_id){
        $request = new RepairStatusModel();
        $request->repair_device_id = $device_id;
        $request->repair_customer_id = $customer_id;
        $request->job_performed = $_POST['job_performed'];
        //$request->job_price = $_POST['job_price'];
        $request->repair_cost = $_POST['repair_cost'];
        $request->repair_status = $_POST['repair_status'];
        $request->repair_details = $_POST['repair_details'];
        
        if($request->addRepair() > 0){
            $message = "Repair Status Succesfully Added";
        echo "<script type='text/javascript'>alert('$message');
        window.location = '../ManageRepairStatusView/staff_view_repairing_request.php';</script>";
        }
    }
    
    function viewAllStatus($customer_id){
        $request = new RepairStatusModel();
        $request->repair_customer_id = $customer_id;
        return $request->viewAllStatus();
    }
    
    function viewStatusDetails($repair_id){
        $request = new RepairStatusModel();
        $request->repair_id= $repair_id;
        return $request->viewStatusDetails();
    }
    
    function cancelRepair($id){
        $request = new RepairStatusModel();
        //header('Location: dashboard');
        //return $order->deleteOrder($id);
    }
    
    function viewAllRequest(){
        $request = new RepairStatusModel();
        return $request->viewAllRequest();
    }
    
    function viewRequestStatus($device_id){
        $request = new RepairStatusModel();
        $request->repair_device_id= $device_id;
        return $request->viewRequestStatus();
    }
    
    function editRequestStatus($device_id){
        $request = new RepairStatusModel();
        $request->repair_device_id = $device_id;
        $request->job_performed = $_POST['job_performed'];
        $request->job_price = $_POST['job_price'];
        $request->repair_cost = $_POST['repair_cost'];
        $request->repair_status = $_POST['repair_status'];
        $request->repair_details = $_POST['repair_details'];

        if($request->editRequestStatus() > 0){
            
            header('Location: ../ManageRepairStatusView/staff_view_repairing_request.php');
        }
    }
    
    function updateFinishedRequest(){
        $request = new RepairStatusModel();
        $request->device_id= $_POST['device_id'];
        if($request->updateFinishedRequest()){
            $message = "The order has been marked as finished!";
		echo "<script type='text/javascript'>alert('$message');
		window.location = 'staff_view_completed_request.php?repair_id=".$_POST['repair_id']."';</script>";
        }
    }
    
    function viewRepairingRequest(){
        $request = new RepairStatusModel();
        return $request->viewRepairingRequest();
    }
    
    function viewCompletedRequest(){
        $request = new RepairStatusModel();
        return $request->viewCompletedRequest();
    }


}






?>
