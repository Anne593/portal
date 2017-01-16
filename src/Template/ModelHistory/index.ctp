<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Model History'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Phinxlog'), ['controller' => 'Phinxlog', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Phinxlog'), ['controller' => 'Phinxlog', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="modelHistory index large-9 medium-8 columns content">
    <h3><?= __('Model History') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('model') ?></th>
                <th scope="col"><?= $this->Paginator->sort('foreign_key') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('action') ?></th>
                <th scope="col"><?= $this->Paginator->sort('context_type') ?></th>
                <th scope="col"><?= $this->Paginator->sort('context_slug') ?></th>
                <th scope="col"><?= $this->Paginator->sort('revision') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
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
                <td><?= $this->Number->format($modelHistory->revision) ?></td>
                <td><?= h($modelHistory->created) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $modelHistory->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $modelHistory->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $modelHistory->id], ['confirm' => __('Are you sure you want to delete # {0}?', $modelHistory->id)]) ?>
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
