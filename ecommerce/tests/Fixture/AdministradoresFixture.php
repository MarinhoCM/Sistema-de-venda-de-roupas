<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * AdministradoresFixture
 */
class AdministradoresFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'ID' => 1,
                'Nome' => 'Lorem ipsum dolor sit amet',
                'Cargo' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
