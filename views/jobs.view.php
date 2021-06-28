<!DOCTYPE html>
<html style="font-size: 16px;">

<head>
  <meta charset="utf-8">
  <title>Jobs</title>
  <link rel="stylesheet" href="../views/css/nicepage_users.css" media="screen">
  <link rel="stylesheet" href="../views/css/users.css" media="screen">
  <script class="u-script" type="text/javascript" src="../views/js/jquery_users.js" defer=""></script>
  <script class="u-script" type="text/javascript" src="../views/js/nicepage_users.js" defer=""></script>
  <script class="u-script" type="text/javascript" src="../views/js/nicepage_home.js" defer=""></script>
  <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
  <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
</head>

<body class="u-body">
  <?php include($header); ?>
  <section class="u-align-center u-clearfix u-custom-color-2 u-section-1" id="sec-d44b">
    <div class="u-clearfix u-sheet u-sheet-1">
      <div class="u-expanded-width u-table u-table-responsive u-table-1">
        <table class="u-table-entity u-table-entity-1">
          <colgroup>
            <col width="25%">
            <col width="25%">
            <col width="25%">
            <col width="25%">
          </colgroup>
          <tbody class="u-align-center u-table-alt-custom-color-1 u-table-body">
            <tr style="height: 50px;">
              <td class="u-table-cell">Job ID</td>
              <td class="u-table-cell">Income</td>
              <td class="u-table-cell">Distance</td>
              <td class="u-table-cell">Cargo</td>
            </tr>

            <?php while ($job = $all_user_jobs->fetch_assoc()) : ?>
              <tr style="height: 50px;">
              <td class="u-table-cell"><a href="../public/jobs.php?id=<?php echo $job["id"] ?>"><?php echo $job["id"] ?></a></td>
              <td class="u-table-cell"><?php echo $job["income"] ?> €</td>
              <td class="u-table-cell"><?php echo $job["distance"] ?> km</td>
              <td class="u-table-cell"><?php echo $job["cargo"] ?></td>
            </tr>
            <?php endwhile; ?>

          </tbody>
        </table>
      </div>
    </div>
  </section>
  <?php include($footer); ?>
</body>

</html>