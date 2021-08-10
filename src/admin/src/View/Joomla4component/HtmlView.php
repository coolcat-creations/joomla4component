<?php

namespace CoolcatCreations\Component\Joomla4component\Administrator\View\Joomla4component;

\defined('_JEXEC') or die;


use Joomla\CMS\MVC\View\HtmlView as BaseHtmlView;


/**
 * View class for a list of foos.
 *
 * @since  1.0.0
 */
class HtmlView extends BaseHtmlView

{
	/**
	 * An array of items
	 *
	 * @var  array
	 */

	protected $items;


	/**
	 * Method to display the view.
	 *
	 * @param string $tpl A template file to load. [optional]
	 *
	 * @return  void
	 *
	 * @since   1.0.0
	 */

	public function display($tpl = null): void

	{
		$this->items = $this->get('Items');
		parent::display($tpl);

	}

}
