<?php
session_start();
?>

<?php if(isset($_SESSION['username'])):?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>用户信息</title>
    <link rel="icon" href="img/favicon-32x32.png" sizes="32x32" type="image/png" />
</head>

<body>
    <p>欢迎 <?php echo $_SESSION['username']?></p>
</body>

</html>





<?php else: ?>
<script>
window.location.href = "login.html"
</script>
<?php endif ?>