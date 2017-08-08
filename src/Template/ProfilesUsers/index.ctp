<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\ProfilesUser[]|\Cake\Collection\CollectionInterface $profilesUsers
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Profiles User'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Profiles'), ['controller' => 'Profiles', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Profile'), ['controller' => 'Profiles', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="profilesUsers index large-9 medium-8 columns content">
    <h3><?= __('Profiles Users') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('profile_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($profilesUsers as $profilesUser): ?>
            <tr>
                <td><?= $this->Number->format($profilesUser->id) ?></td>
                <td><?= $profilesUser->has('profile') ? $this->Html->link($profilesUser->profile->id, ['controller' => 'Profiles', 'action' => 'view', $profilesUser->profile->id]) : '' ?></td>
                <td><?= $profilesUser->has('user') ? $this->Html->link($profilesUser->user->id, ['controller' => 'Users', 'action' => 'view', $profilesUser->user->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $profilesUser->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $profilesUser->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $profilesUser->id], ['confirm' => __('Are you sure you want to delete # {0}?', $profilesUser->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>