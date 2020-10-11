<?php

class login_model extends CI_Model
{
    var $user_tb = "user_tb";

    public function logged_in()
    {
        return $this->session->userdata('id_user');
    }


    //fungsi check login
    public function check_login($data){
        $username = $data['username'];
        $password = $data['password'];		

        $cek = $this->db->get_where($this->user_tb,array('username'=>$username))->num_rows();
        $result = $this->db->get_where($this->user_tb,array('username'=>$username))->result();

        if ($cek != 0){

            $pass_hash = $result[0]->password;

            if (password_verify($password,$pass_hash)){
					
                        $hakAkses = $result[0]->id_user;
                        $session['id_user'] = $result[0]->id_user;
                        $session['nama_lengkap'] = $result[0]->nama_lengkap;
                        $session['role'] = $result[0]->role;
                        $this->session->set_userdata($session);
                        redirect('dashboard');

                } else{

                    $this->session->set_flashdata("error","Login Gagal, cek kembali Username dan password anda");
                    redirect('login');
                }

        } else{
            $this->session->set_flashdata("error","Login Gagal, cek kembali Username dan password anda");
            redirect('login');
        }
    }

    //fungsi check login
    public function check_loginuser($data){
        $username = $data['username'];
        $password = $data['password'];		

        $cek = $this->db->get_where($this->user_tb,array('username'=>$username))->num_rows();
        $result = $this->db->get_where($this->user_tb,array('username'=>$username))->result();

        if ($cek != 0){

            $pass_hash = $result[0]->password;

            if (password_verify($password,$pass_hash)){
					
                        $hakAkses = $result[0]->id_user;
                        $session['id_user'] = $result[0]->id_user;
                        $session['nama_lengkap'] = $result[0]->nama_lengkap;
                        $session['role'] = $result[0]->role;
                        $this->session->set_userdata($session);
                        redirect('main');

                } else{

                    $this->session->set_flashdata("error","Login Gagal, cek kembali Username dan password anda");
                    redirect('loginuser');
                }

        } else{
            $this->session->set_flashdata("error","Login Gagal, cek kembali Username dan password anda");
            redirect('loginuser');
        }
    }

    // public function create_user($data) {
    //     date_default_timezone_set('Asia/Jakarta');

    //     $data = array(
    //      'nama_lengkap' => 'Administrator',
    //      'username'     => $data['username'],
    //      'password'  => $this->hash_password($data['password']),
    //      'confirm_password'  => $this->hash_password($data['password']),
    //      'role'  => 'staff',
    //      'created_at' => date('Y-m-d H:i:s'),
    //     );
    //     return $this->db->insert('user_tb', $data);
    //    }

    // private function hash_password($pass_user)
    // {
    //     return password_hash($pass_user, PASSWORD_BCRYPT);
    // }

}