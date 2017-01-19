<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');


$this->start('tb_actions');
?>
<li><?= $this->Html->link(__('Edit Model History'), ['action' => 'edit', $modelHistory->id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Model History'), ['action' => 'delete', $modelHistory->id], ['confirm' => __('Are you sure you want to delete # {0}?', $modelHistory->id)]) ?> </li>
<li><?= $this->Html->link(__('List Model History'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Model History'), ['action' => 'add']) ?> </li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
<li><?= $this->Html->link(__('Edit Model History'), ['action' => 'edit', $modelHistory->id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Model History'), ['action' => 'delete', $modelHistory->id], ['confirm' => __('Are you sure you want to delete # {0}?', $modelHistory->id)]) ?> </li>
<li><?= $this->Html->link(__('List Model History'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Model History'), ['action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<div class="panel panel-default">
    <!-- Panel header -->
    <div class="panel-heading">
        <h3 class="panel-title"><?= h($modelHistory->id) ?></h3>
    </div>
    <table class="table table-striped" cellpadding="0" cellspacing="0">
        <tr>
            <td><?= __('Id') ?></td>
            <td><?= h($modelHistory->id) ?></td>
        </tr>
        <tr>
            <td><?= __('Model') ?></td>
            <td><?= h($modelHistory->model) ?></td>
        </tr>
        <tr>
            <td><?= __('Foreign Key') ?></td>
            <td><?= h($modelHistory->foreign_key) ?></td>
        </tr>
        <tr>
            <td><?= __('User Id') ?></td>
            <td><?= h($modelHistory->user_id) ?></td>
        </tr>
        <tr>
            <td><?= __('Action') ?></td>
            <td><?= h($modelHistory->action) ?></td>
        </tr>
        <tr>
            <td><?= __('Context Type') ?></td>
            <td><?= h($modelHistory->context_type) ?></td>
        </tr>
        <tr>
            <td><?= __('Context Slug') ?></td>
            <td><?= h($modelHistory->context_slug) ?></td>
        </tr>
        <tr>
            <td><?= __('Revision') ?></td>
            <td><?= $this->Number->format($modelHistory->revision) ?></td>
        </tr>
        <tr>
            <td><?= __('Created') ?></td>
            <td><?= h($modelHistory->created) ?></td>
        </tr>
        <tr>
            <td><?= __('Data') ?></td>
            <td><?= $this->Text->autoParagraph(h($modelHistory->data)); ?></td>
        </tr>
        <tr>
            <td><?= __('Context') ?></td>
            <td><?= $this->Text->autoParagraph(h($modelHistory->context)); ?></td>
        </tr>
    </table>
</div>

