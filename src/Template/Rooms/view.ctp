<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');


$this->start('tb_actions');
?>
<li><?= $this->Html->link(__('Edit Room'), ['action' => 'edit', $room->id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Room'), ['action' => 'delete', $room->id], ['confirm' => __('Are you sure you want to delete # {0}?', $room->id)]) ?> </li>
<li><?= $this->Html->link(__('List Rooms'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Room'), ['action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Tenants'), ['controller' => 'Tenants', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Tenant'), ['controller' => 'Tenants', 'action' => 'add']) ?> </li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
<li><?= $this->Html->link(__('Edit Room'), ['action' => 'edit', $room->id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Room'), ['action' => 'delete', $room->id], ['confirm' => __('Are you sure you want to delete # {0}?', $room->id)]) ?> </li>
<li><?= $this->Html->link(__('List Rooms'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Room'), ['action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Tenants'), ['controller' => 'Tenants', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Tenant'), ['controller' => 'Tenants', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<div class="panel panel-default">
    <!-- Panel header -->
    <div class="panel-heading">
        <h3 class="panel-title"><?= h($room->id) ?></h3>
    </div>
    <table class="table table-striped" cellpadding="0" cellspacing="0">
        <tr>
            <td><?= __('Comment') ?></td>
            <td><?= h($room->comment) ?></td>
        </tr>
        <tr>
            <td><?= __('Id') ?></td>
            <td><?= $this->Number->format($room->id) ?></td>
        </tr>
        <tr>
            <td><?= __('Eth Port0') ?></td>
            <td><?= $this->Number->format($room->eth_port0) ?></td>
        </tr>
        <tr>
            <td><?= __('Eth Port1') ?></td>
            <td><?= $this->Number->format($room->eth_port1) ?></td>
        </tr>
    </table>
</div>

<div class="panel panel-default">
    <!-- Panel header -->
    <div class="panel-heading">
        <h3 class="panel-title"><?= __('Related Tenants') ?></h3>
    </div>
    <?php if (!empty($room->tenants)): ?>
        <table class="table table-striped">
            <thead>
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Person Id') ?></th>
                <th><?= __('Room Id') ?></th>
                <th><?= __('Date Move In') ?></th>
                <th><?= __('Date Move Out') ?></th>
                <th><?= __('Tenant Type') ?></th>
                <th><?= __('Comment') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($room->tenants as $tenants): ?>
                <tr>
                    <td><?= h($tenants->id) ?></td>
                    <td><?= h($tenants->person_id) ?></td>
                    <td><?= h($tenants->room_id) ?></td>
                    <td><?= h($tenants->date_move_in) ?></td>
                    <td><?= h($tenants->date_move_out) ?></td>
                    <td><?= h($tenants->tenant_type) ?></td>
                    <td><?= h($tenants->comment) ?></td>
                    <td class="actions">
                        <?= $this->Html->link('', ['controller' => 'Tenants', 'action' => 'view', $tenants->id], ['title' => __('View'), 'class' => 'btn btn-default glyphicon glyphicon-eye-open']) ?>
                        <?= $this->Html->link('', ['controller' => 'Tenants', 'action' => 'edit', $tenants->id], ['title' => __('Edit'), 'class' => 'btn btn-default glyphicon glyphicon-pencil']) ?>
                        <?= $this->Form->postLink('', ['controller' => 'Tenants', 'action' => 'delete', $tenants->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tenants->id), 'title' => __('Delete'), 'class' => 'btn btn-default glyphicon glyphicon-trash']) ?>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p class="panel-body">no related Tenants</p>
    <?php endif; ?>
</div>
