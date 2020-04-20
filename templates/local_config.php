<?php
define('AFDB_USER',             '{{ avantfax_db_user }}');
define('AFDB_PASS',             '{{ avantfax_db_password }}');
define('AFDB_NAME',             '{{ avantfax_db_dbname }}');

//
//      AvantFAX System email address
//
// Emails from faxrcvd and notify are sent from this email address
define('ADMIN_EMAIL', '{{ avantfax_admin_email }}');        // system return email address

# fix faulty default /usr/local/bin/tesseract (installation without tesseract does not work!)
define('OCR_BINARY', "/usr/bin/tesseract");
# if we install tesseract anyway, let's just enable it
define('ENABLE_OCR_SUPPORT', true);

$WWWUSER = '{{ avantfax_php_user }}';

$NOTIFY_INCLUDE_PDF = true;
