<?php
/* @var $this \Cake\View\View */
$this->extend('../Layout/TwitterBootstrap/dashboard');
$this->start('tb_actions');
?>
    <li><?= $this->Html->link(__('New Person'), ['action' => 'add']); ?></li>
    <li><?= $this->Html->link(__('List FileserverUsers'), ['controller' => 'FileserverUsers', 'action' => 'index']); ?></li>
    <li><?= $this->Html->link(__('New Fileserver User'), ['controller' => 'FileserverUsers', 'action' => 'add']); ?></li>
    <li><?= $this->Html->link(__('List Macs'), ['controller' => 'Macs', 'action' => 'index']); ?></li>
    <li><?= $this->Html->link(__('New Mac'), ['controller' => 'Macs', 'action' => 'add']); ?></li>
    <li><?= $this->Html->link(__('List Tenants'), ['controller' => 'Tenants', 'action' => 'index']); ?></li>
    <li><?= $this->Html->link(__('New Tenant'), ['controller' => 'Tenants', 'action' => 'add']); ?></li>
    <li><?= $this->Html->link(__('List Memberships'), ['controller' => 'Memberships', 'action' => 'index']); ?></li>
    <li><?= $this->Html->link(__('New Membership'), ['controller' => 'Memberships', 'action' => 'add']); ?></li>
    <li><?= $this->Html->link(__('List UserRoles'), ['controller' => 'UserRoles', 'action' => 'index']); ?></li>
    <li><?= $this->Html->link(__('New User Role'), ['controller' => 'UserRoles', 'action' => 'add']); ?></li>
    <li><?= $this->Html->link(__('List Roomkeys'), ['controller' => 'Roomkeys', 'action' => 'index']); ?></li>
    <li><?= $this->Html->link(__('New Roomkey'), ['controller' => 'Roomkeys', 'action' => 'add']); ?></li>
    <li><?= $this->Html->link(__('List WorkingGroups'), ['controller' => 'WorkingGroups', 'action' => 'index']); ?></li>
    <li><?= $this->Html->link(__('New Working Group'), ['controller' => 'WorkingGroups', 'action' => 'add']); ?></li>
<?php $this->end(); ?>
<?php $this->assign('tb_sidebar', '<ul class="nav nav-sidebar">' . $this->fetch('tb_actions') . '</ul>'); ?>

<table class="table table-striped" cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id'); ?></th>
            <th><?= $this->Paginator->sort('surname'); ?></th>
            <th><?= $this->Paginator->sort('forename'); ?></th>
            <th><?= $this->Paginator->sort('email'); ?></th>
            <th><?= $this->Paginator->sort('birthday'); ?></th>
            <th><?= $this->Paginator->sort('matriculation_number'); ?></th>
            <th><?= $this->Paginator->sort('studentenwerk_identification'); ?></th>
            <th class="actions"><?= __('Actions'); ?></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($people as $person): ?>
        <tr>
            <td><?= $this->Number->format($person->id) ?></td>
            <td><?= h($person->surname) ?></td>
            <td><?= h($person->forename) ?></td>
            <td><?= h($person->email) ?></td>
            <td><?= h($person->birthday) ?></td>
            <td><?= h($person->matriculation_number) ?></td>
            <td><?= $this->Number->format($person->studentenwerk_identification) ?></td>
            <td class="actions">
                <?= $this->Html->link('', ['action' => 'view', $person->id], ['title' => __('View'), 'class' => 'btn btn-default glyphicon glyphicon-eye-open']) ?>
                <?= $this->Html->link('', ['action' => 'edit', $person->id], ['title' => __('Edit'), 'class' => 'btn btn-default glyphicon glyphicon-pencil']) ?>
                <?= $this->Form->postLink('', ['action' => 'delete', $person->id], ['confirm' => __('Are you sure you want to delete # {0}?', $person->id), 'title' => __('Delete'), 'class' => 'btn btn-default glyphicon glyphicon-trash']) ?>
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
