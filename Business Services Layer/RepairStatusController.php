<?php
require_once '../../Business Services Layer/RepairStatusModel.php';

class RepairStatusController {

    function viewAllStatus(){
        $request = new RepairStatusModel();
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
    
    function viewRequestStatus($repair_id){
        $request = new RepairStatusModel();
        $request->repair_id= $repair_id;
        return $request->viewRequestStatus();
    }
    
    function editRequestStatus($repair_id){
        $request = new RepairStatusModel();
        $request->repair_id = $repair_id;
        $request->job_performed = $_POST['job_performed'];
        $request->job_price = $_POST['job_price'];
        $request->repair_cost = $_POST['repair_cost'];
        $request->repair_status = $_POST['repair_status'];
        $request->repair_details = $_POST['repair_details'];

        if($request->editRequestStatus() > 0){

            header('Location: staff_view_completed_request.php');
        }
    }
    
    function updateFinishedRequest(){
        $request = new RepairStatusModel();
        $request->repair_id= $_POST['repair_id'];
        if($request->updateFinishedRequest()){
            $message = "The order has been marked as finished!";
		echo "<script type='text/javascript'>alert('$message');
		window.location = 'staff_view_completed_request.php?repair_id=".$_POST['repair_id']."';</script>";
        }
    }
    
    function viewCompletedRequest(){
        $request = new RepairStatusModel();
        return $request->viewCompletedRequest();
    }


}






?>
