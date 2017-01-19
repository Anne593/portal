<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');

$this->start('tb_actions');
?>
    <li><?=
    $this->Form->postLink(
        __('Delete'),
        ['action' => 'delete', $ip->id],
        ['confirm' => __('Are you sure you want to delete # {0}?', $ip->id)]
    )
    ?>
    </li>
    <li><?= $this->Html->link(__('List Ips'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('List Macs'), ['controller' => 'Macs', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Mac'), ['controller' => 'Macs', 'action' => 'add']) ?> </li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
    <li><?=
    $this->Form->postLink(
        __('Delete'),
        ['action' => 'delete', $ip->id],
        ['confirm' => __('Are you sure you want to delete # {0}?', $ip->id)]
    )
    ?>
    </li>
    <li><?= $this->Html->link(__('List Ips'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('List Macs'), ['controller' => 'Macs', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Mac'), ['controller' => 'Macs', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<?= $this->Form->create($ip); ?>
<fieldset>
    <legend><?= __('Edit {0}', ['Ip']) ?></legend>
    <?php
    echo $this->Form->input('mac_id', ['options' => $macs]);
    echo $this->Form->input('ip');
    echo $this->Form->input('lease_start');
    echo $this->Form->input('lease_end');
    ?>
</fieldset>
<?= $this->Form->button(__("Save")); ?>
<?= $this->Form->end() ?>
