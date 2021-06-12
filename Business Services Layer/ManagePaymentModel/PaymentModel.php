<?php

class PaymentModel{

//Function connect to database
function connect()
{
    $pdo = new PDO('mysql:host=localhost;dbname=dercs', 'root', '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $pdo;
}

    //Insert Payment Details by Customer
    function makePayment(){
        $sql = "insert into payment (payment_id, payment_method, bank_type, payment_desc, total_price) values (:payment_id, :payment_method, :bank_type, :payment_desc, :total_price)";
        $args = [':payment_id'=>$this->payment_id, ':payment_method'=>$this->payment_method, ':bank_type'=>$this->bank_type,':payment_desc'=>$this->payment_desc,'total_price'=>$this->total_price,];
        $stmt = PaymentModel::connect()->prepare($sql);
        $stmt->execute($args);
        return $stmt;
    }

    //View Payment Details for staff
    function viewPaymentDetails(){
        $sql = "select * from payment where payment_id=:payment_id";
        $args = [':payment_id'=>$this->payment_id,];
        $stmt = PaymentModel::connect()->prepare($sql);
        $stmt->execute($args);
        return $stmt;
    }

    //Redirect Payment Gateway to the Selected Bank
    function redirectPaymentGateway(){
        $sql = "select * from payment where payment_id=:payment_id";
        $args = [':payment_id'=>$this->payment_id,];
        $stmt = PaymentModel::connect()->prepare($sql);
        $stmt->execute($args);
        return $stmt;
    }

    //View Receipt for Transaction by Customer
    function viewReceipt(){
        $sql = "select * from payment where payment_id=:payment_id, payment_desc=payment_desc, payment_date=payment_date, total_price=total_price";
        $args = [':payment_id'=>$this->payment_id,];
        $stmt = PaymentModel::connect()->prepare($sql);
        $stmt->execute($args);
        return $stmt;
    }
}
?>
