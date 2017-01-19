<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');

$this->start('tb_actions');
?>
    <li><?= $this->Html->link(__('List Ips'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('List Macs'), ['controller' => 'Macs', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Mac'), ['controller' => 'Macs', 'action' => 'add']) ?> </li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
    <li><?= $this->Html->link(__('List Ips'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('List Macs'), ['controller' => 'Macs', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Mac'), ['controller' => 'Macs', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<?= $this->Form->create($ip); ?>
<fieldset>
    <legend><?= __('Add {0}', ['Ip']) ?></legend>
    <?php
    echo $this->Form->input('mac_id', ['options' => $macs]);
    echo $this->Form->input('ip');
    echo $this->Form->input('lease_start');
    echo $this->Form->input('lease_end');
    ?>
</fieldset>
<?= $this->Form->button(__("Add")); ?>
<?= $this->Form->end() ?>
