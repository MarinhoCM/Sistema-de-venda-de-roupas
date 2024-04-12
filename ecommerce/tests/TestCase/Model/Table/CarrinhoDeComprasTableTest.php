<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CarrinhoDeComprasTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CarrinhoDeComprasTable Test Case
 */
class CarrinhoDeComprasTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CarrinhoDeComprasTable
     */
    protected $CarrinhoDeCompras;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'app.CarrinhoDeCompras',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('CarrinhoDeCompras') ? [] : ['className' => CarrinhoDeComprasTable::class];
        $this->CarrinhoDeCompras = $this->getTableLocator()->get('CarrinhoDeCompras', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->CarrinhoDeCompras);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\CarrinhoDeComprasTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
