<!DOCTYPE html>
<html style="font-size: 16px;">

<head>
  <meta charset="utf-8">
  <title><?php echo $name; ?> | Add a job</title>
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
  <section class="u-align-center u-clearfix u-custom-color-2 u-section-1" id="sec-3ca6">
    <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
      <h1 class="u-text u-text-1">{title}</h1>
      <div class="u-form u-form-1">
        <form action="#" method="POST" class="u-clearfix u-form-spacing-20 u-form-vertical u-inner-form" style="padding: 10px" source="custom" name="form">
          <div class="u-form-group u-form-name">
            <label for="name-3b9a" class="u-form-control-hidden u-label"></label>
            <input type="text" placeholder="text" id="name-3b9a" name="text" class="u-border-1 u-border-custom-color-1 u-border-no-left u-border-no-right u-border-no-top u-custom-font u-font-raleway u-input u-input-rectangle u-input-1" required="">
          </div>
          <div class="u-form-group u-form-select u-form-group-2">
            <label for="select-ce55" class="u-form-control-hidden u-label"></label>
            <div class="u-form-select-wrapper">
              <select id="select-ce55" name="select" class="u-border-1 u-border-custom-color-1 u-border-no-left u-border-no-right u-border-no-top u-custom-font u-font-raleway u-input u-input-rectangle u-input-2">
                <option value="Item 1">Item 1</option>
                <option value="Item 2">Item 2</option>
                <option value="Item 3">Item 3</option>
              </select>
              <svg xmlns="http://www.w3.org/2000/svg" width="14" height="12" version="1" class="u-caret">
                <path fill="currentColor" d="M4 8L0 4h8z"></path>
              </svg>
            </div>
          </div>
          <div class="u-form-group u-form-message">
            <label for="message-3b9a" class="u-form-control-hidden u-label">Message</label>
            <textarea placeholder="message" rows="4" cols="50" id="message-3b9a" name="message" class="u-border-1 u-border-custom-color-1 u-border-no-left u-border-no-right u-border-no-top u-custom-font u-font-raleway u-input u-input-rectangle u-input-3" required=""></textarea>
          </div>
          <div class="u-align-center u-form-group u-form-submit">
            <a href="#" class="u-border-1 u-border-hover-custom-color-4 u-border-white u-btn u-btn-round u-btn-submit u-button-style u-hover-palette-4-base u-none u-radius-20 u-text-hover-custom-color-4 u-btn-1">Submit</a>
            <input type="submit" value="submit" class="u-form-control-hidden">
          </div>
          <div class="u-form-send-message u-form-send-success"> Thank you! Your message has been sent. </div>
          <div class="u-form-send-error u-form-send-message"> Unable to send your message. Please fix errors then try again. </div>
          <input type="hidden" value="" name="recaptchaResponse">
        </form>
      </div>
    </div>
  </section>
  <?php include($footer); ?>
</body>

</html>