# Changelog

## v1.20.0 - 2024-02-29
### Features
- Add request for OAuth2 client_credentials flow

## v1.19.3 - 2024-02-22
### Fixes
- Fix class 'Mirakl\MMP\FrontOperator\Domain\Offer' not found error

## v1.19.2 - 2024-01-16
### Fixes
- Fix API DR73 does not have the right header for downloading accounting document

## v1.19.1 - 2023-08-02
### Fixes
- Removed explicit package requirement of `psr/http-message` to avoid potential version incompatibility

## v1.19.0 - 2023-05-22
### Features
- Add OR13, OR14 and OR15 APIs
- Add DR12 API
- Add origin price for OR01, OR11 and OR05 APIs
- Add fully_refunded flag on orders
- Add locale field to PM11 API
- Add all_shipping_zones query parameter to P11 API
- Add max_quantity_to_discount field to PR01 and PR02 APIs
- Add models filter to OF51 and OF52 APIs
- Add refund_state_code filter to OR11 and OR13 APIs
- Remove product feeds nodes and query parameters from CM51 and CM54 APIs
- Add eco-contributions to DR12 API
- Support data origins in CM51 and CM54 APIs
- Update promotions allowed statuses
- Add shop-sku field to OF51 API
- Add tax purchase rate to OR05 API
- Add PL01, PL04 and PL11 APIs
- Add originUnitPriceExcludingTaxes and originUnitPriceIncludingTaxes in DR12 API
- Add product sku to DR12 API
- Add tax recalculation flag to 0R01, OR11, OR13 and Q07 APIs
- Add estimated delivery date to SH01, SH02 and P11 APIs
- Add issuer_id to DR11 API
- Add epr_category_code to OF21, OF22, OF51, OF54 and P11 APIs
- Add psp_name to invoice and transaction APIs
- Add support for israeli bank account
- Add close_product_orders param to AN01 API
- Add invoice consistency and override issue-date and due-date in DR74 API
- Add seller-operator messaging reason types
- Add eco-contributions to Q07, OR01, OR04, OR11, OR28, OR30 and OR32 APIs
- Add order_id to manual accounting document line
- Add platform model to OF54 API
### Fixes
- Fixed status mapping in invoice APIs

## v1.18.1 - 2023-05-05
### Fixes
- Fix `psr/http-message` package compatibility
- Fix PHPDoc on request \Mirakl\MMP\Shop\Request\Offer\UpdateOffersRequest

## v1.18.0 - 2023-03-09
### Features
- Add TL03, TL04 and TL05 APIs
- Add offer pricing_context and pricing_customer_organization_id filter to OF21, OF22, PR02, S04, P11 APIs
- Deprecate TL01 API
- Add invoice reference to ST01 and ST11 APIs
- Add CUR01 API
- Add model to OF51 and SH02 APIs
- Add triggers and last_updated information on promotion APIs PR01 and PR02
- Add debit entity to PA01/11
- Update document ID Filter in TL02/TL03 APIs
- Add purchase information in OR01/OR05/0R11/0R28/OR30 APIs
- Add query param id and document number in DR11
- Add entities field to DR11 response
- Make amount breakdown deprecated in OR30 and OR28 APIs
- Deprectate amount breakdown in taxes for OR30 and OR28
- Add PC01 API
- Update tax information in OR05 API
- Add producer identifiers in S06, S07 and A02
- Add A02 API
- Deprecate all instances of producerids
- Add shipments fields (ST11 + ST01)
- Allow nullable fields in PUT requests

## v1.17.0 - 2022-12-30
### Fix
- Added missing "channel" query parameter to CM54 API

## v1.17.0 - 2022-12-30
### Features
- Add API DR11, DR72, DR73 and DR74
- Hide shop_ids for shop user in DR11 API
- Add shipping address to DR11 API
- Add the SDK version in header X-Mirakl-Sdk-Version
- Add CM11 API
- Export acceptance status by channel in CM51 and CM52 APIs
- Add CO02 API
- Add CG01 API
- Add ST26 API
- Add CM52, CM53 and CM54 APIs
- Add S08 API to associate seller to customer groups
- Stream M13 attachment
- Add eco contribution details to P11, OF21, OF22, S04 and PR02
- Add eco-contributions to OF51 API
- Add API ST12 and update APIs ST01 and ST11
- Add validation by channel to CM51 API
- Add OF52, OF53 and OF54 APIs
- Change invoice id field type in IV07
- Add validation by channel to PM11 API
- Add validation by channel to PF01 PF02, PF03 and PF11 APIs
- Add platform model to S04,S06, S07, S20, A01, A02, AF01, DO01, P11, OF22 and PR02 APIs

## v1.16.0 - 2022-08-25
### Features
- Add CO01 API
- Add ST06 API
- Add product feeds filter parameter to PM11 API
- Add messages details and channel_codes parameter to M11 API
- Add invoice details to OR01, OR11 and OR04 APIs
- Add shop_reply_needed_since field to inbox API
- Add eco-contributions details to OF24 API
- Add AGEC fields to S06, S07 and A02 APIs
- Add due date field to IV01 API
- Add issue and operation dates to IV01 API
- Add no_store_reply_needed fields to M10 and M11 APIs
- Add payment details to PA11 and PA12 APIs
- Add AN01 API
- Add pricing_customer_organization_id field to SH02 and SH01 APIs
- Add new NOT_REQUIRED KYC status
- Add description field to AF01 API
- Add preserve_order parameter to H01 API
- Update the default date format to fit Mirakl requirements

## v1.15.2 - 2022-08-25
### Features
- Remove deprecated PF01, PF02 and PF03 APIs
### Fixes
- Fix channel price discount start and end dates are always empty when calling OF24 API

## v1.15.1 - 2022-05-31
### Features
- Add the `escape` parameter in `create_temp_csv_file` function

### Fixes
- Fix compatibility with `-o` option of Composer
- Fix potential error when Mirakl API returns an empty JSON response

## v1.15.0 - 2022-04-28
### Features
- Add compatibility with PHP 8
- Add API CU01
- Add excluded_from_shipment to OR28
- Add issuing user to IV01
- Add amout transferred to operator to IV01
- Add Uruguayan bank account
- Add Colombian bank account
- Add customer_directly_pays_seller field to OR01, OR11 and Q07
- Add shipping deadline to S04, PR02, OF22, OF21, SH01 and SH02
- Add last sender details in M11 API
- Add tax_calculation_rule, included_in_commission and operator_withheld field to OR75
- Add shipped date to Mirakl shipment
- Add last_updated_from and last_updated_to to ST11
- Add tax rate to TL02
- Deprecate LeadtimeToShip in OR01, OR11 and Q07

## v1.14.0 - 2021-12-23
### Features
- Add product feeds APIs (PF01, PF02, PF03 and PF11)
- Add API A02 to update shop information
- Open RE01 to shops and deprecate RE02
- Add API OF04 for operator and shop roles
- Add OR06 API to confirm orders taxes
- Add 'operator_format' parameter to API P41
- Add fulfillment center code in API (offer)
- Add measurement field to OF51
- Add applicable_taxes in A01 and S20 output
- Add the PAY_ON_SHIPMENT order workflow
- Add offers shipping prices by type and zone to P11 and OF51
- Add commissionnable flag and filter in OR11 / P11 / OF51
- Add API OR04 for the shop role + order references in API OR01, OR04 and OR11
- Add mandatoryTracking clickAndCollect and deliveryByOperator in SH12
- Add suspension_type in A01, S20, S06 and S07 APIs
- Add createDate and lastUpdatedDate on ST01 & ST11
- Support UK bank format for seller payout
- Add customer organization & additional contacts in OR01, OR11, OR04, M11, M10

## v1.13.7 - 2021-10-26
### Fixes
- Fix parameter order_tax_mode not working in GetHierarchiesRequest when calling OR11 API

## v1.13.6 - 2021-08-12
### Fixes
- Fix GetHierarchiesRequest not working with param hierarchy

## v1.13.5 - 2021-07-26
### Fixes
- Fix error with deprecated method GuzzleHttp\Psr7\build_query() if using Guzzle 7.2+

## v1.13.4 - 2021-05-21
### Fixes
- Fix potential notice when downloading an empty file from API

## v1.13.3 - 2021-05-05
### Fixes
- Fix cannot use query param hierarchy in PM11

## v1.13.2 - 2021-04-16
### Fixes
- Allow Guzzle 7 to be used for API calls

## v1.13.1 - 2021-02-05
### Fixes
- Fix namespace issue for DeliveryDate
- Fix error 'Notice: Array to string conversion' when using API P31

## v1.13.0 - 2021-01-22
### Features
- Add OR05 API
- Add inactivity_reasons on offer
- Add reply to review in S03 and OR51
- Add TL02 endpoint for sellers
- Add order_tax_mode and tax_calculation_rule in OR01, OR11, Q07, OR28 & OR30
- Add channel support in S06
- Add OR32 + measurement feature to OF24/OR01/OR11
- Add CH11 API
- Add SH12 API
- Add OR30 method in shop sdk
- Add 'can_shop_ship' to MiraklOrder
- Add support for shipping_pudo_id in OR01, Q07 and OR11
- Add editable to shop AF01
- Add fulfillment_center_code to OR11
- Add API CM61 to export deleted products from MCM
- Add New product info in P11
- Open OF51 to sellers
- Add support to CM51 authorized-selling-shop-ids
- Add indian bank info type
- Add delivery date in OR01, OR04, OR11, Q07, SH01 & SH02
- Add type parameters to PM11 result
- Add tax rate on orders API
- Add Amount breakdown for OR11, OR28, OR30, Q07
- Expose email alias information in OR11 for seller
- Add catalogs to CM21
- Add productUrls in CM21 & CM51
- Allow to delete products using CM21
- Add measurement to P13 and P11
- Add 'with_roles' query param to API PM11
- Add fulfillment in OR01, OR11, Q07, SH01 & SH02 output
- Created SDK methods for TL02 endpoint
- Mark API OF43 as deprecated
- Add OR04 API
- Add new rejection reason status for CM21 and CM51
- Add API endpoint for OR65 (dispute an incident)
- Add endpoint for new OR64 API (mark incident as resolved)
- Add new filter for CM51

### Fixes
- OF24 mapping not work for available date
- transaction_date et transaction_number are not returned in OR11
- Namespace issue for OF61 API with Operator SDK
- Bad offer_additional_fields declaration for API OF24

## v1.12.1 - 2020-08-04
### Fixes
 - Fix missing payment_voucher param and retro compatibility problem on TL01

## v1.12.0 - 2020-07-28
### Features
 - Add requirement level for attributes (PM11)
 - Add KYC information for A01, S06, S07 & S20 API clients
 - Add M10, M11, M12, M13 AN OR43 in SDK

## v1.11.1 - 2020-01-16
### Fixes
 - Fix XML responses that may not be parsed correctly

## v1.11.0 - 2019-11-04
### Features
 - Add all multi shipments APIs
 - Add operator classes on API OR75, SH21 and OR51
 - Add unique_code field to API PM11
 - Add incident reasons for MPS
 - Add shipping deadline on API OR01, OR11 and Q07

### Fixes
 - Fix another backward compatibility for the method getOriginPrice()

## v1.10.3 - 2019-11-04
### Fixes
 - Fix another backward compatibility for the method getOriginPrice()

## v1.10.2 - 2019-09-27
### Fixes
 - Fix different SDK roles could not be used together

## v1.10.1 - 2019-08-12
### Fixes
 - Fix potential error 400 when Q01 is called
 - Fix broken backwards compatibility of getOriginPrice() method on ExportOffer object during OF51 API usage

## v1.10.0 - 2019-08-06
### Features
 - Add Thai, Taiwanese and Japanese Bank account information
 - Add domains in Shop API outputs

### Fixes
 - Remove S03 customer sort fields
 - Fix bad charset declaration in multipart requests header

## v1.9.4 - 2019-07-04
### Fixes
 - Fix API OR31 that generates error 400

## v1.9.3 - 2019-06-20
### Fixes
 - Fix bad discount declaration on UpdateOffer object for API OF24

## v1.9.2 - 2019-03-25
### Features
 - Add "has_incident" query param to OR11 API

## v1.9.1 - 2018-10-10
### Fixes
 - Add the missing endpoints for the new API OF61 implementation

## v1.9.0 - 2018-08-27
### Features
 - Add S40 in SDK 
 - Add S33 and OR76 in SDK

## v1.8.0 - 2018-03-16

### Fixes
- Fixed SH02 API signature for taxes

### Features
- Added integration details on P43 API
- Added productTaxCode
- Added Evaluation lastUpdatedDate
- Added Order conditions offer fields in OF01, OF24 and OF51
- Added product tax code in OF21, OF22, OF51, P11
- Added Mirakl Catalog Management API (CM51, CM21, CM22, CM23)
 
## v1.7.2 - 2018-01-02

### Fixes
- Fixed SDK name in composer.json

## v1.7.1 - 2017-12-11

### Fixes

- Fixed error on PHP 5.5.9 'ShopApiClient has colliding constructor definitions coming from traits'

## v1.7.0 - 2017-10-30

### Features

- Added logging request and response
- Added offerRanking to P11 
- Added channels to promotion in PR01 query params
- Added include_inactive_offers to OF51 input 
- Added P13 API : Retrieve all products of the marketplace. The API supports JSON, XML and CSV.
- Added taxes computation fields to SH02

## v1.6.0 - 2017-09-22

### Features
- Added product tax code in OF01 and OF24
- Added shipping additional fields in A01/S20/S06/S07 output
- Added active filter and active field in OF61 (front and operator only)
- Added shop_ids paramater in P11 input

## v1.5.2 - 2017-09-22

### Fixes
- Fixed retro-compatibility for 1.4 and lower versions

## v1.5.1 - 2017-09-01

### Fixes
- Fixed API S06 broken because of mapping

## v1.5.0 - 2017-08-03

### Fixes
- FIX Error in OF01 body parameters
- FIX api/payment/debit float values
- FIX OR74,S32 wrong request parameter
- FIX ShopApiClientTrait

### Features
- Expose Attribute Roles in PM11
- Add pricing in offer related output APIs (P11, OF21, OF22, S04)
- Add pricing_channel_code as input for APIs P11, OF21, OF22, S04
- Add a UUID per request
- Rename pricing tags in Api + Rename of "unit-original-price" to "unit-origin-price"
- Rename SH0x query parameter "channel_code" to "pricing_channel_code"
- Add trigger offer ids and reward offer ids in filter and output for PR01
- Add reward on purchased items flag in output for PR01
- Add API PR51 in SDK
- API PR02: list a promotion's details with its related active offers
- Refactor OffersOnProducts.php

## v1.4.6 - 2017-06-30

### Fixes
- Fixed Q01 request that did not work anymore with JSON input
- Fixed Q07 request output

## v1.4.5 - 2017-02-20

### Fixes
- Fixed bug with autoload searching for object implementing toArray() method

## v1.4.4 - 2017-02-07

### Fixes
- Added missing process tracking status class

## v1.4.3 - 2016-01-20

### Features
- Added 'full' parameter to V01
- Added PR01 API
- Added channel to SH01 and SH02
- Added date_deleted to S30
- Added pagination and sort to P51
- Added a method to get discount ranges as string

### Fixes
- Added missing sortable behavior to M01

## v1.4.2 - 2016-12-19

### Fixes
- Renamed package name from 'mirakl-sdk-php' to 'php-sdk'

## v1.4.1 - 2016-12-14

### Fixes
- Fixed SH02 API not sending offers parameter correctly

## v1.4.0 - 2016-12-12

### Features
- Refactored SDK so that it is compatible with PSR-7

## v1.3.5 - 2016-12-09

### Fixes
- Fixed case-sensitive getHeader() that should not be

## v1.3.4 - 2016-12-07

### Features
- Added SH11 API
- Added P51 API listing the Product Import Trackings
- Add only_null_channel new parameter to OR11
- Added promotions to SH01, SH02, OR01 and OR11 APIs
- Added DO01 API (get documents configuration)
- Added Mexican bank type

### Fixes
- Fixed OR73 not being filtered by document codes
- Fixed some phpdoc
- Removed the parameter linesInPendingDeleted in the offer import status

## v1.3.3 - 2016-11-10

### Fixes
- Define shop_id in MCI Shop API Client

## v1.3.2 - 2016-10-18

### Features
- Added linesInPending and offerinPendingDeleted in OF02
- Added SDK version in request User-Agent
- Added Canadian bank account information

## v1.3.1 - 2016-10-10

### Features
- Added IV03 API
- Added IV04 API
- Added IV05 API
- Added IV06 API
- Added state in IV01 input and output
- Added translatable fields to VL11

### Fixes
- Fixed bug in getStreet1() and getStreet2() magic methods
- Return variant property of an attribute via API PM11
- Updated IV06 HTTP method to DELETE
- Updated the way dates are tested

## v1.3.0 - 2016-09-05

### Features
- Added localization and ability to sort descending OR11
- Added quote request message id in Q01 and Q04
- Added expiration date to quote in Q01
- Added quote_id in OR01 and OR11 output
- Added quote related API and fields
- Added new fields and manual accounting to IV01
- Added translatable fields to PM11
- Added CA11 API
- Added 'allow_quote_requests' field
- Added localized labels in H11
- Updated product import statuses
- Added new ReasonTypes to RE01

### Fixes
- Fixed bug formatting string to integer with leading zero
- Added missing fields in Q01 and Q04
- Removed category type from SDK
- Fixed some typos in phpdoc
- Added missing QUEUED constant

## v1.2.0 - 2016-06-07

### Features
- Added call to P43 for operator
- Added OR31 API
- Added shop_permission key to AdditionalField object
- Added multi values type for additional fields
- Add channel codes in OF51
- Added `visible` field for OR51 API

### Fixes
- Fixed VL11 errors
- Added a test case with HTTP 429 return code
- Added shipping_carrier_code mapping
- Added missing different bank type classes

## v1.1.5 - 2016-05-17

### Features
- Added filename to uploaded files

### Fixes
- Fixed M01 request with PHP SDK does not return all messages

## v1.1.4 - 2016-04-27

### Features
- Added `category_type` field in API OF21, OF22, S04, P11 and P31
- Added OR30 API
- Added content type to file response if possible
- Added some methods to create a temp file easily

### Fixes
- Removed unnecessary PHP warning

## v1.1.3 - 2016-03-16

### Features
- Added parameters to P11 for shop to comply with API doc
- Added VL11 implementation and tests
- Added support for ORDER linked entity for AdditionalFields
- Take into account pay in store in the SDK
- Added Shipping AdditionalFieldValues in SH01 and SH02 outputs
- Added `leatime_to_ship` in APIs
- Added MiraklProductMedia

### Fixes
- Leaptime to ship and eco tax are not mapped in OF51
- Fixed missing `MiraklShippingTypeDetail` class in SH01
- Added test case for S31 API implementation
- Fixed S04 API not being correctly implemented
- Renamed ShopShippingRate to OrderShippingFee

## v1.1.2 - 2016-02-15

### Fixes
- Saved default client if not already set

## v1.1.1 - 2016-02-11

### Fixes
- Fixed bug when using func_get_arg() (string to object conversion)

## v1.1.0 - 2016-02-10

### Features
- Added SH02 API
- Moved DateTime fields in a dedicated trait

### Fixes
- Fixed bottleneck because of checkItems() method being called multiple times when using add() method massively in a loop

## v1.0.2 - 2016-01-07

### Fixes
- Fixed paginate parameter not sent correctly

## v1.0.1 - 2016-01-07

### Fixes
- Updated current year
