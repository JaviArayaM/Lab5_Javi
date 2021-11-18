<?php include('dbcon.php');
 @session_start();

if (!isset($_SERVER['REQUEST_URI']) || (trim($_SERVER['REQUEST_URI']) == '')) { ?>
<script>
window.location = "index.php";
</script>
<?php 
}
$session_id=$_SERVER['REQUEST_URI'];

$user_query = mysqli_query($db,"select * from visitor_logs where id = '$session_id'")or die(mysql_error());
$user_row = mysqli_fetch_array($user_query);
$user_ip_address = $_SERVER['REMOTE_ADDR']; 
$referrer_url = !empty($_SERVER['HTTP_REFERER'])?$_SERVER['HTTP_REFERER']:'/'; 
$user_agent = $_SERVER['HTTP_USER_AGENT']; 
 



$id=$_SERVER['REQUEST_URI'];
?>