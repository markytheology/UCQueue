<?php

//<?php
/*session_start();
if(isset($_SESSION['user_id']) && $_SESSION['user_id'] > 0){
    header("Location:./");
    exit;
}*/
session_start();
$url = $_SERVER['REQUEST_URI'];

preg_match("/department=(\w+)&window=(\d+)/", $url, $matches);

$officess = $matches[1];
$windowss = $matches[2];

// echo $officess; 
// echo $windowss;
$_SESSION['officesss'] = $officess;
$_SESSION['windowsss'] = $windowss;
?>

<?php

  

?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <script src="../js/jquery-3.6.0.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/script.js"></script>

    <link rel="stylesheet" href="../css/desktop-1.css" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;800&display=swap"
    />
  </head>
  <body>
    <div class="session">
      <div class="left">
        <?xml version="1.0" encoding="UTF-8"?>
            <img class="img" src="../image/uc-logo-bg-160x83.c24343b851e5b064daf9.png" alt="logo">
      </div>
      <form action="authenticate.php" method="post" class="Login" autocomplete="off">
        
        <h4>UNIVERSITY OF CEBU</h4>
        <h4>Queuing System</h4>
        <p>Welcome back! Log in to your account to view today's clients:</p>
        <div class="floating-label">
          <input placeholder="username" type="text" name="username" id="username" autocomplete="off">
          <label for="username">Username:</label>
          <div class="icon">
            <?xml version="1.0" encoding="UTF-8"?>
            <svg enable-background="new 0 0 100 100" version="1.1" viewBox="0 0 100 100" xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
              <style type="text/css">
                .st0 {
                  fill: none;
                }
              </style>
              <g transform="translate(0 -952.36)">
                <path d="m17.5 977c-1.3 0-2.4 1.1-2.4 2.4v45.9c0 1.3 1.1 2.4 2.4 2.4h64.9c1.3 0 2.4-1.1 2.4-2.4v-45.9c0-1.3-1.1-2.4-2.4-2.4h-64.9zm2.4 4.8h60.2v1.2l-30.1 22-30.1-22v-1.2zm0 7l28.7 21c0.8 0.6 2 0.6 2.8 0l28.7-21v34.1h-60.2v-34.1z" />
              </g>
              <rect class="st0" width="100" height="100" />
            </svg>
  
          </div>
        </div>
        <div class="floating-label">
          <input placeholder="Password" type="password" name="password" id="password" autocomplete="off">
          <label for="password">Password:</label>
          <div class="icon">
  
            <?xml version="1.0" encoding="UTF-8"?>
            <svg enable-background="new 0 0 24 24" version="1.1" viewBox="0 0 24 24" xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
              <style type="text/css">
                .st0 {
                  fill: none;
                }
  
                .st1 {
                  fill: #010101;
                }
              </style>
              <rect class="st0" width="24" height="24" />
              <path class="st1" d="M19,21H5V9h14V21z M6,20h12V10H6V20z" />
              <path class="st1" d="M16.5,10h-1V7c0-1.9-1.6-3.5-3.5-3.5S8.5,5.1,8.5,7v3h-1V7c0-2.5,2-4.5,4.5-4.5s4.5,2,4.5,4.5V10z" />
              <path class="st1" d="m12 16.5c-0.8 0-1.5-0.7-1.5-1.5s0.7-1.5 1.5-1.5 1.5 0.7 1.5 1.5-0.7 1.5-1.5 1.5zm0-2c-0.3 0-0.5 0.2-0.5 0.5s0.2 0.5 0.5 0.5 0.5-0.2 0.5-0.5-0.2-0.5-0.5-0.5z" />
            </svg>
          </div>
  
        </div>
        <div class="form-group d-flex w-100 justify-content-between align-items-center">
          <form action="authenticate.php" method="POST">  
            <button type="submit" onClick="">Log in</button>
          </form>
          
        </div>
      </form>
    </div>
  </body>
</html>