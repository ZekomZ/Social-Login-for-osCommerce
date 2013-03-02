<?php
/*
  $Id$

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2010 osCommerce

  Released under the GNU General Public License
*/
define('MODULE_BOXES_LOGINRADIUS_TITLE', 'Social Login');
$title_query = tep_db_query("select configuration_value from " . TABLE_CONFIGURATION . " where configuration_key = 'MODULE_BOXES_LOGINRADIUS_TITLE'");
$title_array = tep_db_fetch_array($title_query);
$title = $title_array['configuration_value'];
  define('MODULE_BOXES_LOGINRADIUS_TITLE', $title);
  define('MODULE_BOXES_LOGINRADIUS_DESCRIPTION', 'Login with Existing Account');
  define('MODULE_BOXES_LOGINRADIUS_BOX_TITLE', $title);
?>
