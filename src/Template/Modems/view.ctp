<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Modem $modem
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Modem'), ['action' => 'edit', $modem->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Modem'), ['action' => 'delete', $modem->id], ['confirm' => __('Are you sure you want to delete # {0}?', $modem->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Modems'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Modem'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Instalations'), ['controller' => 'Instalations', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Instalation'), ['controller' => 'Instalations', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Internet Services'), ['controller' => 'InternetServices', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Internet Service'), ['controller' => 'InternetServices', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="modems view large-9 medium-8 columns content">
    <h3><?= h($modem->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Model') ?></th>
            <td><?= h($modem->model) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Serial') ?></th>
            <td><?= h($modem->serial) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($modem->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Instalations') ?></h4>
        <?php if (!empty($modem->instalations)): ?>
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
            <?php foreach ($modem->instalations as $instalations): ?>
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
        <?php if (!empty($modem->internet_services)): ?>
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
            <?php foreach ($modem->internet_services as $internetServices): ?>
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
</div>
