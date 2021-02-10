<?php

namespace Paysera\DeliveryApi\MerchantClient;

use Paysera\DeliveryApi\MerchantClient\Entity as Entities;
use Fig\Http\Message\RequestMethodInterface;
use Paysera\Component\RestClientCommon\Entity\Entity;
use Paysera\Component\RestClientCommon\Client\ApiClient;
use Paysera\Component\RestClientCommon\Entity\Filter;

class MerchantClient
{
    private $apiClient;

    public function __construct(ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
    }

    public function withOptions(array $options)
    {
        return new MerchantClient($this->apiClient->withOptions($options));
    }

    /**
     * Get package limit by id
     * GET /packages/{id}
     *
     * @param string $id
     * @return Entities\PackageLimit
     */
    public function getPackage($id)
    {
        $request = $this->apiClient->createRequest(
            RequestMethodInterface::METHOD_GET,
            sprintf('packages/%s', rawurlencode($id)),
            null
        );
        $data = $this->apiClient->makeRequest($request);

        return new Entities\PackageLimit($data);
    }

    /**
     * Standard SQL-style Result filtering
     * GET /packages
     *
     * @return Entities\PackageLimitCollection
     */
    public function getPackages()
    {
        $request = $this->apiClient->createRequest(
            RequestMethodInterface::METHOD_GET,
            'packages',
            null
        );
        $data = $this->apiClient->makeRequest($request);

        return new Entities\PackageLimitCollection($data);
    }

    /**
     * Standard SQL-style Result filtering
     * GET /packages-suggested
     *
     * @param Entities\SuggestedPackageLimitFilter $suggestedPackageLimitFilter
     * @return Entities\SuggestedPackageLimitCollection
     */
    public function getPackagesSuggested(Entities\SuggestedPackageLimitFilter $suggestedPackageLimitFilter)
    {
        $request = $this->apiClient->createRequest(
            RequestMethodInterface::METHOD_GET,
            'packages-suggested',
            $suggestedPackageLimitFilter
        );
        $data = $this->apiClient->makeRequest($request);

        return new Entities\SuggestedPackageLimitCollection($data);
    }

    /**
     * Get shipment method by id
     * GET /methods/{id}
     *
     * @param string $id
     * @return Entities\ShipmentMethod
     */
    public function getMethod($id)
    {
        $request = $this->apiClient->createRequest(
            RequestMethodInterface::METHOD_GET,
            sprintf('methods/%s', rawurlencode($id)),
            null
        );
        $data = $this->apiClient->makeRequest($request);

        return new Entities\ShipmentMethod($data);
    }

    /**
     * Get shipment methods
     * PUT /methods
     *
     * @param Entities\MethodsFilter $methodsFilter
     * @return Entities\ShipmentMethodCollection
     */
    public function updateMethod(Entities\MethodsFilter $methodsFilter)
    {
        $request = $this->apiClient->createRequest(
            RequestMethodInterface::METHOD_PUT,
            'methods',
            $methodsFilter
        );
        $data = $this->apiClient->makeRequest($request);

        return new Entities\ShipmentMethodCollection($data);
    }

    /**
     * Get shipment gateway by id
     * GET /gateways/{id}
     *
     * @param string $id
     * @return Entities\ShipmentGateway
     */
    public function getGateway($id)
    {
        $request = $this->apiClient->createRequest(
            RequestMethodInterface::METHOD_GET,
            sprintf('gateways/%s', rawurlencode($id)),
            null
        );
        $data = $this->apiClient->makeRequest($request);

        return new Entities\ShipmentGateway($data);
    }

    /**
     * Get shipment gateways
     * PUT /gateways
     *
     * @param Entities\GatewaysFilter $gatewaysFilter
     * @return Entities\ShipmentGatewayCollection
     */
    public function updateGateway(Entities\GatewaysFilter $gatewaysFilter)
    {
        $request = $this->apiClient->createRequest(
            RequestMethodInterface::METHOD_PUT,
            'gateways',
            $gatewaysFilter
        );
        $data = $this->apiClient->makeRequest($request);

        return new Entities\ShipmentGatewayCollection($data);
    }

    /**
     * Standard SQL-style Result filtering
     * GET /post-offices
     *
     * @param Entities\PostOfficeFilter $postOfficeFilter
     * @return Entities\PostOfficeCollection
     */
    public function getPostOffices(Entities\PostOfficeFilter $postOfficeFilter)
    {
        $request = $this->apiClient->createRequest(
            RequestMethodInterface::METHOD_GET,
            'post-offices',
            $postOfficeFilter
        );
        $data = $this->apiClient->makeRequest($request);

        return new Entities\PostOfficeCollection($data);
    }

    /**
     * Standard SQL-style Result filtering
     * GET /parcel-machines
     *
     * @param Entities\ParcelMachineFilter $parcelMachineFilter
     * @return Entities\ParcelMachineCollection
     */
    public function getParcelMachines(Entities\ParcelMachineFilter $parcelMachineFilter)
    {
        $request = $this->apiClient->createRequest(
            RequestMethodInterface::METHOD_GET,
            'parcel-machines',
            $parcelMachineFilter
        );
        $data = $this->apiClient->makeRequest($request);

        return new Entities\ParcelMachineCollection($data);
    }

    /**
     * Import shipment points from file
     * POST /shipment-points-import
     *
     * @param Entities\Paysera.File $file
     * @return Entities\ShipmentPointCollection
     */
    public function createShipmentPointsImport(Entities\Paysera.File $file)
    {
        $request = $this->apiClient->createRequest(
            RequestMethodInterface::METHOD_POST,
            'shipment-points-import',
            $file
        );
        $data = $this->apiClient->makeRequest($request);

        return new Entities\ShipmentPointCollection($data);
    }

    /**
     * Get shipment point by id
     * GET /shipment-points/{id}
     *
     * @param string $id
     * @return Entities\ShipmentPoint
     */
    public function getShipmentPoint($id)
    {
        $request = $this->apiClient->createRequest(
            RequestMethodInterface::METHOD_GET,
            sprintf('shipment-points/%s', rawurlencode($id)),
            null
        );
        $data = $this->apiClient->makeRequest($request);

        return new Entities\ShipmentPoint($data);
    }

    /**
     * Update shipment-point
     * PUT /shipment-points/{id}
     *
     * @param string $id
     * @param Entities\ShipmentPointCreate $shipmentPointCreate
     * @return Entities\ShipmentPoint
     */
    public function updateShipmentPoint($id, Entities\ShipmentPointCreate $shipmentPointCreate)
    {
        $request = $this->apiClient->createRequest(
            RequestMethodInterface::METHOD_PUT,
            sprintf('shipment-points/%s', rawurlencode($id)),
            $shipmentPointCreate
        );
        $data = $this->apiClient->makeRequest($request);

        return new Entities\ShipmentPoint($data);
    }

    /**
     * Delete shipment point
     * DELETE /shipment-points/{id}
     *
     * @param string $id
     * @return null
     */
    public function deleteShipmentPoint($id)
    {
        $request = $this->apiClient->createRequest(
            RequestMethodInterface::METHOD_DELETE,
            sprintf('shipment-points/%s', rawurlencode($id)),
            null
        );
        $data = $this->apiClient->makeRequest($request);

        return null;
    }

    /**
     * Add a new shipment point
     * POST /shipment-points
     *
     * @param Entities\ShipmentPointCreate $shipmentPointCreate
     * @return Entities\ShipmentPoint
     */
    public function createShipmentPoint(Entities\ShipmentPointCreate $shipmentPointCreate)
    {
        $request = $this->apiClient->createRequest(
            RequestMethodInterface::METHOD_POST,
            'shipment-points',
            $shipmentPointCreate
        );
        $data = $this->apiClient->makeRequest($request);

        return new Entities\ShipmentPoint($data);
    }

    /**
     * Standard SQL-style Result filtering
     * GET /shipment-points
     *
     * @param Entities\ShipmentPointFilter $shipmentPointFilter
     * @return Entities\ShipmentPointCollection
     */
    public function getShipmentPoints(Entities\ShipmentPointFilter $shipmentPointFilter)
    {
        $request = $this->apiClient->createRequest(
            RequestMethodInterface::METHOD_GET,
            'shipment-points',
            $shipmentPointFilter
        );
        $data = $this->apiClient->makeRequest($request);

        return new Entities\ShipmentPointCollection($data);
    }

    /**
     * Import orders from file
     * POST /orders-import
     *
     * @param Entities\Paysera.File $file
     * @return Entities\OrderCollection
     */
    public function createOrdersImport(Entities\Paysera.File $file)
    {
        $request = $this->apiClient->createRequest(
            RequestMethodInterface::METHOD_POST,
            'orders-import',
            $file
        );
        $data = $this->apiClient->makeRequest($request);

        return new Entities\OrderCollection($data);
    }

    /**
     * Update project shipment gateway
     * PUT /projects/{projectId}/gateways/{gatewayId}
     *
     * @param string $projectId
     * @param string $gatewayId
     * @param Entities\ShipmentGatewayCreate $shipmentGatewayCreate
     * @return Entities\ShipmentGateway
     */
    public function updateProjectGateway($projectId, $gatewayId, Entities\ShipmentGatewayCreate $shipmentGatewayCreate)
    {
        $request = $this->apiClient->createRequest(
            RequestMethodInterface::METHOD_PUT,
            sprintf('projects/%s/gateways/%s', rawurlencode($projectId), rawurlencode($gatewayId)),
            $shipmentGatewayCreate
        );
        $data = $this->apiClient->makeRequest($request);

        return new Entities\ShipmentGateway($data);
    }

    /**
     * Standard SQL-style Result filtering
     * GET /projects/{projectId}/gateways
     *
     * @param string $projectId
     * @param Filter $filter
     * @return Entities\ShipmentGatewayCollection
     */
    public function getProjectGateways($projectId, Filter $filter)
    {
        $request = $this->apiClient->createRequest(
            RequestMethodInterface::METHOD_GET,
            sprintf('projects/%s/gateways', rawurlencode($projectId)),
            $filter
        );
        $data = $this->apiClient->makeRequest($request);

        return new Entities\ShipmentGatewayCollection($data);
    }

    /**
     * Update project shipment method
     * PUT /projects/{projectId}/methods/{methodId}
     *
     * @param string $projectId
     * @param string $methodId
     * @param Entities\ShipmentMethodCreate $shipmentMethodCreate
     * @return Entities\ShipmentMethod
     */
    public function updateProjectMethod($projectId, $methodId, Entities\ShipmentMethodCreate $shipmentMethodCreate)
    {
        $request = $this->apiClient->createRequest(
            RequestMethodInterface::METHOD_PUT,
            sprintf('projects/%s/methods/%s', rawurlencode($projectId), rawurlencode($methodId)),
            $shipmentMethodCreate
        );
        $data = $this->apiClient->makeRequest($request);

        return new Entities\ShipmentMethod($data);
    }

    /**
     * Standard SQL-style Result filtering
     * GET /projects/{projectId}/methods
     *
     * @param string $projectId
     * @param Filter $filter
     * @return Entities\ShipmentMethodCollection
     */
    public function getProjectMethods($projectId, Filter $filter)
    {
        $request = $this->apiClient->createRequest(
            RequestMethodInterface::METHOD_GET,
            sprintf('projects/%s/methods', rawurlencode($projectId)),
            $filter
        );
        $data = $this->apiClient->makeRequest($request);

        return new Entities\ShipmentMethodCollection($data);
    }

    /**
     * Standard SQL-style Result filtering
     * GET /projects
     *
     * @param Filter $filter
     * @return Entities\ProjectCollection
     */
    public function getProjects(Filter $filter)
    {
        $request = $this->apiClient->createRequest(
            RequestMethodInterface::METHOD_GET,
            'projects',
            $filter
        );
        $data = $this->apiClient->makeRequest($request);

        return new Entities\ProjectCollection($data);
    }

    /**
     * Standard SQL-style Result filtering
     * GET /orders-export
     *
     * @param Entities\OrderFilter $orderFilter
     * @return Entities\Paysera.File
     */
    public function getOrdersExport(Entities\OrderFilter $orderFilter)
    {
        $request = $this->apiClient->createRequest(
            RequestMethodInterface::METHOD_GET,
            'orders-export',
            $orderFilter
        );
        $data = $this->apiClient->makeRequest($request);

        return new Entities\Paysera.File($data);
    }

    /**
     * Confirm orders
     * POST /orders-confirm
     *
     * @param Entities\OrderIdsList $orderIdsList
     * @return Entities\OrderCollection
     */
    public function createOrdersConfirm(Entities\OrderIdsList $orderIdsList)
    {
        $request = $this->apiClient->createRequest(
            RequestMethodInterface::METHOD_POST,
            'orders-confirm',
            $orderIdsList
        );
        $data = $this->apiClient->makeRequest($request);

        return new Entities\OrderCollection($data);
    }

    /**
     * Get manifest file
     * GET /orders/{id}/manifest
     *
     * @param string $id
     * @return Entities\Paysera.File
     */
    public function getOrderManifest($id)
    {
        $request = $this->apiClient->createRequest(
            RequestMethodInterface::METHOD_GET,
            sprintf('orders/%s/manifest', rawurlencode($id)),
            null
        );
        $data = $this->apiClient->makeRequest($request);

        return new Entities\Paysera.File($data);
    }

    /**
     * Get label file
     * GET /orders/{id}/label
     *
     * @param string $id
     * @return Entities\Paysera.File
     */
    public function getOrderLabel($id)
    {
        $request = $this->apiClient->createRequest(
            RequestMethodInterface::METHOD_GET,
            sprintf('orders/%s/label', rawurlencode($id)),
            null
        );
        $data = $this->apiClient->makeRequest($request);

        return new Entities\Paysera.File($data);
    }

    /**
     * Get order by id
     * GET /orders/{id}
     *
     * @param string $id
     * @return Entities\Order
     */
    public function getOrder($id)
    {
        $request = $this->apiClient->createRequest(
            RequestMethodInterface::METHOD_GET,
            sprintf('orders/%s', rawurlencode($id)),
            null
        );
        $data = $this->apiClient->makeRequest($request);

        return new Entities\Order($data);
    }

    /**
     * Update order
     * PUT /orders/{id}
     *
     * @param string $id
     * @param Entities\OrderCreate $orderCreate
     * @return Entities\Order
     */
    public function updateOrder($id, Entities\OrderCreate $orderCreate)
    {
        $request = $this->apiClient->createRequest(
            RequestMethodInterface::METHOD_PUT,
            sprintf('orders/%s', rawurlencode($id)),
            $orderCreate
        );
        $data = $this->apiClient->makeRequest($request);

        return new Entities\Order($data);
    }

    /**
     * Delete order
     * DELETE /orders/{id}
     *
     * @param string $id
     * @return null
     */
    public function deleteOrder($id)
    {
        $request = $this->apiClient->createRequest(
            RequestMethodInterface::METHOD_DELETE,
            sprintf('orders/%s', rawurlencode($id)),
            null
        );
        $data = $this->apiClient->makeRequest($request);

        return null;
    }

    /**
     * Add a new order
     * POST /orders
     *
     * @param Entities\OrderCreate $orderCreate
     * @return Entities\Order
     */
    public function createOrder(Entities\OrderCreate $orderCreate)
    {
        $request = $this->apiClient->createRequest(
            RequestMethodInterface::METHOD_POST,
            'orders',
            $orderCreate
        );
        $data = $this->apiClient->makeRequest($request);

        return new Entities\Order($data);
    }

    /**
     * Standard SQL-style Result filtering
     * GET /orders
     *
     * @param Entities\OrderFilter $orderFilter
     * @return Entities\OrderCollection
     */
    public function getOrders(Entities\OrderFilter $orderFilter)
    {
        $request = $this->apiClient->createRequest(
            RequestMethodInterface::METHOD_GET,
            'orders',
            $orderFilter
        );
        $data = $this->apiClient->makeRequest($request);

        return new Entities\OrderCollection($data);
    }

    /**
     * List order prices
     * PUT /order-prices
     *
     * @param Entities\OrderPriceFilter $orderPriceFilter
     * @return Entities\OrderPriceCollection
     */
    public function updateOrderPrice(Entities\OrderPriceFilter $orderPriceFilter)
    {
        $request = $this->apiClient->createRequest(
            RequestMethodInterface::METHOD_PUT,
            'order-prices',
            $orderPriceFilter
        );
        $data = $this->apiClient->makeRequest($request);

        return new Entities\OrderPriceCollection($data);
    }

    /**
     * Activity filter
     * GET /statistics/export
     *
     * @param Entities\ActivityFilter $activityFilter
     * @return Entities\Paysera.File
     */
    public function getStatisticExport(Entities\ActivityFilter $activityFilter)
    {
        $request = $this->apiClient->createRequest(
            RequestMethodInterface::METHOD_GET,
            'statistics/export',
            $activityFilter
        );
        $data = $this->apiClient->makeRequest($request);

        return new Entities\Paysera.File($data);
    }

    /**
     * Standard SQL-style Result filtering
     * GET /statistics/last-activity
     *
     * @param Entities\LastActivityFilter $lastActivityFilter
     * @return Entities\LastActivityCollection
     */
    public function getStatisticLastActivity(Entities\LastActivityFilter $lastActivityFilter)
    {
        $request = $this->apiClient->createRequest(
            RequestMethodInterface::METHOD_GET,
            'statistics/last-activity',
            $lastActivityFilter
        );
        $data = $this->apiClient->makeRequest($request);

        return new Entities\LastActivityCollection($data);
    }

    /**
     * Activity filter
     * GET /statistics
     *
     * @param Entities\ActivityFilter $activityFilter
     * @return Entities\ActivityCollection
     */
    public function getStatistics(Entities\ActivityFilter $activityFilter)
    {
        $request = $this->apiClient->createRequest(
            RequestMethodInterface::METHOD_GET,
            'statistics',
            $activityFilter
        );
        $data = $this->apiClient->makeRequest($request);

        return new Entities\ActivityCollection($data);
    }
}
