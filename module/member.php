<?php
//session_start();

if(!isset($_SESSION['member'])){
	echo '<script language="javascript">alert("Anda harus Login!"); document.location="../De-news/?module=member";</script>';
}else{
?>

<h1>HALO, <span style="color:red"><?php echo $_SESSION['nama'];?></span></h1>
<a href="../De-news/?module=donate.php"></a>


<?php
}
?>