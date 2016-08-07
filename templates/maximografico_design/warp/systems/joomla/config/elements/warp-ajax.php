<?php
/**
* @package   Warp Theme Framework
* @author    Máximo Alcántara
* @copyright (C) MAXIMOGRAFICO diseño gráfico y web
* @license   http://www.gnu.org/licenses/gpl.html GNU/GPL
*/

// no direct access
defined('_JEXEC') or die('Restricted access');

// get template data/path
$app   = JFactory::getApplication();
$templ = $app->input->get('template');
$task  = $app->input->get('callback');
$warp  = JPATH_ROOT."/templates/{$templ}/warp.php";

if ($templ && $task && file_exists($warp)) {

	// trigger callback
	$warp = require($warp);
	$warp['system']->ajaxCallback($task);

}