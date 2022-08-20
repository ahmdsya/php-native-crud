<?php

class Auth extends Database
{
    protected $session;
    protected $table = 'user';

    public function __construct()
    {
        parent::__construct();
        $this->session = new Session();
    }

    public function login($email, $password)
    {
        $user = $this->db->table($this->table)->where('email', $email)->first();

        if($user) {

            if(password_verify($password, $user->password)){

                $this->session->set('isLogin', true);
                $this->session->set('user-id', $user->id);
                $this->session->set('user-email', $user->email);
                $this->session->set('user-nama', $user->nama);

                return true;

            }
            else {
                return false;
            }

        }
        else {
            return false;
        }
    }

    public function logout()
    {
        $this->session->remove('isLogin');
        $this->session->remove('user-id');
        $this->session->remove('user-email');
        $this->session->remove('user-nama');

        return true;
    }

    public function isLogin()
    {
        if($this->session->get('isLogin') && 
            $this->session->get('user-id') && 
            $this->session->get('user-email') && 
            $this->session->get('user-nama'))
        {
            return true;
        }
        else {
            return false;
        }
    }
}

$auth    = new Auth();
$isLogin = $auth->isLogin();