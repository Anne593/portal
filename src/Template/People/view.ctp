<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Person'), ['action' => 'edit', $person->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Person'), ['action' => 'delete', $person->id], ['confirm' => __('Are you sure you want to delete # {0}?', $person->id)]) ?> </li>
        <li><?= $this->Html->link(__('List People'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Person'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Fileserver Users'), ['controller' => 'FileserverUsers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Fileserver User'), ['controller' => 'FileserverUsers', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List House Contibution'), ['controller' => 'HouseContibution', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New House Contibution'), ['controller' => 'HouseContibution', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Macs'), ['controller' => 'Macs', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Mac'), ['controller' => 'Macs', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List People Network'), ['controller' => 'PeopleNetwork', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New People Network'), ['controller' => 'PeopleNetwork', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Tenants'), ['controller' => 'Tenants', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tenant'), ['controller' => 'Tenants', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List User Roles'), ['controller' => 'UserRoles', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User Role'), ['controller' => 'UserRoles', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Roomkeys'), ['controller' => 'Roomkeys', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Roomkey'), ['controller' => 'Roomkeys', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Working Groups'), ['controller' => 'WorkingGroups', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Working Group'), ['controller' => 'WorkingGroups', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="people view large-9 medium-8 columns content">
    <h3><?= h($person->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Surname') ?></th>
            <td><?= h($person->surname) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Forename') ?></th>
            <td><?= h($person->forename) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($person->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Matriculation Number') ?></th>
            <td><?= h($person->matriculation_number) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Password') ?></th>
            <td><?= h($person->password) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= h($person->status) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($person->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Studentenwerk Identification') ?></th>
            <td><?= $this->Number->format($person->studentenwerk_identification) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Password Retrieval') ?></th>
            <td><?= $this->Number->format($person->password_retrieval) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Failed Login Count') ?></th>
            <td><?= $this->Number->format($person->failed_login_count) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Birthday') ?></th>
            <td><?= h($person->birthday) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Failed Login Timestamp') ?></th>
            <td><?= h($person->failed_login_timestamp) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($person->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($person->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Last Passwords') ?></h4>
        <?= $this->Text->autoParagraph(h($person->last_passwords)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Fileserver Users') ?></h4>
        <?php if (!empty($person->fileserver_users)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Person Id') ?></th>
                <th scope="col"><?= __('Username') ?></th>
                <th scope="col"><?= __('Password') ?></th>
                <th scope="col"><?= __('Vip') ?></th>
                <th scope="col"><?= __('Accepted') ?></th>
                <th scope="col"><?= __('Active') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Password Retrieval') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
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
                    <?= $this->Html->link(__('View'), ['controller' => 'FileserverUsers', 'action' => 'view', $fileserverUsers->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'FileserverUsers', 'action' => 'edit', $fileserverUsers->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'FileserverUsers', 'action' => 'delete', $fileserverUsers->id], ['confirm' => __('Are you sure you want to delete # {0}?', $fileserverUsers->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related House Contibution') ?></h4>
        <?php if (!empty($person->house_contibution)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Person Id') ?></th>
                <th scope="col"><?= __('Semester') ?></th>
                <th scope="col"><?= __('Payment') ?></th>
                <th scope="col"><?= __('Social Service') ?></th>
                <th scope="col"><?= __('Social Service Comment') ?></th>
                <th scope="col"><?= __('New Tenant Bar') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($person->house_contibution as $houseContibution): ?>
            <tr>
                <td><?= h($houseContibution->id) ?></td>
                <td><?= h($houseContibution->person_id) ?></td>
                <td><?= h($houseContibution->semester) ?></td>
                <td><?= h($houseContibution->payment) ?></td>
                <td><?= h($houseContibution->social_service) ?></td>
                <td><?= h($houseContibution->social_service_comment) ?></td>
                <td><?= h($houseContibution->new_tenant_bar) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'HouseContibution', 'action' => 'view', $houseContibution->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'HouseContibution', 'action' => 'edit', $houseContibution->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'HouseContibution', 'action' => 'delete', $houseContibution->id], ['confirm' => __('Are you sure you want to delete # {0}?', $houseContibution->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Macs') ?></h4>
        <?php if (!empty($person->macs)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Person Id') ?></th>
                <th scope="col"><?= __('Mac') ?></th>
                <th scope="col"><?= __('Device Name') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($person->macs as $macs): ?>
            <tr>
                <td><?= h($macs->id) ?></td>
                <td><?= h($macs->person_id) ?></td>
                <td><?= h($macs->mac) ?></td>
                <td><?= h($macs->device_name) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Macs', 'action' => 'view', $macs->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Macs', 'action' => 'edit', $macs->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Macs', 'action' => 'delete', $macs->id], ['confirm' => __('Are you sure you want to delete # {0}?', $macs->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related People Network') ?></h4>
        <?php if (!empty($person->people_network)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Person Id') ?></th>
                <th scope="col"><?= __('Data Access') ?></th>
                <th scope="col"><?= __('Mail Access') ?></th>
                <th scope="col"><?= __('Tim') ?></th>
                <th scope="col"><?= __('Eth Unlocked Primary') ?></th>
                <th scope="col"><?= __('Comment') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($person->people_network as $peopleNetwork): ?>
            <tr>
                <td><?= h($peopleNetwork->id) ?></td>
                <td><?= h($peopleNetwork->person_id) ?></td>
                <td><?= h($peopleNetwork->data_access) ?></td>
                <td><?= h($peopleNetwork->mail_access) ?></td>
                <td><?= h($peopleNetwork->tim) ?></td>
                <td><?= h($peopleNetwork->eth_unlocked_primary) ?></td>
                <td><?= h($peopleNetwork->comment) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'PeopleNetwork', 'action' => 'view', $peopleNetwork->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'PeopleNetwork', 'action' => 'edit', $peopleNetwork->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'PeopleNetwork', 'action' => 'delete', $peopleNetwork->id], ['confirm' => __('Are you sure you want to delete # {0}?', $peopleNetwork->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Tenants') ?></h4>
        <?php if (!empty($person->tenants)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Person Id') ?></th>
                <th scope="col"><?= __('Room Id') ?></th>
                <th scope="col"><?= __('Date Move In') ?></th>
                <th scope="col"><?= __('Date Move Out') ?></th>
                <th scope="col"><?= __('Tenant Type') ?></th>
                <th scope="col"><?= __('Comment') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
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
                    <?= $this->Html->link(__('View'), ['controller' => 'Tenants', 'action' => 'view', $tenants->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Tenants', 'action' => 'edit', $tenants->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Tenants', 'action' => 'delete', $tenants->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tenants->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related User Roles') ?></h4>
        <?php if (!empty($person->user_roles)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Title') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($person->user_roles as $userRoles): ?>
            <tr>
                <td><?= h($userRoles->id) ?></td>
                <td><?= h($userRoles->title) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'UserRoles', 'action' => 'view', $userRoles->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'UserRoles', 'action' => 'edit', $userRoles->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'UserRoles', 'action' => 'delete', $userRoles->id], ['confirm' => __('Are you sure you want to delete # {0}?', $userRoles->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Roomkeys') ?></h4>
        <?php if (!empty($person->roomkeys)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Discription') ?></th>
                <th scope="col"><?= __('Amount') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($person->roomkeys as $roomkeys): ?>
            <tr>
                <td><?= h($roomkeys->id) ?></td>
                <td><?= h($roomkeys->name) ?></td>
                <td><?= h($roomkeys->discription) ?></td>
                <td><?= h($roomkeys->amount) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Roomkeys', 'action' => 'view', $roomkeys->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Roomkeys', 'action' => 'edit', $roomkeys->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Roomkeys', 'action' => 'delete', $roomkeys->id], ['confirm' => __('Are you sure you want to delete # {0}?', $roomkeys->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Working Groups') ?></h4>
        <?php if (!empty($person->working_groups)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Description') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($person->working_groups as $workingGroups): ?>
            <tr>
                <td><?= h($workingGroups->id) ?></td>
                <td><?= h($workingGroups->name) ?></td>
                <td><?= h($workingGroups->description) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'WorkingGroups', 'action' => 'view', $workingGroups->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'WorkingGroups', 'action' => 'edit', $workingGroups->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'WorkingGroups', 'action' => 'delete', $workingGroups->id], ['confirm' => __('Are you sure you want to delete # {0}?', $workingGroups->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
