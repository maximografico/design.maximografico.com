<?php
/**
* @package   Warp Theme Framework
* @author    Máximo Alcántara
* @copyright (C) MAXIMOGRAFICO diseño gráfico y web
* @license   http://www.gnu.org/licenses/gpl.html GNU/GPL
*/

namespace Warp\Asset;

/**
 * Asset interface.
 */
interface AssetInterface
{
    public function getUrl();

    public function setUrl($url);

    public function getContent($filter = null);

    public function setContent($content);

    public function load($filter = null);

    public function hash($salt = '');
}
