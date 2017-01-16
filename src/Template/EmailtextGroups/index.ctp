<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Emailtext Group'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Emailtexts'), ['controller' => 'Emailtexts', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Emailtext'), ['controller' => 'Emailtexts', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Groups'), ['controller' => 'Groups', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Group'), ['controller' => 'Groups', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="emailtextGroups index large-9 medium-8 columns content">
    <h3><?= __('Emailtext Groups') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('emailtext_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('group_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($emailtextGroups as $emailtextGroup): ?>
            <tr>
                <td><?= $this->Number->format($emailtextGroup->id) ?></td>
                <td><?= $emailtextGroup->has('emailtext') ? $this->Html->link($emailtextGroup->emailtext->id, ['controller' => 'Emailtexts', 'action' => 'view', $emailtextGroup->emailtext->id]) : '' ?></td>
                <td><?= $emailtextGroup->has('group') ? $this->Html->link($emailtextGroup->group->name, ['controller' => 'Groups', 'action' => 'view', $emailtextGroup->group->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $emailtextGroup->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $emailtextGroup->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $emailtextGroup->id], ['confirm' => __('Are you sure you want to delete # {0}?', $emailtextGroup->id)]) ?>
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
