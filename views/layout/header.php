<?php
include_once("../app/classes/config.php");


if (isset($_SESSION["name"])) {
  // $dashboard = get_dashboard($con, $username);
}

?>

<header class="u-clearfix u-custom-color-1 u-header u-header" id="sec-7588">
    <div class="u-clearfix u-sheet u-sheet-1">
        <nav class="u-menu u-menu-dropdown u-offcanvas u-menu-1" data-responsive-from="XS">
            <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px;">
                <a class="u-button-style u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-text-active-color u-custom-text-hover-color u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#">
                    <svg>
                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu-hamburger"></use>
                    </svg>
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <defs>
                            <symbol id="menu-hamburger" viewBox="0 0 16 16" style="width: 16px; height: 16px;">
                                <rect y="1" width="16" height="2"></rect>
                                <rect y="7" width="16" height="2"></rect>
                                <rect y="13" width="16" height="2"></rect>
                            </symbol>
                        </defs>
                    </svg>
                </a>
            </div>

            <?php if (!isset($_SESSION['loggedin'])) { ?>

                <div class="u-custom-menu u-nav-container">
                    <ul class="u-custom-font u-nav u-text-font u-unstyled u-nav-1">
                        <li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-white u-text-hover-palette-1-base" href="../public/index.php" style="padding: 10px 20px;">Home</a>
                            <div class="u-nav-popup">
                                <ul class="u-h-spacing-20 u-nav u-unstyled u-v-spacing-10 u-nav-2">
                                    <li class="u-nav-item"><a class="u-button-style u-custom-color-2 u-nav-link" href="../public/login.php">Login</a>
                                    </li>
                                    <li class="u-nav-item"><a class="u-button-style u-custom-color-2 u-nav-link" href="../public/register.php">Register</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="u-custom-menu u-nav-container-collapse">
                    <div class="u-container-style u-custom-color-1 u-inner-container-layout u-sidenav">
                        <div class="u-sidenav-overflow">
                            <div class="u-menu-close"></div>
                            <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-3">
                                <li class="u-nav-item"><a class="u-button-style u-nav-link" href="../public/index.php" style="padding: 10px 20px;">Home</a>
                                    <div class="u-nav-popup">
                                        <ul class="u-h-spacing-20 u-nav u-unstyled u-v-spacing-10 u-nav-4">
                                            <li class="u-nav-item"><a class="u-button-style u-custom-color-2 u-nav-link" href="../public/login.php">Login</a>
                                            </li>
                                            <li class="u-nav-item"><a class="u-button-style u-custom-color-2 u-nav-link" href="../public/register.php">Register</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="u-custom-color-1 u-menu-overlay u-opacity u-opacity-70"></div>
                </div>

            <?php } else { ?>

                <div class="u-custom-menu u-nav-container">
                    <ul class="u-custom-font u-nav u-text-font u-unstyled u-nav-1">
                        <li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-white u-text-hover-palette-1-base" href="../public/index.php" style="padding: 10px 20px;"><?php echo $_SESSION["name"];?></a>
                            <div class="u-nav-popup">
                                <ul class="u-h-spacing-20 u-nav u-unstyled u-v-spacing-10 u-nav-2">
                                    <li class="u-nav-item"><a class="u-button-style u-custom-color-2 u-nav-link" href="../public/dashboard.php">Drivers Hub</a>
                                    </li>
                                    <li class="u-nav-item"><a class="u-button-style u-custom-color-2 u-nav-link" href="../app/classes/logout.php">Logout</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="u-custom-menu u-nav-container-collapse">
                    <div class="u-container-style u-custom-color-1 u-inner-container-layout u-sidenav">
                        <div class="u-sidenav-overflow">
                            <div class="u-menu-close"></div>
                            <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-3">
                                <li class="u-nav-item"><a class="u-button-style u-nav-link" href="../public/index.php" style="padding: 10px 20px;"><?php echo $_SESSION["name"];?></a>
                                    <div class="u-nav-popup">
                                        <ul class="u-h-spacing-20 u-nav u-unstyled u-v-spacing-10 u-nav-4">
                                            <li class="u-nav-item"><a class="u-button-style u-custom-color-2 u-nav-link" href="../public/dashboard.php">Drivers Hub</a>
                                            </li>
                                            <li class="u-nav-item"><a class="u-button-style u-custom-color-2 u-nav-link" href="../app/classes/logout.php">Logout</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="u-custom-color-1 u-menu-overlay u-opacity u-opacity-70"></div>
                </div>

            <?php } ?>

        </nav>
    </div>
</header>