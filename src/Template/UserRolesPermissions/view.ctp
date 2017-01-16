<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit User Roles Permission'), ['action' => 'edit', $userRolesPermission->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete User Roles Permission'), ['action' => 'delete', $userRolesPermission->id], ['confirm' => __('Are you sure you want to delete # {0}?', $userRolesPermission->id)]) ?> </li>
        <li><?= $this->Html->link(__('List User Roles Permissions'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User Roles Permission'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List User Roles'), ['controller' => 'UserRoles', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User Role'), ['controller' => 'UserRoles', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Permissions'), ['controller' => 'Permissions', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Permission'), ['controller' => 'Permissions', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="userRolesPermissions view large-9 medium-8 columns content">
    <h3><?= h($userRolesPermission->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User Role') ?></th>
            <td><?= $userRolesPermission->has('user_role') ? $this->Html->link($userRolesPermission->user_role->title, ['controller' => 'UserRoles', 'action' => 'view', $userRolesPermission->user_role->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Permission') ?></th>
            <td><?= $userRolesPermission->has('permission') ? $this->Html->link($userRolesPermission->permission->id, ['controller' => 'Permissions', 'action' => 'view', $userRolesPermission->permission->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($userRolesPermission->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Can View') ?></th>
            <td><?= $userRolesPermission->can_view ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Can Edit') ?></th>
            <td><?= $userRolesPermission->can_edit ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
</div>
