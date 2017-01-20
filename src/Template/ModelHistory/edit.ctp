<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $modelHistory->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $modelHistory->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Model History'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List People'), ['controller' => 'People', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Person'), ['controller' => 'People', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="modelHistory form large-9 medium-8 columns content">
    <?= $this->Form->create($modelHistory) ?>
    <fieldset>
        <legend><?= __('Edit Model History') ?></legend>
        <?php
            echo $this->Form->input('model');
            echo $this->Form->input('foreign_key');
            echo $this->Form->input('user_id');
            echo $this->Form->input('action');
            echo $this->Form->input('data');
            echo $this->Form->input('context');
            echo $this->Form->input('context_type');
            echo $this->Form->input('context_slug');
            echo $this->Form->input('revision');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
