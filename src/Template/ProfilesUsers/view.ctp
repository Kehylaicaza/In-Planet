<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\ProfilesUser $profilesUser
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Profiles User'), ['action' => 'edit', $profilesUser->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Profiles User'), ['action' => 'delete', $profilesUser->id], ['confirm' => __('Are you sure you want to delete # {0}?', $profilesUser->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Profiles Users'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Profiles User'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Profiles'), ['controller' => 'Profiles', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Profile'), ['controller' => 'Profiles', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="profilesUsers view large-9 medium-8 columns content">
    <h3><?= h($profilesUser->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Profile') ?></th>
            <td><?= $profilesUser->has('profile') ? $this->Html->link($profilesUser->profile->id, ['controller' => 'Profiles', 'action' => 'view', $profilesUser->profile->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $profilesUser->has('user') ? $this->Html->link($profilesUser->user->id, ['controller' => 'Users', 'action' => 'view', $profilesUser->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($profilesUser->id) ?></td>
        </tr>
    </table>
</div>
