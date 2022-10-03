<?php




?>
<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="VizaBridge Admin Portal">
  <meta name="author" content="VizaBridge">
  <meta name="keyword" content="VizaBridge, South Korea Visa, visa, VizaBridge, visa consultancy, VizaBridge, South Korea, portal">
  <title>Login</title>
  <link href="../VizaBridge/css/index.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet">
  

  <!-- Favicons -->
  <link href="images/favcon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">
</head>
<body>
<hgroup>
  <h3><img src="../VizaBridge/images/index.png" style="height:100px; width:200px;"></h3>
  <h3>Please Enter Login Details</h3>
</hgroup>
<form method="POST" action="login.php">
  <div class="group">
    <input type="email" name="Email" for="Email"><span class="highlight"></span><span class="bar"></span>
    <label>Email</label>
  </div>
  <div class="group">
    <input type="password" name="Password" for="Password"><span class="highlight"></span><span class="bar"></span>
    <label>Password</label>
  </div>
  <button type="button" class="button buttonBlue" name="login" value="login">Sign In
    <div class="ripples buttonRipples"><span class="ripplesCircle"></span></div>
  </button>
</form>
<footer><a href="index.php" target="_blank"><img src="../VizaBridge/images/index.png"></a>
  <p>Forget Password ?<a href="Reset_Password.php" target="_blank">Reset Password</a></p>
</footer>
</body>
<script src="../VizaBridge/js/index.js">
<script src="lib/chart-master/Chart.js"></script>
</html>