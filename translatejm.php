<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>翻译</title>
<script>
var id=0;
function aa()
{
id = 1;
var xmlhttp;
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("num").innerHTML=xmlhttp.responseText;
    }
  }
//xmlhttp.open("GET","Ajax_button.php?a=a",true);
xmlhttp.open("GET","Ajax_button.php?c="+id,true);
xmlhttp.send();
}
function bb()
{
id = 0;
var xmlhttp;
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("num").innerHTML=xmlhttp.responseText;
    }
  }
//xmlhttp.open("GET","Ajax_button.php?b=a",true);
xmlhttp.open("GET","Ajax_button.php?c="+id,true);
xmlhttp.send();
}
// function tj()
// {
// id = 0;
// var xmlhttp;
// if (window.XMLHttpRequest)
//   {// code for IE7+, Firefox, Chrome, Opera, Safari
//   xmlhttp=new XMLHttpRequest();
//   }
// else
//   {// code for IE6, IE5
//   xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
//   }
// xmlhttp.onreadystatechange=function()
//   {
//   if (xmlhttp.readyState==4 && xmlhttp.status==200)
//     {
//     document.getElementById("zhongwen").innerHTML=xmlhttp.responseText;
//     }
//   }
// //xmlhttp.open("GET","Ajax_button.php?b=a",true);
// xmlhttp.open("GET","Ajax_button.php?d="+id,true);
// xmlhttp.send();
// }
function yysubmit()
{
var xmlhttp;
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }

var url = 'Ajax_button.php';  
var postData = "";  
postData = "ts=" + document.getElementById('textarea_id').value;
//document.write(postData);
xmlhttp.open("POST", url, true);  
// xmlhttp.onreadystatechange = function() {  
//     if(xmlHttp.readyState == 4 && xmlHttp.status == 200) {  
//       if(xmlHttp.responseText == '1') {  
//         alert('post successed');  
//         }  
//     }  
// }  
xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");  
// xmlhttp.onreadystatechange=function()
//   {
//   if (xmlhttp.readyState==4 && xmlhttp.status==200)
//     {
//     document.getElementById("ts").innerHTML=xmlhttp.responseText;
//     }
//   }
xmlhttp.send(postData);
}

function chakan()
{
id = 0;
var xmlhttp;
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("zhongwen").innerHTML=xmlhttp.responseText;
    }
  }
//xmlhttp.open("GET","Ajax_button.php?b=a",true);
xmlhttp.open("GET","Ajax_button.php?d="+id,true);
xmlhttp.send();
}
</script>
</head>
<body>

<?php
//使用javascript时，如何将php得到的mysql数据库查询结果动态嵌入到script中去
//http://zhidao.baidu.com/link?url=gRSsO7QjURouNQQoH4ppaCsMzn_oWKFjbhy0rpm0WAY5NvEGQXtf8GqTI7-5jdsO3oUCks38G20qfN_AeRZaMK
//javascript访问MYSQL
//http://www.cnblogs.com/ada-zheng/archive/2013/05/24/3096613.html
 $sig_orig = 2007118;
 $id = 0;
 $link1 = mysql_connect("localhost:8888","root","root") or die("连接失败：".mysql.error());
 mysql_select_db('translate_ips') or die("不能选定数据库translate：".mysql_error());
 $result = mysql_query("select * from ajax_button where id=".$id);
 //$result = mysql_query("select * from ET1_4_1 where id=0");
 $row = mysql_fetch_array($result);
 //print_r($result);
 //<div id='num'></div>
 //echo '英文：'.$result['msg_en'].'<br/>';
 echo "英文:<div id='num'>".$row['msg_en']." <br/></div>";
 //mysql_free_result($result);
 mysql_close($link1);
?>

<form action="translatejm.php" method="post" onsubmit="return false;">
<textarea id="textarea_id" name="ts" cols="50" rows="5">
</textarea><br/><br/>
<input type="reset" name="reset" id="reset" value="重置" />
<!--纯javascript的ajax实现php异步提交表单 http://blog.csdn.net/yipiankongbai/article/details/11021619-->
<input type="button" name="submit" id="submit" value="提交" onclick="yysubmit()"/>
<!--<input type="button" name="tj" id="tj" value="提交" onclick="tj()">-->
</form>

<!--<button onclick="AA()">上一条</button>-->
<!--<button onclick="BB()">下一条</button>-->
<input type="button" name="aa" id="aa" value="上一条" onclick="aa()">
<input type="button" name="bb" id="bb" value="下一条" onclick="bb()">
<input type="button" name="chakan" id="chakan" value="查看" onclick="chakan()">
<?php
// <script>
// function AA()
// {
// document.getElementById("AA").innerHTML=Date();
// }
// function BB()
// {
// document.getElementById("BB").innerHTML=Date();
// }
// </script>
// <p id="AA">aa</p>
// <p id="BB">aa</p>
?>

<!--当前页面数据库中访问次数：<div id='num'></div><br>-->

<?php
if(isset($_POST['ts'])){
    $aa = $_POST['ts'];
    //echo "<br/>".$aa."<br/>";
    $link2 = mysql_connect("localhost:8888","root","root") or die("连接失败：".mysql.error());
    mysql_select_db('translate_ips') or die("不能选定数据库translate：".mysql_error());

    $update = mysql_query("update ajax_button set msg='$aa' where id=0");

    // $result = mysql_query("select * from ajax_button where id=0");
    // $row = mysql_fetch_array($result);
    // echo "<div id='zhongwen0'>".$row['msg']." <br/></div>";
    echo "<div id='zhongwen'></div>";
    mysql_close($link2);
}
?>
</body>
</html>