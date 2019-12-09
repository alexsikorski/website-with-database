<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
body {
background-color: #35afda;
font-family: "Raleway", Arial, sans-serif
}
</style>
<title> E-Commerce Store</title>
<body>

<!-- !page content! -->
	<div class="w3-content" style="max-width:1500px">

		<!-- header -->
		<header class="w3-container w3-large clolor: #35afda">
			<a href="index.html" class="w3-left w3-button">EC Company</a>
			<a href="login.php" class="w3-right w3-button">Manager Login</a>
			<a href="reset.php" class="w3-right w3-button">Reset DB</a>
			<a href="phpinfo.php" class="w3-right w3-button">PHP info</a>
			<a href="connection.php" class="w3-right w3-button">Test Connection</a>
		</header>
	</div>
	
<!-- login -->
	<footer class="w3-light-grey w3-padding-64 w3-center" id="LOGIN">
		<form method="post" action="validate_login.php" >
        <table border="1" >
            <tr>
                <td><label for="managers_number">Manager ID</label></td>
                <td><input type="text" 

                  name="manager_number" id="managers_number"></td>
            </tr>
            <tr>
                <td><label for="users_pass">Password</label></td>
                <td><input name="users_pass" 

                  type="password" id="users_pass"></td>
            </tr>
            <tr>
                <td><input type="submit" value="Submit"/>
                <td><input type="reset" value="Reset"/>
            </tr>
        </table>
    </form>
	</footer>
</html>