<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');


$this->start('tb_actions');
?>
<li><?= $this->Html->link(__('Edit Person'), ['action' => 'edit', $person->id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Person'), ['action' => 'delete', $person->id], ['confirm' => __('Are you sure you want to delete # {0}?', $person->id)]) ?> </li>
<li><?= $this->Html->link(__('List People'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Person'), ['action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Fileserver Users'), ['controller' => 'FileserverUsers', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Fileserver User'), ['controller' => 'FileserverUsers', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Macs'), ['controller' => 'Macs', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Mac'), ['controller' => 'Macs', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Tenants'), ['controller' => 'Tenants', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Tenant'), ['controller' => 'Tenants', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Memberships'), ['controller' => 'Memberships', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Membership'), ['controller' => 'Memberships', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List User Roles'), ['controller' => 'UserRoles', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New User Role'), ['controller' => 'UserRoles', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Roomkeys'), ['controller' => 'Roomkeys', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Roomkey'), ['controller' => 'Roomkeys', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Working Groups'), ['controller' => 'WorkingGroups', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Working Group'), ['controller' => 'WorkingGroups', 'action' => 'add']) ?> </li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
<li><?= $this->Html->link(__('Edit Person'), ['action' => 'edit', $person->id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Person'), ['action' => 'delete', $person->id], ['confirm' => __('Are you sure you want to delete # {0}?', $person->id)]) ?> </li>
<li><?= $this->Html->link(__('List People'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Person'), ['action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Fileserver Users'), ['controller' => 'FileserverUsers', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Fileserver User'), ['controller' => 'FileserverUsers', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Macs'), ['controller' => 'Macs', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Mac'), ['controller' => 'Macs', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Tenants'), ['controller' => 'Tenants', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Tenant'), ['controller' => 'Tenants', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Memberships'), ['controller' => 'Memberships', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Membership'), ['controller' => 'Memberships', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List User Roles'), ['controller' => 'UserRoles', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New User Role'), ['controller' => 'UserRoles', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Roomkeys'), ['controller' => 'Roomkeys', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Roomkey'), ['controller' => 'Roomkeys', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Working Groups'), ['controller' => 'WorkingGroups', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Working Group'), ['controller' => 'WorkingGroups', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<div class="panel panel-default">
    <!-- Panel header -->
    <div class="panel-heading">
        <h3 class="panel-title"><?= h($person->id) ?></h3>
    </div>
    <table class="table table-striped" cellpadding="0" cellspacing="0">
        <tr>
            <td><?= __('Surname') ?></td>
            <td><?= h($person->surname) ?></td>
        </tr>
        <tr>
            <td><?= __('Forename') ?></td>
            <td><?= h($person->forename) ?></td>
        </tr>
        <tr>
            <td><?= __('Email') ?></td>
            <td><?= h($person->email) ?></td>
        </tr>
        <tr>
            <td><?= __('Matriculation Number') ?></td>
            <td><?= h($person->matriculation_number) ?></td>
        </tr>
        <tr>
            <td><?= __('Nationality') ?></td>
            <td><?= h($person->nationality) ?></td>
        </tr>
        <tr>
            <td><?= __('Password') ?></td>
            <td><?= h($person->password) ?></td>
        </tr>
        <tr>
            <td><?= __('Status') ?></td>
            <td><?= h($person->status) ?></td>
        </tr>
        <tr>
            <td><?= __('Id') ?></td>
            <td><?= $this->Number->format($person->id) ?></td>
        </tr>
        <tr>
            <td><?= __('Studentenwerk Identification') ?></td>
            <td><?= $this->Number->format($person->studentenwerk_identification) ?></td>
        </tr>
        <tr>
            <td><?= __('Eth Unlocked Primary') ?></td>
            <td><?= $this->Number->format($person->eth_unlocked_primary) ?></td>
        </tr>
        <tr>
            <td><?= __('Password Retrieval') ?></td>
            <td><?= $this->Number->format($person->password_retrieval) ?></td>
        </tr>
        <tr>
            <td><?= __('Failed Login Count') ?></td>
            <td><?= $this->Number->format($person->failed_login_count) ?></td>
        </tr>
        <tr>
            <td><?= __('Birthday') ?></td>
            <td><?= h($person->birthday) ?></td>
        </tr>
        <tr>
            <td><?= __('Failed Login Timestamp') ?></td>
            <td><?= h($person->failed_login_timestamp) ?></td>
        </tr>
        <tr>
            <td><?= __('Created') ?></td>
            <td><?= h($person->created) ?></td>
        </tr>
        <tr>
            <td><?= __('Modified') ?></td>
            <td><?= h($person->modified) ?></td>
        </tr>
        <tr>
            <td><?= __('Sex') ?></td>
            <td><?= $this->Text->autoParagraph(h($person->sex)); ?></td>
        </tr>
        <tr>
            <td><?= __('Last Passwords') ?></td>
            <td><?= $this->Text->autoParagraph(h($person->last_passwords)); ?></td>
        </tr>
    </table>
</div>

<div class="panel panel-default">
    <!-- Panel header -->
    <div class="panel-heading">
        <h3 class="panel-title"><?= __('Related FileserverUsers') ?></h3>
    </div>
    <?php if (!empty($person->fileserver_users)): ?>
        <table class="table table-striped">
            <thead>
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Person Id') ?></th>
                <th><?= __('Username') ?></th>
                <th><?= __('Password') ?></th>
                <th><?= __('Vip') ?></th>
                <th><?= __('Accepted') ?></th>
                <th><?= __('Active') ?></th>
                <th><?= __('Created') ?></th>
                <th><?= __('Password Retrieval') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($person->fileserver_users as $fileserverUsers): ?>
                <tr>
                    <td><?= h($fileserverUsers->id) ?></td>
                    <td><?= h($fileserverUsers->person_id) ?></td>
                    <td><?= h($fileserverUsers->username) ?></td>
                    <td><?= h($fileserverUsers->password) ?></td>
                    <td><?= h($fileserverUsers->vip) ?></td>
                    <td><?= h($fileserverUsers->accepted) ?></td>
                    <td><?= h($fileserverUsers->active) ?></td>
                    <td><?= h($fileserverUsers->created) ?></td>
                    <td><?= h($fileserverUsers->password_retrieval) ?></td>
                    <td class="actions">
                        <?= $this->Html->link('', ['controller' => 'FileserverUsers', 'action' => 'view', $fileserverUsers->id], ['title' => __('View'), 'class' => 'btn btn-default glyphicon glyphicon-eye-open']) ?>
                        <?= $this->Html->link('', ['controller' => 'FileserverUsers', 'action' => 'edit', $fileserverUsers->id], ['title' => __('Edit'), 'class' => 'btn btn-default glyphicon glyphicon-pencil']) ?>
                        <?= $this->Form->postLink('', ['controller' => 'FileserverUsers', 'action' => 'delete', $fileserverUsers->id], ['confirm' => __('Are you sure you want to delete # {0}?', $fileserverUsers->id), 'title' => __('Delete'), 'class' => 'btn btn-default glyphicon glyphicon-trash']) ?>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p class="panel-body">no related FileserverUsers</p>
    <?php endif; ?>
</div>
<div class="panel panel-default">
    <!-- Panel header -->
    <div class="panel-heading">
        <h3 class="panel-title"><?= __('Related Macs') ?></h3>
    </div>
    <?php if (!empty($person->macs)): ?>
        <table class="table table-striped">
            <thead>
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Person Id') ?></th>
                <th><?= __('Mac') ?></th>
                <th><?= __('Device Name') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($person->macs as $macs): ?>
                <tr>
                    <td><?= h($macs->id) ?></td>
                    <td><?= h($macs->person_id) ?></td>
                    <td><?= h($macs->mac) ?></td>
                    <td><?= h($macs->device_name) ?></td>
                    <td class="actions">
                        <?= $this->Html->link('', ['controller' => 'Macs', 'action' => 'view', $macs->id], ['title' => __('View'), 'class' => 'btn btn-default glyphicon glyphicon-eye-open']) ?>
                        <?= $this->Html->link('', ['controller' => 'Macs', 'action' => 'edit', $macs->id], ['title' => __('Edit'), 'class' => 'btn btn-default glyphicon glyphicon-pencil']) ?>
                        <?= $this->Form->postLink('', ['controller' => 'Macs', 'action' => 'delete', $macs->id], ['confirm' => __('Are you sure you want to delete # {0}?', $macs->id), 'title' => __('Delete'), 'class' => 'btn btn-default glyphicon glyphicon-trash']) ?>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p class="panel-body">no related Macs</p>
    <?php endif; ?>
</div>
<div class="panel panel-default">
    <!-- Panel header -->
    <div class="panel-heading">
        <h3 class="panel-title"><?= __('Related Tenants') ?></h3>
    </div>
    <?php if (!empty($person->tenants)): ?>
        <table class="table table-striped">
            <thead>
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Person Id') ?></th>
                <th><?= __('Room Id') ?></th>
                <th><?= __('Date Move In') ?></th>
                <th><?= __('Date Move Out') ?></th>
                <th><?= __('Tenant Type') ?></th>
                <th><?= __('Comment') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($person->tenants as $tenants): ?>
                <tr>
                    <td><?= h($tenants->id) ?></td>
                    <td><?= h($tenants->person_id) ?></td>
                    <td><?= h($tenants->room_id) ?></td>
                    <td><?= h($tenants->date_move_in) ?></td>
                    <td><?= h($tenants->date_move_out) ?></td>
                    <td><?= h($tenants->tenant_type) ?></td>
                    <td><?= h($tenants->comment) ?></td>
                    <td class="actions">
                        <?= $this->Html->link('', ['controller' => 'Tenants', 'action' => 'view', $tenants->id], ['title' => __('View'), 'class' => 'btn btn-default glyphicon glyphicon-eye-open']) ?>
                        <?= $this->Html->link('', ['controller' => 'Tenants', 'action' => 'edit', $tenants->id], ['title' => __('Edit'), 'class' => 'btn btn-default glyphicon glyphicon-pencil']) ?>
                        <?= $this->Form->postLink('', ['controller' => 'Tenants', 'action' => 'delete', $tenants->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tenants->id), 'title' => __('Delete'), 'class' => 'btn btn-default glyphicon glyphicon-trash']) ?>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p class="panel-body">no related Tenants</p>
    <?php endif; ?>
</div>
<div class="panel panel-default">
    <!-- Panel header -->
    <div class="panel-heading">
        <h3 class="panel-title"><?= __('Related Memberships') ?></h3>
    </div>
    <?php if (!empty($person->memberships)): ?>
        <table class="table table-striped">
            <thead>
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Name') ?></th>
                <th><?= __('Type') ?></th>
                <th><?= __('Description') ?></th>
                <th><?= __('Membership Fee') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($person->memberships as $memberships): ?>
                <tr>
                    <td><?= h($memberships->id) ?></td>
                    <td><?= h($memberships->name) ?></td>
                    <td><?= h($memberships->type) ?></td>
                    <td><?= h($memberships->description) ?></td>
                    <td><?= h($memberships->membership_fee) ?></td>
                    <td class="actions">
                        <?= $this->Html->link('', ['controller' => 'Memberships', 'action' => 'view', $memberships->id], ['title' => __('View'), 'class' => 'btn btn-default glyphicon glyphicon-eye-open']) ?>
                        <?= $this->Html->link('', ['controller' => 'Memberships', 'action' => 'edit', $memberships->id], ['title' => __('Edit'), 'class' => 'btn btn-default glyphicon glyphicon-pencil']) ?>
                        <?= $this->Form->postLink('', ['controller' => 'Memberships', 'action' => 'delete', $memberships->id], ['confirm' => __('Are you sure you want to delete # {0}?', $memberships->id), 'title' => __('Delete'), 'class' => 'btn btn-default glyphicon glyphicon-trash']) ?>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p class="panel-body">no related Memberships</p>
    <?php endif; ?>
</div>
<div class="panel panel-default">
    <!-- Panel header -->
    <div class="panel-heading">
        <h3 class="panel-title"><?= __('Related UserRoles') ?></h3>
    </div>
    <?php if (!empty($person->user_roles)): ?>
        <table class="table table-striped">
            <thead>
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Title') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($person->user_roles as $userRoles): ?>
                <tr>
                    <td><?= h($userRoles->id) ?></td>
                    <td><?= h($userRoles->title) ?></td>
                    <td class="actions">
                        <?= $this->Html->link('', ['controller' => 'UserRoles', 'action' => 'view', $userRoles->id], ['title' => __('View'), 'class' => 'btn btn-default glyphicon glyphicon-eye-open']) ?>
                        <?= $this->Html->link('', ['controller' => 'UserRoles', 'action' => 'edit', $userRoles->id], ['title' => __('Edit'), 'class' => 'btn btn-default glyphicon glyphicon-pencil']) ?>
                        <?= $this->Form->postLink('', ['controller' => 'UserRoles', 'action' => 'delete', $userRoles->id], ['confirm' => __('Are you sure you want to delete # {0}?', $userRoles->id), 'title' => __('Delete'), 'class' => 'btn btn-default glyphicon glyphicon-trash']) ?>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p class="panel-body">no related UserRoles</p>
    <?php endif; ?>
</div>
<div class="panel panel-default">
    <!-- Panel header -->
    <div class="panel-heading">
        <h3 class="panel-title"><?= __('Related Roomkeys') ?></h3>
    </div>
    <?php if (!empty($person->roomkeys)): ?>
        <table class="table table-striped">
            <thead>
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Name') ?></th>
                <th><?= __('Discription') ?></th>
                <th><?= __('Amount') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($person->roomkeys as $roomkeys): ?>
                <tr>
                    <td><?= h($roomkeys->id) ?></td>
                    <td><?= h($roomkeys->name) ?></td>
                    <td><?= h($roomkeys->discription) ?></td>
                    <td><?= h($roomkeys->amount) ?></td>
                    <td class="actions">
                        <?= $this->Html->link('', ['controller' => 'Roomkeys', 'action' => 'view', $roomkeys->id], ['title' => __('View'), 'class' => 'btn btn-default glyphicon glyphicon-eye-open']) ?>
                        <?= $this->Html->link('', ['controller' => 'Roomkeys', 'action' => 'edit', $roomkeys->id], ['title' => __('Edit'), 'class' => 'btn btn-default glyphicon glyphicon-pencil']) ?>
                        <?= $this->Form->postLink('', ['controller' => 'Roomkeys', 'action' => 'delete', $roomkeys->id], ['confirm' => __('Are you sure you want to delete # {0}?', $roomkeys->id), 'title' => __('Delete'), 'class' => 'btn btn-default glyphicon glyphicon-trash']) ?>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p class="panel-body">no related Roomkeys</p>
    <?php endif; ?>
</div>
<div class="panel panel-default">
    <!-- Panel header -->
    <div class="panel-heading">
        <h3 class="panel-title"><?= __('Related WorkingGroups') ?></h3>
    </div>
    <?php if (!empty($person->working_groups)): ?>
        <table class="table table-striped">
            <thead>
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Name') ?></th>
                <th><?= __('Description') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($person->working_groups as $workingGroups): ?>
                <tr>
                    <td><?= h($workingGroups->id) ?></td>
                    <td><?= h($workingGroups->name) ?></td>
                    <td><?= h($workingGroups->description) ?></td>
                    <td class="actions">
                        <?= $this->Html->link('', ['controller' => 'WorkingGroups', 'action' => 'view', $workingGroups->id], ['title' => __('View'), 'class' => 'btn btn-default glyphicon glyphicon-eye-open']) ?>
                        <?= $this->Html->link('', ['controller' => 'WorkingGroups', 'action' => 'edit', $workingGroups->id], ['title' => __('Edit'), 'class' => 'btn btn-default glyphicon glyphicon-pencil']) ?>
                        <?= $this->Form->postLink('', ['controller' => 'WorkingGroups', 'action' => 'delete', $workingGroups->id], ['confirm' => __('Are you sure you want to delete # {0}?', $workingGroups->id), 'title' => __('Delete'), 'class' => 'btn btn-default glyphicon glyphicon-trash']) ?>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p class="panel-body">no related WorkingGroups</p>
    <?php endif; ?>
</div>
