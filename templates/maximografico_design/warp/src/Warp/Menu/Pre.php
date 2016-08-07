<?php
/**
* @package   Warp Theme Framework
* @author    Máximo Alcántara
* @copyright (C) MAXIMOGRAFICO diseño gráfico y web
* @license   http://www.gnu.org/licenses/gpl.html GNU/GPL
*/

namespace Warp\Menu;

/**
 * Pre menu renderer.
 */
class Pre
{
    /**
     * Process menu
     * 
     * @param  object $module  
     * @param  object $element 
     * @return object          
     */
    public function process($module, $element)
    {
        return $element;
    }
}
