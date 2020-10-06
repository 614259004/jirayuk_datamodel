<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Alumni extends CI_Model {

	
	public function register($data)
	{
		$this->db->insert('alumni',$data);
    }
    
    public function update_work($data,$al_id)
	{
        $this->db->where('al_id',$al_id);
		$this->db->update('alumni',$data);
    }
    
    public function update_contact($data,$al_id)
	{
        $this->db->where('al_id',$al_id);
        $this->db->update('alumni',$data);
    }
    
    public function getAlumni()
	{
        $this->db->select('al_id','al_name','al_lastname','al_age','al_phone','al_work','al_email');
        $result=$this->db->get('alumni');
        return  $result ;
	}
}
?>