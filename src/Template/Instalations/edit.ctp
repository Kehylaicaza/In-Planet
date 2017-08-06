<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $instalation->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $instalation->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Instalations'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Clients'), ['controller' => 'Clients', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Client'), ['controller' => 'Clients', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Employees'), ['controller' => 'Employees', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Employee'), ['controller' => 'Employees', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Modems'), ['controller' => 'Modems', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Modem'), ['controller' => 'Modems', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="instalations form large-9 medium-8 columns content">
    <?= $this->Form->create($instalation) ?>
    <fieldset>
        <legend><?= __('Edit Instalation') ?></legend>
        <?php
            echo $this->Form->control('date_instalation', ['empty' => true]);
            echo $this->Form->control('date_time', ['empty' => true]);
            echo $this->Form->control('client_id', ['options' => $clients]);
            echo $this->Form->control('employee_id', ['options' => $employees]);
            echo $this->Form->control('modem_id', ['options' => $modems]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
