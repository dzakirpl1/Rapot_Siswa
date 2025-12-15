<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Teacher Entity
 *
 * @property int $id
 * @property int $user_id
 * @property string $name
 * @property string $nip
 * @property string $phone
 * @property int $subject_id
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $updated
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Subject $subject
 * @property \App\Model\Entity\Grade[] $grades
 */
class Teacher extends Entity
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
        'user_id' => true,
        'name' => true,
        'nip' => true,
        'phone' => true,
        'subject_id' => true,
        'created' => true,
        'updated' => true,
        'user' => true,
        'subject' => true,
        'grades' => true,
    ];
}
