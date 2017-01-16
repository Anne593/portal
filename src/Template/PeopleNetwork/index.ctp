<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New People Network'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List People'), ['controller' => 'People', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Person'), ['controller' => 'People', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Memberships'), ['controller' => 'Memberships', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Membership'), ['controller' => 'Memberships', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="peopleNetwork index large-9 medium-8 columns content">
    <h3><?= __('People Network') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('person_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('data_access') ?></th>
                <th scope="col"><?= $this->Paginator->sort('mail_access') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tim') ?></th>
                <th scope="col"><?= $this->Paginator->sort('comment') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($peopleNetwork as $peopleNetwork): ?>
            <tr>
                <td><?= $this->Number->format($peopleNetwork->id) ?></td>
                <td><?= $peopleNetwork->has('person') ? $this->Html->link($peopleNetwork->person->id, ['controller' => 'People', 'action' => 'view', $peopleNetwork->person->id]) : '' ?></td>
                <td><?= h($peopleNetwork->data_access) ?></td>
                <td><?= h($peopleNetwork->mail_access) ?></td>
                <td><?= h($peopleNetwork->tim) ?></td>
                <td><?= h($peopleNetwork->comment) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $peopleNetwork->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $peopleNetwork->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $peopleNetwork->id], ['confirm' => __('Are you sure you want to delete # {0}?', $peopleNetwork->id)]) ?>
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
