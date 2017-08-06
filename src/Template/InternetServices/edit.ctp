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
                ['action' => 'delete', $internetService->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $internetService->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Internet Services'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Clients'), ['controller' => 'Clients', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Client'), ['controller' => 'Clients', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Modems'), ['controller' => 'Modems', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Modem'), ['controller' => 'Modems', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Payements'), ['controller' => 'Payements', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Payement'), ['controller' => 'Payements', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="internetServices form large-9 medium-8 columns content">
    <?= $this->Form->create($internetService) ?>
    <fieldset>
        <legend><?= __('Edit Internet Service') ?></legend>
        <?php
            echo $this->Form->control('active_date', ['empty' => true]);
            echo $this->Form->control('date_expiry', ['empty' => true]);
            echo $this->Form->control('internet_status');
            echo $this->Form->control('client_id', ['options' => $clients]);
            echo $this->Form->control('modem_id', ['options' => $modems]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
