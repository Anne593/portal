<?php

namespace App\Utility;
/**
 * Hier kommen alle globalen funktionen rein, zu keinem Model zugeordnet
 * werden können.
 *
 * Zum benutzen vorher
 * use App\Utility\Utility; einbingen und dann ein Objekt erstellen
 * $utilitys = new Utility(); und dann nutzen
 */
class Utility
{
    /** prüft ob das gegebene Datum im SoSe liegt
     *
     * @param date $date das zu überprüfende datum
     *
     * @return bool true, falls SoSe, sonst false
     */
    public function isSummerSemester($date = null)
    {
        if ($date == NULL) {
            $date = new \DateTime('now');
        }
        $month = $date->format('m');
        if ($month >= 4 && $month < 10) {
            return true;
        }
        return false;
    }


    /** gibt den Bezahlungs Referenz Code aus 2016010000000091
     *
     * @param int $id zahlt wir mit nullen aufgefüllt und nach JahrSem gesetzt
     * @param date $date Das Datum des RefCodes
     * @return string 1. 4 stellen Jahr des Semesterbeginns,
     * 2. 2 Stellen: 01->SS, 02->WS,
     * 10 Stellen: bei Haus person_id, bei netz: Vereinsnummer
     *
     */
    public function refCode($date = NULL, $id)
    {
        return $this->SemesterCode($date) . str_pad($id, 10, '0', STR_PAD_LEFT);
    }


    /**
     * Gibt das Semester in Code an
     * @param null $date aus diesem wird das Semester ermittelt
     * @return string zB 201602  Jahr und 01->SS, 02->WS,
     */
    public function SemesterCode($date = NULL)
    {
        if ($date == NULL) {
            $date = new \DateTime('now');
        }
        if ($this->isSummerSemester($date)) {
            return $date->format('Y') . '01';
        } else {
            if ($date->format('m') < 5) {
                return $date->format('Y') - 1 . '02';
            } else {
                return $date->format('Y') . '02';
            }
        }
    }

}
