<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * StudentsFixture
 */
class StudentsFixture extends TestFixture
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
                'kelas_id' => 1,
                'nis' => 'Lorem ipsum dolor sit amet',
                'name' => 'Lorem ipsum dolor sit amet',
                'addres' => 'Lorem ipsum dolor sit amet',
                'phone' => 'Lorem ipsum dolor sit a',
                'photo' => 'Lorem ipsum dolor sit amet',
                'created' => '2025-12-03 23:43:15',
                'updated' => '2025-12-03 23:43:15',
            ],
        ];
        parent::init();
    }
}
