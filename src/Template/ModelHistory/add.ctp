<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');

$this->start('tb_actions');
?>
    <li><?= $this->Html->link(__('List Model History'), ['action' => 'index']) ?></li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
    <li><?= $this->Html->link(__('List Model History'), ['action' => 'index']) ?></li>
</ul>
<?php
$this->end();
?>
<?= $this->Form->create($modelHistory); ?>
<fieldset>
    <legend><?= __('Add {0}', ['Model History']) ?></legend>
    <?php
    echo $this->Form->input('model');
    echo $this->Form->input('foreign_key');
    echo $this->Form->input('user_id');
    echo $this->Form->input('action');
    echo $this->Form->input('data');
    echo $this->Form->input('context');
    echo $this->Form->input('context_type');
    echo $this->Form->input('context_slug');
    echo $this->Form->input('revision');
    ?>
</fieldset>
<?= $this->Form->button(__("Add")); ?>
<?= $this->Form->end() ?>
