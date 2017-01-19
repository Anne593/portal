<?php
/* @var $this \Cake\View\View */
$this->extend('../Layout/TwitterBootstrap/dashboard');
$this->start('tb_actions');
?>
    <li><?= $this->Html->link(__('New Fileserver User'), ['action' => 'add']); ?></li>
    <li><?= $this->Html->link(__('List People'), ['controller' => 'People', 'action' => 'index']); ?></li>
    <li><?= $this->Html->link(__('New Person'), ['controller' => 'People', 'action' => 'add']); ?></li>
<?php $this->end(); ?>
<?php $this->assign('tb_sidebar', '<ul class="nav nav-sidebar">' . $this->fetch('tb_actions') . '</ul>'); ?>

<table class="table table-striped" cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id'); ?></th>
            <th><?= $this->Paginator->sort('person_id'); ?></th>
            <th><?= $this->Paginator->sort('username'); ?></th>
            <th><?= $this->Paginator->sort('password'); ?></th>
            <th><?= $this->Paginator->sort('vip'); ?></th>
            <th><?= $this->Paginator->sort('accepted'); ?></th>
            <th><?= $this->Paginator->sort('active'); ?></th>
            <th class="actions"><?= __('Actions'); ?></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($fileserverUsers as $fileserverUser): ?>
        <tr>
            <td><?= $this->Number->format($fileserverUser->id) ?></td>
            <td>
                <?= $fileserverUser->has('person') ? $this->Html->link($fileserverUser->person->id, ['controller' => 'People', 'action' => 'view', $fileserverUser->person->id]) : '' ?>
            </td>
            <td><?= h($fileserverUser->username) ?></td>
            <td><?= h($fileserverUser->password) ?></td>
            <td><?= h($fileserverUser->vip) ?></td>
            <td><?= h($fileserverUser->accepted) ?></td>
            <td><?= h($fileserverUser->active) ?></td>
            <td class="actions">
                <?= $this->Html->link('', ['action' => 'view', $fileserverUser->id], ['title' => __('View'), 'class' => 'btn btn-default glyphicon glyphicon-eye-open']) ?>
                <?= $this->Html->link('', ['action' => 'edit', $fileserverUser->id], ['title' => __('Edit'), 'class' => 'btn btn-default glyphicon glyphicon-pencil']) ?>
                <?= $this->Form->postLink('', ['action' => 'delete', $fileserverUser->id], ['confirm' => __('Are you sure you want to delete # {0}?', $fileserverUser->id), 'title' => __('Delete'), 'class' => 'btn btn-default glyphicon glyphicon-trash']) ?>
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
