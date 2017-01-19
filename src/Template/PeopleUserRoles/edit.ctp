<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');

$this->start('tb_actions');
?>
    <li><?=
    $this->Form->postLink(
        __('Delete'),
        ['action' => 'delete', $peopleUserRole->id],
        ['confirm' => __('Are you sure you want to delete # {0}?', $peopleUserRole->id)]
    )
    ?>
    </li>
    <li><?= $this->Html->link(__('List People User Roles'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('List People'), ['controller' => 'People', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Person'), ['controller' => 'People', 'action' => 'add']) ?> </li>
    <li><?= $this->Html->link(__('List User Roles'), ['controller' => 'UserRoles', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New User Role'), ['controller' => 'UserRoles', 'action' => 'add']) ?> </li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
    <li><?=
    $this->Form->postLink(
        __('Delete'),
        ['action' => 'delete', $peopleUserRole->id],
        ['confirm' => __('Are you sure you want to delete # {0}?', $peopleUserRole->id)]
    )
    ?>
    </li>
    <li><?= $this->Html->link(__('List People User Roles'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('List People'), ['controller' => 'People', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Person'), ['controller' => 'People', 'action' => 'add']) ?> </li>
    <li><?= $this->Html->link(__('List User Roles'), ['controller' => 'UserRoles', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New User Role'), ['controller' => 'UserRoles', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<?= $this->Form->create($peopleUserRole); ?>
<fieldset>
    <legend><?= __('Edit {0}', ['People User Role']) ?></legend>
    <?php
    echo $this->Form->input('person_id', ['options' => $people]);
    echo $this->Form->input('user_role_id', ['options' => $userRoles]);
    ?>
</fieldset>
<?= $this->Form->button(__("Save")); ?>
<?= $this->Form->end() ?>
