<!DOCTYPE html>
<html style="font-size: 16px;">

<head>
  <meta charset="utf-8">
  <title><?php echo $get_profile_information['username'] ?>'s Profile</title>
  <link rel="stylesheet" href="../views/css/nicepage_profile.css" media="screen">
  <link rel="stylesheet" href="../views/css/profile.css" media="screen">
  <link rel="stylesheet" href="../views/css/button.css" media="screen">
  <script class="u-script" type="text/javascript" src="../views/js/jquery_profile.js" defer=""></script>
  <script class="u-script" type="text/javascript" src="../views/js/nicepage_profile.js" defer=""></script>
  <script class="u-script" type="text/javascript" src="../views/js/nicepage_home.js" defer=""></script>
  <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
  <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
</head>

<body class="u-body">
  <?php include($header); ?>
  <section class="u-clearfix u-custom-color-2 u-section-1" id="sec-ad13">
    <div class="u-clearfix u-sheet u-sheet-1">
      <div class="u-clearfix u-expanded-width u-gutter-0 u-layout-wrap u-layout-wrap-1">
        <div class="u-layout">
          <div class="u-layout-row">
            <div class="u-align-center u-container-style u-layout-cell u-left-cell u-size-23 u-layout-cell-1">
              <div class="u-container-layout u-valign-middle u-container-layout-1">
                <div style="background-image: url(<?php echo $get_profile_information['user_pb'] ?>);" alt="" class="u-border-1 u-border-grey-5 u-image u-image-circle u-image-1" src="" data-image-width="256" data-image-height="256"></div>
              </div>
            </div>
            <div class="u-align-left u-container-style u-layout-cell u-right-cell u-size-37 u-layout-cell-2">
              <div class="u-container-layout u-container-layout-2">
                <div class="u-container-style u-custom-color-1 u-expanded-width u-group u-radius-10 u-shape-round u-group-1">
                  <div class="u-container-layout u-container-layout-3">
                    <h2 class="u-custom-font u-font-raleway u-text u-text-1"><?php echo $get_profile_information['username'] ?>'s Profile

                      <?php if ($_GET['id'] == $userid) {
                        echo '<button class="button_blue" style="vertical-align:middle" data-href="../public/edit.php"><span>Edit</span></button>';
                      } ?>

                      <?php if ($get_user_perms['perms'] > 70) { ?>
                        <button class="button_red" style="vertical-align:middle" data-href="../public/staff_edit.php?id=<?php echo $get_profile_information['id']; ?>"><span>Edit</span></button>
                      <?php
                      } ?>

                    </h2>
                    <p class="u-custom-font u-font-raleway u-text u-text-2"><span style="color: <?php echo $get_profile_information['status_color'] ?>;"><?php echo $get_profile_information['information'] ?></span></p>
                    <div class="u-border-1 u-border-custom-color-3 u-expanded-width u-line u-line-horizontal u-line-1"></div>
                    <h5 class="u-custom-font u-font-raleway u-text u-text-3"><span style="color: <?php echo $get_profile_information['role_color'] ?>;"><?php echo $get_profile_information['role_name'] ?></span></h5>
                    <h5 class="u-custom-font u-font-raleway u-text u-text-4">Role:</h5>
                    <h5 class="u-custom-font u-font-raleway u-text u-text-5">Account:</h5>
                    <h5 class="u-custom-font u-font-raleway u-text u-text-6"><?php echo $get_profile_information['status'] ?></h5>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="u-border-1 u-border-custom-color-4 u-line u-line-horizontal u-line-2"></div>
    </div>
  </section>
  <section class="u-clearfix u-custom-color-2 u-section-2" id="sec-5cbf">
    <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
      <div class="u-container-style u-custom-color-1 u-group u-radius-10 u-shape-round u-group-1">
        <div class="u-container-layout u-container-layout-1">
          <h5 class="u-align-center u-custom-font u-font-raleway u-text u-text-1">Job Statistics</h5>
          <div class="u-border-1 u-border-custom-color-3 u-line u-line-horizontal u-line-1"></div>
          <h5 class="u-align-left u-custom-font u-font-raleway u-text u-text-2">Jobs:</h5>
          <h5 class="u-align-left u-custom-font u-font-raleway u-text u-text-3">{total_jobs}</h5>
          <h5 class="u-align-left u-custom-font u-font-raleway u-text u-text-4">Income:</h5>
          <h5 class="u-align-left u-custom-font u-font-raleway u-text u-text-5">{total_income}</h5>
          <h5 class="u-align-left u-custom-font u-font-raleway u-text u-text-6">Distance:</h5>
          <h5 class="u-align-left u-custom-font u-font-raleway u-text u-text-7">{total_distance}</h5>
          <div class="u-border-1 u-border-custom-color-3 u-line u-line-horizontal u-line-2"></div>
          <h5 class="u-align-center u-custom-font u-font-raleway u-text u-text-8">Average</h5>
          <div class="u-border-1 u-border-custom-color-3 u-line u-line-horizontal u-line-3"></div>
          <h5 class="u-align-left u-custom-font u-font-raleway u-text u-text-9">{average_distance}</h5>
          <h5 class="u-align-left u-custom-font u-font-raleway u-text u-text-10">Distance:</h5>
          <h5 class="u-align-left u-custom-font u-font-raleway u-text u-text-11">Income:</h5>
          <h5 class="u-align-left u-custom-font u-font-raleway u-text u-text-12">{average_distance}</h5>
        </div>
      </div>
      <div class="u-container-style u-custom-color-1 u-group u-radius-10 u-shape-round u-group-2">
        <div class="u-container-layout u-container-layout-2">
          <h5 class="u-align-center u-custom-font u-font-raleway u-text u-text-13">User Statistics</h5>
          <div class="u-border-1 u-border-custom-color-3 u-line u-line-horizontal u-line-4"></div>
          <h5 class="u-align-left u-custom-font u-font-raleway u-text u-text-14">Balance:</h5>
          <h5 class="u-align-left u-custom-font u-font-raleway u-text u-text-15"><?php echo $get_profile_information['balance'] ?> €</h5>
          <h5 class="u-align-left u-custom-font u-font-raleway u-text u-text-16">Level:</h5>
          <h5 class="u-align-left u-custom-font u-font-raleway u-text u-text-17"><?php echo $get_profile_information['level'] ?></h5>
          <h5 class="u-align-left u-custom-font u-font-raleway u-text u-text-18">Joined:</h5>
          <h5 class="u-align-left u-custom-font u-font-raleway u-text u-text-19"><?php echo $get_profile_information['timestamp'] ?></h5>
          <div class="u-border-1 u-border-custom-color-3 u-line u-line-horizontal u-line-5"></div>
          <h5 class="u-align-left u-custom-font u-font-raleway u-text u-text-20"><?php echo $get_profile_information['discord'] ?></h5>
          <h5 class="u-align-left u-custom-font u-font-raleway u-text u-text-21">Discord:</h5>
          <h5 class="u-align-left u-custom-font u-font-raleway u-text u-text-22">Truckers MP:</h5>
          <h5 class="u-align-left u-custom-font u-font-raleway u-text u-text-23"><?php echo $get_profile_information['truckersmp'] ?></h5>
          <h5 class="u-align-left u-custom-font u-font-raleway u-text u-text-24">Level Progress:</h5>
          <h5 class="u-align-left u-custom-font u-font-raleway u-text u-text-25"><progress id="file" value="<?php echo $get_profile_information['level'] ?>" max="10"> </progress>
          </h5>
        </div>
      </div>
    </div>
  </section>
  <?php include($footer); ?>
</body>

</html>