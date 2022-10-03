<?php




?>


<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="VizaBridge Admin Portal">
  <meta name="author" content="VizaBridge">
  <meta name="keyword" content="VizaBridge, South Korea Visa, visa, VizaBridge, visa consultancy, VizaBridge, South Korea, portal">
  <title>Dashboard</title>
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link href="../VizaBridge/css/footer.css" rel="stylesheet">
  <link href="../VizaBridge/css/dashboard.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet">
  <!-- Favicons -->
  <link href="images/favcon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">
</head>
<body>

<div class="top-bar">
    <a href="dashboard.php" class="company-name"><img src="../VizaBridge/images/logo2.png" class="company-name"></a>
</div>

    <div class="container">
    <div class="side-bar">
   <ul class="nav-heading">
                <a href="dashboard.php" class="nav-link">Statistic</a><br>
                <a href="reservation.php" class="nav-link">Reservation</a><br>
                <a href="payment.php" class="nav-link">Payment</a><br>
                <a href="user.php" class="nav-link">User</a><br>
                <a href="visa.php" class="nav-link">Visa Consultant</a><br>
                <a href="inquiry.php" class="nav-link">Inquiry</a><br>
                <a href="faq.php" class="nav-link">Faq</a><br>
                <a href="posting.php" class="nav-link">Posting</a>
            </ul>
        </div>

        <!-- ************ MAIN CONTENT ************** -->
        <div class="search-bar">

        </div>
        <input class="search-btn" type="button" value="Search"></input>
        
        <div class="table-title">
            <a href="payment.php" class="stat-summary"><p>Payment List</p></a>
        </div>
        <div class="table-content">
        <table class="table">
    <thead>
        <tr>
            <th scope="col">Reservation No.</th>
            <th scope="col">Payment No.</th>
            <th scope="col">Appointment Date</th>
            <th scope="col">Time</th>
            <th scope="col">Email</th>
            <th scope="col">Service</th>
            <th scope="col">Price</th>
            <th scope="col">Payment Method</th>
        </tr>
    </thead>
    <tbody>
            <tr>
            <th scope="row">1</th>
            <td>234</td>
            <td>2022.07.02</td>
            <td>13:00 - 15:00</td>
            <td>mail@gmail.com</td>
            <td>SMS</td>
            <td>20.000 KRW</td>
            <td>Paypal</td>
            </tr>
            <tr>
            <th scope="row">2</th>
            <td>223</td>
            <td>2022.07.02</td>
            <td>13:00 - 15:00<</td>
            <td>mail@gmail.com</td>
            <td>SMS</td>
            <td>20.000 KRW</td>
            <td>Paypal</td>
            </tr>
            <tr>
            <th scope="row">3</th>
            <td>345</td>
            <td>2022.07.02</td>
            <td>13:00 - 15:00<</td>
            <td>mail@gmail.com</td>
            <td>SMS</td>
            <td>20.000 KRW</td>
            <td>Paypal</td>
            </tr>
    </tbody>
</table>

        </div>
    </div>
</div>
    
    <!--**************** FOOTER SECTON **************************-->
    <div class="footer-bar">
        <div class="address">
        <h2>VizaBridge</h2>
        <p class="address-content">
        GLOBALBRIDGE Inc | CEO KANG DONG SHIN | Personal Information Manager LUCAS
        260-3 high-tech campus, 815, Daewangpangyo-ro, Sujeong-gu, Seongnam-si, Gyeonggi-do, Republic of Korea
        Business Registration Number 205-08-92848
        Contact : hello@jobbridge.co.kr/02-959-3694
        </p>
        </div>
        <div class="address1">
        <h2>App</h2>
        <p class="address-content">
            IOS<br>
            Android<br>
            APK<br>
        </p>
        </div>
        <div class="address">
        <h2 >Lorem</h2>
            <p class="address-content">
            Term & Service<br>
            Customer Services<br>
            Refund Policy</p>
        </p>
        </div>
        <div class="footer-content">
            <p class="copyright">&copy 2022 JobBridge. All Right Reserved</p>
            <p class="copyright1">Connect with Us:</p>
        </div>
        
    </div>
</html>