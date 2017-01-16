<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Model History'), ['action' => 'edit', $modelHistory->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Model History'), ['action' => 'delete', $modelHistory->id], ['confirm' => __('Are you sure you want to delete # {0}?', $modelHistory->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Model History'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Model History'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Phinxlog'), ['controller' => 'Phinxlog', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Phinxlog'), ['controller' => 'Phinxlog', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="modelHistory view large-9 medium-8 columns content">
    <h3><?= h($modelHistory->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= h($modelHistory->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Model') ?></th>
            <td><?= h($modelHistory->model) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Foreign Key') ?></th>
            <td><?= h($modelHistory->foreign_key) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User Id') ?></th>
            <td><?= h($modelHistory->user_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Action') ?></th>
            <td><?= h($modelHistory->action) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Context Type') ?></th>
            <td><?= h($modelHistory->context_type) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Context Slug') ?></th>
            <td><?= h($modelHistory->context_slug) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Revision') ?></th>
            <td><?= $this->Number->format($modelHistory->revision) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($modelHistory->created) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Data') ?></h4>
        <?= $this->Text->autoParagraph(h($modelHistory->data)); ?>
    </div>
    <div class="row">
        <h4><?= __('Context') ?></h4>
        <?= $this->Text->autoParagraph(h($modelHistory->context)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Phinxlog') ?></h4>
        <?php if (!empty($modelHistory->phinxlog)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Version') ?></th>
                <th scope="col"><?= __('Migration Name') ?></th>
                <th scope="col"><?= __('Start Time') ?></th>
                <th scope="col"><?= __('End Time') ?></th>
                <th scope="col"><?= __('Breakpoint') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($modelHistory->phinxlog as $phinxlog): ?>
            <tr>
                <td><?= h($phinxlog->version) ?></td>
                <td><?= h($phinxlog->migration_name) ?></td>
                <td><?= h($phinxlog->start_time) ?></td>
                <td><?= h($phinxlog->end_time) ?></td>
                <td><?= h($phinxlog->breakpoint) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Phinxlog', 'action' => 'view', $phinxlog->version]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Phinxlog', 'action' => 'edit', $phinxlog->version]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Phinxlog', 'action' => 'delete', $phinxlog->version], ['confirm' => __('Are you sure you want to delete # {0}?', $phinxlog->version)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
