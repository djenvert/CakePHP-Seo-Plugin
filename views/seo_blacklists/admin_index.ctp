<div class="seo_plugin">
	<?php echo $this->element('seo_view_head', array('plugin' => 'seo')); ?>
	<div class="seoBlacklists index">
		<h2><?php __('Seo Blacklists');?></h2>
		<table cellpadding="0" cellspacing="0">
		<tr>
				<th><?php echo $this->Paginator->sort('ip_range_start');?></th>
				<th><?php echo $this->Paginator->sort('ip_range_end');?></th>
				<th><?php echo $this->Paginator->sort('is_active');?></th>
				<th><?php echo $this->Paginator->sort('created');?></th>
				<th class="actions"><?php __('Actions');?></th>
		</tr>
		<?php
		$i = 0;
		foreach ($seoBlacklists as $seoBlacklist):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $seoBlacklist['SeoBlacklist']['ip_range_start']; ?>&nbsp;</td>
			<td><?php echo $seoBlacklist['SeoBlacklist']['ip_range_end']; ?>&nbsp;</td>
			<td><?php echo $seoBlacklist['SeoBlacklist']['is_active']; ?>&nbsp;</td>
			<td><?php echo $this->Time->niceShort($seoBlacklist['SeoBlacklist']['created']); ?>&nbsp;</td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('action' => 'view', $seoBlacklist['SeoBlacklist']['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $seoBlacklist['SeoBlacklist']['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $seoBlacklist['SeoBlacklist']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $seoBlacklist['SeoBlacklist']['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
		</table>
		<?php echo $this->element('seo_paging', array('plugin' => 'seo')); ?>
	</div>
	<div class="actions">
		<h3><?php __('Actions'); ?></h3>
		<ul>
			<li><?php echo $this->Html->link(__('New Seo Blacklist', true), array('action' => 'add')); ?></li>
		</ul>
	</div>
</div>