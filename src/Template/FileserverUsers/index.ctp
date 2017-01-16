<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Fileserver User'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List People'), ['controller' => 'People', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Person'), ['controller' => 'People', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="fileserverUsers index large-9 medium-8 columns content">
    <h3><?= __('Fileserver Users') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('person_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('username') ?></th>
                <th scope="col"><?= $this->Paginator->sort('password') ?></th>
                <th scope="col"><?= $this->Paginator->sort('vip') ?></th>
                <th scope="col"><?= $this->Paginator->sort('accepted') ?></th>
                <th scope="col"><?= $this->Paginator->sort('active') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('password_retrieval') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($fileserverUsers as $fileserverUser): ?>
            <tr>
                <td><?= $this->Number->format($fileserverUser->id) ?></td>
                <td><?= $fileserverUser->has('person') ? $this->Html->link($fileserverUser->person->id, ['controller' => 'People', 'action' => 'view', $fileserverUser->person->id]) : '' ?></td>
                <td><?= h($fileserverUser->username) ?></td>
                <td><?= h($fileserverUser->password) ?></td>
                <td><?= h($fileserverUser->vip) ?></td>
                <td><?= h($fileserverUser->accepted) ?></td>
                <td><?= h($fileserverUser->active) ?></td>
                <td><?= h($fileserverUser->created) ?></td>
                <td><?= $this->Number->format($fileserverUser->password_retrieval) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $fileserverUser->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $fileserverUser->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $fileserverUser->id], ['confirm' => __('Are you sure you want to delete # {0}?', $fileserverUser->id)]) ?>
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
