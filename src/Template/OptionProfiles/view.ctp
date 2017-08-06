<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\OptionProfile $optionProfile
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Option Profile'), ['action' => 'edit', $optionProfile->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Option Profile'), ['action' => 'delete', $optionProfile->id], ['confirm' => __('Are you sure you want to delete # {0}?', $optionProfile->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Option Profiles'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Option Profile'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Options'), ['controller' => 'Options', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Option'), ['controller' => 'Options', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Profiles'), ['controller' => 'Profiles', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Profile'), ['controller' => 'Profiles', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="optionProfiles view large-9 medium-8 columns content">
    <h3><?= h($optionProfile->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Option') ?></th>
            <td><?= $optionProfile->has('option') ? $this->Html->link($optionProfile->option->id, ['controller' => 'Options', 'action' => 'view', $optionProfile->option->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Profile') ?></th>
            <td><?= $optionProfile->has('profile') ? $this->Html->link($optionProfile->profile->id, ['controller' => 'Profiles', 'action' => 'view', $optionProfile->profile->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($optionProfile->id) ?></td>
        </tr>
    </table>
</div>
