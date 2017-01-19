<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');


$this->start('tb_actions');
?>
<li><?= $this->Html->link(__('Edit Group'), ['action' => 'edit', $group->id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Group'), ['action' => 'delete', $group->id], ['confirm' => __('Are you sure you want to delete # {0}?', $group->id)]) ?> </li>
<li><?= $this->Html->link(__('List Groups'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Group'), ['action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Emailtext Groups'), ['controller' => 'EmailtextGroups', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Emailtext Group'), ['controller' => 'EmailtextGroups', 'action' => 'add']) ?> </li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
<li><?= $this->Html->link(__('Edit Group'), ['action' => 'edit', $group->id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Group'), ['action' => 'delete', $group->id], ['confirm' => __('Are you sure you want to delete # {0}?', $group->id)]) ?> </li>
<li><?= $this->Html->link(__('List Groups'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Group'), ['action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Emailtext Groups'), ['controller' => 'EmailtextGroups', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Emailtext Group'), ['controller' => 'EmailtextGroups', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<div class="panel panel-default">
    <!-- Panel header -->
    <div class="panel-heading">
        <h3 class="panel-title"><?= h($group->name) ?></h3>
    </div>
    <table class="table table-striped" cellpadding="0" cellspacing="0">
        <tr>
            <td><?= __('Name') ?></td>
            <td><?= h($group->name) ?></td>
        </tr>
        <tr>
            <td><?= __('Conditions') ?></td>
            <td><?= h($group->conditions) ?></td>
        </tr>
        <tr>
            <td><?= __('Id') ?></td>
            <td><?= $this->Number->format($group->id) ?></td>
        </tr>
    </table>
</div>

<div class="panel panel-default">
    <!-- Panel header -->
    <div class="panel-heading">
        <h3 class="panel-title"><?= __('Related EmailtextGroups') ?></h3>
    </div>
    <?php if (!empty($group->emailtext_groups)): ?>
        <table class="table table-striped">
            <thead>
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Emailtext Id') ?></th>
                <th><?= __('Group Id') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($group->emailtext_groups as $emailtextGroups): ?>
                <tr>
                    <td><?= h($emailtextGroups->id) ?></td>
                    <td><?= h($emailtextGroups->emailtext_id) ?></td>
                    <td><?= h($emailtextGroups->group_id) ?></td>
                    <td class="actions">
                        <?= $this->Html->link('', ['controller' => 'EmailtextGroups', 'action' => 'view', $emailtextGroups->id], ['title' => __('View'), 'class' => 'btn btn-default glyphicon glyphicon-eye-open']) ?>
                        <?= $this->Html->link('', ['controller' => 'EmailtextGroups', 'action' => 'edit', $emailtextGroups->id], ['title' => __('Edit'), 'class' => 'btn btn-default glyphicon glyphicon-pencil']) ?>
                        <?= $this->Form->postLink('', ['controller' => 'EmailtextGroups', 'action' => 'delete', $emailtextGroups->id], ['confirm' => __('Are you sure you want to delete # {0}?', $emailtextGroups->id), 'title' => __('Delete'), 'class' => 'btn btn-default glyphicon glyphicon-trash']) ?>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p class="panel-body">no related EmailtextGroups</p>
    <?php endif; ?>
</div>
