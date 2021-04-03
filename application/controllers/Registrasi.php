<?php
class Registrasi extends CI_Controller
{
    public function index()
    {
        $this->form_validation->set_rules('nama','Nama','required',[
            'required' => 'Nama belum diisi !'
        ]);
        $this->form_validation->set_rules('username','Username','required',[
            'required' => 'Username belum diisi !'
        ]);
        $this->form_validation->set_rules('password1','Password','required|matches[password2]',[
            'required' => 'Password belum diisi !',
            'matches'  => 'Password tidak cocok !'
        ]);
        $this->form_validation->set_rules('password2','Password','required|matches[password1]',[
            'required' => 'Password belum diisi !',
            'matches'  => 'Password tidak cocok !'
        ]);

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('_partials/header');
            $this->load->view('registrasi');
            $this->load->view('_partials/footer');
        }else {
            $data = array(
                'id'        => '',
                'nama'      => $this->input->post('nama'),
                'username'  => $this->input->post('username'),
                'password'  => $this->input->post('password1'),
                'password'  => $this->input->post('password2'),
                'role_id'   => 2
            );

            $this->db->insert('tb_user', $data);
            redirect('auth/login');
        }
    }
}

?>