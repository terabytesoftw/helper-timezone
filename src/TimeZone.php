<?php

namespace terabytesoft\helpers;

/**
 * Class Timezone
 *
 * Helper showing all time zones
 **/
class TimeZone
{
    /**
     * Get all of the time zones with the offsets sorted by their offset
     **/
    public function getAll(): array
    {
        $timeZones = [];
        $timeZoneIdentifiers = \DateTimeZone::listIdentifiers();

        foreach ($timeZoneIdentifiers as $timeZone) {
            $date = new \DateTime('now', new \DateTimeZone($timeZone));
            $offset = $date->getOffset();
            $tz = ($offset > 0 ? '+' : '-') . gmdate('H:i', (int) abs($offset));
            $timeZones[] = [
                'timezone' => $timeZone,
                'name' => "{$timeZone} (UTC {$tz})",
                'offset' => $offset
            ];
        }

        \yii\helpers\ArrayHelper::multisort($timeZones, 'offset', SORT_DESC, SORT_NUMERIC);

        return $timeZones;
    }
}
