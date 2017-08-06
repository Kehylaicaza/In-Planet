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
                ['action' => 'delete', $modem->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $modem->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Modems'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Instalations'), ['controller' => 'Instalations', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Instalation'), ['controller' => 'Instalations', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Internet Services'), ['controller' => 'InternetServices', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Internet Service'), ['controller' => 'InternetServices', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="modems form large-9 medium-8 columns content">
    <?= $this->Form->create($modem) ?>
    <fieldset>
        <legend><?= __('Edit Modem') ?></legend>
        <?php
            echo $this->Form->control('model');
            echo $this->Form->control('serial');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
