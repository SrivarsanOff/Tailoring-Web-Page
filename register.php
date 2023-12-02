<?php include ("head.html")
?>
<body>
<div class="body_login">
<center>
<div class="form">
<form action="db.php" method="post">
<br />
<img src="images/user.png" height="80px" width="80px">
<br />
<br />
<label>REGISTER</label>
<br />
<br />
<label>Name  :  </label>
<input type="text" size="20" name="name"/>
<br />
<br />
<label>Email  :  </label>
<input type="text" size="20" name="email"/>
<br />
<br />
<label>City  :  </label>
<select name="city">
<option>Select City</option>
<option value="Coimbatore">Coimbatore</option>
<option value="Chennai">Chennai</option>
<option value="Tichy">Tichy</option>
<option value="Erode">Erode</option>
</select>
<br />
<br />
<label>Password  :  </label>
<input type="password" size="20" name="password"/>
<br />
<br />
<input type="submit" size="10" name="register"/>
</form>
</div>
</center>
</div>
</body>
<?php include ("foot.html")
?>
