<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $mac->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $mac->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Macs'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List People'), ['controller' => 'People', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Person'), ['controller' => 'People', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Ips'), ['controller' => 'Ips', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Ip'), ['controller' => 'Ips', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="macs form large-9 medium-8 columns content">
    <?= $this->Form->create($mac) ?>
    <fieldset>
        <legend><?= __('Edit Mac') ?></legend>
        <?php
            echo $this->Form->input('person_id', ['options' => $people]);
            echo $this->Form->input('mac');
            echo $this->Form->input('device_name');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
