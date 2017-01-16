<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Josegonzalez Cake Queuesadilla Phinxlog'), ['action' => 'edit', $josegonzalezCakeQueuesadillaPhinxlog->version]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Josegonzalez Cake Queuesadilla Phinxlog'), ['action' => 'delete', $josegonzalezCakeQueuesadillaPhinxlog->version], ['confirm' => __('Are you sure you want to delete # {0}?', $josegonzalezCakeQueuesadillaPhinxlog->version)]) ?> </li>
        <li><?= $this->Html->link(__('List Josegonzalez Cake Queuesadilla Phinxlog'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Josegonzalez Cake Queuesadilla Phinxlog'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="josegonzalezCakeQueuesadillaPhinxlog view large-9 medium-8 columns content">
    <h3><?= h($josegonzalezCakeQueuesadillaPhinxlog->version) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Migration Name') ?></th>
            <td><?= h($josegonzalezCakeQueuesadillaPhinxlog->migration_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Version') ?></th>
            <td><?= $this->Number->format($josegonzalezCakeQueuesadillaPhinxlog->version) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Start Time') ?></th>
            <td><?= h($josegonzalezCakeQueuesadillaPhinxlog->start_time) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('End Time') ?></th>
            <td><?= h($josegonzalezCakeQueuesadillaPhinxlog->end_time) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Breakpoint') ?></th>
            <td><?= $josegonzalezCakeQueuesadillaPhinxlog->breakpoint ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
</div>
