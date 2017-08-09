<?php
/**
  * @var \App\View\AppView $this
  */
?>
    <!DOCTYPE html>
    <html>

    <head>
        <link rel="stylesheet" href="/InPlanet2/css/style.css" />
        <link rel="stylesheet" href="/InPlanet2/css/base.css" />
        <?= $this->Html->charset() ?>
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>
                <?= $cakeDescription ?>:
                    <?= $this->fetch('title') ?>
            </title>
            <?= $this->Html->meta('icon') ?>

                <?= $this->Html->css('style.css') ?>
                    <?= $this->Html->css('style2.css') ?>

                       

                            <?= $this->fetch('meta') ?>
                                <?= $this->fetch('script') ?>
    </head>

<div class="users form large-9 medium-8 columns content">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Add User') ?></legend>
        <?php
            echo $this->Form->control('username');
            echo $this->Form->control('password');
            //echo $this->Form->control('person_id', ['options' => $people]);
            echo $this->Form->control('profile_id', ['options' => $profiles]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
