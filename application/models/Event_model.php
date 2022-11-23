<?php

class Event_model extends CI_Model
{
	private $_table = "event";

    public function get_publikasi()
	{
        $cond = array(
            'tanggal_mulai <=' => date("Y-m-d"),
            'tanggal_selesai >=' => date("Y-m-d"),
            'status >=' => 1,
        );
        $query = $this->db->select('nama_file')
                            ->get_where($this->_table, $cond);
        return $query->result_array();
	}

	public function get_event_list($slug = FALSE)
	{
        if ($slug === FALSE)
        {
                $this->db->order_by("id", "desc");
                $query = $this->db->get($this->_table);
                return $query->result_array();
        }

        $query = $this->db->get_where($this->_table, array('id' => $slug));
        return $query->row_array();
	}

        public function create_event($data)
        {
                $data = array(
                'judul' => $data['judul'],
                'pemilik' => $data['pemilik'],
                'nama_file' => $data['nama_file'],
                'tanggal_mulai' => $data['tanggal_mulai'],
                'tanggal_selesai' => $data['tanggal_selesai'],
                'status' => $data['status'],
                );

                $result = $this->db->insert($this->_table, $data);
                return $result;
        }

        public function delete_event($id)
        {
		$this->db->where('id', $id);
		$result = $this->db->delete($this->_table);
                return $result;
        }
}