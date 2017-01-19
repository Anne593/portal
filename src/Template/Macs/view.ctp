<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');


$this->start('tb_actions');
?>
<li><?= $this->Html->link(__('Edit Mac'), ['action' => 'edit', $mac->id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Mac'), ['action' => 'delete', $mac->id], ['confirm' => __('Are you sure you want to delete # {0}?', $mac->id)]) ?> </li>
<li><?= $this->Html->link(__('List Macs'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Mac'), ['action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List People'), ['controller' => 'People', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Person'), ['controller' => 'People', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Ips'), ['controller' => 'Ips', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Ip'), ['controller' => 'Ips', 'action' => 'add']) ?> </li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
<li><?= $this->Html->link(__('Edit Mac'), ['action' => 'edit', $mac->id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Mac'), ['action' => 'delete', $mac->id], ['confirm' => __('Are you sure you want to delete # {0}?', $mac->id)]) ?> </li>
<li><?= $this->Html->link(__('List Macs'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Mac'), ['action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List People'), ['controller' => 'People', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Person'), ['controller' => 'People', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Ips'), ['controller' => 'Ips', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Ip'), ['controller' => 'Ips', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<div class="panel panel-default">
    <!-- Panel header -->
    <div class="panel-heading">
        <h3 class="panel-title"><?= h($mac->id) ?></h3>
    </div>
    <table class="table table-striped" cellpadding="0" cellspacing="0">
        <tr>
            <td><?= __('Person') ?></td>
            <td><?= $mac->has('person') ? $this->Html->link($mac->person->id, ['controller' => 'People', 'action' => 'view', $mac->person->id]) : '' ?></td>
        </tr>
        <tr>
            <td><?= __('Mac') ?></td>
            <td><?= h($mac->mac) ?></td>
        </tr>
        <tr>
            <td><?= __('Device Name') ?></td>
            <td><?= h($mac->device_name) ?></td>
        </tr>
        <tr>
            <td><?= __('Id') ?></td>
            <td><?= $this->Number->format($mac->id) ?></td>
        </tr>
    </table>
</div>

<div class="panel panel-default">
    <!-- Panel header -->
    <div class="panel-heading">
        <h3 class="panel-title"><?= __('Related Ips') ?></h3>
    </div>
    <?php if (!empty($mac->ips)): ?>
        <table class="table table-striped">
            <thead>
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Mac Id') ?></th>
                <th><?= __('Ip') ?></th>
                <th><?= __('Lease Start') ?></th>
                <th><?= __('Lease End') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($mac->ips as $ips): ?>
                <tr>
                    <td><?= h($ips->id) ?></td>
                    <td><?= h($ips->mac_id) ?></td>
                    <td><?= h($ips->ip) ?></td>
                    <td><?= h($ips->lease_start) ?></td>
                    <td><?= h($ips->lease_end) ?></td>
                    <td class="actions">
                        <?= $this->Html->link('', ['controller' => 'Ips', 'action' => 'view', $ips->id], ['title' => __('View'), 'class' => 'btn btn-default glyphicon glyphicon-eye-open']) ?>
                        <?= $this->Html->link('', ['controller' => 'Ips', 'action' => 'edit', $ips->id], ['title' => __('Edit'), 'class' => 'btn btn-default glyphicon glyphicon-pencil']) ?>
                        <?= $this->Form->postLink('', ['controller' => 'Ips', 'action' => 'delete', $ips->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ips->id), 'title' => __('Delete'), 'class' => 'btn btn-default glyphicon glyphicon-trash']) ?>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p class="panel-body">no related Ips</p>
    <?php endif; ?>
</div>
