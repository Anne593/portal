<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New People User Role'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List People'), ['controller' => 'People', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Person'), ['controller' => 'People', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List User Roles'), ['controller' => 'UserRoles', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User Role'), ['controller' => 'UserRoles', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="peopleUserRoles index large-9 medium-8 columns content">
    <h3><?= __('People User Roles') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('person_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_role_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($peopleUserRoles as $peopleUserRole): ?>
            <tr>
                <td><?= $this->Number->format($peopleUserRole->id) ?></td>
                <td><?= $peopleUserRole->has('person') ? $this->Html->link($peopleUserRole->person->id, ['controller' => 'People', 'action' => 'view', $peopleUserRole->person->id]) : '' ?></td>
                <td><?= $peopleUserRole->has('user_role') ? $this->Html->link($peopleUserRole->user_role->title, ['controller' => 'UserRoles', 'action' => 'view', $peopleUserRole->user_role->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $peopleUserRole->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $peopleUserRole->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $peopleUserRole->id], ['confirm' => __('Are you sure you want to delete # {0}?', $peopleUserRole->id)]) ?>
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
