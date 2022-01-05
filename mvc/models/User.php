<?php
class User
{
    private $db;
    public function __construct()
    {
        $this->db = new Database();
    }

    public function getUser()
    {
        $sql = "SELECT * FROM users";
        $result = $this->db->select($sql);
        return $result;
    }

    public function createUser($name, $mail, $add)
    {
        $sql = "INSERT INTO users (name,email,address)
                VALUES ('$name','$mail','$add')";
        $result = $this->db->execute($sql);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function findUserById($id)
    {
        $sql = "SELECT * FROM users WHERE id = '$id'";
        $result = $this->db->select($sql);
        return $result;
    }

    public function updateUser($id, $name, $mail, $add)
    {
        $sql = "UPDATE users SET name = '$name',
                                    email = '$mail',
                                    address = '$add'
                                WHERE id = '$id'";
        $result = $this->db->execute($sql);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function deleteUser($id)
    {
        $sql = "DELETE FROM users WHERE id = '$id'";
        $result = $this->db->execute($sql);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }
}
