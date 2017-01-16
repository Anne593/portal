<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Person'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Fileserver Users'), ['controller' => 'FileserverUsers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Fileserver User'), ['controller' => 'FileserverUsers', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List House Contibution'), ['controller' => 'HouseContibution', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New House Contibution'), ['controller' => 'HouseContibution', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Macs'), ['controller' => 'Macs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Mac'), ['controller' => 'Macs', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List People Network'), ['controller' => 'PeopleNetwork', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New People Network'), ['controller' => 'PeopleNetwork', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Tenants'), ['controller' => 'Tenants', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tenant'), ['controller' => 'Tenants', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List User Roles'), ['controller' => 'UserRoles', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User Role'), ['controller' => 'UserRoles', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Roomkeys'), ['controller' => 'Roomkeys', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Roomkey'), ['controller' => 'Roomkeys', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Working Groups'), ['controller' => 'WorkingGroups', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Working Group'), ['controller' => 'WorkingGroups', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="people index large-9 medium-8 columns content">
    <h3><?= __('People') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('surname') ?></th>
                <th scope="col"><?= $this->Paginator->sort('forename') ?></th>
                <th scope="col"><?= $this->Paginator->sort('email') ?></th>
                <th scope="col"><?= $this->Paginator->sort('birthday') ?></th>
                <th scope="col"><?= $this->Paginator->sort('matriculation_number') ?></th>
                <th scope="col"><?= $this->Paginator->sort('studentenwerk_identification') ?></th>
                <th scope="col"><?= $this->Paginator->sort('password') ?></th>
                <th scope="col"><?= $this->Paginator->sort('password_retrieval') ?></th>
                <th scope="col"><?= $this->Paginator->sort('status') ?></th>
                <th scope="col"><?= $this->Paginator->sort('failed_login_count') ?></th>
                <th scope="col"><?= $this->Paginator->sort('failed_login_timestamp') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($people as $person): ?>
            <tr>
                <td><?= $this->Number->format($person->id) ?></td>
                <td><?= h($person->surname) ?></td>
                <td><?= h($person->forename) ?></td>
                <td><?= h($person->email) ?></td>
                <td><?= h($person->birthday) ?></td>
                <td><?= h($person->matriculation_number) ?></td>
                <td><?= $this->Number->format($person->studentenwerk_identification) ?></td>
                <td><?= h($person->password) ?></td>
                <td><?= $this->Number->format($person->password_retrieval) ?></td>
                <td><?= h($person->status) ?></td>
                <td><?= $this->Number->format($person->failed_login_count) ?></td>
                <td><?= h($person->failed_login_timestamp) ?></td>
                <td><?= h($person->created) ?></td>
                <td><?= h($person->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $person->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $person->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $person->id], ['confirm' => __('Are you sure you want to delete # {0}?', $person->id)]) ?>
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
