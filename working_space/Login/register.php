<?php
    function register(){
        if(!empty($_POST)){
            $fullname=$_POST['fullname'];
            $email =$_POST['email'];
            $username=$_POST['username'];
            $password=$_POST['password'];
            //tao ket noi den dtb
            $connect= new mysqli("localhost","root","","test");
            //cho phep php luu unicode utf8
             mysqli_set_charset($connect,"utf8");
            //kiem tra xem ket noi co thanh cong khong
            if($connect->connect_error){
                var_dump($connect->connect_error);
                die();
            }
            //thuc hien truy van du lieu -insert data vao db
            $query = "INSERT INTO USER(fullname,email,username,password) VALUES('".$fullname."','".$email."','".$username."','".$password."')";
            mysqli_query($connect,$query);
            
            //đóng kết nối
            $connect->close();
            header("Location: Login_form.php");
        }
    }

?>