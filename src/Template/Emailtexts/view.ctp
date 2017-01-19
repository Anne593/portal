<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');


$this->start('tb_actions');
?>
<li><?= $this->Html->link(__('Edit Emailtext'), ['action' => 'edit', $emailtext->id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Emailtext'), ['action' => 'delete', $emailtext->id], ['confirm' => __('Are you sure you want to delete # {0}?', $emailtext->id)]) ?> </li>
<li><?= $this->Html->link(__('List Emailtexts'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Emailtext'), ['action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Emailtext Groups'), ['controller' => 'EmailtextGroups', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Emailtext Group'), ['controller' => 'EmailtextGroups', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Emailtext Users'), ['controller' => 'EmailtextUsers', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Emailtext User'), ['controller' => 'EmailtextUsers', 'action' => 'add']) ?> </li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
<li><?= $this->Html->link(__('Edit Emailtext'), ['action' => 'edit', $emailtext->id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Emailtext'), ['action' => 'delete', $emailtext->id], ['confirm' => __('Are you sure you want to delete # {0}?', $emailtext->id)]) ?> </li>
<li><?= $this->Html->link(__('List Emailtexts'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Emailtext'), ['action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Emailtext Groups'), ['controller' => 'EmailtextGroups', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Emailtext Group'), ['controller' => 'EmailtextGroups', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Emailtext Users'), ['controller' => 'EmailtextUsers', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Emailtext User'), ['controller' => 'EmailtextUsers', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<div class="panel panel-default">
    <!-- Panel header -->
    <div class="panel-heading">
        <h3 class="panel-title"><?= h($emailtext->id) ?></h3>
    </div>
    <table class="table table-striped" cellpadding="0" cellspacing="0">
        <tr>
            <td><?= __('Topic') ?></td>
            <td><?= h($emailtext->topic) ?></td>
        </tr>
        <tr>
            <td><?= __('Subject') ?></td>
            <td><?= h($emailtext->subject) ?></td>
        </tr>
        <tr>
            <td><?= __('Resume Email') ?></td>
            <td><?= h($emailtext->resume_email) ?></td>
        </tr>
        <tr>
            <td><?= __('Id') ?></td>
            <td><?= $this->Number->format($emailtext->id) ?></td>
        </tr>
        <tr>
            <td><?= __('Deadline') ?></td>
            <td><?= $this->Number->format($emailtext->deadline) ?></td>
        </tr>
        <tr>
            <td><?= __('Text') ?></td>
            <td><?= $this->Text->autoParagraph(h($emailtext->text)); ?></td>
        </tr>
    </table>
</div>

<div class="panel panel-default">
    <!-- Panel header -->
    <div class="panel-heading">
        <h3 class="panel-title"><?= __('Related EmailtextGroups') ?></h3>
    </div>
    <?php if (!empty($emailtext->emailtext_groups)): ?>
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
            <?php foreach ($emailtext->emailtext_groups as $emailtextGroups): ?>
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
<div class="panel panel-default">
    <!-- Panel header -->
    <div class="panel-heading">
        <h3 class="panel-title"><?= __('Related EmailtextUsers') ?></h3>
    </div>
    <?php if (!empty($emailtext->emailtext_users)): ?>
        <table class="table table-striped">
            <thead>
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Emailtext Id') ?></th>
                <th><?= __('Type') ?></th>
                <th><?= __('TypeId') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($emailtext->emailtext_users as $emailtextUsers): ?>
                <tr>
                    <td><?= h($emailtextUsers->id) ?></td>
                    <td><?= h($emailtextUsers->emailtext_id) ?></td>
                    <td><?= h($emailtextUsers->type) ?></td>
                    <td><?= h($emailtextUsers->typeId) ?></td>
                    <td class="actions">
                        <?= $this->Html->link('', ['controller' => 'EmailtextUsers', 'action' => 'view', $emailtextUsers->id], ['title' => __('View'), 'class' => 'btn btn-default glyphicon glyphicon-eye-open']) ?>
                        <?= $this->Html->link('', ['controller' => 'EmailtextUsers', 'action' => 'edit', $emailtextUsers->id], ['title' => __('Edit'), 'class' => 'btn btn-default glyphicon glyphicon-pencil']) ?>
                        <?= $this->Form->postLink('', ['controller' => 'EmailtextUsers', 'action' => 'delete', $emailtextUsers->id], ['confirm' => __('Are you sure you want to delete # {0}?', $emailtextUsers->id), 'title' => __('Delete'), 'class' => 'btn btn-default glyphicon glyphicon-trash']) ?>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p class="panel-body">no related EmailtextUsers</p>
    <?php endif; ?>
</div>
