<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Working Groups Person'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List People'), ['controller' => 'People', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Person'), ['controller' => 'People', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Working Groups'), ['controller' => 'WorkingGroups', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Working Group'), ['controller' => 'WorkingGroups', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="workingGroupsPeople index large-9 medium-8 columns content">
    <h3><?= __('Working Groups People') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('person_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('workshop_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('member_since') ?></th>
                <th scope="col"><?= $this->Paginator->sort('member_until') ?></th>
                <th scope="col"><?= $this->Paginator->sort('mailing_list_enabled') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($workingGroupsPeople as $workingGroupsPerson): ?>
            <tr>
                <td><?= $this->Number->format($workingGroupsPerson->id) ?></td>
                <td><?= $workingGroupsPerson->has('person') ? $this->Html->link($workingGroupsPerson->person->id, ['controller' => 'People', 'action' => 'view', $workingGroupsPerson->person->id]) : '' ?></td>
                <td><?= $this->Number->format($workingGroupsPerson->workshop_id) ?></td>
                <td><?= h($workingGroupsPerson->member_since) ?></td>
                <td><?= h($workingGroupsPerson->member_until) ?></td>
                <td><?= h($workingGroupsPerson->mailing_list_enabled) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $workingGroupsPerson->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $workingGroupsPerson->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $workingGroupsPerson->id], ['confirm' => __('Are you sure you want to delete # {0}?', $workingGroupsPerson->id)]) ?>
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
