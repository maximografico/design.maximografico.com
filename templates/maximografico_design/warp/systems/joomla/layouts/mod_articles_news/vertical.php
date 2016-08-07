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

<?php if (count($list) > 0) : ?>
<ul class="uk-list uk-list-line">
	<?php for ($i = 0, $n = count($list); $i < $n; $i ++) : ?>
	<?php $item = $list[$i]; ?>
	<li><?php require JModuleHelper::getLayoutPath('mod_articles_news', '_item'); ?></li>
	<?php endfor; ?>
</ul>
<?php endif;