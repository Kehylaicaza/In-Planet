<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Client $client
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Client'), ['action' => 'edit', $client->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Client'), ['action' => 'delete', $client->id], ['confirm' => __('Are you sure you want to delete # {0}?', $client->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Clients'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Client'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Appointments'), ['controller' => 'Appointments', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Appointment'), ['controller' => 'Appointments', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Contracts'), ['controller' => 'Contracts', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Contract'), ['controller' => 'Contracts', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Instalations'), ['controller' => 'Instalations', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Instalation'), ['controller' => 'Instalations', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Internet Services'), ['controller' => 'InternetServices', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Internet Service'), ['controller' => 'InternetServices', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Payements'), ['controller' => 'Payements', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Payement'), ['controller' => 'Payements', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="clients view large-9 medium-8 columns content">
    <h3><?= h($client->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Client Status') ?></th>
            <td><?= h($client->client_status) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $client->has('user') ? $this->Html->link($client->user->id, ['controller' => 'Users', 'action' => 'view', $client->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($client->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Appointments') ?></h4>
        <?php if (!empty($client->appointments)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Time Appointments') ?></th>
                <th scope="col"><?= __('Day') ?></th>
                <th scope="col"><?= __('Description') ?></th>
                <th scope="col"><?= __('State') ?></th>
                <th scope="col"><?= __('Client Id') ?></th>
                <th scope="col"><?= __('Employee Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($client->appointments as $appointments): ?>
            <tr>
                <td><?= h($appointments->id) ?></td>
                <td><?= h($appointments->time_appointments) ?></td>
                <td><?= h($appointments->day) ?></td>
                <td><?= h($appointments->description) ?></td>
                <td><?= h($appointments->state) ?></td>
                <td><?= h($appointments->client_id) ?></td>
                <td><?= h($appointments->employee_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Appointments', 'action' => 'view', $appointments->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Appointments', 'action' => 'edit', $appointments->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Appointments', 'action' => 'delete', $appointments->id], ['confirm' => __('Are you sure you want to delete # {0}?', $appointments->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Contracts') ?></h4>
        <?php if (!empty($client->contracts)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Contract') ?></th>
                <th scope="col"><?= __('Dates') ?></th>
                <th scope="col"><?= __('Client Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($client->contracts as $contracts): ?>
            <tr>
                <td><?= h($contracts->id) ?></td>
                <td><?= h($contracts->contract) ?></td>
                <td><?= h($contracts->dates) ?></td>
                <td><?= h($contracts->client_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Contracts', 'action' => 'view', $contracts->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Contracts', 'action' => 'edit', $contracts->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Contracts', 'action' => 'delete', $contracts->id], ['confirm' => __('Are you sure you want to delete # {0}?', $contracts->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Instalations') ?></h4>
        <?php if (!empty($client->instalations)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Date Instalation') ?></th>
                <th scope="col"><?= __('Date Time') ?></th>
                <th scope="col"><?= __('Client Id') ?></th>
                <th scope="col"><?= __('Employee Id') ?></th>
                <th scope="col"><?= __('Modem Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($client->instalations as $instalations): ?>
            <tr>
                <td><?= h($instalations->id) ?></td>
                <td><?= h($instalations->date_instalation) ?></td>
                <td><?= h($instalations->date_time) ?></td>
                <td><?= h($instalations->client_id) ?></td>
                <td><?= h($instalations->employee_id) ?></td>
                <td><?= h($instalations->modem_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Instalations', 'action' => 'view', $instalations->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Instalations', 'action' => 'edit', $instalations->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Instalations', 'action' => 'delete', $instalations->id], ['confirm' => __('Are you sure you want to delete # {0}?', $instalations->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Internet Services') ?></h4>
        <?php if (!empty($client->internet_services)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Active Date') ?></th>
                <th scope="col"><?= __('Date Expiry') ?></th>
                <th scope="col"><?= __('Internet Status') ?></th>
                <th scope="col"><?= __('Client Id') ?></th>
                <th scope="col"><?= __('Modem Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($client->internet_services as $internetServices): ?>
            <tr>
                <td><?= h($internetServices->id) ?></td>
                <td><?= h($internetServices->active_date) ?></td>
                <td><?= h($internetServices->date_expiry) ?></td>
                <td><?= h($internetServices->internet_status) ?></td>
                <td><?= h($internetServices->client_id) ?></td>
                <td><?= h($internetServices->modem_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'InternetServices', 'action' => 'view', $internetServices->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'InternetServices', 'action' => 'edit', $internetServices->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'InternetServices', 'action' => 'delete', $internetServices->id], ['confirm' => __('Are you sure you want to delete # {0}?', $internetServices->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Payements') ?></h4>
        <?php if (!empty($client->payements)): ?>
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
            <?php foreach ($client->payements as $payements): ?>
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
