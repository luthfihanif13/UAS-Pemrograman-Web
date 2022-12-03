<?php

class pembeli
{
    public $pembeli;
    public $pdo;
    public $barang;

    public function __construct()
    {
        $host = "localhost";
        $database = "market";
        $user = "root";
        $password = "";

        $this->pdo = new PDO("mysql:host={$host}; dbname={$database}", $user, $password);
    }

    public function getAll()
    {
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $query = "SELECT * FROM pembeli";
        $stmt = $this->pdo->prepare($query);
        $stmt->execute();

        $result = $stmt->fetchAll();
        return $result;
    }

    public function addPembeli($nama_pembeli, $email, $no_hp, $alamat, $gambar)
    {
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $query = "INSERT INTO pembeli (nama_pembeli, email, no_hp, alamat, gambar) 
                VALUES ('".$nama_pembeli."', '".$email."', '".$no_hp."', '".$alamat."', '".$gambar."')";
        $stmt = $this->pdo->prepare($query);
        $stmt->execute();
        return $stmt->rowCount();

    }

    public function deletePembeli($id)
    {
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $query = "DELETE FROM pembeli WHERE id = '".$id."'";
        $stmt = $this->pdo->prepare($query);
        $stmt->execute();
        return $stmt->rowCount();
    }


    public function getPembeliById($id)
    {
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $query = "SELECT * FROM pembeli WHERE id = $id";
        $stmt = $this->pdo->prepare($query);
        $stmt->execute();

        $result = $stmt->fetchAll();
        return $result;

    }


    public function editPembeli($id, $nama_pembeli, $email, $no_hp, $alamat, $gambar)
    {
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $query = "INSERT INTO pembeli (id, nama_pembeli, email, no_hp, alamat, gambar) 
                VALUES ('".$id."', '".$nama_pembeli."', '".$email."', '".$no_hp."', '".$alamat."', '".$gambar."')
                ON DUPLICATE KEY UPDATE id=VALUES(id), nama_pembeli=VALUES(nama_pembeli), email=VALUES(email), no_hp=VALUES(no_hp), alamat=VALUES(alamat), gambar=VALUES(gambar)";
        $stmt = $this->pdo->prepare($query);
        $stmt->execute();
        return $stmt->rowCount();
    }
}


?>