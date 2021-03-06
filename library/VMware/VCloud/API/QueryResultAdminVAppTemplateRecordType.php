<?php
class VMware_VCloud_API_QueryResultAdminVAppTemplateRecordType extends VMware_VCloud_API_QueryResultRecordType {
    protected $isGoldMaster = null;
    protected $status = null;
    protected $isDeployed = null;
    protected $name = null;
    protected $storageProfileName = null;
    protected $isEnabled = null;
    protected $isPublished = null;
    protected $vdcName = null;
    protected $catalog = null;
    protected $vdc = null;
    protected $catalogItem = null;
    protected $ownerName = null;
    protected $isBusy = null;
    protected $owner = null;
    protected $org = null;
    protected $isExpired = null;
    protected $creationDate = null;
    protected $isVdcEnabled = null;
    protected $catalogName = null;
    protected $namespace = array();
    protected $namespacedef = null;
    protected $tagName = null;
    public static $defaultNS = 'http://www.vmware.com/vcloud/v1.5';

   /**
    * @param anyURI $href - [optional] an attribute, 
    * @param string $type - [optional] an attribute, 
    * @param string $id - [optional] an attribute, 
    * @param array $Link - [optional] an array of VMware_VCloud_API_LinkType objects
    * @param VMware_VCloud_API_MetadataType $Metadata - [optional]
    * @param boolean $isGoldMaster - [optional] an attribute, 
    * @param string $status - [optional] an attribute, 
    * @param boolean $isDeployed - [optional] an attribute, 
    * @param string $name - [optional] an attribute, 
    * @param string $storageProfileName - [optional] an attribute, 
    * @param boolean $isEnabled - [optional] an attribute, 
    * @param boolean $isPublished - [optional] an attribute, 
    * @param string $vdcName - [optional] an attribute, 
    * @param string $catalog - [optional] an attribute, 
    * @param string $vdc - [optional] an attribute, 
    * @param string $catalogItem - [optional] an attribute, 
    * @param string $ownerName - [optional] an attribute, 
    * @param boolean $isBusy - [optional] an attribute, 
    * @param string $owner - [optional] an attribute, 
    * @param string $org - [optional] an attribute, 
    * @param boolean $isExpired - [optional] an attribute, 
    * @param dateTime $creationDate - [optional] an attribute, 
    * @param boolean $isVdcEnabled - [optional] an attribute, 
    * @param string $catalogName - [optional] an attribute, 
    */
    public function __construct($href=null, $type=null, $id=null, $Link=null, $Metadata=null, $isGoldMaster=null, $status=null, $isDeployed=null, $name=null, $storageProfileName=null, $isEnabled=null, $isPublished=null, $vdcName=null, $catalog=null, $vdc=null, $catalogItem=null, $ownerName=null, $isBusy=null, $owner=null, $org=null, $isExpired=null, $creationDate=null, $isVdcEnabled=null, $catalogName=null) {
        parent::__construct($href, $type, $id, $Link, $Metadata);
        $this->isGoldMaster = $isGoldMaster;
        $this->status = $status;
        $this->isDeployed = $isDeployed;
        $this->name = $name;
        $this->storageProfileName = $storageProfileName;
        $this->isEnabled = $isEnabled;
        $this->isPublished = $isPublished;
        $this->vdcName = $vdcName;
        $this->catalog = $catalog;
        $this->vdc = $vdc;
        $this->catalogItem = $catalogItem;
        $this->ownerName = $ownerName;
        $this->isBusy = $isBusy;
        $this->owner = $owner;
        $this->org = $org;
        $this->isExpired = $isExpired;
        $this->creationDate = $creationDate;
        $this->isVdcEnabled = $isVdcEnabled;
        $this->catalogName = $catalogName;
        $this->tagName = 'AdminVAppTemplateRecord';
        $this->namespacedef = ' xmlns:vcloud="http://www.vmware.com/vcloud/v1.5" xmlns:ns12="http://www.vmware.com/vcloud/v1.5" xmlns:ovf="http://schemas.dmtf.org/ovf/envelope/1" xmlns:ovfenv="http://schemas.dmtf.org/ovf/environment/1" xmlns:vmext="http://www.vmware.com/vcloud/extension/v1.5" xmlns:cim="http://schemas.dmtf.org/wbem/wscim/1/common" xmlns:rasd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_ResourceAllocationSettingData" xmlns:vssd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_VirtualSystemSettingData" xmlns:vmw="http://www.vmware.com/schema/ovf" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"';
    }
    public function get_isGoldMaster(){
        return $this->isGoldMaster;
    }
    public function set_isGoldMaster($isGoldMaster) {
        $this->isGoldMaster = $isGoldMaster;
    }
    public function get_status(){
        return $this->status;
    }
    public function set_status($status) {
        $this->status = $status;
    }
    public function get_isDeployed(){
        return $this->isDeployed;
    }
    public function set_isDeployed($isDeployed) {
        $this->isDeployed = $isDeployed;
    }
    public function get_name(){
        return $this->name;
    }
    public function set_name($name) {
        $this->name = $name;
    }
    public function get_storageProfileName(){
        return $this->storageProfileName;
    }
    public function set_storageProfileName($storageProfileName) {
        $this->storageProfileName = $storageProfileName;
    }
    public function get_isEnabled(){
        return $this->isEnabled;
    }
    public function set_isEnabled($isEnabled) {
        $this->isEnabled = $isEnabled;
    }
    public function get_isPublished(){
        return $this->isPublished;
    }
    public function set_isPublished($isPublished) {
        $this->isPublished = $isPublished;
    }
    public function get_vdcName(){
        return $this->vdcName;
    }
    public function set_vdcName($vdcName) {
        $this->vdcName = $vdcName;
    }
    public function get_catalog(){
        return $this->catalog;
    }
    public function set_catalog($catalog) {
        $this->catalog = $catalog;
    }
    public function get_vdc(){
        return $this->vdc;
    }
    public function set_vdc($vdc) {
        $this->vdc = $vdc;
    }
    public function get_catalogItem(){
        return $this->catalogItem;
    }
    public function set_catalogItem($catalogItem) {
        $this->catalogItem = $catalogItem;
    }
    public function get_ownerName(){
        return $this->ownerName;
    }
    public function set_ownerName($ownerName) {
        $this->ownerName = $ownerName;
    }
    public function get_isBusy(){
        return $this->isBusy;
    }
    public function set_isBusy($isBusy) {
        $this->isBusy = $isBusy;
    }
    public function get_owner(){
        return $this->owner;
    }
    public function set_owner($owner) {
        $this->owner = $owner;
    }
    public function get_org(){
        return $this->org;
    }
    public function set_org($org) {
        $this->org = $org;
    }
    public function get_isExpired(){
        return $this->isExpired;
    }
    public function set_isExpired($isExpired) {
        $this->isExpired = $isExpired;
    }
    public function get_creationDate(){
        return $this->creationDate;
    }
    public function set_creationDate($creationDate) {
        $this->creationDate = $creationDate;
    }
    public function get_isVdcEnabled(){
        return $this->isVdcEnabled;
    }
    public function set_isVdcEnabled($isVdcEnabled) {
        $this->isVdcEnabled = $isVdcEnabled;
    }
    public function get_catalogName(){
        return $this->catalogName;
    }
    public function set_catalogName($catalogName) {
        $this->catalogName = $catalogName;
    }
    public function get_tagName() { return $this->tagName; }
    public function set_tagName($tagName) { $this->tagName = $tagName; }
    public function export($name=null, $out='', $level=0, $namespacedef=null, $namespace=null, $rootNS=null) {
        if (!isset($name)) {
            $name = $this->tagName;
        }
        $out = VMware_VCloud_API_Helper::showIndent($out, $level);
        if (is_null($namespace)) {
            $namespace = self::$defaultNS;
        }
        if (is_null($rootNS)) {
            $rootNS = self::$defaultNS;
        }
        if (NULL === $namespacedef) {
            $namespacedef = $this->namespacedef;
            if (0 >= strpos($namespacedef, 'xmlns=')) {
                $namespacedef = ' xmlns="' . self::$defaultNS . '"' . $namespacedef;
            }
        }
        $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, $name, self::$defaultNS, $namespace, $rootNS);
        $out = VMware_VCloud_API_Helper::addString($out, '<' . $ns . $name . $namespacedef);
        $out = $this->exportAttributes($out, $level, $name, $namespacedef, $namespace, $rootNS);
        if ($this->hasContent()) {
            $out = VMware_VCloud_API_Helper::addString($out, ">\n");
            $out = $this->exportChildren($out, $level + 1, $name, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $out = VMware_VCloud_API_Helper::addString($out, "</" . $ns . $name . ">\n");
        } else {
            $out = VMware_VCloud_API_Helper::addString($out, "/>\n");
        }
        return $out;
    }
    protected function exportAttributes($out, $level, $name, $namespace, $rootNS) {
        $namespace = self::$defaultNS;
        $out = parent::exportAttributes($out, $level, $name, $namespace, $rootNS);
        if (!is_null($this->isGoldMaster)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'isGoldMaster', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'isGoldMaster=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_boolean($this->isGoldMaster, $input_name='isGoldMaster')));
        }
        if (!is_null($this->status)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'status', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'status=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->status, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='status')));
        }
        if (!is_null($this->isDeployed)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'isDeployed', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'isDeployed=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_boolean($this->isDeployed, $input_name='isDeployed')));
        }
        if (!is_null($this->name)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'name', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'name=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->name, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='name')));
        }
        if (!is_null($this->storageProfileName)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'storageProfileName', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'storageProfileName=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->storageProfileName, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='storageProfileName')));
        }
        if (!is_null($this->isEnabled)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'isEnabled', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'isEnabled=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_boolean($this->isEnabled, $input_name='isEnabled')));
        }
        if (!is_null($this->isPublished)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'isPublished', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'isPublished=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_boolean($this->isPublished, $input_name='isPublished')));
        }
        if (!is_null($this->vdcName)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'vdcName', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'vdcName=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->vdcName, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='vdcName')));
        }
        if (!is_null($this->catalog)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'catalog', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'catalog=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->catalog, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='catalog')));
        }
        if (!is_null($this->vdc)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'vdc', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'vdc=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->vdc, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='vdc')));
        }
        if (!is_null($this->catalogItem)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'catalogItem', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'catalogItem=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->catalogItem, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='catalogItem')));
        }
        if (!is_null($this->ownerName)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'ownerName', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'ownerName=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->ownerName, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='ownerName')));
        }
        if (!is_null($this->isBusy)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'isBusy', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'isBusy=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_boolean($this->isBusy, $input_name='isBusy')));
        }
        if (!is_null($this->owner)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'owner', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'owner=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->owner, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='owner')));
        }
        if (!is_null($this->org)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'org', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'org=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->org, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='org')));
        }
        if (!is_null($this->isExpired)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'isExpired', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'isExpired=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_boolean($this->isExpired, $input_name='isExpired')));
        }
        if (!is_null($this->creationDate)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'creationDate', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'creationDate=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->creationDate, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='creationDate')));
        }
        if (!is_null($this->isVdcEnabled)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'isVdcEnabled', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'isVdcEnabled=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_boolean($this->isVdcEnabled, $input_name='isVdcEnabled')));
        }
        if (!is_null($this->catalogName)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'catalogName', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'catalogName=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->catalogName, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='catalogName')));
        }
        return $out;
    }
    protected function exportChildren($out, $level, $name, $namespace, $rootNS) {
        $namespace = self::$defaultNS;
        $out = parent::exportChildren($out, $level, $name, $namespace, $rootNS);
        return $out;
    }
    protected function hasContent() {
        if (
            parent::hasContent()
            ) {
            return true;
        } else {
            return false;
        }
    }
    public function build($node, $namespaces='') {
        $tagName = $node->tagName;
        $this->tagName = $tagName;
        if (strpos($tagName, ':') > 0) {
            list($namespace, $tagName) = explode(':', $tagName);
            $this->tagName = $tagName;
            $this->namespace[$tagName] = $namespace;
        }
        $this->buildAttributes($node, $namespaces);
        $children = $node->childNodes;
        foreach ($children as $child) {
            if ($child->nodeType == XML_ELEMENT_NODE || $child->nodeType == XML_TEXT_NODE) {
                $namespace = '';
                $nodeName = $child->nodeName;
                if (strpos($nodeName, ':') > 0) {
                    list($namespace, $nodeName) = explode(':', $nodeName);
                }
                $this->buildChildren($child, $nodeName, $namespace);
            }
        }
    }
    protected function buildAttributes($node, $namespaces='') {
        $attrs = $node->attributes;
        if (!empty($namespaces)) {
            $this->namespacedef = VMware_VCloud_API_Helper::constructNS($attrs, $namespaces, $this->namespacedef) . $this->namespacedef;
        }
        $nsUri = self::$defaultNS;
        $ndisGoldMaster = $attrs->getNamedItem('isGoldMaster');
        if (!is_null($ndisGoldMaster)) {
            $this->isGoldMaster = VMware_VCloud_API_Helper::get_boolean($ndisGoldMaster->value);
            if (isset($ndisGoldMaster->prefix)) {
                $this->namespace['isGoldMaster'] = $ndisGoldMaster->prefix;
                $nsUri = $ndisGoldMaster->lookupNamespaceURI($ndisGoldMaster->prefix);
            }
            $node->removeAttributeNS($nsUri, 'isGoldMaster');
        } else {
            $this->isGoldMaster = null;
        }
        $ndstatus = $attrs->getNamedItem('status');
        if (!is_null($ndstatus)) {
            $this->status = $ndstatus->value;
            if (isset($ndstatus->prefix)) {
                $this->namespace['status'] = $ndstatus->prefix;
                $nsUri = $ndstatus->lookupNamespaceURI($ndstatus->prefix);
            }
            $node->removeAttributeNS($nsUri, 'status');
        } else {
            $this->status = null;
        }
        $ndisDeployed = $attrs->getNamedItem('isDeployed');
        if (!is_null($ndisDeployed)) {
            $this->isDeployed = VMware_VCloud_API_Helper::get_boolean($ndisDeployed->value);
            if (isset($ndisDeployed->prefix)) {
                $this->namespace['isDeployed'] = $ndisDeployed->prefix;
                $nsUri = $ndisDeployed->lookupNamespaceURI($ndisDeployed->prefix);
            }
            $node->removeAttributeNS($nsUri, 'isDeployed');
        } else {
            $this->isDeployed = null;
        }
        $ndname = $attrs->getNamedItem('name');
        if (!is_null($ndname)) {
            $this->name = $ndname->value;
            if (isset($ndname->prefix)) {
                $this->namespace['name'] = $ndname->prefix;
                $nsUri = $ndname->lookupNamespaceURI($ndname->prefix);
            }
            $node->removeAttributeNS($nsUri, 'name');
        } else {
            $this->name = null;
        }
        $ndstorageProfileName = $attrs->getNamedItem('storageProfileName');
        if (!is_null($ndstorageProfileName)) {
            $this->storageProfileName = $ndstorageProfileName->value;
            if (isset($ndstorageProfileName->prefix)) {
                $this->namespace['storageProfileName'] = $ndstorageProfileName->prefix;
                $nsUri = $ndstorageProfileName->lookupNamespaceURI($ndstorageProfileName->prefix);
            }
            $node->removeAttributeNS($nsUri, 'storageProfileName');
        } else {
            $this->storageProfileName = null;
        }
        $ndisEnabled = $attrs->getNamedItem('isEnabled');
        if (!is_null($ndisEnabled)) {
            $this->isEnabled = VMware_VCloud_API_Helper::get_boolean($ndisEnabled->value);
            if (isset($ndisEnabled->prefix)) {
                $this->namespace['isEnabled'] = $ndisEnabled->prefix;
                $nsUri = $ndisEnabled->lookupNamespaceURI($ndisEnabled->prefix);
            }
            $node->removeAttributeNS($nsUri, 'isEnabled');
        } else {
            $this->isEnabled = null;
        }
        $ndisPublished = $attrs->getNamedItem('isPublished');
        if (!is_null($ndisPublished)) {
            $this->isPublished = VMware_VCloud_API_Helper::get_boolean($ndisPublished->value);
            if (isset($ndisPublished->prefix)) {
                $this->namespace['isPublished'] = $ndisPublished->prefix;
                $nsUri = $ndisPublished->lookupNamespaceURI($ndisPublished->prefix);
            }
            $node->removeAttributeNS($nsUri, 'isPublished');
        } else {
            $this->isPublished = null;
        }
        $ndvdcName = $attrs->getNamedItem('vdcName');
        if (!is_null($ndvdcName)) {
            $this->vdcName = $ndvdcName->value;
            if (isset($ndvdcName->prefix)) {
                $this->namespace['vdcName'] = $ndvdcName->prefix;
                $nsUri = $ndvdcName->lookupNamespaceURI($ndvdcName->prefix);
            }
            $node->removeAttributeNS($nsUri, 'vdcName');
        } else {
            $this->vdcName = null;
        }
        $ndcatalog = $attrs->getNamedItem('catalog');
        if (!is_null($ndcatalog)) {
            $this->catalog = $ndcatalog->value;
            if (isset($ndcatalog->prefix)) {
                $this->namespace['catalog'] = $ndcatalog->prefix;
                $nsUri = $ndcatalog->lookupNamespaceURI($ndcatalog->prefix);
            }
            $node->removeAttributeNS($nsUri, 'catalog');
        } else {
            $this->catalog = null;
        }
        $ndvdc = $attrs->getNamedItem('vdc');
        if (!is_null($ndvdc)) {
            $this->vdc = $ndvdc->value;
            if (isset($ndvdc->prefix)) {
                $this->namespace['vdc'] = $ndvdc->prefix;
                $nsUri = $ndvdc->lookupNamespaceURI($ndvdc->prefix);
            }
            $node->removeAttributeNS($nsUri, 'vdc');
        } else {
            $this->vdc = null;
        }
        $ndcatalogItem = $attrs->getNamedItem('catalogItem');
        if (!is_null($ndcatalogItem)) {
            $this->catalogItem = $ndcatalogItem->value;
            if (isset($ndcatalogItem->prefix)) {
                $this->namespace['catalogItem'] = $ndcatalogItem->prefix;
                $nsUri = $ndcatalogItem->lookupNamespaceURI($ndcatalogItem->prefix);
            }
            $node->removeAttributeNS($nsUri, 'catalogItem');
        } else {
            $this->catalogItem = null;
        }
        $ndownerName = $attrs->getNamedItem('ownerName');
        if (!is_null($ndownerName)) {
            $this->ownerName = $ndownerName->value;
            if (isset($ndownerName->prefix)) {
                $this->namespace['ownerName'] = $ndownerName->prefix;
                $nsUri = $ndownerName->lookupNamespaceURI($ndownerName->prefix);
            }
            $node->removeAttributeNS($nsUri, 'ownerName');
        } else {
            $this->ownerName = null;
        }
        $ndisBusy = $attrs->getNamedItem('isBusy');
        if (!is_null($ndisBusy)) {
            $this->isBusy = VMware_VCloud_API_Helper::get_boolean($ndisBusy->value);
            if (isset($ndisBusy->prefix)) {
                $this->namespace['isBusy'] = $ndisBusy->prefix;
                $nsUri = $ndisBusy->lookupNamespaceURI($ndisBusy->prefix);
            }
            $node->removeAttributeNS($nsUri, 'isBusy');
        } else {
            $this->isBusy = null;
        }
        $ndowner = $attrs->getNamedItem('owner');
        if (!is_null($ndowner)) {
            $this->owner = $ndowner->value;
            if (isset($ndowner->prefix)) {
                $this->namespace['owner'] = $ndowner->prefix;
                $nsUri = $ndowner->lookupNamespaceURI($ndowner->prefix);
            }
            $node->removeAttributeNS($nsUri, 'owner');
        } else {
            $this->owner = null;
        }
        $ndorg = $attrs->getNamedItem('org');
        if (!is_null($ndorg)) {
            $this->org = $ndorg->value;
            if (isset($ndorg->prefix)) {
                $this->namespace['org'] = $ndorg->prefix;
                $nsUri = $ndorg->lookupNamespaceURI($ndorg->prefix);
            }
            $node->removeAttributeNS($nsUri, 'org');
        } else {
            $this->org = null;
        }
        $ndisExpired = $attrs->getNamedItem('isExpired');
        if (!is_null($ndisExpired)) {
            $this->isExpired = VMware_VCloud_API_Helper::get_boolean($ndisExpired->value);
            if (isset($ndisExpired->prefix)) {
                $this->namespace['isExpired'] = $ndisExpired->prefix;
                $nsUri = $ndisExpired->lookupNamespaceURI($ndisExpired->prefix);
            }
            $node->removeAttributeNS($nsUri, 'isExpired');
        } else {
            $this->isExpired = null;
        }
        $ndcreationDate = $attrs->getNamedItem('creationDate');
        if (!is_null($ndcreationDate)) {
            $this->creationDate = $ndcreationDate->value;
            if (isset($ndcreationDate->prefix)) {
                $this->namespace['creationDate'] = $ndcreationDate->prefix;
                $nsUri = $ndcreationDate->lookupNamespaceURI($ndcreationDate->prefix);
            }
            $node->removeAttributeNS($nsUri, 'creationDate');
        } else {
            $this->creationDate = null;
        }
        $ndisVdcEnabled = $attrs->getNamedItem('isVdcEnabled');
        if (!is_null($ndisVdcEnabled)) {
            $this->isVdcEnabled = VMware_VCloud_API_Helper::get_boolean($ndisVdcEnabled->value);
            if (isset($ndisVdcEnabled->prefix)) {
                $this->namespace['isVdcEnabled'] = $ndisVdcEnabled->prefix;
                $nsUri = $ndisVdcEnabled->lookupNamespaceURI($ndisVdcEnabled->prefix);
            }
            $node->removeAttributeNS($nsUri, 'isVdcEnabled');
        } else {
            $this->isVdcEnabled = null;
        }
        $ndcatalogName = $attrs->getNamedItem('catalogName');
        if (!is_null($ndcatalogName)) {
            $this->catalogName = $ndcatalogName->value;
            if (isset($ndcatalogName->prefix)) {
                $this->namespace['catalogName'] = $ndcatalogName->prefix;
                $nsUri = $ndcatalogName->lookupNamespaceURI($ndcatalogName->prefix);
            }
            $node->removeAttributeNS($nsUri, 'catalogName');
        } else {
            $this->catalogName = null;
        }
        parent::buildAttributes($node, $namespaces);
    }
    protected function buildChildren($child, $nodeName, $namespace='') {
        parent::buildChildren($child, $nodeName, $namespace);
    }
}