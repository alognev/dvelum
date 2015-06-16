<?php
class Ext_Property_Form_Field_Htmleditor extends Ext_Property_Component
{
	public $afterIFrameTpl = self::Object;
	public $afterTextAreaTpl = self::Object;
	public $allowDomMove = self::Boolean;
	public $autoCreate = self::String;
	public $beforeIFrameTpl = self::Object;
	public $beforeTextAreaTpl = self::Object;
	public $createLinkText = self::String;
	public $defaultButtonUI = self::String;
	public $defaultLinkValue = self::String;
	public $defaultValue = self::String;
	public $enableAlignments = self::Boolean;
	public $enableColors = self::Boolean;
	public $enableFont = self::Boolean;
	public $enableFontSize = self::Boolean;
	public $enableFormat = self::Boolean;
	public $enableLinks = self::Boolean;
	public $enableLists = self::Boolean;
	public $enableSourceEdit = self::Boolean;
	public $fieldCls = self::String;
	public $fontFamilies = self::Object;
	public $iframeAttrTpl = self::Object;
	public $inputType = self::String;
	public $invalidCls = self::String;
	public $invalidText = self::String;
	public $readOnly = self::String;

	static public $extend = 'Ext.form.field.HtmlEditor';
	static public $xtype = 'htmleditor';
}