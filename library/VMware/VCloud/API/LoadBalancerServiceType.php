<?php
class VMware_VCloud_API_LoadBalancerServiceType extends VMware_VCloud_API_NetworkServiceType {
    protected $Pool = array();
    protected $VirtualServer = array();
    protected $namespace = array();
    protected $namespacedef = null;
    protected $tagName = null;
    public static $defaultNS = 'http://www.vmware.com/vcloud/v1.5';

   /**
    * @param array $VCloudExtension - [optional] an array of VMware_VCloud_API_VCloudExtensionType objects
    * @param boolean $IsEnabled - [optional] 
    * @param array $Pool - [optional] an array of VMware_VCloud_API_LoadBalancerPoolType objects
    * @param array $VirtualServer - [optional] an array of VMware_VCloud_API_LoadBalancerVirtualServerType objects
    */
    public function __construct($VCloudExtension=null, $IsEnabled=null, $Pool=null, $VirtualServer=null) {
        parent::__construct($VCloudExtension, $IsEnabled);
        if (!is_null($Pool)) {
            $this->Pool = $Pool;
        }
        if (!is_null($VirtualServer)) {
            $this->VirtualServer = $VirtualServer;
        }
        $this->tagName = 'LoadBalancerService';
        $this->namespacedef = ' xmlns:vcloud="http://www.vmware.com/vcloud/v1.5" xmlns:ns12="http://www.vmware.com/vcloud/v1.5" xmlns:ovf="http://schemas.dmtf.org/ovf/envelope/1" xmlns:ovfenv="http://schemas.dmtf.org/ovf/environment/1" xmlns:vmext="http://www.vmware.com/vcloud/extension/v1.5" xmlns:cim="http://schemas.dmtf.org/wbem/wscim/1/common" xmlns:rasd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_ResourceAllocationSettingData" xmlns:vssd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_VirtualSystemSettingData" xmlns:vmw="http://www.vmware.com/schema/ovf" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"';
    }
    public function getPool() {
        return $this->Pool;
    }
    public function setPool($Pool) { 
        $this->Pool = $Pool;
    }
    public function addPool($value) { array_push($this->Pool, $value); }
    public function getVirtualServer() {
        return $this->VirtualServer;
    }
    public function setVirtualServer($VirtualServer) { 
        $this->VirtualServer = $VirtualServer;
    }
    public function addVirtualServer($value) { array_push($this->VirtualServer, $value); }
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
        return $out;
    }
    protected function exportChildren($out, $level, $name, $namespace, $rootNS) {
        $namespace = self::$defaultNS;
        $out = parent::exportChildren($out, $level, $name, $namespace, $rootNS);
        if (isset($this->Pool)) {
            foreach ($this->Pool as $Pool) {
                $out = $Pool->export('Pool', $out, $level, '', $namespace, $rootNS);
            }
        }
        if (isset($this->VirtualServer)) {
            foreach ($this->VirtualServer as $VirtualServer) {
                $out = $VirtualServer->export('VirtualServer', $out, $level, '', $namespace, $rootNS);
            }
        }
        return $out;
    }
    protected function hasContent() {
        if (
            !empty($this->Pool) ||
            !empty($this->VirtualServer) ||
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
        parent::buildAttributes($node, $namespaces);
    }
    protected function buildChildren($child, $nodeName, $namespace='') {
        if ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'Pool') {
            $obj = new VMware_VCloud_API_LoadBalancerPoolType();
            $obj->build($child);
            $obj->set_tagName('Pool');
            array_push($this->Pool, $obj);
            if (!empty($namespace)) {
                $this->namespace['Pool'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'VirtualServer') {
            $obj = new VMware_VCloud_API_LoadBalancerVirtualServerType();
            $obj->build($child);
            $obj->set_tagName('VirtualServer');
            array_push($this->VirtualServer, $obj);
            if (!empty($namespace)) {
                $this->namespace['VirtualServer'] = $namespace;
            }
        }
        parent::buildChildren($child, $nodeName, $namespace);
    }
}