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

        <!-- ************ MAIN CONTENT ************** Remote Unmoderated Usability Test? -->
        <div class="head-div">
            <a href="visa_detail.php" class="stat-summary"><p>Consultant</p></a>
        </div>
        <div class="visa-stat-box">
            <div class="content-dtl">
                <form action="" name="">
                <div class="content-controller">
                    <p class="content-ttl">Avaliable Time</p>
                    <input type="text" class="content-body" name="" value="Monday - Friday">
                </div>
                <div class="content-controller1">
                    <p class="content-ttl">Price (SMS Consultation)</p>
                    <input type="text" class="content-body" name="" value="20,000 KRW">
                </div>
            </div>
            <div class="content-dtl">
            <div class="visa-ttl">
                    <p class="content-ttl">Time</p>
                    <input type="text" class="content-body" name="" value="09:00 - 18:00">
                </div>
                <div class="visa2-visa1">
                    <p class="content-ttl">Price(Call Consultation)</p>
                    <input type="text" class="content-body" name="" value="20,000 KRW">
                </div>
            </div>

        </div>
       
        <div class="visa-stat-graph">
            <a href="visa_detail.php" class="stat-summary"><p>Information</p></a>
        </div>
        <div class="visa-graph-box">
            <div class="image-box-controller">
                
                <div class="image-box">
                <label> Face Picture </label>
                </div>
                <div class="image-box1">
                <label> Face Picture </label>
                </div>
            </div>
            <div class="image-box-controller">
                <div class="visa-controller">
                    <p class="detail-ttl">Reservation Number</p>
                    <input type="text" class="visa-text" name="" value="123456789">
                </div>
                <div class="visa-controller1">
                    <p class="visa-ttl">Reservation Number</p>
                    <input type="text" class="visa-text" name="" value="123456789">
                </div>
            </div>
            <div class="lower-content">
                <div class="lower-content-controller">
                    <p class="visa-ttl">Email</p>
                    <input type="text" class="lower-content-body" name="" value="mail@gmail.com">
                </div>
                <div class="lower-content-controller">
                    <p class="visa-ttl">Password</p>
                    <input type="text" class="lower-content-body" name="" value="Pass1234">
                </div>
            </div>
    </div>
    <div class="detail-stat-graph">
            <a href="visa_detail.php" class="stat-summary"><p>Detail</p></a>
        </div>
        <div class="detail-graph-box">
            <p class="detail-ttl">Special Notes</p>
            <input type="text" class="text-content" name="" placeholder="Ex: Public Official Activities ">
            <div class="detail-lower">
                <p class="detail-ttl1">Jajor Area</p>
                <input type="text" class="detail-body" name="" placeholder="Major Area 1">
                <input type="text" class="detail-body" name="" placeholder="Major Area 2">
                <input type="text" class="detail-body" name="" placeholder="Major Area 3">
            </div>
        </div>
        <div class="work-stat-graph">
            <a href="visa_detail.php" class="stat-summary"><p>Work Experience</p></a>
        </div>
        <div class="work-graph-box">
            <div class="work">
                <h3 class="work-title">Position</h3>
                <p class="work-text">Company Seoul South Korea</p>
                <p class="work-text1">2020 - 2021</p>
                <p class="work-body"> Work Experience goes here</p><br>
                <p class="work-body1"> 1. Experience</p><br>
                <p class="work-body2"> 1. Experience</p><br>
            </div>
        </div>
        <div class="quali-stat-graph">
            <a href="visa_detail.php" class="stat-summary"><p>Qualification</p></a>
        </div>
         <div class="quali-graph-box">
           <div class="quali">
                <h3 class="quali-title">Qualification</h3>
                <p class="quali-text">Google</p>
                <p class="quali-text1">2017</p>
                <p class="quali-body"> Qualification goes here</p><br>
            </div>
            <div class="quali1">
                <h3 class="quali-title1">UX Design Professional Certificate</h3>
                <p class="quali-text1">Google</p>
                <p class="quali-text2">2017</p>
                <p class="quali-body1"> Qualification goes here</p><br>
            </div>
        </div>
        <div class="work-stat-graph">
            <a href="visa_detail.php" class="stat-summary"><p>Work Experience</p></a>
        </div>
        <div class="work-graph-box">
            <div class="work">
                <h3 class="work-title">Position</h3>
                <p class="work-text">Company Seoul South Korea</p>
                <p class="work-text1">2020 - 2021</p>
                <p class="work-body"> Work Experience goes here</p><br>
                <p class="work-body1"> 1. Experience</p><br>
                <p class="work-body2"> 1. Experience</p><br>
            </div>
        </div>
        <div class="academic-stat-graph">
            <a href="visa_detail.php" class="stat-summary"><p>Academic Background</p></a>
        </div>
         <div class="academic-graph-box">
           <div class="academic">
                <h3 class="academic-title">Masters in Seoul National University</h3>
                <p class="academic-text">Faculty of Business Administration</p>
                <p class="academic-text1">2019 - 2020</p>
                <h2 class="academic-text2">Relavent Courses</h2>
                <p class="academic4-text2">Data Science</p>
                <p class="academic5-text2">Marketing</p>
            </div>
            <div class="academic1">
            <h3 class="academic-title">Bachelor in Seoul National University</h3>
                <p class="academic-text">Faculty of Business Administration</p>
                <p class="academic-text1">2015 - 2018</p>
                <h2 class="academic-text2">Relavent Courses</h2>
                <p class="academic4-text2">Data Science</p>
                <p class="academic5-text2">Marketing</p>
            </div>
        </div>
        <div class="activity-stat-graph">
            <a href="visa_detail.php" class="stat-summary"><p>Activities</p></a>
        </div>
        <div class="activity-graph-box">
            <div class="activity">
                <h3 class="activity-title">Name of Activity</h3>
                <p class="activity-text">Place: Seoul South Korea</p>
                <p class="activity-text1">2020 - 2021</p>
                <p class="activity-body"> Some Explination Details goes here</p><br>
                <p class="activity-body1"> 1. Some Text goes here</p><br>
                <p class="activity-body2"> 2. Some Text goes here</p><br>
            </div>
        </div>
        <div class="price-stat-graph">
            <a href="visa_detail.php" class="stat-summary"><p>Price & Location</p></a>
        </div>
        <div class="price-graph-box">
            <div class="price">
                <div class="title-controller">
                <p class="price-title">Price</p>
                <input type="text" name="" class="price-input" value="20,000 KRW">
                </div>
                <div class="title-controller">
                <p class="price-title">Office Name</p>
                <input type="text" name="" class="price-input" value="20,000 KRW">
                </div>
                <div class="bottom-content">
                    <p class="bottom-title">Office Address</p>
                    <input type="text" class="bottom-input" name="" placeholder=" Add Address">
                </div>
            </div>
        </div>
        <div class="action-btn">
            <input type="button" class="action-update-btn" name="" value="Update">
            <input type="button" class="action-delete-btn" name="" value="Delete">
            <input type="button" class="action-cancel-btn" name="" value="Subscription Permit">
    </div>
    </div>    
</form>
    
    
    <!--**************** FOOTER SECTON **************************-->
    <footer>
    <div class="visa-footer-bar">
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
    </footer>
</html>