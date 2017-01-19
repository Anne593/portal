<?php
/* @var $this \Cake\View\View */
$this->extend('../Layout/TwitterBootstrap/dashboard');
$this->start('tb_actions');
?>
    <li><?= $this->Html->link(__('New Model History'), ['action' => 'add']); ?></li>
<?php $this->end(); ?>
<?php $this->assign('tb_sidebar', '<ul class="nav nav-sidebar">' . $this->fetch('tb_actions') . '</ul>'); ?>

<table class="table table-striped" cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id'); ?></th>
            <th><?= $this->Paginator->sort('model'); ?></th>
            <th><?= $this->Paginator->sort('foreign_key'); ?></th>
            <th><?= $this->Paginator->sort('user_id'); ?></th>
            <th><?= $this->Paginator->sort('action'); ?></th>
            <th><?= $this->Paginator->sort('context_type'); ?></th>
            <th><?= $this->Paginator->sort('context_slug'); ?></th>
            <th class="actions"><?= __('Actions'); ?></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($modelHistory as $modelHistory): ?>
        <tr>
            <td><?= h($modelHistory->id) ?></td>
            <td><?= h($modelHistory->model) ?></td>
            <td><?= h($modelHistory->foreign_key) ?></td>
            <td><?= h($modelHistory->user_id) ?></td>
            <td><?= h($modelHistory->action) ?></td>
            <td><?= h($modelHistory->context_type) ?></td>
            <td><?= h($modelHistory->context_slug) ?></td>
            <td class="actions">
                <?= $this->Html->link('', ['action' => 'view', $modelHistory->id], ['title' => __('View'), 'class' => 'btn btn-default glyphicon glyphicon-eye-open']) ?>
                <?= $this->Html->link('', ['action' => 'edit', $modelHistory->id], ['title' => __('Edit'), 'class' => 'btn btn-default glyphicon glyphicon-pencil']) ?>
                <?= $this->Form->postLink('', ['action' => 'delete', $modelHistory->id], ['confirm' => __('Are you sure you want to delete # {0}?', $modelHistory->id), 'title' => __('Delete'), 'class' => 'btn btn-default glyphicon glyphicon-trash']) ?>
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
