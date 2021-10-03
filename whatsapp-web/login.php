<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
    <meta name="description" content="Free Web tutorials">
      <meta name="keywords" content="HTML, CSS, JavaScript">
      <meta name="author" content="prem">
    <!-- <meta http-equiv="refresh" content="30"> -->
    
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>whatsApp - web</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/loginstyle.css">
        <link rel="stylesheet" href="../fontawesome-free-5.14.0-web/css/all.css">
        <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
        
        <link rel="shortcut icon" href="image/1523999-middle.png" />
    
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    </head>
<body>
    <?php
    
    if(isset($_SESSION['success_info']))
    {
        echo $_SESSION['success_info'];
    }
    
    ?>
    <div class="logo"><img src="image/1523999-middle.png" alt=""><span>whatsApp</span></div>
    
    <div class="container-fluid">
        <div class="center_container">
            <div class="row">
                <div class="col-sm-12 col-md-9 col-xl-9">
                    <h1 class="my-3">To use whatsApp on your computer :</h1>
                    <p>1. Please enter correct details</p>
                    <p>2. After filling all section</p>
                    <p>3. Click on login</p>
                </div>
                <div class="col-sm-12 col-md-3 col-xl-3">
                    <form action="validation.php" method="POST">
                        
                        <div class="form-group">
                            <label for="mobile_No">Mobile Number :</label>
                            <input type="text" name="sender_number" placeholder="Enter 10 digit mobile no." class="form-control" id="mobile_No" autocomplete="off">
                        </div>
                        <div class="form-group">
                            <label for="Your_name">Your Name :</label>
                            <input type="text" name="name" placeholder="minimum 6 letter name" class="form-control" id="Your_name" autocomplete="off">
                        </div>
                        <div class="form-group">
                            <input type="submit" value="log in / Register" class="btn btn-success">
                        </div>
                        
                    
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="col about_website">
                    <h3 class="my-3">About website : </h3>
                <p>1.This website is only for practice purpose</p>
                <p>2. all pages are design mannually and very few code of bootstrap is used</p>
                <p>3. Full website is on based on PHP , Ajax , Jquery , HTML and CSS</p>
                <h3 class="about_developer" >About Developer : </h3>
                <p>1. currently pursuing B.Tech from Nalanda College of Engineering,Chandi in </p>
                <p>2. Computer Science and Engineering</p>
                </div>
                
            </div>
            <div class="row">
                <div class="col">
                    <p class="float-right"> <span class="thank_you">Thank you</span> <br> <span class="developer_name">PREM PRAKASH GUPTA</span></p>
                </div>
            </div>
        </div>
    </div>
</body>
<?php  if(isset($_SESSION['success_info']))
    {
        echo $_SESSION['success_info']="";
    } ?>
</html>