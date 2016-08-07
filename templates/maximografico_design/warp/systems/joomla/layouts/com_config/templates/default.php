<?php
/**
* @package   Warp Theme Framework
* @author    Máximo Alcántara
* @copyright (C) MAXIMOGRAFICO diseño gráfico y web
* @license   http://www.gnu.org/licenses/gpl.html GNU/GPL
*/

defined('_JEXEC') or die;

$id   = \JFactory::getApplication()->getTemplate('template')->id;
$link = \JUri::root() . 'administrator/index.php?option=com_templates&view=style&layout=edit&id=' . $id;

?>

<script>
    window.location.href = "<?php echo $link ?>"
</script>

<noscript>
    <a href="<?php echo $link ?>" class="uk-button"><?php JText::_('JADMINISTRATOR'); ?></a>
</noscript>
