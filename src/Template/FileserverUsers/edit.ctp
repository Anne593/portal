<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
            __('Delete'),
            ['action' => 'delete', $fileserverUser->id],
            ['confirm' => __('Are you sure you want to delete # {0}?', $fileserverUser->id)]
            )
            ?>
        </li>
        <li><?= $this->Html->link(__('List Fileserver Users'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List People'), ['controller' => 'People', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Person'), ['controller' => 'People', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="fileserverUsers form large-9 medium-8 columns content">
    <?= $this->Form->create($fileserverUser) ?>
    <fieldset>
        <legend><?= __('Edit Fileserver User') ?></legend>
        <?php
            echo $this->Form->input('person_id', ['options' => $people]);
        echo $this->Form->input('username');
        echo $this->Form->input('password');
        echo $this->Form->input('vip');
        echo $this->Form->input('accepted');
        echo $this->Form->input('active');
        echo $this->Form->input('password_retrieval');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
