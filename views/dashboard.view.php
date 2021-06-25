<!DOCTYPE html>
<html style="font-size: 16px;">

<head>
  <meta charset="utf-8">
  <title><?php echo $name; ?> | Dashboard</title>
  <link rel="stylesheet" href="../views/css/nicepage_dashboard.css" media="screen">
  <link rel="stylesheet" href="../views/css/dashboard.css" media="screen">
  <script class="u-script" type="text/javascript" src="../views/js/jquery_dashboard.js" defer=""></script>
  <script class="u-script" type="text/javascript" src="../views/js/nicepage_dashboard.js" defer=""></script>
  <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
  <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
</head>

<body class="u-body">
  <?php include($header); ?>
  <section class="u-align-center u-clearfix u-custom-color-2 u-section-1" id="sec-58b6">
    <div class="u-align-left u-clearfix u-sheet u-sheet-1">
      <div class="u-container-style u-custom-color-1 u-group u-radius-10 u-shape-round u-group-1">
        <div class="u-container-layout u-container-layout-1">
          <h5 class="u-custom-font u-font-raleway u-text u-text-1">Role:</h5>
          <h5 class="u-align-right u-custom-font u-font-raleway u-text u-text-2"><span style="color: <?php echo $user_information['role_color'] ?>;"><?php echo $user_information["role"] ?></span></h5>
          <div class="u-border-1 u-border-custom-color-2 u-expanded-width u-line u-line-horizontal u-line-1"></div>
          <h5 class="u-align-right u-custom-font u-font-raleway u-text u-text-3"><?php echo $user_information["balance"] ?></h5>
          <h5 class="u-custom-font u-font-raleway u-text u-text-4">Balance:</h5>
          <div class="u-border-1 u-border-custom-color-2 u-expanded-width u-line u-line-horizontal u-line-2"></div>
          <h5 class="u-custom-font u-font-raleway u-text u-text-5">Level:</h5>
          <h5 class="u-align-right u-custom-font u-font-raleway u-text u-text-6"><?php echo $user_information["level"] ?></h5>
        </div>
      </div>
      <div class="u-container-style u-custom-color-1 u-group u-radius-10 u-shape-round u-group-2">
        <div class="u-container-layout u-container-layout-2">
          <h5 class="u-custom-font u-font-raleway u-text u-text-7">Jobs done:</h5>
          <h5 class="u-align-right u-custom-font u-font-raleway u-text u-text-8"><?php echo $count_user_jobs['total'] ?></h5>
          <div class="u-border-1 u-border-custom-color-2 u-expanded-width u-line u-line-horizontal u-line-3"></div>
          <h5 class="u-align-right u-custom-font u-font-raleway u-text u-text-9"><?php echo $user_jobs_driven_distance['total'] ?> km</h5>
          <h5 class="u-custom-font u-font-raleway u-text u-text-10">Driven Distance:</h5>
          <div class="u-border-1 u-border-custom-color-2 u-expanded-width u-line u-line-horizontal u-line-4"></div>
          <h5 class="u-custom-font u-font-raleway u-text u-text-11">Earned Money:</h5>
          <h5 class="u-align-right u-custom-font u-font-raleway u-text u-text-12"><?php echo $user_jobs_earned_money['total'] ?> €</h5>
        </div>
      </div>
    </div>
  </section>
  <section class="u-clearfix u-custom-color-2 u-section-2" id="sec-1465">
    <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
      <div class="u-border-1 u-border-custom-color-3 u-expanded-width u-line u-line-horizontal u-line-1"></div>
      <div class="u-clearfix u-expanded-width u-gutter-0 u-layout-wrap u-layout-wrap-1">
        <div class="u-layout">
          <div class="u-layout-row">
            <div class="u-align-center u-container-style u-layout-cell u-left-cell u-size-23 u-layout-cell-1">
              <div class="u-container-layout u-valign-middle u-container-layout-1">
                <div style="background-image: url(<?php echo $user_information['user_pb'] ?>);" alt="" class="u-border-1 u-border-white u-image u-image-circle u-image-1" src="" data-image-width="256" data-image-height="256"></div>
              </div>
            </div>
            <div class="u-align-left u-container-style u-layout-cell u-right-cell u-size-37 u-layout-cell-2">
              <div class="u-container-layout u-container-layout-2">
                <h2 class="u-custom-font u-font-raleway u-text u-text-1"><?php echo $username ?>'s Profile</h2>
                <p class="u-custom-font u-font-raleway u-text u-text-2"><?php echo $user_information['information'] ?>
                </p>
                <a href="" class="u-btn u-btn-round u-button-style u-custom-color-1 u-custom-font u-font-raleway u-radius-21 u-text-hover-palette-4-base u-btn-1">Edit Profile</a>
                <a href="" class="u-btn u-btn-round u-button-style u-custom-color-1 u-custom-font u-font-raleway u-radius-21 u-text-hover-palette-3-base u-btn-2">Jobs</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <footer class="u-align-center u-clearfix u-custom-color-1 u-footer u-footer" id="sec-d4d2">
    <div class="u-align-left u-clearfix u-sheet u-sheet-1">
      <h5 class="u-align-center u-text u-text-1">Copyright 2021 by Van Dijk VTC</h5>
    </div>
  </footer>
</body>

</html>