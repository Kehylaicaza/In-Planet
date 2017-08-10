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



    <div class="info">

        <?= $this->Form->create($person) ?>
            <br><br><br><br>
            <h3>Ingresa tus datos</h3>

            <p> Mantengase conectado todo el dia con nuestros planes ...</p>
            <h5>Por favor ingrese información real, cualquier intento de fraude anulará su cuenta</h5>
    </div>
    <fieldset>
        <div class="contentform">
            <div class="leftcontact">
                <div class="form-group">
                    <?php
            echo $this->Form->control('name');?>
                </div>
                <div class="form-group">
                    <?php     echo $this->Form->control('last_name');  ?>
                </div>
                <div class="form-group">
                    <?php   echo $this->Form->control('ci'); ?>
                </div>
            </div>
            <div class="rightcontact">
                <div class="form-group">
                    <?php   echo $this->Form->control('city_id', ['options' => $cities]);  ?>
                </div>
                <div class="form-group">
                    <?php   echo $this->Form->control('address');  ?>
                </div>
                <div class="form-group">
                    <?php echo $this->Form->control('email'); ?>
                </div>

                <div class="form-group">
                    <?= $this->Form->button(__('Submit'), array('class' => 'bouton-contact')) ?>
                </div>
                <div class="form-group">
                    <?= $this->Html->link( 'Volver al Menú',['controller' => 'Pages', 'action' => 'client']); ?>
                </div>

            </div>

        </div>
    </fieldset>

    <?= $this->Form->end() ?>
