<?php
class Auth extends CI_Controller
{
    public function login()
    {
        $this->form_validation->set_rules('username','Username','required',[
            'required' => 'Username belum diisi !'
        ]);
        $this->form_validation->set_rules('password','Password','required',[
            'required' => 'Password belum diisi !'
        ]);

        if ($this->form_validation->run() == FALSE){
            $this->load->view('_partials/header');
            $this->load->view('login');
            $this->load->view('_partials/footer');
        } else {
            $auth = $this->Modelauth->cek_login();

            if ($auth == FALSE) {
                $this->session->set_flashdata('pesan', 
                '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    Username atau Password anda salah !
                    <button type="button" class="close" data-dismiss="alert" aria-label="close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>');
                redirect("auth/login");
            } else {
                $this->session->set_userdata('username', $auth->username);
                $this->session->set_userdata('role_id', $auth->role_id);

                switch($auth->role_id) {
                    case 1       : redirect('admin/dashboard');
                                   break;
                    case 2       : redirect('dashboard');
                                   break;
                    default : break;
                               
                }
            }
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('auth/login');
    }
}

?>