
<?php
// Links for logged in user
if (isUserLoggedIn()) { ?>

    <ul>
        <li><a href='myaccount.php'>Account Home</a></li>
        <li><a href='logout.php'>Logout</a></li>
        <li><a href='admin_users.php'>Admin Users</a></li>

    </ul>

<?php } else { ?>

    <ul>
        <li><a href='index.php'>Home</a></li>
        <li><a href='admin_users.php'>View Records</a></li>
        <li><a href='login.php'>Login</a></li>
        <li><a href='register.php'>Register</a></li>
    </ul>
<?php } ?>
