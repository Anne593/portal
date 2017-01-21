<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Model History Phinxlog'), ['action' => 'edit',
            $modelHistoryPhinxlog->version]) ?>
        </li>
        <li><?= $this->Form->postLink(__('Delete Model History Phinxlog'), ['action' => 'delete',
            $modelHistoryPhinxlog->version], ['confirm' => __('Are you sure you want to delete # {0}?',
            $modelHistoryPhinxlog->version)]) ?>
        </li>
        <li><?= $this->Html->link(__('List Model History Phinxlog'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Model History Phinxlog'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Phinxlog'), ['controller' => 'Phinxlog', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Phinxlog'), ['controller' => 'Phinxlog', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Model History'), ['controller' => 'ModelHistory', 'action' => 'index']) ?>
        </li>
        <li><?= $this->Html->link(__('New Model History'), ['controller' => 'ModelHistory', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="modelHistoryPhinxlog view large-9 medium-8 columns content">
    <h3><?= h($modelHistoryPhinxlog->version) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Migration Name') ?></th>
            <td><?= h($modelHistoryPhinxlog->migration_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Version') ?></th>
            <td><?= $this->Number->format($modelHistoryPhinxlog->version) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Start Time') ?></th>
            <td><?= h($modelHistoryPhinxlog->start_time) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('End Time') ?></th>
            <td><?= h($modelHistoryPhinxlog->end_time) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Breakpoint') ?></th>
            <td><?= $modelHistoryPhinxlog->breakpoint ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
</div>
