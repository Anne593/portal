<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Tenant'), ['action' => 'edit', $tenant->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Tenant'), ['action' => 'delete', $tenant->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tenant->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Tenants'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tenant'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List People'), ['controller' => 'People', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Person'), ['controller' => 'People', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Rooms'), ['controller' => 'Rooms', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Room'), ['controller' => 'Rooms', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="tenants view large-9 medium-8 columns content">
    <h3><?= h($tenant->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Person') ?></th>
            <td><?= $tenant->has('person') ? $this->Html->link($tenant->person->id, ['controller' => 'People', 'action' => 'view', $tenant->person->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Room') ?></th>
            <td><?= $tenant->has('room') ? $this->Html->link($tenant->room->id, ['controller' => 'Rooms', 'action' => 'view', $tenant->room->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Comment') ?></th>
            <td><?= h($tenant->comment) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($tenant->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date Move In') ?></th>
            <td><?= h($tenant->date_move_in) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date Move Out') ?></th>
            <td><?= h($tenant->date_move_out) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Tenant Type') ?></h4>
        <?= $this->Text->autoParagraph(h($tenant->tenant_type)); ?>
    </div>
</div>
