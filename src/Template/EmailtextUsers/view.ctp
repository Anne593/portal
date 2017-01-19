<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');


$this->start('tb_actions');
?>
<li><?= $this->Html->link(__('Edit Emailtext User'), ['action' => 'edit', $emailtextUser->id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Emailtext User'), ['action' => 'delete', $emailtextUser->id], ['confirm' => __('Are you sure you want to delete # {0}?', $emailtextUser->id)]) ?> </li>
<li><?= $this->Html->link(__('List Emailtext Users'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Emailtext User'), ['action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Emailtexts'), ['controller' => 'Emailtexts', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Emailtext'), ['controller' => 'Emailtexts', 'action' => 'add']) ?> </li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
<li><?= $this->Html->link(__('Edit Emailtext User'), ['action' => 'edit', $emailtextUser->id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Emailtext User'), ['action' => 'delete', $emailtextUser->id], ['confirm' => __('Are you sure you want to delete # {0}?', $emailtextUser->id)]) ?> </li>
<li><?= $this->Html->link(__('List Emailtext Users'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Emailtext User'), ['action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Emailtexts'), ['controller' => 'Emailtexts', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Emailtext'), ['controller' => 'Emailtexts', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<div class="panel panel-default">
    <!-- Panel header -->
    <div class="panel-heading">
        <h3 class="panel-title"><?= h($emailtextUser->id) ?></h3>
    </div>
    <table class="table table-striped" cellpadding="0" cellspacing="0">
        <tr>
            <td><?= __('Emailtext') ?></td>
            <td><?= $emailtextUser->has('emailtext') ? $this->Html->link($emailtextUser->emailtext->id, ['controller' => 'Emailtexts', 'action' => 'view', $emailtextUser->emailtext->id]) : '' ?></td>
        </tr>
        <tr>
            <td><?= __('Id') ?></td>
            <td><?= $this->Number->format($emailtextUser->id) ?></td>
        </tr>
        <tr>
            <td><?= __('TypeId') ?></td>
            <td><?= $this->Number->format($emailtextUser->typeId) ?></td>
        </tr>
        <tr>
            <td><?= __('Type') ?></td>
            <td><?= $this->Text->autoParagraph(h($emailtextUser->type)); ?></td>
        </tr>
    </table>
</div>

