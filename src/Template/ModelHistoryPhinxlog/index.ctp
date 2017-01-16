<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Model History Phinxlog'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Phinxlog'), ['controller' => 'Phinxlog', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Phinxlog'), ['controller' => 'Phinxlog', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Model History'), ['controller' => 'ModelHistory', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Model History'), ['controller' => 'ModelHistory', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="modelHistoryPhinxlog index large-9 medium-8 columns content">
    <h3><?= __('Model History Phinxlog') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('version') ?></th>
                <th scope="col"><?= $this->Paginator->sort('migration_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('start_time') ?></th>
                <th scope="col"><?= $this->Paginator->sort('end_time') ?></th>
                <th scope="col"><?= $this->Paginator->sort('breakpoint') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($modelHistoryPhinxlog as $modelHistoryPhinxlog): ?>
            <tr>
                <td><?= $this->Number->format($modelHistoryPhinxlog->version) ?></td>
                <td><?= h($modelHistoryPhinxlog->migration_name) ?></td>
                <td><?= h($modelHistoryPhinxlog->start_time) ?></td>
                <td><?= h($modelHistoryPhinxlog->end_time) ?></td>
                <td><?= h($modelHistoryPhinxlog->breakpoint) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $modelHistoryPhinxlog->version]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $modelHistoryPhinxlog->version]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $modelHistoryPhinxlog->version], ['confirm' => __('Are you sure you want to delete # {0}?', $modelHistoryPhinxlog->version)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
