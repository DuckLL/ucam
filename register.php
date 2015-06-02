<?php
require_once('control/html.php');
head();
?>
<script src="js/register.js"></script>
<form method="post" action="control/register.php">
	<label >帳號</label>
	<input class="form-control" name="account" id="account" onkeyup="checkRegAcc()" required>
	<span id="msg_user_name"></span>
	<br>
	<label>密碼</label>
	<input class="form-control" type="password" name="password" id="password" required>
	<label>密碼確認</label>
	<input class="form-control" type="password" name="password2" id="password2" required>
	<label>暱稱</label>
	<input class="form-control" type="text" name="nick" required>
	<br>
	<input type="submit"  class="btn btn-primary"  id="submit" value="送出" style="float:right;">	
</form>
<?php
tail();
?>