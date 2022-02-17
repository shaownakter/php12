<?php


namespace App\classes;


class Auth
{
    protected $email;
    protected $password;
    protected $authEmail;
    protected $authPassword;

    public function __construct($post=null)
    {
        if ($post)
        {
            $this->email = $post['email'];
            $this->password = $post['password'];
        }
    }

    public function login()
    {
        $this->authEmail = 'admin@admin.com';
        $this->authPassword = '123456';

        if ($this->email == $this->authEmail && $this->password == $this->authPassword)
        {
            session_start();
            $_SESSION['id'] = rand(10, 1000);
            header('Location: action.php?pages=file-upload');
        } else {
            return 'Sorry./... Abar try koren Vaya';
        }
    }

    public function logout ()
    {
        session_start();
        unset($_SESSION['id']);
        header('Location: action.php?pages=login');
    }

}