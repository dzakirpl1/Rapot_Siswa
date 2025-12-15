<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Grade Entity
 *
 * @property int $id
 * @property int $student_id
 * @property int $teacher_id
 * @property int $subject_id
 * @property int $assesment_id
 * @property int $semester_id
 * @property int $score
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Student $student
 * @property \App\Model\Entity\Teacher $teacher
 * @property \App\Model\Entity\Subject $subject
 * @property \App\Model\Entity\Assesment $assesment
 * @property \App\Model\Entity\Semseters $semseters
 */
class Grade extends Entity
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
        'teacher_id' => true,
        'subject_id' => true,
        'assesment_id' => true,
        'semester_id' => true,
        'score' => true,
        'created' => true,
        'modified' => true,
        'student' => true,
        'teacher' => true,
        'subject' => true,
        'assesment' => true,
        'semseters' => true,
    ];
}
