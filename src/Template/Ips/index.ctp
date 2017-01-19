<?php
/* @var $this \Cake\View\View */
$this->extend('../Layout/TwitterBootstrap/dashboard');
$this->start('tb_actions');
?>
    <li><?= $this->Html->link(__('New Ip'), ['action' => 'add']); ?></li>
    <li><?= $this->Html->link(__('List Macs'), ['controller' => 'Macs', 'action' => 'index']); ?></li>
    <li><?= $this->Html->link(__('New Mac'), ['controller' => 'Macs', 'action' => 'add']); ?></li>
<?php $this->end(); ?>
<?php $this->assign('tb_sidebar', '<ul class="nav nav-sidebar">' . $this->fetch('tb_actions') . '</ul>'); ?>

<table class="table table-striped" cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id'); ?></th>
            <th><?= $this->Paginator->sort('mac_id'); ?></th>
            <th><?= $this->Paginator->sort('ip'); ?></th>
            <th><?= $this->Paginator->sort('lease_start'); ?></th>
            <th><?= $this->Paginator->sort('lease_end'); ?></th>
            <th class="actions"><?= __('Actions'); ?></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($ips as $ip): ?>
        <tr>
            <td><?= $this->Number->format($ip->id) ?></td>
            <td>
                <?= $ip->has('mac') ? $this->Html->link($ip->mac->id, ['controller' => 'Macs', 'action' => 'view', $ip->mac->id]) : '' ?>
            </td>
            <td><?= h($ip->ip) ?></td>
            <td><?= h($ip->lease_start) ?></td>
            <td><?= h($ip->lease_end) ?></td>
            <td class="actions">
                <?= $this->Html->link('', ['action' => 'view', $ip->id], ['title' => __('View'), 'class' => 'btn btn-default glyphicon glyphicon-eye-open']) ?>
                <?= $this->Html->link('', ['action' => 'edit', $ip->id], ['title' => __('Edit'), 'class' => 'btn btn-default glyphicon glyphicon-pencil']) ?>
                <?= $this->Form->postLink('', ['action' => 'delete', $ip->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ip->id), 'title' => __('Delete'), 'class' => 'btn btn-default glyphicon glyphicon-trash']) ?>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<div class="paginator">
    <ul class="pagination">
        <?= $this->Paginator->prev('< ' . __('previous')) ?>
        <?= $this->Paginator->numbers(['before' => '', 'after' => '']) ?>
        <?= $this->Paginator->next(__('next') . ' >') ?>
    </ul>
    <p><?= $this->Paginator->counter() ?></p>
</div>
