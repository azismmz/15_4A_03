<?php

class Matakuliah extends CI_Controller
{
    // Method untuk menampilkan form
    public function index()
    {
        $this->load->view('view-form-matakuliah');
    }

    // Method untuk memproses data yang dikirim dari form
    public function cetak()
    {
        $data = [
            'kode' => $this->input->post('kode'),
            'nama' => $this->input->post('nama'),
            'sks' => $this->input->post('sks')
        ];

        $this->load->view('view-data-matakuliah', $data);
    }
}
