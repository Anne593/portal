<?php
/* @var $this \Cake\View\View */
$this->extend('../Layout/TwitterBootstrap/dashboard');
$this->start('tb_actions');
?>
    <li><?= $this->Html->link(__('New Tenant'), ['action' => 'add']); ?></li>
    <li><?= $this->Html->link(__('List People'), ['controller' => 'People', 'action' => 'index']); ?></li>
    <li><?= $this->Html->link(__('New Person'), ['controller' => 'People', 'action' => 'add']); ?></li>
    <li><?= $this->Html->link(__('List Rooms'), ['controller' => 'Rooms', 'action' => 'index']); ?></li>
    <li><?= $this->Html->link(__('New Room'), ['controller' => 'Rooms', 'action' => 'add']); ?></li>
<?php $this->end(); ?>
<?php $this->assign('tb_sidebar', '<ul class="nav nav-sidebar">' . $this->fetch('tb_actions') . '</ul>'); ?>

<table class="table table-striped" cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id'); ?></th>
            <th><?= $this->Paginator->sort('person_id'); ?></th>
            <th><?= $this->Paginator->sort('room_id'); ?></th>
            <th><?= $this->Paginator->sort('date_move_in'); ?></th>
            <th><?= $this->Paginator->sort('date_move_out'); ?></th>
            <th><?= $this->Paginator->sort('comment'); ?></th>
            <th class="actions"><?= __('Actions'); ?></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($tenants as $tenant): ?>
        <tr>
            <td><?= $this->Number->format($tenant->id) ?></td>
            <td>
                <?= $tenant->has('person') ? $this->Html->link($tenant->person->id, ['controller' => 'People', 'action' => 'view', $tenant->person->id]) : '' ?>
            </td>
            <td>
                <?= $tenant->has('room') ? $this->Html->link($tenant->room->id, ['controller' => 'Rooms', 'action' => 'view', $tenant->room->id]) : '' ?>
            </td>
            <td><?= h($tenant->date_move_in) ?></td>
            <td><?= h($tenant->date_move_out) ?></td>
            <td><?= h($tenant->comment) ?></td>
            <td class="actions">
                <?= $this->Html->link('', ['action' => 'view', $tenant->id], ['title' => __('View'), 'class' => 'btn btn-default glyphicon glyphicon-eye-open']) ?>
                <?= $this->Html->link('', ['action' => 'edit', $tenant->id], ['title' => __('Edit'), 'class' => 'btn btn-default glyphicon glyphicon-pencil']) ?>
                <?= $this->Form->postLink('', ['action' => 'delete', $tenant->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tenant->id), 'title' => __('Delete'), 'class' => 'btn btn-default glyphicon glyphicon-trash']) ?>
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
