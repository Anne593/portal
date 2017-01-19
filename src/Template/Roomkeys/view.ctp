<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Roomkey'), ['action' => 'edit', $roomkey->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Roomkey'), ['action' => 'delete', $roomkey->id], ['confirm' => __('Are you sure you want to delete # {0}?', $roomkey->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Roomkeys'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Roomkey'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List People'), ['controller' => 'People', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Person'), ['controller' => 'People', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="roomkeys view large-9 medium-8 columns content">
    <h3><?= h($roomkey->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($roomkey->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($roomkey->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Amount') ?></th>
            <td><?= $this->Number->format($roomkey->amount) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Discription') ?></h4>
        <?= $this->Text->autoParagraph(h($roomkey->discription)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related People') ?></h4>
        <?php if (!empty($roomkey->people)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Surname') ?></th>
                <th scope="col"><?= __('Forename') ?></th>
                <th scope="col"><?= __('Email') ?></th>
                <th scope="col"><?= __('Birthday') ?></th>
                <th scope="col"><?= __('Matriculation Number') ?></th>
                <th scope="col"><?= __('Studentenwerk Identification') ?></th>
                <th scope="col"><?= __('Nationality') ?></th>
                <th scope="col"><?= __('Sex') ?></th>
                <th scope="col"><?= __('Eth Unlocked Primary') ?></th>
                <th scope="col"><?= __('Password') ?></th>
                <th scope="col"><?= __('Password Retrieval') ?></th>
                <th scope="col"><?= __('Status') ?></th>
                <th scope="col"><?= __('Failed Login Count') ?></th>
                <th scope="col"><?= __('Failed Login Timestamp') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Last Passwords') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($roomkey->people as $people): ?>
            <tr>
                <td><?= h($people->id) ?></td>
                <td><?= h($people->surname) ?></td>
                <td><?= h($people->forename) ?></td>
                <td><?= h($people->email) ?></td>
                <td><?= h($people->birthday) ?></td>
                <td><?= h($people->matriculation_number) ?></td>
                <td><?= h($people->studentenwerk_identification) ?></td>
                <td><?= h($people->nationality) ?></td>
                <td><?= h($people->sex) ?></td>
                <td><?= h($people->eth_unlocked_primary) ?></td>
                <td><?= h($people->password) ?></td>
                <td><?= h($people->password_retrieval) ?></td>
                <td><?= h($people->status) ?></td>
                <td><?= h($people->failed_login_count) ?></td>
                <td><?= h($people->failed_login_timestamp) ?></td>
                <td><?= h($people->created) ?></td>
                <td><?= h($people->modified) ?></td>
                <td><?= h($people->last_passwords) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'People', 'action' => 'view', $people->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'People', 'action' => 'edit', $people->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'People', 'action' => 'delete', $people->id], ['confirm' => __('Are you sure you want to delete # {0}?', $people->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
