<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit People Network Membership'), ['action' => 'edit', $peopleNetworkMembership->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete People Network Membership'), ['action' => 'delete', $peopleNetworkMembership->id], ['confirm' => __('Are you sure you want to delete # {0}?', $peopleNetworkMembership->id)]) ?> </li>
        <li><?= $this->Html->link(__('List People Network Memberships'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New People Network Membership'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Memberships'), ['controller' => 'Memberships', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Membership'), ['controller' => 'Memberships', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List People Network'), ['controller' => 'PeopleNetwork', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New People Network'), ['controller' => 'PeopleNetwork', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="peopleNetworkMemberships view large-9 medium-8 columns content">
    <h3><?= h($peopleNetworkMembership->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Membership') ?></th>
            <td><?= $peopleNetworkMembership->has('membership') ? $this->Html->link($peopleNetworkMembership->membership->name, ['controller' => 'Memberships', 'action' => 'view', $peopleNetworkMembership->membership->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($peopleNetworkMembership->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Networkinfo Id') ?></th>
            <td><?= $this->Number->format($peopleNetworkMembership->networkinfo_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date Join') ?></th>
            <td><?= h($peopleNetworkMembership->date_join) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date Quit') ?></th>
            <td><?= h($peopleNetworkMembership->date_quit) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Payment') ?></th>
            <td><?= $peopleNetworkMembership->payment ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
</div>
