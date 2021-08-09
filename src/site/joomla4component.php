<?php
defined('_JEXEC') or die;
jimport('joomla.application.component.controller');

$controller = JController::getinstance('joomla4component');

$input = JFactory::getApplication()->input;
$controller->execute($input->get('task'));
