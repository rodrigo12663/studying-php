<?php

class Login
{
    private $email;
    private $password;
    
    public function sign_on()
    {
        if ($this->email == "rodrigovieira@hotmail.com" and $this->password == "1234") {
            echo "Logado com sucesso";
        } else {
            echo "dados inválidos";
        }
    }
    public function getEmail()
    {
        return $this->email;
    }
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }
    public function getPassword()
    {
        return $this->password;
    }
    public function setPassword($password)
    {
        $this->password = $password;
        return $this;
    }
}
$logar = new Login();
$logar->setEmail("rodrigovieira@hotmail.com");
$logar->setPassword("1234");
$logar->sign_on();
