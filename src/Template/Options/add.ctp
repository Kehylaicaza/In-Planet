<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Options'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Option Profiles'), ['controller' => 'OptionProfiles', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Option Profile'), ['controller' => 'OptionProfiles', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="options form large-9 medium-8 columns content">
    <?= $this->Form->create($option) ?>
    <fieldset>
        <legend><?= __('Add Option') ?></legend>
        <?php
            echo $this->Form->control('options');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
