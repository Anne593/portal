<?php
/* @var $this \Cake\View\View */
$this->extend('../Layout/TwitterBootstrap/dashboard');
$this->start('tb_actions');
?>
<li><?= $this->Html->link(__('New People Membership'), ['action' => 'add']); ?></li>
<li><?= $this->Html->link(__('List People'), ['controller' => 'People', 'action' => 'index']); ?></li>
<li><?= $this->Html->link(__('New Person'), ['controller' => 'People', 'action' => 'add']); ?></li>
<li><?= $this->Html->link(__('List Memberships'), ['controller' => 'Memberships', 'action' => 'index']); ?></li>
<li><?= $this->Html->link(__('New Membership'), ['controller' => 'Memberships', 'action' => 'add']); ?></li>
<?php $this->end(); ?>
<?php $this->assign('tb_sidebar', '
<ul class="nav nav-sidebar">' . $this->fetch('tb_actions') . '</ul>'); ?>

<table class="table table-striped" cellpadding="0" cellspacing="0">
    <thead>
    <tr>
        <th><?= $this->Paginator->sort('id'); ?></th>
        <th><?= $this->Paginator->sort('semester'); ?></th>
        <th><?= $this->Paginator->sort('person_id'); ?></th>
        <th><?= $this->Paginator->sort('membership_id'); ?></th>
        <th><?= $this->Paginator->sort('payment'); ?></th>
        <th><?= $this->Paginator->sort('social_service'); ?></th>
        <th><?= $this->Paginator->sort('social_service_comment'); ?></th>
        <th class="actions"><?= __('Actions'); ?></th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($peopleMemberships as $peopleMembership): ?>
    <tr>
        <td><?= $this->Number->format($peopleMembership->id) ?></td>
        <td><?= $this->Number->format($peopleMembership->semester) ?></td>
        <td>
            <?= $peopleMembership->has('person') ? $this->Html->link($peopleMembership->person->id, ['controller' =>
            'People', 'action' => 'view', $peopleMembership->person->id]) : '' ?>
        </td>
        <td>
            <?= $peopleMembership->has('membership') ? $this->Html->link($peopleMembership->membership->name,
            ['controller' => 'Memberships', 'action' => 'view', $peopleMembership->membership->id]) : '' ?>
        </td>
        <td><?= h($peopleMembership->payment) ?></td>
        <td><?= h($peopleMembership->social_service) ?></td>
        <td><?= h($peopleMembership->social_service_comment) ?></td>
        <td class="actions">
            <?= $this->Html->link('', ['action' => 'view', $peopleMembership->id], ['title' => __('View'), 'class' =>
            'btn btn-default glyphicon glyphicon-eye-open']) ?>
            <?= $this->Html->link('', ['action' => 'edit', $peopleMembership->id], ['title' => __('Edit'), 'class' =>
            'btn btn-default glyphicon glyphicon-pencil']) ?>
            <?= $this->Form->postLink('', ['action' => 'delete', $peopleMembership->id], ['confirm' => __('Are you sure
            you want to delete # {0}?', $peopleMembership->id), 'title' => __('Delete'), 'class' => 'btn btn-default
            glyphicon glyphicon-trash']) ?>
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
