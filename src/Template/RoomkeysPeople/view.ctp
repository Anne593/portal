<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Roomkeys Person'), ['action' => 'edit', $roomkeysPerson->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Roomkeys Person'), ['action' => 'delete', $roomkeysPerson->id], ['confirm' => __('Are you sure you want to delete # {0}?', $roomkeysPerson->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Roomkeys People'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Roomkeys Person'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Roomkeys'), ['controller' => 'Roomkeys', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Roomkey'), ['controller' => 'Roomkeys', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List People'), ['controller' => 'People', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Person'), ['controller' => 'People', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="roomkeysPeople view large-9 medium-8 columns content">
    <h3><?= h($roomkeysPerson->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Roomkey') ?></th>
            <td><?= $roomkeysPerson->has('roomkey') ? $this->Html->link($roomkeysPerson->roomkey->name, ['controller' => 'Roomkeys', 'action' => 'view', $roomkeysPerson->roomkey->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Person') ?></th>
            <td><?= $roomkeysPerson->has('person') ? $this->Html->link($roomkeysPerson->person->id, ['controller' => 'People', 'action' => 'view', $roomkeysPerson->person->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Comment') ?></th>
            <td><?= h($roomkeysPerson->comment) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($roomkeysPerson->id) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Type') ?></h4>
        <?= $this->Text->autoParagraph(h($roomkeysPerson->type)); ?>
    </div>
</div>
