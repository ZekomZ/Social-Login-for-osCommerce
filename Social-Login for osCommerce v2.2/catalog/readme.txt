1. Go to your FTP in /catalog/admin/includes/boxes/modules.php

add code in the 
'<a href = "' . tep_href_link(FILENAME_SOCIALLOGINANDSOCIALSHARE, '', 'NONSSL') . '" class="menuBoxContentLink">' . BOX_MODULES_SOCIAL_LOGIN . '</a><br>' .

2. Go to /catalog/admin/includes/filenames.php

add code define('FILENAME_SOCIALLOGINANDSOCIALSHARE', 'socialloginandsocialshare.php');

3. Go to /catalog/admin/includes/languages/YOUR_ADMIN_LANGUAGE.php

define('BOX_MODULES_SOCIAL_LOGIN', 'Social Login and Social Share');

4. Please add following code in file /catalog/admin/includes/database_tables.php

define('TABLE_LOGINRADIUS_SETTING', 'loginradius_setting');

5. Please add following code in file /catalog/includes/application_top.php at bottom

<?php require_once('sociallogin.php');?>

6. Please add following code in file /catalog/includes/header.php at bottom

<?php require_once('socialshare.php');?>

7. Please add following code in file /catalog/includes/database_tables.php

define('TABLE_LOGINRADIUS_SETTING', 'loginradius_setting');
define('TABLE_SOCIALLOGIN', 'sociallogin');

9. Please add following code in file /catalog/includes/column_left.php

require(DIR_WS_BOXES . 'socialloginleft.php');

10. 9. Please add following code in file /catalog/includes/column_right.php

require(DIR_WS_BOXES . 'socialloginright.php');