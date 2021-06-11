<?php

class pickupDeliveryModel{

//Function connect to database
function connect()
{
    $pdo = new PDO('mysql:host=localhost;dbname=dercs', 'root', '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $pdo;
}

    //Add Pickup Data
    function addPickup(){
        $sql = "insert into pickupdelivery (customer_id, courier_id, delivery_type, delivery_date, delivery_time, delivery_address, delivery_note, delivery_status) values (:customer_id, :courier_id, :delivery_type, :delivery_date, :delivery_time, :delivery_address, :delivery_note, :delivery_status)";
        $args = [':customer_id'=>$this->customer_id, ':courier_id'=>$this->courier_id,':delivery_type'=>$this->delivery_type,':delivery_date'=>$this->delivery_date,':delivery_time'=>$this->delivery_time,':delivery_address'=>$this->delivery_address,':delivery_note'=>$this->delivery_note,':delivery_status'=>$this->delivery_status,];
        $stmt = pickupDeliveryModel::connect()->prepare($sql);
        $stmt->execute($args);
        return $stmt;
    }

    //Add Delivery Data
    function addDelivery(){
        $sql = "insert into pickupdelivery (customer_id, courier_id, delivery_type, delivery_date, delivery_time, delivery_address, delivery_note, delivery_status) values (:customer_id, :courier_id, :delivery_type, :delivery_date, :delivery_time, :delivery_address, :delivery_note, :delivery_status)";
        $args = [':customer_id'=>$this->customer_id, ':courier_id'=>$this->courier_id,':delivery_type'=>$this->delivery_type,':delivery_date'=>$this->delivery_date,':delivery_time'=>$this->delivery_time,':delivery_address'=>$this->delivery_address,':delivery_note'=>$this->delivery_note,':delivery_status'=>$this->delivery_status,];
        $stmt = pickupDeliveryModel::connect()->prepare($sql);
        $stmt->execute($args);
        return $stmt;
    }

    //View Pickup and Delivery Request Available 
    function viewRequestAvailable(){
         $sql = "select * from pickupdelivery inner join customer on pickupdelivery.customer_id = customer.customer_id where courier_id = :courier_id ORDER BY delivery_date";
        $args = [':courier_id'=>$this->courier_id];
        $stmt = pickupDeliveryModel::connect()->prepare($sql);
        $stmt->execute($args);
        return $stmt;
        }

    //View Selected Request Info
    function viewRequestInfo(){
        $sql = "select * from pickupdelivery inner join customer on pickupdelivery.customer_id = customer.customer_id where pickupdelivery.delivery_id = :delivery_id";
        $args = [':delivery_id'=>$this->delivery_id];
        $stmt = pickupDeliveryModel::connect()->prepare($sql);
        $stmt->execute($args);
        return $stmt;
        }

    //Assign Courier to Request
    function acceptRequest(){
        $sql = "update pickupdelivery set courier_id=:courier_id, delivery_status=:delivery_status where delivery_id=:delivery_id"; 
        $args = [':courier_id'=>$this->courier_id, ':delivery_status'=>$this->delivery_status, ':delivery_id'=>$this->delivery_id];
        $stmt = pickupDeliveryModel::connect()->prepare($sql);
        $stmt->execute($args);
        return $stmt;
        }       

    //View Accepted Request 
    function viewAcceptedRequest(){
        $sql = "select * from pickupdelivery inner join customer on pickupdelivery.customer_id = customer.customer_id where courier_id = :courier_id ORDER BY delivery_date DESC";
        $args = [':courier_id'=>$this->courier_id];
        $stmt = pickupDeliveryModel::connect()->prepare($sql);
        $stmt->execute($args);
        return $stmt;
        }

    //Update Pickup Delivery Statuss
    function updateStatus(){
        $sql = "update pickupdelivery set delivery_status=:delivery_status where delivery_id=:delivery_id";
        $args = [':delivery_status'=>$this->delivery_status, ':delivery_id'=>$this->delivery_id];
        $stmt = pickupDeliveryModel::connect()->prepare($sql);
        $stmt->execute($args);
        return $stmt;
    }

    //Remove Data for Back and Skip button
    function removeData(){
        $sql = "delete from pickupdelivery where customer_id=:customer_id and delivery_status=:delivery_status";
        $args = [':customer_id'=>$this->customer_id, ':delivery_status'=>$this->delivery_status];
        $stmt = pickupDeliveryModel::connect()->prepare($sql);
        $stmt->execute($args);
        return $stmt;
    }
}
?>
