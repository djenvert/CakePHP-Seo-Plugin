<div class="seo_plugin">
	<?php echo $this->element('seo_view_head', array('plugin' => 'seo')); ?>
	<div class="seoRedirects index">
		<h2><?php __('Seo Redirects');?></h2>
		<table cellpadding="0" cellspacing="0">
		<tr>
				<th><?php echo $this->Paginator->sort('seo_uri_id');?></th>
				<th><?php echo $this->Paginator->sort('redirect');?></th>
				<th><?php echo $this->Paginator->sort('Queue','priority');?></th>
				<th><?php echo $this->Paginator->sort('Active','is_active');?></th>
				<th><?php echo $this->Paginator->sort('callback');?></th>
				<th><?php echo $this->Paginator->sort('created');?></th>
				<th class="actions"><?php __('Actions');?></th>
		</tr>
		<?php
		$i = 0;
		foreach ($seoRedirects as $seoRedirect):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td>
				<?php echo $this->Html->link($seoRedirect['SeoUri']['uri'], array('controller' => 'seo_uris', 'action' => 'view', $seoRedirect['SeoUri']['id'])); ?>
			</td>
			<td><?php echo $seoRedirect['SeoRedirect']['redirect']; ?>&nbsp;</td>
			<td><?php echo $seoRedirect['SeoRedirect']['priority']; ?>&nbsp;</td>
			<td><?php echo $seoRedirect['SeoRedirect']['is_active']; ?>&nbsp;</td>
			<td><?php echo $seoRedirect['SeoRedirect']['callback']; ?>&nbsp;</td>
			<td><?php echo $this->Time->niceShort($seoRedirect['SeoRedirect']['created']); ?>&nbsp;</td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('action' => 'view', $seoRedirect['SeoRedirect']['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $seoRedirect['SeoRedirect']['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $seoRedirect['SeoRedirect']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $seoRedirect['SeoRedirect']['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
		</table>
		<?php echo $this->element('seo_paging', array('plugin' => 'seo')); ?>
	</div>
	<div class="actions">
		<h3><?php __('Actions'); ?></h3>
		<ul>
			<li><?php echo $this->Html->link(__('New Seo Redirect', true), array('action' => 'add')); ?></li>
		</ul>
	</div>
</div>