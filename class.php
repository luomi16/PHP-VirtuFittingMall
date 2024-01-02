<?php 
  /**
   * 定义判断用户输入内容是否符合规定
   */
  class pd   //定义类
  {
     
    function input($post)      //设置函数，此函数用来判断输入内容
    {
      # code...
      if ($post == "" ){      //判断是否内容为空
        return false;      //输出结果为false
      }
      return true;    //输出结果为true
    }
  }
 ?>