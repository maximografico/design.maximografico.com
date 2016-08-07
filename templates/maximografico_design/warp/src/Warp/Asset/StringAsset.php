<?php
/**
* @package   Warp Theme Framework
* @author    M�ximo Alc�ntara
* @copyright (C) MAXIMOGRAFICO dise�o gr�fico y web
* @license   http://www.gnu.org/licenses/gpl.html GNU/GPL
*/

namespace Warp\Asset;

/**
 * String asset.
 */
class StringAsset extends AbstractAsset
{
    /**
     * @var string
     */
    protected $string;

    /**
     * Constructor.
     *
     * @param string $string
     * @param array  $options
     */
    public function __construct($string, $options = array())
    {
        parent::__construct($options);

        $this->type = 'String';
        $this->string = $string;
    }

    /**
     * Load asset callback.
     *
     * @param object $filter
     */
    public function load($filter = null)
    {
        $this->doLoad($this->string, $filter);
    }

    /**
     * Get unique asset hash.
     *
     * @param string $salt
     *
     * @return string
     */
    public function hash($salt = '')
    {
        return md5($this->string.$salt);
    }
}
