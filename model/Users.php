<?php
class Users
{
    private $email;
    private $status;
    private $name;
    private $surname;
    private $password;

    public function __construct($email, $status, $name, $surname, $password)
    {
        $this->email = $email;
        $this->status = $status ? 1 : 0;
        $this->name = $name;
        $this->surname = $surname;
        $this->password = $password;
    }

    public function register()
    {
        require_once 'db.php';

        $sql = "INSERT INTO Users (email, status, name, surname, password)
            VALUES ('$this->email', $this->status, '$this->name', '$this->surname', '$this->password')";

        if ($conexion->query($sql) === TRUE) {
            echo "Usuario registrado exitosamente.";
        } else {
            echo "Error: " . $conexion->error;
        }

        $conexion->close();
    }



    public function login()
    {
        require_once 'db.php';
        $sql = "SELECT * FROM users WHERE email='$this->email'";
        $result = $conexion->query($sql);
        $conexion->close();
    }
}
