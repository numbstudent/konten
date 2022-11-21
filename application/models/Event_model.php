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
        // $query = $this->db->where('tanggal_mulai <=', "CURDATE()")
        //                 ->where('tanggal_selesai >=', "CURDATE()")
        //                 ->where('status', 1);
        return $query->result_array();
	}

	public function get_event_list($slug = FALSE)
	{
        if ($slug === FALSE)
        {
                $query = $this->db->get($this->_table);
                return $query->result_array();
        }

        $query = $this->db->get_where($this->_table, array('id' => $slug));
        return $query->row_array();
	}
}