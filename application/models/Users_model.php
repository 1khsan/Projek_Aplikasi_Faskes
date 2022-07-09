<?php
class Users_model extends CI_Model {
    private $table = 'users';
    private $id = null;
    public function getAll(){
        // SELECT * FROM jenis_faskes;
        // $query = $this->db->query("SELECT * FROM users WHERE role='public'");
       $query = $this->db->get($this->table);
        return $query->result();
    }

    public function findById($id){
        // SELEST * FROM jenis_faskes WHERE id = $id;
        $query = $this->db->where('id',$id );
        $query = $this->db->get($this->table);
        return $query->row();
    }
    
    public function save($data)
    {
        $sql = "INSERT INTO users (username,password,email) VALUES (?,md5(?),?)";
        $this->db->query($sql, $data);
        $this->id = $this->db->insert_id();
    }        
    
    public function update($data){
        $sql = "UPDATE users SET username=?,password=md5(?),email=? WHERE id=?";
        $this->db->query($sql, $data);
    }

    
    public function delete($id){
        $sql = "delete from users where id=?";
        $this->db->query($sql,array($id));
    }

    public function update_foto($array){
        $sql = "UPDATE users SET foto=? where id=?";
        $this->db->query($sql, $array);
    }
   
}
?>