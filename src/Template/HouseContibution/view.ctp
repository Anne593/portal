<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit House Contibution'), ['action' => 'edit', $houseContibution->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete House Contibution'), ['action' => 'delete', $houseContibution->id], ['confirm' => __('Are you sure you want to delete # {0}?', $houseContibution->id)]) ?> </li>
        <li><?= $this->Html->link(__('List House Contibution'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New House Contibution'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List People'), ['controller' => 'People', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Person'), ['controller' => 'People', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="houseContibution view large-9 medium-8 columns content">
    <h3><?= h($houseContibution->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Person') ?></th>
            <td><?= $houseContibution->has('person') ? $this->Html->link($houseContibution->person->id, ['controller' => 'People', 'action' => 'view', $houseContibution->person->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Social Service Comment') ?></th>
            <td><?= h($houseContibution->social_service_comment) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($houseContibution->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Semester') ?></th>
            <td><?= $this->Number->format($houseContibution->semester) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Payment') ?></th>
            <td><?= $houseContibution->payment ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Social Service') ?></th>
            <td><?= $houseContibution->social_service ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('New Tenant Bar') ?></th>
            <td><?= $houseContibution->new_tenant_bar ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
</div>
