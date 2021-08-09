<?php
/**
 * @package     Joomla.Site
 * @subpackage  com_banners
 *
 * @copyright   (C) 2009 Open Source Matters, Inc. <https://www.joomla.org>
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

namespace CoolcatCreations\Component\Joomla4component\Site\Model;

\defined('_JEXEC') or die;

use Joomla\CMS\Component\ComponentHelper;
use Joomla\CMS\Factory;
use Joomla\CMS\MVC\Model\ListModel;
use Joomla\Database\DatabaseQuery;
use Joomla\Database\Exception\ExecutionFailureException;
use Joomla\Database\ParameterType;
use Joomla\Registry\Registry;
use Joomla\Utilities\ArrayHelper;

/**
 * Banners model for the Joomla Banners component.
 *
 * @since  1.6
 */
class Joomla4componentModel extends ListModel
{
	/**
	 * Method to get a store id based on model configuration state.
	 *
	 * This is necessary because the model is used by the component and
	 * different modules that might need different sets of data or different
	 * ordering requirements.
	 *
	 * @param   string  $id  A prefix for the store id.
	 *
	 * @return  string  A store id.
	 *
	 * @since   1.6
	 */
	protected function getStoreId($id = '')
	{
		// Compile the store id.
		$id .= ':' . $this->getState('filter.search');
		$id .= ':' . $this->getState('filter.tag_search');
		$id .= ':' . $this->getState('filter.client_id');
		$id .= ':' . serialize($this->getState('filter.category_id'));
		$id .= ':' . serialize($this->getState('filter.keywords'));

		return parent::getStoreId($id);
	}

	/**
	 * Get a list of Items.
	 *
	 * @return  array
	 *
	 * @since   1.6
	 */
	public function getItems($pk= null): array {

		$items = new \stdClass();

		$db = $this->getDbo();
		$query = $db->getQuery(true);
		$query->from('#__joomla4component');
		$query->select('*');
		// Reset the query using our newly populated query object.
		$db->setQuery($query);

		// Load the results as a list of stdClass objects (see later for more options on retrieving data).
		$items = $db->loadObjectList();
		return $items;
	}

}
