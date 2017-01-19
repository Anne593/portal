<?php
/* @var $this \Cake\View\View */
$this->extend('../Layout/TwitterBootstrap/dashboard');
$this->start('tb_actions');
?>
    <li><?= $this->Html->link(__('New Emailtext Group'), ['action' => 'add']); ?></li>
    <li><?= $this->Html->link(__('List Emailtexts'), ['controller' => 'Emailtexts', 'action' => 'index']); ?></li>
    <li><?= $this->Html->link(__('New Emailtext'), ['controller' => 'Emailtexts', 'action' => 'add']); ?></li>
    <li><?= $this->Html->link(__('List Groups'), ['controller' => 'Groups', 'action' => 'index']); ?></li>
    <li><?= $this->Html->link(__('New Group'), ['controller' => 'Groups', 'action' => 'add']); ?></li>
<?php $this->end(); ?>
<?php $this->assign('tb_sidebar', '<ul class="nav nav-sidebar">' . $this->fetch('tb_actions') . '</ul>'); ?>

<table class="table table-striped" cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id'); ?></th>
            <th><?= $this->Paginator->sort('emailtext_id'); ?></th>
            <th><?= $this->Paginator->sort('group_id'); ?></th>
            <th class="actions"><?= __('Actions'); ?></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($emailtextGroups as $emailtextGroup): ?>
        <tr>
            <td><?= $this->Number->format($emailtextGroup->id) ?></td>
            <td>
                <?= $emailtextGroup->has('emailtext') ? $this->Html->link($emailtextGroup->emailtext->id, ['controller' => 'Emailtexts', 'action' => 'view', $emailtextGroup->emailtext->id]) : '' ?>
            </td>
            <td>
                <?= $emailtextGroup->has('group') ? $this->Html->link($emailtextGroup->group->name, ['controller' => 'Groups', 'action' => 'view', $emailtextGroup->group->id]) : '' ?>
            </td>
            <td class="actions">
                <?= $this->Html->link('', ['action' => 'view', $emailtextGroup->id], ['title' => __('View'), 'class' => 'btn btn-default glyphicon glyphicon-eye-open']) ?>
                <?= $this->Html->link('', ['action' => 'edit', $emailtextGroup->id], ['title' => __('Edit'), 'class' => 'btn btn-default glyphicon glyphicon-pencil']) ?>
                <?= $this->Form->postLink('', ['action' => 'delete', $emailtextGroup->id], ['confirm' => __('Are you sure you want to delete # {0}?', $emailtextGroup->id), 'title' => __('Delete'), 'class' => 'btn btn-default glyphicon glyphicon-trash']) ?>
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
