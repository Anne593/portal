<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');

$this->start('tb_actions');
?>
    <li><?=
    $this->Form->postLink(
        __('Delete'),
        ['action' => 'delete', $roomkey->id],
        ['confirm' => __('Are you sure you want to delete # {0}?', $roomkey->id)]
    )
    ?>
    </li>
    <li><?= $this->Html->link(__('List Roomkeys'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('List People'), ['controller' => 'People', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Person'), ['controller' => 'People', 'action' => 'add']) ?> </li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
    <li><?=
    $this->Form->postLink(
        __('Delete'),
        ['action' => 'delete', $roomkey->id],
        ['confirm' => __('Are you sure you want to delete # {0}?', $roomkey->id)]
    )
    ?>
    </li>
    <li><?= $this->Html->link(__('List Roomkeys'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('List People'), ['controller' => 'People', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Person'), ['controller' => 'People', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<?= $this->Form->create($roomkey); ?>
<fieldset>
    <legend><?= __('Edit {0}', ['Roomkey']) ?></legend>
    <?php
    echo $this->Form->input('name');
    echo $this->Form->input('discription');
    echo $this->Form->input('amount');
    echo $this->Form->input('people._ids', ['options' => $people]);
    ?>
</fieldset>
<?= $this->Form->button(__("Save")); ?>
<?= $this->Form->end() ?>
