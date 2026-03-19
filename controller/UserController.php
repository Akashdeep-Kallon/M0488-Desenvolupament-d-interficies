<?php
session_start();
require_once '../model/Users.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $user = new UserController();

    if (isset($_POST['register'])) {
        $user->register();
    }

    if (isset($_POST['login'])) {
        $user->login();
    }

    if (isset($_POST['update'])) {
        $user->update();
    }

    if (isset($_POST['delete'])) {
        $user->delete();
    }
}

class UserController

{
    // create an employee
    public function register()
    
    {
        if (!empty($_POST['name']) && !empty($_POST['lastname']) && !empty($_POST['email']) && !empty($_POST['password'])) {
            $name = $_POST['name'];
            $surname = $_POST['lastname'];
            $email = $_POST['email'];
            $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

            $user = new Users($email, false, $name, $surname, $password);
            $user->register();
        } else {
            echo "<p>Error: todos los campos son obligatorios.</p>";
        }
        header('Location: ../view/index.html');
        exit();
    }

    // read all employees
    public function login() {}

    // update an employee
    public function update() {}
    // delete an employee
    public function delete() {}
}
