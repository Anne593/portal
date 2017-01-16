<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Mac'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List People'), ['controller' => 'People', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Person'), ['controller' => 'People', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Ips'), ['controller' => 'Ips', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Ip'), ['controller' => 'Ips', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="macs index large-9 medium-8 columns content">
    <h3><?= __('Macs') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('person_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('mac') ?></th>
                <th scope="col"><?= $this->Paginator->sort('device_name') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($macs as $mac): ?>
            <tr>
                <td><?= $this->Number->format($mac->id) ?></td>
                <td><?= $mac->has('person') ? $this->Html->link($mac->person->id, ['controller' => 'People', 'action' => 'view', $mac->person->id]) : '' ?></td>
                <td><?= h($mac->mac) ?></td>
                <td><?= h($mac->device_name) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $mac->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $mac->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $mac->id], ['confirm' => __('Are you sure you want to delete # {0}?', $mac->id)]) ?>
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
