<?php

/*!* !insert_autogen_warning */

class ComposeTemplateParser extends SSTemplateParser {
				
	/*!* ComposeTemplateParser

	Template: (Comment | Translate | If | Require | CacheBlock | UncachedBlock | OldI18NTag | Include | Compose | ComposeShort | Composed | ClosedBlock |
		OpenBlock | MalformedBlock | Injection | Text)+
	
	# Rule copied from SSTemplateParser to allow for extension
	TopTemplate extends Template (TemplateMatcher = Template); MalformedBlock => MalformedBlock | MismatchedEndBlock
	*/

	/*!*
		
	ComposedArgumentString: / (\\\\ | \\. | [^$q\\]) /
		
	ComposedArgumentInjection: BracketInjection | SimpleInjection

	ComposedArgumentQuotedString: q:/['"]/ ( ComposedArgumentInjection | ComposedArgumentString )* '$q'

	# Rule copied from SSTemplateParser to allow for extension
	Argument:
		:DollarMarkedLookup |
		:QuotedString |
		:Lookup !(< FreeString)|
		:FreeString
	
	ComposedArgument extends Argument:
		:DollarMarkedLookup |
		:ComposedArgumentQuotedString |
		:Lookup !(< FreeString)|
		:FreeString
		
	*/
	function ComposedArgumentInjection_STR(&$res, $sub) {
		$res['php'] = '\'.'.str_replace('$$FINAL', 'XML_val', $sub['Lookup']['php']).'.\'';
	}
	    
	function ComposedArgumentQuotedString_ComposedArgumentString(&$res, $sub) {
		$res['php'] .= $sub['text'];
	}
	    
	function ComposedArgumentQuotedString_ComposedArgumentInjection(&$res, $sub) {
		$res['php'] .= $sub['php'];
	}

	function ComposedArgument_ComposedArgumentQuotedString(&$res, $sub) {
		$res['ArgumentMode'] = 'string';
		$res['php'] = '\'' .$sub['php'] . '\'';
	}

	/*!*

	# An argument that can be passed through to an included template doesn't allow free stings

	
	# Rule copied from SSTemplateParser to allow for extension
	NamedArgument: Name:Word "=" Value:Argument
	ComposedNamedArgument extends NamedArgument: Name:Word "=" Value:ComposedArgument

	*/

	/*!*

	# The compose tag syntax allowing for including template with an HTML-like syntax
	# Also used to allow template composition where a template content is passed into another
	# template using the following syntax: <:TemplateName>Some content</:TemplateName
	
	Compose: '<:' Template:Word < (ComposedNamedArgument ( " " ComposedNamedArgument )*)? > '>' Composed:$TemplateMatcher?
		'</:' '$Template' '>'
	ComposeShort extends Compose: '<:' Template:Word < (ComposedNamedArgument ( " " ComposedNamedArgument )*)? > '/>'
	*/
	function Compose__construct(&$res){
		$res['arguments'] = array();
	}

	function Compose_ComposedNamedArgument(&$res, $sub){
		$res['arguments'][] = $sub['php'];
	}

	function Compose__finalise(&$res){
		$template = $res['Template']['text'];
		$arguments = $res['arguments'];

		if (isset($res['Composed'])) {
			$composed = 'function () use ($scope) { $val = \'\'; '.$res['Composed']['php'].' return $val; }';
		} else {
			$composed = "false";
		}

		$res['php'] .= '$val .= SSViewer::execute_template(\''.$template.'\', $scope->getItem(),' . 
			'array("Composed" => '.$composed.','.implode(',', $arguments)."), \$scope);\n";

		if($this->includeDebuggingComments) { // Add include filename comments on dev sites
			$res['php'] =
				'$val .= \'<!-- compose '.addslashes($template).' -->\';'. "\n".
				$res['php'].
				'$val .= \'<!-- end compose '.addslashes($template).' -->\';'. "\n";
		}
	}

	/*!*

	# The composed tag

	Composed: "<%" < "composed" > "%>"
	*/

	function Composed__finalise(&$res){
		$res['php'] = "\$val .= (\$composed = \$scope->locally()->obj('Composed', null, true)->getItem()) ? \$composed() : '';";
	}

	/*!*
		 	 	 
	NotBlockTag: "end_" | (("if" | "else_if" | "else" | "require" | "cached" | "uncached" | "cacheblock" | "include" | "composed")])
	*/

	/*!*
				
	# Text matches anything that isn't a template command (not an injection, block of any kind or comment) 
		 	 	 
	Text: (
			# Any set of characters that aren't potentially a control mark or an escaped character 
			/ [^<${\\]+ / |
			# An escaped character
			/ (\\.) / |
			# A '<' that isn't the start of a block tag
			'<' !/ % | : | \/: / |
			# A '$' that isn't the start of an injection
			'$' !(/[A-Za-z_]/) |
			# A '{' that isn't the start of an injection
			'{' !'$' |
			# A '{$' that isn't the start of an injection
			'{$' !(/[A-Za-z_]/)
		)+
	*/
}
?>