<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $workingGroupsPerson->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $workingGroupsPerson->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Working Groups People'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List People'), ['controller' => 'People', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Person'), ['controller' => 'People', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Working Groups'), ['controller' => 'WorkingGroups', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Working Group'), ['controller' => 'WorkingGroups', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="workingGroupsPeople form large-9 medium-8 columns content">
    <?= $this->Form->create($workingGroupsPerson) ?>
    <fieldset>
        <legend><?= __('Edit Working Groups Person') ?></legend>
        <?php
            echo $this->Form->input('person_id', ['options' => $people]);
            echo $this->Form->input('working_group_id', ['options' => $workingGroups]);
            echo $this->Form->input('member_since');
            echo $this->Form->input('member_until', ['empty' => true]);
            echo $this->Form->input('type');
            echo $this->Form->input('comment');
            echo $this->Form->input('mailing_list_enabled');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
