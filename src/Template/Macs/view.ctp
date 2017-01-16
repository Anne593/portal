<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Mac'), ['action' => 'edit', $mac->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Mac'), ['action' => 'delete', $mac->id], ['confirm' => __('Are you sure you want to delete # {0}?', $mac->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Macs'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Mac'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List People'), ['controller' => 'People', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Person'), ['controller' => 'People', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Ips'), ['controller' => 'Ips', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ip'), ['controller' => 'Ips', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="macs view large-9 medium-8 columns content">
    <h3><?= h($mac->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Person') ?></th>
            <td><?= $mac->has('person') ? $this->Html->link($mac->person->id, ['controller' => 'People', 'action' => 'view', $mac->person->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Mac') ?></th>
            <td><?= h($mac->mac) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Device Name') ?></th>
            <td><?= h($mac->device_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($mac->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Ips') ?></h4>
        <?php if (!empty($mac->ips)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Mac Id') ?></th>
                <th scope="col"><?= __('Ip') ?></th>
                <th scope="col"><?= __('Lease Start') ?></th>
                <th scope="col"><?= __('Lease End') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($mac->ips as $ips): ?>
            <tr>
                <td><?= h($ips->id) ?></td>
                <td><?= h($ips->mac_id) ?></td>
                <td><?= h($ips->ip) ?></td>
                <td><?= h($ips->lease_start) ?></td>
                <td><?= h($ips->lease_end) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Ips', 'action' => 'view', $ips->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Ips', 'action' => 'edit', $ips->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Ips', 'action' => 'delete', $ips->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ips->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
