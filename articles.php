<?php
session_start();
include 'conn.php';
?>
<!DOCTYPE>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>文章</title>
<link rel="icon" href="images/logo.png">
<link rel="stylesheet" type="text/css" href="css/general.css">
<link rel="stylesheet" type="text/css" href="css/index.css">
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/general.js"></script>
<script type="text/javascript" src="js/carousel.js"></script>
</head>
<body>
<!-- 顶部开始 -->


<!-- 头部开始 -->
<?php include 'header.php'; ?>
<!-- 头部结束 -->
<!-- 主体开始 -->
<div class="container w1100">

      <br>  <br>  <br>  <br>
        <ul>
<?php
$sql = "select * from wenzhang";
$result = $conn->query($sql); //向数据库发送一条 MySQL 查询 如果查询成则为真，否则为假 。相当于执行sql语句
if($result->num_rows>0){  //mysqli_num_rows() 函数返回结果集中行的数量。
      while($row = $result->fetch_assoc()) {  //mysql_fetch_assoc() 函数从结果集中取得一行作为关联数组。
                                              //返回根据从结果集取得的行生成的关联数组，如果没有更多行，则返回 false。
        ?>
        <!-- article.php?wzid=id&uid=用户id -->
        <li><a style = "font-size:19px" href='article.php?wzid=<?php echo $row['id'];//定义wzid
          if (isset($_REQUEST['uid'])) {
            echo "&uid=".$_REQUEST['uid']."'>";
          }
          echo $row['title']."来源：".$row['author']."时间:".$row['time'];
          ?>
    </a></li><br>
    <?php
      }
 }

 ?>
</ul>
</div>
<?php
include 'db_close.php';//关闭数据库
 ?>
