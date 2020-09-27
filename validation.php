<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript">
	function validate(){
		var uname = document.forms["frm"]["username"];
		var email = document.forms["frm"]["email"];
		var pass = document.forms["frm"]["password"];
		var repass= document.forms["frm"]["repassword"];

		if (uname.value== "") {
			window.alert("enter username");
			uname.focus();
			return false;
		}
		if (email.value== "") {
			window.alert("enter email");
			email.focus();
			return false;
		}
		if (!/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/.test(email.value)) {
			window.alert("enter valid email");
			email.focus();
			return false;
		}
		if (pass.value== "") {
			window.alert("enter password");
			pass.focus();
			return false;
		}
		var x = pass.value;
		if (x.match(/[a-z]/g) && x.match(/[A-Z]/g) && x.match(/[0-9]/) && x.match(/[^a-zA-Z\d]/g) && x.length >=8) {
			window.alert("password must contain symbol,number");
			pass.focus();
			return false;
		}
		else if (repass.value != pass.value) {
			window.alert(" password does not match");
			repass.focus();
			return false;
		}
		return true;

	}
	</script>

</head>
<body>
<form name="frm" action="" onsubmit="return validate()" method="post">
	Username: <input type="text" name="username"><br><br>
	E-mail: <input type="text" name="email"><br><br>
	Password: <input type="password" name="password"><br><br>
	repassword: <input type="password" name="repassword"><br><br>

	<input type="submit" name="submit" value="Submit">
	<input type="reset" name="reset" value="Reset">
	
</form>
</body>
</html>