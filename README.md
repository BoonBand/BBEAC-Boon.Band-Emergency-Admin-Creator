# Boon.Band Emergency Admin Creator

This script allows you to quickly create an administrator account on your WordPress site when you only have access to the site files (e.g., via FTP) but don't have access to the WordPress admin panel. The Boon.Band Emergency Admin Creator is a single PHP file that you can easily upload to your WordPress root directory and then access via a browser.

## Features

- Generates a unique administrator username based on your domain name
- Automatically generates a strong password
- Creates a new administrator account with a unique email address
- Displays the access data only once for security
- Automatically deletes itself after use to prevent unauthorized access
- Opens the WordPress admin panel in a new tab

## Usage

1. Download the `create_admin.php` file from this repository.
2. Upload the `create_admin.php` file to the root directory of your WordPress installation using FTP or any other file management tool.
3. Access the `create_admin.php` file in your browser by navigating to `https://yourdomain.com/create_admin.php`.
4. The script will create a new administrator account, display the login information, and open the WordPress admin panel in a new tab.

**IMPORTANT: Make sure to note the displayed access data, as it will only be shown once. The `create_admin.php` file will be deleted automatically after use to prevent unauthorized access.**

## Spread the Word

If you find this script helpful, please share it with others who might be in a similar situation. The Boon.Band Emergency Admin Creator is a simple and effective way to regain access to your WordPress admin panel when you only have access to the site files.

**Remember that this method has security risks, and you should remove the `create_admin.php` file immediately after the admin account is created.**

## Disclaimer

This script is provided "as is" without any warranties or guarantees. Use it at your own risk. The authors of this script are not responsible for any damage or data loss that may occur due to the use of this script.

