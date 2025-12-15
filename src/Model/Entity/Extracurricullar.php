<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Extracurricullar Entity
 *
 * @property int $id
 * @property int $student_id
 * @property int $precense_id
 * @property string $name
 * @property string $information
 * @property int $score
 *
 * @property \App\Model\Entity\Student $student
 */
class Extracurricullar extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected $_accessible = [
        'student_id' => true,
        'precense_id' => true,
        'name' => true,
        'information' => true,
        'score' => true,
        'student' => true,
    ];
}
