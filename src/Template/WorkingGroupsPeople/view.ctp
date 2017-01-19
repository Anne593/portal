<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Working Groups Person'), ['action' => 'edit', $workingGroupsPerson->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Working Groups Person'), ['action' => 'delete', $workingGroupsPerson->id], ['confirm' => __('Are you sure you want to delete # {0}?', $workingGroupsPerson->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Working Groups People'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Working Groups Person'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List People'), ['controller' => 'People', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Person'), ['controller' => 'People', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Working Groups'), ['controller' => 'WorkingGroups', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Working Group'), ['controller' => 'WorkingGroups', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="workingGroupsPeople view large-9 medium-8 columns content">
    <h3><?= h($workingGroupsPerson->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Person') ?></th>
            <td><?= $workingGroupsPerson->has('person') ? $this->Html->link($workingGroupsPerson->person->id, ['controller' => 'People', 'action' => 'view', $workingGroupsPerson->person->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Working Group') ?></th>
            <td><?= $workingGroupsPerson->has('working_group') ? $this->Html->link($workingGroupsPerson->working_group->name, ['controller' => 'WorkingGroups', 'action' => 'view', $workingGroupsPerson->working_group->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($workingGroupsPerson->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Member Since') ?></th>
            <td><?= h($workingGroupsPerson->member_since) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Member Until') ?></th>
            <td><?= h($workingGroupsPerson->member_until) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Mailing List Enabled') ?></th>
            <td><?= $workingGroupsPerson->mailing_list_enabled ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Type') ?></h4>
        <?= $this->Text->autoParagraph(h($workingGroupsPerson->type)); ?>
    </div>
    <div class="row">
        <h4><?= __('Comment') ?></h4>
        <?= $this->Text->autoParagraph(h($workingGroupsPerson->comment)); ?>
    </div>
</div>
