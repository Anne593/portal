<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Roomkeys Person'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Roomkeys'), ['controller' => 'Roomkeys', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Roomkey'), ['controller' => 'Roomkeys', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List People'), ['controller' => 'People', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Person'), ['controller' => 'People', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="roomkeysPeople index large-9 medium-8 columns content">
    <h3><?= __('Roomkeys People') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('roomkey_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('person_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('comment') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($roomkeysPeople as $roomkeysPerson): ?>
            <tr>
                <td><?= $this->Number->format($roomkeysPerson->id) ?></td>
                <td><?= $roomkeysPerson->has('roomkey') ? $this->Html->link($roomkeysPerson->roomkey->name, ['controller' => 'Roomkeys', 'action' => 'view', $roomkeysPerson->roomkey->id]) : '' ?></td>
                <td><?= $roomkeysPerson->has('person') ? $this->Html->link($roomkeysPerson->person->id, ['controller' => 'People', 'action' => 'view', $roomkeysPerson->person->id]) : '' ?></td>
                <td><?= h($roomkeysPerson->comment) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $roomkeysPerson->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $roomkeysPerson->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $roomkeysPerson->id], ['confirm' => __('Are you sure you want to delete # {0}?', $roomkeysPerson->id)]) ?>
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
