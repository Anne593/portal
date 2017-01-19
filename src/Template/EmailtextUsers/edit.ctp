<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');

$this->start('tb_actions');
?>
    <li><?=
    $this->Form->postLink(
        __('Delete'),
        ['action' => 'delete', $emailtextUser->id],
        ['confirm' => __('Are you sure you want to delete # {0}?', $emailtextUser->id)]
    )
    ?>
    </li>
    <li><?= $this->Html->link(__('List Emailtext Users'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('List Emailtexts'), ['controller' => 'Emailtexts', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Emailtext'), ['controller' => 'Emailtexts', 'action' => 'add']) ?> </li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
    <li><?=
    $this->Form->postLink(
        __('Delete'),
        ['action' => 'delete', $emailtextUser->id],
        ['confirm' => __('Are you sure you want to delete # {0}?', $emailtextUser->id)]
    )
    ?>
    </li>
    <li><?= $this->Html->link(__('List Emailtext Users'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('List Emailtexts'), ['controller' => 'Emailtexts', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Emailtext'), ['controller' => 'Emailtexts', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<?= $this->Form->create($emailtextUser); ?>
<fieldset>
    <legend><?= __('Edit {0}', ['Emailtext User']) ?></legend>
    <?php
    echo $this->Form->input('emailtext_id', ['options' => $emailtexts]);
    echo $this->Form->input('type');
    echo $this->Form->input('typeId');
    ?>
</fieldset>
<?= $this->Form->button(__("Save")); ?>
<?= $this->Form->end() ?>
