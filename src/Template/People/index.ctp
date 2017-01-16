<?php
    use App\Lib\Status;
    use App\Model\Entity\Person;
?>
<!--
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
-->

<?= $this->AdminLteListFilter->renderFilterbox() ?>

<div class="people index">
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">
                <?= __('users.index.title') ?>
            </h3>
            <div class="box-tools pull-right">
                <?= $this->CkTools->addButton(__('users.add'), [
                'class' => 'btn btn-default btn-add btn-xs'
                ]) ?>
            </div>
        </div>
        <div class="box-body">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th><?= $this->Paginator->sort('firstname', __('user.firstname')) ?></th>
                        <th><?= $this->Paginator->sort('lastname', __('user.lastname')) ?></th>
                        <th><?= $this->Paginator->sort('email', __('user.email')) ?></th>
                        <th><?= $this->Paginator->sort('status', __('user.status')) ?></th>
                        <th><?= $this->Paginator->sort('role', __('user.role')) ?></th>
                        <th class="actions text-right"><?= __('lists.actions') ?></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($people as $person): ?>
                    <tr>
                        <td><?= h($person->forename) ?></td>
                        <td><?= h($person->surname) ?></td>
                        <td><?= h($person->email) ?></td>
                        <td><?= $this->Utils->statusLabel($person->status) ?></td>
                        <td><?= $this->Utils->roleLabel($person->role) ?></td>
                        <td class="actions text-right">
                            <?= $this->CkTools->viewButton($person) ?>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <?= $this->Paginator->numbers() ?>
</div>