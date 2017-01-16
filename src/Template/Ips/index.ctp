<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Ip'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Macs'), ['controller' => 'Macs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Mac'), ['controller' => 'Macs', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="ips index large-9 medium-8 columns content">
    <h3><?= __('Ips') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('mac_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ip') ?></th>
                <th scope="col"><?= $this->Paginator->sort('lease_start') ?></th>
                <th scope="col"><?= $this->Paginator->sort('lease_end') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($ips as $ip): ?>
            <tr>
                <td><?= $this->Number->format($ip->id) ?></td>
                <td><?= $ip->has('mac') ? $this->Html->link($ip->mac->id, ['controller' => 'Macs', 'action' => 'view', $ip->mac->id]) : '' ?></td>
                <td><?= h($ip->ip) ?></td>
                <td><?= h($ip->lease_start) ?></td>
                <td><?= h($ip->lease_end) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $ip->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $ip->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $ip->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ip->id)]) ?>
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
