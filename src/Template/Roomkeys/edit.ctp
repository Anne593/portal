<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
            __('Delete'),
            ['action' => 'delete', $roomkey->id],
            ['confirm' => __('Are you sure you want to delete # {0}?', $roomkey->id)]
            )
            ?>
        </li>
        <li><?= $this->Html->link(__('List Roomkeys'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List People'), ['controller' => 'People', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Person'), ['controller' => 'People', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="roomkeys form large-9 medium-8 columns content">
    <?= $this->Form->create($roomkey) ?>
    <fieldset>
        <legend><?= __('Edit Roomkey') ?></legend>
        <?php
            echo $this->Form->input('name');
        echo $this->Form->input('discription');
        echo $this->Form->input('amount');
        echo $this->Form->input('people._ids', ['options' => $people]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
