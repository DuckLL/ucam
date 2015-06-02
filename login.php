<?php
require_once('control/html.php');
head();
?>
<form method="post" action="control/login.php">
	<label >帳號</label>
	<input class="form-control ng-pristine ng-valid" name="account" required>
	<br>
	<label>密碼</label>
	<input class="form-control password ng-pristine ng-valid" type="password" name="password" required>
	<br>
	<input type="submit" value="登入" class="btn btn-primary" align="left">				
</form>
<?php
tail();
?>