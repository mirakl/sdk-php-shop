<?php

declare(strict_types=1);

namespace Mirakl\Core\Domain;

trait DateFieldsTrait
{
    /**
     * The following fields will be converted to \DateTime object if specified as string
     *
     * @var array
     */
    protected static $dateFields = [
        'acceptance_decision_date', 'accounting_document_creation_date', 'api_date', 'available_end_date',
        'available_start_date', 'billing_cycle_from', 'billing_cycle_to', 'birth_date', 'bo_date', 'closed_from',
        'closed_from_date', 'closed_to', 'closed_to_date', 'created_date', 'creation_date', 'customer_debited_date',
        'cut_off_next_date', 'date', 'date_created', 'date_created_from', 'date_created_to', 'date_deleted',
        'date_from', 'date_to', 'date_updated', 'date_uploaded', 'debited_date', 'deleted_from', 'deleted_to',
        'deletion_date', 'discount_end_date','discount_start_date', 'due_date', 'earliest', 'earliest_delivery_date',
        'emission_date', 'end_date', 'end_refund_creation_date', 'end_update_date', 'ending_after', 'expiration_date',
        'immunity_date', 'immunized_until', 'issue_date', 'issue_date_from', 'last_request_date', 'last_updated',
        'last_updated_date', 'last_updated_from', 'last_updated_to', 'latest', 'latest_delivery_date', 'operation_date',
        'ordering_end_date', 'pickup_date', 'received_date', 'return_creation_date_from', 'return_creation_date_to',
        'return_last_updated_from', 'return_last_updated_to', 'shipped_date', 'shipping_date', 'shipping_deadline',
        'shop_reply_needed_since', 'start_date', 'start_refund_creation_date', 'start_update_date', 'starting_before',
        'subscription_free_from', 'subscription_free_to', 'transaction_date', 'transaction_date_from',
        'transaction_date_to', 'update_date', 'updated_since',
    ];
}
