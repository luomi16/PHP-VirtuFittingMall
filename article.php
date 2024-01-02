<!DOCTYPE>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<?php
session_start();  //session实现当同一个浏览器访问时，同一个web服务器内两个不同页面之间的传参。 
include 'conn.php';  //连接数据库
if (isset($_REQUEST['wzid'])) {  //isset — 检测变量是否已设置并且非 null
  $wzid = $_REQUEST['wzid'];  //$_REQUEST可以获取以POST方法和GET方法提交的数据
}else {
  echo "";
}
?>
    <title>文章</title>
    <link rel="icon" href="images/logo.png">
    <link rel="stylesheet" type="text/css" href="css/general.css">
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <link rel="stylesheet" type="text/css" href="css/goods.css">
    <link rel="stylesheet" type="text/css" href="css/article.css">
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/general.js"></script>
    <script type="text/javascript" src="js/carousel.js"></script>
    <body>
<!-- 顶部开始 -->


<!-- 头部开始 -->
<?php include 'header.php'; ?>
<!-- 头部结束 -->
<!-- 主体开始 -->
<div class="container w1100">

      <br>  <br>  <br>  <br>
<?php
$sql = "select * from wenzhang where id = ".$wzid;
$result = $conn->query($sql);
if($result->num_rows>0){
  while($row = $result->fetch_assoc()) {
      echo "<p style='font-size:28px' align='center';>".$row['title']."</p><br>";
      echo "<p style='font-size:12px; color:gray;' align='center';>来源：".$row['author']."&nbsp; &nbsp;&nbsp"."时间:".$row['time']."</p>";
      echo "<br><p style='font-size:15px'; text-indent:2em>".$row['content']."</p>";
  }
}
 ?>

<!--------------------------------------------留言板------------------------------------------------------------>
<?php 
      $sql = "select * from lyb order by id desc";    //sql查询语句
      $result = $conn->query($sql);      //执行sql查询语句
      if($result == false ){        //判断sql语句是否执行成功
    ?>
      <script language="javascript">
          alert('<?php echo "sql语句错误"; ?>');    //执行错误后弹框提示语句错误
      </script>
    <?php
      }
      $rows = [];        //设置数组（存放数据库查询出的内容）
      while ($row = $result->fetch_assoc() ) {    //循环sql查询到的内容
        # code...
        $rows[] = $row;        //将循环的sql内容输入到数组
      }
 ?>

  <style type="text/css" media="screen">    // 设置css
    .over{margin: 0 35%;}
    .user{color: #a443c2;}
    .time{float: right;}
    .times{color: #7a35d4}
    .content{display: block;width: 80%;border: 1px solid #abc;margin-top: 5px;margin-bottom: 20px;word-wrap:break-word; word-break:break-all; }
    .mess{width: 100%;height: auto;overflow-x: hidden;}
  </style>

   <div class="discu">   <!---   article.css      --->
    <div>    
        <!--设置表单的提交方式，字符编码，提交后的PHP处理文件 -->
        <form action="save.php " method="POST" accept-charset="utf-8" id="myForm">  
        <!-- 设置用户输入留言的表单 -->
        <p style="margin-top:40px;">评论区</p>
        <textarea cols="80" rows="6" name="lynr" placeholder="留言内容"></textarea> 
        <br>
        <input type="text" name="lyr" placeholder="留言人" class="discu_lyr">   
        <input type="button" onclick="formReset()" value="清空" class="discu_submit buynow">
        <input type="submit" value="提交" class="discu_submit buynow">     
        </form>
        <script type="text/javascript">
        function formReset()
          {
            document.getElementById("myForm").reset();
          }
        </script>

    <div class="mess">
    <!-- 循环数组，循环整个DIV -->
    <br><br><br>
    <?php foreach ($rows as $rowe){ ?>    
    <div class="discu_display">     
     <!-- 设置留言板的输出 -->
     <!-- 将循环数组中的用户输出 -->
      留言人：<font class="user"><?php echo "$rowe[user]"; ?></font>    
      <div class="time">留言时间:<a class="times">
      <!-- 将循环数组中的用户留言时间输出 -->
      <?php echo date("Y-m-d H:i:s",$rowe['time']); ?>
        </a></div>
      <div>留言内容：<a class="content">
      <!-- 将循环数组中的留言内容输出 -->
        <?php echo "$rowe[connect]"; ?>    
      </a></div>
    </div>
    <?php } ?>    
    </div>
  </div>
</div>
<!-------------------------------------------------------------------------------------------------------->
</body>
</html>

<?php
include 'db_close.php';
 ?>
