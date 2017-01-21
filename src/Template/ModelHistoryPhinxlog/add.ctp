<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Model History Phinxlog'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Phinxlog'), ['controller' => 'Phinxlog', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Phinxlog'), ['controller' => 'Phinxlog', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Model History'), ['controller' => 'ModelHistory', 'action' => 'index']) ?>
        </li>
        <li><?= $this->Html->link(__('New Model History'), ['controller' => 'ModelHistory', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="modelHistoryPhinxlog form large-9 medium-8 columns content">
    <?= $this->Form->create($modelHistoryPhinxlog) ?>
    <fieldset>
        <legend><?= __('Add Model History Phinxlog') ?></legend>
        <?php
            echo $this->Form->input('migration_name');
        echo $this->Form->input('start_time');
        echo $this->Form->input('end_time');
        echo $this->Form->input('breakpoint');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
