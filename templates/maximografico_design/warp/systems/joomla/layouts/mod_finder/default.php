<?php
/**
* @package   Warp Theme Framework
* @author    M�ximo Alc�ntara
* @copyright (C) MAXIMOGRAFICO dise�o gr�fico y web
* @license   http://www.gnu.org/licenses/gpl.html GNU/GPL
*/

// get warp
global $warp;

$id = implode('-', array('search', $module->id, uniqid()));

?>

<form id="<?php echo $id; ?>" class="uk-search" action="<?php echo JRoute::_($route); ?>" method="get">
	<input class="uk-search-field" type="text" name="q" placeholder="<?php echo JText::_('TPL_WARP_SEARCH'); ?>" autocomplete="off">
	<?php echo modFinderHelper::getGetFields($route, (int) $params->get('set_itemid')); ?>
</form>
