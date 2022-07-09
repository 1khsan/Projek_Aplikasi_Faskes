<?php
class komentar_model extends CI_Model {
    private $table = 'komentar';
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
        $sql ="INSERT INTO komentar (isi,users_id,faskes_id,nilai_rating_id) VALUES (?,?,?,?)";
       
        $this->db->query($sql,$data);
        $this->id = $this->db->insert_id();
    }        
    
    public function update($data){
        $sql = "UPDATE komentar SET id=?,  nama=? WHERE id=?";
        $this->db->query($sql, $data);
    }

    
    public function delete($id){
        $sql = "delete from komentar where id=?";
        $this->db->query($sql,array($id));
    }

    public function update_foto($array){
        $sql = "UPDATE komentar SET foto=? where id=?";
        $this->db->query($sql, $array);
    }
   
}
?>