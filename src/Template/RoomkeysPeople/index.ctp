<?php
/* @var $this \Cake\View\View */
$this->extend('../Layout/TwitterBootstrap/dashboard');
$this->start('tb_actions');
?>
    <li><?= $this->Html->link(__('New Roomkeys Person'), ['action' => 'add']); ?></li>
    <li><?= $this->Html->link(__('List Roomkeys'), ['controller' => 'Roomkeys', 'action' => 'index']); ?></li>
    <li><?= $this->Html->link(__('New Roomkey'), ['controller' => 'Roomkeys', 'action' => 'add']); ?></li>
    <li><?= $this->Html->link(__('List People'), ['controller' => 'People', 'action' => 'index']); ?></li>
    <li><?= $this->Html->link(__('New Person'), ['controller' => 'People', 'action' => 'add']); ?></li>
<?php $this->end(); ?>
<?php $this->assign('tb_sidebar', '<ul class="nav nav-sidebar">' . $this->fetch('tb_actions') . '</ul>'); ?>

<table class="table table-striped" cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id'); ?></th>
            <th><?= $this->Paginator->sort('roomkey_id'); ?></th>
            <th><?= $this->Paginator->sort('person_id'); ?></th>
            <th><?= $this->Paginator->sort('comment'); ?></th>
            <th class="actions"><?= __('Actions'); ?></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($roomkeysPeople as $roomkeysPerson): ?>
        <tr>
            <td><?= $this->Number->format($roomkeysPerson->id) ?></td>
            <td>
                <?= $roomkeysPerson->has('roomkey') ? $this->Html->link($roomkeysPerson->roomkey->name, ['controller' => 'Roomkeys', 'action' => 'view', $roomkeysPerson->roomkey->id]) : '' ?>
            </td>
            <td>
                <?= $roomkeysPerson->has('person') ? $this->Html->link($roomkeysPerson->person->id, ['controller' => 'People', 'action' => 'view', $roomkeysPerson->person->id]) : '' ?>
            </td>
            <td><?= h($roomkeysPerson->comment) ?></td>
            <td class="actions">
                <?= $this->Html->link('', ['action' => 'view', $roomkeysPerson->id], ['title' => __('View'), 'class' => 'btn btn-default glyphicon glyphicon-eye-open']) ?>
                <?= $this->Html->link('', ['action' => 'edit', $roomkeysPerson->id], ['title' => __('Edit'), 'class' => 'btn btn-default glyphicon glyphicon-pencil']) ?>
                <?= $this->Form->postLink('', ['action' => 'delete', $roomkeysPerson->id], ['confirm' => __('Are you sure you want to delete # {0}?', $roomkeysPerson->id), 'title' => __('Delete'), 'class' => 'btn btn-default glyphicon glyphicon-trash']) ?>
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
