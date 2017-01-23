<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List People'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Fileserver Users'), ['controller' => 'FileserverUsers', 'action' => 'index'])
            ?>
        </li>
        <li><?= $this->Html->link(__('New Fileserver User'), ['controller' => 'FileserverUsers', 'action' => 'add'])
            ?>
        </li>
        <li><?= $this->Html->link(__('List Macs'), ['controller' => 'Macs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Mac'), ['controller' => 'Macs', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List PeopleRooms'), ['controller' => 'PeopleRooms', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New PeopleRoom'), ['controller' => 'PeopleRooms', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Memberships'), ['controller' => 'Memberships', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Membership'), ['controller' => 'Memberships', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List User Roles'), ['controller' => 'UserRoles', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User Role'), ['controller' => 'UserRoles', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Roomkeys'), ['controller' => 'Roomkeys', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Roomkey'), ['controller' => 'Roomkeys', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Working Groups'), ['controller' => 'WorkingGroups', 'action' => 'index'])
            ?>
        </li>
        <li><?= $this->Html->link(__('New Working Group'), ['controller' => 'WorkingGroups', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="people form large-9 medium-8 columns content">
    <?= $this->Form->create($person) ?>
    <fieldset>
        <legend><?= __('Add Person') ?></legend>
        <?php
            echo $this->Form->input('surname');
        echo $this->Form->input('forename');
        echo $this->Form->input('email');
        echo $this->Form->input('birthday');
        echo $this->Form->input('matriculation_number');
        echo $this->Form->input('studentenwerk_identification');
        echo $this->Form->input('nationality');
        echo $this->Form->input('sex');
        echo $this->Form->input('eth_unlocked_primary');
        echo $this->Form->input('password');
        echo $this->Form->input('password_retrieval');
        echo $this->Form->input('status');
        echo $this->Form->input('failed_login_count');
        echo $this->Form->input('failed_login_timestamp', ['empty' => true]);
        echo $this->Form->input('last_passwords');
        echo $this->Form->input('memberships._ids', ['options' => $memberships]);
        echo $this->Form->input('user_roles._ids', ['options' => $userRoles]);
        echo $this->Form->input('roomkeys._ids', ['options' => $roomkeys]);
        echo $this->Form->input('working_groups._ids', ['options' => $workingGroups]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
