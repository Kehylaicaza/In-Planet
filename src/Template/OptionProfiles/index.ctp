<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\OptionProfile[]|\Cake\Collection\CollectionInterface $optionProfiles
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Option Profile'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Options'), ['controller' => 'Options', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Option'), ['controller' => 'Options', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Profiles'), ['controller' => 'Profiles', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Profile'), ['controller' => 'Profiles', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="optionProfiles index large-9 medium-8 columns content">
    <h3><?= __('Option Profiles') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('option_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('profile_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($optionProfiles as $optionProfile): ?>
            <tr>
                <td><?= $this->Number->format($optionProfile->id) ?></td>
                <td><?= $optionProfile->has('option') ? $this->Html->link($optionProfile->option->id, ['controller' => 'Options', 'action' => 'view', $optionProfile->option->id]) : '' ?></td>
                <td><?= $optionProfile->has('profile') ? $this->Html->link($optionProfile->profile->id, ['controller' => 'Profiles', 'action' => 'view', $optionProfile->profile->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $optionProfile->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $optionProfile->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $optionProfile->id], ['confirm' => __('Are you sure you want to delete # {0}?', $optionProfile->id)]) ?>
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
