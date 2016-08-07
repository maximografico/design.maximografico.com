<?php
/**
* @package   Warp Theme Framework
* @author    Máximo Alcántara
* @copyright (C) MAXIMOGRAFICO diseño gráfico y web
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
