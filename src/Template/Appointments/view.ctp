<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Appointment $appointment
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Appointment'), ['action' => 'edit', $appointment->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Appointment'), ['action' => 'delete', $appointment->id], ['confirm' => __('Are you sure you want to delete # {0}?', $appointment->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Appointments'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Appointment'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Clients'), ['controller' => 'Clients', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Client'), ['controller' => 'Clients', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Employees'), ['controller' => 'Employees', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Employee'), ['controller' => 'Employees', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="appointments view large-9 medium-8 columns content">
    <h3><?= h($appointment->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Description') ?></th>
            <td><?= h($appointment->description) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('State') ?></th>
            <td><?= h($appointment->state) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Client') ?></th>
            <td><?= $appointment->has('client') ? $this->Html->link($appointment->client->id, ['controller' => 'Clients', 'action' => 'view', $appointment->client->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Employee') ?></th>
            <td><?= $appointment->has('employee') ? $this->Html->link($appointment->employee->id, ['controller' => 'Employees', 'action' => 'view', $appointment->employee->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($appointment->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Time Appointments') ?></th>
            <td><?= h($appointment->time_appointments) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Day') ?></th>
            <td><?= h($appointment->day) ?></td>
        </tr>
    </table>
</div>
