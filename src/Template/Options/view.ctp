<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Option $option
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Option'), ['action' => 'edit', $option->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Option'), ['action' => 'delete', $option->id], ['confirm' => __('Are you sure you want to delete # {0}?', $option->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Options'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Option'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Option Profiles'), ['controller' => 'OptionProfiles', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Option Profile'), ['controller' => 'OptionProfiles', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="options view large-9 medium-8 columns content">
    <h3><?= h($option->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Options') ?></th>
            <td><?= h($option->options) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($option->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Option Profiles') ?></h4>
        <?php if (!empty($option->option_profiles)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Option Id') ?></th>
                <th scope="col"><?= __('Profile Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($option->option_profiles as $optionProfiles): ?>
            <tr>
                <td><?= h($optionProfiles->id) ?></td>
                <td><?= h($optionProfiles->option_id) ?></td>
                <td><?= h($optionProfiles->profile_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'OptionProfiles', 'action' => 'view', $optionProfiles->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'OptionProfiles', 'action' => 'edit', $optionProfiles->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'OptionProfiles', 'action' => 'delete', $optionProfiles->id], ['confirm' => __('Are you sure you want to delete # {0}?', $optionProfiles->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
