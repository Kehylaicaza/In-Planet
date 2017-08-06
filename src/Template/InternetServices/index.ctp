<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\InternetService[]|\Cake\Collection\CollectionInterface $internetServices
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Internet Service'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Clients'), ['controller' => 'Clients', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Client'), ['controller' => 'Clients', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Modems'), ['controller' => 'Modems', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Modem'), ['controller' => 'Modems', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Payements'), ['controller' => 'Payements', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Payement'), ['controller' => 'Payements', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="internetServices index large-9 medium-8 columns content">
    <h3><?= __('Internet Services') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('active_date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('date_expiry') ?></th>
                <th scope="col"><?= $this->Paginator->sort('internet_status') ?></th>
                <th scope="col"><?= $this->Paginator->sort('client_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modem_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($internetServices as $internetService): ?>
            <tr>
                <td><?= $this->Number->format($internetService->id) ?></td>
                <td><?= h($internetService->active_date) ?></td>
                <td><?= h($internetService->date_expiry) ?></td>
                <td><?= h($internetService->internet_status) ?></td>
                <td><?= $internetService->has('client') ? $this->Html->link($internetService->client->id, ['controller' => 'Clients', 'action' => 'view', $internetService->client->id]) : '' ?></td>
                <td><?= $internetService->has('modem') ? $this->Html->link($internetService->modem->id, ['controller' => 'Modems', 'action' => 'view', $internetService->modem->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $internetService->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $internetService->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $internetService->id], ['confirm' => __('Are you sure you want to delete # {0}?', $internetService->id)]) ?>
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
