<?php
/**
* @package   Warp Theme Framework
* @author    M�ximo Alc�ntara
* @copyright (C) MAXIMOGRAFICO dise�o gr�fico y web
* @license   http://www.gnu.org/licenses/gpl.html GNU/GPL
*/

foreach ($fields->children('field') as $field) {

    $name  = $field->attr('name');
    $type  = $field->attr('type');
	$value = isset($values[$name]) ? $values[$name] : $field->attr('default');

	echo $this['field']->render($type, sprintf(($prefix ? "{$prefix}[%s]" : "%s"), $name), $value, $field, compact('config'));
}
