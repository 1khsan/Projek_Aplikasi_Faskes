<?php
class Login_model extends CI_Model {
    private $table = 'users';
    public function getAll(){
        // SELECT * FROM jenis_faskes;
        $query = $this->db->get($this->table);
        return $query->result();
    }

    public function findById($id){
        // SELEST * FROM jenis_faskes WHERE id = $id;
        $query = $this->db->where('id',$id );
        $query = $this->db->get($this->table);
        return $query->row();
    }

    public function login($username, $password){
        $sql = "SELECT * FROM users WHERE username = ? and password = md5(?)";
        $data = [$username,$password];
        $query = $this->db->query($sql, $data);
        return $query->row();

        
    }
   
}
?>