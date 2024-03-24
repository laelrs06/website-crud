<?php 
$koneksi = mysqli_connect("localhost","root","","kotusa");
 
// Check connection
if (mysqli_connect_errno()){
    echo "Koneksi database gagal : " . mysqli_connect_error();
}
 
?>
    <?php

$host = "localhost";
$username = "root";
$password = "";
$database = "kotusa";

// Inisialisasi objek Database
$db = new Database($host, $username, $password, $database);

// Lakukan koneksi menggunakan mysqli jika diperlukan
$koneksi = mysqli_connect($host, $username, $password, $database);

if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

class Database {
    private $host;
    private $username;
    private $password;
    private $database;
    private $connection;

    public function __construct($host, $username, $password, $database) {
        $this->host = $host;
        $this->username = $username;
        $this->password = $password;
        $this->database = $database;

        $this->connect();
    }

    private function connect() {
        try {
            $this->connection = new PDO("mysql:host=$this->host;dbname=$this->database", $this->username, $this->password);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Error: " . $e->getMessage());
        }
    }

    public function getITEM($sql, $params = []) {
        $stmt = $this->connection->prepare($sql);
        $stmt->execute($params);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function getALL($sql) {
        $stmt = $this->connection->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function runSQL($sql, $params = []) {
        $stmt = $this->connection->prepare($sql);
        return $stmt->execute($params);
    }

    // Menyediakan akses ke koneksi jika diperlukan
    public function getPDOConnection() {
        return $this->connection;
    }
}
?>
