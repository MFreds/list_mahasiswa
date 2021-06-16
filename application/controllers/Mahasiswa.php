<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model("mahasiswa_model");
        $this->load->library('form_validation');
    }

	public function index()
	{
		$data['mahasiswa'] = $this->mahasiswa_model->getAll();
		$this->load->view('template/header');
		$this->load->view('mahasiswa/index',$data);
		$this->load->view('template/footer');
	}

	public function create()
	{
		$this->load->view('template/header');
		$this->load->view('mahasiswa/create');
		$this->load->view('template/footer');
	}

	public function save()
	{
		$this->form_validation->set_rules('nrp','NRP','required');
		$this->form_validation->set_rules('nama','Nama','required');
		if ($this->form_validation->run()==true)
        {
			$data['nrp'] = $this->input->post('nrp');
			$data['nama'] = $this->input->post('nama');
			$this->mahasiswa_model->save($data);
			redirect('mahasiswa');
		}
		else
		{
			$this->load->view('template/header');
			$this->load->view('mahasiswa/create');
			$this->load->view('template/footer');
		}
	}

	function edit($id)
	{
		$data['mahasiswa'] = $this->mahasiswa_model->getById($id);
		$this->load->view('template/header');
		$this->load->view('mahasiswa/edit',$data);
		$this->load->view('template/footer');
	}

	public function update()
	{
		$this->form_validation->set_rules('nrp','NRP','required');
		$this->form_validation->set_rules('nama','Nama','required');
		if ($this->form_validation->run()==true)
        {
		 	$id = $this->input->post('id');
			$data['nrp'] = $this->input->post('nrp');
			$data['nama'] = $this->input->post('nama');
			$this->mahasiswa_model->update($data,$id);
			redirect('mahasiswa');
		}
		else
		{
			$id = $this->input->post('id');
			$data['mahasiswa'] = $this->mahasiswa_model->getById($id);
			$this->load->view('template/header');
			$this->load->view('mahasiswa/edit',$data);
			$this->load->view('template/footer');
		}
	}

	function delete($id)
	{
		$this->mahasiswa_model->delete($id);
		redirect('mahasiswa');
	}
}