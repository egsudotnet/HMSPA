<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pathologys extends CI_Controller {
	private $body_Data;
	function __construct()
	{
		parent::__construct();
		if(!is_login()){
			redirect(base_url('login'));
		}
		only_access(array("doctor","admin"));
		$this->body_Data = array();
		$this->body_Data['title'] = 'Pathologys';
		$this->load->model(array('Department_model','Pathology_model'));
		$allDepartments = $this->Department_model->get();
		$departmentArrray = array();
		foreach ($allDepartments as $key => $value) {
			$departmentArrray[$value->id] = $value->name;
		}
		$countries = get_country();
		/*
			Form
		*/
		$this->body_Data['inputs'] = array();
		$this->body_Data['inputs']['name'] 	=	array(
									'label' => 'Keterangan Klinis',
									'id' => 'name',
									'fn_arg' => array(
											'class' => 'form-control',
											'name' => 'keterangan',
											'id' => 'keterangan',
											'value' => set_value('keterangan')
										)
								);


		$this->body_Data['inputs']['diagnosis'] 	=	array(
			'label' => 'Diagnosis Klinis',
			'id' => 'diagnosis',
			'fn' => 'form_dropdown',
			'fn_arg' => array(
					'class' => 'form-control',
					'name' => 'diagnosis',
					'id' => 'diagnosis',
					// 'options' => $diagnosisArrray,
					'value' => set_value('diagnosis')
				)
		);

		$this->body_Data['inputs']['picture_diagnosis'] 	=	array(
			'label' => 'Photo Diagnosis Klinis',
			'id' => 'picture',
			'media' => true,
			'fn_arg' => array(
					'class' => 'form-control',
					'name' => 'picture',
					'id' => 'picture',
					'value' => set_value('picture')
				)
		);
		
		$this->body_Data['inputs']['temuan'] 	=	array(
			'label' => 'Temuan laboratorium',
			'id' => 'temuan',
			'fn_arg' => array(
					'class' => 'form-control',
					'name' => 'temuan',
					'id' => 'temuan',
					'value' => set_value('temuan')
				)
		);
		
		$this->body_Data['inputs']['picture_radiology'] 	=	array(
			'label' => 'Photo Radiology',
			'id' => 'picture_radiology',
			'media' => true,
			'fn_arg' => array(
					'class' => 'form-control',
					'name' => 'picture_radiology',
					'id' => 'picture_radiology',
					'value' => set_value('picture')
				)
		);
		
		$this->body_Data['inputs']['gambaran_radiology'] 	=	array(
			'label' => 'Gambaran Radiology',
			'id' => 'gambaran_radiology',
			'fn_arg' => array(
					'class' => 'form-control',
					'name' => 'gambaran_radiology',
					'id' => 'gambaran_radiology',
					'value' => set_value('gambaran_radiology')
				)
		);
		
		
		$this->body_Data['inputs']['topography'] 	=	array(
			'label' => 'Topography Klinis',
			'id' => 'topography',
			'fn' => 'form_dropdown',
			'fn_arg' => array(
					'class' => 'form-control',
					'name' => 'topography',
					'id' => 'topography',
					// 'options' => $topographyArrray,
					'value' => set_value('topography')
				)
		);
		
		$this->body_Data['inputs']['mormphlogy'] 	=	array(
			'label' => 'Mormphlogy Klinis',
			'id' => 'mormphlogy',
			'fn' => 'form_dropdown',
			'fn_arg' => array(
					'class' => 'form-control',
					'name' => 'mormphlogy',
					'id' => 'mormphlogy',
					// 'options' => $mormphlogyArrray,
					'value' => set_value('mormphlogy')
				)
		);
		
		$this->body_Data['inputs']['picture_macroscopic'] 	=	array(
			'label' => 'Photo Macroscopic',
			'id' => 'picture_macroscopic',
			'media' => true,
			'fn_arg' => array(
					'class' => 'form-control',
					'name' => 'picture_macroscopic',
					'id' => 'picture_macroscopic',
					'value' => set_value('picture')
				)
		);
		
		$this->body_Data['inputs']['keterangan_macroscopic'] 	=	array(
			'label' => 'Keterangan Macroscopic',
			'id' => 'keterangan_macroscopic',
			'fn_arg' => array(
					'class' => 'form-control',
					'name' => 'keterangan_macroscopic',
					'id' => 'keterangan_macroscopic',
					'value' => set_value('keterangan_macroscopic')
				)
		);
		
		$this->body_Data['inputs']['diagnosis_banding'] 	=	array(
			'label' => 'Diagnosis Banding',
			'id' => 'diagnosis_banding',
			'fn' => 'form_textarea',
			'fn_arg' => array(
					'class' => 'form-control',
					'name' => 'diagnosis_banding',
					'id' => 'diagnosis_banding',
					'value' => set_value('diagnosis_banding')
				)
		);

		
		$this->body_Data['inputs']['picture_tambahan'] 	=	array(
			'label' => 'Photo Pemeriksaan Tambahan',
			'id' => 'picture_tambahan',
			'media' => true,
			'fn_arg' => array(
					'class' => 'form-control',
					'name' => 'picture_tambahan',
					'id' => 'picture_tambahan',
					'value' => set_value('picture')
				)
		);
		
		$this->body_Data['inputs']['keterangan_tambahan'] 	=	array(
			'label' => 'Keterangan tambahan',
			'id' => 'keterangan_tambahan',
			'fn_arg' => array(
					'class' => 'form-control',
					'name' => 'keterangan_tambahan',
					'id' => 'keterangan_tambahan',
					'value' => set_value('keterangan_tambahan')
				)
		);
		
		$this->body_Data['inputs']['diagnosis_akhir'] 	=	array(
			'label' => 'Diagnosis Akhir',
			'id' => 'diagnosis_akhir',
			'fn' => 'form_textarea',
			'fn_arg' => array(
					'class' => 'form-control',
					'name' => 'diagnosis_akhir',
					'id' => 'diagnosis_akhir',
					'value' => set_value('diagnosis_akhir')
				)
		);
		
		$this->body_Data['inputs']['terapi'] 	=	array(
			'label' => 'Terapy',
			'id' => 'terapi',
			'fn' => 'form_textarea',
			'fn_arg' => array(
					'class' => 'form-control',
					'name' => 'terapi',
					'id' => 'terapi',
					'value' => set_value('terapi')
				)
		);
		
		$this->body_Data['inputs']['diskusi'] 	=	array(
			'label' => 'Diskusi',
			'id' => 'diskusi',
			'fn' => 'form_textarea',
			'fn_arg' => array(
					'class' => 'form-control',
					'name' => 'diskusi',
					'id' => 'diskusi',
					'value' => set_value('diskusi')
				)
		);

	}

	public function index()
	{
		$this->page();
	}
	
	public function page($page = 1)
	{
		$this->body_Data['title'] = "All Pathologys";
		$this->body_Data['all_pathologys'] = $this->Pathology_model->get();
		$this->load->view('header');
		$this->load->view('pathologys/all_pathologys',$this->body_Data);
		$this->load->view('footer');
	}

	public function add(){
		$this->body_Data['title'] = 'Add New Pathology';
		
		/*
			Form Validations
		*/
		$this->load->library(array('form_validation'));
		$validations = array();
		$validations[] = array(
					'field' => 'name',
					'label' => 'Department Name',
					'rules' => 'required',
				);
		$validations[] = array(
					'field' => 'nic',
					'label' => 'National ID Card',
					'rules' => 'required|callback__pathology_check',
				);
		$this->form_validation->set_rules($validations);
		if($this->form_validation->run()){
			$newData = array();
			foreach ($this->input->post() as $key => $value) {
				$newData[$key] = $value;
			}
			$this->Pathology_model->add($newData);
			$this->body_Data['message'] = "A pathology has been added.";
		}
		$this->load->view('header');
		// $this->load->view('pathologys/add',$this->body_Data);
		$this->load->view('forms',$this->body_Data);
		$this->load->view('footer');
	}

	public function update($id = null){
		if(is_null($id))
			return;
		$this->body_Data['title'] = 'Update Pathology';
		
		/*
			Form Validations
		*/
		$this->load->library(array('form_validation'));
		$this->load->model("Pathology_model");
		$validations = array();
		$validations[] = array(
					'field' => 'name',
					'label' => 'Department Name',
					'rules' => 'required',
				);
		$pathology = $this->Pathology_model->Get(array("id" => $id));

		if(isset($pathology[0]->id)){
			$this->body_Data['inputs']['name']['fn_arg']['value'] 	= $pathology[0]->name;
			$this->body_Data['inputs']['nic']['fn_arg']['value'] 	= $pathology[0]->nic;
			$this->body_Data['inputs']['department']['fn_arg']['value'] 	= $pathology[0]->department;
			$this->body_Data['inputs']['blood_group']['fn_arg']['value'] 	= $pathology[0]->blood_group;
			$this->body_Data['inputs']['birth_date']['fn_arg']['value'] 	= $pathology[0]->birth_date;
			$this->body_Data['inputs']['sex']['fn_arg']['value'] 	= $pathology[0]->sex;
			$this->body_Data['inputs']['email']['fn_arg']['value'] 	= $pathology[0]->email;
			$this->body_Data['inputs']['phone']['fn_arg']['value'] 	= $pathology[0]->phone;
			$this->body_Data['inputs']['country']['fn_arg']['value'] 	= $pathology[0]->country;
			$this->body_Data['inputs']['state']['fn_arg']['value'] 	= $pathology[0]->state;
			$this->body_Data['inputs']['address']['fn_arg']['value'] 	= $pathology[0]->address;
			$this->body_Data['inputs']['about']['fn_arg']['value'] 	= $pathology[0]->about;
			$this->body_Data['inputs']['picture']['fn_arg']['value'] 	= $pathology[0]->picture;
		}
		$this->form_validation->set_rules($validations);
		if($this->form_validation->run()){
			$newData = array();
			$dataNeed = array("name","nic","department","blood_group","birth_date","sex","email","phone","country","state","address","about","picture");
			foreach ($dataNeed as $dataNeedKey => $dataNeedValue) {
				$newData[$dataNeedValue] = $this->input->post($dataNeedValue);
				$this->body_Data['inputs'][$dataNeedValue]['fn_arg']['value'] = $this->input->post($dataNeedValue);
			}
			$this->Pathology_model->Update(array("id" => $id),$newData);
			$this->body_Data['message'] = "A pathology has been updated.";
		}
		$this->load->view('header');
		$this->load->view('forms',$this->body_Data);
		$this->load->view('footer');
	}
	/*
		Delete a department
	*/
	public function delete($id = null){
		if(is_null($id))
			return;
		$this->Pathology_model->delete(array('id'=>$id));
		$this->index();
	}
	/*
		View all details about a department
	*/
	public function about($id = null){
		if(is_null($id))
			return;
		$this->body_Data['inputs'] = '';
		$this->body_Data['pathology'] = $this->Pathology_model->get(array('id'=>$id));
		$this->body_Data['allSchedule'] = $this->Pathology_model->getSchedule(array("pathology_id" => $id));
		$this->load->view('header');
		$this->load->view('pathologys/about',$this->body_Data);
		$this->load->view('footer');
	}
	/*
		Delete a department
	*/
	public function createSchedule($id){
		$this->body_Data['title'] = 'Create new schedule';
		$this->body_Data['inputs']= array();
		$this->body_Data['inputs']['day_of_week'] 	=	array(
									'label' => 'Day of the week',
									'id' => 'day_of_week',
									'fn' => 'form_dropdown',
									'fn_arg' => array(
											'class' => 'form-control',
											'name' => 'day_of_week',
											'id' => 'day_of_week',
											'options' => get_days(),
											'value' => set_value('day_of_week')
										)
								);
		$this->body_Data['inputs']['start_time'] 	=	array(
									'label' => 'Start Visiting Time',
									'id' => 'start_time',
									'fn_arg' => array(
											'class' => 'form-control',
											'name' => 'start_time',
											'id' => 'start_time',
											'value' => set_value('start_time')
										)
								);
		$this->body_Data['inputs']['end_time'] 	=	array(
									'label' => 'End Visiting Time',
									'id' => 'end_time',
									'fn_arg' => array(
											'class' => 'form-control',
											'name' => 'end_time',
											'id' => 'end_time',
											'value' => set_value('end_time')
										)
								);
		$this->body_Data['inputs']['max_num_of_patients']=	array(
												'label' => 'Maximum Patients Will Visit',
												'id' => 'max_num_of_patients',
												'fn_arg' => array(
														'class' => 'form-control',
														'name' => 'max_num_of_patients',
														'id' => 'max_num_of_patients',
														'value' => set_value('max_num_of_patients')
													)
											);
		$this->body_Data['inputs']['fees']=	array(
												'label' => 'Visiting Fees',
												'id' => 'fees',
												'fn_arg' => array(
														'class' => 'form-control',
														'name' => 'fees',
														'id' => 'fees',
														'value' => set_value('fees')
													)
											);
		$this->body_Data['inputs']['comment']=	array(
												'label' => 'Comments',
												'id' => 'comment',
												'fn_arg' => array(
														'class' => 'form-control',
														'name' => 'comment',
														'id' => 'comment',
														'value' => set_value('comment')
													)
											);
		if($this->isValidForSchedule()){
			$newData = array();
			$newData['day_of_week'] = $this->input->post("day_of_week");
			$newData['start_time'] = $this->input->post("start_time");
			$newData['end_time'] = $this->input->post("end_time");
			$newData['max_num_of_patients'] = $this->input->post("max_num_of_patients");
			$newData['fees'] = $this->input->post("fees");
			$newData['comment'] = $this->input->post("comment");
			$newData['pathology_id'] = $id;
			$this->Pathology_model->addSchedule($newData);
			$this->body_Data['message'] = "Schedule Added";
			$this->body_Data['type'] = "success";
			redirect(base_url('pathologys/about/'.$id));
		}
		$this->load->view('header');
		$this->load->view('forms',$this->body_Data);
		$this->load->view('footer');
	}
	private function isValidForSchedule()
	{
		$this->load->library(array('form_validation'));
		$validationsRules = array();
		$validationsRules[] = array(
						'field'	=> 'day_of_week',
						'label'	=> 'Day Of Week',
						'rules'	=> 'required'
					);
		$validationsRules[] = array(
						'field'	=> 'start_time',
						'label'	=> 'Visiting Time Start',
						'rules'	=> 'required'
					);
		$validationsRules[] = array(
						'field'	=> 'end_time',
						'label'	=> 'Visiting Time End',
						'rules'	=> 'required'
					);
		$validationsRules[] = array(
						'field'	=> 'max_num_of_patients',
						'label'	=> 'Maximum Patients',
						'rules'	=> 'required|integer'
					);
		$validationsRules[] = array(
						'field'	=> 'fees',
						'label'	=> 'Fees',
						'rules'	=> 'required'
					);
		$this->form_validation->set_rules($validationsRules);
		return $this->form_validation->run();
	}
	public function deleteSchedule($pathologyId,$scheduleId)
	{
		$this->Pathology_model->deleteSchedule($pathologyId,$scheduleId);
		redirect(base_url('pathologys/about/'.$pathologyId));
	}

	public function Appoinments($id,$patientId = null)
	{
		$this->load->model(array("Hospital_model"));
		$this->load->library("form_validation");
		$this->body_Data['inputs'] = '';
		$this->body_Data['pathologyId'] = $id;
		$this->body_Data['patientId'] = $patientId;
		$this->body_Data['pathology'] = $this->Pathology_model->get(array('id'=>$id));

		$this->body_Data['allSchedule'] = $this->Pathology_model->getSchedule(array("pathology_id" => $id));

		$this->form_validation->set_rules("date","Date","required");
		if($this->form_validation->run()){
			$this->Hospital_model->set_table('appoinment');
			$date = $this->input->post("date");
			$this->body_Data["appoinments"] = $this->Hospital_model->Get_Data(array("pathology_id" => $id, "date" => $date),array("serial_no","asc"));
		}elseif($patientId != null){
			$this->Hospital_model->set_table('appoinment');
			$this->body_Data["appoinments"] = $this->Hospital_model->Get_Data(array("pathology_id" => $id, "patient_id" => $patientId),array("serial_no","asc"));
		}else{

		}

		$this->load->view('header');
		$this->load->view('pathologys/appoinments',$this->body_Data);
		$this->load->view('footer');
	}
	public function Addprescription(){
		$this->load->model(array("Hospital_model","Pathology_model"));
		$this->load->library("form_validation");
		$this->load->view("pathologys/form_prescription");
	}
	public function AddprescriptionSave(){
		if($this->input->post("apionment_id")){
			$data = array();
			$apionment_id = $this->input->post("apionment_id");
			$data["prescription"] =  $this->input->post("prescription");
			$this->Hospital_model->set_table('appoinment');	
			$this->Hospital_model->Update_Data(array('id' => $apionment_id),$data);	
		}
		
	}
	public function _pathology_check($data){
		if ($this->Pathology_model->exist(array('nic'=>$this->input->post('nic'))))
        {
                $this->form_validation->set_message('_pathology_check', 'Pathology Exist');
                return FALSE;
        }
        else
        {
                return TRUE;
        }
	}
}
