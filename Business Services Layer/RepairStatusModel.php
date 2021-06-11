<?php
error_reporting("0");
require_once '../../libs/database.php';

class RepairStatusModel{
	
	public $repair_id, $job_performed, $job_price, $repair_cost, $repair_status, $repair_details;
	
    function viewAllStatus(){
		$sql = "select * FROM repair_status";
		return DB::run($sql);
	}
    
	/*function readyOrder($id){
		$sql = "update order_data SET od_status='Ready' WHERE od_id=:od_id";
		$args = [ ':od_id'=>$id ];
		return DB::run($sql, $args);
	}

	function deleteOrder($id){
		$sql = "begin;
		delete FROM invoice_data WHERE id_od_id=:id_od_id;
		delete FROM order_data WHERE od_id=:od_id;
		commit";
		$args = [ 
			':id_od_id'=>$id,
			':od_id'=>$id
		];
		return DB::run($sql, $args);
	}


	function viewAllRequest(){
		$sql = "select * FROM product INNER JOIN order_data ON product.product_id = order_data.od_product_id WHERE product.sp_id=:sp_id";
		$args = [ ':sp_id'=>$_SESSION['com_id'] ];
		return DB::run($sql, $args);
	}*/

	function viewAllRequest(){
		$sql = "select * FROM repair_status where repair_status='Repairing' ";
		$args = [ ':repair_status'=>'Repairing'];
		return DB::run($sql, $args);
	}

    
    function viewRequestStatus(){
		$sql = "select * FROM repair_status where repair_id=:repair_id";
        $args = [':repair_id'=>$this->repair_id];
		return DB::run($sql,$args);
	}
    
    function viewStatusDetails(){
		$sql = "select * FROM repair_status where repair_id=:repair_id";
        $args = [':repair_id'=>$this->repair_id];
		return DB::run($sql,$args);
	}
    
	/*function viewReadyOrder(){
		$sql = "select * FROM product INNER JOIN order_data ON product.product_id = order_data.od_product_id WHERE order_data.od_status=:od_status";
		$args = [ ':od_status'=>'Ready' ];
		return DB::run($sql, $args);
	}

	function viewAllProduct($id){
		$sql = "select * from product where sp_id=:sp_id";
		$args = [':sp_id'=>$id];
		return DB::run($sql,$args);
	}


	function addNewProduct(){
		
		switch ($_SESSION['service']) {
			case 'Medical':
				$updir = 'bootstrap/upload/medicalcatalog/';
				break;
				case 'Pet':
				$updir = 'bootstrap/upload/petcatalog/';
				break;
				default:
				$updir = 'bootstrap/upload/foodcatalog/';
				break;
		}

		$fileName = $updir . $_FILES['product_image']['name'];

		$sql = "insert into product(sp_id, product_id, product_type, product_name, product_category, product_price, product_desc, product_stock, product_image) values(:sp_id, :product_id, :product_type, :product_name, :product_category, :product_price, :product_desc, :product_stock, :product_image)";
		
		$args = [
			':sp_id'=>$_SESSION['com_id'], 
			':product_id'=>$this->product_id, 
			':product_type'=>$_SESSION['service'], 
			':product_name'=>$this->product_name, 
			':product_category'=>$this->product_category, 
			':product_price'=>$this->product_price,
			':product_desc'=>$this->product_desc, 
			':product_stock'=>$this->product_stock, 
			':product_image'=>$fileName
		];

		move_uploaded_file($_FILES['product_image']['tmp_name'],"../../ApplicationLayer/Customer/" . $fileName);

		$stmt = DB::run($sql, $args);
		$count = $stmt->rowCount();
		return $count;
	}


	function viewProduct($id){
		$sql = "select * from product where product_id=:product_id and sp_id=:sp_id";
		$args = [
			':product_id'=>$id,
			':sp_id'=>$_SESSION['com_id']
		];
		return DB::run($sql,$args);
	}*/


	function editRequestStatus(){


			$sql = "update repair_status set job_performed=:job_performed, job_price=:job_price, repair_cost=:repair_cost, repair_status=:repair_status, repair_details=:repair_details where repair_id=:repair_id";

			$args = [
				':repair_id'=>$this->repair_id, 
				':job_performed'=>$this->job_performed, 
				':job_price'=>$this->job_price, 
                ':repair_cost'=>$this->repair_cost,
				':repair_status'=>$this->repair_status,
				':repair_details'=>$this->repair_details
			];


		return DB::run($sql, $args);
	}

    function updateFinishedRequest(){
		$sql = "update repair_status set repair_status='Finished' where repair_id=:repair_id";
		$args = [ ':repair_id'=>$repair_id ];
		return DB::run($sql, $args);
	}

    function viewCompletedRequest(){
		$sql = "select * FROM repair_status where repair_status='Finished'";
		$args = [ ':repair_status'=>'Finished' ];
		return DB::run($sql, $args);
	}
    
	/*function deleteProduct(){

		$sql = "select product_image from product where product_id=:product_id and sp_id=:sp_id";
		$args = [
			':product_id'=>$this->product_id,
			':sp_id'=>$_SESSION['com_id']
		];

		$stmt = DB::run($sql, $args);
		$count = $stmt->rowCount();
		$data = $stmt->fetch();

        $sql = "delete from order_data where od_product_id=:product_id";
		$args = [':product_id'=>$this->product_id];


		$sql = "delete from product where product_id=:product_id";
		$args = [':product_id'=>$this->product_id];
		
		DB::run($sql, $args);
		if ($data['product_image'] != null){
			unlink('../../view/' . $data['product_image']);
		}

		return $count;

	}*/
}


?>

