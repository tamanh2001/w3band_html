<?php
    function Login(){
        if(!empty($_POST)){

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
            $query ="SELECT * from USER WHERE username='".$username."' AND password='".$password."'";
            $result = mysqli_query($connect,$query); //mới trả về tập hợp các kết quả trong query
            $data=array(); //muốn lấy dữ liệu từ db ra phải fetch từ mảng của tk php ra
            while($row=mysqli_fetch_array($result,1)){
                $data[]=$row;
            }
            var_dump($result); //sau đó var_dump ra mới thấy được dữ liệu 
            
            //đóng kết nối
            $connect->close();
            if($data != null && count($data)>0){
                header("Location: welcome.php ");
            }
        }
            
        }

  ?>        
