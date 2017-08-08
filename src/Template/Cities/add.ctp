<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="cities form large-9 medium-8 columns content">
    <?= $this->Form->create($city) ?>
    <fieldset>
        <legend><?= __('Add City') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('province');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
