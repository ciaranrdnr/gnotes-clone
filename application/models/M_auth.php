<?php
class M_auth extends CI_Model {

    
    public function simpan($data) 
    {
        $this->db->insert('tubes', $data);
    }

    /*    public function auth_login($user,$pass)
    {
        $this->db->where('Email',$user);
        $this->db->where('Password',$pass);
        $auth = $this->db->get('tubes');
        return $auth->row();
    }*/

    public function auth_login($Email, $Password){
        $this->db->where('Email', $Email); // Untuk menambahkan Where Clause : username='$username'
        $this->db->where('Password', $Password); //untuk menambahkan where clause : password='$password'
        $result = $this->db->get('tubes')->row(); // Untuk mengeksekusi dan mengambil data hasil query
        return $result;
}

    public function update($id,$tubes) 
    {
        $this->db->where('id',$id);
        $this->db->update('tubes',$tubes);
    }

}