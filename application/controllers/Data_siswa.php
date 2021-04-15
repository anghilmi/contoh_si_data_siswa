<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Data_siswa extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Data_siswa_model');
        $this->load->library('form_validation');
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
            $config['base_url'] = base_url() . 'data_siswa/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'data_siswa/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'data_siswa/index.html';
            $config['first_url'] = base_url() . 'data_siswa/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Data_siswa_model->total_rows($q);
        $data_siswa = $this->Data_siswa_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'data_siswa_data' => $data_siswa,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->load->view('data_siswa/data_siswa_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Data_siswa_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id' => $row->id,
		'timestamp' => $row->timestamp,
		'ra_md' => $row->ra_md,
		'nm_siswa' => $row->nm_siswa,
		'tmpt_lhr' => $row->tmpt_lhr,
		'ttl' => $row->ttl,
		'jk' => $row->jk,
		'nik_siswa' => $row->nik_siswa,
		'sklh_umum' => $row->sklh_umum,
		'kelas_sklh' => $row->kelas_sklh,
		'tgl_masuk' => $row->tgl_masuk,
		'kelas_mad' => $row->kelas_mad,
		'alamat' => $row->alamat,
		'desa' => $row->desa,
		'kec' => $row->kec,
		'kab' => $row->kab,
		'prov' => $row->prov,
		'no_kk' => $row->no_kk,
		'nm_ayah' => $row->nm_ayah,
		'nik_ayah' => $row->nik_ayah,
		'pend_ayah' => $row->pend_ayah,
		'kerja_ayah' => $row->kerja_ayah,
		'nm_ibu' => $row->nm_ibu,
		'nik_ibu' => $row->nik_ibu,
		'pend_ibu' => $row->pend_ibu,
		'kerja_ibu' => $row->kerja_ibu,
		'gol_ekonomi' => $row->gol_ekonomi,
		'status_siswa' => $row->status_siswa,
	    );
            $this->load->view('data_siswa/data_siswa_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Data tidak ditemukan');
            redirect(site_url('data_siswa'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Tambah',
            'action' => site_url('data_siswa/create_action'),
	    'id' => set_value('id'),
	    'timestamp' => set_value('timestamp'),
	    'ra_md' => set_value('ra_md'),
	    'nm_siswa' => set_value('nm_siswa'),
	    'tmpt_lhr' => set_value('tmpt_lhr'),
	    'ttl' => set_value('ttl'),
	    'jk' => set_value('jk'),
	    'nik_siswa' => set_value('nik_siswa'),
	    'sklh_umum' => set_value('sklh_umum'),
	    'kelas_sklh' => set_value('kelas_sklh'),
	    'tgl_masuk' => set_value('tgl_masuk'),
	    'kelas_mad' => set_value('kelas_mad'),
	    'alamat' => set_value('alamat'),
	    'desa' => set_value('desa'),
	    'kec' => set_value('kec'),
	    'kab' => set_value('kab'),
	    'prov' => set_value('prov'),
	    'no_kk' => set_value('no_kk'),
	    'nm_ayah' => set_value('nm_ayah'),
	    'nik_ayah' => set_value('nik_ayah'),
	    'pend_ayah' => set_value('pend_ayah'),
	    'kerja_ayah' => set_value('kerja_ayah'),
	    'nm_ibu' => set_value('nm_ibu'),
	    'nik_ibu' => set_value('nik_ibu'),
	    'pend_ibu' => set_value('pend_ibu'),
	    'kerja_ibu' => set_value('kerja_ibu'),
	    'gol_ekonomi' => set_value('gol_ekonomi'),
	    'status_siswa' => set_value('status_siswa'),
	);
        $this->load->view('data_siswa/data_siswa_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'timestamp' => $this->input->post('timestamp',TRUE),
		'ra_md' => $this->input->post('ra_md',TRUE),
		'nm_siswa' => $this->input->post('nm_siswa',TRUE),
		'tmpt_lhr' => $this->input->post('tmpt_lhr',TRUE),
		'ttl' => $this->input->post('ttl',TRUE),
		'jk' => $this->input->post('jk',TRUE),
		'nik_siswa' => $this->input->post('nik_siswa',TRUE),
		'sklh_umum' => $this->input->post('sklh_umum',TRUE),
		'kelas_sklh' => $this->input->post('kelas_sklh',TRUE),
		'tgl_masuk' => $this->input->post('tgl_masuk',TRUE),
		'kelas_mad' => $this->input->post('kelas_mad',TRUE),
		'alamat' => $this->input->post('alamat',TRUE),
		'desa' => $this->input->post('desa',TRUE),
		'kec' => $this->input->post('kec',TRUE),
		'kab' => $this->input->post('kab',TRUE),
		'prov' => $this->input->post('prov',TRUE),
		'no_kk' => $this->input->post('no_kk',TRUE),
		'nm_ayah' => $this->input->post('nm_ayah',TRUE),
		'nik_ayah' => $this->input->post('nik_ayah',TRUE),
		'pend_ayah' => $this->input->post('pend_ayah',TRUE),
		'kerja_ayah' => $this->input->post('kerja_ayah',TRUE),
		'nm_ibu' => $this->input->post('nm_ibu',TRUE),
		'nik_ibu' => $this->input->post('nik_ibu',TRUE),
		'pend_ibu' => $this->input->post('pend_ibu',TRUE),
		'kerja_ibu' => $this->input->post('kerja_ibu',TRUE),
		'gol_ekonomi' => $this->input->post('gol_ekonomi',TRUE),
		'status_siswa' => $this->input->post('status_siswa',TRUE),
	    );

            $this->Data_siswa_model->insert($data);
            $this->session->set_flashdata('message', 'Tambah Data Berhasil');
            redirect(site_url('data_siswa'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Data_siswa_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Ubah',
                'action' => site_url('data_siswa/update_action'),
		'id' => set_value('id', $row->id),
		'timestamp' => set_value('timestamp', $row->timestamp),
		'ra_md' => set_value('ra_md', $row->ra_md),
		'nm_siswa' => set_value('nm_siswa', $row->nm_siswa),
		'tmpt_lhr' => set_value('tmpt_lhr', $row->tmpt_lhr),
		'ttl' => set_value('ttl', $row->ttl),
		'jk' => set_value('jk', $row->jk),
		'nik_siswa' => set_value('nik_siswa', $row->nik_siswa),
		'sklh_umum' => set_value('sklh_umum', $row->sklh_umum),
		'kelas_sklh' => set_value('kelas_sklh', $row->kelas_sklh),
		'tgl_masuk' => set_value('tgl_masuk', $row->tgl_masuk),
		'kelas_mad' => set_value('kelas_mad', $row->kelas_mad),
		'alamat' => set_value('alamat', $row->alamat),
		'desa' => set_value('desa', $row->desa),
		'kec' => set_value('kec', $row->kec),
		'kab' => set_value('kab', $row->kab),
		'prov' => set_value('prov', $row->prov),
		'no_kk' => set_value('no_kk', $row->no_kk),
		'nm_ayah' => set_value('nm_ayah', $row->nm_ayah),
		'nik_ayah' => set_value('nik_ayah', $row->nik_ayah),
		'pend_ayah' => set_value('pend_ayah', $row->pend_ayah),
		'kerja_ayah' => set_value('kerja_ayah', $row->kerja_ayah),
		'nm_ibu' => set_value('nm_ibu', $row->nm_ibu),
		'nik_ibu' => set_value('nik_ibu', $row->nik_ibu),
		'pend_ibu' => set_value('pend_ibu', $row->pend_ibu),
		'kerja_ibu' => set_value('kerja_ibu', $row->kerja_ibu),
		'gol_ekonomi' => set_value('gol_ekonomi', $row->gol_ekonomi),
		'status_siswa' => set_value('status_siswa', $row->status_siswa),
	    );
            $this->load->view('data_siswa/data_siswa_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Data tidak ditemukan');
            redirect(site_url('data_siswa'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id', TRUE));
        } else {
            $data = array(
		'timestamp' => $this->input->post('timestamp',TRUE),
		'ra_md' => $this->input->post('ra_md',TRUE),
		'nm_siswa' => $this->input->post('nm_siswa',TRUE),
		'tmpt_lhr' => $this->input->post('tmpt_lhr',TRUE),
		'ttl' => $this->input->post('ttl',TRUE),
		'jk' => $this->input->post('jk',TRUE),
		'nik_siswa' => $this->input->post('nik_siswa',TRUE),
		'sklh_umum' => $this->input->post('sklh_umum',TRUE),
		'kelas_sklh' => $this->input->post('kelas_sklh',TRUE),
		'tgl_masuk' => $this->input->post('tgl_masuk',TRUE),
		'kelas_mad' => $this->input->post('kelas_mad',TRUE),
		'alamat' => $this->input->post('alamat',TRUE),
		'desa' => $this->input->post('desa',TRUE),
		'kec' => $this->input->post('kec',TRUE),
		'kab' => $this->input->post('kab',TRUE),
		'prov' => $this->input->post('prov',TRUE),
		'no_kk' => $this->input->post('no_kk',TRUE),
		'nm_ayah' => $this->input->post('nm_ayah',TRUE),
		'nik_ayah' => $this->input->post('nik_ayah',TRUE),
		'pend_ayah' => $this->input->post('pend_ayah',TRUE),
		'kerja_ayah' => $this->input->post('kerja_ayah',TRUE),
		'nm_ibu' => $this->input->post('nm_ibu',TRUE),
		'nik_ibu' => $this->input->post('nik_ibu',TRUE),
		'pend_ibu' => $this->input->post('pend_ibu',TRUE),
		'kerja_ibu' => $this->input->post('kerja_ibu',TRUE),
		'gol_ekonomi' => $this->input->post('gol_ekonomi',TRUE),
		'status_siswa' => $this->input->post('status_siswa',TRUE),
	    );

            $this->Data_siswa_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Ubah Data Berhasil');
            redirect(site_url('data_siswa'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Data_siswa_model->get_by_id($id);

        if ($row) {
            $this->Data_siswa_model->delete($id);
            $this->session->set_flashdata('message', 'Hapus Data Berhasil');
            redirect(site_url('data_siswa'));
        } else {
            $this->session->set_flashdata('message', 'Data tidak ditemukan');
            redirect(site_url('data_siswa'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('timestamp', 'timestamp', 'trim|required');
	$this->form_validation->set_rules('ra_md', 'ra md', 'trim|required');
	$this->form_validation->set_rules('nm_siswa', 'nm siswa', 'trim|required');
	$this->form_validation->set_rules('tmpt_lhr', 'tmpt lhr', 'trim|required');
	$this->form_validation->set_rules('ttl', 'ttl', 'trim|required');
	$this->form_validation->set_rules('jk', 'jk', 'trim|required');
	$this->form_validation->set_rules('nik_siswa', 'nik siswa', 'trim|required');
	$this->form_validation->set_rules('sklh_umum', 'sklh umum', 'trim|required');
	$this->form_validation->set_rules('kelas_sklh', 'kelas sklh', 'trim|required');
	$this->form_validation->set_rules('tgl_masuk', 'tgl masuk', 'trim|required');
	$this->form_validation->set_rules('kelas_mad', 'kelas mad', 'trim|required');
	$this->form_validation->set_rules('alamat', 'alamat', 'trim|required');
	$this->form_validation->set_rules('desa', 'desa', 'trim|required');
	$this->form_validation->set_rules('kec', 'kec', 'trim|required');
	$this->form_validation->set_rules('kab', 'kab', 'trim|required');
	$this->form_validation->set_rules('prov', 'prov', 'trim|required');
	$this->form_validation->set_rules('no_kk', 'no kk', 'trim|required');
	$this->form_validation->set_rules('nm_ayah', 'nm ayah', 'trim|required');
	$this->form_validation->set_rules('nik_ayah', 'nik ayah', 'trim|required');
	$this->form_validation->set_rules('pend_ayah', 'pend ayah', 'trim|required');
	$this->form_validation->set_rules('kerja_ayah', 'kerja ayah', 'trim|required');
	$this->form_validation->set_rules('nm_ibu', 'nm ibu', 'trim|required');
	$this->form_validation->set_rules('nik_ibu', 'nik ibu', 'trim|required');
	$this->form_validation->set_rules('pend_ibu', 'pend ibu', 'trim|required');
	$this->form_validation->set_rules('kerja_ibu', 'kerja ibu', 'trim|required');
	$this->form_validation->set_rules('gol_ekonomi', 'gol ekonomi', 'trim|required');
	$this->form_validation->set_rules('status_siswa', 'status siswa', 'trim|required');

	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "data_siswa"."_".date('d-M-Y-H-i-s').".xls";
        $judul = "data_siswa";
        $tablehead = 0;
        $tablebody = 1;
        $nourut = 1;
        //penulisan header
        header("Pragma: public");
        header("Expires: 0");
        header("Cache-Control: must-revalidate, post-check=0,pre-check=0");
        header("Content-Type: application/force-download");
        header("Content-Type: application/octet-stream");
        header("Content-Type: application/download");
        header("Content-Disposition: attachment;filename=" . $namaFile . "");
        header("Content-Transfer-Encoding: binary ");

        xlsBOF();

        $kolomhead = 0;
        xlsWriteLabel($tablehead, $kolomhead++, "No");
	xlsWriteLabel($tablehead, $kolomhead++, "Timestamp");
	xlsWriteLabel($tablehead, $kolomhead++, "Ra Md");
	xlsWriteLabel($tablehead, $kolomhead++, "Nm Siswa");
	xlsWriteLabel($tablehead, $kolomhead++, "Tmpt Lhr");
	xlsWriteLabel($tablehead, $kolomhead++, "Ttl");
	xlsWriteLabel($tablehead, $kolomhead++, "Jk");
	xlsWriteLabel($tablehead, $kolomhead++, "Nik Siswa");
	xlsWriteLabel($tablehead, $kolomhead++, "Sklh Umum");
	xlsWriteLabel($tablehead, $kolomhead++, "Kelas Sklh");
	xlsWriteLabel($tablehead, $kolomhead++, "Tgl Masuk");
	xlsWriteLabel($tablehead, $kolomhead++, "Kelas Mad");
	xlsWriteLabel($tablehead, $kolomhead++, "Alamat");
	xlsWriteLabel($tablehead, $kolomhead++, "Desa");
	xlsWriteLabel($tablehead, $kolomhead++, "Kec");
	xlsWriteLabel($tablehead, $kolomhead++, "Kab");
	xlsWriteLabel($tablehead, $kolomhead++, "Prov");
	xlsWriteLabel($tablehead, $kolomhead++, "No Kk");
	xlsWriteLabel($tablehead, $kolomhead++, "Nm Ayah");
	xlsWriteLabel($tablehead, $kolomhead++, "Nik Ayah");
	xlsWriteLabel($tablehead, $kolomhead++, "Pend Ayah");
	xlsWriteLabel($tablehead, $kolomhead++, "Kerja Ayah");
	xlsWriteLabel($tablehead, $kolomhead++, "Nm Ibu");
	xlsWriteLabel($tablehead, $kolomhead++, "Nik Ibu");
	xlsWriteLabel($tablehead, $kolomhead++, "Pend Ibu");
	xlsWriteLabel($tablehead, $kolomhead++, "Kerja Ibu");
	xlsWriteLabel($tablehead, $kolomhead++, "Gol Ekonomi");
	xlsWriteLabel($tablehead, $kolomhead++, "Status Siswa");

	foreach ($this->Data_siswa_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
	    xlsWriteLabel($tablebody, $kolombody++, $data->timestamp);
	    xlsWriteLabel($tablebody, $kolombody++, $data->ra_md);
	    xlsWriteLabel($tablebody, $kolombody++, $data->nm_siswa);
	    xlsWriteLabel($tablebody, $kolombody++, $data->tmpt_lhr);
	    xlsWriteLabel($tablebody, $kolombody++, $data->ttl);
	    xlsWriteLabel($tablebody, $kolombody++, $data->jk);
	    xlsWriteLabel($tablebody, $kolombody++, $data->nik_siswa);
	    xlsWriteLabel($tablebody, $kolombody++, $data->sklh_umum);
	    xlsWriteLabel($tablebody, $kolombody++, $data->kelas_sklh);
	    xlsWriteLabel($tablebody, $kolombody++, $data->tgl_masuk);
	    xlsWriteLabel($tablebody, $kolombody++, $data->kelas_mad);
	    xlsWriteLabel($tablebody, $kolombody++, $data->alamat);
	    xlsWriteLabel($tablebody, $kolombody++, $data->desa);
	    xlsWriteLabel($tablebody, $kolombody++, $data->kec);
	    xlsWriteLabel($tablebody, $kolombody++, $data->kab);
	    xlsWriteLabel($tablebody, $kolombody++, $data->prov);
	    xlsWriteLabel($tablebody, $kolombody++, $data->no_kk);
	    xlsWriteLabel($tablebody, $kolombody++, $data->nm_ayah);
	    xlsWriteLabel($tablebody, $kolombody++, $data->nik_ayah);
	    xlsWriteLabel($tablebody, $kolombody++, $data->pend_ayah);
	    xlsWriteLabel($tablebody, $kolombody++, $data->kerja_ayah);
	    xlsWriteLabel($tablebody, $kolombody++, $data->nm_ibu);
	    xlsWriteLabel($tablebody, $kolombody++, $data->nik_ibu);
	    xlsWriteLabel($tablebody, $kolombody++, $data->pend_ibu);
	    xlsWriteLabel($tablebody, $kolombody++, $data->kerja_ibu);
	    xlsWriteLabel($tablebody, $kolombody++, $data->gol_ekonomi);
	    xlsWriteLabel($tablebody, $kolombody++, $data->status_siswa);

	    $tablebody++;
            $nourut++;
        }

        xlsEOF();
        exit();
    }

    public function word()
    {
        header("Content-type: application/vnd.ms-word");
        header("Content-Disposition: attachment;Filename=data_siswa.doc");

        $data = array(
            'data_siswa_data' => $this->Data_siswa_model->get_all(),
            'start' => 0
        );
        
        $this->load->view('data_siswa/data_siswa_doc',$data);
    }

}

/* End of file Data_siswa.php */
/* Location: ./application/controllers/Data_siswa.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2021-01-21 04:18:02 */
/* http://harviacode.com */