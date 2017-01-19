<?php
/* @var $this \Cake\View\View */
$this->extend('../Layout/TwitterBootstrap/dashboard');
$this->start('tb_actions');
?>
    <li><?= $this->Html->link(__('New People User Role'), ['action' => 'add']); ?></li>
    <li><?= $this->Html->link(__('List People'), ['controller' => 'People', 'action' => 'index']); ?></li>
    <li><?= $this->Html->link(__('New Person'), ['controller' => 'People', 'action' => 'add']); ?></li>
    <li><?= $this->Html->link(__('List UserRoles'), ['controller' => 'UserRoles', 'action' => 'index']); ?></li>
    <li><?= $this->Html->link(__('New User Role'), ['controller' => 'UserRoles', 'action' => 'add']); ?></li>
<?php $this->end(); ?>
<?php $this->assign('tb_sidebar', '<ul class="nav nav-sidebar">' . $this->fetch('tb_actions') . '</ul>'); ?>

<table class="table table-striped" cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id'); ?></th>
            <th><?= $this->Paginator->sort('person_id'); ?></th>
            <th><?= $this->Paginator->sort('user_role_id'); ?></th>
            <th class="actions"><?= __('Actions'); ?></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($peopleUserRoles as $peopleUserRole): ?>
        <tr>
            <td><?= $this->Number->format($peopleUserRole->id) ?></td>
            <td>
                <?= $peopleUserRole->has('person') ? $this->Html->link($peopleUserRole->person->id, ['controller' => 'People', 'action' => 'view', $peopleUserRole->person->id]) : '' ?>
            </td>
            <td>
                <?= $peopleUserRole->has('user_role') ? $this->Html->link($peopleUserRole->user_role->title, ['controller' => 'UserRoles', 'action' => 'view', $peopleUserRole->user_role->id]) : '' ?>
            </td>
            <td class="actions">
                <?= $this->Html->link('', ['action' => 'view', $peopleUserRole->id], ['title' => __('View'), 'class' => 'btn btn-default glyphicon glyphicon-eye-open']) ?>
                <?= $this->Html->link('', ['action' => 'edit', $peopleUserRole->id], ['title' => __('Edit'), 'class' => 'btn btn-default glyphicon glyphicon-pencil']) ?>
                <?= $this->Form->postLink('', ['action' => 'delete', $peopleUserRole->id], ['confirm' => __('Are you sure you want to delete # {0}?', $peopleUserRole->id), 'title' => __('Delete'), 'class' => 'btn btn-default glyphicon glyphicon-trash']) ?>
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
