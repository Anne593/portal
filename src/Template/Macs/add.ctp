<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');

$this->start('tb_actions');
?>
    <li><?= $this->Html->link(__('List Macs'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('List People'), ['controller' => 'People', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Person'), ['controller' => 'People', 'action' => 'add']) ?> </li>
    <li><?= $this->Html->link(__('List Ips'), ['controller' => 'Ips', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Ip'), ['controller' => 'Ips', 'action' => 'add']) ?> </li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
    <li><?= $this->Html->link(__('List Macs'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('List People'), ['controller' => 'People', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Person'), ['controller' => 'People', 'action' => 'add']) ?> </li>
    <li><?= $this->Html->link(__('List Ips'), ['controller' => 'Ips', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Ip'), ['controller' => 'Ips', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<?= $this->Form->create($mac); ?>
<fieldset>
    <legend><?= __('Add {0}', ['Mac']) ?></legend>
    <?php
    echo $this->Form->input('person_id', ['options' => $people]);
    echo $this->Form->input('mac');
    echo $this->Form->input('device_name');
    ?>
</fieldset>
<?= $this->Form->button(__("Add")); ?>
<?= $this->Form->end() ?>
