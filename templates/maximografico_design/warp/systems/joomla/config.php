<?php
/**
* @package   Warp Theme Framework
* @author    Máximo Alcántara
* @copyright (C) MAXIMOGRAFICO diseño gráfico y web
* @license   http://www.gnu.org/licenses/gpl.html GNU/GPL
*/

return array(

    'helper' => array(
       'system'  => 'Warp\Joomla\Helper\SystemHelper',
       'option'  => 'Warp\Joomla\Helper\OptionHelper',
       'widgets' => 'Warp\Joomla\Helper\WidgetsHelper'
    ),

    'path' => array(
        'config'  => array(__DIR__.'/config'),
        'layouts' => array(__DIR__.'/layouts')
    ),

    'menu' => array(
        'pre' => 'Warp\Joomla\Menu\Pre'
    )

);
