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

<?php foreach ($list as $item) : ?>
	<?php require JModuleHelper::getLayoutPath('mod_articles_news', '_item'); ?>
<?php endforeach;