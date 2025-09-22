<?php

namespace PHP28\Controllers;

use PHP28\Models\User;
use PHP28\Services\SessionService;

class UserController extends SessionService {

    public function login(array $data)
    {
        if (!isset($data["username"]) || empty($data["username"])) {
            die("Niste prosledili username!");
        }

        if (!isset($data["password"]) || empty($data["password"])) {
            die("Niste prosledili password!");
        }

        $userModel = new User();
        if (!$userModel->userExists($data["username"])) {
            die("Ovaj korisnik ne postoji!");
        }

        $user = $userModel->getUserByUsername($data["username"]);

        if(!password_verify($data["password"], $user["password"])) {
            die("Pogresna lozinka!");
        }

        $this->setSession("user_id", $user["id"])->setSession("logged_in", true);

    }

    public function register(array $data)
    {
        if (!isset($data["username"]) || empty($data["username"])) {
            die("Niste prosledili username!");
        }

        $userModel = new User();

        if($userModel->userExists($data["username"])) {
            die("Ovaj korisnik vec postoji!");
        }

        if (!isset($data["password"]) || empty($data["password"])) {
            die("Niste prosledili sifru!");
        }

        if (!isset($data["confirm_password"]) || empty($data["confirm_password"])) {
            die("Niste potvrdili sifru!");
        }

        if($data["password"] !== $data["confirm_password"]){
            die("Sifre se ne poklapaju!");
        }

        $password = password_hash($data["password"], PASSWORD_DEFAULT);

        $userModel->createUser($data["username"], $password);

    }

}