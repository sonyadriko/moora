<div class="sidebar sidebar-dark sidebar-fixed" id="sidebar">
    <div class="sidebar-brand d-none d-md-flex">
        <!-- <svg class="sidebar-brand-full" width="118" height="46" alt="CoreUI Logo">
            <use xlink:href="assets/brand/coreui.svg#full"></use>
        </svg>-->
        <!-- <svg class="sidebar-brand-narrow" width="46" height="46" alt="CoreUI Logo">
            <use xlink:href="assets/brand/coreui.svg#signet"></use>
        </svg>  -->
        <h3>Moora</h3>
    </div>
    <ul class="sidebar-nav" data-coreui="navigation" data-simplebar="">
        <li class="nav-item"><a class="nav-link" href="index.php">
                <svg class="nav-icon">
                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-speedometer"></use>
                </svg> Dashboard</a></li>
        <?php if($_SESSION['role'] == 'admin') { ?>
        <li class="nav-item"><a class="nav-link" href="data.php">
                <svg class="nav-icon">
                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-calculator"></use>
                </svg> Handphone</a></li>
        <li class="nav-item"><a class="nav-link" href="kriteria.php">
                <svg class="nav-icon">
                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-calculator"></use>
                </svg> Kriteria</a></li>
        <li class="nav-item"><a class="nav-link" href="hitung.php">
                <svg class="nav-icon">
                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-calculator"></use>
                </svg> Hitung</a></li>
        <?php } ?>

        <li class="nav-item"><a class="nav-link" href="history.php">
                <svg class="nav-icon">
                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-calculator"></use>
                </svg> History</a></li>
    </ul>
    <!-- <button class="sidebar-toggler" type="button" data-coreui-toggle="unfoldable"></button> -->
</div>
