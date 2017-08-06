<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Employee $employee
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Employee'), ['action' => 'edit', $employee->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Employee'), ['action' => 'delete', $employee->id], ['confirm' => __('Are you sure you want to delete # {0}?', $employee->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Employees'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Employee'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Departments'), ['controller' => 'Departments', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Department'), ['controller' => 'Departments', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Typeofemployees'), ['controller' => 'Typeofemployees', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Typeofemployee'), ['controller' => 'Typeofemployees', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Appointments'), ['controller' => 'Appointments', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Appointment'), ['controller' => 'Appointments', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Instalations'), ['controller' => 'Instalations', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Instalation'), ['controller' => 'Instalations', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="employees view large-9 medium-8 columns content">
    <h3><?= h($employee->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Department') ?></th>
            <td><?= $employee->has('department') ? $this->Html->link($employee->department->name, ['controller' => 'Departments', 'action' => 'view', $employee->department->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $employee->has('user') ? $this->Html->link($employee->user->id, ['controller' => 'Users', 'action' => 'view', $employee->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Typeofemployee') ?></th>
            <td><?= $employee->has('typeofemployee') ? $this->Html->link($employee->typeofemployee->id, ['controller' => 'Typeofemployees', 'action' => 'view', $employee->typeofemployee->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($employee->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date Recruiting') ?></th>
            <td><?= h($employee->date_recruiting) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Appointments') ?></h4>
        <?php if (!empty($employee->appointments)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Time Appointments') ?></th>
                <th scope="col"><?= __('Day') ?></th>
                <th scope="col"><?= __('Description') ?></th>
                <th scope="col"><?= __('State') ?></th>
                <th scope="col"><?= __('Client Id') ?></th>
                <th scope="col"><?= __('Employee Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($employee->appointments as $appointments): ?>
            <tr>
                <td><?= h($appointments->id) ?></td>
                <td><?= h($appointments->time_appointments) ?></td>
                <td><?= h($appointments->day) ?></td>
                <td><?= h($appointments->description) ?></td>
                <td><?= h($appointments->state) ?></td>
                <td><?= h($appointments->client_id) ?></td>
                <td><?= h($appointments->employee_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Appointments', 'action' => 'view', $appointments->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Appointments', 'action' => 'edit', $appointments->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Appointments', 'action' => 'delete', $appointments->id], ['confirm' => __('Are you sure you want to delete # {0}?', $appointments->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Instalations') ?></h4>
        <?php if (!empty($employee->instalations)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Date Instalation') ?></th>
                <th scope="col"><?= __('Date Time') ?></th>
                <th scope="col"><?= __('Client Id') ?></th>
                <th scope="col"><?= __('Employee Id') ?></th>
                <th scope="col"><?= __('Modem Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($employee->instalations as $instalations): ?>
            <tr>
                <td><?= h($instalations->id) ?></td>
                <td><?= h($instalations->date_instalation) ?></td>
                <td><?= h($instalations->date_time) ?></td>
                <td><?= h($instalations->client_id) ?></td>
                <td><?= h($instalations->employee_id) ?></td>
                <td><?= h($instalations->modem_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Instalations', 'action' => 'view', $instalations->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Instalations', 'action' => 'edit', $instalations->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Instalations', 'action' => 'delete', $instalations->id], ['confirm' => __('Are you sure you want to delete # {0}?', $instalations->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
