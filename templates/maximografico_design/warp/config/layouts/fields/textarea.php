<?php
/**
* @package   Warp Theme Framework
* @author    Máximo Alcántara
* @copyright (C) MAXIMOGRAFICO diseño gráfico y web
* @license   http://www.gnu.org/licenses/gpl.html GNU/GPL
*/

printf('<textarea %s>%s</textarea>', $control->attributes(array_merge($node->attr(), compact('name')), array('label', 'description', 'default')), htmlspecialchars($value));