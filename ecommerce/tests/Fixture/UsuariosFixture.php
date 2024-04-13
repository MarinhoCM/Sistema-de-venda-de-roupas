<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * UsuariosFixture
 */
class UsuariosFixture extends TestFixture
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
                'Email' => 'Lorem ipsum dolor sit amet',
                'Senha' => 'Lorem ipsum dolor sit amet',
                'Endereco' => 'Lorem ipsum dolor sit amet',
                'InformacoesPagamento' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
