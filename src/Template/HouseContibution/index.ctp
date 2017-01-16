<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New House Contibution'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List People'), ['controller' => 'People', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Person'), ['controller' => 'People', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="houseContibution index large-9 medium-8 columns content">
    <h3><?= __('House Contibution') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('person_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('semester') ?></th>
                <th scope="col"><?= $this->Paginator->sort('payment') ?></th>
                <th scope="col"><?= $this->Paginator->sort('social_service') ?></th>
                <th scope="col"><?= $this->Paginator->sort('social_service_comment') ?></th>
                <th scope="col"><?= $this->Paginator->sort('new_tenant_bar') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($houseContibution as $houseContibution): ?>
            <tr>
                <td><?= $this->Number->format($houseContibution->id) ?></td>
                <td><?= $houseContibution->has('person') ? $this->Html->link($houseContibution->person->id, ['controller' => 'People', 'action' => 'view', $houseContibution->person->id]) : '' ?></td>
                <td><?= $this->Number->format($houseContibution->semester) ?></td>
                <td><?= h($houseContibution->payment) ?></td>
                <td><?= h($houseContibution->social_service) ?></td>
                <td><?= h($houseContibution->social_service_comment) ?></td>
                <td><?= h($houseContibution->new_tenant_bar) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $houseContibution->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $houseContibution->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $houseContibution->id], ['confirm' => __('Are you sure you want to delete # {0}?', $houseContibution->id)]) ?>
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
