<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Mapel_m extends CI_Model
{

    public static $pk = 'idmapel';

    public static $table = 'mapel';
    public static $table_category = 'mapel_kategori';

    public function __construct()
    {
        parent::__construct();
        //Do your magic here
    }

    public function getData()
    {
        $this->db->select('mapel.*, mapel_kategori.kategori');
        $this->db->from('mapel');
        $this->db->join('mapel_kategori', 'mapel.kategori = mapel_kategori.id', 'left'); // Assuming users.role_id references roles.id
        $query = $this->db->get();
        return $query->result();
    }

    public function getDataByCode($code)
    {
        $this->db->select('mapel.*, mapel_kategori.kategori');
        $this->db->from('mapel');
        $this->db->where('mapel_kd', $code);
        $this->db->join('mapel_kategori', 'mapel.kategori = mapel_kategori.id', 'left'); // Assuming users.role_id references roles.id
        $query = $this->db->get();
        return $query->row_array();
    }

    public function getCategoryData()
    {
        return $this->db->get(self::$table_category)->result();
    }
}

/* End of file Mapel_m.php */