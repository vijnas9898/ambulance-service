<?php
?>
<html>
 
<head>
<style>
body {background-color: #eff2f9;}

</style> 
<title>Ambulance Services</title>
 
</head>
 
<body>
 
<form method="post" action="register.php">
 
<table border="1" align="center" width="400" bgcolor="#92ace4" >
 
<caption><strong>Registration form</strong></caption>
 
<tr>
 
<th>Enter your first name</th>
 
<td><input type="text" name="fn" placeholder="enter your first name" required/></td>
 
</tr>
 
<tr>
 
<th>Enter your last name</th>
 
<td><input type="text" name="ln"/></td>
 
</tr>
 
<tr>
 
<th>Enter your password</th>
 
<td><input type="password" name="pass"/></td>
 
</tr>
 

<tr>
 
<th>Enter your email</th>
 
<td><input type="email" name="email"/></td>
 
</tr>

<tr>
 
<th>Enter your unique id</th>
 
<td><input type="text" name="unique"/></td>
 
</tr>
 
<tr>
 
<th>Enter your mobile</th>
 
<td><input type="number" name="mob"/></td>
 
</tr>
 
<tr>
 
<th>Enter your address</th>
 
<td><input type="text" name="add"/></td>
 
</tr>
 
<!--  
<tr>
 
<th>Upload your File</th>
 
<td><input type="file" name="file" />
 <button type="submit" name="btn-upload">upload</button></td>
 
</tr>
  -->
<tr>
 
<td colspan="2" align="center"><input type="submit" value="Save My Data"/>
 
<input type="reset" value="Reset Data"/>
 
</td>
 
</tr>
 
</table>
 
</form>
 
</body>
 
</html>
