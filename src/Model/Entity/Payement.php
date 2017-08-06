<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Payement Entity
 *
 * @property int $id
 * @property int $plan_id
 * @property int $client_id
 * @property \Cake\I18n\FrozenDate $dates
 * @property string $credit_card
 * @property \Cake\I18n\FrozenDate $limit_date
 * @property int $internet_service_id
 *
 * @property \App\Model\Entity\Plan $plan
 * @property \App\Model\Entity\Client $client
 * @property \App\Model\Entity\InternetService $internet_service
 */
class Payement extends Entity
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
