<?php
class Ext_Property_Component_Field_System_Related extends Ext_Property_Panel
{
	public $fieldName = self::String;
	
	static public $extend = 'app.relatedGridPanel';
	static public $xtype = 'relatedgridpanel';
}