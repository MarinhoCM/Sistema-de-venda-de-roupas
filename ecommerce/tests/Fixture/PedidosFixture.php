<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * PedidosFixture
 */
class PedidosFixture extends TestFixture
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
                'IDPedido' => 1,
                'IDUsuario' => 1,
                'DataPedido' => '2024-04-13',
                'StatusPedido' => 'Lorem ipsum dolor sit amet',
                'Total' => 1.5,
            ],
        ];
        parent::init();
    }
}
