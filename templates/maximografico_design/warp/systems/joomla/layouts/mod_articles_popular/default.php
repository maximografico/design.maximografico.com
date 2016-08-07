<?php
/**
* @package   Warp Theme Framework
* @author    Máximo Alcántara
* @copyright (C) MAXIMOGRAFICO diseño gráfico y web
* @license   http://www.gnu.org/licenses/gpl.html GNU/GPL
*/

// no direct access
defined('_JEXEC') or die;

?>

<ul class="uk-list uk-list-line">
<?php foreach ($list as $item) : ?>
	<li><a href="<?php echo $item->link; ?>"><?php echo $item->title; ?></a></li>
<?php endforeach; ?>
</ul>