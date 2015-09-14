<?php


class Phpro_RemoteMedia_Helper_Flexslider_Image extends SolideWebservices_Flexslider_Helper_Image
{

    /**
     * determine whether the image exists
     *
     * @param string $image
     * @return bool
     */
    public function imageExists($image)
    {
        if(!parent::imageExists($image))
        {
            Mage::helper('phpro_remotemedia')->fetchRemoteProductionImage($image, DS.self::IMAGE_FOLDER.DS);
        }

        return parent::imageExists($image);
    }
}