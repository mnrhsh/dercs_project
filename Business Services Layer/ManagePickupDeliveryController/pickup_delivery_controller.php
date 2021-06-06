<?php

require_once '../../Business Services Layer/ManagePickupDeliveryModel/pickup_delivery_model.php';

class pickupDeliveryController
{   

    //Add Pickup Data for Pickup only
    function addPickup($customer_id){
        $addPickup = new pickupDeliveryModel();
        $addPickup->customer_id = $customer_id;
        $addPickup->courier_id = "0"; 
        $addPickup->delivery_type = "Pickup"; 
        $addPickup->delivery_date = $_POST['delivery_date'];
        $addPickup->delivery_time = $_POST['delivery_time'];
        $addPickup->delivery_address = $_POST['delivery_address'];
        $addPickup->delivery_note = $_POST['delivery_note'];
        $addPickup->delivery_status = "Requested";
        if($addPickup->addPickup()){
            $message = "Request Successfully!";
        echo "<script type='text/javascript'>alert('$message');
        window.location = '../../Application Layer/ManagePickupDelivery/pickup_option.php';</script>";
        }
        else{
            $message = "Request Failed!";
        echo "<script type='text/javascript'>alert('$message');
        window.location = '../../Application Layer/ManagePickupDelivery/pickup_option.php';</script>";
        }
    }

    //Add Pickup Data for Pickup and Delivery
    function addPickup2($customer_id){
        $addPickup = new pickupDeliveryModel();
        $addPickup->customer_id = $customer_id;
        $addPickup->courier_id = "0"; 
        $addPickup->delivery_type = "Pickup"; 
        $addPickup->delivery_date = $_POST['delivery_date'];
        $addPickup->delivery_time = $_POST['delivery_time'];
        $addPickup->delivery_address = $_POST['delivery_address'];
        $addPickup->delivery_note = $_POST['delivery_note'];
        $addPickup->delivery_status = "Requested";
        if($addPickup->addPickup()){
            $message = "Request Successfully!";
        echo "<script type='text/javascript'>alert('$message');
        window.location = '../../Application Layer/ManagePickupDelivery/delivery_option.php';</script>";
        }
        else{
            $message = "Request Failed!";
        echo "<script type='text/javascript'>alert('$message');
        window.location = '../../Application Layer/ManagePickupDelivery/pickup_option.php';</script>";
        }
    }

    //Add Delivery Data for Delivery only
    function addDelivery($customer_id){
        $addDelivery = new pickupDeliveryModel();
        $addDelivery->customer_id = $customer_id;
        $addDelivery->courier_id = "0"; 
        $addDelivery->delivery_type = "Delivery"; 
        $addDelivery->delivery_date = 2021-07-01;
        $addDelivery->delivery_time = $_POST['delivery_time'];
        $addDelivery->delivery_address = $_POST['delivery_address'];
        $addDelivery->delivery_note = $_POST['delivery_note'];
        $addDelivery->delivery_status = "Requested";
        if($addDelivery->addDelivery()){
            $message = "Request Successfully!";
        echo "<script type='text/javascript'>alert('$message');
        window.location = '../../Application Layer/ManagePickupDelivery/delivery_option.php';</script>";
        }
        else{
            $message = "Request Failed!";
        echo "<script type='text/javascript'>alert('$message');
        window.location = '../../Application Layer/ManagePickupDelivery/pickup_option.php';</script>";
        }
    }

    //Remove Data if available for Pickup and Delivery if Customer Click Skip Button
    function removeData($customer_id){
        $removeData = new pickupDeliveryModel();
        $removeData->customer_id = $customer_id;
        $removeData->delivery_status = "Requested"; 
        if($removeData->removeData()){
            $message = "Skip Pickup and Delivery!";
        //letak link payment
        echo "<script type='text/javascript'>alert('$message');
        window.location = '../../Application Layer/ManagePickupDelivery/pickup_option.php';</script>";
        }
        else{
            $message = "Skip Failed!";
        echo "<script type='text/javascript'>alert('$message');
        window.location = '../../Application Layer/ManagePickupDelivery/pickup_option.php';</script>";
        }
    }

    //Remove Data if available for Pickup and Delivery if Customer Click Back Button
    function removeData2($customer_id){
        $removeData = new pickupDeliveryModel();
        $removeData->customer_id = $customer_id;
        $removeData->delivery_status = "Requested"; 
        if($removeData->removeData()){
            $message = "Returning to the Pickup Option Page";
        echo "<script type='text/javascript'>alert('$message');
        window.location = '../../Application Layer/ManagePickupDelivery/pickup_option.php';</script>";
        }
        else{
            $message = "Unable to return to the Pickup Option Page";
        echo "<script type='text/javascript'>alert('$message');
        window.location = '../../Application Layer/ManagePickupDelivery/pickup_option.php';</script>";
        }
    }

    //View Pickup and Delivery Request Available 
    function viewRequestAvailable(){
        $viewRequestAvailable = new pickupDeliveryModel();
        $viewRequestAvailable->courier_id = "0";
        return $viewRequestAvailable->viewRequestAvailable();
    }

    //View Selected Request Info
    function viewRequestInfo($delivery_id){
        $viewRequestInfo = new pickupDeliveryModel();
        $viewRequestInfo->delivery_id = $_GET['delivery_id'];
        return $viewRequestInfo->viewRequestInfo();
    }

    //Assign Courier to Request
    function acceptRequest($courier_id){
        $acceptRequest = new pickupDeliveryModel();
        $acceptRequest->courier_id = $courier_id;
        $acceptRequest->delivery_status = "Pick Up"; 
        $acceptRequest->delivery_id = $_GET['delivery_id'];
        if($acceptRequest->acceptRequest()){
            $message = "Request Accepted!";
        echo "<script type='text/javascript'>alert('$message');
        window.location = '../../Application Layer/ManagePickupDelivery/view_accepted_request.php';</script>";
        }  
    }

    //View Accepted Request 
    function viewAcceptedRequest($courier_id){
        $viewAcceptedRequest = new pickupDeliveryModel();
        $viewAcceptedRequest->courier_id = $courier_id;
        return $viewAcceptedRequest->viewAcceptedRequest();
    }
    
    //Update Pickup Delivery Status
    function updateStatus($delivery_status){
        $updateStatus = new pickupDeliveryModel();
        $updateStatus->delivery_status = $delivery_status;
        $updateStatus->delivery_id = $_GET['delivery_id'];
        if($updateStatus->updateStatus()){
            $message = "Status Successfully Updated!";
        echo "<script type='text/javascript'>alert('$message');
        window.location = '../../Application Layer/ManagePickupDelivery/view_accepted_request.php';</script>";
        }
    }

}
?>