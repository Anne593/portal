<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit People User Role'), ['action' => 'edit', $peopleUserRole->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete People User Role'), ['action' => 'delete', $peopleUserRole->id], ['confirm' => __('Are you sure you want to delete # {0}?', $peopleUserRole->id)]) ?> </li>
        <li><?= $this->Html->link(__('List People User Roles'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New People User Role'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List People'), ['controller' => 'People', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Person'), ['controller' => 'People', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List User Roles'), ['controller' => 'UserRoles', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User Role'), ['controller' => 'UserRoles', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="peopleUserRoles view large-9 medium-8 columns content">
    <h3><?= h($peopleUserRole->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Person') ?></th>
            <td><?= $peopleUserRole->has('person') ? $this->Html->link($peopleUserRole->person->id, ['controller' => 'People', 'action' => 'view', $peopleUserRole->person->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User Role') ?></th>
            <td><?= $peopleUserRole->has('user_role') ? $this->Html->link($peopleUserRole->user_role->title, ['controller' => 'UserRoles', 'action' => 'view', $peopleUserRole->user_role->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($peopleUserRole->id) ?></td>
        </tr>
    </table>
</div>
