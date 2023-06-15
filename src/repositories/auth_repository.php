<?php

class AuthRepository
{
    private $pdoRepository;

    public function __construct($pdoRepository)
    {
        $this->pdoRepository = $pdoRepository;
    }

    public function login($email, $password)
    {
        $user = $this->pdoRepository->getByField('users', 'email', $email);

        if (isset($user)) {
            if ($this->password_verify($password, $user['password'])) {
                $_SESSION['user'] = $user['email'];
                return true;
            }
        }
        return false;
    }

    public function logout()
    {
        unset($_SESSION['user']);
    }

    private function password_verify($password, $hash)
    {
        $hashed_password = hash('sha256', $password);
        return $hashed_password === $hash;
    }
}
