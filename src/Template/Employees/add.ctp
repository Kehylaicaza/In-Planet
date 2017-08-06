<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Employees'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Departments'), ['controller' => 'Departments', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Department'), ['controller' => 'Departments', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Typeofemployees'), ['controller' => 'Typeofemployees', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Typeofemployee'), ['controller' => 'Typeofemployees', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Appointments'), ['controller' => 'Appointments', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Appointment'), ['controller' => 'Appointments', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Instalations'), ['controller' => 'Instalations', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Instalation'), ['controller' => 'Instalations', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="employees form large-9 medium-8 columns content">
    <?= $this->Form->create($employee) ?>
    <fieldset>
        <legend><?= __('Add Employee') ?></legend>
        <?php
            echo $this->Form->control('date_recruiting');
            echo $this->Form->control('department_id', ['options' => $departments]);
            echo $this->Form->control('user_id', ['options' => $users]);
            echo $this->Form->control('type_employee_id', ['options' => $typeofemployees]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
