<?php
error_reporting("0");
require_once '../../libs/database.php';

class RepairStatusModel{
	
	public $repair_id, $repair_device_id, $repair_customer_id, $job_performed, $job_price, $repair_cost, $repair_status, $repair_details;
	
    //Add data into repair status after staff add the status
    function addRepair(){
		$sql = "insert into repair_status(repair_device_id, repair_customer_id, job_performed, repair_cost, repair_status, repair_details) values(:repair_device_id, :repair_customer_id,:job_performed, :repair_cost, :repair_status, :repair_details)";
       

        $args = [':repair_device_id'=>$this->repair_device_id, ':repair_customer_id'=>$this->repair_customer_id, ':job_performed'=>$this->job_performed, ':repair_cost'=>$this->repair_cost, ':repair_status'=>$this->repair_status, ':repair_details'=>$this->repair_details];

        $stmt = DB::run($sql, $args);
        $count = $stmt->rowCount();

        return $count;
	}
    
    //View all status for a customer
    function viewAllStatus(){
		$sql = "select * FROM repair_status where repair_customer_id=:repair_customer_id";
        $args = [':repair_customer_id'=>$this->repair_customer_id];
		return DB::run($sql, $args);
	}
    
    //View all request accepted by staff
	function viewAllRequest(){
		$sql = "select * FROM repair_status where repair_status='Repairing' ";
		$args = [ ':repair_status'=>'Repairing'];
		return DB::run($sql, $args);
	}
    
    //view request status details for customer
    function viewRequestStatus(){
		$sql = "select * FROM repair_status where repair_device_id=:repair_device_id";
        $args = [':repair_device_id'=>$this->repair_device_id];
		return DB::run($sql,$args);
	}
    
    //view repair status details for customer
    function viewStatusDetails(){
		$sql = "select * FROM repair_status where repair_id=:repair_id";
        $args = [':repair_id'=>$this->repair_id];
		return DB::run($sql,$args);
	}

    //edit repair status by staff
	function editRequestStatus(){


			$sql = "update repair_status set repair_device_id=:repair_device_id, job_performed=:job_performed, job_price=:job_price, repair_cost=:repair_cost, repair_status=:repair_status, repair_details=:repair_details where repair_device_id=:repair_device_id";

			$args = [
				':repair_device_id'=>$this->repair_device_id, 
				':job_performed'=>$this->job_performed, 
				':job_price'=>$this->job_price, 
                ':repair_cost'=>$this->repair_cost,
				':repair_status'=>$this->repair_status,
				':repair_details'=>$this->repair_details
			];


		return DB::run($sql, $args);
	}
    
    //view request with 'Repairing' status for staff
    function viewRepairingRequest(){
		$sql = "select * FROM repair_status where repair_status='Repairing'";
		$args = [ ':repair_status'=>'Repairing' ];
		return DB::run($sql, $args);
	}
    
    //view request with 'Finished' status for staff
    function viewCompletedRequest(){
		$sql = "select * FROM repair_status where repair_status='Finished'";
		$args = [ ':repair_status'=>'Finished' ];
		return DB::run($sql, $args);
	}
    
	
}


?>

