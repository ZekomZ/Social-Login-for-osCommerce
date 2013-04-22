<?php
/*
  $Id: sociallogin.php 1739 2012-03-20 00:52:16Z Team LoginRadius $

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2007 osCommerce

  Released under the GNU General Public License
*/
if($lrsetting['socialsidebox'] == '1' && $lrsetting['socialinterface'] == '1'){
?>

<!-- sociallogin //-->
          <tr>
            <td>
<?php  
  
    $info_box_contents = array();
	$info_box_contents[] = array('text' => 'Social Login');

    new infoBoxHeading($info_box_contents, false, false);
	$info_box_contents = array();
          $info_box_contents[] = array('align' => 'center',
                                 'text' => $sociallogininterface);
    new infoBox($info_box_contents);
?>
            </td>
          </tr>
<?php
}?>