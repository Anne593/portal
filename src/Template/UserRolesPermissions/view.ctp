<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');


$this->start('tb_actions');
?>
<li><?= $this->Html->link(__('Edit User Roles Permission'), ['action' => 'edit', $userRolesPermission->id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete User Roles Permission'), ['action' => 'delete', $userRolesPermission->id], ['confirm' => __('Are you sure you want to delete # {0}?', $userRolesPermission->id)]) ?> </li>
<li><?= $this->Html->link(__('List User Roles Permissions'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New User Roles Permission'), ['action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List User Roles'), ['controller' => 'UserRoles', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New User Role'), ['controller' => 'UserRoles', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Permissions'), ['controller' => 'Permissions', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Permission'), ['controller' => 'Permissions', 'action' => 'add']) ?> </li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
<li><?= $this->Html->link(__('Edit User Roles Permission'), ['action' => 'edit', $userRolesPermission->id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete User Roles Permission'), ['action' => 'delete', $userRolesPermission->id], ['confirm' => __('Are you sure you want to delete # {0}?', $userRolesPermission->id)]) ?> </li>
<li><?= $this->Html->link(__('List User Roles Permissions'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New User Roles Permission'), ['action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List User Roles'), ['controller' => 'UserRoles', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New User Role'), ['controller' => 'UserRoles', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Permissions'), ['controller' => 'Permissions', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Permission'), ['controller' => 'Permissions', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<div class="panel panel-default">
    <!-- Panel header -->
    <div class="panel-heading">
        <h3 class="panel-title"><?= h($userRolesPermission->id) ?></h3>
    </div>
    <table class="table table-striped" cellpadding="0" cellspacing="0">
        <tr>
            <td><?= __('User Role') ?></td>
            <td><?= $userRolesPermission->has('user_role') ? $this->Html->link($userRolesPermission->user_role->title, ['controller' => 'UserRoles', 'action' => 'view', $userRolesPermission->user_role->id]) : '' ?></td>
        </tr>
        <tr>
            <td><?= __('Permission') ?></td>
            <td><?= $userRolesPermission->has('permission') ? $this->Html->link($userRolesPermission->permission->id, ['controller' => 'Permissions', 'action' => 'view', $userRolesPermission->permission->id]) : '' ?></td>
        </tr>
        <tr>
            <td><?= __('Id') ?></td>
            <td><?= $this->Number->format($userRolesPermission->id) ?></td>
        </tr>
        <tr>
            <td><?= __('Can View') ?></td>
            <td><?= $userRolesPermission->can_view ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <td><?= __('Can Edit') ?></td>
            <td><?= $userRolesPermission->can_edit ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
</div>

