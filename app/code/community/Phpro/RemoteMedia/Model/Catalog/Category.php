<?php


class Phpro_RemoteMedia_Model_Catalog_Category extends Mage_Catalog_Model_Category
{
    /**
     * Retrieve image URL
     *
     * @return string
     */
    public function getImageUrl()
    {
        $image = $this->getImage();
        if($image)
        {
            $helper = Mage::helper('phpro_remotemedia');
            $image = $helper->fetchRemoteProductionImage($image, '/catalog/category');
        }

        return parent::getImageUrl();

    }
}