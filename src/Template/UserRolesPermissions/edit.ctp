<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');

$this->start('tb_actions');
?>
    <li><?=
    $this->Form->postLink(
        __('Delete'),
        ['action' => 'delete', $userRolesPermission->id],
        ['confirm' => __('Are you sure you want to delete # {0}?', $userRolesPermission->id)]
    )
    ?>
    </li>
    <li><?= $this->Html->link(__('List User Roles Permissions'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('List User Roles'), ['controller' => 'UserRoles', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New User Role'), ['controller' => 'UserRoles', 'action' => 'add']) ?> </li>
    <li><?= $this->Html->link(__('List Permissions'), ['controller' => 'Permissions', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Permission'), ['controller' => 'Permissions', 'action' => 'add']) ?> </li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
    <li><?=
    $this->Form->postLink(
        __('Delete'),
        ['action' => 'delete', $userRolesPermission->id],
        ['confirm' => __('Are you sure you want to delete # {0}?', $userRolesPermission->id)]
    )
    ?>
    </li>
    <li><?= $this->Html->link(__('List User Roles Permissions'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('List User Roles'), ['controller' => 'UserRoles', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New User Role'), ['controller' => 'UserRoles', 'action' => 'add']) ?> </li>
    <li><?= $this->Html->link(__('List Permissions'), ['controller' => 'Permissions', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Permission'), ['controller' => 'Permissions', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<?= $this->Form->create($userRolesPermission); ?>
<fieldset>
    <legend><?= __('Edit {0}', ['User Roles Permission']) ?></legend>
    <?php
    echo $this->Form->input('user_role_id', ['options' => $userRoles]);
    echo $this->Form->input('permission_id', ['options' => $permissions]);
    echo $this->Form->input('can_view');
    echo $this->Form->input('can_edit');
    ?>
</fieldset>
<?= $this->Form->button(__("Save")); ?>
<?= $this->Form->end() ?>
