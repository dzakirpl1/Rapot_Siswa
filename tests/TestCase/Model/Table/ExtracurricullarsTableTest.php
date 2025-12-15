<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ExtracurricullarsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ExtracurricullarsTable Test Case
 */
class ExtracurricullarsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ExtracurricullarsTable
     */
    protected $Extracurricullars;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Extracurricullars',
        'app.Students',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Extracurricullars') ? [] : ['className' => ExtracurricullarsTable::class];
        $this->Extracurricullars = $this->getTableLocator()->get('Extracurricullars', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Extracurricullars);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ExtracurricullarsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\ExtracurricullarsTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
