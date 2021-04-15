<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Data_kelas extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Data_kelas_model');
        $this->load->library('form_validation');
        //$db2 = $this->load->database('database_kedua', TRUE);
        //$this->check();
    }

    
    public function check()
    {
        if ($this->uri->uri_string() !== 'auth' && ! $this->session->userdata('logged_in'))
            //&& $this->uri->uri_string() !== 'user/reset_password' &&  $this->uri->uri_string() !== 'user/pilihan') // biar false (pengecualian)
        {     
            redirect('auth');
        }
    }
    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'data_kelas/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'data_kelas/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'data_kelas/index.html';
            $config['first_url'] = base_url() . 'data_kelas/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Data_kelas_model->total_rows($q);
        $data_kelas = $this->Data_kelas_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'data_kelas_data' => $data_kelas,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->load->view('data_kelas/data_kelas_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Data_kelas_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id' => $row->id,
		'kelas' => $row->kelas,
	    );
            $this->load->view('data_kelas/data_kelas_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Data tidak ditemukan');
            redirect(site_url('data_kelas'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Tambah',
            'action' => site_url('data_kelas/create_action'),
	    'id' => set_value('id'),
	    'kelas' => set_value('kelas'),
	);
        $this->load->view('data_kelas/data_kelas_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'kelas' => $this->input->post('kelas',TRUE),
	    );

            $this->Data_kelas_model->insert($data);
            $this->session->set_flashdata('message', 'Tambah Data Berhasil');
            redirect(site_url('data_kelas'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Data_kelas_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Ubah',
                'action' => site_url('data_kelas/update_action'),
		'id' => set_value('id', $row->id),
		'kelas' => set_value('kelas', $row->kelas),
	    );
            $this->load->view('data_kelas/data_kelas_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Data tidak ditemukan');
            redirect(site_url('data_kelas'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id', TRUE));
        } else {
            $data = array(
		'kelas' => $this->input->post('kelas',TRUE),
	    );

            $this->Data_kelas_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Ubah Data Berhasil');
            redirect(site_url('data_kelas'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Data_kelas_model->get_by_id($id);

        if ($row) {
            $this->Data_kelas_model->delete($id);
            $this->session->set_flashdata('message', 'Hapus Data Berhasil');
            redirect(site_url('data_kelas'));
        } else {
            $this->session->set_flashdata('message', 'Data tidak ditemukan');
            redirect(site_url('data_kelas'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('kelas', 'kelas', 'trim|required');

	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Data_kelas.php */
/* Location: ./application/controllers/Data_kelas.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2021-04-01 06:36:43 */
/* http://harviacode.com */