<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');


$this->start('tb_actions');
?>
<li><?= $this->Html->link(__('Edit Emailtext Group'), ['action' => 'edit', $emailtextGroup->id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Emailtext Group'), ['action' => 'delete', $emailtextGroup->id], ['confirm' => __('Are you sure you want to delete # {0}?', $emailtextGroup->id)]) ?> </li>
<li><?= $this->Html->link(__('List Emailtext Groups'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Emailtext Group'), ['action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Emailtexts'), ['controller' => 'Emailtexts', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Emailtext'), ['controller' => 'Emailtexts', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Groups'), ['controller' => 'Groups', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Group'), ['controller' => 'Groups', 'action' => 'add']) ?> </li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
<li><?= $this->Html->link(__('Edit Emailtext Group'), ['action' => 'edit', $emailtextGroup->id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Emailtext Group'), ['action' => 'delete', $emailtextGroup->id], ['confirm' => __('Are you sure you want to delete # {0}?', $emailtextGroup->id)]) ?> </li>
<li><?= $this->Html->link(__('List Emailtext Groups'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Emailtext Group'), ['action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Emailtexts'), ['controller' => 'Emailtexts', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Emailtext'), ['controller' => 'Emailtexts', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Groups'), ['controller' => 'Groups', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Group'), ['controller' => 'Groups', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<div class="panel panel-default">
    <!-- Panel header -->
    <div class="panel-heading">
        <h3 class="panel-title"><?= h($emailtextGroup->id) ?></h3>
    </div>
    <table class="table table-striped" cellpadding="0" cellspacing="0">
        <tr>
            <td><?= __('Emailtext') ?></td>
            <td><?= $emailtextGroup->has('emailtext') ? $this->Html->link($emailtextGroup->emailtext->id, ['controller' => 'Emailtexts', 'action' => 'view', $emailtextGroup->emailtext->id]) : '' ?></td>
        </tr>
        <tr>
            <td><?= __('Group') ?></td>
            <td><?= $emailtextGroup->has('group') ? $this->Html->link($emailtextGroup->group->name, ['controller' => 'Groups', 'action' => 'view', $emailtextGroup->group->id]) : '' ?></td>
        </tr>
        <tr>
            <td><?= __('Id') ?></td>
            <td><?= $this->Number->format($emailtextGroup->id) ?></td>
        </tr>
    </table>
</div>

