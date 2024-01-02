<?php 
  include("class.php");
  include("conn.php");   
  $content = $_POST['lynr'];    //接收用户输入的留言内容
  $user = $_POST['lyr'];      //接收用户输入的用户名
  $class = new pd;      //将类实例化
  $ur = $class->input($user);        //向函数内传输参数，并将返回的结果输出变量
  $con = $class->input($content);    //向函数内传输参数，并将返回的结果输出变量
  if ($con == false) {      
    # code...
  ?>
    <script language="javascript">
      alert('<?php echo "输入的留言内容不正确"; ?>');
      history.go(-1);
    </script>
  <?php
    include("article.php");
    exit;
  }
  if ($ur == false ) {    //判断用户输入的内容是否正确
  ?>
    <script language="javascript">
      alert('<?php echo "输入的用户名不正确"; ?>');    //输入错误后弹框输出
    </script>
  <?php
    include("article.php");    //输入错误后返回主页
    exit;            //输入错误后截停程序
  }
  
  $time = time();      //获取当前时间戳
  $sql = "insert into lyb(connect,user,time) value('{$content}','{$user}','{$time}')";  //sql插入语句
  $result = $conn->query($sql);      //执行sql语句，并设置为变量
  if($result == false){      //判断数据库语句是否执行成功
    ?>
    <script language="javascript">
      alert('<?php echo "未留言成功,请重新输入"; ?>');  
      history.go(-1);
    </script>
  <?php
    include("article.php");
    exit;
  }
  ?>
    <script language="javascript">
      alert('<?php echo "留言成功!"; ?>');
      history.go(-1);
    </script>

    