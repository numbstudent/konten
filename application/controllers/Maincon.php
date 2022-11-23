<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Maincon extends CI_Controller {
	

	public function event_list()
	{
		$this->load->model('event_model');
		$data['data'] = $this->event_model->get_event_list();
        $data['title'] = 'Event';
		$this->load->view('header');
		$this->load->view('home', $data);
		$this->load->view('footer');
	}

	public function create_event()
	{
		$this->load->model('event_model');
        $data['title'] = 'Event';
		$this->load->view('header');
		$this->load->view('create_event', $data);
		$this->load->view('footer');
	}

	public function delete_event($id)
	{
		$this->load->model('event_model');
		$result = $this->event_model->delete_event($id);
		if (! $result) {
			$this->session->set_flashdata('message', 'Gagal menghapus data!');
		}else{
			$this->session->set_flashdata('message', 'Data berhasil dihapus.');
		}
		redirect('home');
	}


	function upload_image(){
		$this->load->model('event_model');
        $this->load->library('upload');

        $config['upload_path'] = './media/event/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
		$config['overwrite'] = true;
		$config['max_size']             = 1024; // batas ukuran file: 1MB
		$config['max_width']            = 1080; // batas lebar gambar dalam piksel
		$config['max_height']           = 1080;
        // $config['encrypt_name'] = TRUE; //Enkripsi nama yang terupload
 
        $this->upload->initialize($config);
        if(!empty($_FILES['nama_file']['name'])){
 
            if ($this->upload->do_upload('nama_file')){
                $gbr = $this->upload->data();
                //Compress Image
                $config['image_library']='gd2';
                $config['source_image']='./media/event/'.$gbr['file_name'];
                $config['create_thumb']= FALSE;
                $config['maintain_ratio']= TRUE;
                // $config['quality']= '50%';
                $config['width']= 600;
                // $config['height']= 400;
                $config['new_image']= './media/event/'.$gbr['file_name'];
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();
				
				$data = array(
					'judul' => $this->input->post('judul'), 
					'pemilik' => $this->input->post('pemilik'),
					'nama_file' => $gbr['file_name'],
					'tanggal_mulai' => $this->input->post('tanggal_mulai'),
					'tanggal_selesai' => $this->input->post('tanggal_selesai'),
					'status' => $this->input->post('status'),
				);
				echo($this->input->post('status'));
                $this->event_model->create_event($data);
				$this->session->set_flashdata('message', 'Data berhasil ditambahkan.');
            }else{
				$this->session->set_flashdata('message', $this->upload->display_errors());
				redirect('event/create');
			}
                      
        }else{
			$this->session->set_flashdata('message', 'Image yang diupload kosong!');
			redirect('event/create');
        }
		redirect('home');
    }

	public function event_publikasi()
	{
		$this->load->model('event_model');
		$data['data'] = $this->event_model->get_publikasi();		
		$this->load->view('publikasi', $data);
	}
}
