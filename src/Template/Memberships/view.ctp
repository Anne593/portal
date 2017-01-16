<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Membership'), ['action' => 'edit', $membership->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Membership'), ['action' => 'delete', $membership->id], ['confirm' => __('Are you sure you want to delete # {0}?', $membership->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Memberships'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Membership'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List People Network'), ['controller' => 'PeopleNetwork', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New People Network'), ['controller' => 'PeopleNetwork', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="memberships view large-9 medium-8 columns content">
    <h3><?= h($membership->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($membership->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Description') ?></th>
            <td><?= h($membership->description) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($membership->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Membership Fee') ?></th>
            <td><?= $this->Number->format($membership->membership_fee) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Type') ?></h4>
        <?= $this->Text->autoParagraph(h($membership->type)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related People Network') ?></h4>
        <?php if (!empty($membership->people_network)): ?>
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
            <?php foreach ($membership->people_network as $peopleNetwork): ?>
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
</div>
