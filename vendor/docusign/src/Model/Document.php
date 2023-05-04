<?php
/**
 * Document
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  DocuSign\eSign
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * DocuSign REST API
 *
 * The DocuSign REST API provides you with a powerful, convenient, and simple Web services API for interacting with DocuSign.
 *
 * OpenAPI spec version: v2.1
 * Contact: devcenter@docusign.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.21-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace DocuSign\eSign\Model;

use \ArrayAccess;
use DocuSign\eSign\ObjectSerializer;

/**
 * Document Class Doc Comment
 *
 * @category    Class
 * @package     DocuSign\eSign
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Document implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'document';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'apply_anchor_tabs' => '?string',
        'assign_tabs_to_recipient_id' => '?string',
        'display' => '?string',
        'document_base64' => '?string',
        'document_fields' => '\DocuSign\eSign\Model\NameValue[]',
        'document_id' => '?string',
        'encrypted_with_key_manager' => '?string',
        'file_extension' => '?string',
        'file_format_hint' => '?string',
        'html_definition' => '\DocuSign\eSign\Model\DocumentHtmlDefinition',
        'include_in_download' => '?string',
        'match_boxes' => '\DocuSign\eSign\Model\MatchBox[]',
        'name' => '?string',
        'order' => '?string',
        'pages' => '?string',
        'password' => '?string',
        'pdf_form_field_option' => '?string',
        'remote_url' => '?string',
        'signer_must_acknowledge' => '?string',
        'signer_must_acknowledge_use_account_default' => '?bool',
        'tabs' => '\DocuSign\eSign\Model\Tabs',
        'template_locked' => '?string',
        'template_required' => '?string',
        'transform_pdf_fields' => '?string',
        'uri' => '?string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'apply_anchor_tabs' => null,
        'assign_tabs_to_recipient_id' => null,
        'display' => null,
        'document_base64' => null,
        'document_fields' => null,
        'document_id' => null,
        'encrypted_with_key_manager' => null,
        'file_extension' => null,
        'file_format_hint' => null,
        'html_definition' => null,
        'include_in_download' => null,
        'match_boxes' => null,
        'name' => null,
        'order' => null,
        'pages' => null,
        'password' => null,
        'pdf_form_field_option' => null,
        'remote_url' => null,
        'signer_must_acknowledge' => null,
        'signer_must_acknowledge_use_account_default' => null,
        'tabs' => null,
        'template_locked' => null,
        'template_required' => null,
        'transform_pdf_fields' => null,
        'uri' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'apply_anchor_tabs' => 'applyAnchorTabs',
        'assign_tabs_to_recipient_id' => 'assignTabsToRecipientId',
        'display' => 'display',
        'document_base64' => 'documentBase64',
        'document_fields' => 'documentFields',
        'document_id' => 'documentId',
        'encrypted_with_key_manager' => 'encryptedWithKeyManager',
        'file_extension' => 'fileExtension',
        'file_format_hint' => 'fileFormatHint',
        'html_definition' => 'htmlDefinition',
        'include_in_download' => 'includeInDownload',
        'match_boxes' => 'matchBoxes',
        'name' => 'name',
        'order' => 'order',
        'pages' => 'pages',
        'password' => 'password',
        'pdf_form_field_option' => 'pdfFormFieldOption',
        'remote_url' => 'remoteUrl',
        'signer_must_acknowledge' => 'signerMustAcknowledge',
        'signer_must_acknowledge_use_account_default' => 'signerMustAcknowledgeUseAccountDefault',
        'tabs' => 'tabs',
        'template_locked' => 'templateLocked',
        'template_required' => 'templateRequired',
        'transform_pdf_fields' => 'transformPdfFields',
        'uri' => 'uri'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'apply_anchor_tabs' => 'setApplyAnchorTabs',
        'assign_tabs_to_recipient_id' => 'setAssignTabsToRecipientId',
        'display' => 'setDisplay',
        'document_base64' => 'setDocumentBase64',
        'document_fields' => 'setDocumentFields',
        'document_id' => 'setDocumentId',
        'encrypted_with_key_manager' => 'setEncryptedWithKeyManager',
        'file_extension' => 'setFileExtension',
        'file_format_hint' => 'setFileFormatHint',
        'html_definition' => 'setHtmlDefinition',
        'include_in_download' => 'setIncludeInDownload',
        'match_boxes' => 'setMatchBoxes',
        'name' => 'setName',
        'order' => 'setOrder',
        'pages' => 'setPages',
        'password' => 'setPassword',
        'pdf_form_field_option' => 'setPdfFormFieldOption',
        'remote_url' => 'setRemoteUrl',
        'signer_must_acknowledge' => 'setSignerMustAcknowledge',
        'signer_must_acknowledge_use_account_default' => 'setSignerMustAcknowledgeUseAccountDefault',
        'tabs' => 'setTabs',
        'template_locked' => 'setTemplateLocked',
        'template_required' => 'setTemplateRequired',
        'transform_pdf_fields' => 'setTransformPdfFields',
        'uri' => 'setUri'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'apply_anchor_tabs' => 'getApplyAnchorTabs',
        'assign_tabs_to_recipient_id' => 'getAssignTabsToRecipientId',
        'display' => 'getDisplay',
        'document_base64' => 'getDocumentBase64',
        'document_fields' => 'getDocumentFields',
        'document_id' => 'getDocumentId',
        'encrypted_with_key_manager' => 'getEncryptedWithKeyManager',
        'file_extension' => 'getFileExtension',
        'file_format_hint' => 'getFileFormatHint',
        'html_definition' => 'getHtmlDefinition',
        'include_in_download' => 'getIncludeInDownload',
        'match_boxes' => 'getMatchBoxes',
        'name' => 'getName',
        'order' => 'getOrder',
        'pages' => 'getPages',
        'password' => 'getPassword',
        'pdf_form_field_option' => 'getPdfFormFieldOption',
        'remote_url' => 'getRemoteUrl',
        'signer_must_acknowledge' => 'getSignerMustAcknowledge',
        'signer_must_acknowledge_use_account_default' => 'getSignerMustAcknowledgeUseAccountDefault',
        'tabs' => 'getTabs',
        'template_locked' => 'getTemplateLocked',
        'template_required' => 'getTemplateRequired',
        'transform_pdf_fields' => 'getTransformPdfFields',
        'uri' => 'getUri'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['apply_anchor_tabs'] = isset($data['apply_anchor_tabs']) ? $data['apply_anchor_tabs'] : null;
        $this->container['assign_tabs_to_recipient_id'] = isset($data['assign_tabs_to_recipient_id']) ? $data['assign_tabs_to_recipient_id'] : null;
        $this->container['display'] = isset($data['display']) ? $data['display'] : null;
        $this->container['document_base64'] = isset($data['document_base64']) ? $data['document_base64'] : null;
        $this->container['document_fields'] = isset($data['document_fields']) ? $data['document_fields'] : null;
        $this->container['document_id'] = isset($data['document_id']) ? $data['document_id'] : null;
        $this->container['encrypted_with_key_manager'] = isset($data['encrypted_with_key_manager']) ? $data['encrypted_with_key_manager'] : null;
        $this->container['file_extension'] = isset($data['file_extension']) ? $data['file_extension'] : null;
        $this->container['file_format_hint'] = isset($data['file_format_hint']) ? $data['file_format_hint'] : null;
        $this->container['html_definition'] = isset($data['html_definition']) ? $data['html_definition'] : null;
        $this->container['include_in_download'] = isset($data['include_in_download']) ? $data['include_in_download'] : null;
        $this->container['match_boxes'] = isset($data['match_boxes']) ? $data['match_boxes'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['order'] = isset($data['order']) ? $data['order'] : null;
        $this->container['pages'] = isset($data['pages']) ? $data['pages'] : null;
        $this->container['password'] = isset($data['password']) ? $data['password'] : null;
        $this->container['pdf_form_field_option'] = isset($data['pdf_form_field_option']) ? $data['pdf_form_field_option'] : null;
        $this->container['remote_url'] = isset($data['remote_url']) ? $data['remote_url'] : null;
        $this->container['signer_must_acknowledge'] = isset($data['signer_must_acknowledge']) ? $data['signer_must_acknowledge'] : null;
        $this->container['signer_must_acknowledge_use_account_default'] = isset($data['signer_must_acknowledge_use_account_default']) ? $data['signer_must_acknowledge_use_account_default'] : null;
        $this->container['tabs'] = isset($data['tabs']) ? $data['tabs'] : null;
        $this->container['template_locked'] = isset($data['template_locked']) ? $data['template_locked'] : null;
        $this->container['template_required'] = isset($data['template_required']) ? $data['template_required'] : null;
        $this->container['transform_pdf_fields'] = isset($data['transform_pdf_fields']) ? $data['transform_pdf_fields'] : null;
        $this->container['uri'] = isset($data['uri']) ? $data['uri'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets apply_anchor_tabs
     *
     * @return ?string
     */
    public function getApplyAnchorTabs()
    {
        return $this->container['apply_anchor_tabs'];
    }

    /**
     * Sets apply_anchor_tabs
     *
     * @param ?string $apply_anchor_tabs Reserved: TBD
     *
     * @return $this
     */
    public function setApplyAnchorTabs($apply_anchor_tabs)
    {
        $this->container['apply_anchor_tabs'] = $apply_anchor_tabs;

        return $this;
    }

    /**
     * Gets assign_tabs_to_recipient_id
     *
     * @return ?string
     */
    public function getAssignTabsToRecipientId()
    {
        return $this->container['assign_tabs_to_recipient_id'];
    }

    /**
     * Sets assign_tabs_to_recipient_id
     *
     * @param ?string $assign_tabs_to_recipient_id 
     *
     * @return $this
     */
    public function setAssignTabsToRecipientId($assign_tabs_to_recipient_id)
    {
        $this->container['assign_tabs_to_recipient_id'] = $assign_tabs_to_recipient_id;

        return $this;
    }

    /**
     * Gets display
     *
     * @return ?string
     */
    public function getDisplay()
    {
        return $this->container['display'];
    }

    /**
     * Sets display
     *
     * @param ?string $display 
     *
     * @return $this
     */
    public function setDisplay($display)
    {
        $this->container['display'] = $display;

        return $this;
    }

    /**
     * Gets document_base64
     *
     * @return ?string
     */
    public function getDocumentBase64()
    {
        return $this->container['document_base64'];
    }

    /**
     * Sets document_base64
     *
     * @param ?string $document_base64 The document's bytes. This field can be used to include a base64 version of the document bytes within an envelope definition instead of sending the document using a multi-part HTTP request. The maximum document size is smaller if this field is used due to the overhead of the base64 encoding.
     *
     * @return $this
     */
    public function setDocumentBase64($document_base64)
    {
        $this->container['document_base64'] = $document_base64;

        return $this;
    }

    /**
     * Gets document_fields
     *
     * @return \DocuSign\eSign\Model\NameValue[]
     */
    public function getDocumentFields()
    {
        return $this->container['document_fields'];
    }

    /**
     * Sets document_fields
     *
     * @param \DocuSign\eSign\Model\NameValue[] $document_fields 
     *
     * @return $this
     */
    public function setDocumentFields($document_fields)
    {
        $this->container['document_fields'] = $document_fields;

        return $this;
    }

    /**
     * Gets document_id
     *
     * @return ?string
     */
    public function getDocumentId()
    {
        return $this->container['document_id'];
    }

    /**
     * Sets document_id
     *
     * @param ?string $document_id Specifies the document ID number that the tab is placed on. This must refer to an existing Document's ID attribute.
     *
     * @return $this
     */
    public function setDocumentId($document_id)
    {
        $this->container['document_id'] = $document_id;

        return $this;
    }

    /**
     * Gets encrypted_with_key_manager
     *
     * @return ?string
     */
    public function getEncryptedWithKeyManager()
    {
        return $this->container['encrypted_with_key_manager'];
    }

    /**
     * Sets encrypted_with_key_manager
     *
     * @param ?string $encrypted_with_key_manager When set to **true**, the document is been already encrypted by the sender for use with the DocuSign Key Manager Security Appliance.
     *
     * @return $this
     */
    public function setEncryptedWithKeyManager($encrypted_with_key_manager)
    {
        $this->container['encrypted_with_key_manager'] = $encrypted_with_key_manager;

        return $this;
    }

    /**
     * Gets file_extension
     *
     * @return ?string
     */
    public function getFileExtension()
    {
        return $this->container['file_extension'];
    }

    /**
     * Sets file_extension
     *
     * @param ?string $file_extension The file extension type of the document. If the document is not a PDF it is converted to a PDF.
     *
     * @return $this
     */
    public function setFileExtension($file_extension)
    {
        $this->container['file_extension'] = $file_extension;

        return $this;
    }

    /**
     * Gets file_format_hint
     *
     * @return ?string
     */
    public function getFileFormatHint()
    {
        return $this->container['file_format_hint'];
    }

    /**
     * Sets file_format_hint
     *
     * @param ?string $file_format_hint 
     *
     * @return $this
     */
    public function setFileFormatHint($file_format_hint)
    {
        $this->container['file_format_hint'] = $file_format_hint;

        return $this;
    }

    /**
     * Gets html_definition
     *
     * @return \DocuSign\eSign\Model\DocumentHtmlDefinition
     */
    public function getHtmlDefinition()
    {
        return $this->container['html_definition'];
    }

    /**
     * Sets html_definition
     *
     * @param \DocuSign\eSign\Model\DocumentHtmlDefinition $html_definition html_definition
     *
     * @return $this
     */
    public function setHtmlDefinition($html_definition)
    {
        $this->container['html_definition'] = $html_definition;

        return $this;
    }

    /**
     * Gets include_in_download
     *
     * @return ?string
     */
    public function getIncludeInDownload()
    {
        return $this->container['include_in_download'];
    }

    /**
     * Sets include_in_download
     *
     * @param ?string $include_in_download 
     *
     * @return $this
     */
    public function setIncludeInDownload($include_in_download)
    {
        $this->container['include_in_download'] = $include_in_download;

        return $this;
    }

    /**
     * Gets match_boxes
     *
     * @return \DocuSign\eSign\Model\MatchBox[]
     */
    public function getMatchBoxes()
    {
        return $this->container['match_boxes'];
    }

    /**
     * Sets match_boxes
     *
     * @param \DocuSign\eSign\Model\MatchBox[] $match_boxes Matchboxes define areas in a document for document matching when you are creating envelopes. They are only used when you upload and edit a template.   A matchbox consists of 5 elements:  * pageNumber - The document page number  on which the matchbox will appear.  * xPosition - The x position of the matchbox on a page.  * yPosition - The y position of the matchbox on a page. * width - The width of the matchbox.  * height - The height of the matchbox.
     *
     * @return $this
     */
    public function setMatchBoxes($match_boxes)
    {
        $this->container['match_boxes'] = $match_boxes;

        return $this;
    }

    /**
     * Gets name
     *
     * @return ?string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param ?string $name 
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets order
     *
     * @return ?string
     */
    public function getOrder()
    {
        return $this->container['order'];
    }

    /**
     * Sets order
     *
     * @param ?string $order 
     *
     * @return $this
     */
    public function setOrder($order)
    {
        $this->container['order'] = $order;

        return $this;
    }

    /**
     * Gets pages
     *
     * @return ?string
     */
    public function getPages()
    {
        return $this->container['pages'];
    }

    /**
     * Sets pages
     *
     * @param ?string $pages 
     *
     * @return $this
     */
    public function setPages($pages)
    {
        $this->container['pages'] = $pages;

        return $this;
    }

    /**
     * Gets password
     *
     * @return ?string
     */
    public function getPassword()
    {
        return $this->container['password'];
    }

    /**
     * Sets password
     *
     * @param ?string $password 
     *
     * @return $this
     */
    public function setPassword($password)
    {
        $this->container['password'] = $password;

        return $this;
    }

    /**
     * Gets pdf_form_field_option
     *
     * @return ?string
     */
    public function getPdfFormFieldOption()
    {
        return $this->container['pdf_form_field_option'];
    }

    /**
     * Sets pdf_form_field_option
     *
     * @param ?string $pdf_form_field_option 
     *
     * @return $this
     */
    public function setPdfFormFieldOption($pdf_form_field_option)
    {
        $this->container['pdf_form_field_option'] = $pdf_form_field_option;

        return $this;
    }

    /**
     * Gets remote_url
     *
     * @return ?string
     */
    public function getRemoteUrl()
    {
        return $this->container['remote_url'];
    }

    /**
     * Sets remote_url
     *
     * @param ?string $remote_url The file id from the cloud storage service where the document is located. This information is returned using [ML:GET /folders] or [ML:/folders/{folderid}].
     *
     * @return $this
     */
    public function setRemoteUrl($remote_url)
    {
        $this->container['remote_url'] = $remote_url;

        return $this;
    }

    /**
     * Gets signer_must_acknowledge
     *
     * @return ?string
     */
    public function getSignerMustAcknowledge()
    {
        return $this->container['signer_must_acknowledge'];
    }

    /**
     * Sets signer_must_acknowledge
     *
     * @param ?string $signer_must_acknowledge 
     *
     * @return $this
     */
    public function setSignerMustAcknowledge($signer_must_acknowledge)
    {
        $this->container['signer_must_acknowledge'] = $signer_must_acknowledge;

        return $this;
    }

    /**
     * Gets signer_must_acknowledge_use_account_default
     *
     * @return ?bool
     */
    public function getSignerMustAcknowledgeUseAccountDefault()
    {
        return $this->container['signer_must_acknowledge_use_account_default'];
    }

    /**
     * Sets signer_must_acknowledge_use_account_default
     *
     * @param ?bool $signer_must_acknowledge_use_account_default 
     *
     * @return $this
     */
    public function setSignerMustAcknowledgeUseAccountDefault($signer_must_acknowledge_use_account_default)
    {
        $this->container['signer_must_acknowledge_use_account_default'] = $signer_must_acknowledge_use_account_default;

        return $this;
    }

    /**
     * Gets tabs
     *
     * @return \DocuSign\eSign\Model\Tabs
     */
    public function getTabs()
    {
        return $this->container['tabs'];
    }

    /**
     * Sets tabs
     *
     * @param \DocuSign\eSign\Model\Tabs $tabs tabs
     *
     * @return $this
     */
    public function setTabs($tabs)
    {
        $this->container['tabs'] = $tabs;

        return $this;
    }

    /**
     * Gets template_locked
     *
     * @return ?string
     */
    public function getTemplateLocked()
    {
        return $this->container['template_locked'];
    }

    /**
     * Sets template_locked
     *
     * @param ?string $template_locked When set to **true**, the sender cannot change any attributes of the recipient. Used only when working with template recipients.
     *
     * @return $this
     */
    public function setTemplateLocked($template_locked)
    {
        $this->container['template_locked'] = $template_locked;

        return $this;
    }

    /**
     * Gets template_required
     *
     * @return ?string
     */
    public function getTemplateRequired()
    {
        return $this->container['template_required'];
    }

    /**
     * Sets template_required
     *
     * @param ?string $template_required When set to **true**, the sender may not remove the recipient. Used only when working with template recipients.
     *
     * @return $this
     */
    public function setTemplateRequired($template_required)
    {
        $this->container['template_required'] = $template_required;

        return $this;
    }

    /**
     * Gets transform_pdf_fields
     *
     * @return ?string
     */
    public function getTransformPdfFields()
    {
        return $this->container['transform_pdf_fields'];
    }

    /**
     * Sets transform_pdf_fields
     *
     * @param ?string $transform_pdf_fields When set to **true**, PDF form field data is transformed into document tab values when the PDF form field name matches the DocuSign custom tab tabLabel. The resulting PDF form data is also returned in the PDF meta data when requesting the document PDF. See the [ML:Transform PDF Fields] section for more information about how fields are transformed into DocuSign tabs.
     *
     * @return $this
     */
    public function setTransformPdfFields($transform_pdf_fields)
    {
        $this->container['transform_pdf_fields'] = $transform_pdf_fields;

        return $this;
    }

    /**
     * Gets uri
     *
     * @return ?string
     */
    public function getUri()
    {
        return $this->container['uri'];
    }

    /**
     * Sets uri
     *
     * @param ?string $uri 
     *
     * @return $this
     */
    public function setUri($uri)
    {
        $this->container['uri'] = $uri;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}

