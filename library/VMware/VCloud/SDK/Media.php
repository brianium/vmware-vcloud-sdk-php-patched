<?php
class VMware_VCloud_SDK_Media extends VMware_VCloud_SDK_Abstract
{
    /**
     * Get a reference to a VMware vCloud media entity.
     *
     * @return VMware_VCloud_API_ReferenceType
     * @since Version 1.0.0
     */
    public function getMediaRef()
    {
        return $this->getRef(VMware_VCloud_SDK_Constants::MEDIA_CONTENT_TYPE);
    }

    /**
     * Get a VMware vCloud media entity.
     *
     * @return VMware_VCloud_API_MediaType
     * @since Version 1.0.0
     */
    public function getMedia()
    {
        return $this->getDataObj();
    }

    /**
     * Constructs vCloud ID of the media from its UUID.
     *
     * @return string
     * @since Version 1.5.0
     */
    public function getId()
    {
        return 'urn:vcloud:media:' . $this->getUuid();
    }

    /**
     * Get the link to the container of the media.
     *
     * @return VMware_VCloud_API_LinkType|null
     * @since Version 1.0.0
     */
    public function getVdcRef()
    {
        return $this->getContainerLink();
    }

    /**
     * Get the container entity, a vDC, of the media
     *
     * @return VMware_VCloud_API_VdcType
     * @since Version 1.0.0
     */
    public function getVdc()
    {
        $ref = $this->getVdcRef();
        return isset($ref)? $this->svc->get($ref->get_href()) : null;
    }

    /**
     * Modify name and/or description of the media.
     *
     * @param string $name   New name of the media
     * @param string $description   New description of the media
     * @return VMware_VCloud_API_TaskType
     * @since Version 1.0.0
     */
    public function modify($name=null, $description=null)
    {
        $media = $this->getMedia();
        if (isset($name))
        {
            $media->set_name($name);
        }
        if (!is_null($description))
        {
            $media->setDescription($description);
        }
        $type = VMware_VCloud_SDK_Constants::MEDIA_CONTENT_TYPE;
        return $this->svc->put($this->url, 202, $type, $media);
    }

    /**
     * Delete a VMware vCloud virtual media.
     *
     * @return VMware_VCloud_API_TaskType
     * @since Version 1.0.0
     */
    public function delete()
    {
        $task = $this->svc->delete($this->url, 202);
        $this->destroy();
        return $task;
    }

    /**
     * Get a reference to a VMware vCloud catalog entity.
     *
     * @return VMware_VCloud_API_LinkType|null
     * @since Version 1.5.0
     * @since SDK 5.1.0
     */
    public function getCatalogItemLink()
    {
        $catalogItemReference = null;
        $links = $this->getContainedLinks(null, 'catalogItem');
        foreach ($links as $link)
        {
            if ($link->get_Type() == VMware_VCloud_SDK_Constants::CATALOG_ITEM_CONTENT_TYPE)
            {
                $catalogItemReference = $link;
            }
        }
        return $catalogItemReference;
    }

    /**
     * Returns true if media is in Catalog, otherwise false.
     *
     * @return boolean
     * @since Version 1.5.0
     * @since SDK 5.1.0
     */
    public function isPartOfCatalogItem()
    {
        $links = $this->getCatalogItemLink();
        return ($links != null);
    }

    /**
     * Deletes media and its catalog item. If the media is attached to a catalog item.
     * Deletes media alone. If the media is not attached to any catalog item.
     *
     * @return VMware_VCloud_API_TaskType
     * @since Version 1.5.0
     * @since SDK 5.1.0
     */
    public function deleteMedia()
    {
        if($this->isPartOfCatalogItem())
        {
            $this->svc->createSDKObj($this->getCatalogItemLink())->delete();
        }
        $this->svc->delete($this->url, 202);
        $this->destroy();
    }

    /**
     * Get media owner.
     *
     * @return VMware_VCloud_API_OwnerType
     * @since Version 1.5.0
     */
    public function getOwner()
    {
        $url = $this->url . '/owner';
        return $this->svc->get($url);
    }

    /**
     * Get metadata associated with the media or metadata associated with
     * the media for the specified key in the specified domain.
     *
     * @param string $key
     * @param string $domain
     * @return VMware_VCloud_API_MetadataType|VMware_VCloud_API_MetadataValueType|null
     * @since Version 1.5.0
     * @version 5.1.0
     */
    public function getMetadata($key=null, $domain=null)
    {
        return $this->svc->get($this->getMetadataUrl($key, $domain));
    }

    /**
     * Merges the metadata for the media with the information provided.
     *
     * @param VMware_VCloud_API_MetadataType $meta
     * @return VMware_VCloud_API_TaskType
     * @since Version 1.5.0
     */
    public function mergeMetadata($meta)
    {
        $url = $this->getMetadataUrl();
        $type = VMware_VCloud_SDK_Constants::METADATA_CONTENT_TYPE;
        return $this->svc->post($url, 202, $type, $meta);
    }

    /**
     * Sets the metadata for the particular key in the specified domain for the
     * media to the value provided. Note: This will replace any existing
     * metadata information.
     *
     * @param string $key
     * @param VMware_VCloud_API_MetadataValueType $value
     * @param string $domain
     * @return VMware_VCloud_API_TaskType
     * @since Version 1.5.0
     * @version 5.1.0
     */
    public function setMetadataByKey($key, $value, $domain=null)
    {
        $url = $this->getMetadataUrl($key, $domain);
        $type = VMware_VCloud_SDK_Constants::METADATA_VALUE_CONTENT_TYPE;
        return $this->svc->put($url, 202, $type, $value);
    }

    /**
     * Deletes the metadata for the particular key in the specified domain for
     * the media.
     *
     * @param string $key
     * @param string $domain
     * @return VMware_VCloud_API_TaskType
     * @since Version 1.5.0
     * @version 5.1.0
     */
    public function deleteMetadataByKey($key, $domain=null)
    {
        $url = $this->getMetadataUrl($key, $domain);
        return $this->svc->delete($url, 202);
    }
}