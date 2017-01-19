<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit People Membership'), ['action' => 'edit', $peopleMembership->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete People Membership'), ['action' => 'delete', $peopleMembership->id], ['confirm' => __('Are you sure you want to delete # {0}?', $peopleMembership->id)]) ?> </li>
        <li><?= $this->Html->link(__('List People Memberships'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New People Membership'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List People'), ['controller' => 'People', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Person'), ['controller' => 'People', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Memberships'), ['controller' => 'Memberships', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Membership'), ['controller' => 'Memberships', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="peopleMemberships view large-9 medium-8 columns content">
    <h3><?= h($peopleMembership->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Person') ?></th>
            <td><?= $peopleMembership->has('person') ? $this->Html->link($peopleMembership->person->id, ['controller' => 'People', 'action' => 'view', $peopleMembership->person->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Membership') ?></th>
            <td><?= $peopleMembership->has('membership') ? $this->Html->link($peopleMembership->membership->name, ['controller' => 'Memberships', 'action' => 'view', $peopleMembership->membership->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Social Service Comment') ?></th>
            <td><?= h($peopleMembership->social_service_comment) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Comment') ?></th>
            <td><?= h($peopleMembership->comment) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($peopleMembership->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Semester') ?></th>
            <td><?= $this->Number->format($peopleMembership->semester) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Social Service') ?></th>
            <td><?= $this->Number->format($peopleMembership->social_service) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Payment') ?></th>
            <td><?= $peopleMembership->payment ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
</div>
