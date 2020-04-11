<?php
session_start();
function loginOut(){
    unset($_SESSION['username']);
}
loginOut();
echo '<script>window.location.href=\'../index.php\'</script>';


