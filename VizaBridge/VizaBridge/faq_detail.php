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
        </div>

        <!-- ************ MAIN CONTENT ************** Remote Unmoderated Usability Test? -->
        <div class="head-div">
            <a href="faq_detail.php" class="stat-summary"><p>FAQ Detail</p></a>
        </div>
        <div class="faq-stat-box">
            <form action="" name="">

            <p class="faq-ttl">Question</p>
            <input type="text" name="" placeholder="Question Here" class="faqbox">
            <p class="faq-ttl1">Answer</p>
            <input type="text" name="" placeholder="Answer Here" class="faqbox1">
            
        </div>
            <div class="faq-btn-controller">
                <input type="button" class="update-btn-pmt" name="" value="Update">
            </div>
            <div class="faq-btn-controller">
                <input type="button" class="delete-btn-pmt" name="" value="Delete">
            </div>
            </form>
    
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