<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');


$this->start('tb_actions');
?>
<li><?= $this->Html->link(__('Edit Membership'), ['action' => 'edit', $membership->id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Membership'), ['action' => 'delete', $membership->id], ['confirm' => __('Are you sure you want to delete # {0}?', $membership->id)]) ?> </li>
<li><?= $this->Html->link(__('List Memberships'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Membership'), ['action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List People'), ['controller' => 'People', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Person'), ['controller' => 'People', 'action' => 'add']) ?> </li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
<li><?= $this->Html->link(__('Edit Membership'), ['action' => 'edit', $membership->id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Membership'), ['action' => 'delete', $membership->id], ['confirm' => __('Are you sure you want to delete # {0}?', $membership->id)]) ?> </li>
<li><?= $this->Html->link(__('List Memberships'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Membership'), ['action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List People'), ['controller' => 'People', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Person'), ['controller' => 'People', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<div class="panel panel-default">
    <!-- Panel header -->
    <div class="panel-heading">
        <h3 class="panel-title"><?= h($membership->name) ?></h3>
    </div>
    <table class="table table-striped" cellpadding="0" cellspacing="0">
        <tr>
            <td><?= __('Name') ?></td>
            <td><?= h($membership->name) ?></td>
        </tr>
        <tr>
            <td><?= __('Description') ?></td>
            <td><?= h($membership->description) ?></td>
        </tr>
        <tr>
            <td><?= __('Id') ?></td>
            <td><?= $this->Number->format($membership->id) ?></td>
        </tr>
        <tr>
            <td><?= __('Membership Fee') ?></td>
            <td><?= $this->Number->format($membership->membership_fee) ?></td>
        </tr>
        <tr>
            <td><?= __('Type') ?></td>
            <td><?= $this->Text->autoParagraph(h($membership->type)); ?></td>
        </tr>
    </table>
</div>

<div class="panel panel-default">
    <!-- Panel header -->
    <div class="panel-heading">
        <h3 class="panel-title"><?= __('Related People') ?></h3>
    </div>
    <?php if (!empty($membership->people)): ?>
        <table class="table table-striped">
            <thead>
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Surname') ?></th>
                <th><?= __('Forename') ?></th>
                <th><?= __('Email') ?></th>
                <th><?= __('Birthday') ?></th>
                <th><?= __('Matriculation Number') ?></th>
                <th><?= __('Studentenwerk Identification') ?></th>
                <th><?= __('Nationality') ?></th>
                <th><?= __('Sex') ?></th>
                <th><?= __('Eth Unlocked Primary') ?></th>
                <th><?= __('Password') ?></th>
                <th><?= __('Password Retrieval') ?></th>
                <th><?= __('Status') ?></th>
                <th><?= __('Failed Login Count') ?></th>
                <th><?= __('Failed Login Timestamp') ?></th>
                <th><?= __('Created') ?></th>
                <th><?= __('Modified') ?></th>
                <th><?= __('Last Passwords') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($membership->people as $people): ?>
                <tr>
                    <td><?= h($people->id) ?></td>
                    <td><?= h($people->surname) ?></td>
                    <td><?= h($people->forename) ?></td>
                    <td><?= h($people->email) ?></td>
                    <td><?= h($people->birthday) ?></td>
                    <td><?= h($people->matriculation_number) ?></td>
                    <td><?= h($people->studentenwerk_identification) ?></td>
                    <td><?= h($people->nationality) ?></td>
                    <td><?= h($people->sex) ?></td>
                    <td><?= h($people->eth_unlocked_primary) ?></td>
                    <td><?= h($people->password) ?></td>
                    <td><?= h($people->password_retrieval) ?></td>
                    <td><?= h($people->status) ?></td>
                    <td><?= h($people->failed_login_count) ?></td>
                    <td><?= h($people->failed_login_timestamp) ?></td>
                    <td><?= h($people->created) ?></td>
                    <td><?= h($people->modified) ?></td>
                    <td><?= h($people->last_passwords) ?></td>
                    <td class="actions">
                        <?= $this->Html->link('', ['controller' => 'People', 'action' => 'view', $people->id], ['title' => __('View'), 'class' => 'btn btn-default glyphicon glyphicon-eye-open']) ?>
                        <?= $this->Html->link('', ['controller' => 'People', 'action' => 'edit', $people->id], ['title' => __('Edit'), 'class' => 'btn btn-default glyphicon glyphicon-pencil']) ?>
                        <?= $this->Form->postLink('', ['controller' => 'People', 'action' => 'delete', $people->id], ['confirm' => __('Are you sure you want to delete # {0}?', $people->id), 'title' => __('Delete'), 'class' => 'btn btn-default glyphicon glyphicon-trash']) ?>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p class="panel-body">no related People</p>
    <?php endif; ?>
</div>
