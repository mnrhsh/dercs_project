<?php

require_once '../../Business Services Layer/ManagePaymentModel/PaymentModel.php';

class PaymentController
{   

    //**********CUSTOMER FUNCTION****************
    
    //Insert Payment Details by Customer
    function makePayment($payment_id){
        $makePayment = new PaymentModel();
        $makePayment->payment_id = $payment_id; 
        $makePayment->payment_method = $_POST['payment_method'];
        $makePayment->bank_type = $_POST['bank_type']; 
        $makePayment->payment_desc = $_POST['payment_desc']; 
        $makePayment->total_price = $_POST['total_price']; 
        
        if($makePayment->makePayment()){
            $message = "Data is Saved!";
        echo "<script type='text/javascript'>alert('$message');
        window.location = '../../Application Layer/ManagePayment/insert_payment_details.php';</script>";
        }
        else{
            $message = "Data is Unsaved!";
        echo "<script type='text/javascript'>alert('$message');
        window.location = '../../Application Layer/ManagePayment/insert_payment_details.php';</script>";
        }
    }

    //View Receipt 
    function viewReceipt($payment_id){
        $viewReceipt = new PaymentModel();
        $viewReceipt->payment_id = $payment_id; 
        $viewReceipt->payment_date = $_POST['payment_date']; 
        $viewReceipt->payment_desc = $_POST['payment_desc']; 
        $viewReceipt->total_price = $_POST['total_price'];
        return $viewReceipt->viewReceipt();
        
    }

    //***************STAFF FUNCTION****************
    
    //View Payment Details for Staff
    function viewPaymentDetails($payment_id){
        $viewReceipt = new PaymentModel();
        $viewReceipt->payment_id = $payment_id; 
        $viewReceipt->payment_date = $_POST['payment_date']; 
        $viewReceipt->payment_desc = $_POST['payment_desc']; 
        $viewReceipt->total_price = $_POST['total_price'];
        return $viewReceipt->viewReceipt();
        
    }

    
}
?>