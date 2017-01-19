<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');

$this->start('tb_actions');
?>
    <li><?=
    $this->Form->postLink(
        __('Delete'),
        ['action' => 'delete', $workingGroup->id],
        ['confirm' => __('Are you sure you want to delete # {0}?', $workingGroup->id)]
    )
    ?>
    </li>
    <li><?= $this->Html->link(__('List Working Groups'), ['action' => 'index']) ?></li>
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
        ['action' => 'delete', $workingGroup->id],
        ['confirm' => __('Are you sure you want to delete # {0}?', $workingGroup->id)]
    )
    ?>
    </li>
    <li><?= $this->Html->link(__('List Working Groups'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('List People'), ['controller' => 'People', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Person'), ['controller' => 'People', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<?= $this->Form->create($workingGroup); ?>
<fieldset>
    <legend><?= __('Edit {0}', ['Working Group']) ?></legend>
    <?php
    echo $this->Form->input('name');
    echo $this->Form->input('description');
    echo $this->Form->input('people._ids', ['options' => $people]);
    ?>
</fieldset>
<?= $this->Form->button(__("Save")); ?>
<?= $this->Form->end() ?>
