<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Network\Exception\NotFoundException;

$this->layout = false;

if (!Configure::read('debug')):
    throw new NotFoundException('Please replace src/Template/Pages/home.ctp with your own version.');
endif;

$cakeDescription = 'CakePHP: the rapid development PHP framework';
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

    <?= $this->Html->css('estilo.css') ?>

                        <?= $this->fetch('meta') ?>
                            <?= $this->fetch('script') ?>
    </head>

    <body>

        <nav class="top-bar expanded" data-topbar role="navigation">
            <ul class="title-area large-3 medium-4 columns">
                <li class="name">
                    <h1>

                        <div class="header-image">
                            <a><?= $this->Html->image('logo.jpg') ?></a>
                        </div>
                    </h1>
                </li>
            </ul>
            <div class="top-bar-section">
                <ul class="right">

                    <li>
                        <?= $this->Html->link(__('Regístrate'), ['controller' => 'pages', 'action' => 'registry' ]) ?>
                    </li>

                    <li>
                        <?= $this->Html->link('Logout', ['controller' => 'users', 'action' => 'logout']); ?>
                    </li>
                </ul>
            </div>
        </nav>






        <div class="info">
            <br><br><br><br>
            <h3>REGISTRATE</h3>

            <p> Mantengase conectado todo el dia con nuestros planes ...</p>
            <h5>Llena tus datos</h5>
        </div>

        <div class="container">
            
          <form>
                <div class="contentform">
                    <div class="leftcontact">
                        <div class="form-group">
                            <input type="text" name="name" placeholder="Nombres" />
                        </div>
                        <div class="form-group">
                            <input type="text" name="phone" placeholder="Nro. Telefono" />
                        </div>
                        <div class="form-group">
                            <input type="text" name="ci" placeholder="Cédula" />
                        </div>
                        
                            
                        <div class="form-group">
                            <input type="text" name="user" placeholder="Username" />
                        </div>
                        <div class="form-group">
                       
                             <p class="planilla">Cargar planilla</p><input class="planilla" type="file" name="planilla" placeholder="Planilla"  />
                           
                           
                         
                        </div>
                    </div>

                    <div class="rightcontact">
                        <div class="form-group">
                            <input type="text" name="apellido" placeholder="Apellidos" />
                        </div>

                        <div class="form-group">
                            <input type="text" name="email" placeholder="Email" />

                        </div>

                        <div class="form-group">
                            <input type="text" name="direccion" placeholder="Direccion" />
                        </div>
                        <div class="form-group">
                            <input type="password" name="pass" placeholder="Contrasena" />
                        </div>
                         <div class="form-group">
                            <input type="text" name="direccion" placeholder="Ciudad" />
                        </div>
                        
                                   
                        

                        <div class="form-group">
                            <button type="submit" class="bouton-contact">Enviar</button>
                        </div>
                    </div>
                </div>

            </form>
            
        </div>

    </body>

    </html>
