<?php session_start(); ?>
<html>
<head>
  <meta charset="utf-8">
  <title>paginana de inicio</title>
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
<header>
    <div class="container"><center><h1>Almacen DON MANOLO</h1></center></div>
</header>
<center>
  <form action="procesa_login.php" method="post">
  <table width="323">
    <tr>
    <td colspan="2" align="center" height="50"><h1>Login</h1></td>
    </tr>
    <tr>
      <td width="131" height="50">Usuario : </td>
      <td width="176" height="50"><input type="text" name="usr" id="usr" size="20"></td>
    </tr>
    <tr>
      <td height="50">Clave : </td>
      <td height="50"><input type="password" name="pwd" id="pwd" size="20"></td>
    </tr>
    <tr>
      <td colspan="2" align="center" height="50"><input name="Enviar" type="submit" value="INGRESAR"></td>
    </tr>
  </table>
</form>
</center>
<footer>
  <div class="container">
    <center><h3>Emergentes I</h3></center>
  </div>
  <!--redirecciona a al archivo para cerrar la session-->
</footer>
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>
</html>
