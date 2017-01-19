<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');


$this->start('tb_actions');
?>
<li><?= $this->Html->link(__('Edit Ip'), ['action' => 'edit', $ip->id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Ip'), ['action' => 'delete', $ip->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ip->id)]) ?> </li>
<li><?= $this->Html->link(__('List Ips'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Ip'), ['action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Macs'), ['controller' => 'Macs', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Mac'), ['controller' => 'Macs', 'action' => 'add']) ?> </li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
<li><?= $this->Html->link(__('Edit Ip'), ['action' => 'edit', $ip->id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Ip'), ['action' => 'delete', $ip->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ip->id)]) ?> </li>
<li><?= $this->Html->link(__('List Ips'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Ip'), ['action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Macs'), ['controller' => 'Macs', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Mac'), ['controller' => 'Macs', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<div class="panel panel-default">
    <!-- Panel header -->
    <div class="panel-heading">
        <h3 class="panel-title"><?= h($ip->id) ?></h3>
    </div>
    <table class="table table-striped" cellpadding="0" cellspacing="0">
        <tr>
            <td><?= __('Mac') ?></td>
            <td><?= $ip->has('mac') ? $this->Html->link($ip->mac->id, ['controller' => 'Macs', 'action' => 'view', $ip->mac->id]) : '' ?></td>
        </tr>
        <tr>
            <td><?= __('Ip') ?></td>
            <td><?= h($ip->ip) ?></td>
        </tr>
        <tr>
            <td><?= __('Id') ?></td>
            <td><?= $this->Number->format($ip->id) ?></td>
        </tr>
        <tr>
            <td><?= __('Lease Start') ?></td>
            <td><?= h($ip->lease_start) ?></td>
        </tr>
        <tr>
            <td><?= __('Lease End') ?></td>
            <td><?= h($ip->lease_end) ?></td>
        </tr>
    </table>
</div>

