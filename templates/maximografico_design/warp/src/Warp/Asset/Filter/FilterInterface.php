<?php
/**
* @package   Warp Theme Framework
* @author    M�ximo Alc�ntara
* @copyright (C) MAXIMOGRAFICO dise�o gr�fico y web
* @license   http://www.gnu.org/licenses/gpl.html GNU/GPL
*/

namespace Warp\Asset\Filter;

/**
 * Asset filter interface.
 */
interface FilterInterface
{
    public function filterLoad($asset);

    public function filterContent($asset);
}
