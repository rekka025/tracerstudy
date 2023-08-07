<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Auth extends CI_Controller {
    public function index() {
    $this->load->view('login');
    }

    public function cek_login() {
    $data = array('username' => $this->input->post('username', TRUE),
    'password' => md5($this->input->post('password', TRUE)));
    
    $this->load->model('m_users'); // load model_user
    
    $hasil = $this->m_users->cek_user($data);
    if ($hasil->num_rows() == 1) {
        foreach ($hasil->result() as $sess) {
        $sess_data['logged_in'] = 'Sudah Loggin';
        $sess_data['nama'] = $sess->nama;
        $sess_data['username'] = $sess->username;
        $sess_data['level'] = $sess->level;
        $this->session->set_userdata($sess_data);
        }
    if ($this->session->userdata('level')== 0) {
            redirect('admin/admin');
    }
    elseif ($this->session->userdata('level')== 1 ) {
            redirect('fak/feb');
            }elseif ($this->session->userdata('level')=='2') {
                redirect('member/c_member');
                }
                elseif ($this->session->userdata('level')=='3') {
                    redirect('member/c_member');
                    }elseif ($this->session->userdata('level')=='4') {
                        redirect('member/c_member');
                        }elseif ($this->session->userdata('level')=='5') {
                            redirect('member/c_member');
                            }elseif ($this->session->userdata('level')=='6') {
                                redirect('member/c_member');
                                }
                        
        }
    else {
            echo "<script>alert('Gagal login: Cek username, password!');history.go(-1);</script>";
    }
            }
    }
?>