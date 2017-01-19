<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');


$this->start('tb_actions');
?>
<li><?= $this->Html->link(__('Edit Fileserver User'), ['action' => 'edit', $fileserverUser->id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Fileserver User'), ['action' => 'delete', $fileserverUser->id], ['confirm' => __('Are you sure you want to delete # {0}?', $fileserverUser->id)]) ?> </li>
<li><?= $this->Html->link(__('List Fileserver Users'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Fileserver User'), ['action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List People'), ['controller' => 'People', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Person'), ['controller' => 'People', 'action' => 'add']) ?> </li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
<li><?= $this->Html->link(__('Edit Fileserver User'), ['action' => 'edit', $fileserverUser->id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Fileserver User'), ['action' => 'delete', $fileserverUser->id], ['confirm' => __('Are you sure you want to delete # {0}?', $fileserverUser->id)]) ?> </li>
<li><?= $this->Html->link(__('List Fileserver Users'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Fileserver User'), ['action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List People'), ['controller' => 'People', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Person'), ['controller' => 'People', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<div class="panel panel-default">
    <!-- Panel header -->
    <div class="panel-heading">
        <h3 class="panel-title"><?= h($fileserverUser->id) ?></h3>
    </div>
    <table class="table table-striped" cellpadding="0" cellspacing="0">
        <tr>
            <td><?= __('Person') ?></td>
            <td><?= $fileserverUser->has('person') ? $this->Html->link($fileserverUser->person->id, ['controller' => 'People', 'action' => 'view', $fileserverUser->person->id]) : '' ?></td>
        </tr>
        <tr>
            <td><?= __('Username') ?></td>
            <td><?= h($fileserverUser->username) ?></td>
        </tr>
        <tr>
            <td><?= __('Password') ?></td>
            <td><?= h($fileserverUser->password) ?></td>
        </tr>
        <tr>
            <td><?= __('Id') ?></td>
            <td><?= $this->Number->format($fileserverUser->id) ?></td>
        </tr>
        <tr>
            <td><?= __('Password Retrieval') ?></td>
            <td><?= $this->Number->format($fileserverUser->password_retrieval) ?></td>
        </tr>
        <tr>
            <td><?= __('Created') ?></td>
            <td><?= h($fileserverUser->created) ?></td>
        </tr>
        <tr>
            <td><?= __('Vip') ?></td>
            <td><?= $fileserverUser->vip ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <td><?= __('Accepted') ?></td>
            <td><?= $fileserverUser->accepted ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <td><?= __('Active') ?></td>
            <td><?= $fileserverUser->active ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
</div>

