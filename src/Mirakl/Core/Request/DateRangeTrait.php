<?php
namespace Mirakl\Core\Request;

trait DateRangeTrait
{
    /**
     * @var \DateTime
     */
    protected $startDate;

    /**
     * @var \DateTime
     */
    protected $endDate;

    /**
     * @return  \DateTime
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * @param   mixed   $startDate
     * @return  $this
     */
    public function setStartDate($startDate)
    {
        if (!empty($startDate)) {
            if (is_string($startDate)) {
                $startDate = new \DateTime($startDate);
            }
            $this->startDate = $startDate;
        }

        return $this;
    }

    /**
     * @return  \DateTime
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * @param   mixed   $endDate
     * @return  $this
     */
    public function setEndDate($endDate)
    {
        if (!empty($endDate)) {
            if (is_string($endDate)) {
                $endDate = new \DateTime($endDate);
            }
            $this->endDate = $endDate;
        }

        return $this;
    }
}