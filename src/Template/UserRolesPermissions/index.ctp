<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New User Roles Permission'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List User Roles'), ['controller' => 'UserRoles', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User Role'), ['controller' => 'UserRoles', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Permissions'), ['controller' => 'Permissions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Permission'), ['controller' => 'Permissions', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="userRolesPermissions index large-9 medium-8 columns content">
    <h3><?= __('User Roles Permissions') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_role_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('permission_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('can_view') ?></th>
                <th scope="col"><?= $this->Paginator->sort('can_edit') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($userRolesPermissions as $userRolesPermission): ?>
            <tr>
                <td><?= $this->Number->format($userRolesPermission->id) ?></td>
                <td><?= $userRolesPermission->has('user_role') ? $this->Html->link($userRolesPermission->user_role->title, ['controller' => 'UserRoles', 'action' => 'view', $userRolesPermission->user_role->id]) : '' ?></td>
                <td><?= $userRolesPermission->has('permission') ? $this->Html->link($userRolesPermission->permission->id, ['controller' => 'Permissions', 'action' => 'view', $userRolesPermission->permission->id]) : '' ?></td>
                <td><?= h($userRolesPermission->can_view) ?></td>
                <td><?= h($userRolesPermission->can_edit) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $userRolesPermission->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $userRolesPermission->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $userRolesPermission->id], ['confirm' => __('Are you sure you want to delete # {0}?', $userRolesPermission->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
