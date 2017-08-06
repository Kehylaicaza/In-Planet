<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Payement[]|\Cake\Collection\CollectionInterface $payements
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Payement'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Plans'), ['controller' => 'Plans', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Plan'), ['controller' => 'Plans', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Clients'), ['controller' => 'Clients', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Client'), ['controller' => 'Clients', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Internet Services'), ['controller' => 'InternetServices', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Internet Service'), ['controller' => 'InternetServices', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="payements index large-9 medium-8 columns content">
    <h3><?= __('Payements') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('plan_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('client_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('dates') ?></th>
                <th scope="col"><?= $this->Paginator->sort('credit_card') ?></th>
                <th scope="col"><?= $this->Paginator->sort('limit_date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('internet_service_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($payements as $payement): ?>
            <tr>
                <td><?= $this->Number->format($payement->id) ?></td>
                <td><?= $payement->has('plan') ? $this->Html->link($payement->plan->id, ['controller' => 'Plans', 'action' => 'view', $payement->plan->id]) : '' ?></td>
                <td><?= $payement->has('client') ? $this->Html->link($payement->client->id, ['controller' => 'Clients', 'action' => 'view', $payement->client->id]) : '' ?></td>
                <td><?= h($payement->dates) ?></td>
                <td><?= h($payement->credit_card) ?></td>
                <td><?= h($payement->limit_date) ?></td>
                <td><?= $payement->has('internet_service') ? $this->Html->link($payement->internet_service->id, ['controller' => 'InternetServices', 'action' => 'view', $payement->internet_service->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $payement->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $payement->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $payement->id], ['confirm' => __('Are you sure you want to delete # {0}?', $payement->id)]) ?>
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
