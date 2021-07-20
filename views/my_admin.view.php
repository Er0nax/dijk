<!DOCTYPE html>
<html style="font-size: 16px;">

<head>
  <meta charset="utf-8">
  <title><?php echo $name; ?> | Add News</title>
  <link rel="stylesheet" href="../views/css/nicepage_news.css" media="screen">
  <link rel="stylesheet" href="../views/css/news.css" media="screen">
  <script class="u-script" type="text/javascript" src="../views/js/jquery_news.js" defer=""></script>
  <script class="u-script" type="text/javascript" src="../views/js/nicepage_news.js" defer=""></script>
</head>

<body class="u-body">
  <?php include($header); ?>
  <section class="u-align-right u-clearfix u-custom-color-2 u-section-1" id="sec-108e">
    <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
      <div class="u-align-left u-container-style u-custom-color-1 u-expanded-width u-group u-radius-10 u-shape-round u-group-1">
        <div class="u-container-layout u-container-layout-1">
          <h5 class="u-align-center u-custom-font u-font-raleway u-text u-text-1">Styles</h5>
          <div class="u-border-1 u-border-custom-color-3 u-expanded-width u-line u-line-horizontal u-line-1"></div>
          <h5 class="u-align-left u-custom-font u-font-raleway u-text u-text-2">&lt;u&gt; Example &lt;/u&gt; <br>&lt;b&gt; Example &lt;/b&gt; <br>&lt;i&gt; Example &lt;/i&gt; <br>&lt;a href="https://discord.gg/vdr"&gt; Example &lt;/a&gt; <br>&lt;span style="color:red"&gt; Exmaple &lt;/span&gt;
          </h5>
          <h5 class="u-align-left u-custom-font u-font-raleway u-text u-text-3">
            <span style="text-decoration: underline !important;">Example</span>
            <span style="text-decoration: underline !important;">
              <span style="text-decoration: underline !important;">
                <span style="text-decoration: underline !important;"></span>
              </span>
            </span>
            <br>
            <span style="font-weight: 700;">Example</span>
            <br>
            <span style="font-style: italic;">Example</span>
            <br>
            <a href="https://discord.gg/vdr" class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-palette-1-base u-btn-1" target="_blank">Example</a>
            <br>
            <span class="u-text-palette-2-base">Example</span>
          </h5>
          <div class="u-border-3 u-border-custom-color-3 u-line u-line-vertical u-line-2"></div>
        </div>
      </div>
    </div>
  </section>
  <section class="u-align-center u-clearfix u-custom-color-2 u-section-2" id="sec-ccad">
    <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
      <div class="u-border-1 u-border-custom-color-1 u-expanded-width u-line u-line-horizontal u-line-1"></div>
      <div class="u-expanded-width u-form u-form-1">
        <form action="../app/classes/my_admin.php" method="POST" class="u-clearfix u-form-spacing-20 u-inner-form" style="padding: 10px" source="custom" name="form">
          <div class="u-form-group u-form-name">
            <label for="name-3b9a" class="u-custom-font u-font-raleway u-form-control-hidden u-label">Name</label>
            <input type="text" placeholder="News Title" id="name-3b9a" name="title" class="u-border-1 u-border-custom-color-3 u-border-no-left u-border-no-right u-border-no-top u-custom-font u-font-raleway u-input u-input-rectangle u-input-1" required="">
          </div>
          <br>
          <div class="u-form-group u-form-message">
            <label for="message-3b9a" class="u-custom-font u-font-raleway u-form-control-hidden u-label">Message</label>
            <textarea placeholder="News Body" rows="4" cols="50" id="message-3b9a" name="body" class="u-border-1 u-border-custom-color-3 u-border-no-left u-border-no-right u-border-no-top u-custom-font u-font-raleway u-input u-input-rectangle u-input-2" required=""></textarea>
          </div>
          <br>
          <div class="u-align-center u-form-group u-form-submit">
            <a href="#" class="u-border-2 u-border-grey-25 u-border-hover-white u-btn u-btn-round u-btn-submit u-button-style u-custom-font u-font-raleway u-hover-palette-4-base u-none u-radius-21 u-text-grey-25 u-text-hover-white u-btn-1">Submit</a>
            <input type="submit" value="submit" class="u-form-control-hidden">
          </div>
        </form>
      </div>
      <div class="u-container-style u-custom-color-1 u-group u-shape-rectangle u-group-1">
        <div class="u-container-layout u-container-layout-1">
          <h5 class="u-align-center u-custom-font u-font-raleway u-text u-text-1">Register Tokens:</h5>
        </div>
      </div>
    </div>
  </section>
  <?php include($footer); ?>
</body>

</html>