<?php
/**
* @package   Warp Theme Framework
* @author    Máximo Alcántara
* @copyright (C) MAXIMOGRAFICO diseño gráfico y web
* @license   http://www.gnu.org/licenses/gpl.html GNU/GPL
*/

$description = ($node->attr('description') != '') ? $node->attr('description') : 'These links contain general information on theme features, troubleshooting and support.';

echo '<p>'.$description.'</p>';

foreach ($node->children('link') as $link) {
    printf('<a class="uk-button uk-margin-small-right" href="%s">%s</a>', $link->attr('url'), $link->text());
}
