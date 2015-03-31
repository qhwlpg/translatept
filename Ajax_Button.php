<?php
mysql_connect('localhost:8888','root','root') or die("连接失败：".mysql.error());
mysql_selectdb('translate_ips') or die("不能选定数据库translate：".mysql_error());
$id = 0;
if(isset($_GET['a'])){
    $rs=mysql_query("UPDATE ajax_button SET num = num +1 WHERE name = '".$_GET['a']."'");
    if(mysql_affected_rows()==1)
    {
    $rs=mysql_query("select * from ajax_button where name='".$_GET['a']."'");
    $row=mysql_fetch_array($rs);
    echo $row['num'];
    }
}
if(isset($_GET['b'])){
    $rs=mysql_query("UPDATE ajax_button SET num = num -1 WHERE name = '".$_GET['b']."'");
    if(mysql_affected_rows()==1)
    {
    $rs=mysql_query("select * from ajax_button where name='".$_GET['b']."'");
    $row=mysql_fetch_array($rs);
    echo $row['num'];
    }
}
if(isset($_GET['c'])){
    
    if($_GET['c'])
    {
        $id = $id - 1;
        if($id>=0)
        {
            $rs=mysql_query("select * from ajax_button where id=".$id);
            $row=mysql_fetch_array($rs);
            echo $row['msg_en'];
        }else{
            echo '出错了！';
            $id = 0;
        }
    } 
    if(!($_GET['c']))
    {
        $id = $id + 1;
        if($id>=0)
        {
            $rs=mysql_query("select * from ajax_button where id=".$id);
            $row=mysql_fetch_array($rs);
            echo $row['msg_en'];
        }else{
            echo '出错了！';
            $id = $id - 1;
        }
    } 
}
if(isset($_GET['d'])){
    $rs=mysql_query("select * from ajax_button where id=".$id);
    $row=mysql_fetch_array($rs);
    echo $row['msg'];
}
if(isset($_POST['ts'])){
    $aaa = $_POST['ts'];
    $update = mysql_query("update ajax_button set msg='$aaa' where id=".$id);
}
?>