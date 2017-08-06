<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * InstalationsFixture
 *
 */
class InstalationsFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'date_instalation' => ['type' => 'date', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'date_time' => ['type' => 'time', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'client_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'employee_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'modem_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'fk_Client_instalation' => ['type' => 'index', 'columns' => ['client_id'], 'length' => []],
            'fk_employee_instalation' => ['type' => 'index', 'columns' => ['employee_id'], 'length' => []],
            'fk_modem_instalation' => ['type' => 'index', 'columns' => ['modem_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'fk_Client_instalation' => ['type' => 'foreign', 'columns' => ['client_id'], 'references' => ['clients', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'fk_employee_instalation' => ['type' => 'foreign', 'columns' => ['employee_id'], 'references' => ['employees', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'fk_modem_instalation' => ['type' => 'foreign', 'columns' => ['modem_id'], 'references' => ['modems', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'latin1_swedish_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'id' => 1,
            'date_instalation' => '2017-08-03',
            'date_time' => '19:03:36',
            'client_id' => 1,
            'employee_id' => 1,
            'modem_id' => 1
        ],
    ];
}
