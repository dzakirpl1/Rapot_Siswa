<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * GradesFixture
 */
class GradesFixture extends TestFixture
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
                'id' => 1,
                'student_id' => 1,
                'teacher_id' => 1,
                'subject_id' => 1,
                'assesment_id' => 1,
                'semester_id' => 1,
                'score' => 1,
                'created' => '2025-12-03 04:21:18',
                'modified' => '2025-12-03 04:21:18',
            ],
        ];
        parent::init();
    }
}
