<?php
    header("content-type","text/html;charset=utf-8");
    //一、接收前端数据
    $userphone = $_POST['userPhone'];
    $userpass = $_POST['userPass'];

    //二、处理

    //1、链接数据库（搭桥）
    $conn = mysql_connect("localhost","root","root");
    
    //2、选择数据库（目的地）
    mysql_select_db("project",$conn);
    
    //3、数据库操作
    //3.1查找用户名是否存在
    $sqlStr="select * from userproject where userphone='".$userphone."' and userpass='".$userpass."'";
    $result = mysql_query($sqlStr,$conn);
    //行数;
    $rows = mysql_num_rows($result);
    //4、关闭数据库
    mysql_close($conn);

    //三、响应
    if($rows==0){
        echo "<script type="."\""."text/javascript"."\"".">"."window.location="."\""."../html/login.html"."\""."</script>";
    }else{
        echo "<script type="."\""."text/javascript"."\"".">"."window.location="."\""."../html/index.html"."\""."</script>";
    }
?>