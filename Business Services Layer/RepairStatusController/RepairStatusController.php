<?php
require_once '../../Business Services Layer/RepairStatusModel/RepairStatusModel.php';

class RepairStatusController {

    //Add data into repair status after staff add the status
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
    
    //View all status for a customer
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
    
    //View all request accepted by staff
    function viewAllRequest(){
        $request = new RepairStatusModel();
        return $request->viewAllRequest();
    }
    
    //view request status details for customer
    function viewRequestStatus($device_id){
        $request = new RepairStatusModel();
        $request->repair_device_id= $device_id;
        return $request->viewRequestStatus();
    }
    
     //edit repair status by staff
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
    
    //view request with 'Repairing' status for staff
    function viewRepairingRequest(){
        $request = new RepairStatusModel();
        return $request->viewRepairingRequest();
    }
    
     //view request with 'Finished' status for staff
    function viewCompletedRequest(){
        $request = new RepairStatusModel();
        return $request->viewCompletedRequest();
    }


}






?>
