<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit People Network'), ['action' => 'edit', $peopleNetwork->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete People Network'), ['action' => 'delete', $peopleNetwork->id], ['confirm' => __('Are you sure you want to delete # {0}?', $peopleNetwork->id)]) ?> </li>
        <li><?= $this->Html->link(__('List People Network'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New People Network'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List People'), ['controller' => 'People', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Person'), ['controller' => 'People', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Memberships'), ['controller' => 'Memberships', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Membership'), ['controller' => 'Memberships', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="peopleNetwork view large-9 medium-8 columns content">
    <h3><?= h($peopleNetwork->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Person') ?></th>
            <td><?= $peopleNetwork->has('person') ? $this->Html->link($peopleNetwork->person->id, ['controller' => 'People', 'action' => 'view', $peopleNetwork->person->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tim') ?></th>
            <td><?= h($peopleNetwork->tim) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Comment') ?></th>
            <td><?= h($peopleNetwork->comment) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($peopleNetwork->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Data Access') ?></th>
            <td><?= $peopleNetwork->data_access ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Mail Access') ?></th>
            <td><?= $peopleNetwork->mail_access ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Eth Unlocked Primary') ?></h4>
        <?= $this->Text->autoParagraph(h($peopleNetwork->eth_unlocked_primary)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Memberships') ?></h4>
        <?php if (!empty($peopleNetwork->memberships)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Type') ?></th>
                <th scope="col"><?= __('Description') ?></th>
                <th scope="col"><?= __('Membership Fee') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($peopleNetwork->memberships as $memberships): ?>
            <tr>
                <td><?= h($memberships->id) ?></td>
                <td><?= h($memberships->name) ?></td>
                <td><?= h($memberships->type) ?></td>
                <td><?= h($memberships->description) ?></td>
                <td><?= h($memberships->membership_fee) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Memberships', 'action' => 'view', $memberships->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Memberships', 'action' => 'edit', $memberships->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Memberships', 'action' => 'delete', $memberships->id], ['confirm' => __('Are you sure you want to delete # {0}?', $memberships->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
