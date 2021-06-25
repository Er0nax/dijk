<!DOCTYPE html>
<html style="font-size: 16px;">

<head>
  <meta charset="utf-8">
  <title><?php echo $name; ?> | Register</title>
  <link rel="stylesheet" href="../views/css/nicepage_add.css" media="screen">
  <link rel="stylesheet" href="../views/css/add.css" media="screen">
  <script class="u-script" type="text/javascript" src="../views/js/jquery_add.js" defer=""></script>
  <script class="u-script" type="text/javascript" src="../views/js/nicepage_add.js.js" defer=""></script>
  <script class="u-script" type="text/javascript" src="../views/js/nicepage_home.js" defer=""></script>
  <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
  <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
</head>

<body class="u-body">
  <?php include($header); ?>
  <section class="u-align-center u-clearfix u-custom-color-2 u-section-1" id="sec-58b6">
    <div class="u-clearfix u-sheet u-sheet-1">
      <h1 class="u-text u-text-1">Register</h1>
      <div class="u-form u-form-1">
        <form action="../app/login_register/register.php" method="POST" class="u-clearfix u-form-spacing-20 u-inner-form" style="padding: 10px" source="custom" name="form">
          <div class="u-form-group u-form-name">
            <label for="name-3b9a" class="u-form-control-hidden u-label">Name</label>
            <input type="text" placeholder="Username" id="name-3b9a" name="username" class="u-border-1 u-border-no-left u-border-no-right u-border-no-top u-border-palette-1-base u-custom-font u-font-raleway u-input u-input-rectangle u-input-1" required="">
          </div>
          <br>
          <div class="u-form-email u-form-group">
            <label for="email-3b9a" class="u-form-control-hidden u-label">Password</label>
            <input type="password" placeholder="Password" id="email-3b9a" name="password" class="u-border-1 u-border-no-left u-border-no-right u-border-no-top u-border-palette-1-base u-custom-font u-font-raleway u-input u-input-rectangle u-input-2" required="">
          </div>
          <br>
          <div class="u-form-group u-form-group-3">
            <label for="text-8b2a" class="u-form-control-hidden u-label">Discord</label>
            <input type="text" placeholder="Discord" id="text-8b2a" name="discord" class="u-border-1 u-border-no-left u-border-no-right u-border-no-top u-border-palette-1-base u-custom-font u-font-raleway u-input u-input-rectangle u-input-3">
          </div>
          <br>
          <div class="u-form-group u-form-group-4">
            <label for="text-9af8" class="u-form-control-hidden u-label">TruckersMP</label>
            <input type="text" placeholder="TruckersMP ID" id="text-9af8" name="truckersmp" class="u-border-1 u-border-no-left u-border-no-right u-border-no-top u-border-palette-1-base u-custom-font u-font-raleway u-input u-input-rectangle u-input-4">
          </div>
          <br>
          <div class="u-align-center u-form-group u-form-submit">
            <a href="#" class="u-border-1 u-border-hover-palette-4-base u-border-palette-1-base u-btn u-btn-round u-btn-submit u-button-style u-custom-font u-font-raleway u-none u-radius-20 u-text-hover-palette-4-base u-btn-1">Submit</a>
            <input type="submit" value="submit" class="u-form-control-hidden">
          </div>
        </form>
      </div>
    </div>
  </section>
  <?php include($footer); ?>
</body>

</html>