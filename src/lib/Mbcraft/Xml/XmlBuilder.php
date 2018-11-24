<?php

namespace Mbcraft\Xml {

    class XmlBuilder
    {
        private $doc;

        private $currentNode;
        private $lastElement;

        public function __construct($format_output=true)
        {
            $this->doc = new \DOMDocument("1.0","utf-8");
            $this->doc->formatOutput = $format_output;
            $this->doc->preserveWhitespace = false;
            $this->currentNode = $this->doc;
        }

        public function back()
        {
            if ($this->currentNode===$this->doc)
                throw new \Exception("Error in building XML : no parent found.");
            $this->currentNode = $this->currentNode->parentNode;

            return $this;   //chained calls
        }

        public function forward()
        {
            if (!$this->currentNode->hasChildNodes())
                throw new \Exception("Error in building XML : no childs found in current node.");

            $this->currentNode = $this->currentNode->lastChild;

            return $this;   //chained calls
        }

        public function element($name,$value=null,$use_cdata = false)
        {
            if ($value==null)
                $element = $this->doc->createElement($name);
            else
            {
                if ($use_cdata)
                {
                    $cdata_node = $this->doc->createCDATASection($value);
                    $element = $this->doc->createElement($name);
                    $element->appendChild($cdata_node);
                }
                else
                    $element = $this->doc->createElement($name,"".$value);
            }

            $element = $this->currentNode->appendChild($element);
            $this->lastElement = $element;

            return $this;   //chained calls
        }

        public function attribute($name,$value)
        {
            $this->lastElement->setAttribute($name,"".$value);

            return $this;   //chained calls
        }

        public function getXML()
        {
            return $this->doc->saveXML();
        }
    }

}

?>