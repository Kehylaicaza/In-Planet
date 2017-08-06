<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Payement $payement
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Payement'), ['action' => 'edit', $payement->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Payement'), ['action' => 'delete', $payement->id], ['confirm' => __('Are you sure you want to delete # {0}?', $payement->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Payements'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Payement'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Plans'), ['controller' => 'Plans', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Plan'), ['controller' => 'Plans', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Clients'), ['controller' => 'Clients', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Client'), ['controller' => 'Clients', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Internet Services'), ['controller' => 'InternetServices', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Internet Service'), ['controller' => 'InternetServices', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="payements view large-9 medium-8 columns content">
    <h3><?= h($payement->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Plan') ?></th>
            <td><?= $payement->has('plan') ? $this->Html->link($payement->plan->id, ['controller' => 'Plans', 'action' => 'view', $payement->plan->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Client') ?></th>
            <td><?= $payement->has('client') ? $this->Html->link($payement->client->id, ['controller' => 'Clients', 'action' => 'view', $payement->client->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Credit Card') ?></th>
            <td><?= h($payement->credit_card) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Internet Service') ?></th>
            <td><?= $payement->has('internet_service') ? $this->Html->link($payement->internet_service->id, ['controller' => 'InternetServices', 'action' => 'view', $payement->internet_service->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($payement->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dates') ?></th>
            <td><?= h($payement->dates) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Limit Date') ?></th>
            <td><?= h($payement->limit_date) ?></td>
        </tr>
    </table>
</div>
