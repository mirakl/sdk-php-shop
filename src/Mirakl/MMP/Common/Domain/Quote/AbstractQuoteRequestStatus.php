<?php
namespace Mirakl\MMP\Common\Domain\Quote;

use Mirakl\Core\Domain\MiraklObject;

/**
 * @method  string  getState()
 * @method  $this   setState(string $state)
 */
abstract class AbstractQuoteRequestStatus extends MiraklObject
{
    /**
     * Waiting to be scored by front
     * Unavailable to shop(s) at this point
     */
    const SCORING = 'SCORING';

    /**
     * FINAL STATE
     * front has invalidated the customer's paying information
     */
    const SCORED_KO = 'SCORED_KO';

    /**
     * Initial state once the QuoteRequest is scored, stays here until shop replies
     */
    const TO_PROCESS = 'TO_PROCESS';

    /**
     * Second stage of the Quote Request for this shop: the shop has acknowledged and answered to this request, by
     * either writing a message or submitting a quote to the customer
     */
    const IN_PROGRESS = 'IN_PROGRESS';

    /**
     * FINAL STATE
     * Once the Quote Request for this shop is inactive (no messages AND no currently valid quotes) for a period of time
     * set by operator.
     * Set to this state by batch
     */
    const EXPIRED = 'EXPIRED';

    /**
     * FINAL STATE
     * Customer has accepted one quote from this shop, every other quotes -from this shop- will be closed as a result
     */
    const ACCEPTED = 'ACCEPTED';
}