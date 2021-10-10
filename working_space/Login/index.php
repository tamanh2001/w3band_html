<?php 
require_once('dbhelper.php') 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
</head>
<body>
    <div class="container">
        <div class="panel panel-primary">
            <div class="panel-heading">
                Quản lý thông tin sinh viên
            </div>
            <div class="panel-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>HỌ TÊN</th>
                            <th>Tuổi</th>
                            <th>Địa chỉ</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- hiển thị thông tin sinh viên -->
                        <?php
                        $sql='select * from STUDENT';
                        $studentList= executeResult($sql);
                        $index=1;
                        foreach($studentList as $std){

                         echo'  <tr>
                                <td>'.($index++).'</td>
                                <td>'.$std['Họ Tên'].'</td>
                                <td>'.$std['Địa chỉ'].'</td>
                                <td>'.$std['Tuổi'].'</td>
                                <td><button class="btn btn-warning">Edit</button></td>
                                <td><button class="btn btn-danger">Delete</button></td>


                              
    
                            </tr>';
                        }

                        ?>

                                      
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
</body>
</html>