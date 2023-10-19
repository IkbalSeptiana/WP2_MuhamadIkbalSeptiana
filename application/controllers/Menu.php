<?php
    class Menu extends CI_Controller
    {
        public function index()
        {
            $this->load->view('view-form-menu');
        }
        public function cetak()
        {
            $config['upload_path']          = './assets/';
            $config['allowed_types']        = 'gif|jpg|png';
            
            $this->load->library('upload', $config);
            $this->form_validation->set_rules(
                'kode', 'Kode Menu', 'required|min_length[5]', 
                [
                    'required' => 'Kode Menu Harus diisi',
                    'min_length' => 'Kode Menu terlalu pendek. Minimal berisi 5 karakter'
                ]
            );
            $this->form_validation->set_rules(
                'nama', 'Nama Menu', 'required|min_length[5]', 
                [
                    'required' => 'Nama Menu Harus diisi',
                    'min_length' => 'Nama Menu terlalu pendek. Minimal berisi 5 karakter'
                ]
            );
            $this->form_validation->set_rules(
                'harga', 'Harga', 'required|numeric|greater_than[0]', 
                [
                    'required' => 'Harga Harus diisi',
                    'numeric' => 'Tipe data harus angka',
                    'greater_than' => 'Harga Harus diatas 0'
                ]
            );
            $this->form_validation->set_rules(
                'gambar', 'Gambar', 'required', 
                [
                    'required' => 'Harus Memasukkan Gambar'
                ]
            );
            if ($this->form_validation->run() != true) {
                $this->load->view('view-form-menu');
            } 
            else {
                $data = [
                    'kode' => $this->input->post('kode'),
                    'nama' => $this->input->post('nama'),
                    'harga' => $this->input->post('harga'),
                    'gambar' => $this->input->post('gambar')
                ];
            $this->load->view('view-data-menu', $data);
        }
    }
}