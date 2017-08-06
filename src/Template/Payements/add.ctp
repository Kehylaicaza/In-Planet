<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Payements'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Plans'), ['controller' => 'Plans', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Plan'), ['controller' => 'Plans', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Clients'), ['controller' => 'Clients', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Client'), ['controller' => 'Clients', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Internet Services'), ['controller' => 'InternetServices', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Internet Service'), ['controller' => 'InternetServices', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="payements form large-9 medium-8 columns content">
    <?= $this->Form->create($payement) ?>
    <fieldset>
        <legend><?= __('Add Payement') ?></legend>
        <?php
            echo $this->Form->control('plan_id', ['options' => $plans]);
            echo $this->Form->control('client_id', ['options' => $clients]);
            echo $this->Form->control('dates', ['empty' => true]);
            echo $this->Form->control('credit_card');
            echo $this->Form->control('limit_date', ['empty' => true]);
            echo $this->Form->control('internet_service_id', ['options' => $internetServices]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
