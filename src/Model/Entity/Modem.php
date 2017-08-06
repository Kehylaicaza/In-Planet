<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Modem Entity
 *
 * @property int $id
 * @property string $model
 * @property string $serial
 *
 * @property \App\Model\Entity\Instalation[] $instalations
 * @property \App\Model\Entity\InternetService[] $internet_services
 */
class Modem extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'id' => false
    ];
}
