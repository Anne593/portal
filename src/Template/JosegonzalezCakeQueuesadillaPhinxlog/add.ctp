<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Josegonzalez Cake Queuesadilla Phinxlog'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="josegonzalezCakeQueuesadillaPhinxlog form large-9 medium-8 columns content">
    <?= $this->Form->create($josegonzalezCakeQueuesadillaPhinxlog) ?>
    <fieldset>
        <legend><?= __('Add Josegonzalez Cake Queuesadilla Phinxlog') ?></legend>
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
