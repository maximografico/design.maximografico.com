<?php
/**
* @package   Warp Theme Framework
* @author    M�ximo Alc�ntara
* @copyright (C) MAXIMOGRAFICO dise�o gr�fico y web
* @license   http://www.gnu.org/licenses/gpl.html GNU/GPL
*/

namespace Warp\Config\Loader;

interface LoaderInterface
{
    /**
     * Load the given configuration file.
     *
     * @param string $filename
     * 
     * @return array
     */
    public function load($filename);
 
    /**
     * Determine if the configuration file is supported.
     *
     * @param string $filename
     * 
     * @return bool
     */
    public function supports($filename);
}
