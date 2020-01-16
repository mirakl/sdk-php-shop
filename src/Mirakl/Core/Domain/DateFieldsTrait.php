<?php
namespace Mirakl\Core\Domain;

trait DateFieldsTrait
{
    /**
     * The following fields will be convert to \DateTime object if specified as string
     *
     * @var array
     */
    protected static $dateFields = [
        'start_date', 'end_date', 'date', 'date_created', 'closed_from', 'closed_to', 'ending_after', 'starting_before',
        'last_updated_date', 'emission_date', 'immunity_date', 'subscription_free_from', 'subscription_free_to',
        'immunized_until', 'last_request_date', 'updated_since', 'transaction_date', 'acceptance_decision_date',
        'created_date', 'debited_date', 'received_date', 'shipped_date', 'date_uploaded', 'date_deleted',
        'start_update_date', 'end_update_date', 'accounting_document_creation_date', 'customer_debited_date',
        'expiration_date', 'date_created_from', 'date_created_to', 'discount_start_date', 'discount_end_date',
        'updated_since', 'last_updated', 'creation_date', 'update_date', 'shipping_deadline'
    ];
}