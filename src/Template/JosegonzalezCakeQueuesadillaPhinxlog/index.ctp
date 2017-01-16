<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Josegonzalez Cake Queuesadilla Phinxlog'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="josegonzalezCakeQueuesadillaPhinxlog index large-9 medium-8 columns content">
    <h3><?= __('Josegonzalez Cake Queuesadilla Phinxlog') ?></h3>
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
            <?php foreach ($josegonzalezCakeQueuesadillaPhinxlog as $josegonzalezCakeQueuesadillaPhinxlog): ?>
            <tr>
                <td><?= $this->Number->format($josegonzalezCakeQueuesadillaPhinxlog->version) ?></td>
                <td><?= h($josegonzalezCakeQueuesadillaPhinxlog->migration_name) ?></td>
                <td><?= h($josegonzalezCakeQueuesadillaPhinxlog->start_time) ?></td>
                <td><?= h($josegonzalezCakeQueuesadillaPhinxlog->end_time) ?></td>
                <td><?= h($josegonzalezCakeQueuesadillaPhinxlog->breakpoint) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $josegonzalezCakeQueuesadillaPhinxlog->version]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $josegonzalezCakeQueuesadillaPhinxlog->version]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $josegonzalezCakeQueuesadillaPhinxlog->version], ['confirm' => __('Are you sure you want to delete # {0}?', $josegonzalezCakeQueuesadillaPhinxlog->version)]) ?>
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
