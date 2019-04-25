<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_notes extends CI_Model
{
    private $_table = "notes";
    public $id_notes;
    public $note;
    public $folder;
    public $reminder;
    public $entry_date = null;
    public $file = "default.jpg";


    // public function rules()
    // {
    //     return  ['field' => 'note',
    //         'label' => 'Note',
    //         'rules' => 'required']
        
    // }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id_notes" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->note = $post["note"];
        // $this->folder = $post["folder"];
        // $this->reminder = $post["reminder"];
        $this->db->insert($this->_table, $this);
    }

    public function update($id)
    {
        $post = $this->input->post();
        $this->id_notes = $id;
        $this->note = $post["note"];
        $this->db->update($this->_table, $this, array('id_notes' => $id));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id_notes" => $id));
    }
}