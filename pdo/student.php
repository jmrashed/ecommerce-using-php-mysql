<?php

class Student {
    
    private $obj_pdo;
    public function __construct() {
        $host_name='localhost';
        $user_name='root';
        $password='';
        $db_name='db_seip_ecommerce28';
        try {
            $this->obj_pdo=new PDO("mysql:host={$host_name}; dbname={$db_name}", $user_name, $password);
            //echo 'db connect';
        } catch (PDOException $ex) {
            echo $ex->getMessage();
        }
    }
    public function save_student_info($data) {
        try {
            $student_info=$this->obj_pdo->prepare("INSERT INTO tbl_student (student_name, phone_number, email_address) VALUES (:tonmoy, :lima, :mejbaj)");
            $student_info->bindParam(':tonmoy', $data['student_name']);
            $student_info->bindParam(':lima', $data['phone_number']);
            $student_info->bindParam(':mejbaj', $data['email_address']);
            $student_info->execute();
            $message="Student info save successfully";
            return $message;
            
        } catch (PDOException $ex) {
            echo $ex->getMessage();
        }
    }
    public function select_all_student_info_for_pagination($pages) {
        try {
            $student_info=$this->obj_pdo->prepare("SELECT * FROM tbl_student LIMIT $pages,5");
            $student_info->execute();
            return $student_info;
            
        } catch (PDOException $ex) {
            die('Query problem'.$ex->getMessage() );
        }
    }
    public function select_all_student_info() {
        try {
            $student_info=$this->obj_pdo->prepare("SELECT * FROM tbl_student");
            $student_info->execute();
            return $student_info;
            
        } catch (PDOException $ex) {
            die('Query problem'.$ex->getMessage() );
        }
    }
}
