<?php
/**
* @package   Warp Theme Framework
* @author    M�ximo Alc�ntara
* @copyright (C) MAXIMOGRAFICO dise�o gr�fico y web
* @license   http://www.gnu.org/licenses/gpl.html GNU/GPL
*/

// no direct access
defined('_JEXEC') or die;

?>

<?php foreach ($list as $item) : ?>
	<?php require JModuleHelper::getLayoutPath('mod_articles_news', '_item'); ?>
<?php endforeach;