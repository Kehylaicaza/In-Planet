<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\InternetService $internetService
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Internet Service'), ['action' => 'edit', $internetService->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Internet Service'), ['action' => 'delete', $internetService->id], ['confirm' => __('Are you sure you want to delete # {0}?', $internetService->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Internet Services'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Internet Service'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Clients'), ['controller' => 'Clients', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Client'), ['controller' => 'Clients', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Modems'), ['controller' => 'Modems', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Modem'), ['controller' => 'Modems', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Payements'), ['controller' => 'Payements', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Payement'), ['controller' => 'Payements', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="internetServices view large-9 medium-8 columns content">
    <h3><?= h($internetService->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Internet Status') ?></th>
            <td><?= h($internetService->internet_status) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Client') ?></th>
            <td><?= $internetService->has('client') ? $this->Html->link($internetService->client->id, ['controller' => 'Clients', 'action' => 'view', $internetService->client->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modem') ?></th>
            <td><?= $internetService->has('modem') ? $this->Html->link($internetService->modem->id, ['controller' => 'Modems', 'action' => 'view', $internetService->modem->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($internetService->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Active Date') ?></th>
            <td><?= h($internetService->active_date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date Expiry') ?></th>
            <td><?= h($internetService->date_expiry) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Payements') ?></h4>
        <?php if (!empty($internetService->payements)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Plan Id') ?></th>
                <th scope="col"><?= __('Client Id') ?></th>
                <th scope="col"><?= __('Dates') ?></th>
                <th scope="col"><?= __('Credit Card') ?></th>
                <th scope="col"><?= __('Limit Date') ?></th>
                <th scope="col"><?= __('Internet Service Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($internetService->payements as $payements): ?>
            <tr>
                <td><?= h($payements->id) ?></td>
                <td><?= h($payements->plan_id) ?></td>
                <td><?= h($payements->client_id) ?></td>
                <td><?= h($payements->dates) ?></td>
                <td><?= h($payements->credit_card) ?></td>
                <td><?= h($payements->limit_date) ?></td>
                <td><?= h($payements->internet_service_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Payements', 'action' => 'view', $payements->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Payements', 'action' => 'edit', $payements->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Payements', 'action' => 'delete', $payements->id], ['confirm' => __('Are you sure you want to delete # {0}?', $payements->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
