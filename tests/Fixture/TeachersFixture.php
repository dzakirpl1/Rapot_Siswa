<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * TeachersFixture
 */
class TeachersFixture extends TestFixture
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
                'user_id' => 1,
                'name' => 'Lorem ipsum dolor sit amet',
                'nip' => 'Lorem ipsum dolor sit amet',
                'phone' => 'Lorem ipsum dolor sit a',
                'subject_id' => 1,
                'created' => '2025-12-03 04:14:54',
                'updated' => '2025-12-03 04:14:54',
            ],
        ];
        parent::init();
    }
}
