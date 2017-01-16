<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List House Contibution'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List People'), ['controller' => 'People', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Person'), ['controller' => 'People', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="houseContibution form large-9 medium-8 columns content">
    <?= $this->Form->create($houseContibution) ?>
    <fieldset>
        <legend><?= __('Add House Contibution') ?></legend>
        <?php
            echo $this->Form->input('person_id', ['options' => $people]);
            echo $this->Form->input('semester');
            echo $this->Form->input('payment');
            echo $this->Form->input('social_service');
            echo $this->Form->input('social_service_comment');
            echo $this->Form->input('new_tenant_bar');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
