<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');

$this->start('tb_actions');
?>
    <li><?=
    $this->Form->postLink(
        __('Delete'),
        ['action' => 'delete', $room->id],
        ['confirm' => __('Are you sure you want to delete # {0}?', $room->id)]
    )
    ?>
    </li>
    <li><?= $this->Html->link(__('List Rooms'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('List Tenants'), ['controller' => 'Tenants', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Tenant'), ['controller' => 'Tenants', 'action' => 'add']) ?> </li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
    <li><?=
    $this->Form->postLink(
        __('Delete'),
        ['action' => 'delete', $room->id],
        ['confirm' => __('Are you sure you want to delete # {0}?', $room->id)]
    )
    ?>
    </li>
    <li><?= $this->Html->link(__('List Rooms'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('List Tenants'), ['controller' => 'Tenants', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Tenant'), ['controller' => 'Tenants', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<?= $this->Form->create($room); ?>
<fieldset>
    <legend><?= __('Edit {0}', ['Room']) ?></legend>
    <?php
    echo $this->Form->input('eth_port0');
    echo $this->Form->input('eth_port1');
    echo $this->Form->input('comment');
    ?>
</fieldset>
<?= $this->Form->button(__("Save")); ?>
<?= $this->Form->end() ?>
