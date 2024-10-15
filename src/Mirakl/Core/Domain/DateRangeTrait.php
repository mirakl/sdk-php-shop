<?php

declare(strict_types=1);

namespace Mirakl\Core\Domain;

/**
 * @property array $data
 */
trait DateRangeTrait
{
    /**
     * @param \DateTime|string $startDate
     * @return $this
     */
    public function setStartDate($startDate)
    {
        if (!empty($startDate)) {
            if (is_string($startDate)) {
                $startDate = new \DateTime($startDate);
            }
            $this->data['start_date'] = $startDate;
        }

        return $this;
    }

    /**
     * @param \DateTime|string $endDate
     * @return $this
     */
    public function setEndDate($endDate)
    {
        if (!empty($endDate)) {
            if (is_string($endDate)) {
                $endDate = new \DateTime($endDate);
            }
            $this->data['end_date'] = $endDate;
        }

        return $this;
    }
}
