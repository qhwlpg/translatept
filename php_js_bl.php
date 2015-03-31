<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>phpjavascrit</title>
</head>

<script>
var a = '我是旭日！';
</script>

<body>
<?php 
$c = "<script>document.write(a);</script>";
echo $c;
?>

<?php
$val_overview_pic = "我是旭日！";
?>
<input type="hidden" name="did" value="aa">
<script language="javascript" type="text/javascript">
alert(did.value);
</script>

<?php $myvar=10; ?> 
<script type="text/javascript"> 
jsvar = <?php echo $myvar; ?>; 
document.write(jsvar); // Test to see if its prints 10: 
</script> 

</body>
</html>

