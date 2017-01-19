<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');

$this->start('tb_actions');
?>
    <li><?=
    $this->Form->postLink(
        __('Delete'),
        ['action' => 'delete', $emailtextGroup->id],
        ['confirm' => __('Are you sure you want to delete # {0}?', $emailtextGroup->id)]
    )
    ?>
    </li>
    <li><?= $this->Html->link(__('List Emailtext Groups'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('List Emailtexts'), ['controller' => 'Emailtexts', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Emailtext'), ['controller' => 'Emailtexts', 'action' => 'add']) ?> </li>
    <li><?= $this->Html->link(__('List Groups'), ['controller' => 'Groups', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Group'), ['controller' => 'Groups', 'action' => 'add']) ?> </li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
    <li><?=
    $this->Form->postLink(
        __('Delete'),
        ['action' => 'delete', $emailtextGroup->id],
        ['confirm' => __('Are you sure you want to delete # {0}?', $emailtextGroup->id)]
    )
    ?>
    </li>
    <li><?= $this->Html->link(__('List Emailtext Groups'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('List Emailtexts'), ['controller' => 'Emailtexts', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Emailtext'), ['controller' => 'Emailtexts', 'action' => 'add']) ?> </li>
    <li><?= $this->Html->link(__('List Groups'), ['controller' => 'Groups', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Group'), ['controller' => 'Groups', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<?= $this->Form->create($emailtextGroup); ?>
<fieldset>
    <legend><?= __('Edit {0}', ['Emailtext Group']) ?></legend>
    <?php
    echo $this->Form->input('emailtext_id', ['options' => $emailtexts]);
    echo $this->Form->input('group_id', ['options' => $groups]);
    ?>
</fieldset>
<?= $this->Form->button(__("Save")); ?>
<?= $this->Form->end() ?>
