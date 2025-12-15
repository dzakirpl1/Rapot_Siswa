<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Student Entity
 *
 * @property int $id
 * @property int $user_id
 * @property int|null $kelas_id
 * @property string $nis
 * @property string $name
 * @property string $addres
 * @property string $phone
 * @property string $photo
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $updated
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Kela $kela
 * @property \App\Model\Entity\Extracurricullar[] $extracurricullars
 * @property \App\Model\Entity\Grade[] $grades
 * @property \App\Model\Entity\Presence[] $presence
 */
class Student extends Entity
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
        'kelas_id' => true,
        'nis' => true,
        'name' => true,
        'addres' => true,
        'phone' => true,
        'photo' => true,
        'created' => true,
        'updated' => true,
        'user' => true,
        'kela' => true,
        'extracurricullars' => true,
        'grades' => true,
        'presence' => true,
    ];
}
