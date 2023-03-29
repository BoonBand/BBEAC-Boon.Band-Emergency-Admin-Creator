<?php
require_once('wp-load.php');

// Generate the username and email based on the domain.
$domain = $_SERVER['HTTP_HOST'];
$domain_body = substr($domain, 0, strpos($domain, '.'));
$admin_login = $domain_body . '_boonband';
$admin_email = 'boonband@' . $domain;

// Generate a random password.
$admin_password = wp_generate_password(12, true, true);

// Check if the user already exists.
if (!email_exists($admin_email) && !username_exists($admin_login)) {
    // Create the new administrator account.
    $user_id = wp_create_user($admin_login, $admin_password, $admin_email);
    $user = new WP_User($user_id);
    $user->set_role('administrator');

    // Send an email to the new administrator.
    wp_new_user_notification($user_id, null, 'both');

    // Log in the newly created user.
    wp_set_auth_cookie($user_id);

    // Store the login data in an array.
    $login_data = array(
        'login' => $admin_login,
        'email' => $admin_email,
        'password' => $admin_password
    );

    // Delete the create_admin.php file.
    unlink(__FILE__);
} else {
    echo 'User with the specified email or login already exists.';
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boon.Band Admin Created</title>
</head>
<body>
<h1><a href="https://boon.band/" target="_blank">Boon.Band</a> Admin Created</h1>
<p>Username: <?php echo $login_data['login']; ?></p>
<p>Email: <?php echo $login_data['email']; ?></p>
<p>Password: <?php echo $login_data['password']; ?></p>
<p><a href="/wp-admin/" target="_blank" id="admin-link">Go to Admin Panel</a></p>
<p style="color: red;">Important: This access data is displayed only once on this page and should be recorded for future use. The file itself has been deleted, which will prevent anyone from using it again.</p>

<script>
    document.getElementById('admin-link').click();
</script>
</body>
</html>
