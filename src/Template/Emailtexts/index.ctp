<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Emailtext'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Emailtext Groups'), ['controller' => 'EmailtextGroups', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Emailtext Group'), ['controller' => 'EmailtextGroups', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Emailtext Users'), ['controller' => 'EmailtextUsers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Emailtext User'), ['controller' => 'EmailtextUsers', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="emailtexts index large-9 medium-8 columns content">
    <h3><?= __('Emailtexts') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('topic') ?></th>
                <th scope="col"><?= $this->Paginator->sort('subject') ?></th>
                <th scope="col"><?= $this->Paginator->sort('resume_email') ?></th>
                <th scope="col"><?= $this->Paginator->sort('deadline') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($emailtexts as $emailtext): ?>
            <tr>
                <td><?= $this->Number->format($emailtext->id) ?></td>
                <td><?= h($emailtext->topic) ?></td>
                <td><?= h($emailtext->subject) ?></td>
                <td><?= h($emailtext->resume_email) ?></td>
                <td><?= $this->Number->format($emailtext->deadline) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $emailtext->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $emailtext->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $emailtext->id], ['confirm' => __('Are you sure you want to delete # {0}?', $emailtext->id)]) ?>
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
