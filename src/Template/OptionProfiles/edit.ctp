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
                ['action' => 'delete', $optionProfile->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $optionProfile->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Option Profiles'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Options'), ['controller' => 'Options', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Option'), ['controller' => 'Options', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Profiles'), ['controller' => 'Profiles', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Profile'), ['controller' => 'Profiles', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="optionProfiles form large-9 medium-8 columns content">
    <?= $this->Form->create($optionProfile) ?>
    <fieldset>
        <legend><?= __('Edit Option Profile') ?></legend>
        <?php
            echo $this->Form->control('option_id', ['options' => $options]);
            echo $this->Form->control('profile_id', ['options' => $profiles]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
