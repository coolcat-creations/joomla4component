<?php

namespace CoolcatCreations\Component\Joomla4component\Administrator\View\Joomla4component;

defined('_JEXEC') or die;

use Joomla\CMS\Factory;
use Joomla\CMS\Helper\ContentHelper;
use Joomla\CMS\MVC\View\HtmlView as BaseHtmlView;
use Joomla\CMS\Toolbar\Toolbar;
use Joomla\CMS\Toolbar\ToolbarHelper;

/**
 * @package     Joomla.Administrator
 * @subpackage  com_joomla4component
 *
 * @copyright   Copyright (C) 2020 Elisa Foltyn. All rights reserved.
 * @license     GNU General Public License version 3; see LICENSE
 */

/**
 * Main "Joomla4component" Admin View
 */
class HtmlView extends BaseHtmlView {

    /**
     * Display the main "Joomla4component" view
     *
     * @param   string  $tpl  The name of the template file to parse; automatically searches through the template paths.
     * @return  void
     */


    function display($tpl = null) {
	    $this->items         = $this->get('Items');

	    parent::display($tpl);
    }


}
