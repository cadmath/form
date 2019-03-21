<html>
<body>
<form method="POST"> 
Name: <input type="text" name="name" value="<?php echo $_POST['name'];?>">
Value: <input type="text" name="value" value="<?php echo $_POST['value'];?>">
<input type="submit" value="Отправить">
</form>

<?php
echo $_POST['name'].' : '. $_POST['value'];
?>
</body>
</html>
