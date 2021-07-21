<!DOCTYPE html>
<html style="font-size: 16px;">

<head>
  <meta charset="utf-8">
  <title><?php echo $name; ?> | Home</title>
  <link rel="stylesheet" href="../views/css/nicepage_index.css" media="screen">
  <link rel="stylesheet" href="../views/css/index.css" media="screen">
  <script class="u-script" type="text/javascript" src="../views/js/jquery_index.js" defer=""></script>
  <script class="u-script" type="text/javascript" src="../views/js/nicepage_index.js" defer=""></script>
</head>

<body class="u-body">
  <?php include($header); ?>
  <section class="skrollable u-clearfix u-image u-section-1" id="sec-0629" data-image-width="1920" data-image-height="1080">
    <div class="u-clearfix u-sheet u-sheet-1">
      <div class="u-align-center u-container-style u-custom-color-2 u-group u-radius-10 u-shape-round u-group-1">
        <div class="u-container-layout u-container-layout-1">
          <h3 class="u-custom-font u-font-raleway u-text u-text-1"><?php echo $get_news['title'] ?></h3>
          <div class="u-border-2 u-border-custom-color-3 u-line u-line-horizontal u-line-1" data-animation-name="lightSpeedIn" data-animation-duration="1000" data-animation-delay="0" data-animation-direction=""></div>
          <h5 class="u-custom-font u-font-raleway u-text u-text-2"><?php echo $get_news['body'] ?></h5>
          <h6 style="padding-bottom: 20px; text-align: center; color: lightgrey;" class="u-align-left u-custom-font u-font-raleway u-text u-text-3">by <a href="../public/profile.php?id=<?php echo $get_news['user_id'] ?>" style="color: <?php echo $get_news['color'] ?>;"> <?php echo $get_news['username'] ?></a></h6>
        </div>
      </div>
      <a style="width: 200px;" href="<?php echo $second_button_link ?>" class="u-btn u-btn-round u-button-style u-custom-color-1 u-custom-font u-font-raleway u-hover-custom-color-2 u-radius-6 u-btn-1" data-animation-name="slideIn" data-animation-duration="1000" data-animation-delay="0" data-animation-direction="Down"><?php echo $second_button_name; ?></a>
      <a style="width: 200px;" href="<?php echo $third_button_link ?>" class="u-btn u-btn-round u-button-style u-custom-color-1 u-custom-font u-font-raleway u-hover-custom-color-2 u-radius-6 u-btn-2" data-animation-name="slideIn" data-animation-duration="1000" data-animation-delay="0" data-animation-direction="Down"><?php echo $third_button_name; ?></a>
      <a style="width: 200px;" href="<?php echo $first_button_link ?>" class="u-btn u-btn-round u-button-style u-custom-color-1 u-custom-font u-font-raleway u-hover-custom-color-2 u-radius-6 u-btn-3" data-animation-name="slideIn" data-animation-duration="1000" data-animation-delay="0" data-animation-direction="Down"><?php echo $first_button_name; ?><br>
      </a>
    </div>
  </section>
  <section class="u-align-center u-clearfix u-gradient u-section-2" id="sec-33d2">
    <div class="u-clearfix u-sheet u-sheet-1">
      <div class="u-expanded-width u-list u-list-1">
        <div class="u-repeater u-repeater-1">
          <div class="u-align-center u-container-style u-list-item u-repeater-item">
            <div class="u-container-layout u-similar-container u-valign-top u-container-layout-1"><span class="u-icon u-icon-circle u-text-white u-icon-1" data-animation-name="slideIn" data-animation-duration="1000" data-animation-delay="0" data-animation-direction="Down"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 128 128">
                  <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-8998"></use>
                </svg><svg class="u-svg-content" viewBox="0 0 128 128" id="svg-8998">
                  <path d="m118.6 47.8h-61.2c-5.2 0-9.4 4.2-9.4 9.3v35.7c0 5.1 4.2 9.3 9.4 9.3h37.5l16.8 16.8c2.5 2.5 6.8 0.7 6.8-2.8v-10-3.9h0.1c5.2 0 9.4-4.2 9.4-9.3v-35.8c0-5.1-4.2-9.3-9.4-9.3zm1.2 45c0 0.7-0.5 1.2-1.2 1.2h-5.2c-1.6 0-2.9 1.2-3.1 2.8v9.2l-11.2-11.2c-0.5-0.5-1.3-0.8-2-0.8h-39.7c-0.7 0-1.2-0.5-1.2-1.2v-35.7c0-0.7 0.5-1.2 1.2-1.2h61.3c0.7 0 1.2 0.5 1.2 1.2v35.7z"></path>
                  <path d="m38.1 67.7c-1 0-2 0.4-2.7 1-0.1 0-0.1 0.1-0.2 0.2l-14.7 15.1v-12.5c-0.2-2.1-1.9-3.8-4-3.8h-6.9c-0.9 0-1.6-0.7-1.6-1.6v-48.3c0-0.9 0.7-1.6 1.6-1.6h80.8c0.9 0 1.6 0.7 1.6 1.6v30.1h8v-30.1c0-5.4-4.3-9.8-9.6-9.8h-80.8c-5.3 0-9.6 4.4-9.6 9.8v48.3c0 5.4 4.3 9.8 9.6 9.8h2.9v8.1 10c0 3.6 4.4 5.3 6.9 2.8l6.8-7 13.6-13.9h8.2v-8.2h-9.9z"></path>
                </svg></span>
              <h3 class="u-text u-text-body-alt-color u-text-1"><?php echo $firsttitle ?></h3>
              <p class="u-text u-text-body-alt-color u-text-2"><?php echo $firstbody ?>
              </p>
            </div>
          </div>
          <div class="u-align-center u-container-style u-list-item u-repeater-item">
            <div class="u-container-layout u-similar-container u-valign-top u-container-layout-2"><span class="u-icon u-icon-circle u-text-white u-icon-2" data-animation-name="slideIn" data-animation-duration="1000" data-animation-delay="0" data-animation-direction="Down"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 -12 480 480">
                  <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-ca30"></use>
                </svg><svg class="u-svg-content" viewBox="0 -12 480 480" id="svg-ca30">
                  <path d="m56 232c-4.417969 0-8 3.582031-8 8v128c0 4.417969 3.582031 8 8 8s8-3.582031 8-8v-128c0-4.417969-3.582031-8-8-8zm0 0"></path>
                  <path d="m115.519531 168c4.417969 0 8-3.582031 8-8 .003907-.875-.160156-1.746094-.480469-2.558594-.953124-3.085937-3.664062-5.292968-6.878906-5.601562-19.410156-1.816406-34.683594-17.359375-36.160156-36.800782.042969-.289062.042969-.585937 0-.878906v-.878906c-.039062-.425781-.039062-.855469 0-1.28125v-40h32.800781c4.417969 0 8-3.582031 8-8s-3.582031-8-8-8h-40.800781c-4.417969 0-8 3.582031-8 8v35.679688c-10.15625-9.082032-15.972656-22.054688-16-35.679688v-48h96c15.691406.007812 30.390625 7.683594 39.359375 20.558594 2.609375 3.367187 7.394531 4.097656 10.890625 1.667968 3.496094-2.429687 4.476562-7.167968 2.230469-10.785156-11.957031-17.179687-31.554688-27.425781-52.480469-27.441406h-96c-8.835938 0-16 7.164062-16 16v48c-.109375 23.167969 12.316406 44.589844 32.480469 56 1.691406 12.128906 7.3125 23.371094 16 32h-24.480469c-30.929688 0-56 25.070312-56 56v160c0 4.417969 3.582031 8 8 8s8-3.582031 8-8v-160c0-22.089844 17.910156-40 40-40zm0 0"></path>
                  <path d="m112 222.078125-5.761719-22.078125h26.082031c4.417969 0 8-3.582031 8-8s-3.582031-8-8-8h-36.320312c-2.460938-.011719-4.792969 1.109375-6.320312 3.039062-1.515626 1.949219-2.046876 4.488282-1.441407 6.882813l8 32c1.0625 4.351563 5.449219 7.019531 9.800781 5.957031 4.351563-1.058594 7.019532-5.445312 5.960938-9.800781zm0 0"></path>
                  <path d="m424 232c-4.417969 0-8 3.582031-8 8v128c0 4.417969 3.582031 8 8 8s8-3.582031 8-8v-128c0-4.417969-3.582031-8-8-8zm0 0"></path>
                  <path d="m448 157.441406v-77.441406c0-44.183594-35.816406-80-80-80h-16c-23.585938.0429688-45.953125 10.496094-61.121094 28.558594-2.082031 2.15625-2.785156 5.292968-1.824218 8.128906.960937 2.835938 3.425781 4.898438 6.386718 5.34375 2.964844.445312 5.925782-.800781 7.679688-3.230469 12.136718-14.429687 30.023437-22.773437 48.878906-22.800781h16c35.347656 0 64 28.652344 64 64v72.558594c-1.8125 0-3.652344-.160156-5.519531-.480469h-27.199219c10.738281-10.566406 16.761719-25.011719 16.71875-40.078125v-48c0-4.417969-3.582031-8-8-8h-60.160156c-4.417969 0-8 3.582031-8 8s3.582031 8 8 8h52.160156v40c.09375 20.675781-15.582031 38.015625-36.160156 40-3.214844.308594-5.925782 2.515625-6.878906 5.601562-.320313.8125-.484376 1.683594-.480469 2.558594 0 4.417969 3.582031 8 8 8h21.917969l-30.398438 54.640625c-2.144531 3.863281-.746094 8.738281 3.121094 10.878907 1.195312.679687 2.542968 1.035156 3.917968 1.039062 2.886719-.003906 5.546876-1.5625 6.960938-4.078125l34.71875-62.640625h21.042969c3.957031.15625 7.867187.910156 11.597656 2.238281h.640625c15.734375 5.878907 26.121094 20.964844 26 37.761719v160c0 4.417969 3.582031 8 8 8s8-3.582031 8-8v-160c-.015625-21.617188-12.46875-41.296875-32-50.558594zm0 0"></path>
                  <path d="m312 232h-26.800781c12.46875-10.0625 21.226562-24 24.878906-39.601562 20.847656-11.097657 33.886719-32.78125 33.921875-56.398438v-16c0-35.347656-28.652344-64-64-64h-128c-8.835938 0-16 7.164062-16 16v64c.035156 23.617188 13.074219 45.300781 33.921875 56.398438 3.652344 15.601562 12.410156 29.539062 24.878906 39.601562h-26.800781c-30.929688 0-56 25.070312-56 56v160c0 4.417969 3.582031 8 8 8s8-3.582031 8-8v-160c0-22.089844 17.910156-40 40-40h144c22.089844 0 40 17.910156 40 40v160c0 4.417969 3.582031 8 8 8s8-3.582031 8-8v-160c0-30.929688-25.070312-56-56-56zm-160-96v-64h128c26.507812 0 48 21.492188 48 48v16c-.027344 13.625-5.84375 26.597656-16 35.679688v-59.679688c0-4.417969-3.582031-8-8-8h-128c-4.417969 0-8 3.582031-8 8v59.679688c-10.15625-9.082032-15.972656-22.054688-16-35.679688zm32.960938 50.558594c.042968-.289063.042968-.585938 0-.878906-.5-2.804688-.820313-5.636719-.960938-8.480469v-57.199219h112v57.199219c-.117188 2.84375-.410156 5.675781-.878906 8.480469-.046875.292968-.046875.589843 0 .878906-4.96875 26.484375-28.09375 45.675781-55.042969 45.675781-26.945313 0-50.070313-19.191406-55.039063-45.675781zm0 0"></path>
                  <path d="m265.921875 264c-4.285156-1.058594-8.617187 1.554688-9.683594 5.839844l-6.476562 26.160156h-19.523438l-6.238281-25.921875c-.59375-2.871094-2.710938-5.1875-5.515625-6.035156-2.808594-.851563-5.851563-.097657-7.941406 1.964843-2.085938 2.058594-2.875 5.09375-2.0625 7.914063l8 30.71875-8.480469 89.679687c-.21875 2.546876.792969 5.042969 2.71875 6.71875l24 20.960938c3.019531 2.652344 7.542969 2.652344 10.5625 0l24-20.960938c1.925781-1.675781 2.9375-4.171874 2.71875-6.71875l-8-89.679687 8-30.71875c.574219-2.128906.25-4.394531-.902344-6.273437-1.148437-1.875-3.023437-3.195313-5.175781-3.648438zm-25.921875 141.359375-16-13.359375 7.039062-80h17.28125l7.679688 80zm0 0"></path>
                  <path d="m168 312c-4.417969 0-8 3.582031-8 8v128c0 4.417969 3.582031 8 8 8s8-3.582031 8-8v-128c0-4.417969-3.582031-8-8-8zm0 0"></path>
                  <path d="m312 312c-4.417969 0-8 3.582031-8 8v128c0 4.417969 3.582031 8 8 8s8-3.582031 8-8v-128c0-4.417969-3.582031-8-8-8zm0 0"></path>
                </svg></span>
              <h3 class="u-text u-text-body-alt-color u-text-3"><?php echo $secondtitle ?></h3>
              <p class="u-text u-text-body-alt-color u-text-4"><?php echo $secondbody ?><br>
              </p>
            </div>
          </div>
          <div class="u-align-center u-container-style u-list-item u-repeater-item">
            <div class="u-container-layout u-similar-container u-valign-top u-container-layout-3"><span class="u-icon u-icon-circle u-text-white u-icon-3" data-animation-name="slideIn" data-animation-duration="1000" data-animation-delay="0" data-animation-direction="Down"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 407.98 407.98">
                  <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-6522"></use>
                </svg><svg class="u-svg-content" viewBox="0 0 407.98 407.98" x="0px" y="0px" id="svg-6522" style="enable-background:new 0 0 407.98 407.98;">
                  <g>
                    <path d="M203.99,0C91.509,0,0,91.509,0,203.99s91.509,203.99,203.99,203.99c112.481,0,203.991-91.51,203.991-203.99   S316.471,0,203.99,0z M203.99,395.98C98.126,395.98,12,309.853,12,203.99S98.126,12,203.99,12   C309.854,12,395.98,98.126,395.98,203.99S309.854,395.98,203.99,395.98z"></path>
                    <path d="M255.663,203.99c0-28.492-23.181-51.673-51.673-51.673s-51.673,23.181-51.673,51.673c0,28.493,23.18,51.674,51.673,51.674   S255.663,232.483,255.663,203.99z M203.99,243.664c-21.875,0-39.673-17.798-39.673-39.674s17.797-39.673,39.673-39.673   s39.673,17.797,39.673,39.673S225.865,243.664,203.99,243.664z"></path>
                    <path d="M364.428,241.055c-0.003-0.001-0.011-0.003-0.012-0.003c-40.522-10.813-84.104,0.869-113.729,30.495   c-25.502,25.501-37.796,60.698-33.73,96.568c0,0.001,0.001,0.002,0.001,0.003c0,0.002,0,0.003,0,0.005   c0.351,3.061,2.945,5.317,5.953,5.317c0.229,0,0.46-0.014,0.691-0.04c34.175-3.92,66.017-17.946,92.083-40.563   c25.825-22.407,44.145-51.603,52.978-84.431C369.524,245.208,367.628,241.917,364.428,241.055z M307.821,323.774   c-22.665,19.665-50.024,32.339-79.457,36.878c-1.687-30.075,9.357-59.168,30.809-80.62c25.154-25.156,61.513-35.896,96.169-28.785   C346.596,279.331,330.259,304.306,307.821,323.774z"></path>
                    <path d="M43.562,241.052c-0.001,0-0.002,0.001-0.002,0.001c-0.003,0.001-0.006,0.001-0.009,0.002   c-3.2,0.861-5.096,4.153-4.235,7.353c8.833,32.828,27.153,62.023,52.978,84.431c26.066,22.616,57.908,36.643,92.082,40.563   c0.232,0.026,0.463,0.04,0.691,0.04c3.008,0,5.603-2.258,5.954-5.317c0-0.002,0-0.003,0-0.005c0-0.001,0.001-0.002,0.001-0.003   c4.066-35.869-8.228-71.067-33.729-96.568C127.666,241.921,84.088,230.236,43.562,241.052z M179.614,360.652   c-29.433-4.538-56.792-17.213-79.456-36.878c-22.438-19.468-38.776-44.443-47.521-72.527c34.654-7.111,71.014,3.63,96.17,28.785   C170.258,301.483,181.302,330.578,179.614,360.652z"></path>
                    <path d="M323.745,82.602c-32.111-31.684-74.642-49.133-119.756-49.133S116.345,50.918,84.232,82.602   c-32.08,31.652-50.101,73.879-50.743,118.901c-0.036,2.548,1.54,4.84,3.931,5.718c0.676,0.249,1.375,0.368,2.067,0.368   c1.757,0,3.468-0.772,4.63-2.183c35.761-43.36,95.526-69.247,159.871-69.247c64.345,0,124.109,25.887,159.871,69.247   c1.621,1.966,4.306,2.691,6.697,1.814c2.392-0.878,3.968-3.17,3.931-5.718C373.847,156.481,355.825,114.254,323.745,82.602z    M203.989,124.16c-61.308,0-118.816,22.444-157.385,60.743c4.237-35.489,20.255-68.301,46.057-93.759   c29.852-29.454,69.389-45.675,111.329-45.675s81.477,16.221,111.328,45.675c25.802,25.458,41.82,58.27,46.058,93.759   C322.805,146.604,265.297,124.16,203.989,124.16z"></path>
                  </g>
                </svg></span>
              <h3 class="u-text u-text-body-alt-color u-text-5"><?php echo $thirdtitle ?></h3>
              <p class="u-text u-text-body-alt-color u-text-6"><?php echo $thirdbody ?>
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="u-border-1 u-border-custom-color-3 u-expanded-width u-line u-line-horizontal u-line-1"></div>
    </div>
  </section>
  <section class="u-clearfix u-custom-color-2 u-section-3" id="sec-da12">
    <div class="u-clearfix u-sheet u-sheet-1">
      <div class="u-clearfix u-expanded-width u-gutter-0 u-layout-wrap u-layout-wrap-1">
        <div class="u-layout">
          <div class="u-layout-row">
            <div class="u-align-center u-container-style u-layout-cell u-left-cell u-size-23 u-layout-cell-1">
              <div class="u-container-layout u-valign-middle u-container-layout-1">
                <div alt="" class="u-image u-image-circle u-image-1" src="" data-image-width="800" data-image-height="800" data-animation-name="rollIn" data-animation-duration="1000" data-animation-delay="0" data-animation-direction=""></div>
              </div>
            </div>
            <div class="u-align-left u-container-style u-layout-cell u-right-cell u-size-37 u-layout-cell-2">
              <div class="u-container-layout u-container-layout-2">
                <h2 class="u-text u-text-1"><?php echo $blocktitle ?></h2>
                <p class="u-text u-text-2"><?php echo $blockbody ?>
                </p>
                <a href="<?php echo $block_button_link ?>" class="u-btn u-btn-round u-button-style u-custom-color-1 u-hover-custom-color-2 u-radius-10 u-btn-1"><?php echo $block_button_name ?></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php include($footer); ?>
</body>

</html>