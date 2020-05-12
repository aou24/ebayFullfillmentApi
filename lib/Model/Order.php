<?php
/**
 * Order
 *
 * PHP version 5
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Fulfillment API
 *
 * Use the Fulfillment API to complete the process of packaging, addressing, handling, and shipping each order on behalf of the seller, in accordance with the payment method and timing specified at checkout.
 *
 * The version of the OpenAPI document: v1.13.0
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.3.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * Order Class Doc Comment
 *
 * @category Class
 * @description This type contains the details of an order, including information about the buyer, order history, shipping fulfillments, line items, costs, payments, and order fulfillment status.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Order implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Order';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'buyer' => '\OpenAPI\Client\Model\Buyer',
        'buyer_checkout_notes' => 'string',
        'cancel_status' => '\OpenAPI\Client\Model\CancelStatus',
        'creation_date' => 'string',
        'ebay_collect_and_remit_tax' => 'bool',
        'fulfillment_hrefs' => 'string[]',
        'fulfillment_start_instructions' => '\OpenAPI\Client\Model\FulfillmentStartInstruction[]',
        'last_modified_date' => 'string',
        'legacy_order_id' => 'string',
        'line_items' => '\OpenAPI\Client\Model\LineItem[]',
        'order_fulfillment_status' => 'string',
        'order_id' => 'string',
        'order_payment_status' => 'string',
        'payment_summary' => '\OpenAPI\Client\Model\PaymentSummary',
        'pricing_summary' => '\OpenAPI\Client\Model\PricingSummary',
        'sales_record_reference' => 'string',
        'seller_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'buyer' => null,
        'buyer_checkout_notes' => null,
        'cancel_status' => null,
        'creation_date' => null,
        'ebay_collect_and_remit_tax' => null,
        'fulfillment_hrefs' => null,
        'fulfillment_start_instructions' => null,
        'last_modified_date' => null,
        'legacy_order_id' => null,
        'line_items' => null,
        'order_fulfillment_status' => null,
        'order_id' => null,
        'order_payment_status' => null,
        'payment_summary' => null,
        'pricing_summary' => null,
        'sales_record_reference' => null,
        'seller_id' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'buyer' => 'buyer',
        'buyer_checkout_notes' => 'buyerCheckoutNotes',
        'cancel_status' => 'cancelStatus',
        'creation_date' => 'creationDate',
        'ebay_collect_and_remit_tax' => 'ebayCollectAndRemitTax',
        'fulfillment_hrefs' => 'fulfillmentHrefs',
        'fulfillment_start_instructions' => 'fulfillmentStartInstructions',
        'last_modified_date' => 'lastModifiedDate',
        'legacy_order_id' => 'legacyOrderId',
        'line_items' => 'lineItems',
        'order_fulfillment_status' => 'orderFulfillmentStatus',
        'order_id' => 'orderId',
        'order_payment_status' => 'orderPaymentStatus',
        'payment_summary' => 'paymentSummary',
        'pricing_summary' => 'pricingSummary',
        'sales_record_reference' => 'salesRecordReference',
        'seller_id' => 'sellerId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'buyer' => 'setBuyer',
        'buyer_checkout_notes' => 'setBuyerCheckoutNotes',
        'cancel_status' => 'setCancelStatus',
        'creation_date' => 'setCreationDate',
        'ebay_collect_and_remit_tax' => 'setEbayCollectAndRemitTax',
        'fulfillment_hrefs' => 'setFulfillmentHrefs',
        'fulfillment_start_instructions' => 'setFulfillmentStartInstructions',
        'last_modified_date' => 'setLastModifiedDate',
        'legacy_order_id' => 'setLegacyOrderId',
        'line_items' => 'setLineItems',
        'order_fulfillment_status' => 'setOrderFulfillmentStatus',
        'order_id' => 'setOrderId',
        'order_payment_status' => 'setOrderPaymentStatus',
        'payment_summary' => 'setPaymentSummary',
        'pricing_summary' => 'setPricingSummary',
        'sales_record_reference' => 'setSalesRecordReference',
        'seller_id' => 'setSellerId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'buyer' => 'getBuyer',
        'buyer_checkout_notes' => 'getBuyerCheckoutNotes',
        'cancel_status' => 'getCancelStatus',
        'creation_date' => 'getCreationDate',
        'ebay_collect_and_remit_tax' => 'getEbayCollectAndRemitTax',
        'fulfillment_hrefs' => 'getFulfillmentHrefs',
        'fulfillment_start_instructions' => 'getFulfillmentStartInstructions',
        'last_modified_date' => 'getLastModifiedDate',
        'legacy_order_id' => 'getLegacyOrderId',
        'line_items' => 'getLineItems',
        'order_fulfillment_status' => 'getOrderFulfillmentStatus',
        'order_id' => 'getOrderId',
        'order_payment_status' => 'getOrderPaymentStatus',
        'payment_summary' => 'getPaymentSummary',
        'pricing_summary' => 'getPricingSummary',
        'sales_record_reference' => 'getSalesRecordReference',
        'seller_id' => 'getSellerId'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['buyer'] = isset($data['buyer']) ? $data['buyer'] : null;
        $this->container['buyer_checkout_notes'] = isset($data['buyer_checkout_notes']) ? $data['buyer_checkout_notes'] : null;
        $this->container['cancel_status'] = isset($data['cancel_status']) ? $data['cancel_status'] : null;
        $this->container['creation_date'] = isset($data['creation_date']) ? $data['creation_date'] : null;
        $this->container['ebay_collect_and_remit_tax'] = isset($data['ebay_collect_and_remit_tax']) ? $data['ebay_collect_and_remit_tax'] : null;
        $this->container['fulfillment_hrefs'] = isset($data['fulfillment_hrefs']) ? $data['fulfillment_hrefs'] : null;
        $this->container['fulfillment_start_instructions'] = isset($data['fulfillment_start_instructions']) ? $data['fulfillment_start_instructions'] : null;
        $this->container['last_modified_date'] = isset($data['last_modified_date']) ? $data['last_modified_date'] : null;
        $this->container['legacy_order_id'] = isset($data['legacy_order_id']) ? $data['legacy_order_id'] : null;
        $this->container['line_items'] = isset($data['line_items']) ? $data['line_items'] : null;
        $this->container['order_fulfillment_status'] = isset($data['order_fulfillment_status']) ? $data['order_fulfillment_status'] : null;
        $this->container['order_id'] = isset($data['order_id']) ? $data['order_id'] : null;
        $this->container['order_payment_status'] = isset($data['order_payment_status']) ? $data['order_payment_status'] : null;
        $this->container['payment_summary'] = isset($data['payment_summary']) ? $data['payment_summary'] : null;
        $this->container['pricing_summary'] = isset($data['pricing_summary']) ? $data['pricing_summary'] : null;
        $this->container['sales_record_reference'] = isset($data['sales_record_reference']) ? $data['sales_record_reference'] : null;
        $this->container['seller_id'] = isset($data['seller_id']) ? $data['seller_id'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets buyer
     *
     * @return \OpenAPI\Client\Model\Buyer|null
     */
    public function getBuyer()
    {
        return $this->container['buyer'];
    }

    /**
     * Sets buyer
     *
     * @param \OpenAPI\Client\Model\Buyer|null $buyer buyer
     *
     * @return $this
     */
    public function setBuyer($buyer)
    {
        $this->container['buyer'] = $buyer;

        return $this;
    }

    /**
     * Gets buyer_checkout_notes
     *
     * @return string|null
     */
    public function getBuyerCheckoutNotes()
    {
        return $this->container['buyer_checkout_notes'];
    }

    /**
     * Sets buyer_checkout_notes
     *
     * @param string|null $buyer_checkout_notes This field contains any comments that the buyer left for the seller about the order during checkout process. This field is only returned if a buyer left comments at checkout time.
     *
     * @return $this
     */
    public function setBuyerCheckoutNotes($buyer_checkout_notes)
    {
        $this->container['buyer_checkout_notes'] = $buyer_checkout_notes;

        return $this;
    }

    /**
     * Gets cancel_status
     *
     * @return \OpenAPI\Client\Model\CancelStatus|null
     */
    public function getCancelStatus()
    {
        return $this->container['cancel_status'];
    }

    /**
     * Sets cancel_status
     *
     * @param \OpenAPI\Client\Model\CancelStatus|null $cancel_status cancel_status
     *
     * @return $this
     */
    public function setCancelStatus($cancel_status)
    {
        $this->container['cancel_status'] = $cancel_status;

        return $this;
    }

    /**
     * Gets creation_date
     *
     * @return string|null
     */
    public function getCreationDate()
    {
        return $this->container['creation_date'];
    }

    /**
     * Sets creation_date
     *
     * @param string|null $creation_date The date and time that the order was created. This timestamp is in ISO 8601 format, which uses the 24-hour Universal Coordinated Time (UTC) clock. Format: [YYYY]-[MM]-[DD]T[hh]:[mm]:[ss].[sss]Z Example: 2015-08-04T19:09:02.768Z
     *
     * @return $this
     */
    public function setCreationDate($creation_date)
    {
        $this->container['creation_date'] = $creation_date;

        return $this;
    }

    /**
     * Gets ebay_collect_and_remit_tax
     *
     * @return bool|null
     */
    public function getEbayCollectAndRemitTax()
    {
        return $this->container['ebay_collect_and_remit_tax'];
    }

    /**
     * Sets ebay_collect_and_remit_tax
     *
     * @param bool|null $ebay_collect_and_remit_tax This field is only returned if true, and indicates that eBay will collect tax (US state-mandates sales tax or 'goods and services' tax in Australia or New Zealand) for at least one line item in the order, and remit the tax to the taxing authority of the buyer's residence. If this field is returned, the seller should search for one or more ebayCollectAndRemitTaxes containers at the line item level to get more information about the type of tax and the amount.
     *
     * @return $this
     */
    public function setEbayCollectAndRemitTax($ebay_collect_and_remit_tax)
    {
        $this->container['ebay_collect_and_remit_tax'] = $ebay_collect_and_remit_tax;

        return $this;
    }

    /**
     * Gets fulfillment_hrefs
     *
     * @return string[]|null
     */
    public function getFulfillmentHrefs()
    {
        return $this->container['fulfillment_hrefs'];
    }

    /**
     * Sets fulfillment_hrefs
     *
     * @param string[]|null $fulfillment_hrefs This array contains a list of one or more getShippingFulfillment call URIs that can be used to retrieve shipping fulfillments that have been set up for the order.
     *
     * @return $this
     */
    public function setFulfillmentHrefs($fulfillment_hrefs)
    {
        $this->container['fulfillment_hrefs'] = $fulfillment_hrefs;

        return $this;
    }

    /**
     * Gets fulfillment_start_instructions
     *
     * @return \OpenAPI\Client\Model\FulfillmentStartInstruction[]|null
     */
    public function getFulfillmentStartInstructions()
    {
        return $this->container['fulfillment_start_instructions'];
    }

    /**
     * Sets fulfillment_start_instructions
     *
     * @param \OpenAPI\Client\Model\FulfillmentStartInstruction[]|null $fulfillment_start_instructions This container consists of a set of specifications for fulfilling the order, including the type of fulfillment, shipping carrier and service, shipping address, and estimated delivery window. These instructions are derived from the buyer's and seller's eBay account preferences, the listing parameters, and the buyer's checkout selections. The seller can use them as a starting point for packaging, addressing, and shipping the order. Note: Although this container is presented as an array, it currently returns only one set of fulfillment specifications. Additional array members will be supported in future functionality.
     *
     * @return $this
     */
    public function setFulfillmentStartInstructions($fulfillment_start_instructions)
    {
        $this->container['fulfillment_start_instructions'] = $fulfillment_start_instructions;

        return $this;
    }

    /**
     * Gets last_modified_date
     *
     * @return string|null
     */
    public function getLastModifiedDate()
    {
        return $this->container['last_modified_date'];
    }

    /**
     * Sets last_modified_date
     *
     * @param string|null $last_modified_date The date and time that the order was last modified. This timestamp is in ISO 8601 format, which uses the 24-hour Universal Coordinated Time (UTC) clock. Format: [YYYY]-[MM]-[DD]T[hh]:[mm]:[ss].[sss]Z Example: 2015-08-04T19:09:02.768Z
     *
     * @return $this
     */
    public function setLastModifiedDate($last_modified_date)
    {
        $this->container['last_modified_date'] = $last_modified_date;

        return $this;
    }

    /**
     * Gets legacy_order_id
     *
     * @return string|null
     */
    public function getLegacyOrderId()
    {
        return $this->container['legacy_order_id'];
    }

    /**
     * Sets legacy_order_id
     *
     * @param string|null $legacy_order_id The unique identifier of the order in legacy format, as traditionally used by the Trading API (and other legacy APIs). Both the orderId field and this field are always returned. Note: In June 2019, Order IDs in REST APIs transitioned to a new format. For the Trading and other legacy APIs, by using version control/compatibility level, users have the option of using the older legacy order ID format, or they can migrate to the new order ID format, which is the same order ID format being used by REST APIs. Although users of the Trading API (and other legacy APIs) can now transition to the new order ID format, this legacyOrderId field will still return order IDs in the old format to distinguish between the old and new order IDs.
     *
     * @return $this
     */
    public function setLegacyOrderId($legacy_order_id)
    {
        $this->container['legacy_order_id'] = $legacy_order_id;

        return $this;
    }

    /**
     * Gets line_items
     *
     * @return \OpenAPI\Client\Model\LineItem[]|null
     */
    public function getLineItems()
    {
        return $this->container['line_items'];
    }

    /**
     * Sets line_items
     *
     * @param \OpenAPI\Client\Model\LineItem[]|null $line_items This array contains the details for all line items that comprise the order.
     *
     * @return $this
     */
    public function setLineItems($line_items)
    {
        $this->container['line_items'] = $line_items;

        return $this;
    }

    /**
     * Gets order_fulfillment_status
     *
     * @return string|null
     */
    public function getOrderFulfillmentStatus()
    {
        return $this->container['order_fulfillment_status'];
    }

    /**
     * Sets order_fulfillment_status
     *
     * @param string|null $order_fulfillment_status The degree to which fulfillment of the order is complete. See the OrderFulfillmentStatus type definition for more information about each possible fulfillment state. For implementation help, refer to <a href='https://developer.ebay.com/devzone/rest/api-ref/fulfillment/types/OrderFulfillmentStatus.html'>eBay API documentation</a>
     *
     * @return $this
     */
    public function setOrderFulfillmentStatus($order_fulfillment_status)
    {
        $this->container['order_fulfillment_status'] = $order_fulfillment_status;

        return $this;
    }

    /**
     * Gets order_id
     *
     * @return string|null
     */
    public function getOrderId()
    {
        return $this->container['order_id'];
    }

    /**
     * Sets order_id
     *
     * @param string|null $order_id The unique identifier of the order. Both the legacyOrderId field (traditionally used by Trading and other legacy APIS) and this field are always returned. Note: In June 2019, Order IDs in REST APIs transitioned to a new format. For the Trading and other legacy APIs, by using version control/compatibility level, users have the option of using the older legacy order ID format, or they can migrate to the new order ID format, which is the same order ID format being used by REST APIs. The new format is a non-parsable string, globally unique across all eBay marketplaces, and consistent for both single line item and multiple line item orders. These order identifiers are automatically generated after buyer payment, and unlike in the past, instead of just being known and exposed to the seller, these unique order identifiers will also be known and used/referenced by the buyer and eBay customer support.
     *
     * @return $this
     */
    public function setOrderId($order_id)
    {
        $this->container['order_id'] = $order_id;

        return $this;
    }

    /**
     * Gets order_payment_status
     *
     * @return string|null
     */
    public function getOrderPaymentStatus()
    {
        return $this->container['order_payment_status'];
    }

    /**
     * Sets order_payment_status
     *
     * @param string|null $order_payment_status The enumeration value returned in this field indicates the current payment status of an order, or in case of a refund request, the current status of the refund. See the OrderPaymentStatusEnum type definition for more information about each possible payment/refund state. For implementation help, refer to <a href='https://developer.ebay.com/devzone/rest/api-ref/fulfillment/types/OrderPaymentStatusEnum.html'>eBay API documentation</a>
     *
     * @return $this
     */
    public function setOrderPaymentStatus($order_payment_status)
    {
        $this->container['order_payment_status'] = $order_payment_status;

        return $this;
    }

    /**
     * Gets payment_summary
     *
     * @return \OpenAPI\Client\Model\PaymentSummary|null
     */
    public function getPaymentSummary()
    {
        return $this->container['payment_summary'];
    }

    /**
     * Sets payment_summary
     *
     * @param \OpenAPI\Client\Model\PaymentSummary|null $payment_summary payment_summary
     *
     * @return $this
     */
    public function setPaymentSummary($payment_summary)
    {
        $this->container['payment_summary'] = $payment_summary;

        return $this;
    }

    /**
     * Gets pricing_summary
     *
     * @return \OpenAPI\Client\Model\PricingSummary|null
     */
    public function getPricingSummary()
    {
        return $this->container['pricing_summary'];
    }

    /**
     * Sets pricing_summary
     *
     * @param \OpenAPI\Client\Model\PricingSummary|null $pricing_summary pricing_summary
     *
     * @return $this
     */
    public function setPricingSummary($pricing_summary)
    {
        $this->container['pricing_summary'] = $pricing_summary;

        return $this;
    }

    /**
     * Gets sales_record_reference
     *
     * @return string|null
     */
    public function getSalesRecordReference()
    {
        return $this->container['sales_record_reference'];
    }

    /**
     * Sets sales_record_reference
     *
     * @param string|null $sales_record_reference An eBay-generated identifier that is used to identify and manage orders through the Selling Manager and Selling Manager Pro tools. This order identifier can also be found on the Orders grid page and in the Sales Record pages in Seller Hub. A salesRecordReference number is only generated and returned at the order level, and not at the order line item level. In cases where the seller does not have a Selling Manager or Selling Manager Pro subscription nor access to Seller Hub, this field may not be returned.
     *
     * @return $this
     */
    public function setSalesRecordReference($sales_record_reference)
    {
        $this->container['sales_record_reference'] = $sales_record_reference;

        return $this;
    }

    /**
     * Gets seller_id
     *
     * @return string|null
     */
    public function getSellerId()
    {
        return $this->container['seller_id'];
    }

    /**
     * Sets seller_id
     *
     * @param string|null $seller_id The unique eBay user ID of the seller who sold the order.
     *
     * @return $this
     */
    public function setSellerId($seller_id)
    {
        $this->container['seller_id'] = $seller_id;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


