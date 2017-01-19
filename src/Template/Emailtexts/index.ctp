<?php
/* @var $this \Cake\View\View */
$this->extend('../Layout/TwitterBootstrap/dashboard');
$this->start('tb_actions');
?>
    <li><?= $this->Html->link(__('New Emailtext'), ['action' => 'add']); ?></li>
    <li><?= $this->Html->link(__('List EmailtextGroups'), ['controller' => 'EmailtextGroups', 'action' => 'index']); ?></li>
    <li><?= $this->Html->link(__('New Emailtext Group'), ['controller' => 'EmailtextGroups', 'action' => 'add']); ?></li>
    <li><?= $this->Html->link(__('List EmailtextUsers'), ['controller' => 'EmailtextUsers', 'action' => 'index']); ?></li>
    <li><?= $this->Html->link(__('New Emailtext User'), ['controller' => 'EmailtextUsers', 'action' => 'add']); ?></li>
<?php $this->end(); ?>
<?php $this->assign('tb_sidebar', '<ul class="nav nav-sidebar">' . $this->fetch('tb_actions') . '</ul>'); ?>

<table class="table table-striped" cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id'); ?></th>
            <th><?= $this->Paginator->sort('topic'); ?></th>
            <th><?= $this->Paginator->sort('subject'); ?></th>
            <th><?= $this->Paginator->sort('resume_email'); ?></th>
            <th><?= $this->Paginator->sort('deadline'); ?></th>
            <th class="actions"><?= __('Actions'); ?></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($emailtexts as $emailtext): ?>
        <tr>
            <td><?= $this->Number->format($emailtext->id) ?></td>
            <td><?= h($emailtext->topic) ?></td>
            <td><?= h($emailtext->subject) ?></td>
            <td><?= h($emailtext->resume_email) ?></td>
            <td><?= $this->Number->format($emailtext->deadline) ?></td>
            <td class="actions">
                <?= $this->Html->link('', ['action' => 'view', $emailtext->id], ['title' => __('View'), 'class' => 'btn btn-default glyphicon glyphicon-eye-open']) ?>
                <?= $this->Html->link('', ['action' => 'edit', $emailtext->id], ['title' => __('Edit'), 'class' => 'btn btn-default glyphicon glyphicon-pencil']) ?>
                <?= $this->Form->postLink('', ['action' => 'delete', $emailtext->id], ['confirm' => __('Are you sure you want to delete # {0}?', $emailtext->id), 'title' => __('Delete'), 'class' => 'btn btn-default glyphicon glyphicon-trash']) ?>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<div class="paginator">
    <ul class="pagination">
        <?= $this->Paginator->prev('< ' . __('previous')) ?>
        <?= $this->Paginator->numbers(['before' => '', 'after' => '']) ?>
        <?= $this->Paginator->next(__('next') . ' >') ?>
    </ul>
    <p><?= $this->Paginator->counter() ?></p>
</div>
