<ul class="nav">
    
    <?php if ($_SESSION['ACCOUNTTYPE'] == "Administrator" || $_SESSION['ACCOUNTTYPE'] == "Service-staff"): ?>
        <li <?php if ($current_page == "index") echo "class=\"nav-item active\""; ?>>
            <a class="nav-link" href="index.php">
                <i class="nc-icon nc-chart-pie-35"></i>
                <p>Dashboard</p>
            </a>
        </li>
    <?php endif; ?>

    <li <?php if ($current_page == "profile") echo "class=\"nav-item active\""; ?>>
        <a class="nav-link" href="profile.php">
            <i class="nc-icon nc-circle-09"></i>
            <p>My Profile</p>
        </a>
    </li>

    <?php if ($_SESSION['ACCOUNTTYPE'] == "Administrator"): ?>
        <li <?php if ($current_page == "users") echo "class=\"nav-item active\""; ?>>
            <a class="nav-link" href="users.php">
                <i class="nc-icon nc-notes"></i>
                <p>Users Module</p>
            </a>
        </li>
    <?php endif; ?>

    <?php if ($_SESSION['ACCOUNTTYPE'] == "Administrator" || $_SESSION['ACCOUNTTYPE'] == "Service-staff" || $_SESSION['ACCOUNTTYPE'] == "Agent"): ?>
        <li <?php if ($current_page == "booking-inquiry") echo "class=\"nav-item active\""; ?>>
            <a class="nav-link" href="booking-inquiry.php">
                <i class="nc-icon nc-paper-2"></i>
                <p>Booking inquiry</p>
            </a>
        </li>
    <?php endif; ?>


    <!--
    <li>
        <a class="nav-link" href="./notifications.html">
            <i class="nc-icon nc-bell-55"></i>
            <p>Notifications</p>
        </a>
    </li>
    <li class="nav-item active active-pro">
        <a class="nav-link active" href="upgrade.html">
            <i class="nc-icon nc-alien-33"></i>
            <p>Upgrade to PRO</p>
        </a>
    </li>
    -->
</ul>