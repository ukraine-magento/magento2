<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Magento\CatalogInventory\Api;

/**
 * @api
 *
 * @deprecated 2.3.0 Replaced with Multi Source Inventory
 * @link https://devdocs.magento.com/guides/v2.3/inventory/index.html
 * @link https://devdocs.magento.com/guides/v2.3/inventory/catalog-inventory-replacements.html
 */
interface RevertProductSaleInterface
{
    /**
     * Revert register product sale
     *
     * Method signature is unchanged for backward compatibility
     *
     * @param string[] $items
     * @param int $websiteId
     * @return bool
     */
    public function revertProductsSale($items, $websiteId = null);
}
