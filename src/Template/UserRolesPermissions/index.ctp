<?php
/* @var $this \Cake\View\View */
$this->extend('../Layout/TwitterBootstrap/dashboard');
$this->start('tb_actions');
?>
    <li><?= $this->Html->link(__('New User Roles Permission'), ['action' => 'add']); ?></li>
    <li><?= $this->Html->link(__('List UserRoles'), ['controller' => 'UserRoles', 'action' => 'index']); ?></li>
    <li><?= $this->Html->link(__('New User Role'), ['controller' => 'UserRoles', 'action' => 'add']); ?></li>
    <li><?= $this->Html->link(__('List Permissions'), ['controller' => 'Permissions', 'action' => 'index']); ?></li>
    <li><?= $this->Html->link(__('New Permission'), ['controller' => 'Permissions', 'action' => 'add']); ?></li>
<?php $this->end(); ?>
<?php $this->assign('tb_sidebar', '<ul class="nav nav-sidebar">' . $this->fetch('tb_actions') . '</ul>'); ?>

<table class="table table-striped" cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id'); ?></th>
            <th><?= $this->Paginator->sort('user_role_id'); ?></th>
            <th><?= $this->Paginator->sort('permission_id'); ?></th>
            <th><?= $this->Paginator->sort('can_view'); ?></th>
            <th><?= $this->Paginator->sort('can_edit'); ?></th>
            <th class="actions"><?= __('Actions'); ?></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($userRolesPermissions as $userRolesPermission): ?>
        <tr>
            <td><?= $this->Number->format($userRolesPermission->id) ?></td>
            <td>
                <?= $userRolesPermission->has('user_role') ? $this->Html->link($userRolesPermission->user_role->title, ['controller' => 'UserRoles', 'action' => 'view', $userRolesPermission->user_role->id]) : '' ?>
            </td>
            <td>
                <?= $userRolesPermission->has('permission') ? $this->Html->link($userRolesPermission->permission->id, ['controller' => 'Permissions', 'action' => 'view', $userRolesPermission->permission->id]) : '' ?>
            </td>
            <td><?= h($userRolesPermission->can_view) ?></td>
            <td><?= h($userRolesPermission->can_edit) ?></td>
            <td class="actions">
                <?= $this->Html->link('', ['action' => 'view', $userRolesPermission->id], ['title' => __('View'), 'class' => 'btn btn-default glyphicon glyphicon-eye-open']) ?>
                <?= $this->Html->link('', ['action' => 'edit', $userRolesPermission->id], ['title' => __('Edit'), 'class' => 'btn btn-default glyphicon glyphicon-pencil']) ?>
                <?= $this->Form->postLink('', ['action' => 'delete', $userRolesPermission->id], ['confirm' => __('Are you sure you want to delete # {0}?', $userRolesPermission->id), 'title' => __('Delete'), 'class' => 'btn btn-default glyphicon glyphicon-trash']) ?>
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
