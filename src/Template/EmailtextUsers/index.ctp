<?php
/* @var $this \Cake\View\View */
$this->extend('../Layout/TwitterBootstrap/dashboard');
$this->start('tb_actions');
?>
    <li><?= $this->Html->link(__('New Emailtext User'), ['action' => 'add']); ?></li>
    <li><?= $this->Html->link(__('List Emailtexts'), ['controller' => 'Emailtexts', 'action' => 'index']); ?></li>
    <li><?= $this->Html->link(__('New Emailtext'), ['controller' => 'Emailtexts', 'action' => 'add']); ?></li>
<?php $this->end(); ?>
<?php $this->assign('tb_sidebar', '<ul class="nav nav-sidebar">' . $this->fetch('tb_actions') . '</ul>'); ?>

<table class="table table-striped" cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id'); ?></th>
            <th><?= $this->Paginator->sort('emailtext_id'); ?></th>
            <th><?= $this->Paginator->sort('typeId'); ?></th>
            <th class="actions"><?= __('Actions'); ?></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($emailtextUsers as $emailtextUser): ?>
        <tr>
            <td><?= $this->Number->format($emailtextUser->id) ?></td>
            <td>
                <?= $emailtextUser->has('emailtext') ? $this->Html->link($emailtextUser->emailtext->id, ['controller' => 'Emailtexts', 'action' => 'view', $emailtextUser->emailtext->id]) : '' ?>
            </td>
            <td><?= $this->Number->format($emailtextUser->typeId) ?></td>
            <td class="actions">
                <?= $this->Html->link('', ['action' => 'view', $emailtextUser->id], ['title' => __('View'), 'class' => 'btn btn-default glyphicon glyphicon-eye-open']) ?>
                <?= $this->Html->link('', ['action' => 'edit', $emailtextUser->id], ['title' => __('Edit'), 'class' => 'btn btn-default glyphicon glyphicon-pencil']) ?>
                <?= $this->Form->postLink('', ['action' => 'delete', $emailtextUser->id], ['confirm' => __('Are you sure you want to delete # {0}?', $emailtextUser->id), 'title' => __('Delete'), 'class' => 'btn btn-default glyphicon glyphicon-trash']) ?>
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
