<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List People Network Memberships'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Memberships'), ['controller' => 'Memberships', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Membership'), ['controller' => 'Memberships', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List People Network'), ['controller' => 'PeopleNetwork', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New People Network'), ['controller' => 'PeopleNetwork', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="peopleNetworkMemberships form large-9 medium-8 columns content">
    <?= $this->Form->create($peopleNetworkMembership) ?>
    <fieldset>
        <legend><?= __('Add People Network Membership') ?></legend>
        <?php
            echo $this->Form->input('networkinfo_id');
            echo $this->Form->input('membership_id', ['options' => $memberships]);
            echo $this->Form->input('date_join', ['empty' => true]);
            echo $this->Form->input('date_quit', ['empty' => true]);
            echo $this->Form->input('payment');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
