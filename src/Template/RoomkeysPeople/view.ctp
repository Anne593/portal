<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');


$this->start('tb_actions');
?>
<li><?= $this->Html->link(__('Edit Roomkeys Person'), ['action' => 'edit', $roomkeysPerson->id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Roomkeys Person'), ['action' => 'delete', $roomkeysPerson->id], ['confirm' => __('Are you sure you want to delete # {0}?', $roomkeysPerson->id)]) ?> </li>
<li><?= $this->Html->link(__('List Roomkeys People'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Roomkeys Person'), ['action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Roomkeys'), ['controller' => 'Roomkeys', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Roomkey'), ['controller' => 'Roomkeys', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List People'), ['controller' => 'People', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Person'), ['controller' => 'People', 'action' => 'add']) ?> </li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
<li><?= $this->Html->link(__('Edit Roomkeys Person'), ['action' => 'edit', $roomkeysPerson->id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Roomkeys Person'), ['action' => 'delete', $roomkeysPerson->id], ['confirm' => __('Are you sure you want to delete # {0}?', $roomkeysPerson->id)]) ?> </li>
<li><?= $this->Html->link(__('List Roomkeys People'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Roomkeys Person'), ['action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Roomkeys'), ['controller' => 'Roomkeys', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Roomkey'), ['controller' => 'Roomkeys', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List People'), ['controller' => 'People', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Person'), ['controller' => 'People', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<div class="panel panel-default">
    <!-- Panel header -->
    <div class="panel-heading">
        <h3 class="panel-title"><?= h($roomkeysPerson->id) ?></h3>
    </div>
    <table class="table table-striped" cellpadding="0" cellspacing="0">
        <tr>
            <td><?= __('Roomkey') ?></td>
            <td><?= $roomkeysPerson->has('roomkey') ? $this->Html->link($roomkeysPerson->roomkey->name, ['controller' => 'Roomkeys', 'action' => 'view', $roomkeysPerson->roomkey->id]) : '' ?></td>
        </tr>
        <tr>
            <td><?= __('Person') ?></td>
            <td><?= $roomkeysPerson->has('person') ? $this->Html->link($roomkeysPerson->person->id, ['controller' => 'People', 'action' => 'view', $roomkeysPerson->person->id]) : '' ?></td>
        </tr>
        <tr>
            <td><?= __('Comment') ?></td>
            <td><?= h($roomkeysPerson->comment) ?></td>
        </tr>
        <tr>
            <td><?= __('Id') ?></td>
            <td><?= $this->Number->format($roomkeysPerson->id) ?></td>
        </tr>
        <tr>
            <td><?= __('Type') ?></td>
            <td><?= $this->Text->autoParagraph(h($roomkeysPerson->type)); ?></td>
        </tr>
    </table>
</div>

