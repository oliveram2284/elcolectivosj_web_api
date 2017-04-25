<?php
class Companies_model extends CI_Model {

  public function __construct()
  {
    $this->load->database();
  }


  public function  insert($data=array()){

    $this->db->set('created_at', 'NOW()', FALSE);    
    $result=$this->db->insert('companies',$data);
    return $result;
  }

  public function  update($id=0,$data){
    $result=$this->db->update('companies', $data, array('id' => $id));
    return $result;
  }


  public function getAll($actived=false){
    if($actived){
      $this->db->where('status','1');
    }
    $this->db->order_by('name');
    $query = $this->db->get('companies');
    return $query->result_array();
  }

  public function getById($id=0){
    $query = $this->db->get_where('companies', array('id' => $id));
    return $query->row_array();
  }

  public function getLinesByCompanyId($companyId=0,$actived=false){
    if($actived){
      $this->db->where('status','1');
    }
    $query = $this->db->order_by('name')->get_where('lines', array('company_id' => $companyId));
    return $query->result_array();
  }

  public function getLineById($lineId=0){
    $query = $this->db->get_where('lines', array('id' => $lineId));
    return $query->row_array();
  }

  public function getPathsByLineId($lineId=0,$actived=false){

    if($actived){
      $this->db->where('status','1');
    }
    $query = $this->db->order_by('name')->get_where('paths', array('line_id' => $lineId));
    return $query->result_array();
  }

  public function getPathById($pathId=0){
    $query = $this->db->get_where('paths', array('id' => $pathId));
    return $query->row_array();
  }

  public function getSchedulesByPathId($pathId=0,$actived=false){

    if($actived){
      $this->db->where('status','1');
    }
    $query = $this->db->order_by('id')->get_where('schedules', array('path_id' => $pathId));
    $schedules=$query->result_array();
    $result=array();
    foreach($schedules as $key => $item){
      $item['timetable']=unserialize($item['timetable']);
      $schedules[$key]=$item;
    }


    return $schedules;
  }



}
