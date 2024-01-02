<?php
//通过id获取用户名
function getUserNameById($conn,$user_id){
      $sql = "select * from user where id = ".$user_id;
      $result = $conn->query($sql);
      if ($result->num_rows>0) {
        while ($row = $result->fetch_assoc()) {  
          //mysql_fetch_assoc() 函数从结果集中取得一行作为关联数组。
          //返回根据从结果集取得的行生成的关联数组，如果没有更多行，则返回 false。
          return $row['uname'];
        }
      }
}
//通过id获取商品名
function getGoodsNameById($conn,$goods_id){
  $sql = "select * from goods where id = ".$goods_id;
  $result = $conn->query($sql);
  if ($result->num_rows>0) {
    while ($row = $result->fetch_assoc()) {
      return $row['goods_name'];
    }
  }
}
//通过id获取获取单价
function getGoodsPriceById($conn,$goods_id){
  $sql = "select * from goods where id = ".$goods_id;
  $result = $conn->query($sql);
  if ($result->num_rows>0) {
    while ($row = $result->fetch_assoc()) {
      return $row['price'];
    }
  }
}
//把用户头像写入数据库
function updateAvatar($conn,$user_id,$file_name){
  $sql = "update user set avatar = 'touxiang/".$file_name."' where id = ".$user_id;
  if ($result=$conn->query($sql)) {
    //上传成功！
    return true;
  }else {
    return false;
  }
}
