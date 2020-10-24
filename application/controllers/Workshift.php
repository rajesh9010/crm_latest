<?php
defined( 'BASEPATH' )OR exit( 'No direct script access allowed' );
class Workshift extends CIUIS_Controller {

	function __construct() {
		parent::__construct();
		$path = $this->uri->segment( 1 );
		$this->load->model('Workshift_Model');
		
	

		
	}
	
	function index() {
		
		$path = $this->uri->segment( 1 );
		/*
		if ( !$this->Privileges_Model->has_privilege( $path ) ) {
			$this->session->set_flashdata( 'ntf3', '' . lang( 'you_dont_have_permission' ) );
			redirect( 'panel/' );
			die;
		} else {
			*/
			//print_r($this->session->userdata());
			
			$data[ 'title' ] = 'Work Shift';
			$data[ 'staff' ] = $this->Staff_Model->get_all_staff();
			$data[ 'departments' ] = $this->Settings_Model->get_departments();
			$data[ 'settings' ] = $this->Settings_Model->get_settings_ciuis();
			$data[ 'supplier' ] = $this->Supplier_Model->get_all_supplier();
			$data[ 'categories' ] = $this->Settings_Model->get_doccategories();
			$data[ 'unittypes' ] = $this->Settings_Model->get_mat_unittype();
			$this->load->view( 'workshift/index', $data );
			
			
		//}
	} 
	
	
	function view_shift($id)
	{
		$shift_result = $this->Workshift_Model->get_workshift_record($id);
		$result=$this->Workshift_Model->get_workshift_break_ecords($id);
		$departments = $this->Workshift_Model->get_department_name($shift_result['department']);
		$emps_name =  $this->Workshift_Model->get_emp_name($shift_result['employee_id']);
		//print_r($emps_name);
		$data['result']=$result;
		$data['dep_names'] = $departments;
		$data['emps_names'] = $emps_name;
		$this->load->view('workshift/view_details',$data);
		
	/*
		echo '<div class="col-sm-12"><b>Item Description:</b>'.$result["itemdescription"].'</div>';
	
	  echo "<div class='col-sm-12'><div class='col-sm-6'><b>Category:</b>&nbsp;&nbsp;$result[mat_cat_name]</div><div class='col-sm-6'><b>Created:</b>&nbsp;&nbsp;$result[created]</div></div>";
	  
	   echo "<div class='col-sm-12 row'>";
	   if($result['margin_type'] == 'percentage'){ 
	        echo  "<div class='col-sm-6'><b>Margin Percentage:</b>&nbsp;&nbsp;$result[margin_value]</div>";
	    }
	    else{
	 	      echo "<div class='col-sm-6'><b>Margin Percentage:</b></div>";
	 	 }
	 	 if($result['margin_type'] == 'fixed'){ 
	        echo  "<div class='col-sm-6' ><b>Margin Fixed:</b>&nbsp;&nbsp;$result[margin_value]</div>";
	    }
	    else{
	 	      echo "<div class='col-sm-6'><b>Margin Fixed:</b></div>";
	 	 }
	 	 echo "</div>";
	 	 
             echo  "<div class='col-sm-12'><div class='col-sm-6'><b>Last Selling Price:</b>&nbsp;&nbsp;$result[last_selling_price]</div></div>";



	//echo '<table> <thead>';
	echo '<th colspan="6"><h2 style=background-color:lightblue">Supplier</h2></th>';
	 echo "</thead><div class='col-sm-18'><div class='col-sm-4'><b>Supplier Name</b></div><div class='col-sm-4'><b>Ref Code</b></div><div class='col-sm-2'><b>Price</b></div></div>";foreach($supp_result as $supp) { 
	      echo "<tr><td><div class='col-sm-4'>$supp[companyname]</div></td>";
	    echo "<td><div class='col-sm-4'>$supp[supplier_ref]</div></td>";
	 echo "<td><div class='col-sm-2'>$supp[supplier_price]</div></td> </tr>"; 
	     
	 }
	// echo '</tbody></table>';

    	echo '<th colspan="6"><h2 style="background-color:lightblue">Documents View</h2></th>';
    	echo   '<div class="form-group col-md-2">';
if($result["documents"]) {
          $psp = str_replace(',','',$result["documents"]);
        
        $passport_doc = explode(",", $result["documents"]); 
        $pass_count = 0;
          foreach ($passport_doc as $key => $pass_value) {
              if($pass_value != ''){
             $pass_count ++;
              }
          }
       
        
       echo '<span class="glyphicon glyphicon-file fontGreen"></span><a href="#" id = "opener-4">'.$pass_count.'</a>';
       echo '<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">';
      echo '<div class="modal-dialog" role="document">';
        echo '<div class="modal-content">';
      echo '<div class="modal-header">';
       echo ' <h5 class="modal-title" id="exampleModalLabel"><h5>Document View</h5>';
       echo  '<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button></div><div class="modal-body" >';
           $ext = ''; 
           foreach ($passport_doc as $key => $pass_value) {
             
              if($pass_value != '') { 
              $ext =  substr($pass_value, strrpos($pass_value, '.' )+1); 
        echo    '<div class="row">';
                if($ext!='jpg' && $ext!='jpeg' && $ext!='png' && $ext!='gif') {
				   if($ext=='pdf'){

		echo	 "<a href='#about' onclick=show_post_pdf('".$pass_value."') data-toggle='modal' data-image='".$pass_value."' id='editidpdf$pass_value'><span class='glyphicon glyphicon-file colorDocument'></span></a>";
				   }else{
				  echo "<a class='btn btn-success' href='uploads/images/$pass_value'  target='_new'><i class='ion-clipboard'></i></a>";
				    }
			   
			 } else{ 
	      echo "<a href='#about'  onclick=show_post('".$pass_value."') data-toggle='modal'  data-image='".$pass_value."' id='editid$pass_value'><span class='glyphicon glyphicon-file colorDocument'></span></a>";
               } 
               echo ' <li>'.$pass_value.'</li>';
	
               echo '</div>';
               }
     
        
          } 
        echo  '</div></div></div></div>';
         } ;
         
echo '</div>';
*/
		
		
	}
		function img()
	{
	    
	    $id = $this->input->post('id');
	    echo "<img src='uploads/images/$id' alt='staffavatar' width='auto' height='auto'>";
	}
		function pdf()
	{
	    
	    $id = $this->input->post('id');
	  echo "<object type='application/pdf' data='uploads/images/$id' width='100%' height='500' style='height: 85vh;' id='pdffile'>No Support</object>";
	}
	function form_supplier_new()
	{
		
		
		echo ' <form id="formsupplier" method="post"><div class="row"><div class="form-group col-sm-6"><label for="exampleInputFile">Supplier</label> <input type="text" name="supplier" placeholder="Enter Supplier" id="email" title="Supplier" aria-describedby="" class="form-control" value=""> <!----></div></div></form>';
	}
	function create() {
			
				
		if ( $this->Privileges_Model->check_privilege( 'material', 'create' ) ) {
			if ( isset( $_POST ) && count( $_POST ) > 0 ) {
				
		//echo '<pre>'; print_r($_POST); die;
				$hasError = false;
				
				if (!$hasError) {
					$appconfig = get_appconfig();
					 
					
						$dep = $this->input->post('department');
						$depts = implode(',',$dep);
						
						$emp_ids = $this->input->post('employee_id');
						$emp = implode(',',$emp_ids);
					
					
					
					
					$params = array(
						'created' => date( 'Y-m-d' ),
						'department' => $depts,
						'employee_id' => $emp,
						'name' => $this->input->post( 'name' ),
						'shift_ref' => $this->input->post( 'shift_ref' ),
				'start_time' => $this->input->post( 'start_time' ),
				'late_in_count_time' => $this->input->post( 'late_in_count_time'),
				'end_time' => $this->input->post( 'end_time' )
				//'late_out_count_time' => $this->input->post( 'late_out_count_time') 
				
				
				
					);
				//	print_r($params); die;
					  $shift_id = $this->Workshift_Model->add_shift( $params );
				 if($shift_id){
					$supp_data = $this->input->post('supp');
					
					 
					
				
								foreach(array_filter($supp_data['breakname']) as $k => $breakname){
									
								    
									$params1 = array(										
										
										'breakname' => $breakname,
										'start_time' => $supp_data['start_time'][$k],
										'end_time' => $supp_data['end_time'][$k],
										'shift_id' => $shift_id );
										
							 $this->Workshift_Model->add_workshift_items( $params1 );
					}
				
				//	$this->Material_Model->delete_supp();
				} 
					
				
					redirect(base_url().'workshift');
					
				}
			}
		} else {
			$data['success'] = false;
			$data['message'] = lang('you_dont_have_permission');
			echo json_encode($data);
		}
	}

function update(){
    
 // echo '<pre>'; print_r($_POST); die;
   	if ( isset( $_POST ) && count( $_POST ) > 0 ) {
   	    //echo '<pre>'; print_r($_POST); die;
   	    $shift_id = $this->input->post('shift_id');
   	    
   	     			$depts = $this->input->post('department');
						$dept = implode(',',$depts);
						
						
						$emps = $this->input->post('employee_id');
						$emp = implode(',',$emps);
						
					
   	    
   	    $params = array(
				'department' => $dept,
						'employee_id' => $emp,
						'name' => $this->input->post( 'name' ),
						'shift_ref' => $this->input->post( 'shift_ref' ),
				'start_time' => $this->input->post( 'start_time' ),
				'late_in_count_time' => $this->input->post( 'late_in_count_time'),
				'end_time' => $this->input->post( 'end_time' )
				//'late_out_count_time' => $this->input->post( 'late_out_count_time') 
				
				
				
				);
			$response = $this->Workshift_Model->update_shift($shift_id,$params);
			 $this->Workshift_Model->delete_shiftbreak_records($shift_id);
			
				$supp_data = $this->input->post('supp');
					//print_r(($supp_data)); die;
					if(!empty($supp_data)){   
				
				foreach(array_filter($supp_data['breakname']) as $k => $breakname){
								  
								   //if(is_numeric($supplier_id)){
									  
					$params1 = array(										
										
										'breakname' => $breakname,
										'start_time' => $supp_data['start_time'][$k],
										'end_time' => $supp_data['end_time'][$k],
										'shift_id' => $shift_id );
										
							 $this->Workshift_Model->add_workshift_items( $params1 );
					}
					
					}
				
				
		       
   	}
   		redirect(base_url().'workshift');
   
    
}

	function add_department() {
		if ( $this->Privileges_Model->check_privilege( 'staff', 'create' ) ) {
			if (isAdmin()) {
				if ( isset( $_POST ) && count( $_POST ) > 0 ) {
				    $mat_cat_name = $this->input->post('name');
				   $mc =  $this->Settings_Model->check_doc_category_exists($mat_cat_name);
				   if($mc['mat_cat_name'] == ''){
					$params = array(
						'doc_cat_name' => $mat_cat_name,
					);
					$department = $this->Settings_Model->add_doc_categories( $params );
					$data['message'] = lang('category').' '.lang('addmessage');
					$data['success'] = true;
				   }else{
				       
				       $data['message'] = 'Already by this name category exists';
						$data['success'] = false;
				   }
				}
			} else {
				$data['success'] = false;
				$data['message'] = lang('only_admin'). ' '.lang('create'). ' '.lang('category');
			}
		} else {
			$data['success'] = false;
			$data['message'] = lang('you_dont_have_permission');
		}
		echo json_encode($data);
	}
	
	function add_unit() {
		if ( $this->Privileges_Model->check_privilege( 'staff', 'create' ) ) {
			if (isAdmin()) {
				if ( isset( $_POST ) && count( $_POST ) > 0 ) {
				    $unit_name = $this->input->post( 'name' );
				     $unit =  $this->Settings_Model->check_material_unit_exists($unit_name);
				     if($unit['unit_name'] == ''){
					$params = array(
		'unit_name' 	=> $unit_name,
					);
					$department = $this->Settings_Model->add_unit_types( $params );
					$data['message'] = lang('unit').' '.lang('addmessage');
					$data['success'] = true;
				     }else{
				         $data['message'] = 'Already by this name unit exists';
						$data['success'] = false;
				     }
				}
			} else {
				$data['success'] = false;
				$data['message'] = lang('only_admin'). ' '.lang('create'). ' '.lang('unit');
			}
		} else {
			$data['success'] = false;
			$data['message'] = lang('you_dont_have_permission');
		}
		echo json_encode($data);
	}

	function update_department( $id ) {
		if ( $this->Privileges_Model->check_privilege( 'staff', 'edit' ) ) {
			if (isAdmin()) {
				$departments = $this->Settings_Model->get_doc_categories( $id );
				if ( isset( $departments[ 'doc_cat_id' ] ) ) {
					if ( isset( $_POST ) && count( $_POST ) > 0 ) {
						$params = array(
							'doc_cat_name' => $this->input->post( 'name' ),
						);
						$this->session->set_flashdata('ntf1', '<span><b>' . lang('categorytupdated') . '</b></span>');
						$this->Settings_Model->update_doc_cat($id, $params);
						$data['message'] = lang('category').' '.lang('updatemessage');
						$data['success'] = true;
						echo json_encode($data);
					}
				}
			} else {
				$data['success'] = false;
				$data['message'] = lang('only_admin'). ' '.lang('update'). ' '.lang('department');
				echo json_encode($data);
			}
		} else {
			$data['success'] = false;
			$data['message'] = lang('you_dont_have_permission');
			echo json_encode($data);
		}
	}
	
	function update_unit( $id ) {
		if ( $this->Privileges_Model->check_privilege( 'staff', 'edit' ) ) {
			if (isAdmin()) {
				$departments = $this->Settings_Model->get_unit( $id );
				if ( isset( $departments[ 'unit_type_id' ] ) ) {
					if ( isset( $_POST ) && count( $_POST ) > 0 ) {
						$params = array(
							'unit_name' => $this->input->post( 'name' ),
						);
						$this->session->set_flashdata('ntf1', '<span><b>' . lang('update') . '</b></span>');
						$this->Settings_Model->update_unit_type($id, $params);
						$data['message'] = lang('unit').' '.lang('updatemessage');
						$data['success'] = true;
						echo json_encode($data);
					}
				}
			} else {
				$data['success'] = false;
				$data['message'] = lang('only_admin'). ' '.lang('update'). ' '.lang('department');
				echo json_encode($data);
			}
		} else {
			$data['success'] = false;
			$data['message'] = lang('you_dont_have_permission');
			echo json_encode($data);
		}
	}


	function get_all_shifts() {
		if ( $this->Privileges_Model->check_privilege( 'material', 'all' ) ) {
			$staffs = $this->Workshift_Model->get_all_shifts();
			
			$data_staffs = array();
			foreach ( $staffs as $staff ) {
				
			
        if($staff['name'] == '1'){
			
			$name = 'Day Shift';
			
		}
		else if($staff['name'] == '2') {
			$name = 'Night Shift';
		}
       
       
			$dep_name = $this->Workshift_Model->get_department_name($staff['department']);
			
				$data_staffs[] = array(
					'id' => $staff[ 'shift_id' ],
					'name' => $name,
					'start_time' => $staff[ 'start_time' ],
					'end_time' => $staff['end_time'],
					'shift_ref' => $staff['shift_ref'],
					//'staff' => $staff_mem,
					'department' => $dep_name
					
				);
			};
			echo json_encode( $data_staffs );
		}
	}
	

     function delete(){
         $id = $this->input->post('id');
         $data = $this->Staff_Model->delete_other_documents($id);
         echo json_encode($data);
     }
     
    
	function view($id){
		$data['title'] = lang( 'Material View' );
		$data['materials'] = $this->Material_Model->get_material_record($id);
		$data['materials_suppliers'] = $this->Material_Model->get_all_suppliers_material($id);
		$data[ 'supplier' ] = $this->Supplier_Model->get_all_supplier();
			$data[ 'categories' ] = $this->Settings_Model->get_matdepartments();
			$data[ 'unittypes' ] = $this->Settings_Model->get_mat_unittype();
		$this->load->view('material/view',$data);

	}
	function delete_file(){
	    
	    $image_name = $this->input->post('val');
	    $id = $this->input->post('id');
	    
	    $data = $this->Material_Model->update_file($image_name,$id);
	    echo json_encode($data); 
	    
	}

	function update_stauts($id,$type,$status){
		if($type == 1) {
			 $data = array('passport_status' => $status );
			 $this->Staff_Model->update_staff_stauts( $id, $data ); 
		} 

		if($type == 2) {
			 $data = array('pin_status' => $status );
			 $this->Staff_Model->update_staff_stauts( $id, $data ); 
		}

		if($type == 3) {
			$new_status = $status == 1 ? 5 : 1; 
			 $data = array('status' => $new_status  );
			 $this->Staff_Model->update_staff_stauts( $id, $data ); 
		}
		//echo $this->db->last_query();
	}
	function edit_shift(){

		$shift_id = $this->input->post('id');
		$result = $this->Workshift_Model->get_workshift_record($shift_id);
		
		$break_records = $this->Workshift_Model->get_workshift_break_ecords($shift_id);
		$staff = $this->Staff_Model->get_all_staff();
			$departments = $this->Settings_Model->get_departments();
		//	$unittypes = $this->Settings_Model->get_mat_unittype();
        echo '<form id="form1" method="post" action="workshift/update">';
        echo '<div class="modal-header"><button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span></button><h4 class="modal-title">Update</h4> </div></div>';
        echo '<hr></hr>';
        echo '<input type="hidden" name="shift_id" id="shift_id"  value="'.$shift_id.'" >';
       /* echo '<div class="outerDivFull" ><div>Department / Employees </div><div class="switchToggle">';
		 if($result["status"] == 'on'){
		echo  '<input type="checkbox" id="switch" name="status" checked onchange="select_switch(this.value);">';
		 } else { 
		  	echo  '<input type="checkbox" id="switch" name="status" ">';   
		 }
   echo '<label for="switch">Toggle</label></div></div>';
		echo '</div>'; */
		echo '<div class="form-group">
	    <label for="shift_ref">Workshift Name</label>
	    <input type="text" name="shift_ref" id="shift_ref" class="form-control" required value="'.$result['shift_ref'].'">
	</div>';
     echo  '<div class="form-group" id="dept"> <label for="department">Departments</label><select class="form-control dep" id="department" multiple name="department[]" onchange="edit_department('.$shift_id.',this.value)" style="min-width: 200px;" data-width="100%"><option value="all" > Select All</option>';
	 if(isset($departments)){
		foreach($departments as $eachCat){
		      $selected = '';
			  $depts = explode(',',$result['department']);
			  foreach($depts as $dep) {
		       if($dep == $eachCat['id']){
										  $selected = "selected";
									}
			  }
	echo '<option value="'.$eachCat['id'].'" ' . $selected. '>'.$eachCat['name'].'</option>';
		 }
	 }
   echo '</select></div>';
   echo  '<div class="form-group" id="emp"> <label for="employees">Employees</label><select class="form-control emps" id="employee_id" multiple name="employee_id[]" onchange="select_employee(this.value)" style="min-width: 200px;" data-width="100%"><option value="all"  > Select All</option>';
	 if(isset($staff)){
		foreach($staff as $eachCat){
		      $selected = '';
			  $emps = explode(',',$result['employee_id']);
			  foreach($emps as $emp) {
		       if($emp == $eachCat['id']){
										  $selected = "selected";
									}
			  }
	echo '<option value="'.$eachCat['id'].'" ' . $selected. '>'.$eachCat['staffname'].'</option>';
		 }
	 }
   echo '</select></div>';
   echo '<div class="form-group ">
    <label for="exampleInputPassword1">Workshift Name</label>
    <select class="form-control" id="shift_name" placeholder="Shift Name" name="name"  required>';
	$selected = '';
	$selected1 = '';
	if($result['name'] == '1'){
		$selected = "selected";
	}else if($result['name'] == '2'){
		$selected1 = "selected";
	}
	echo '<option value="1" '.$selected.'>Day Shift</option>
	<option value="2" '.$selected1.'> Night Shift</option>
	</select>
  </div>';
   echo '<div class="row">
   <div class="form-group col-sm-6">
    <label for="">Start Time</label>
	<input type="time" class="form-control" id="start_time"  name="start_time" value="'.$result['start_time'].'" required>
	
	</div>';
echo '<div class="form-group col-sm-6">
    <label for="">End Time</label>
	<input type="time" class="form-control" id="end_time"  name="end_time" value="'.$result['end_time'].'" required>
 
  </div>';
         
echo '</div>';
echo '<div class="row"><div class="form-group col-sm-6">
    <label for="">Grace Period (In Mins)</label>
	<input type="text" class="form-control" id="late_in_count_time"  name="late_in_count_time" value="'.$result['late_in_count_time'].'" required></div>';
  /* echo '<div class="form-group col-sm-6">
    <label for="">Late Out  Count Time</label>
	<input type="time" class="form-control" id="late_out_count_time"  name="late_out_count_time" value="'.$result['late_out_count_time'].'" required> */
echo '</div></div><div class="form-group col-md-12">';
echo '<input type="hidden" id="count" name="count" value="'.count($break_records).'">';
 foreach($break_records as $k => $mat) {
    echo '<div class="field_wrapper1 row "><div id="div1" class="col-md-4 form-group " ><label for="exampleInputPassword1">Break</label>';  
	echo ' <input type="text" class="form-control " name="supp[breakname][]" id="break'.$k.'" placeholder="Break Name" autocomplete="off" required value="'.$mat['breakname'].'">';

  echo  '</div>'; 
		echo  '<div class="form-group col-md-4 row"><label for="exampleInputFile">Start Time</label><input type="time" name="supp[start_time][]"  id="start_time'.$k.'" title="start_time0" aria-describedby="" class="form-control" required value="'.$mat['start_time'].'">
        </div><div class="form-group col-md-4 "><label for="exampleInputFile">End Time</label><input type="time" name="supp[end_time][]"  id="end_time'.$k.'" title="Price" aria-describedby="" class="form-control" required value="'.$mat['end_time'].'"></div><a href="javascript:void(0);" class="remove_button"><i class="fa fa-minus-circle text-danger" style="font-size: 20px;"></i></a></div>
	   
		
		
	
  </div> ';
    
    
  } 
echo '
   <div class="field_wrapper row"> <div></div>';
	
echo '</div>
</div>';
echo '<div class="form-group col-md-6"><a href="javascript:void(0);" class="add_button1" title="Add field"><i class="fa fa-plus-circle text-success" style="font-size: 24px;"></i></a> <label for="inputZip">Add More</label></div>';
  echo ' <input type="submit" class="btn btn-success col-md-12"  value="Update">
</form>'; 

	//	redirect(base_url('material'));

	}
	
	function delete_shift(){

		$shift_id = $this->input->post('id');
		$data['deleteshift'] = $this->Workshift_Model->delete_shift($shift_id);
		$data['deleteshiftbreak'] = $this->Workshift_Model->delete_shiftbreak_records($shift_id);
	
	         echo json_encode($data);
	//	redirect(base_url('material'));

	}
	function validate_itemcode(){
	    $item_code = $this->input->post('item_code');
	    $code = $this->Material_Model->get_item_code($item_code);
	    $data['item_code'] = $code['item_code'];
	   
	    echo json_encode($data);
	    
	}
		function remove_department( $id ) {
		if ( $this->Privileges_Model->check_privilege( 'staff', 'delete' ) ) {
			if (isAdmin()) {
				$departments = $this->Settings_Model->get_doc_categories( $id );
				if ( isset( $departments[ 'doc_cat_id' ] ) ) {
					//$result2=$this->Settings_Model->check_material_record($id);
					$result2 = '';
					if (empty($result2)) {
						$this->Settings_Model->delete_doc_cat($id);
						$data['message'] = lang('category').' '.lang('deletemessage');
						$data['success'] = true;
						echo json_encode($data);
					} else {
						$data['message'] = lang('category').' '.lang('is_linked').' '.lang('with').' '.lang('category').', '.lang('so').' '.lang('cannot_delete').' '.lang('category');
						$data['success'] = false;
						echo json_encode($data);
					}
				}
			} else {
				$data['success'] = false;
				$data['message'] = lang('only_admin'). ' '.lang('delete'). ' '.lang('category');
				echo json_encode($data);
			}
		} else {
			$data['success'] = false;
			$data['message'] = lang('you_dont_have_permission');
			echo json_encode($data);
		}
	}
	
	function remove_unit( $id ) {
		if ( $this->Privileges_Model->check_privilege( 'staff', 'delete' ) ) {
			if (isAdmin()) {
				$departments = $this->Settings_Model->get_material_unit( $id );
				if ( isset( $departments[ 'unit_type_id' ] ) ) {
					$result2=$this->Settings_Model->check_unit_material_record($id);
					if (empty($result2)) {
						$this->Settings_Model->delete_mat_unit($id);
						$data['message'] = lang('unit').' '.lang('deletemessage');
						$data['success'] = true;
						echo json_encode($data);
					} else {
						$data['message'] = lang('unit').' '.lang('is_linked').' '.lang('with').' '.lang('unit').', '.lang('so').' '.lang('cannot_delete').' '.lang('unit');
						$data['success'] = false;
						echo json_encode($data);
					}
				}
			} else {
				$data['success'] = false;
				$data['message'] = lang('only_admin'). ' '.lang('delete'). ' '.lang('unit');
				echo json_encode($data);
			}
		} else {
			$data['success'] = false;
			$data['message'] = lang('you_dont_have_permission');
			echo json_encode($data);
		}
	}
function get_employees()
{
	$deps = $this->input->post('deps');
	//print_r($deps);
	if($deps != ''){
	$depts = implode(',',$deps);
	
	
	$employees = $this->Staff_Model->get_department_staff($depts);
	 echo '<label for="employees">Employees</label>';
	echo "<select class='form-control emps' id='employee_id' multiple name='employee_id[]' onchange='select_employee(this.value)' style='min-width: 200px;' data-width='100%'>";
	echo '<option value="all">Select All</option>';
	if(isset($employees)){
		foreach($employees as $emp){
			echo '<option value= '.$emp['id'].'>'.$emp[staffname].'</option>';
		}
		
	}
	echo "</select>";
	}else{
		 echo '<label for="employees">Employees</label>';
	echo "<select class='form-control' id='employee_id' multiple name='employee_id[]'>";
	//if(isset($employees)){
		//foreach($employees as $emp){
			//echo '<option value= '.$emp['id'].'>'.$emp[staffname].'</option>';
		//}
		
	//}
	echo "</select>";
	}
}
function get_edit_employees()
{
	$shift_id = $this->input->post('shift_id');
	$result = $this->Workshift_Model->get_workshift_record($shift_id);
	
	$deps = $this->input->post('deps');
	//print_r($deps);
	if($deps != ''){
	$depts = implode(',',$deps);
	
	
	$employees = $this->Staff_Model->get_department_staff($depts);
	 echo '<label for="employees">Employees</label>';
	echo "<select class='form-control emps' id='employee_id' multiple name='employee_id[]' onchange='select_employee(this.value)'>";
	echo '<option value="all">Select All</option>';
	if(isset($employees)){
		foreach($employees as $emp){		
			$selected = '';
			$exist_emps = explode(',',$result['employee_id']);
			foreach($exist_emps as $e) { 
			if($emp['id'] == $e){
				$selected = "selected";
			}
			}
			
			
			echo '<option value= '.$emp['id'].' '.$selected.'>'.$emp[staffname].'</option>';
		}
		
	}
	echo "</select>";
	}else{
		 echo '<label for="employees">Employees</label>';
	echo "<select class='form-control' id='employee_id' multiple name='employee_id[]'>";
	//if(isset($employees)){
		//foreach($employees as $emp){
			//echo '<option value= '.$emp['id'].'>'.$emp[staffname].'</option>';
		//}
		
	//}
	echo "</select>";
	}
}
function validate_employee(){
    $emp = $this->input->post('emp');
	//print_r($deps);
	
	$dayshift_record = $this->Workshift_Model->getshiftrecord($emp);
	
	if($dayshift_record != ''){
	    $data['status'] = 1;
	}
	else{
	    $data['status'] = 0;
	    
	}
	//print_r($data); die;
	echo json_encode($data);   
	
	
 
}


}