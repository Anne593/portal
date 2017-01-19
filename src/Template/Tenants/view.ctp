<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');


$this->start('tb_actions');
?>
<li><?= $this->Html->link(__('Edit Tenant'), ['action' => 'edit', $tenant->id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Tenant'), ['action' => 'delete', $tenant->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tenant->id)]) ?> </li>
<li><?= $this->Html->link(__('List Tenants'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Tenant'), ['action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List People'), ['controller' => 'People', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Person'), ['controller' => 'People', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Rooms'), ['controller' => 'Rooms', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Room'), ['controller' => 'Rooms', 'action' => 'add']) ?> </li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
<li><?= $this->Html->link(__('Edit Tenant'), ['action' => 'edit', $tenant->id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Tenant'), ['action' => 'delete', $tenant->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tenant->id)]) ?> </li>
<li><?= $this->Html->link(__('List Tenants'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Tenant'), ['action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List People'), ['controller' => 'People', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Person'), ['controller' => 'People', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Rooms'), ['controller' => 'Rooms', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Room'), ['controller' => 'Rooms', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<div class="panel panel-default">
    <!-- Panel header -->
    <div class="panel-heading">
        <h3 class="panel-title"><?= h($tenant->id) ?></h3>
    </div>
    <table class="table table-striped" cellpadding="0" cellspacing="0">
        <tr>
            <td><?= __('Person') ?></td>
            <td><?= $tenant->has('person') ? $this->Html->link($tenant->person->id, ['controller' => 'People', 'action' => 'view', $tenant->person->id]) : '' ?></td>
        </tr>
        <tr>
            <td><?= __('Room') ?></td>
            <td><?= $tenant->has('room') ? $this->Html->link($tenant->room->id, ['controller' => 'Rooms', 'action' => 'view', $tenant->room->id]) : '' ?></td>
        </tr>
        <tr>
            <td><?= __('Comment') ?></td>
            <td><?= h($tenant->comment) ?></td>
        </tr>
        <tr>
            <td><?= __('Id') ?></td>
            <td><?= $this->Number->format($tenant->id) ?></td>
        </tr>
        <tr>
            <td><?= __('Date Move In') ?></td>
            <td><?= h($tenant->date_move_in) ?></td>
        </tr>
        <tr>
            <td><?= __('Date Move Out') ?></td>
            <td><?= h($tenant->date_move_out) ?></td>
        </tr>
        <tr>
            <td><?= __('Tenant Type') ?></td>
            <td><?= $this->Text->autoParagraph(h($tenant->tenant_type)); ?></td>
        </tr>
    </table>
</div>

