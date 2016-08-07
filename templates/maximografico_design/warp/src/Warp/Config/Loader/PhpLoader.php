<?php
/**
* @package   Warp Theme Framework
* @author    M�ximo Alc�ntara
* @copyright (C) MAXIMOGRAFICO dise�o gr�fico y web
* @license   http://www.gnu.org/licenses/gpl.html GNU/GPL
*/

namespace Warp\Config\Loader;

/**
 * Loader for .php files.
 */
class PhpLoader implements LoaderInterface
{
    public function load($filename)
    {
        $config = require $filename;
        $config = (1 === $config) ? array() : $config;
        return $config ?: array();
    }

    public function supports($filename)
    {
        return (bool) preg_match('#\.php(\.dist)?$#', $filename);
    }
}
