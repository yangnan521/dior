<meta charset="UTF-8">
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
    $sqlStr="select * from vip where userphone='".$userphone."'";
    $result = mysql_query($sqlStr,$conn);
    $rows = mysql_num_rows($result);
    if($rows==0){
        //3.2 把该用户名插入数据库中
        //3、执行SQL（struct query language）语句
        $sqlStr="insert into userproject(userphone,userpass)  values('".$userphone."','".$userpass."')";
        mysql_query($sqlStr,$conn);

        //4、关闭数据库
        mysql_close($conn);
        //三、响应
        echo "<script type="."\""."text/javascript"."\"".">"."window.location="."\""."../html/index.html"."\""."</script>";
    }else{
        //三、响应
        echo "<script type="."\""."text/javascript"."\"".">"."window.location="."\""."../html/register.html"."\""."</script>";
    }
?>