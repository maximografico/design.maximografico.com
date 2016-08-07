<?php
/**
* @package   Warp Theme Framework
* @author    Máximo Alcántara
* @copyright (C) MAXIMOGRAFICO diseño gráfico y web
* @license   http://www.gnu.org/licenses/gpl.html GNU/GPL
*/

namespace Warp\Asset\Filter;

/**
 * Rewrite stylesheet urls, rewrites relative urls to absolute urls.
 */
class CssRewriteUrlFilter implements FilterInterface
{
    /**
     * @var string
     */
    protected static $path;

    /**
     * On load filter callback.
     * 
     * @param  object $asset
     */
    public function filterLoad($asset)
    {
        // has url?
        if (!$asset->getUrl()) {
            return;
        }

        // set base path
        self::$path = dirname($asset->getUrl()).'/';

        $asset->setContent(preg_replace_callback('/url\(\s*[\'"]?(?![a-z]+:|\/+)([^\'")]+)[\'"]?\s*\)/i', array($this, 'rewrite'), $asset->getContent()));
    }

    /**
     * On content filter callback.
     * 
     * @param  object $asset
     */
    public function filterContent($asset) {}

    /**
     * Rewrite url callback.
     * 
     * @param array $matches
     * 
     * @return string
     */
    protected function rewrite($matches)
    {
        // prefix with base and remove '../' segments if possible
        $path = self::$path.$matches[1];
        $last = '';

        while ($path != $last) {
            $last = $path;
            $path = preg_replace('`(^|/)(?!\.\./)([^/]+)/\.\./`', '$1', $path);
        }

        return 'url("'.$path.'")';
    }
}
