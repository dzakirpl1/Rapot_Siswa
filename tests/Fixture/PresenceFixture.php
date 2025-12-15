<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * PresenceFixture
 */
class PresenceFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'presence';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'subject_id' => 1,
                'student_id' => 1,
                'semester_id' => 1,
                'status' => 'Lorem ipsum dolor sit amet',
                'created' => '2025-11-29 08:28:19',
                'modified' => '2025-11-29 08:28:19',
            ],
        ];
        parent::init();
    }
}
