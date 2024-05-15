<?php
/**
 * ListingPoliciesTest
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Inventory API
 *
 * The Inventory API is used to create and manage inventory, and then to publish and manage this inventory on an eBay marketplace. There are also methods in this API that will convert eligible, active eBay listings into the Inventory API model.
 *
 * The version of the OpenAPI document: 1.17.4
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.5.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Please update the test case below to test the model.
 */

namespace OpenAPI\Client\Test\Model;

use PHPUnit\Framework\TestCase;

/**
 * ListingPoliciesTest Class Doc Comment
 *
 * @category    Class
 * @description This type is used to identify business policies including payment, return, and fulfillment policies, as well as to identify custom policies. These policies are, or will be, associated with the listing. Every published offer must have a payment, return, and fulfillment business policy associated with it. Additionally, depending on the country/countries in which sellers are offering products and/or services to consumers (e.g., residents of the European Union,) specifying additional polices may be required.&lt;br&gt;&lt;br&gt;This type is also used to override the shipping costs of one or more shipping service options that are associated with the fulfillment policy, to enable eBay Plus eligibility for a listing, or to enable the Best Offer feature on the listing.
 * @package     OpenAPI\Client
 * @author      OpenAPI Generator team
 * @link        https://openapi-generator.tech
 */
class ListingPoliciesTest extends TestCase
{

    /**
     * Setup before running any test case
     */
    public static function setUpBeforeClass(): void
    {
    }

    /**
     * Setup before running each test case
     */
    public function setUp(): void
    {
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown(): void
    {
    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass(): void
    {
    }

    /**
     * Test "ListingPolicies"
     */
    public function testListingPolicies()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "best_offer_terms"
     */
    public function testPropertyBestOfferTerms()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "e_bay_plus_if_eligible"
     */
    public function testPropertyEBayPlusIfEligible()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "fulfillment_policy_id"
     */
    public function testPropertyFulfillmentPolicyId()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "payment_policy_id"
     */
    public function testPropertyPaymentPolicyId()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "product_compliance_policy_ids"
     */
    public function testPropertyProductCompliancePolicyIds()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "regional_product_compliance_policies"
     */
    public function testPropertyRegionalProductCompliancePolicies()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "regional_take_back_policies"
     */
    public function testPropertyRegionalTakeBackPolicies()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "return_policy_id"
     */
    public function testPropertyReturnPolicyId()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "shipping_cost_overrides"
     */
    public function testPropertyShippingCostOverrides()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "take_back_policy_id"
     */
    public function testPropertyTakeBackPolicyId()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }
}
