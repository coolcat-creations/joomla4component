<?php

/**
 * @package     Joomla.Administrator
 * @subpackage  com_foos
 *
 * @copyright   Copyright (C) 2005 - 2020 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */


namespace CoolcatCreations\Component\Joomla4component\Administrator\Extension;


defined('JPATH_PLATFORM') or die;


use Joomla\CMS\Categories\CategoryServiceInterface;
use Joomla\CMS\Categories\CategoryServiceTrait;
use Joomla\CMS\Extension\BootableExtensionInterface;
use Joomla\CMS\Extension\MVCComponent;
use Joomla\CMS\HTML\HTMLRegistryAwareTrait;
use CoolcatCreations\Component\Joomla4component\Administrator\Service\HTML\AdministratorService;
use Psr\Container\ContainerInterface;


/**
 * Component class for com_foos
 *
 * @since  1.0.0
 */
class Joomla4component extends MVCComponent implements BootableExtensionInterface, CategoryServiceInterface

{

	use CategoryServiceTrait;
	use HTMLRegistryAwareTrait;


	/**
	 * Booting the extension. This is the function to set up the environment of the extension like
	 * registering new class loaders, etc.
	 *
	 * If required, some initial set up can be done from services of the container, eg.
	 * registering HTML services.
	 *
	 * @param ContainerInterface $container The container
	 *
	 * @return  void
	 *
	 * @since   1.0.0
	 */

	public function boot(ContainerInterface $container)

	{

		$this->getRegistry()->register('joomla4component', new AdministratorService);

	}

}
