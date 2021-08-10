<?php
/**
 * @package     Joomla.Site
 * @subpackage  com_foos
 *
 * @copyright   Copyright (C) 2005 - 2019 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

?>

<div class="com-foo-category">
	Test
</div>


<?php
foreach ($this->items as $i => $item) : ?>

	<?php echo $item->title; ?><br>
	<?php echo $item->description; ?>

	</br>

<?php endforeach;
