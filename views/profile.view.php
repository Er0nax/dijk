<!DOCTYPE html>
<html style="font-size: 16px;">

<head>
  <meta charset="utf-8">
  <title><?php echo $username?>'s Profile</title>
  <link rel="stylesheet" href="../views/css/nicepage_profile.css" media="screen">
  <link rel="stylesheet" href="../views/css/profile.css" media="screen">
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
                    <h2 class="u-custom-font u-font-raleway u-text u-text-1"><?php echo $get_profile_information['username'] ?>'s Profile</h2>
                    <p class="u-custom-font u-font-raleway u-text u-text-2"><?php echo $get_profile_information['information'] ?></p>
                    <div class="u-border-1 u-border-custom-color-3 u-expanded-width u-line u-line-horizontal u-line-1"></div>
                    <h5 class="u-custom-font u-font-raleway u-text u-text-3"><?php echo $get_profile_information['role_name'] ?></h5>
                    <h5 class="u-custom-font u-font-raleway u-text u-text-4">Role:</h5>
                    <h5 class="u-custom-font u-font-raleway u-text u-text-5">ID:</h5>
                    <h5 class="u-custom-font u-font-raleway u-text u-text-6"><?php echo $get_profile_information['id'] ?></h5>
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
          <h5 class="u-align-left u-custom-font u-font-raleway u-text u-text-24">Status:</h5>
          <h5 class="u-align-left u-custom-font u-font-raleway u-text u-text-25"><?php echo $get_profile_information['status'] ?></h5>
        </div>
      </div>
    </div>
  </section>
  <section class="u-align-center u-clearfix u-custom-color-2 u-section-3" id="sec-0eb7">
    <div class="u-clearfix u-sheet u-sheet-1">
      <div class="u-border-1 u-border-custom-color-4 u-line u-line-horizontal u-line-1"></div>
      <div class="u-form u-form-1">
        <form action="../app/classes/edit/edit_users.php?id=<?php echo $current_id ?>" method="POST" class="u-clearfix u-form-spacing-20 u-inner-form" style="padding: 10px" source="custom" name="form">
          <div class="u-form-group u-form-name">
            <label for="name-3b9a" class=" u-label">Role ID</label>
            <input type="text" value="<?php echo $get_profile_information['roleid'] ?>" id="name-3b9a" name="role_id" class="u-border-1 u-border-custom-color-1 u-border-no-left u-border-no-right u-border-no-top u-custom-font u-font-raleway u-input u-input-rectangle u-input-1" required="">
          </div>
          <br>
          <div class="u-form-group">
            <label for="email-3b9a" class=" u-label">Discord</label>
            <input type="text" value="<?php echo $get_profile_information['discord'] ?>" id="email-3b9a" name="discord" class="u-border-1 u-border-custom-color-1 u-border-no-left u-border-no-right u-border-no-top u-custom-font u-font-raleway u-input u-input-rectangle u-input-2" required="required">
          </div>
          <br>
          <div class="u-form-group u-form-group-3">
            <label for="text-c6fa" class=" u-label">Truckers MP</label>
            <input type="text" value="<?php echo $get_profile_information['truckersmp'] ?>" id="text-c6fa" name="truckersmp" class="u-border-1 u-border-custom-color-1 u-border-no-left u-border-no-right u-border-no-top u-custom-font u-font-raleway u-input u-input-rectangle u-input-3">
          </div>
          <br>
          <div class="u-form-group u-form-group-4">
            <label for="text-52bf" class=" u-label">Profile Picture</label>
            <input type="text" value="<?php echo $get_profile_information['user_pb'] ?>" id="text-52bf" name="user_pb" class="u-border-1 u-border-custom-color-1 u-border-no-left u-border-no-right u-border-no-top u-custom-font u-font-raleway u-input u-input-rectangle u-input-4">
          </div>
          <br>
          <div class="u-form-group u-form-group-5">
            <label for="text-1ddc" class=" u-label">Information</label>
            <input type="text" value="<?php echo $get_profile_information['information'] ?>" id="text-1ddc" name="information" class="u-border-1 u-border-custom-color-1 u-border-no-left u-border-no-right u-border-no-top u-custom-font u-font-raleway u-input u-input-rectangle u-input-5">
          </div>
          <br>
          <div class="u-align-center u-form-group u-form-submit">
            <a href="#" class="u-border-1 u-border-custom-color-2 u-border-hover-palette-4-base u-btn u-btn-round u-btn-submit u-button-style u-custom-color-3 u-custom-font u-font-raleway u-hover-custom-color-2 u-radius-20 u-text-hover-palette-4-base u-text-white u-btn-1">Edit<br>
            </a>
            <br>
            <input type="submit" value="submit" class="u-form-control-hidden">
          </div>
        </form>
      </div>
      <div class="u-form u-form-2">
        <form action="../app/classes/edit/edit_banks.php?id=<?php echo $current_id ?>" method="POST" class="u-clearfix u-form-spacing-20 u-inner-form" style="padding: 10px" source="custom" name="form">
          <div class="u-form-group u-form-name">
            <label for="name-3b9a" class=" u-label">Balance</label>
            <input type="text" value="<?php echo $get_profile_information['balance'] ?>" id="name-3b9a" name="balance" class="u-border-1 u-border-custom-color-1 u-border-no-left u-border-no-right u-border-no-top u-custom-font u-font-raleway u-input u-input-rectangle" required="">
          </div>
          <br>
          <div class="u-align-center u-form-group u-form-submit">
            <a href="#" class="u-border-1 u-border-custom-color-2 u-border-hover-palette-4-base u-btn u-btn-round u-btn-submit u-button-style u-custom-color-3 u-custom-font u-font-raleway u-hover-custom-color-2 u-radius-20 u-text-hover-palette-4-base u-text-white u-btn-2">Edit<br>
            </a>
            <input type="submit" value="submit" class="u-form-control-hidden">
          </div>
        </form>
      </div>
      <div class="u-form u-form-3">
        <form action="../app/classes/edit/edit_rewards.php?id=<?php echo $current_id ?>" method="POST" class="u-clearfix u-form-spacing-20 u-inner-form" style="padding: 10px" source="custom" name="form">
          <div class="u-form-group u-form-name">
            <label for="name-3b9a" class=" u-label">Level</label>
            <input type="text" value="<?php echo $get_profile_information['level'] ?>" id="name-3b9a" name="level" class="u-border-1 u-border-custom-color-1 u-border-no-left u-border-no-right u-border-no-top u-custom-font u-font-raleway u-input u-input-rectangle" required="">
          </div>
          <br>
          <div class="u-align-center u-form-group u-form-submit">
            <a href="#" class="u-border-1 u-border-custom-color-2 u-border-hover-palette-4-base u-btn u-btn-round u-btn-submit u-button-style u-custom-color-3 u-custom-font u-font-raleway u-hover-custom-color-2 u-radius-20 u-text-hover-palette-4-base u-text-white u-btn-3">Edit<br>
            </a>
            <input type="submit" value="submit" class="u-form-control-hidden">
          </div>
        </form>
      </div>
      <div class="u-container-style u-custom-color-3 u-group u-radius-10 u-shape-round u-group-1">
        <div class="u-container-layout u-container-layout-1">
          <a href="https://nicepage.com/k/exam-html-templates" class="u-btn u-btn-round u-button-style u-custom-font u-font-raleway u-hover-custom-color-3 u-palette-4-base u-radius-20 u-btn-4">verified</a>
          <a href="https://nicepage.com/k/exam-html-templates" class="u-btn u-btn-round u-button-style u-hover-custom-color-3 u-palette-2-base u-radius-50 u-btn-5">Unverified<br>
          </a>
        </div>
      </div>
    </div>
  </section>
  <?php include($footer); ?>
</body>

</html>