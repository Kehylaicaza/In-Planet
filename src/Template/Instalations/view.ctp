<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Instalation $instalation
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Instalation'), ['action' => 'edit', $instalation->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Instalation'), ['action' => 'delete', $instalation->id], ['confirm' => __('Are you sure you want to delete # {0}?', $instalation->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Instalations'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Instalation'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Clients'), ['controller' => 'Clients', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Client'), ['controller' => 'Clients', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Employees'), ['controller' => 'Employees', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Employee'), ['controller' => 'Employees', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Modems'), ['controller' => 'Modems', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Modem'), ['controller' => 'Modems', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="instalations view large-9 medium-8 columns content">
    <h3><?= h($instalation->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Client') ?></th>
            <td><?= $instalation->has('client') ? $this->Html->link($instalation->client->id, ['controller' => 'Clients', 'action' => 'view', $instalation->client->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Employee') ?></th>
            <td><?= $instalation->has('employee') ? $this->Html->link($instalation->employee->id, ['controller' => 'Employees', 'action' => 'view', $instalation->employee->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modem') ?></th>
            <td><?= $instalation->has('modem') ? $this->Html->link($instalation->modem->id, ['controller' => 'Modems', 'action' => 'view', $instalation->modem->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($instalation->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date Instalation') ?></th>
            <td><?= h($instalation->date_instalation) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date Time') ?></th>
            <td><?= h($instalation->date_time) ?></td>
        </tr>
    </table>
</div>
