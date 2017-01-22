<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * PeopleMembership Entity
 *
 * @property int $id
 * @property int $semester
 * @property int $person_id
 * @property int $membership_id
 * @property bool $payment
 * @property bool $social_service
 * @property string $social_service_comment
 * @property string $comment
 *
 * @property \App\Model\Entity\Person $person
 * @property \App\Model\Entity\Membership $membership
 */
class PeopleMembership extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'id' => false
    ];

    /**
     * Gibt den Sozialen Dienst in einem Satz aus
     * @return string z.B. Ja, blabla im SS16. oder Nein.
     */
    protected function _getSocialServiceString()
    {
        if ($this->social_service) {
            return "Ja, " . $this->social_service_comment . " im " . $this->semester_string;
        } else {
            return "Nein.";
        }
    }

    /**
     * Gibt das Semester in Kurzform an
     * @return string z.B. WS16
     */
    protected function _getSemesterString()
    {
        $year = substr($this->semester, 2, 2);
        $semester = substr($this->semester, 4, 2);
        $stringSem = ['01' => "SS", '02' => "WS"];
        return $stringSem[$semester] . $year;
    }
}
