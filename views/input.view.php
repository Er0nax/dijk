<!DOCTYPE html>
<html style="font-size: 16px;">

<head>
  <meta charset="utf-8">
  <title>input</title>
  <link rel="stylesheet" href="../views/css/nicepage_input.css" media="screen">
  <link rel="stylesheet" href="../views/css/input.css" media="screen">
  <script class="u-script" type="text/javascript" src="../views/js/jquery_input.js" defer=""></script>
  <script class="u-script" type="text/javascript" src="../views/js/nicepage_input.js" defer=""></script>
  <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
  <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
</head>

<body class="u-body">
  <?php include($header); ?>
  <section class="u-align-center u-clearfix u-custom-color-3 u-section-1" id="sec-cbae">
    <div class="u-clearfix u-sheet u-sheet-1">
      <div class="u-form u-form-1">
        <form action="#" method="POST" class="u-clearfix u-form-spacing-20 u-form-vertical u-inner-form" style="padding: 10px" source="custom" name="form">
          <div class="u-form-group u-form-name">
            <label for="name-3b9a" class="u-form-control-hidden u-label">Name</label>
            <input type="text" placeholder="Username" id="name-3b9a" name="username" class="u-border-1 u-border-custom-color-4 u-border-no-left u-border-no-right u-border-no-top u-custom-font u-font-raleway u-input u-input-rectangle u-input-1" required="">
          </div>
          <div class="u-form-group">
            <label for="email-3b9a" class="u-form-control-hidden u-label">Email</label>
            <input type="text" placeholder="Password" id="email-3b9a" name="password" class="u-border-1 u-border-custom-color-4 u-border-no-left u-border-no-right u-border-no-top u-custom-font u-font-raleway u-input u-input-rectangle u-input-2" required="required">
          </div>
          <div class="u-form-group u-form-group-3">
            <label for="text-3f96" class="u-form-control-hidden u-label"></label>
            <input type="text" placeholder="TruckersMP ID" id="text-3f96" name="text" class="u-border-1 u-border-custom-color-4 u-border-no-left u-border-no-right u-border-no-top u-custom-font u-font-raleway u-input u-input-rectangle u-input-3">
          </div>
          <div class="u-form-group u-form-group-4">
            <label for="text-1134" class="u-form-control-hidden u-label"></label>
            <input type="text" placeholder="Discord Name" id="text-1134" name="text-1" class="u-border-1 u-border-custom-color-4 u-border-no-left u-border-no-right u-border-no-top u-custom-font u-font-raleway u-input u-input-rectangle u-input-4">
          </div>
          <div class="u-form-group u-form-select u-form-group-5">
            <label for="select-782c" class="u-form-control-hidden u-label"></label>
            <div class="u-form-select-wrapper">
              <select id="select-782c" name="language" class="u-border-1 u-border-custom-color-4 u-border-no-left u-border-no-right u-border-no-top u-custom-font u-font-raleway u-input u-input-rectangle u-input-5" required="required">
                <option value="English">English</option>
                <option value="German">German</option>
                <option value="French">French</option>
                <option value="Dutch">Dutch</option>
                <option value="Polish">Polish</option>
                <option value="Turkish">Turkish</option>
                <option value="Romanian">Romanian</option>
                <option value="Spanish">Spanish</option>
                <option value="Hungarian">Hungarian</option>
              </select>
              <svg xmlns="http://www.w3.org/2000/svg" width="14" height="12" version="1" class="u-caret">
                <path fill="currentColor" d="M4 8L0 4h8z"></path>
              </svg>
            </div>
          </div>
          <div class="u-align-center u-form-group u-form-submit">
            <a href="#" class="u-border-1 u-border-custom-color-4 u-border-hover-palette-4-base u-btn u-btn-round u-btn-submit u-button-style u-custom-font u-font-raleway u-none u-radius-20 u-text-white u-btn-1">Submit</a>
            <input type="submit" value="submit" class="u-form-control-hidden">
          </div>
          <div class="u-form-send-message u-form-send-success"> Thank you! Your message has been sent. </div>
          <div class="u-form-send-error u-form-send-message"> Unable to send your message. Please fix errors then try again. </div>
          <input type="hidden" value="" name="recaptchaResponse">
        </form>
      </div>
    </div>
  </section>
</body>

</html>