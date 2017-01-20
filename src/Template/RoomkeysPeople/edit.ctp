<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $roomkeysPerson->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $roomkeysPerson->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Roomkeys People'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Roomkeys'), ['controller' => 'Roomkeys', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Roomkey'), ['controller' => 'Roomkeys', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List People'), ['controller' => 'People', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Person'), ['controller' => 'People', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="roomkeysPeople form large-9 medium-8 columns content">
    <?= $this->Form->create($roomkeysPerson) ?>
    <fieldset>
        <legend><?= __('Edit Roomkeys Person') ?></legend>
        <?php
            echo $this->Form->input('roomkey_id', ['options' => $roomkeys]);
            echo $this->Form->input('person_id', ['options' => $people]);
            echo $this->Form->input('type');
            echo $this->Form->input('comment');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
