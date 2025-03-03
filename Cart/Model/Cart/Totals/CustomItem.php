<?php

namespace MMT\Cart\Model\Cart\Totals;

use Magento\Quote\Model\Cart\Totals\Item;
use MMT\Cart\Api\Data\CustomTotalsItemInterface;

class CustoMMTem extends Item implements CustomTotalsItemInterface
{
    /**
     * @inheritdoc
     */
    public function setImgPath($imgPath)
    {
        return $this->setData(self::KEY_IMG_Path, $imgPath);
    }

    /**
     * @inheritdoc
     */
    public function getImgPath()
    {
        return $this->_get(self::KEY_IMG_Path);
    }
}
