<?php
class Login extends CI_Controller
{
    public function index()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('template_admin/lheader');
            $this->load->view('auth/login_form');
            $this->load->view('template_admin/lfooter');
        } else {
            $username = $this->input->post('username');
            $password = md5($this->input->post('password'));

            $cek = $this->R_model->cek_login('username');


            if ($cek == FALSE) {
                $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Username atau Password Salah!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
             </div>');
                redirect('auth/Login');
            } else {
                $this->session->set_userdata('username', $cek->username);
                $this->session->set_userdata('role_id', $cek->role_id);
                $this->session->set_userdata('nama', $cek->nama);

                switch ($cek->role_id) {
                    case 1:
                        redirect('admin/dashboard');
                        break;
                    case 2:
                        redirect('customer/dashboard');
                        break;

                    default;
                        break;
                }
            }
        }
    }

    public function _rules()
    {
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('customer/dashboard');
    }
}
