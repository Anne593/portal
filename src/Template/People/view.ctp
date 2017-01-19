<?php
$this->assign('title', __('people.view.title'));
?>

<h1 class="page-header">
    <?= __('people.view.title') ?>
    <div class="pull-right">
        <?= $this->CkTools->editButton($person) ?>
        <?= $this->ListFilter->backToListButton() ?>
    </div>
</h1>

<div class="people view">
    <dl class="dl dl-horizontal">

        <dt><?= __('person.surname') ?></dt>
        <dd><?= h($person->surname) ?></dd>

        <dt><?= __('person.forename') ?></dt>
        <dd><?= h($person->forename) ?></dd>

        <dt><?= __('person.email') ?></dt>
        <dd><?= h($person->email) ?></dd>

        <dt><?= __('person.matriculation_number') ?></dt>
        <dd><?= h($person->matriculation_number) ?></dd>

        <dt><?= __('person.nationality') ?></dt>
        <dd><?= h($person->nationality) ?></dd>

        <dt><?= __('person.password') ?></dt>
        <dd><?= h($person->password) ?></dd>

        <dt><?= __('person.status') ?></dt>
        <dd><?= h($person->status) ?></dd>

        <dt><?= __('person.id') ?></dt>
        <dd><?= $this->Number->format($person->id) ?></dd>

        <dt><?= __('person.studentenwerk_identification') ?></dt>
        <dd><?= $this->Number->format($person->studentenwerk_identification) ?></dd>

        <dt><?= __('person.eth_unlocked_primary') ?></dt>
        <dd><?= $this->Number->format($person->eth_unlocked_primary) ?></dd>

        <dt><?= __('person.password_retrieval') ?></dt>
        <dd><?= $this->Number->format($person->password_retrieval) ?></dd>

        <dt><?= __('person.failed_login_count') ?></dt>
        <dd><?= $this->Number->format($person->failed_login_count) ?></dd>

        <dt><?= __('person.birthday') ?></dt>
        <dd><?= h($person->birthday) ?></dd>

        <dt><?= __('person.failed_login_timestamp') ?></dt>
        <dd><?= h($person->failed_login_timestamp) ?></dd>

        <dt><?= __('created') ?></dt>
        <dd><?= h($person->created) ?></dd>

        <dt><?= __('modified') ?></dt>
        <dd><?= h($person->modified) ?></dd>

        <dt><?= __('person.sex') ?></dt>
        <dd><?= $this->Text->autoParagraph(h($person->sex)); ?></dd>

        <dt><?= __('person.last_passwords') ?></dt>
        <dd><?= $this->Text->autoParagraph(h($person->last_passwords)); ?></dd>
    </dl>
</div>

<div class="related">
    <h4 class="subheader"><?= __('fileserver_users') ?></h4>
    <?php if (!empty($person->fileserver_users)): ?>
    <div class="table-responsive">
        <table class="table">
            <tr>
                <th><?= __('fileserverUser.id') ?></th>
                <th><?= __('fileserverUser.person_id') ?></th>
                <th><?= __('fileserverUser.username') ?></th>
                <th><?= __('fileserverUser.password') ?></th>
                <th><?= __('fileserverUser.vip') ?></th>
                <th><?= __('fileserverUser.accepted') ?></th>
                <th><?= __('fileserverUser.active') ?></th>
                <th><?= __('fileserverUser.created') ?></th>
                <th><?= __('fileserverUser.password_retrieval') ?></th>
                <th class="actions"><?= __('lists.actions') ?></th>
            </tr>
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
                    <?= $this->CkTools->viewButton($fileserverUsers) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    </div>
    <?php endif; ?>
</div>
<div class="related">
    <h4 class="subheader"><?= __('macs') ?></h4>
    <?php if (!empty($person->macs)): ?>
    <div class="table-responsive">
        <table class="table">
            <tr>
                <th><?= __('mac.id') ?></th>
                <th><?= __('mac.person_id') ?></th>
                <th><?= __('mac.mac') ?></th>
                <th><?= __('mac.device_name') ?></th>
                <th class="actions"><?= __('lists.actions') ?></th>
            </tr>
            <?php foreach ($person->macs as $macs): ?>
            <tr>
                <td><?= h($macs->id) ?></td>
                <td><?= h($macs->person_id) ?></td>
                <td><?= h($macs->mac) ?></td>
                <td><?= h($macs->device_name) ?></td>
                <td class="actions">
                    <?= $this->CkTools->viewButton($macs) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    </div>
    <?php endif; ?>
</div>
<div class="related">
    <h4 class="subheader"><?= __('tenants') ?></h4>
    <?php if (!empty($person->tenants)): ?>
    <div class="table-responsive">
        <table class="table">
            <tr>
                <th><?= __('tenant.id') ?></th>
                <th><?= __('tenant.person_id') ?></th>
                <th><?= __('tenant.room_id') ?></th>
                <th><?= __('tenant.date_move_in') ?></th>
                <th><?= __('tenant.date_move_out') ?></th>
                <th><?= __('tenant.tenant_type') ?></th>
                <th><?= __('tenant.comment') ?></th>
                <th class="actions"><?= __('lists.actions') ?></th>
            </tr>
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
                    <?= $this->CkTools->viewButton($tenants) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    </div>
    <?php endif; ?>
</div>
<div class="related">
    <h4 class="subheader"><?= __('memberships') ?></h4>
    <?php if (!empty($person->memberships)): ?>
    <div class="table-responsive">
        <table class="table">
            <tr>
                <th><?= __('membership.id') ?></th>
                <th><?= __('membership.name') ?></th>
                <th><?= __('membership.type') ?></th>
                <th><?= __('membership.description') ?></th>
                <th><?= __('membership.membership_fee') ?></th>
                <th class="actions"><?= __('lists.actions') ?></th>
            </tr>
            <?php foreach ($person->memberships as $memberships): ?>
            <tr>
                <td><?= h($memberships->id) ?></td>
                <td><?= h($memberships->name) ?></td>
                <td><?= h($memberships->type) ?></td>
                <td><?= h($memberships->description) ?></td>
                <td><?= h($memberships->membership_fee) ?></td>
                <td class="actions">
                    <?= $this->CkTools->viewButton($memberships) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    </div>
    <?php endif; ?>
</div>
<div class="related">
    <h4 class="subheader"><?= __('user_roles') ?></h4>
    <?php if (!empty($person->user_roles)): ?>
    <div class="table-responsive">
        <table class="table">
            <tr>
                <th><?= __('userRole.id') ?></th>
                <th><?= __('userRole.title') ?></th>
                <th class="actions"><?= __('lists.actions') ?></th>
            </tr>
            <?php foreach ($person->user_roles as $userRoles): ?>
            <tr>
                <td><?= h($userRoles->id) ?></td>
                <td><?= h($userRoles->title) ?></td>
                <td class="actions">
                    <?= $this->CkTools->viewButton($userRoles) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    </div>
    <?php endif; ?>
</div>
<div class="related">
    <h4 class="subheader"><?= __('roomkeys') ?></h4>
    <?php if (!empty($person->roomkeys)): ?>
    <div class="table-responsive">
        <table class="table">
            <tr>
                <th><?= __('roomkey.id') ?></th>
                <th><?= __('roomkey.name') ?></th>
                <th><?= __('roomkey.discription') ?></th>
                <th><?= __('roomkey.amount') ?></th>
                <th class="actions"><?= __('lists.actions') ?></th>
            </tr>
            <?php foreach ($person->roomkeys as $roomkeys): ?>
            <tr>
                <td><?= h($roomkeys->id) ?></td>
                <td><?= h($roomkeys->name) ?></td>
                <td><?= h($roomkeys->discription) ?></td>
                <td><?= h($roomkeys->amount) ?></td>
                <td class="actions">
                    <?= $this->CkTools->viewButton($roomkeys) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    </div>
    <?php endif; ?>
</div>
<div class="related">
    <h4 class="subheader"><?= __('working_groups') ?></h4>
    <?php if (!empty($person->working_groups)): ?>
    <div class="table-responsive">
        <table class="table">
            <tr>
                <th><?= __('workingGroup.id') ?></th>
                <th><?= __('workingGroup.name') ?></th>
                <th><?= __('workingGroup.description') ?></th>
                <th class="actions"><?= __('lists.actions') ?></th>
            </tr>
            <?php foreach ($person->working_groups as $workingGroups): ?>
            <tr>
                <td><?= h($workingGroups->id) ?></td>
                <td><?= h($workingGroups->name) ?></td>
                <td><?= h($workingGroups->description) ?></td>
                <td class="actions">
                    <?= $this->CkTools->viewButton($workingGroups) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    </div>
    <?php endif; ?>
</div>
