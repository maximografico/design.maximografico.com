<?php
/**
* @package   maximografico_design
* @author    M�ximo Alc�ntara
* @copyright (C) MAXIMOGRAFICO dise�o gr�fico y web
* @license   http://www.gnu.org/licenses/gpl.html GNU/GPL
*/

use Warp\Warp;
use Warp\Autoload\ClassLoader;
use Warp\Config\Repository;

global $warp;

if (!$warp) {

    require_once(__DIR__.'/warp/src/Warp/Autoload/ClassLoader.php');

    // set loader
    $loader = new ClassLoader;
    $loader->add('Warp', __DIR__.'/warp/src');
    $loader->add('Warp\Joomla', __DIR__.'/warp/systems/joomla/src');
    $loader->register();

    // set config
    $config = new Repository;
    $config->load(__DIR__.'/warp/config.php');
    $config->load(__DIR__.'/warp/systems/joomla/config.php');
    $config->load(__DIR__.'/config.php');

    // set warp
    $warp = new Warp(compact('loader', 'config'));
    $warp['system']->init();
}

return $warp;
