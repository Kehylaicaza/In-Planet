<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Appointment Entity
 *
 * @property int $id
 * @property \Cake\I18n\FrozenTime $time_appointments
 * @property \Cake\I18n\FrozenDate $day
 * @property string $description
 * @property string $state
 * @property int $client_id
 * @property int $employee_id
 *
 * @property \App\Model\Entity\Client $client
 * @property \App\Model\Entity\Employee $employee
 */
class Appointment extends Entity
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
