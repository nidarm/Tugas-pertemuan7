<?php

class tokosepatu extends CI_controller
{
    public function __construct() {
        parent:: __construct();
        $this->load->model('m_tokosepatu'); 
    }
    public function index ()
    {
        $this->form_validation->set_rules('nama', 'Nama Pembeli', 
        'required', [
            'required' => 'Nama Pembeli harus diisi']);
		$this->form_validation->set_rules('nhp', 'Nomer HP', 
        'required', [
            'required' => 'Nomer HP harus diisi']);

        if ($this->form_validation->run() == false) {
            $this->load->view('input_tokosepatu');
        } else{
            $data = [
                'nama' => $this->input->post('nama'),
                'nhp' => $this->input->post('nhp'),
                'merk' => $this->input->post('merk'),
                'ukuran' => $this->input->post('ukuran'),
                'harga' => $this->m_tokosepatu->proses($this->input->post('merk')),
            ];
            
            $this->load->view('output_tokosepatu', $data);
        }
    }
}
?>