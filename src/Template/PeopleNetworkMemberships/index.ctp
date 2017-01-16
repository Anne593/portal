<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New People Network Membership'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Memberships'), ['controller' => 'Memberships', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Membership'), ['controller' => 'Memberships', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List People Network'), ['controller' => 'PeopleNetwork', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New People Network'), ['controller' => 'PeopleNetwork', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="peopleNetworkMemberships index large-9 medium-8 columns content">
    <h3><?= __('People Network Memberships') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('networkinfo_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('membership_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('date_join') ?></th>
                <th scope="col"><?= $this->Paginator->sort('date_quit') ?></th>
                <th scope="col"><?= $this->Paginator->sort('payment') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($peopleNetworkMemberships as $peopleNetworkMembership): ?>
            <tr>
                <td><?= $this->Number->format($peopleNetworkMembership->id) ?></td>
                <td><?= $this->Number->format($peopleNetworkMembership->networkinfo_id) ?></td>
                <td><?= $peopleNetworkMembership->has('membership') ? $this->Html->link($peopleNetworkMembership->membership->name, ['controller' => 'Memberships', 'action' => 'view', $peopleNetworkMembership->membership->id]) : '' ?></td>
                <td><?= h($peopleNetworkMembership->date_join) ?></td>
                <td><?= h($peopleNetworkMembership->date_quit) ?></td>
                <td><?= h($peopleNetworkMembership->payment) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $peopleNetworkMembership->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $peopleNetworkMembership->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $peopleNetworkMembership->id], ['confirm' => __('Are you sure you want to delete # {0}?', $peopleNetworkMembership->id)]) ?>
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
