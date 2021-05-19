<?php
/*
 Filename: OrderModel.php
 Purpose: Entity Class for order model
*/
require_once $_SERVER["DOCUMENT_ROOT"].'/dercs/libs/database.php';

class requestModel{
    //Attributes
    public $request_id, $C_ID, $orderDetails, $orderStatus,  $orderComments, $orderDate, $item_ID,
    $order_category;
    

    //RUNNER FUNCTION FOR ORDER
    //method to view all paid order and unaccepted delivery
    function viewAllOrder(){
        // $sql = "SELECT * FROM orders INNER JOIN order_product ON order_product.OrderID = orders.OrderID";
        $sql = "SELECT * from orders INNER JOIN customer ON orders.C_ID=customer.C_ID INNER JOIN payment ON orders.Order_ID=payment.Order_ID WHERE OrderStatus = '0' AND PaymentStatus = '1'";
        return DB::run($sql);
    }

    //method to view all paid order and accepted order
    function viewAcceptedOrders(){
        // $sql = "SELECT * FROM orders INNER JOIN order_product ON order_product.OrderID = orders.OrderID";
        $sql = "SELECT * from orders INNER JOIN customer ON orders.C_ID=customer.C_ID INNER JOIN payment ON orders.Order_ID=payment.Order_ID WHERE OrderStatus = '1 ' AND PaymentStatus = '1'";
        return DB::run($sql);
    }

    //method to modify order with unaccepted order
    function modifyOrder(){
        $orderStatus = "1";
        $sql = "update orders set Order_ID=:Order_ID, OrderStatus=:OrderStatus
        where Order_ID=:Order_ID";

        $args = [
            ':Order_ID' =>$this->Order_ID,
            ':OrderStatus' =>$orderStatus
        ];
        return DB::run($sql,$args);
    }

    //method to modify order with not yet delivered order
    function modifyDelivery(){
        $sql = "update orders set
       Order_ID=:Order_ID,
        DeliveryStatus=:DeliveryStatus
        where Order_ID=:Order_ID";

        $args = [
            ':Order_ID' =>$this->Order_ID,
        ':DeliveryStatus' =>$this->DeliveryStatus
        ];
        return DB::run($sql,$args);
    }

    //method to view order according to order id
    function viewOrderRunner($order_ID){
        $query = "SELECT * from Orders INNER JOIN customer ON orders.C_ID=customer.C_ID WHERE Order_ID='$order_ID'";
        $order = DB::Run($query)->fetchAll(PDO::FETCH_ASSOC);
        return $order;
    }
}
?>