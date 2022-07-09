<?php
class Faskes_model extends CI_Model 
{
    private $table = 'faskes';

    public function getAll(){
         // SELECT * FROM faskes;
        $query = $this->db->get($this->table);
        return $query->result();
    }

    public function findById($id){
        // SELEST * FROM faskes WHERE id = $id;
        $query = $this->db->where('id',$id);
        $query = $this->db->get($this->table);
        return $query->row();
    }

    public function save($data)
    {
        $sql = "INSERT INTO faskes (nama,alamat,latlong,jenis_id,deskripsi,skor_rating,kecamatan_id,website,jumlah_dokter,jumlah_pegawai) VALUES (?,?,?,?,?,?,?,?,?,?) ";
        // die(print_r($sql));
        $this->db->query($sql, $data);
        $this->id = $this->db->insert_id();
    }        
    
    
    public function update($data){
        $sql = "UPDATE faskes SET nama=?,alamat=?,latlong=?,jenis_id=?,deskripsi=?,skor_rating=?,kecamatan_id=?,website=?,jumlah_dokter=?,jumlah_pegawai=?   where id=?";
        // die(print_r($sql));
        $this->db->query($sql, $data);
        $this->id = $this->db->insert_id();
    }

    
    public function delete($id){
        $sql = "delete from faskes where id=?";
        $this->db->query($sql,array($id));
    }

    public function update_foto1($array){
        $sql = "UPDATE faskes SET foto1=? where id=?";
        $this->db->query($sql, $array);
    }
    public function update_foto2($array){
        $sql = "UPDATE faskes SET foto2=? where id=?";
        $this->db->query($sql, $array);
    }
    public function update_foto3($array){
        $sql = "UPDATE faskes SET foto3=? where id=?";
        $this->db->query($sql, $array);
    }

}