<?php
/**
* @package   Warp Theme Framework
* @author    M�ximo Alc�ntara
* @copyright (C) MAXIMOGRAFICO dise�o gr�fico y web
* @license   http://www.gnu.org/licenses/gpl.html GNU/GPL
*/

    $show_large = isset($value['large']) ? $value['large'] : "1";
    $show_medium  = isset($value['medium']) ? $value['medium'] : "1";
    $show_small   = isset($value['small']) ? $value['small'] : "1";
?>
<ul data-list-devices class="uk-list tm-list-devices">
    <li class="tm-icon-large"><a href="#"><input type="hidden" name="<?php echo $name."[large]";?>" value="<?php echo $show_large;?>"></a></li>
    <li class="tm-icon-medium"><a class="" href="#"><input type="hidden" name="<?php echo $name."[medium]";?>" value="<?php echo $show_medium;?>"></a></li>
    <li class="tm-icon-small"><a href="#"><input type="hidden" name="<?php echo $name."[small]";?>" value="<?php echo $show_small;?>"></a></li>
</ul>