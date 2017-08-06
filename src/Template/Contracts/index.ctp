<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Contract[]|\Cake\Collection\CollectionInterface $contracts
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Contract'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Clients'), ['controller' => 'Clients', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Client'), ['controller' => 'Clients', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="contracts index large-9 medium-8 columns content">
    <h3><?= __('Contracts') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('contract') ?></th>
                <th scope="col"><?= $this->Paginator->sort('dates') ?></th>
                <th scope="col"><?= $this->Paginator->sort('client_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($contracts as $contract): ?>
            <tr>
                <td><?= $this->Number->format($contract->id) ?></td>
                <td><?= h($contract->contract) ?></td>
                <td><?= h($contract->dates) ?></td>
                <td><?= $contract->has('client') ? $this->Html->link($contract->client->id, ['controller' => 'Clients', 'action' => 'view', $contract->client->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $contract->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $contract->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $contract->id], ['confirm' => __('Are you sure you want to delete # {0}?', $contract->id)]) ?>
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
