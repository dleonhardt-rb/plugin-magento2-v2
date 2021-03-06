<?php

namespace Decidir\AdminPlanesCuotas\Model;

use Magento\Framework\Model\AbstractModel;

/**
 * Class Tarjeta
 *
 */
class Tarjeta extends AbstractModel
{
    /**
     * @var string
     */
    protected $_eventPrefix = 'decidir_tarjeta';

    /**
     * Parameter name in event
     *
     * In observe method you can use $observer->getEvent()->getObject() in this case
     *
     * @var string
     */
    protected $_eventObject = 'adminplanescuotas_tarjeta';

    /**
     * True if data changed
     *
     * @var bool
     */
    protected $_isStatusChanged = false;

    protected $_cresource;

    /**
     * Tarjeta constructor.
     * @param \Magento\Framework\Model\Context $context
     * @param \Magento\Framework\Registry $registry
     * @param \Magento\Framework\Model\ResourceModel\AbstractResource|null $resource
     * @param \Magento\Framework\Data\Collection\AbstractDb|null $resourceCollection
     * @param array $data
     */
    public function __construct(
        \Magento\Framework\Model\Context $context,
        \Magento\Framework\Registry $registry,
        \Magento\Framework\App\ResourceConnection $cresource,
        \Magento\Framework\Model\ResourceModel\AbstractResource $resource = null,
        \Magento\Framework\Data\Collection\AbstractDb $resourceCollection = null,
        array $data = []
    ) {
        $this->_cresource = $cresource;
        parent::__construct($context, $registry, $resource, $resourceCollection, $data);
    }

    /**
     * Inicia el resource model
     */
    protected function _construct()
    {
        $this->_init('Decidir\AdminPlanesCuotas\Model\ResourceModel\Tarjeta');
    }

    /**
     * @return false|\Magento\Framework\DB\Adapter\AdapterInterface
     */
    public function getConnection()
    {
        return $this->_cresource->getConnection();
    }


}