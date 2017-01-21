<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
            __('Delete'),
            ['action' => 'delete', $peopleMembership->id],
            ['confirm' => __('Are you sure you want to delete # {0}?', $peopleMembership->id)]
            )
            ?>
        </li>
        <li><?= $this->Html->link(__('List People Memberships'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List People'), ['controller' => 'People', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Person'), ['controller' => 'People', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Memberships'), ['controller' => 'Memberships', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Membership'), ['controller' => 'Memberships', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="peopleMemberships form large-9 medium-8 columns content">
    <?= $this->Form->create($peopleMembership) ?>
    <fieldset>
        <legend><?= __('Edit People Membership') ?></legend>
        <?php
            echo $this->Form->input('semester');
        echo $this->Form->input('person_id', ['options' => $people]);
        echo $this->Form->input('membership_id', ['options' => $memberships]);
        echo $this->Form->input('payment');
        echo $this->Form->input('social_service');
        echo $this->Form->input('social_service_comment');
        echo $this->Form->input('comment');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
