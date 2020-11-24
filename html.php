
<html>
	<head>
		<title>login</title>
  <link rel="stylesheet" href="../css/registration.css"></head>
	<body>

		<fieldset id="register_form" align= "center">
      <h1>login</h1>

			<form action="" method="post"  >
				<table>
          
          <tr>
          <td style="text-align: left;"> Username:</td>
          <td style="text-align: left;"><input type="text" name="username" value=<?php echo $username; ?>><span><?php echo $error_username; ?></span></td>
          </tr>
          <tr>
          <td style="text-align: left;"> Password:</td>
          <td style="text-align: left;"><input type="password" name="password" value=<?php echo $password; ?>><span><?php echo $error_password; ?></span></td>
          </tr>
          <tr>
          <td style="text-align: left;"> Type:</td>
          <td style="text-align: left;"><input type="text" name="type" value=""><span><?php echo $error_type; ?></span></td>
          </tr>
          <tr>

          
				</table>
			</form>
		</fieldset>
	</body>
</html>
