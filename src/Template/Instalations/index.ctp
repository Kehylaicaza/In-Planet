<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Instalation[]|\Cake\Collection\CollectionInterface $instalations
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Instalation'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Clients'), ['controller' => 'Clients', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Client'), ['controller' => 'Clients', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Employees'), ['controller' => 'Employees', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Employee'), ['controller' => 'Employees', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Modems'), ['controller' => 'Modems', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Modem'), ['controller' => 'Modems', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="instalations index large-9 medium-8 columns content">
    <h3><?= __('Instalations') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('date_instalation') ?></th>
                <th scope="col"><?= $this->Paginator->sort('date_time') ?></th>
                <th scope="col"><?= $this->Paginator->sort('client_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('employee_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modem_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($instalations as $instalation): ?>
            <tr>
                <td><?= $this->Number->format($instalation->id) ?></td>
                <td><?= h($instalation->date_instalation) ?></td>
                <td><?= h($instalation->date_time) ?></td>
                <td><?= $instalation->has('client') ? $this->Html->link($instalation->client->id, ['controller' => 'Clients', 'action' => 'view', $instalation->client->id]) : '' ?></td>
                <td><?= $instalation->has('employee') ? $this->Html->link($instalation->employee->id, ['controller' => 'Employees', 'action' => 'view', $instalation->employee->id]) : '' ?></td>
                <td><?= $instalation->has('modem') ? $this->Html->link($instalation->modem->id, ['controller' => 'Modems', 'action' => 'view', $instalation->modem->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $instalation->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $instalation->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $instalation->id], ['confirm' => __('Are you sure you want to delete # {0}?', $instalation->id)]) ?>
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
