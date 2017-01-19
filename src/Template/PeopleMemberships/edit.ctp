<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');

$this->start('tb_actions');
?>
    <li><?=
    $this->Form->postLink(
        __('Delete'),
        ['action' => 'delete', $peopleMembership->id],
        ['confirm' => __('Are you sure you want to delete # {0}?', $peopleMembership->id)]
    )
    ?>
    </li>
    <li><?= $this->Html->link(__('List People Memberships'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('List People'), ['controller' => 'People', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Person'), ['controller' => 'People', 'action' => 'add']) ?> </li>
    <li><?= $this->Html->link(__('List Memberships'), ['controller' => 'Memberships', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Membership'), ['controller' => 'Memberships', 'action' => 'add']) ?> </li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
    <li><?=
    $this->Form->postLink(
        __('Delete'),
        ['action' => 'delete', $peopleMembership->id],
        ['confirm' => __('Are you sure you want to delete # {0}?', $peopleMembership->id)]
    )
    ?>
    </li>
    <li><?= $this->Html->link(__('List People Memberships'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('List People'), ['controller' => 'People', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Person'), ['controller' => 'People', 'action' => 'add']) ?> </li>
    <li><?= $this->Html->link(__('List Memberships'), ['controller' => 'Memberships', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Membership'), ['controller' => 'Memberships', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<?= $this->Form->create($peopleMembership); ?>
<fieldset>
    <legend><?= __('Edit {0}', ['People Membership']) ?></legend>
    <?php
    echo $this->Form->input('semester');
    echo $this->Form->input('person_id', ['options' => $people]);
    echo $this->Form->input('membership_id', ['options' => $memberships]);
    echo $this->Form->input('payment');
    echo $this->Form->input('social_service');
    echo $this->Form->input('social_service_comment');
    echo $this->Form->input('comment');
    ?>
</fieldset>
<?= $this->Form->button(__("Save")); ?>
<?= $this->Form->end() ?>
