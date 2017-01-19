<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');

$this->start('tb_actions');
?>
    <li><?=
    $this->Form->postLink(
        __('Delete'),
        ['action' => 'delete', $fileserverUser->id],
        ['confirm' => __('Are you sure you want to delete # {0}?', $fileserverUser->id)]
    )
    ?>
    </li>
    <li><?= $this->Html->link(__('List Fileserver Users'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('List People'), ['controller' => 'People', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Person'), ['controller' => 'People', 'action' => 'add']) ?> </li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
    <li><?=
    $this->Form->postLink(
        __('Delete'),
        ['action' => 'delete', $fileserverUser->id],
        ['confirm' => __('Are you sure you want to delete # {0}?', $fileserverUser->id)]
    )
    ?>
    </li>
    <li><?= $this->Html->link(__('List Fileserver Users'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('List People'), ['controller' => 'People', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Person'), ['controller' => 'People', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<?= $this->Form->create($fileserverUser); ?>
<fieldset>
    <legend><?= __('Edit {0}', ['Fileserver User']) ?></legend>
    <?php
    echo $this->Form->input('person_id', ['options' => $people]);
    echo $this->Form->input('username');
    echo $this->Form->input('password');
    echo $this->Form->input('vip');
    echo $this->Form->input('accepted');
    echo $this->Form->input('active');
    echo $this->Form->input('password_retrieval');
    ?>
</fieldset>
<?= $this->Form->button(__("Save")); ?>
<?= $this->Form->end() ?>
