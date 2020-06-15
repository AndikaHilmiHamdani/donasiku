<?php

if(!isset($_SESSION['admin'])){
	echo '<script language="javascript">alert("Anda harus Login!"); document.location="../donasiku.com/?module=admin";</script>';
}else{
?>

<h1>Halaman Admin <span style="color:red"><?php echo $_SESSION['nama'];?></span></h1>


<?php
}
?>