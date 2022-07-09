<?php
class Jenis_faskes_model extends CI_Model {
    private $table = 'jenis_faskes';
    public ?string $nama = null;
    public ?string $id = null;
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

    public function save($data)
    {
        $sql = "INSERT INTO jenis_faskes (id,nama) VALUES (default,?)";
        $this->db->query($sql, $data);
        $this->id = $this->db->insert_id();
    }        
    
    public function update($data){
        $sql = "UPDATE jenis_faskes SET id=?,  nama=? WHERE id=?";
        $this->db->query($sql, $data);
    }

    
    public function delete($id){
        $sql = "delete from jenis_faskes where id=?";
        $this->db->query($sql,array($id));
    }

    public function update_foto($array){
        $sql = "UPDATE jenis_faskes SET foto=? where id=?";
        $this->db->query($sql, $array);
    }


}