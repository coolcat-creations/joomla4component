<?php
/**
 * @package     Joomla.Administrator
 * @subpackage  com_contact
 *
 * @copyright   (C) 2008 Open Source Matters, Inc. <https://www.joomla.org>
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

namespace CoolcatCreations\Component\Joomla4component\Administrator\Model;

\defined('_JEXEC') or die;

use Joomla\CMS\Factory;
use Joomla\CMS\Language\Associations;
use Joomla\CMS\MVC\Model\ListModel;
use Joomla\CMS\Table\Table;
use Joomla\Database\ParameterType;
use Joomla\Utilities\ArrayHelper;

/**
 * Methods supporting a list of contact records.
 *
 * @since  1.6
 */
class Joomla4componentModel extends ListModel
{

	/**
	 * Constructor.
	 *
	 * @param array $config An optional associative array of configuration settings.
	 *
	 * @see     \JControllerLegacy
	 *
	 * @since   __BUMP_VERSION__
	 */

	public function __construct($config = [])

	{
		parent::__construct($config);
	}

	/**
	 * Build an SQL query to load the list data.
	 *
	 * @return  \JDatabaseQuery
	 *
	 * @since   __BUMP_VERSION__
	 */

	protected function getListQuery()
	{

		// Create a new query object.

		$db = $this->getDbo();
		$query = $db->getQuery(true);

		// Select the required fields from the table.

		$query->select(
			$db->quoteName(['id', 'title', 'description'])
		);

		$query->from($db->quoteName('#__joomla4component'));


		return $query;
	}
}
