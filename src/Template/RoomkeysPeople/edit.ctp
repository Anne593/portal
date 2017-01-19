<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');

$this->start('tb_actions');
?>
    <li><?=
    $this->Form->postLink(
        __('Delete'),
        ['action' => 'delete', $roomkeysPerson->id],
        ['confirm' => __('Are you sure you want to delete # {0}?', $roomkeysPerson->id)]
    )
    ?>
    </li>
    <li><?= $this->Html->link(__('List Roomkeys People'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('List Roomkeys'), ['controller' => 'Roomkeys', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Roomkey'), ['controller' => 'Roomkeys', 'action' => 'add']) ?> </li>
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
        ['action' => 'delete', $roomkeysPerson->id],
        ['confirm' => __('Are you sure you want to delete # {0}?', $roomkeysPerson->id)]
    )
    ?>
    </li>
    <li><?= $this->Html->link(__('List Roomkeys People'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('List Roomkeys'), ['controller' => 'Roomkeys', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Roomkey'), ['controller' => 'Roomkeys', 'action' => 'add']) ?> </li>
    <li><?= $this->Html->link(__('List People'), ['controller' => 'People', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Person'), ['controller' => 'People', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<?= $this->Form->create($roomkeysPerson); ?>
<fieldset>
    <legend><?= __('Edit {0}', ['Roomkeys Person']) ?></legend>
    <?php
    echo $this->Form->input('roomkey_id', ['options' => $roomkeys]);
    echo $this->Form->input('person_id', ['options' => $people]);
    echo $this->Form->input('type');
    echo $this->Form->input('comment');
    ?>
</fieldset>
<?= $this->Form->button(__("Save")); ?>
<?= $this->Form->end() ?>
