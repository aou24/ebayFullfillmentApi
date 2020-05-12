<?php
/**
 * LineItem
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
 * LineItem Class Doc Comment
 *
 * @category Class
 * @description This type contains the details of each line item in an order.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class LineItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'LineItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'applied_promotions' => '\OpenAPI\Client\Model\AppliedPromotion[]',
        'delivery_cost' => '\OpenAPI\Client\Model\DeliveryCost',
        'discounted_line_item_cost' => '\OpenAPI\Client\Model\Amount',
        'ebay_collect_and_remit_taxes' => '\OpenAPI\Client\Model\EbayCollectAndRemitTax[]',
        'gift_details' => '\OpenAPI\Client\Model\GiftDetails',
        'legacy_item_id' => 'string',
        'legacy_variation_id' => 'string',
        'line_item_cost' => '\OpenAPI\Client\Model\Amount',
        'line_item_fulfillment_instructions' => '\OpenAPI\Client\Model\LineItemFulfillmentInstructions',
        'line_item_fulfillment_status' => 'string',
        'line_item_id' => 'string',
        'listing_marketplace_id' => 'string',
        'properties' => '\OpenAPI\Client\Model\LineItemProperties',
        'purchase_marketplace_id' => 'string',
        'quantity' => 'int',
        'refunds' => '\OpenAPI\Client\Model\LineItemRefund[]',
        'sku' => 'string',
        'sold_format' => 'string',
        'taxes' => '\OpenAPI\Client\Model\Tax[]',
        'title' => 'string',
        'total' => '\OpenAPI\Client\Model\Amount'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'applied_promotions' => null,
        'delivery_cost' => null,
        'discounted_line_item_cost' => null,
        'ebay_collect_and_remit_taxes' => null,
        'gift_details' => null,
        'legacy_item_id' => null,
        'legacy_variation_id' => null,
        'line_item_cost' => null,
        'line_item_fulfillment_instructions' => null,
        'line_item_fulfillment_status' => null,
        'line_item_id' => null,
        'listing_marketplace_id' => null,
        'properties' => null,
        'purchase_marketplace_id' => null,
        'quantity' => 'int32',
        'refunds' => null,
        'sku' => null,
        'sold_format' => null,
        'taxes' => null,
        'title' => null,
        'total' => null
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
        'applied_promotions' => 'appliedPromotions',
        'delivery_cost' => 'deliveryCost',
        'discounted_line_item_cost' => 'discountedLineItemCost',
        'ebay_collect_and_remit_taxes' => 'ebayCollectAndRemitTaxes',
        'gift_details' => 'giftDetails',
        'legacy_item_id' => 'legacyItemId',
        'legacy_variation_id' => 'legacyVariationId',
        'line_item_cost' => 'lineItemCost',
        'line_item_fulfillment_instructions' => 'lineItemFulfillmentInstructions',
        'line_item_fulfillment_status' => 'lineItemFulfillmentStatus',
        'line_item_id' => 'lineItemId',
        'listing_marketplace_id' => 'listingMarketplaceId',
        'properties' => 'properties',
        'purchase_marketplace_id' => 'purchaseMarketplaceId',
        'quantity' => 'quantity',
        'refunds' => 'refunds',
        'sku' => 'sku',
        'sold_format' => 'soldFormat',
        'taxes' => 'taxes',
        'title' => 'title',
        'total' => 'total'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'applied_promotions' => 'setAppliedPromotions',
        'delivery_cost' => 'setDeliveryCost',
        'discounted_line_item_cost' => 'setDiscountedLineItemCost',
        'ebay_collect_and_remit_taxes' => 'setEbayCollectAndRemitTaxes',
        'gift_details' => 'setGiftDetails',
        'legacy_item_id' => 'setLegacyItemId',
        'legacy_variation_id' => 'setLegacyVariationId',
        'line_item_cost' => 'setLineItemCost',
        'line_item_fulfillment_instructions' => 'setLineItemFulfillmentInstructions',
        'line_item_fulfillment_status' => 'setLineItemFulfillmentStatus',
        'line_item_id' => 'setLineItemId',
        'listing_marketplace_id' => 'setListingMarketplaceId',
        'properties' => 'setProperties',
        'purchase_marketplace_id' => 'setPurchaseMarketplaceId',
        'quantity' => 'setQuantity',
        'refunds' => 'setRefunds',
        'sku' => 'setSku',
        'sold_format' => 'setSoldFormat',
        'taxes' => 'setTaxes',
        'title' => 'setTitle',
        'total' => 'setTotal'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'applied_promotions' => 'getAppliedPromotions',
        'delivery_cost' => 'getDeliveryCost',
        'discounted_line_item_cost' => 'getDiscountedLineItemCost',
        'ebay_collect_and_remit_taxes' => 'getEbayCollectAndRemitTaxes',
        'gift_details' => 'getGiftDetails',
        'legacy_item_id' => 'getLegacyItemId',
        'legacy_variation_id' => 'getLegacyVariationId',
        'line_item_cost' => 'getLineItemCost',
        'line_item_fulfillment_instructions' => 'getLineItemFulfillmentInstructions',
        'line_item_fulfillment_status' => 'getLineItemFulfillmentStatus',
        'line_item_id' => 'getLineItemId',
        'listing_marketplace_id' => 'getListingMarketplaceId',
        'properties' => 'getProperties',
        'purchase_marketplace_id' => 'getPurchaseMarketplaceId',
        'quantity' => 'getQuantity',
        'refunds' => 'getRefunds',
        'sku' => 'getSku',
        'sold_format' => 'getSoldFormat',
        'taxes' => 'getTaxes',
        'title' => 'getTitle',
        'total' => 'getTotal'
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
        $this->container['applied_promotions'] = isset($data['applied_promotions']) ? $data['applied_promotions'] : null;
        $this->container['delivery_cost'] = isset($data['delivery_cost']) ? $data['delivery_cost'] : null;
        $this->container['discounted_line_item_cost'] = isset($data['discounted_line_item_cost']) ? $data['discounted_line_item_cost'] : null;
        $this->container['ebay_collect_and_remit_taxes'] = isset($data['ebay_collect_and_remit_taxes']) ? $data['ebay_collect_and_remit_taxes'] : null;
        $this->container['gift_details'] = isset($data['gift_details']) ? $data['gift_details'] : null;
        $this->container['legacy_item_id'] = isset($data['legacy_item_id']) ? $data['legacy_item_id'] : null;
        $this->container['legacy_variation_id'] = isset($data['legacy_variation_id']) ? $data['legacy_variation_id'] : null;
        $this->container['line_item_cost'] = isset($data['line_item_cost']) ? $data['line_item_cost'] : null;
        $this->container['line_item_fulfillment_instructions'] = isset($data['line_item_fulfillment_instructions']) ? $data['line_item_fulfillment_instructions'] : null;
        $this->container['line_item_fulfillment_status'] = isset($data['line_item_fulfillment_status']) ? $data['line_item_fulfillment_status'] : null;
        $this->container['line_item_id'] = isset($data['line_item_id']) ? $data['line_item_id'] : null;
        $this->container['listing_marketplace_id'] = isset($data['listing_marketplace_id']) ? $data['listing_marketplace_id'] : null;
        $this->container['properties'] = isset($data['properties']) ? $data['properties'] : null;
        $this->container['purchase_marketplace_id'] = isset($data['purchase_marketplace_id']) ? $data['purchase_marketplace_id'] : null;
        $this->container['quantity'] = isset($data['quantity']) ? $data['quantity'] : null;
        $this->container['refunds'] = isset($data['refunds']) ? $data['refunds'] : null;
        $this->container['sku'] = isset($data['sku']) ? $data['sku'] : null;
        $this->container['sold_format'] = isset($data['sold_format']) ? $data['sold_format'] : null;
        $this->container['taxes'] = isset($data['taxes']) ? $data['taxes'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['total'] = isset($data['total']) ? $data['total'] : null;
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
     * Gets applied_promotions
     *
     * @return \OpenAPI\Client\Model\AppliedPromotion[]|null
     */
    public function getAppliedPromotions()
    {
        return $this->container['applied_promotions'];
    }

    /**
     * Sets applied_promotions
     *
     * @param \OpenAPI\Client\Model\AppliedPromotion[]|null $applied_promotions This array contains information about one or more sales promotions or discounts applied to the line item. It is always returned, but will be returned as an empty array if no special sales promotions or discounts apply to the order line item.
     *
     * @return $this
     */
    public function setAppliedPromotions($applied_promotions)
    {
        $this->container['applied_promotions'] = $applied_promotions;

        return $this;
    }

    /**
     * Gets delivery_cost
     *
     * @return \OpenAPI\Client\Model\DeliveryCost|null
     */
    public function getDeliveryCost()
    {
        return $this->container['delivery_cost'];
    }

    /**
     * Sets delivery_cost
     *
     * @param \OpenAPI\Client\Model\DeliveryCost|null $delivery_cost delivery_cost
     *
     * @return $this
     */
    public function setDeliveryCost($delivery_cost)
    {
        $this->container['delivery_cost'] = $delivery_cost;

        return $this;
    }

    /**
     * Gets discounted_line_item_cost
     *
     * @return \OpenAPI\Client\Model\Amount|null
     */
    public function getDiscountedLineItemCost()
    {
        return $this->container['discounted_line_item_cost'];
    }

    /**
     * Sets discounted_line_item_cost
     *
     * @param \OpenAPI\Client\Model\Amount|null $discounted_line_item_cost discounted_line_item_cost
     *
     * @return $this
     */
    public function setDiscountedLineItemCost($discounted_line_item_cost)
    {
        $this->container['discounted_line_item_cost'] = $discounted_line_item_cost;

        return $this;
    }

    /**
     * Gets ebay_collect_and_remit_taxes
     *
     * @return \OpenAPI\Client\Model\EbayCollectAndRemitTax[]|null
     */
    public function getEbayCollectAndRemitTaxes()
    {
        return $this->container['ebay_collect_and_remit_taxes'];
    }

    /**
     * Sets ebay_collect_and_remit_taxes
     *
     * @param \OpenAPI\Client\Model\EbayCollectAndRemitTax[]|null $ebay_collect_and_remit_taxes This container will be returned if the order line item is subject to a 'Collect and Remit' tax that eBay will collect and remit to the proper taxing authority on the buyer's behalf. 'Collect and Remit' tax includes US state-mandated sales tax and 'Goods and Services' tax (collected in Australia and New Zealand). The amount of this tax is shown in the amount field, and the type of tax is shown in the taxType field. eBay will display the tax type and amount during checkout in accordance with the buyer's address, and handle collection and remittance of the tax without requiring the seller to take any action.
     *
     * @return $this
     */
    public function setEbayCollectAndRemitTaxes($ebay_collect_and_remit_taxes)
    {
        $this->container['ebay_collect_and_remit_taxes'] = $ebay_collect_and_remit_taxes;

        return $this;
    }

    /**
     * Gets gift_details
     *
     * @return \OpenAPI\Client\Model\GiftDetails|null
     */
    public function getGiftDetails()
    {
        return $this->container['gift_details'];
    }

    /**
     * Sets gift_details
     *
     * @param \OpenAPI\Client\Model\GiftDetails|null $gift_details gift_details
     *
     * @return $this
     */
    public function setGiftDetails($gift_details)
    {
        $this->container['gift_details'] = $gift_details;

        return $this;
    }

    /**
     * Gets legacy_item_id
     *
     * @return string|null
     */
    public function getLegacyItemId()
    {
        return $this->container['legacy_item_id'];
    }

    /**
     * Sets legacy_item_id
     *
     * @param string|null $legacy_item_id The eBay-generated legacy listing item ID of the listing. Note that the unique identifier of a listing in REST-based APIs is called the listingId instead.
     *
     * @return $this
     */
    public function setLegacyItemId($legacy_item_id)
    {
        $this->container['legacy_item_id'] = $legacy_item_id;

        return $this;
    }

    /**
     * Gets legacy_variation_id
     *
     * @return string|null
     */
    public function getLegacyVariationId()
    {
        return $this->container['legacy_variation_id'];
    }

    /**
     * Sets legacy_variation_id
     *
     * @param string|null $legacy_variation_id The unique identifier of a single variation within a multiple-variation listing. This field is only returned if the line item purchased was from a multiple-variation listing.
     *
     * @return $this
     */
    public function setLegacyVariationId($legacy_variation_id)
    {
        $this->container['legacy_variation_id'] = $legacy_variation_id;

        return $this;
    }

    /**
     * Gets line_item_cost
     *
     * @return \OpenAPI\Client\Model\Amount|null
     */
    public function getLineItemCost()
    {
        return $this->container['line_item_cost'];
    }

    /**
     * Sets line_item_cost
     *
     * @param \OpenAPI\Client\Model\Amount|null $line_item_cost line_item_cost
     *
     * @return $this
     */
    public function setLineItemCost($line_item_cost)
    {
        $this->container['line_item_cost'] = $line_item_cost;

        return $this;
    }

    /**
     * Gets line_item_fulfillment_instructions
     *
     * @return \OpenAPI\Client\Model\LineItemFulfillmentInstructions|null
     */
    public function getLineItemFulfillmentInstructions()
    {
        return $this->container['line_item_fulfillment_instructions'];
    }

    /**
     * Sets line_item_fulfillment_instructions
     *
     * @param \OpenAPI\Client\Model\LineItemFulfillmentInstructions|null $line_item_fulfillment_instructions line_item_fulfillment_instructions
     *
     * @return $this
     */
    public function setLineItemFulfillmentInstructions($line_item_fulfillment_instructions)
    {
        $this->container['line_item_fulfillment_instructions'] = $line_item_fulfillment_instructions;

        return $this;
    }

    /**
     * Gets line_item_fulfillment_status
     *
     * @return string|null
     */
    public function getLineItemFulfillmentStatus()
    {
        return $this->container['line_item_fulfillment_status'];
    }

    /**
     * Sets line_item_fulfillment_status
     *
     * @param string|null $line_item_fulfillment_status This enumeration value indicates the current fulfillment status of the line item. For implementation help, refer to <a href='https://developer.ebay.com/devzone/rest/api-ref/fulfillment/types/LineItemFulfillmentStatusEnum.html'>eBay API documentation</a>
     *
     * @return $this
     */
    public function setLineItemFulfillmentStatus($line_item_fulfillment_status)
    {
        $this->container['line_item_fulfillment_status'] = $line_item_fulfillment_status;

        return $this;
    }

    /**
     * Gets line_item_id
     *
     * @return string|null
     */
    public function getLineItemId()
    {
        return $this->container['line_item_id'];
    }

    /**
     * Sets line_item_id
     *
     * @param string|null $line_item_id This is the unique identifier of an eBay order line item. This field is created as soon as there is a commitment to buy from the seller.
     *
     * @return $this
     */
    public function setLineItemId($line_item_id)
    {
        $this->container['line_item_id'] = $line_item_id;

        return $this;
    }

    /**
     * Gets listing_marketplace_id
     *
     * @return string|null
     */
    public function getListingMarketplaceId()
    {
        return $this->container['listing_marketplace_id'];
    }

    /**
     * Sets listing_marketplace_id
     *
     * @param string|null $listing_marketplace_id The unique identifier of the eBay marketplace where the line item was listed. For implementation help, refer to <a href='https://developer.ebay.com/devzone/rest/api-ref/fulfillment/types/MarketplaceIdEnum.html'>eBay API documentation</a>
     *
     * @return $this
     */
    public function setListingMarketplaceId($listing_marketplace_id)
    {
        $this->container['listing_marketplace_id'] = $listing_marketplace_id;

        return $this;
    }

    /**
     * Gets properties
     *
     * @return \OpenAPI\Client\Model\LineItemProperties|null
     */
    public function getProperties()
    {
        return $this->container['properties'];
    }

    /**
     * Sets properties
     *
     * @param \OpenAPI\Client\Model\LineItemProperties|null $properties properties
     *
     * @return $this
     */
    public function setProperties($properties)
    {
        $this->container['properties'] = $properties;

        return $this;
    }

    /**
     * Gets purchase_marketplace_id
     *
     * @return string|null
     */
    public function getPurchaseMarketplaceId()
    {
        return $this->container['purchase_marketplace_id'];
    }

    /**
     * Sets purchase_marketplace_id
     *
     * @param string|null $purchase_marketplace_id The unique identifier of the eBay marketplace where the line item was listed. Often, the listingMarketplaceId and the purchaseMarketplaceId identifier are the same, but there are occasions when an item will surface on multiple eBay marketplaces. For implementation help, refer to <a href='https://developer.ebay.com/devzone/rest/api-ref/fulfillment/types/MarketplaceIdEnum.html'>eBay API documentation</a>
     *
     * @return $this
     */
    public function setPurchaseMarketplaceId($purchase_marketplace_id)
    {
        $this->container['purchase_marketplace_id'] = $purchase_marketplace_id;

        return $this;
    }

    /**
     * Gets quantity
     *
     * @return int|null
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     *
     * @param int|null $quantity The number of units of the line item in the order. These are represented as a group by a single lineItemId.
     *
     * @return $this
     */
    public function setQuantity($quantity)
    {
        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets refunds
     *
     * @return \OpenAPI\Client\Model\LineItemRefund[]|null
     */
    public function getRefunds()
    {
        return $this->container['refunds'];
    }

    /**
     * Sets refunds
     *
     * @param \OpenAPI\Client\Model\LineItemRefund[]|null $refunds This array is always returned, but is returned as an empty array unless the seller has submitted a partial or full refund to the buyer for the order. If a refund has occurred, the refund amount and refund date will be shown for each refund.
     *
     * @return $this
     */
    public function setRefunds($refunds)
    {
        $this->container['refunds'] = $refunds;

        return $this;
    }

    /**
     * Gets sku
     *
     * @return string|null
     */
    public function getSku()
    {
        return $this->container['sku'];
    }

    /**
     * Sets sku
     *
     * @param string|null $sku Seller-defined Stock-Keeping Unit (SKU). This inventory identifier must be unique within the seller's eBay inventory. SKUs are optional when listing in the legacy/Trading API system, but SKUs are required when listing items through the Inventory API model.
     *
     * @return $this
     */
    public function setSku($sku)
    {
        $this->container['sku'] = $sku;

        return $this;
    }

    /**
     * Gets sold_format
     *
     * @return string|null
     */
    public function getSoldFormat()
    {
        return $this->container['sold_format'];
    }

    /**
     * Sets sold_format
     *
     * @param string|null $sold_format The eBay listing type of the line item. The most common listing types are AUCTION and FIXED_PRICE. For implementation help, refer to <a href='https://developer.ebay.com/devzone/rest/api-ref/fulfillment/types/SoldFormatEnum.html'>eBay API documentation</a>
     *
     * @return $this
     */
    public function setSoldFormat($sold_format)
    {
        $this->container['sold_format'] = $sold_format;

        return $this;
    }

    /**
     * Gets taxes
     *
     * @return \OpenAPI\Client\Model\Tax[]|null
     */
    public function getTaxes()
    {
        return $this->container['taxes'];
    }

    /**
     * Sets taxes
     *
     * @param \OpenAPI\Client\Model\Tax[]|null $taxes Contains a list of taxes applied to the line item, if any. This array is always returned, but will be returned as empty if no taxes are applicable to the line item, or if the seller is opted in to eBay managed payments.
     *
     * @return $this
     */
    public function setTaxes($taxes)
    {
        $this->container['taxes'] = $taxes;

        return $this;
    }

    /**
     * Gets title
     *
     * @return string|null
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string|null $title The title of the listing.
     *
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets total
     *
     * @return \OpenAPI\Client\Model\Amount|null
     */
    public function getTotal()
    {
        return $this->container['total'];
    }

    /**
     * Sets total
     *
     * @param \OpenAPI\Client\Model\Amount|null $total total
     *
     * @return $this
     */
    public function setTotal($total)
    {
        $this->container['total'] = $total;

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


