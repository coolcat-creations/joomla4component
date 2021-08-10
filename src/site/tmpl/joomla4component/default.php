    <?php

    defined('_JEXEC') or die;

    use Joomla\CMS\Factory;
    use Joomla\CMS\Helper\ContentHelper;
    use Joomla\CMS\HTML\HTMLHelper;
    use Joomla\CMS\Language\Text;
    use Joomla\CMS\Layout\FileLayout;
    use Joomla\CMS\Plugin\PluginHelper;
    use Joomla\CMS\Router\Route;
    use Joomla\Component\Contact\Site\Helper\RouteHelper;

    ?>

    <h1><?= Text::_('COM_JOOMLA4COMPONENT') ?></h1>
	<?php print_r($this->items); ?>

    <?php if($this->items) { ?>
    <table>
    <tr>
    <th>Title</th>
    <th>Category</th>
    </tr>
    <?php foreach ($this->items as $item) : ?>
    <tr>
    <td><?php echo $item->title; ?></td>
    <td><?php echo $item->category; ?></td>
    </tr>
    <?php endforeach; ?>
    </table>
    <?php }
