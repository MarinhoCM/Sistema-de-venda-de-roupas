<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * VendedoresFixture
 */
class VendedoresFixture extends TestFixture
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
                'InformacoesEspecificas' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
