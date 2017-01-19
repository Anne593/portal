<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New People Membership'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List People'), ['controller' => 'People', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Person'), ['controller' => 'People', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Memberships'), ['controller' => 'Memberships', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Membership'), ['controller' => 'Memberships', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="peopleMemberships index large-9 medium-8 columns content">
    <h3><?= __('People Memberships') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('semester') ?></th>
                <th scope="col"><?= $this->Paginator->sort('person_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('membership_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('payment') ?></th>
                <th scope="col"><?= $this->Paginator->sort('social_service') ?></th>
                <th scope="col"><?= $this->Paginator->sort('social_service_comment') ?></th>
                <th scope="col"><?= $this->Paginator->sort('comment') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($peopleMemberships as $peopleMembership): ?>
            <tr>
                <td><?= $this->Number->format($peopleMembership->id) ?></td>
                <td><?= $this->Number->format($peopleMembership->semester) ?></td>
                <td><?= $peopleMembership->has('person') ? $this->Html->link($peopleMembership->person->id, ['controller' => 'People', 'action' => 'view', $peopleMembership->person->id]) : '' ?></td>
                <td><?= $peopleMembership->has('membership') ? $this->Html->link($peopleMembership->membership->name, ['controller' => 'Memberships', 'action' => 'view', $peopleMembership->membership->id]) : '' ?></td>
                <td><?= h($peopleMembership->payment) ?></td>
                <td><?= $this->Number->format($peopleMembership->social_service) ?></td>
                <td><?= h($peopleMembership->social_service_comment) ?></td>
                <td><?= h($peopleMembership->comment) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $peopleMembership->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $peopleMembership->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $peopleMembership->id], ['confirm' => __('Are you sure you want to delete # {0}?', $peopleMembership->id)]) ?>
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
