<?php

class Login
{
    public $email;
    public $password;

    public function sign_on()
    {
        if ($this->email == "rodrigovieira@hotmail.com" and $this->password == "1234") {
            echo "Logado com sucesso";
        } else {
            echo "dados inválidos";
        }
    }
}
$logar = new Login();
$logar->email = "rodrigovieira@hotmail.com";
$logar->password = "1234";
$logar->sign_on();
