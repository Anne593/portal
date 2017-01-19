<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');


$this->start('tb_actions');
?>
<li><?= $this->Html->link(__('Edit People User Role'), ['action' => 'edit', $peopleUserRole->id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete People User Role'), ['action' => 'delete', $peopleUserRole->id], ['confirm' => __('Are you sure you want to delete # {0}?', $peopleUserRole->id)]) ?> </li>
<li><?= $this->Html->link(__('List People User Roles'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New People User Role'), ['action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List People'), ['controller' => 'People', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Person'), ['controller' => 'People', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List User Roles'), ['controller' => 'UserRoles', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New User Role'), ['controller' => 'UserRoles', 'action' => 'add']) ?> </li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
<li><?= $this->Html->link(__('Edit People User Role'), ['action' => 'edit', $peopleUserRole->id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete People User Role'), ['action' => 'delete', $peopleUserRole->id], ['confirm' => __('Are you sure you want to delete # {0}?', $peopleUserRole->id)]) ?> </li>
<li><?= $this->Html->link(__('List People User Roles'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New People User Role'), ['action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List People'), ['controller' => 'People', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Person'), ['controller' => 'People', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List User Roles'), ['controller' => 'UserRoles', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New User Role'), ['controller' => 'UserRoles', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<div class="panel panel-default">
    <!-- Panel header -->
    <div class="panel-heading">
        <h3 class="panel-title"><?= h($peopleUserRole->id) ?></h3>
    </div>
    <table class="table table-striped" cellpadding="0" cellspacing="0">
        <tr>
            <td><?= __('Person') ?></td>
            <td><?= $peopleUserRole->has('person') ? $this->Html->link($peopleUserRole->person->id, ['controller' => 'People', 'action' => 'view', $peopleUserRole->person->id]) : '' ?></td>
        </tr>
        <tr>
            <td><?= __('User Role') ?></td>
            <td><?= $peopleUserRole->has('user_role') ? $this->Html->link($peopleUserRole->user_role->title, ['controller' => 'UserRoles', 'action' => 'view', $peopleUserRole->user_role->id]) : '' ?></td>
        </tr>
        <tr>
            <td><?= __('Id') ?></td>
            <td><?= $this->Number->format($peopleUserRole->id) ?></td>
        </tr>
    </table>
</div>

