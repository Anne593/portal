<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $peopleNetwork->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $peopleNetwork->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List People Network'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List People'), ['controller' => 'People', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Person'), ['controller' => 'People', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Memberships'), ['controller' => 'Memberships', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Membership'), ['controller' => 'Memberships', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="peopleNetwork form large-9 medium-8 columns content">
    <?= $this->Form->create($peopleNetwork) ?>
    <fieldset>
        <legend><?= __('Edit People Network') ?></legend>
        <?php
            echo $this->Form->input('person_id', ['options' => $people]);
            echo $this->Form->input('data_access');
            echo $this->Form->input('mail_access');
            echo $this->Form->input('tim');
            echo $this->Form->input('eth_unlocked_primary');
            echo $this->Form->input('comment');
            echo $this->Form->input('memberships._ids', ['options' => $memberships]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
