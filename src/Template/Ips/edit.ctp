<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
            __('Delete'),
            ['action' => 'delete', $ip->id],
            ['confirm' => __('Are you sure you want to delete # {0}?', $ip->id)]
            )
            ?>
        </li>
        <li><?= $this->Html->link(__('List Ips'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Macs'), ['controller' => 'Macs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Mac'), ['controller' => 'Macs', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="ips form large-9 medium-8 columns content">
    <?= $this->Form->create($ip) ?>
    <fieldset>
        <legend><?= __('Edit Ip') ?></legend>
        <?php
            echo $this->Form->input('mac_id', ['options' => $macs]);
        echo $this->Form->input('ip');
        echo $this->Form->input('lease_start');
        echo $this->Form->input('lease_end');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
