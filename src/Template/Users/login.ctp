<?php
/**
  * @var \App\View\AppView $this
  */
?>

    <!DOCTYPE html>
    <html>

    <head>

        <?= $this->Html->charset() ?>
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>
                <?= $cakeDescription ?>:
                    <?= $this->fetch('title') ?>
            </title>
            <?= $this->Html->meta('icon') ?>

                <?= $this->Html->css('style.css') ?>
                    <?= $this->Html->css('style2.css') ?>

                        <?= $this->Html->css('estilo.css') ?>

    </head>


    <body>
        <br>
        <br>
        <br>
        <br>
        <div class="index large-4 medium-4 large-offset-4 medium-offset-4 columns">
            <div class="login-page">
                <?= $this->Form->create(); ?>
                    <?= $this->Form->input('username'); ?>
                        <?= $this->Form->input('password', array('type' => 'password')); ?>
                            <?= $this->Form->submit('Login', array('class' => 'button','class' => 'button')); ?>
                                <?= $this->Form->end(); ?>

            </div>
        </div>
    </body>


    </html>
