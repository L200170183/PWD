<?php 
session_start();
session_destroy();
?>
<script language script='Javasript'>
alert('Anda Telah Logout');
document.location = 'login.php';
</script>