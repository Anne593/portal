<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');


$this->start('tb_actions');
?>
<li><?= $this->Html->link(__('Edit People Membership'), ['action' => 'edit', $peopleMembership->id]) ?></li>
<li><?= $this->Form->postLink(__('Delete People Membership'), ['action' => 'delete', $peopleMembership->id], ['confirm'
    => __('Are you sure you want to delete # {0}?', $peopleMembership->id)]) ?>
</li>
<li><?= $this->Html->link(__('List People Memberships'), ['action' => 'index']) ?></li>
<li><?= $this->Html->link(__('New People Membership'), ['action' => 'add']) ?></li>
<li><?= $this->Html->link(__('List People'), ['controller' => 'People', 'action' => 'index']) ?></li>
<li><?= $this->Html->link(__('New Person'), ['controller' => 'People', 'action' => 'add']) ?></li>
<li><?= $this->Html->link(__('List Memberships'), ['controller' => 'Memberships', 'action' => 'index']) ?></li>
<li><?= $this->Html->link(__('New Membership'), ['controller' => 'Memberships', 'action' => 'add']) ?></li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
    <li><?= $this->Html->link(__('Edit People Membership'), ['action' => 'edit', $peopleMembership->id]) ?></li>
    <li><?= $this->Form->postLink(__('Delete People Membership'), ['action' => 'delete', $peopleMembership->id],
        ['confirm' => __('Are you sure you want to delete # {0}?', $peopleMembership->id)]) ?>
    </li>
    <li><?= $this->Html->link(__('List People Memberships'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('New People Membership'), ['action' => 'add']) ?></li>
    <li><?= $this->Html->link(__('List People'), ['controller' => 'People', 'action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('New Person'), ['controller' => 'People', 'action' => 'add']) ?></li>
    <li><?= $this->Html->link(__('List Memberships'), ['controller' => 'Memberships', 'action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('New Membership'), ['controller' => 'Memberships', 'action' => 'add']) ?></li>
</ul>
<?php
$this->end();
?>
<div class="panel panel-default">
    <!-- Panel header -->
    <div class="panel-heading">
        <h3 class="panel-title"><?= h($peopleMembership->id) ?></h3>
    </div>
    <table class="table table-striped" cellpadding="0" cellspacing="0">
        <tr>
            <td><?= __('Person') ?></td>
            <td><?= $peopleMembership->has('person') ? $this->Html->link($peopleMembership->person->id, ['controller' =>
                'People', 'action' => 'view', $peopleMembership->person->id]) : '' ?>
            </td>
        </tr>
        <tr>
            <td><?= __('Membership') ?></td>
            <td><?= $peopleMembership->has('membership') ? $this->Html->link($peopleMembership->membership->name,
                ['controller' => 'Memberships', 'action' => 'view', $peopleMembership->membership->id]) : '' ?>
            </td>
        </tr>
        <tr>
            <td><?= __('Social Service Comment') ?></td>
            <td><?= h($peopleMembership->social_service_comment) ?></td>
        </tr>
        <tr>
            <td><?= __('Comment') ?></td>
            <td><?= h($peopleMembership->comment) ?></td>
        </tr>
        <tr>
            <td><?= __('Id') ?></td>
            <td><?= $this->Number->format($peopleMembership->id) ?></td>
        </tr>
        <tr>
            <td><?= __('Semester') ?></td>
            <td><?= $this->Number->format($peopleMembership->semester) ?></td>
        </tr>
        <tr>
            <td><?= __('Payment') ?></td>
            <td><?= $peopleMembership->payment ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <td><?= __('Social Service') ?></td>
            <td><?= $peopleMembership->social_service ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
</div>

