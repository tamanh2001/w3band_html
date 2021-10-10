<?php
require_once('config.php');
/* sd cho hàm insert,update,delete ->sd function*/
function execute($sql){
    //create connection to database
    $conn=mysqli_connect(HOST,USERNAME,PASSWORD,DATABASE);
    //query
    mysqli_query($conn,$sql);
    //close
    mysqli_close($conn);

}
// sử dụng cho câu lệnh select, trả về kq
function executeResult($sql){
      $conn=mysqli_connect(HOST,USERNAME,PASSWORD,DATABASE);
    //query
    $resultset=mysqli_query($conn,$sql);
    $list=[];
    while($row=mysqli_fetch_array($resultset,1)){
        $list[]=$row;
    }
    //close
    mysqli_close($conn);
    return $list;
}
?>