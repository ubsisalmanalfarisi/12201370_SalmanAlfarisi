<?php
class Matakuliah extends CI_Controller
{
public function index()
{
$this->load->view('view-form-matakuliah');
}
public function cetak()
{
	$this->form_validation->set_rules('kode', 'Kode Matakuliah','required|min_length[3]|max_length[4]',
		['required' => 'Kode Matakuliah Harus diisi',
		'min_lenght' => 'Kode Matakuliah Terlalu Pendek (Tidak Boleh Kurang dari 3 Karakter)',
		'max_length' => 'Kode Matakuliah Terlalu Panjang (Karakter Tidak Boleh Lebih Dari 4) '	]);
	$this->form_validation->set_rules('nama', 'Nama Matakuliah','required|min_length[3]|max_length[20]',	
	['required' => 'Nama Matakuliah Harus diisi',
	'min_lenght' => 'Nama Matakuliah Terlalu Pendek (Tidak Boleh Kurang dari 3 Karakter)',
	'max_length' => 'Nama Matakuliah Terlalu Panjang (Karakter Tidak Boleh Lebih Dari 20)'
]);
	if ($this->form_validation->run() != true) {
	$this->load->view('view-form-matakuliah');
	} else {
	$data = [
	'kode' => $this->input->post('kode'),
	'nama' => $this->input->post('nama'),
	'sks' => $this->input->post('sks')
	];
	$this->load->view('view-data-matakuliah', $data);
	}
}
}