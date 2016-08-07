<?php
/**
* @package   Warp Theme Framework
* @author    M�ximo Alc�ntara
* @copyright (C) MAXIMOGRAFICO dise�o gr�fico y web
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
