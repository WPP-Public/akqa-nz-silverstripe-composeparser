<?php

/*
WARNING: This file has been machine generated. Do not edit it, or your changes will be overwritten next time it is compiled.
*/




// We want this to work when run by hand too
if (defined('THIRDPARTY_PATH')) {
	require_once(THIRDPARTY_PATH . '/php-peg/Parser.php');
}
else {
	$base = dirname(__FILE__);
	require_once($base.'/../thirdparty/php-peg/Parser.php');
}

/**
 * This is the exception raised when failing to parse a template. Note that we don't currently do any static analysis,
 * so we can't know if the template will run, just if it's malformed. It also won't catch mistakes that still look
 * valid.
 */
class SSTemplateParseException extends Exception {
				
	function __construct($message, $parser) {
		$prior = substr($parser->string, 0, $parser->pos);
								
		preg_match_all('/\r\n|\r|\n/', $prior, $matches);
		$line = count($matches[0])+1;
								
		parent::__construct("Parse error in template on line $line. Error was: $message");
	}
				
}

/**
  * This is the parser for the SilverStripe template language. It gets called on a string and uses a php-peg parser
  * to match that string against the language structure, building up the PHP code to execute that structure as it
  * parses
  * 
  * The $result array that is built up as part of the parsing (see thirdparty/php-peg/README.md for more on how
  * parsers build results) has one special member, 'php', which contains the php equivalent of that part of the
  * template tree.
  * 
  * Some match rules generate alternate php, or other variations, so check the per-match documentation too.
  * 
  * Terms used:
  * 
  * Marked: A string or lookup in the template that has been explictly marked as such - lookups by prepending with
  * "$" (like $Foo.Bar), strings by wrapping with single or double quotes ('Foo' or "Foo")
  * 
  * Bare: The opposite of marked. An argument that has to has it's type inferred by usage and 2.4 defaults.
  * 
  * Example of using a bare argument for a loop block: <% loop Foo %>
  * 
  * Block: One of two SS template structures. The special characters "<%" and "%>" are used to wrap the opening and
  * (required or forbidden depending on which block exactly) closing block marks.
  * 
  * Open Block: An SS template block that doesn't wrap any content or have a closing end tag (in fact, a closing end
  * tag is forbidden)
  * 
  * Closed Block: An SS template block that wraps content, and requires a counterpart <% end_blockname %> tag
  * 
  * Angle Bracket: angle brackets "<" and ">" are used to eat whitespace between template elements
  * N: eats white space including newlines (using in legacy _t support)
  */
class ComposeTemplateParser extends Parser {

	/**
	 * @var bool - Set true by ComposeTemplateParser::compileString if the template should include comments intended
	 * for debugging (template source, included files, etc)
	 */
	protected $includeDebuggingComments = false;
				
	/**
	 * Override the function that constructs the result arrays to also prepare a 'php' item in the array
	 */
	function construct($matchrule, $name, $arguments = null) {
		$res = parent::construct($matchrule, $name, $arguments);
		if (!isset($res['php'])) $res['php'] = '';
		return $res;
	}
				
	/* Template: (Comment | Translate | If | Require | CacheBlock | UncachedBlock | OldI18NTag | Include | Compose | ComposeShort | Composed | ClosedBlock |
	OpenBlock | MalformedBlock | Injection | Text)+ */
	protected $match_Template_typestack = array('Template');
	function match_Template ($stack = array()) {
		$matchrule = "Template"; $result = $this->construct($matchrule, $matchrule, null);
		$count = 0;
		while (true) {
			$res_62 = $result;
			$pos_62 = $this->pos;
			$_61 = NULL;
			do {
				$_59 = NULL;
				do {
					$res_0 = $result;
					$pos_0 = $this->pos;
					$matcher = 'match_'.'Comment'; $key = $matcher; $pos = $this->pos;
					$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
					if ($subres !== FALSE) {
						$this->store( $result, $subres );
						$_59 = TRUE; break;
					}
					$result = $res_0;
					$this->pos = $pos_0;
					$_57 = NULL;
					do {
						$res_2 = $result;
						$pos_2 = $this->pos;
						$matcher = 'match_'.'Translate'; $key = $matcher; $pos = $this->pos;
						$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
						if ($subres !== FALSE) {
							$this->store( $result, $subres );
							$_57 = TRUE; break;
						}
						$result = $res_2;
						$this->pos = $pos_2;
						$_55 = NULL;
						do {
							$res_4 = $result;
							$pos_4 = $this->pos;
							$matcher = 'match_'.'If'; $key = $matcher; $pos = $this->pos;
							$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
							if ($subres !== FALSE) {
								$this->store( $result, $subres );
								$_55 = TRUE; break;
							}
							$result = $res_4;
							$this->pos = $pos_4;
							$_53 = NULL;
							do {
								$res_6 = $result;
								$pos_6 = $this->pos;
								$matcher = 'match_'.'Require'; $key = $matcher; $pos = $this->pos;
								$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
								if ($subres !== FALSE) {
									$this->store( $result, $subres );
									$_53 = TRUE; break;
								}
								$result = $res_6;
								$this->pos = $pos_6;
								$_51 = NULL;
								do {
									$res_8 = $result;
									$pos_8 = $this->pos;
									$matcher = 'match_'.'CacheBlock'; $key = $matcher; $pos = $this->pos;
									$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
									if ($subres !== FALSE) {
										$this->store( $result, $subres );
										$_51 = TRUE; break;
									}
									$result = $res_8;
									$this->pos = $pos_8;
									$_49 = NULL;
									do {
										$res_10 = $result;
										$pos_10 = $this->pos;
										$matcher = 'match_'.'UncachedBlock'; $key = $matcher; $pos = $this->pos;
										$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
										if ($subres !== FALSE) {
											$this->store( $result, $subres );
											$_49 = TRUE; break;
										}
										$result = $res_10;
										$this->pos = $pos_10;
										$_47 = NULL;
										do {
											$res_12 = $result;
											$pos_12 = $this->pos;
											$matcher = 'match_'.'OldI18NTag'; $key = $matcher; $pos = $this->pos;
											$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
											if ($subres !== FALSE) {
												$this->store( $result, $subres );
												$_47 = TRUE; break;
											}
											$result = $res_12;
											$this->pos = $pos_12;
											$_45 = NULL;
											do {
												$res_14 = $result;
												$pos_14 = $this->pos;
												$matcher = 'match_'.'Include'; $key = $matcher; $pos = $this->pos;
												$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
												if ($subres !== FALSE) {
													$this->store( $result, $subres );
													$_45 = TRUE; break;
												}
												$result = $res_14;
												$this->pos = $pos_14;
												$_43 = NULL;
												do {
													$res_16 = $result;
													$pos_16 = $this->pos;
													$matcher = 'match_'.'Compose'; $key = $matcher; $pos = $this->pos;
													$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
													if ($subres !== FALSE) {
														$this->store( $result, $subres );
														$_43 = TRUE; break;
													}
													$result = $res_16;
													$this->pos = $pos_16;
													$_41 = NULL;
													do {
														$res_18 = $result;
														$pos_18 = $this->pos;
														$matcher = 'match_'.'ComposeShort'; $key = $matcher; $pos = $this->pos;
														$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
														if ($subres !== FALSE) {
															$this->store( $result, $subres );
															$_41 = TRUE; break;
														}
														$result = $res_18;
														$this->pos = $pos_18;
														$_39 = NULL;
														do {
															$res_20 = $result;
															$pos_20 = $this->pos;
															$matcher = 'match_'.'Composed'; $key = $matcher; $pos = $this->pos;
															$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
															if ($subres !== FALSE) {
																$this->store( $result, $subres );
																$_39 = TRUE; break;
															}
															$result = $res_20;
															$this->pos = $pos_20;
															$_37 = NULL;
															do {
																$res_22 = $result;
																$pos_22 = $this->pos;
																$matcher = 'match_'.'ClosedBlock'; $key = $matcher; $pos = $this->pos;
																$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
																if ($subres !== FALSE) {
																	$this->store( $result, $subres );
																	$_37 = TRUE; break;
																}
																$result = $res_22;
																$this->pos = $pos_22;
																$_35 = NULL;
																do {
																	$res_24 = $result;
																	$pos_24 = $this->pos;
																	$matcher = 'match_'.'OpenBlock'; $key = $matcher; $pos = $this->pos;
																	$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
																	if ($subres !== FALSE) {
																		$this->store( $result, $subres );
																		$_35 = TRUE; break;
																	}
																	$result = $res_24;
																	$this->pos = $pos_24;
																	$_33 = NULL;
																	do {
																		$res_26 = $result;
																		$pos_26 = $this->pos;
																		$matcher = 'match_'.'MalformedBlock'; $key = $matcher; $pos = $this->pos;
																		$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
																		if ($subres !== FALSE) {
																			$this->store( $result, $subres );
																			$_33 = TRUE; break;
																		}
																		$result = $res_26;
																		$this->pos = $pos_26;
																		$_31 = NULL;
																		do {
																			$res_28 = $result;
																			$pos_28 = $this->pos;
																			$matcher = 'match_'.'Injection'; $key = $matcher; $pos = $this->pos;
																			$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
																			if ($subres !== FALSE) {
																				$this->store( $result, $subres );
																				$_31 = TRUE; break;
																			}
																			$result = $res_28;
																			$this->pos = $pos_28;
																			$matcher = 'match_'.'Text'; $key = $matcher; $pos = $this->pos;
																			$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
																			if ($subres !== FALSE) {
																				$this->store( $result, $subres );
																				$_31 = TRUE; break;
																			}
																			$result = $res_28;
																			$this->pos = $pos_28;
																			$_31 = FALSE; break;
																		}
																		while(0);
																		if( $_31 === TRUE ) { $_33 = TRUE; break; }
																		$result = $res_26;
																		$this->pos = $pos_26;
																		$_33 = FALSE; break;
																	}
																	while(0);
																	if( $_33 === TRUE ) { $_35 = TRUE; break; }
																	$result = $res_24;
																	$this->pos = $pos_24;
																	$_35 = FALSE; break;
																}
																while(0);
																if( $_35 === TRUE ) { $_37 = TRUE; break; }
																$result = $res_22;
																$this->pos = $pos_22;
																$_37 = FALSE; break;
															}
															while(0);
															if( $_37 === TRUE ) { $_39 = TRUE; break; }
															$result = $res_20;
															$this->pos = $pos_20;
															$_39 = FALSE; break;
														}
														while(0);
														if( $_39 === TRUE ) { $_41 = TRUE; break; }
														$result = $res_18;
														$this->pos = $pos_18;
														$_41 = FALSE; break;
													}
													while(0);
													if( $_41 === TRUE ) { $_43 = TRUE; break; }
													$result = $res_16;
													$this->pos = $pos_16;
													$_43 = FALSE; break;
												}
												while(0);
												if( $_43 === TRUE ) { $_45 = TRUE; break; }
												$result = $res_14;
												$this->pos = $pos_14;
												$_45 = FALSE; break;
											}
											while(0);
											if( $_45 === TRUE ) { $_47 = TRUE; break; }
											$result = $res_12;
											$this->pos = $pos_12;
											$_47 = FALSE; break;
										}
										while(0);
										if( $_47 === TRUE ) { $_49 = TRUE; break; }
										$result = $res_10;
										$this->pos = $pos_10;
										$_49 = FALSE; break;
									}
									while(0);
									if( $_49 === TRUE ) { $_51 = TRUE; break; }
									$result = $res_8;
									$this->pos = $pos_8;
									$_51 = FALSE; break;
								}
								while(0);
								if( $_51 === TRUE ) { $_53 = TRUE; break; }
								$result = $res_6;
								$this->pos = $pos_6;
								$_53 = FALSE; break;
							}
							while(0);
							if( $_53 === TRUE ) { $_55 = TRUE; break; }
							$result = $res_4;
							$this->pos = $pos_4;
							$_55 = FALSE; break;
						}
						while(0);
						if( $_55 === TRUE ) { $_57 = TRUE; break; }
						$result = $res_2;
						$this->pos = $pos_2;
						$_57 = FALSE; break;
					}
					while(0);
					if( $_57 === TRUE ) { $_59 = TRUE; break; }
					$result = $res_0;
					$this->pos = $pos_0;
					$_59 = FALSE; break;
				}
				while(0);
				if( $_59 === FALSE) { $_61 = FALSE; break; }
				$_61 = TRUE; break;
			}
			while(0);
			if( $_61 === FALSE) {
				$result = $res_62;
				$this->pos = $pos_62;
				unset( $res_62 );
				unset( $pos_62 );
				break;
			}
			$count += 1;
		}
		if ($count > 0) { return $this->finalise($result); }
		else { return FALSE; }
	}



	function Template_STR(&$res, $sub) {
		$res['php'] .= $sub['php'] . PHP_EOL ;
	}
				
	/* Word: / [A-Za-z_] [A-Za-z0-9_]* / */
	protected $match_Word_typestack = array('Word');
	function match_Word ($stack = array()) {
		$matchrule = "Word"; $result = $this->construct($matchrule, $matchrule, null);
		if (( $subres = $this->rx( '/ [A-Za-z_] [A-Za-z0-9_]* /' ) ) !== FALSE) {
			$result["text"] .= $subres;
			return $this->finalise($result);
		}
		else { return FALSE; }
	}


	/* Number: / [0-9]+ / */
	protected $match_Number_typestack = array('Number');
	function match_Number ($stack = array()) {
		$matchrule = "Number"; $result = $this->construct($matchrule, $matchrule, null);
		if (( $subres = $this->rx( '/ [0-9]+ /' ) ) !== FALSE) {
			$result["text"] .= $subres;
			return $this->finalise($result);
		}
		else { return FALSE; }
	}


	/* Value: / [A-Za-z0-9_]+ / */
	protected $match_Value_typestack = array('Value');
	function match_Value ($stack = array()) {
		$matchrule = "Value"; $result = $this->construct($matchrule, $matchrule, null);
		if (( $subres = $this->rx( '/ [A-Za-z0-9_]+ /' ) ) !== FALSE) {
			$result["text"] .= $subres;
			return $this->finalise($result);
		}
		else { return FALSE; }
	}


	/* CallArguments: :Argument ( < "," < :Argument )* */
	protected $match_CallArguments_typestack = array('CallArguments');
	function match_CallArguments ($stack = array()) {
		$matchrule = "CallArguments"; $result = $this->construct($matchrule, $matchrule, null);
		$_73 = NULL;
		do {
			$matcher = 'match_'.'Argument'; $key = $matcher; $pos = $this->pos;
			$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
			if ($subres !== FALSE) {
				$this->store( $result, $subres, "Argument" );
			}
			else { $_73 = FALSE; break; }
			while (true) {
				$res_72 = $result;
				$pos_72 = $this->pos;
				$_71 = NULL;
				do {
					if (( $subres = $this->whitespace(  ) ) !== FALSE) { $result["text"] .= $subres; }
					if (substr($this->string,$this->pos,1) == ',') {
						$this->pos += 1;
						$result["text"] .= ',';
					}
					else { $_71 = FALSE; break; }
					if (( $subres = $this->whitespace(  ) ) !== FALSE) { $result["text"] .= $subres; }
					$matcher = 'match_'.'Argument'; $key = $matcher; $pos = $this->pos;
					$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
					if ($subres !== FALSE) {
						$this->store( $result, $subres, "Argument" );
					}
					else { $_71 = FALSE; break; }
					$_71 = TRUE; break;
				}
				while(0);
				if( $_71 === FALSE) {
					$result = $res_72;
					$this->pos = $pos_72;
					unset( $res_72 );
					unset( $pos_72 );
					break;
				}
			}
			$_73 = TRUE; break;
		}
		while(0);
		if( $_73 === TRUE ) { return $this->finalise($result); }
		if( $_73 === FALSE) { return FALSE; }
	}




	/** 
	 * Values are bare words in templates, but strings in PHP. We rely on PHP's type conversion to back-convert
	 * strings to numbers when needed.
	 */
	function CallArguments_Argument(&$res, $sub) {
		if (!empty($res['php'])) $res['php'] .= ', ';
								
		$res['php'] .= ($sub['ArgumentMode'] == 'default') ? $sub['string_php'] : 
			str_replace('$$FINAL', 'XML_val', $sub['php']);
	}

	/* Call: Method:Word ( "(" < :CallArguments? > ")" )? */
	protected $match_Call_typestack = array('Call');
	function match_Call ($stack = array()) {
		$matchrule = "Call"; $result = $this->construct($matchrule, $matchrule, null);
		$_83 = NULL;
		do {
			$matcher = 'match_'.'Word'; $key = $matcher; $pos = $this->pos;
			$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
			if ($subres !== FALSE) {
				$this->store( $result, $subres, "Method" );
			}
			else { $_83 = FALSE; break; }
			$res_82 = $result;
			$pos_82 = $this->pos;
			$_81 = NULL;
			do {
				if (substr($this->string,$this->pos,1) == '(') {
					$this->pos += 1;
					$result["text"] .= '(';
				}
				else { $_81 = FALSE; break; }
				if (( $subres = $this->whitespace(  ) ) !== FALSE) { $result["text"] .= $subres; }
				$res_78 = $result;
				$pos_78 = $this->pos;
				$matcher = 'match_'.'CallArguments'; $key = $matcher; $pos = $this->pos;
				$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
				if ($subres !== FALSE) {
					$this->store( $result, $subres, "CallArguments" );
				}
				else {
					$result = $res_78;
					$this->pos = $pos_78;
					unset( $res_78 );
					unset( $pos_78 );
				}
				if (( $subres = $this->whitespace(  ) ) !== FALSE) { $result["text"] .= $subres; }
				if (substr($this->string,$this->pos,1) == ')') {
					$this->pos += 1;
					$result["text"] .= ')';
				}
				else { $_81 = FALSE; break; }
				$_81 = TRUE; break;
			}
			while(0);
			if( $_81 === FALSE) {
				$result = $res_82;
				$this->pos = $pos_82;
				unset( $res_82 );
				unset( $pos_82 );
			}
			$_83 = TRUE; break;
		}
		while(0);
		if( $_83 === TRUE ) { return $this->finalise($result); }
		if( $_83 === FALSE) { return FALSE; }
	}


	/* LookupStep: :Call &"." */
	protected $match_LookupStep_typestack = array('LookupStep');
	function match_LookupStep ($stack = array()) {
		$matchrule = "LookupStep"; $result = $this->construct($matchrule, $matchrule, null);
		$_87 = NULL;
		do {
			$matcher = 'match_'.'Call'; $key = $matcher; $pos = $this->pos;
			$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
			if ($subres !== FALSE) {
				$this->store( $result, $subres, "Call" );
			}
			else { $_87 = FALSE; break; }
			$res_86 = $result;
			$pos_86 = $this->pos;
			if (substr($this->string,$this->pos,1) == '.') {
				$this->pos += 1;
				$result["text"] .= '.';
				$result = $res_86;
				$this->pos = $pos_86;
			}
			else {
				$result = $res_86;
				$this->pos = $pos_86;
				$_87 = FALSE; break;
			}
			$_87 = TRUE; break;
		}
		while(0);
		if( $_87 === TRUE ) { return $this->finalise($result); }
		if( $_87 === FALSE) { return FALSE; }
	}


	/* LastLookupStep: :Call */
	protected $match_LastLookupStep_typestack = array('LastLookupStep');
	function match_LastLookupStep ($stack = array()) {
		$matchrule = "LastLookupStep"; $result = $this->construct($matchrule, $matchrule, null);
		$matcher = 'match_'.'Call'; $key = $matcher; $pos = $this->pos;
		$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
		if ($subres !== FALSE) {
			$this->store( $result, $subres, "Call" );
			return $this->finalise($result);
		}
		else { return FALSE; }
	}


	/* Lookup: LookupStep ("." LookupStep)* "." LastLookupStep | LastLookupStep */
	protected $match_Lookup_typestack = array('Lookup');
	function match_Lookup ($stack = array()) {
		$matchrule = "Lookup"; $result = $this->construct($matchrule, $matchrule, null);
		$_101 = NULL;
		do {
			$res_90 = $result;
			$pos_90 = $this->pos;
			$_98 = NULL;
			do {
				$matcher = 'match_'.'LookupStep'; $key = $matcher; $pos = $this->pos;
				$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
				if ($subres !== FALSE) { $this->store( $result, $subres ); }
				else { $_98 = FALSE; break; }
				while (true) {
					$res_95 = $result;
					$pos_95 = $this->pos;
					$_94 = NULL;
					do {
						if (substr($this->string,$this->pos,1) == '.') {
							$this->pos += 1;
							$result["text"] .= '.';
						}
						else { $_94 = FALSE; break; }
						$matcher = 'match_'.'LookupStep'; $key = $matcher; $pos = $this->pos;
						$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
						if ($subres !== FALSE) {
							$this->store( $result, $subres );
						}
						else { $_94 = FALSE; break; }
						$_94 = TRUE; break;
					}
					while(0);
					if( $_94 === FALSE) {
						$result = $res_95;
						$this->pos = $pos_95;
						unset( $res_95 );
						unset( $pos_95 );
						break;
					}
				}
				if (substr($this->string,$this->pos,1) == '.') {
					$this->pos += 1;
					$result["text"] .= '.';
				}
				else { $_98 = FALSE; break; }
				$matcher = 'match_'.'LastLookupStep'; $key = $matcher; $pos = $this->pos;
				$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
				if ($subres !== FALSE) { $this->store( $result, $subres ); }
				else { $_98 = FALSE; break; }
				$_98 = TRUE; break;
			}
			while(0);
			if( $_98 === TRUE ) { $_101 = TRUE; break; }
			$result = $res_90;
			$this->pos = $pos_90;
			$matcher = 'match_'.'LastLookupStep'; $key = $matcher; $pos = $this->pos;
			$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
			if ($subres !== FALSE) {
				$this->store( $result, $subres );
				$_101 = TRUE; break;
			}
			$result = $res_90;
			$this->pos = $pos_90;
			$_101 = FALSE; break;
		}
		while(0);
		if( $_101 === TRUE ) { return $this->finalise($result); }
		if( $_101 === FALSE) { return FALSE; }
	}



				
	function Lookup__construct(&$res) {
		$res['php'] = '$scope->locally()';
		$res['LookupSteps'] = array();
	}
				
	/** 
	 * The basic generated PHP of LookupStep and LastLookupStep is the same, except that LookupStep calls 'obj' to 
	 * get the next ViewableData in the sequence, and LastLookupStep calls different methods (XML_val, hasValue, obj)
	 * depending on the context the lookup is used in.
	 */
	function Lookup_AddLookupStep(&$res, $sub, $method) {
		$res['LookupSteps'][] = $sub;
								
		$property = $sub['Call']['Method']['text'];
								
		if (isset($sub['Call']['CallArguments']) && $arguments = $sub['Call']['CallArguments']['php']) {
			$res['php'] .= "->$method('$property', array($arguments), true)";
		}
		else {
			$res['php'] .= "->$method('$property', null, true)";
		}
	}

	function Lookup_LookupStep(&$res, $sub) {
		$this->Lookup_AddLookupStep($res, $sub, 'obj');
	}

	function Lookup_LastLookupStep(&$res, $sub) {
		$this->Lookup_AddLookupStep($res, $sub, '$$FINAL');
	}


	/* Translate: "<%t" < Entity < (Default:QuotedString)? < (!("is" "=") < "is" < Context:QuotedString)? <
	(InjectionVariables)? > "%>" */
	protected $match_Translate_typestack = array('Translate');
	function match_Translate ($stack = array()) {
		$matchrule = "Translate"; $result = $this->construct($matchrule, $matchrule, null);
		$_127 = NULL;
		do {
			if (( $subres = $this->literal( '<%t' ) ) !== FALSE) { $result["text"] .= $subres; }
			else { $_127 = FALSE; break; }
			if (( $subres = $this->whitespace(  ) ) !== FALSE) { $result["text"] .= $subres; }
			$matcher = 'match_'.'Entity'; $key = $matcher; $pos = $this->pos;
			$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
			if ($subres !== FALSE) { $this->store( $result, $subres ); }
			else { $_127 = FALSE; break; }
			if (( $subres = $this->whitespace(  ) ) !== FALSE) { $result["text"] .= $subres; }
			$res_109 = $result;
			$pos_109 = $this->pos;
			$_108 = NULL;
			do {
				$matcher = 'match_'.'QuotedString'; $key = $matcher; $pos = $this->pos;
				$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
				if ($subres !== FALSE) {
					$this->store( $result, $subres, "Default" );
				}
				else { $_108 = FALSE; break; }
				$_108 = TRUE; break;
			}
			while(0);
			if( $_108 === FALSE) {
				$result = $res_109;
				$this->pos = $pos_109;
				unset( $res_109 );
				unset( $pos_109 );
			}
			if (( $subres = $this->whitespace(  ) ) !== FALSE) { $result["text"] .= $subres; }
			$res_120 = $result;
			$pos_120 = $this->pos;
			$_119 = NULL;
			do {
				$res_114 = $result;
				$pos_114 = $this->pos;
				$_113 = NULL;
				do {
					if (( $subres = $this->literal( 'is' ) ) !== FALSE) { $result["text"] .= $subres; }
					else { $_113 = FALSE; break; }
					if (substr($this->string,$this->pos,1) == '=') {
						$this->pos += 1;
						$result["text"] .= '=';
					}
					else { $_113 = FALSE; break; }
					$_113 = TRUE; break;
				}
				while(0);
				if( $_113 === TRUE ) {
					$result = $res_114;
					$this->pos = $pos_114;
					$_119 = FALSE; break;
				}
				if( $_113 === FALSE) {
					$result = $res_114;
					$this->pos = $pos_114;
				}
				if (( $subres = $this->whitespace(  ) ) !== FALSE) { $result["text"] .= $subres; }
				if (( $subres = $this->literal( 'is' ) ) !== FALSE) { $result["text"] .= $subres; }
				else { $_119 = FALSE; break; }
				if (( $subres = $this->whitespace(  ) ) !== FALSE) { $result["text"] .= $subres; }
				$matcher = 'match_'.'QuotedString'; $key = $matcher; $pos = $this->pos;
				$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
				if ($subres !== FALSE) {
					$this->store( $result, $subres, "Context" );
				}
				else { $_119 = FALSE; break; }
				$_119 = TRUE; break;
			}
			while(0);
			if( $_119 === FALSE) {
				$result = $res_120;
				$this->pos = $pos_120;
				unset( $res_120 );
				unset( $pos_120 );
			}
			if (( $subres = $this->whitespace(  ) ) !== FALSE) { $result["text"] .= $subres; }
			$res_124 = $result;
			$pos_124 = $this->pos;
			$_123 = NULL;
			do {
				$matcher = 'match_'.'InjectionVariables'; $key = $matcher; $pos = $this->pos;
				$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
				if ($subres !== FALSE) { $this->store( $result, $subres ); }
				else { $_123 = FALSE; break; }
				$_123 = TRUE; break;
			}
			while(0);
			if( $_123 === FALSE) {
				$result = $res_124;
				$this->pos = $pos_124;
				unset( $res_124 );
				unset( $pos_124 );
			}
			if (( $subres = $this->whitespace(  ) ) !== FALSE) { $result["text"] .= $subres; }
			if (( $subres = $this->literal( '%>' ) ) !== FALSE) { $result["text"] .= $subres; }
			else { $_127 = FALSE; break; }
			$_127 = TRUE; break;
		}
		while(0);
		if( $_127 === TRUE ) { return $this->finalise($result); }
		if( $_127 === FALSE) { return FALSE; }
	}


	/* InjectionVariables: (< InjectionName:Word "=" Argument)+ */
	protected $match_InjectionVariables_typestack = array('InjectionVariables');
	function match_InjectionVariables ($stack = array()) {
		$matchrule = "InjectionVariables"; $result = $this->construct($matchrule, $matchrule, null);
		$count = 0;
		while (true) {
			$res_134 = $result;
			$pos_134 = $this->pos;
			$_133 = NULL;
			do {
				if (( $subres = $this->whitespace(  ) ) !== FALSE) { $result["text"] .= $subres; }
				$matcher = 'match_'.'Word'; $key = $matcher; $pos = $this->pos;
				$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
				if ($subres !== FALSE) {
					$this->store( $result, $subres, "InjectionName" );
				}
				else { $_133 = FALSE; break; }
				if (substr($this->string,$this->pos,1) == '=') {
					$this->pos += 1;
					$result["text"] .= '=';
				}
				else { $_133 = FALSE; break; }
				$matcher = 'match_'.'Argument'; $key = $matcher; $pos = $this->pos;
				$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
				if ($subres !== FALSE) { $this->store( $result, $subres ); }
				else { $_133 = FALSE; break; }
				$_133 = TRUE; break;
			}
			while(0);
			if( $_133 === FALSE) {
				$result = $res_134;
				$this->pos = $pos_134;
				unset( $res_134 );
				unset( $pos_134 );
				break;
			}
			$count += 1;
		}
		if ($count > 0) { return $this->finalise($result); }
		else { return FALSE; }
	}


	/* Entity: / [A-Za-z_] [\w\.]* / */
	protected $match_Entity_typestack = array('Entity');
	function match_Entity ($stack = array()) {
		$matchrule = "Entity"; $result = $this->construct($matchrule, $matchrule, null);
		if (( $subres = $this->rx( '/ [A-Za-z_] [\w\.]* /' ) ) !== FALSE) {
			$result["text"] .= $subres;
			return $this->finalise($result);
		}
		else { return FALSE; }
	}




	function Translate__construct(&$res) {
		$res['php'] = '$val .= _t(';
	}

	function Translate_Entity(&$res, $sub) {
		$res['php'] .= "'$sub[text]'";
	}

	function Translate_Default(&$res, $sub) {
		$res['php'] .= ",$sub[text]";
	}

	function Translate_Context(&$res, $sub) {
		$res['php'] .= ",$sub[text]";
	}

	function Translate_InjectionVariables(&$res, $sub) {
		$res['php'] .= ",$sub[php]";
	}

	function Translate__finalise(&$res) {
		$res['php'] .= ');';
	}

	function InjectionVariables__construct(&$res) {
		$res['php'] = "array(";
	}

	function InjectionVariables_InjectionName(&$res, $sub) {
		$res['php'] .= "'$sub[text]'=>";
	}

	function InjectionVariables_Argument(&$res, $sub) {
		$res['php'] .= str_replace('$$FINAL', 'XML_val', $sub['php']) . ',';
	}

	function InjectionVariables__finalise(&$res) {
		if (substr($res['php'], -1) == ',') $res['php'] = substr($res['php'], 0, -1); //remove last comma in the array
		$res['php'] .= ')';
	}


	/* SimpleInjection: '$' :Lookup */
	protected $match_SimpleInjection_typestack = array('SimpleInjection');
	function match_SimpleInjection ($stack = array()) {
		$matchrule = "SimpleInjection"; $result = $this->construct($matchrule, $matchrule, null);
		$_138 = NULL;
		do {
			if (substr($this->string,$this->pos,1) == '$') {
				$this->pos += 1;
				$result["text"] .= '$';
			}
			else { $_138 = FALSE; break; }
			$matcher = 'match_'.'Lookup'; $key = $matcher; $pos = $this->pos;
			$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
			if ($subres !== FALSE) {
				$this->store( $result, $subres, "Lookup" );
			}
			else { $_138 = FALSE; break; }
			$_138 = TRUE; break;
		}
		while(0);
		if( $_138 === TRUE ) { return $this->finalise($result); }
		if( $_138 === FALSE) { return FALSE; }
	}


	/* BracketInjection: '{$' :Lookup "}" */
	protected $match_BracketInjection_typestack = array('BracketInjection');
	function match_BracketInjection ($stack = array()) {
		$matchrule = "BracketInjection"; $result = $this->construct($matchrule, $matchrule, null);
		$_143 = NULL;
		do {
			if (( $subres = $this->literal( '{$' ) ) !== FALSE) { $result["text"] .= $subres; }
			else { $_143 = FALSE; break; }
			$matcher = 'match_'.'Lookup'; $key = $matcher; $pos = $this->pos;
			$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
			if ($subres !== FALSE) {
				$this->store( $result, $subres, "Lookup" );
			}
			else { $_143 = FALSE; break; }
			if (substr($this->string,$this->pos,1) == '}') {
				$this->pos += 1;
				$result["text"] .= '}';
			}
			else { $_143 = FALSE; break; }
			$_143 = TRUE; break;
		}
		while(0);
		if( $_143 === TRUE ) { return $this->finalise($result); }
		if( $_143 === FALSE) { return FALSE; }
	}


	/* Injection: BracketInjection | SimpleInjection */
	protected $match_Injection_typestack = array('Injection');
	function match_Injection ($stack = array()) {
		$matchrule = "Injection"; $result = $this->construct($matchrule, $matchrule, null);
		$_148 = NULL;
		do {
			$res_145 = $result;
			$pos_145 = $this->pos;
			$matcher = 'match_'.'BracketInjection'; $key = $matcher; $pos = $this->pos;
			$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
			if ($subres !== FALSE) {
				$this->store( $result, $subres );
				$_148 = TRUE; break;
			}
			$result = $res_145;
			$this->pos = $pos_145;
			$matcher = 'match_'.'SimpleInjection'; $key = $matcher; $pos = $this->pos;
			$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
			if ($subres !== FALSE) {
				$this->store( $result, $subres );
				$_148 = TRUE; break;
			}
			$result = $res_145;
			$this->pos = $pos_145;
			$_148 = FALSE; break;
		}
		while(0);
		if( $_148 === TRUE ) { return $this->finalise($result); }
		if( $_148 === FALSE) { return FALSE; }
	}



	function Injection_STR(&$res, $sub) {
		$res['php'] = '$val .= '. str_replace('$$FINAL', 'XML_val', $sub['Lookup']['php']) . ';';
	}

	/* DollarMarkedLookup: SimpleInjection */
	protected $match_DollarMarkedLookup_typestack = array('DollarMarkedLookup');
	function match_DollarMarkedLookup ($stack = array()) {
		$matchrule = "DollarMarkedLookup"; $result = $this->construct($matchrule, $matchrule, null);
		$matcher = 'match_'.'SimpleInjection'; $key = $matcher; $pos = $this->pos;
		$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
		if ($subres !== FALSE) {
			$this->store( $result, $subres );
			return $this->finalise($result);
		}
		else { return FALSE; }
	}



	function DollarMarkedLookup_STR(&$res, $sub) {
		$res['Lookup'] = $sub['Lookup'];
	}

	/* QuotedString: q:/['"]/   String:/ (\\\\ | \\. | [^$q\\])* /   '$q' */
	protected $match_QuotedString_typestack = array('QuotedString');
	function match_QuotedString ($stack = array()) {
		$matchrule = "QuotedString"; $result = $this->construct($matchrule, $matchrule, null);
		$_154 = NULL;
		do {
			$stack[] = $result; $result = $this->construct( $matchrule, "q" ); 
			if (( $subres = $this->rx( '/[\'"]/' ) ) !== FALSE) {
				$result["text"] .= $subres;
				$subres = $result; $result = array_pop($stack);
				$this->store( $result, $subres, 'q' );
			}
			else {
				$result = array_pop($stack);
				$_154 = FALSE; break;
			}
			$stack[] = $result; $result = $this->construct( $matchrule, "String" ); 
			if (( $subres = $this->rx( '/ (\\\\\\\\ | \\\\. | [^'.$this->expression($result, $stack, 'q').'\\\\])* /' ) ) !== FALSE) {
				$result["text"] .= $subres;
				$subres = $result; $result = array_pop($stack);
				$this->store( $result, $subres, 'String' );
			}
			else {
				$result = array_pop($stack);
				$_154 = FALSE; break;
			}
			if (( $subres = $this->literal( ''.$this->expression($result, $stack, 'q').'' ) ) !== FALSE) { $result["text"] .= $subres; }
			else { $_154 = FALSE; break; }
			$_154 = TRUE; break;
		}
		while(0);
		if( $_154 === TRUE ) { return $this->finalise($result); }
		if( $_154 === FALSE) { return FALSE; }
	}


	/* FreeString: /[^,)%!=><|&]+/ */
	protected $match_FreeString_typestack = array('FreeString');
	function match_FreeString ($stack = array()) {
		$matchrule = "FreeString"; $result = $this->construct($matchrule, $matchrule, null);
		if (( $subres = $this->rx( '/[^,)%!=><|&]+/' ) ) !== FALSE) {
			$result["text"] .= $subres;
			return $this->finalise($result);
		}
		else { return FALSE; }
	}


	/* Argument:
	:DollarMarkedLookup |
	:QuotedString |
	:Lookup !(< FreeString)|
	:FreeString */
	protected $match_Argument_typestack = array('Argument');
	function match_Argument ($stack = array()) {
		$matchrule = "Argument"; $result = $this->construct($matchrule, $matchrule, null);
		$_174 = NULL;
		do {
			$res_157 = $result;
			$pos_157 = $this->pos;
			$matcher = 'match_'.'DollarMarkedLookup'; $key = $matcher; $pos = $this->pos;
			$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
			if ($subres !== FALSE) {
				$this->store( $result, $subres, "DollarMarkedLookup" );
				$_174 = TRUE; break;
			}
			$result = $res_157;
			$this->pos = $pos_157;
			$_172 = NULL;
			do {
				$res_159 = $result;
				$pos_159 = $this->pos;
				$matcher = 'match_'.'QuotedString'; $key = $matcher; $pos = $this->pos;
				$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
				if ($subres !== FALSE) {
					$this->store( $result, $subres, "QuotedString" );
					$_172 = TRUE; break;
				}
				$result = $res_159;
				$this->pos = $pos_159;
				$_170 = NULL;
				do {
					$res_161 = $result;
					$pos_161 = $this->pos;
					$_167 = NULL;
					do {
						$matcher = 'match_'.'Lookup'; $key = $matcher; $pos = $this->pos;
						$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
						if ($subres !== FALSE) {
							$this->store( $result, $subres, "Lookup" );
						}
						else { $_167 = FALSE; break; }
						$res_166 = $result;
						$pos_166 = $this->pos;
						$_165 = NULL;
						do {
							if (( $subres = $this->whitespace(  ) ) !== FALSE) { $result["text"] .= $subres; }
							$matcher = 'match_'.'FreeString'; $key = $matcher; $pos = $this->pos;
							$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
							if ($subres !== FALSE) {
								$this->store( $result, $subres );
							}
							else { $_165 = FALSE; break; }
							$_165 = TRUE; break;
						}
						while(0);
						if( $_165 === TRUE ) {
							$result = $res_166;
							$this->pos = $pos_166;
							$_167 = FALSE; break;
						}
						if( $_165 === FALSE) {
							$result = $res_166;
							$this->pos = $pos_166;
						}
						$_167 = TRUE; break;
					}
					while(0);
					if( $_167 === TRUE ) { $_170 = TRUE; break; }
					$result = $res_161;
					$this->pos = $pos_161;
					$matcher = 'match_'.'FreeString'; $key = $matcher; $pos = $this->pos;
					$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
					if ($subres !== FALSE) {
						$this->store( $result, $subres, "FreeString" );
						$_170 = TRUE; break;
					}
					$result = $res_161;
					$this->pos = $pos_161;
					$_170 = FALSE; break;
				}
				while(0);
				if( $_170 === TRUE ) { $_172 = TRUE; break; }
				$result = $res_159;
				$this->pos = $pos_159;
				$_172 = FALSE; break;
			}
			while(0);
			if( $_172 === TRUE ) { $_174 = TRUE; break; }
			$result = $res_157;
			$this->pos = $pos_157;
			$_174 = FALSE; break;
		}
		while(0);
		if( $_174 === TRUE ) { return $this->finalise($result); }
		if( $_174 === FALSE) { return FALSE; }
	}




	/**
	 * If we get a bare value, we don't know enough to determine exactly what php would be the translation, because
	 * we don't know if the position of use indicates a lookup or a string argument.
	 * 
	 * Instead, we record 'ArgumentMode' as a member of this matches results node, which can be:
	 *   - lookup if this argument was unambiguously a lookup (marked as such)
	 *   - string is this argument was unambiguously a string (marked as such, or impossible to parse as lookup)
	 *   - default if this argument needs to be handled as per 2.4
	 * 
	 * In the case of 'default', there is no php member of the results node, but instead 'lookup_php', which
	 * should be used by the parent if the context indicates a lookup, and 'string_php' which should be used
	 * if the context indicates a string
	 */
				
	function Argument_DollarMarkedLookup(&$res, $sub) {
		$res['ArgumentMode'] = 'lookup';
		$res['php'] = $sub['Lookup']['php'];
	}

	function Argument_QuotedString(&$res, $sub) {
		$res['ArgumentMode'] = 'string';
		$res['php'] = "'" . str_replace("'", "\\'", $sub['String']['text']) . "'";
	}

	function Argument_Lookup(&$res, $sub) {
		if (count($sub['LookupSteps']) == 1 && !isset($sub['LookupSteps'][0]['Call']['Arguments'])) {
			$res['ArgumentMode'] = 'default';
			$res['lookup_php'] = $sub['php'];
			$res['string_php'] = "'".$sub['LookupSteps'][0]['Call']['Method']['text']."'";
		}
		else {
			$res['ArgumentMode'] = 'lookup';
			$res['php'] = $sub['php'];
		}
	}

	function Argument_FreeString(&$res, $sub) {
		$res['ArgumentMode'] = 'string';
		$res['php'] = "'" . str_replace("'", "\\'", trim($sub['text'])) . "'";
	}


	/* ComposedArgumentString: / (\\\\ | \\. | [^$q\\]) / */
	protected $match_ComposedArgumentString_typestack = array('ComposedArgumentString');
	function match_ComposedArgumentString ($stack = array()) {
		$matchrule = "ComposedArgumentString"; $result = $this->construct($matchrule, $matchrule, null);
		if (( $subres = $this->rx( '/ (\\\\\\\\ | \\\\. | [^'.$this->expression($result, $stack, 'q').'\\\\]) /' ) ) !== FALSE) {
			$result["text"] .= $subres;
			return $this->finalise($result);
		}
		else { return FALSE; }
	}


	/* ComposedArgumentInjection: BracketInjection | SimpleInjection */
	protected $match_ComposedArgumentInjection_typestack = array('ComposedArgumentInjection');
	function match_ComposedArgumentInjection ($stack = array()) {
		$matchrule = "ComposedArgumentInjection"; $result = $this->construct($matchrule, $matchrule, null);
		$_180 = NULL;
		do {
			$res_177 = $result;
			$pos_177 = $this->pos;
			$matcher = 'match_'.'BracketInjection'; $key = $matcher; $pos = $this->pos;
			$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
			if ($subres !== FALSE) {
				$this->store( $result, $subres );
				$_180 = TRUE; break;
			}
			$result = $res_177;
			$this->pos = $pos_177;
			$matcher = 'match_'.'SimpleInjection'; $key = $matcher; $pos = $this->pos;
			$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
			if ($subres !== FALSE) {
				$this->store( $result, $subres );
				$_180 = TRUE; break;
			}
			$result = $res_177;
			$this->pos = $pos_177;
			$_180 = FALSE; break;
		}
		while(0);
		if( $_180 === TRUE ) { return $this->finalise($result); }
		if( $_180 === FALSE) { return FALSE; }
	}


	/* ComposedArgumentQuotedString: q:/['"]/ ( ComposedArgumentInjection | ComposedArgumentString )* '$q' */
	protected $match_ComposedArgumentQuotedString_typestack = array('ComposedArgumentQuotedString');
	function match_ComposedArgumentQuotedString ($stack = array()) {
		$matchrule = "ComposedArgumentQuotedString"; $result = $this->construct($matchrule, $matchrule, null);
		$_191 = NULL;
		do {
			$stack[] = $result; $result = $this->construct( $matchrule, "q" ); 
			if (( $subres = $this->rx( '/[\'"]/' ) ) !== FALSE) {
				$result["text"] .= $subres;
				$subres = $result; $result = array_pop($stack);
				$this->store( $result, $subres, 'q' );
			}
			else {
				$result = array_pop($stack);
				$_191 = FALSE; break;
			}
			while (true) {
				$res_189 = $result;
				$pos_189 = $this->pos;
				$_188 = NULL;
				do {
					$_186 = NULL;
					do {
						$res_183 = $result;
						$pos_183 = $this->pos;
						$matcher = 'match_'.'ComposedArgumentInjection'; $key = $matcher; $pos = $this->pos;
						$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
						if ($subres !== FALSE) {
							$this->store( $result, $subres );
							$_186 = TRUE; break;
						}
						$result = $res_183;
						$this->pos = $pos_183;
						$matcher = 'match_'.'ComposedArgumentString'; $key = $matcher; $pos = $this->pos;
						$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
						if ($subres !== FALSE) {
							$this->store( $result, $subres );
							$_186 = TRUE; break;
						}
						$result = $res_183;
						$this->pos = $pos_183;
						$_186 = FALSE; break;
					}
					while(0);
					if( $_186 === FALSE) { $_188 = FALSE; break; }
					$_188 = TRUE; break;
				}
				while(0);
				if( $_188 === FALSE) {
					$result = $res_189;
					$this->pos = $pos_189;
					unset( $res_189 );
					unset( $pos_189 );
					break;
				}
			}
			if (( $subres = $this->literal( ''.$this->expression($result, $stack, 'q').'' ) ) !== FALSE) { $result["text"] .= $subres; }
			else { $_191 = FALSE; break; }
			$_191 = TRUE; break;
		}
		while(0);
		if( $_191 === TRUE ) { return $this->finalise($result); }
		if( $_191 === FALSE) { return FALSE; }
	}


	/* ComposedArgument:
	:DollarMarkedLookup |
	:ComposedArgumentQuotedString |
	:Lookup !(< FreeString)|
	:FreeString */
	protected $match_ComposedArgument_typestack = array('ComposedArgument');
	function match_ComposedArgument ($stack = array()) {
		$matchrule = "ComposedArgument"; $result = $this->construct($matchrule, $matchrule, null);
		$_210 = NULL;
		do {
			$res_193 = $result;
			$pos_193 = $this->pos;
			$matcher = 'match_'.'DollarMarkedLookup'; $key = $matcher; $pos = $this->pos;
			$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
			if ($subres !== FALSE) {
				$this->store( $result, $subres, "DollarMarkedLookup" );
				$_210 = TRUE; break;
			}
			$result = $res_193;
			$this->pos = $pos_193;
			$_208 = NULL;
			do {
				$res_195 = $result;
				$pos_195 = $this->pos;
				$matcher = 'match_'.'ComposedArgumentQuotedString'; $key = $matcher; $pos = $this->pos;
				$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
				if ($subres !== FALSE) {
					$this->store( $result, $subres, "ComposedArgumentQuotedString" );
					$_208 = TRUE; break;
				}
				$result = $res_195;
				$this->pos = $pos_195;
				$_206 = NULL;
				do {
					$res_197 = $result;
					$pos_197 = $this->pos;
					$_203 = NULL;
					do {
						$matcher = 'match_'.'Lookup'; $key = $matcher; $pos = $this->pos;
						$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
						if ($subres !== FALSE) {
							$this->store( $result, $subres, "Lookup" );
						}
						else { $_203 = FALSE; break; }
						$res_202 = $result;
						$pos_202 = $this->pos;
						$_201 = NULL;
						do {
							if (( $subres = $this->whitespace(  ) ) !== FALSE) { $result["text"] .= $subres; }
							$matcher = 'match_'.'FreeString'; $key = $matcher; $pos = $this->pos;
							$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
							if ($subres !== FALSE) {
								$this->store( $result, $subres );
							}
							else { $_201 = FALSE; break; }
							$_201 = TRUE; break;
						}
						while(0);
						if( $_201 === TRUE ) {
							$result = $res_202;
							$this->pos = $pos_202;
							$_203 = FALSE; break;
						}
						if( $_201 === FALSE) {
							$result = $res_202;
							$this->pos = $pos_202;
						}
						$_203 = TRUE; break;
					}
					while(0);
					if( $_203 === TRUE ) { $_206 = TRUE; break; }
					$result = $res_197;
					$this->pos = $pos_197;
					$matcher = 'match_'.'FreeString'; $key = $matcher; $pos = $this->pos;
					$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
					if ($subres !== FALSE) {
						$this->store( $result, $subres, "FreeString" );
						$_206 = TRUE; break;
					}
					$result = $res_197;
					$this->pos = $pos_197;
					$_206 = FALSE; break;
				}
				while(0);
				if( $_206 === TRUE ) { $_208 = TRUE; break; }
				$result = $res_195;
				$this->pos = $pos_195;
				$_208 = FALSE; break;
			}
			while(0);
			if( $_208 === TRUE ) { $_210 = TRUE; break; }
			$result = $res_193;
			$this->pos = $pos_193;
			$_210 = FALSE; break;
		}
		while(0);
		if( $_210 === TRUE ) { return $this->finalise($result); }
		if( $_210 === FALSE) { return FALSE; }
	}



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
	    
	function ComposedArgument_DollarMarkedLookup(&$res, $sub) {
		$this->Argument_DollarMarkedLookup($res, $sub);
	}

	function ComposedArgument_Lookup(&$res, $sub) {
		$this->Argument_Lookup($res, $sub);
	}

	function ComposedArgument_FreeString(&$res, $sub) {
		$this->Argument_FreeString($res, $sub);
	}

	/* ComparisonOperator: "!=" | "==" | ">=" | ">" | "<=" | "<" | "=" */
	protected $match_ComparisonOperator_typestack = array('ComparisonOperator');
	function match_ComparisonOperator ($stack = array()) {
		$matchrule = "ComparisonOperator"; $result = $this->construct($matchrule, $matchrule, null);
		$_235 = NULL;
		do {
			$res_212 = $result;
			$pos_212 = $this->pos;
			if (( $subres = $this->literal( '!=' ) ) !== FALSE) {
				$result["text"] .= $subres;
				$_235 = TRUE; break;
			}
			$result = $res_212;
			$this->pos = $pos_212;
			$_233 = NULL;
			do {
				$res_214 = $result;
				$pos_214 = $this->pos;
				if (( $subres = $this->literal( '==' ) ) !== FALSE) {
					$result["text"] .= $subres;
					$_233 = TRUE; break;
				}
				$result = $res_214;
				$this->pos = $pos_214;
				$_231 = NULL;
				do {
					$res_216 = $result;
					$pos_216 = $this->pos;
					if (( $subres = $this->literal( '>=' ) ) !== FALSE) {
						$result["text"] .= $subres;
						$_231 = TRUE; break;
					}
					$result = $res_216;
					$this->pos = $pos_216;
					$_229 = NULL;
					do {
						$res_218 = $result;
						$pos_218 = $this->pos;
						if (substr($this->string,$this->pos,1) == '>') {
							$this->pos += 1;
							$result["text"] .= '>';
							$_229 = TRUE; break;
						}
						$result = $res_218;
						$this->pos = $pos_218;
						$_227 = NULL;
						do {
							$res_220 = $result;
							$pos_220 = $this->pos;
							if (( $subres = $this->literal( '<=' ) ) !== FALSE) {
								$result["text"] .= $subres;
								$_227 = TRUE; break;
							}
							$result = $res_220;
							$this->pos = $pos_220;
							$_225 = NULL;
							do {
								$res_222 = $result;
								$pos_222 = $this->pos;
								if (substr($this->string,$this->pos,1) == '<') {
									$this->pos += 1;
									$result["text"] .= '<';
									$_225 = TRUE; break;
								}
								$result = $res_222;
								$this->pos = $pos_222;
								if (substr($this->string,$this->pos,1) == '=') {
									$this->pos += 1;
									$result["text"] .= '=';
									$_225 = TRUE; break;
								}
								$result = $res_222;
								$this->pos = $pos_222;
								$_225 = FALSE; break;
							}
							while(0);
							if( $_225 === TRUE ) { $_227 = TRUE; break; }
							$result = $res_220;
							$this->pos = $pos_220;
							$_227 = FALSE; break;
						}
						while(0);
						if( $_227 === TRUE ) { $_229 = TRUE; break; }
						$result = $res_218;
						$this->pos = $pos_218;
						$_229 = FALSE; break;
					}
					while(0);
					if( $_229 === TRUE ) { $_231 = TRUE; break; }
					$result = $res_216;
					$this->pos = $pos_216;
					$_231 = FALSE; break;
				}
				while(0);
				if( $_231 === TRUE ) { $_233 = TRUE; break; }
				$result = $res_214;
				$this->pos = $pos_214;
				$_233 = FALSE; break;
			}
			while(0);
			if( $_233 === TRUE ) { $_235 = TRUE; break; }
			$result = $res_212;
			$this->pos = $pos_212;
			$_235 = FALSE; break;
		}
		while(0);
		if( $_235 === TRUE ) { return $this->finalise($result); }
		if( $_235 === FALSE) { return FALSE; }
	}


	/* Comparison: Argument < ComparisonOperator > Argument */
	protected $match_Comparison_typestack = array('Comparison');
	function match_Comparison ($stack = array()) {
		$matchrule = "Comparison"; $result = $this->construct($matchrule, $matchrule, null);
		$_242 = NULL;
		do {
			$matcher = 'match_'.'Argument'; $key = $matcher; $pos = $this->pos;
			$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
			if ($subres !== FALSE) { $this->store( $result, $subres ); }
			else { $_242 = FALSE; break; }
			if (( $subres = $this->whitespace(  ) ) !== FALSE) { $result["text"] .= $subres; }
			$matcher = 'match_'.'ComparisonOperator'; $key = $matcher; $pos = $this->pos;
			$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
			if ($subres !== FALSE) { $this->store( $result, $subres ); }
			else { $_242 = FALSE; break; }
			if (( $subres = $this->whitespace(  ) ) !== FALSE) { $result["text"] .= $subres; }
			$matcher = 'match_'.'Argument'; $key = $matcher; $pos = $this->pos;
			$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
			if ($subres !== FALSE) { $this->store( $result, $subres ); }
			else { $_242 = FALSE; break; }
			$_242 = TRUE; break;
		}
		while(0);
		if( $_242 === TRUE ) { return $this->finalise($result); }
		if( $_242 === FALSE) { return FALSE; }
	}



	function Comparison_Argument(&$res, $sub) {
		if ($sub['ArgumentMode'] == 'default') {
			if (!empty($res['php'])) $res['php'] .= $sub['string_php'];
			else $res['php'] = str_replace('$$FINAL', 'XML_val', $sub['lookup_php']);
		}	
		else {
			$res['php'] .= str_replace('$$FINAL', 'XML_val', $sub['php']);
		}
	}

	function Comparison_ComparisonOperator(&$res, $sub) {
		$res['php'] .= ($sub['text'] == '=' ? '==' : $sub['text']);
	}

	/* PresenceCheck: (Not:'not' <)? Argument */
	protected $match_PresenceCheck_typestack = array('PresenceCheck');
	function match_PresenceCheck ($stack = array()) {
		$matchrule = "PresenceCheck"; $result = $this->construct($matchrule, $matchrule, null);
		$_249 = NULL;
		do {
			$res_247 = $result;
			$pos_247 = $this->pos;
			$_246 = NULL;
			do {
				$stack[] = $result; $result = $this->construct( $matchrule, "Not" ); 
				if (( $subres = $this->literal( 'not' ) ) !== FALSE) {
					$result["text"] .= $subres;
					$subres = $result; $result = array_pop($stack);
					$this->store( $result, $subres, 'Not' );
				}
				else {
					$result = array_pop($stack);
					$_246 = FALSE; break;
				}
				if (( $subres = $this->whitespace(  ) ) !== FALSE) { $result["text"] .= $subres; }
				$_246 = TRUE; break;
			}
			while(0);
			if( $_246 === FALSE) {
				$result = $res_247;
				$this->pos = $pos_247;
				unset( $res_247 );
				unset( $pos_247 );
			}
			$matcher = 'match_'.'Argument'; $key = $matcher; $pos = $this->pos;
			$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
			if ($subres !== FALSE) { $this->store( $result, $subres ); }
			else { $_249 = FALSE; break; }
			$_249 = TRUE; break;
		}
		while(0);
		if( $_249 === TRUE ) { return $this->finalise($result); }
		if( $_249 === FALSE) { return FALSE; }
	}



	function PresenceCheck_Not(&$res, $sub) {
		$res['php'] = '!';
	}
				
	function PresenceCheck_Argument(&$res, $sub) {
		if ($sub['ArgumentMode'] == 'string') {
			$res['php'] .= '((bool)'.$sub['php'].')';
		}
		else {
			$php = ($sub['ArgumentMode'] == 'default' ? $sub['lookup_php'] : $sub['php']);
			// TODO: kinda hacky - maybe we need a way to pass state down the parse chain so
			// Lookup_LastLookupStep and Argument_BareWord can produce hasValue instead of XML_val
			$res['php'] .= str_replace('$$FINAL', 'hasValue', $php);
		}
	}

	/* IfArgumentPortion: Comparison | PresenceCheck */
	protected $match_IfArgumentPortion_typestack = array('IfArgumentPortion');
	function match_IfArgumentPortion ($stack = array()) {
		$matchrule = "IfArgumentPortion"; $result = $this->construct($matchrule, $matchrule, null);
		$_254 = NULL;
		do {
			$res_251 = $result;
			$pos_251 = $this->pos;
			$matcher = 'match_'.'Comparison'; $key = $matcher; $pos = $this->pos;
			$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
			if ($subres !== FALSE) {
				$this->store( $result, $subres );
				$_254 = TRUE; break;
			}
			$result = $res_251;
			$this->pos = $pos_251;
			$matcher = 'match_'.'PresenceCheck'; $key = $matcher; $pos = $this->pos;
			$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
			if ($subres !== FALSE) {
				$this->store( $result, $subres );
				$_254 = TRUE; break;
			}
			$result = $res_251;
			$this->pos = $pos_251;
			$_254 = FALSE; break;
		}
		while(0);
		if( $_254 === TRUE ) { return $this->finalise($result); }
		if( $_254 === FALSE) { return FALSE; }
	}



	function IfArgumentPortion_STR(&$res, $sub) {
		$res['php'] = $sub['php'];
	}

	/* BooleanOperator: "||" | "&&" */
	protected $match_BooleanOperator_typestack = array('BooleanOperator');
	function match_BooleanOperator ($stack = array()) {
		$matchrule = "BooleanOperator"; $result = $this->construct($matchrule, $matchrule, null);
		$_259 = NULL;
		do {
			$res_256 = $result;
			$pos_256 = $this->pos;
			if (( $subres = $this->literal( '||' ) ) !== FALSE) {
				$result["text"] .= $subres;
				$_259 = TRUE; break;
			}
			$result = $res_256;
			$this->pos = $pos_256;
			if (( $subres = $this->literal( '&&' ) ) !== FALSE) {
				$result["text"] .= $subres;
				$_259 = TRUE; break;
			}
			$result = $res_256;
			$this->pos = $pos_256;
			$_259 = FALSE; break;
		}
		while(0);
		if( $_259 === TRUE ) { return $this->finalise($result); }
		if( $_259 === FALSE) { return FALSE; }
	}


	/* IfArgument: :IfArgumentPortion ( < :BooleanOperator < :IfArgumentPortion )* */
	protected $match_IfArgument_typestack = array('IfArgument');
	function match_IfArgument ($stack = array()) {
		$matchrule = "IfArgument"; $result = $this->construct($matchrule, $matchrule, null);
		$_268 = NULL;
		do {
			$matcher = 'match_'.'IfArgumentPortion'; $key = $matcher; $pos = $this->pos;
			$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
			if ($subres !== FALSE) {
				$this->store( $result, $subres, "IfArgumentPortion" );
			}
			else { $_268 = FALSE; break; }
			while (true) {
				$res_267 = $result;
				$pos_267 = $this->pos;
				$_266 = NULL;
				do {
					if (( $subres = $this->whitespace(  ) ) !== FALSE) { $result["text"] .= $subres; }
					$matcher = 'match_'.'BooleanOperator'; $key = $matcher; $pos = $this->pos;
					$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
					if ($subres !== FALSE) {
						$this->store( $result, $subres, "BooleanOperator" );
					}
					else { $_266 = FALSE; break; }
					if (( $subres = $this->whitespace(  ) ) !== FALSE) { $result["text"] .= $subres; }
					$matcher = 'match_'.'IfArgumentPortion'; $key = $matcher; $pos = $this->pos;
					$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
					if ($subres !== FALSE) {
						$this->store( $result, $subres, "IfArgumentPortion" );
					}
					else { $_266 = FALSE; break; }
					$_266 = TRUE; break;
				}
				while(0);
				if( $_266 === FALSE) {
					$result = $res_267;
					$this->pos = $pos_267;
					unset( $res_267 );
					unset( $pos_267 );
					break;
				}
			}
			$_268 = TRUE; break;
		}
		while(0);
		if( $_268 === TRUE ) { return $this->finalise($result); }
		if( $_268 === FALSE) { return FALSE; }
	}



	function IfArgument_IfArgumentPortion(&$res, $sub) {
		$res['php'] .= $sub['php'];
	}

	function IfArgument_BooleanOperator(&$res, $sub) {
		$res['php'] .= $sub['text'];
	}

	/* IfPart: '<%' < 'if' [ :IfArgument > '%>' Template:$TemplateMatcher? */
	protected $match_IfPart_typestack = array('IfPart');
	function match_IfPart ($stack = array()) {
		$matchrule = "IfPart"; $result = $this->construct($matchrule, $matchrule, null);
		$_278 = NULL;
		do {
			if (( $subres = $this->literal( '<%' ) ) !== FALSE) { $result["text"] .= $subres; }
			else { $_278 = FALSE; break; }
			if (( $subres = $this->whitespace(  ) ) !== FALSE) { $result["text"] .= $subres; }
			if (( $subres = $this->literal( 'if' ) ) !== FALSE) { $result["text"] .= $subres; }
			else { $_278 = FALSE; break; }
			if (( $subres = $this->whitespace(  ) ) !== FALSE) { $result["text"] .= $subres; }
			else { $_278 = FALSE; break; }
			$matcher = 'match_'.'IfArgument'; $key = $matcher; $pos = $this->pos;
			$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
			if ($subres !== FALSE) {
				$this->store( $result, $subres, "IfArgument" );
			}
			else { $_278 = FALSE; break; }
			if (( $subres = $this->whitespace(  ) ) !== FALSE) { $result["text"] .= $subres; }
			if (( $subres = $this->literal( '%>' ) ) !== FALSE) { $result["text"] .= $subres; }
			else { $_278 = FALSE; break; }
			$res_277 = $result;
			$pos_277 = $this->pos;
			$matcher = 'match_'.$this->expression($result, $stack, 'TemplateMatcher'); $key = $matcher; $pos = $this->pos;
			$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
			if ($subres !== FALSE) {
				$this->store( $result, $subres, "Template" );
			}
			else {
				$result = $res_277;
				$this->pos = $pos_277;
				unset( $res_277 );
				unset( $pos_277 );
			}
			$_278 = TRUE; break;
		}
		while(0);
		if( $_278 === TRUE ) { return $this->finalise($result); }
		if( $_278 === FALSE) { return FALSE; }
	}


	/* ElseIfPart: '<%' < 'else_if' [ :IfArgument > '%>' Template:$TemplateMatcher? */
	protected $match_ElseIfPart_typestack = array('ElseIfPart');
	function match_ElseIfPart ($stack = array()) {
		$matchrule = "ElseIfPart"; $result = $this->construct($matchrule, $matchrule, null);
		$_288 = NULL;
		do {
			if (( $subres = $this->literal( '<%' ) ) !== FALSE) { $result["text"] .= $subres; }
			else { $_288 = FALSE; break; }
			if (( $subres = $this->whitespace(  ) ) !== FALSE) { $result["text"] .= $subres; }
			if (( $subres = $this->literal( 'else_if' ) ) !== FALSE) { $result["text"] .= $subres; }
			else { $_288 = FALSE; break; }
			if (( $subres = $this->whitespace(  ) ) !== FALSE) { $result["text"] .= $subres; }
			else { $_288 = FALSE; break; }
			$matcher = 'match_'.'IfArgument'; $key = $matcher; $pos = $this->pos;
			$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
			if ($subres !== FALSE) {
				$this->store( $result, $subres, "IfArgument" );
			}
			else { $_288 = FALSE; break; }
			if (( $subres = $this->whitespace(  ) ) !== FALSE) { $result["text"] .= $subres; }
			if (( $subres = $this->literal( '%>' ) ) !== FALSE) { $result["text"] .= $subres; }
			else { $_288 = FALSE; break; }
			$res_287 = $result;
			$pos_287 = $this->pos;
			$matcher = 'match_'.$this->expression($result, $stack, 'TemplateMatcher'); $key = $matcher; $pos = $this->pos;
			$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
			if ($subres !== FALSE) {
				$this->store( $result, $subres, "Template" );
			}
			else {
				$result = $res_287;
				$this->pos = $pos_287;
				unset( $res_287 );
				unset( $pos_287 );
			}
			$_288 = TRUE; break;
		}
		while(0);
		if( $_288 === TRUE ) { return $this->finalise($result); }
		if( $_288 === FALSE) { return FALSE; }
	}


	/* ElsePart: '<%' < 'else' > '%>' Template:$TemplateMatcher? */
	protected $match_ElsePart_typestack = array('ElsePart');
	function match_ElsePart ($stack = array()) {
		$matchrule = "ElsePart"; $result = $this->construct($matchrule, $matchrule, null);
		$_296 = NULL;
		do {
			if (( $subres = $this->literal( '<%' ) ) !== FALSE) { $result["text"] .= $subres; }
			else { $_296 = FALSE; break; }
			if (( $subres = $this->whitespace(  ) ) !== FALSE) { $result["text"] .= $subres; }
			if (( $subres = $this->literal( 'else' ) ) !== FALSE) { $result["text"] .= $subres; }
			else { $_296 = FALSE; break; }
			if (( $subres = $this->whitespace(  ) ) !== FALSE) { $result["text"] .= $subres; }
			if (( $subres = $this->literal( '%>' ) ) !== FALSE) { $result["text"] .= $subres; }
			else { $_296 = FALSE; break; }
			$res_295 = $result;
			$pos_295 = $this->pos;
			$matcher = 'match_'.$this->expression($result, $stack, 'TemplateMatcher'); $key = $matcher; $pos = $this->pos;
			$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
			if ($subres !== FALSE) {
				$this->store( $result, $subres, "Template" );
			}
			else {
				$result = $res_295;
				$this->pos = $pos_295;
				unset( $res_295 );
				unset( $pos_295 );
			}
			$_296 = TRUE; break;
		}
		while(0);
		if( $_296 === TRUE ) { return $this->finalise($result); }
		if( $_296 === FALSE) { return FALSE; }
	}


	/* If: IfPart ElseIfPart* ElsePart? '<%' < 'end_if' > '%>' */
	protected $match_If_typestack = array('If');
	function match_If ($stack = array()) {
		$matchrule = "If"; $result = $this->construct($matchrule, $matchrule, null);
		$_306 = NULL;
		do {
			$matcher = 'match_'.'IfPart'; $key = $matcher; $pos = $this->pos;
			$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
			if ($subres !== FALSE) { $this->store( $result, $subres ); }
			else { $_306 = FALSE; break; }
			while (true) {
				$res_299 = $result;
				$pos_299 = $this->pos;
				$matcher = 'match_'.'ElseIfPart'; $key = $matcher; $pos = $this->pos;
				$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
				if ($subres !== FALSE) { $this->store( $result, $subres ); }
				else {
					$result = $res_299;
					$this->pos = $pos_299;
					unset( $res_299 );
					unset( $pos_299 );
					break;
				}
			}
			$res_300 = $result;
			$pos_300 = $this->pos;
			$matcher = 'match_'.'ElsePart'; $key = $matcher; $pos = $this->pos;
			$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
			if ($subres !== FALSE) { $this->store( $result, $subres ); }
			else {
				$result = $res_300;
				$this->pos = $pos_300;
				unset( $res_300 );
				unset( $pos_300 );
			}
			if (( $subres = $this->literal( '<%' ) ) !== FALSE) { $result["text"] .= $subres; }
			else { $_306 = FALSE; break; }
			if (( $subres = $this->whitespace(  ) ) !== FALSE) { $result["text"] .= $subres; }
			if (( $subres = $this->literal( 'end_if' ) ) !== FALSE) { $result["text"] .= $subres; }
			else { $_306 = FALSE; break; }
			if (( $subres = $this->whitespace(  ) ) !== FALSE) { $result["text"] .= $subres; }
			if (( $subres = $this->literal( '%>' ) ) !== FALSE) { $result["text"] .= $subres; }
			else { $_306 = FALSE; break; }
			$_306 = TRUE; break;
		}
		while(0);
		if( $_306 === TRUE ) { return $this->finalise($result); }
		if( $_306 === FALSE) { return FALSE; }
	}



	function If_IfPart(&$res, $sub) {
		$res['php'] = 
			'if (' . $sub['IfArgument']['php'] . ') { ' . PHP_EOL .
				(isset($sub['Template']) ? $sub['Template']['php'] : '') . PHP_EOL .
			'}';
	} 

	function If_ElseIfPart(&$res, $sub) {
		$res['php'] .= 
			'else if (' . $sub['IfArgument']['php'] . ') { ' . PHP_EOL .
				(isset($sub['Template']) ? $sub['Template']['php'] : '') . PHP_EOL .
			'}';
	}

	function If_ElsePart(&$res, $sub) {
		$res['php'] .= 
			'else { ' . PHP_EOL . 
				(isset($sub['Template']) ? $sub['Template']['php'] : '') . PHP_EOL .
			'}';
	}

	/* Require: '<%' < 'require' [ Call:(Method:Word "(" < :CallArguments  > ")") > '%>' */
	protected $match_Require_typestack = array('Require');
	function match_Require ($stack = array()) {
		$matchrule = "Require"; $result = $this->construct($matchrule, $matchrule, null);
		$_322 = NULL;
		do {
			if (( $subres = $this->literal( '<%' ) ) !== FALSE) { $result["text"] .= $subres; }
			else { $_322 = FALSE; break; }
			if (( $subres = $this->whitespace(  ) ) !== FALSE) { $result["text"] .= $subres; }
			if (( $subres = $this->literal( 'require' ) ) !== FALSE) { $result["text"] .= $subres; }
			else { $_322 = FALSE; break; }
			if (( $subres = $this->whitespace(  ) ) !== FALSE) { $result["text"] .= $subres; }
			else { $_322 = FALSE; break; }
			$stack[] = $result; $result = $this->construct( $matchrule, "Call" ); 
			$_318 = NULL;
			do {
				$matcher = 'match_'.'Word'; $key = $matcher; $pos = $this->pos;
				$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
				if ($subres !== FALSE) {
					$this->store( $result, $subres, "Method" );
				}
				else { $_318 = FALSE; break; }
				if (substr($this->string,$this->pos,1) == '(') {
					$this->pos += 1;
					$result["text"] .= '(';
				}
				else { $_318 = FALSE; break; }
				if (( $subres = $this->whitespace(  ) ) !== FALSE) { $result["text"] .= $subres; }
				$matcher = 'match_'.'CallArguments'; $key = $matcher; $pos = $this->pos;
				$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
				if ($subres !== FALSE) {
					$this->store( $result, $subres, "CallArguments" );
				}
				else { $_318 = FALSE; break; }
				if (( $subres = $this->whitespace(  ) ) !== FALSE) { $result["text"] .= $subres; }
				if (substr($this->string,$this->pos,1) == ')') {
					$this->pos += 1;
					$result["text"] .= ')';
				}
				else { $_318 = FALSE; break; }
				$_318 = TRUE; break;
			}
			while(0);
			if( $_318 === TRUE ) {
				$subres = $result; $result = array_pop($stack);
				$this->store( $result, $subres, 'Call' );
			}
			if( $_318 === FALSE) {
				$result = array_pop($stack);
				$_322 = FALSE; break;
			}
			if (( $subres = $this->whitespace(  ) ) !== FALSE) { $result["text"] .= $subres; }
			if (( $subres = $this->literal( '%>' ) ) !== FALSE) { $result["text"] .= $subres; }
			else { $_322 = FALSE; break; }
			$_322 = TRUE; break;
		}
		while(0);
		if( $_322 === TRUE ) { return $this->finalise($result); }
		if( $_322 === FALSE) { return FALSE; }
	}



	function Require_Call(&$res, $sub) {
		$res['php'] = "Requirements::".$sub['Method']['text'].'('.$sub['CallArguments']['php'].');';
	}

				
	/* CacheBlockArgument:
   !( "if " | "unless " )
	( 
	  :DollarMarkedLookup |
		:QuotedString |
		:Lookup
	) */
	protected $match_CacheBlockArgument_typestack = array('CacheBlockArgument');
	function match_CacheBlockArgument ($stack = array()) {
		$matchrule = "CacheBlockArgument"; $result = $this->construct($matchrule, $matchrule, null);
		$_342 = NULL;
		do {
			$res_330 = $result;
			$pos_330 = $this->pos;
			$_329 = NULL;
			do {
				$_327 = NULL;
				do {
					$res_324 = $result;
					$pos_324 = $this->pos;
					if (( $subres = $this->literal( 'if ' ) ) !== FALSE) {
						$result["text"] .= $subres;
						$_327 = TRUE; break;
					}
					$result = $res_324;
					$this->pos = $pos_324;
					if (( $subres = $this->literal( 'unless ' ) ) !== FALSE) {
						$result["text"] .= $subres;
						$_327 = TRUE; break;
					}
					$result = $res_324;
					$this->pos = $pos_324;
					$_327 = FALSE; break;
				}
				while(0);
				if( $_327 === FALSE) { $_329 = FALSE; break; }
				$_329 = TRUE; break;
			}
			while(0);
			if( $_329 === TRUE ) {
				$result = $res_330;
				$this->pos = $pos_330;
				$_342 = FALSE; break;
			}
			if( $_329 === FALSE) {
				$result = $res_330;
				$this->pos = $pos_330;
			}
			$_340 = NULL;
			do {
				$_338 = NULL;
				do {
					$res_331 = $result;
					$pos_331 = $this->pos;
					$matcher = 'match_'.'DollarMarkedLookup'; $key = $matcher; $pos = $this->pos;
					$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
					if ($subres !== FALSE) {
						$this->store( $result, $subres, "DollarMarkedLookup" );
						$_338 = TRUE; break;
					}
					$result = $res_331;
					$this->pos = $pos_331;
					$_336 = NULL;
					do {
						$res_333 = $result;
						$pos_333 = $this->pos;
						$matcher = 'match_'.'QuotedString'; $key = $matcher; $pos = $this->pos;
						$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
						if ($subres !== FALSE) {
							$this->store( $result, $subres, "QuotedString" );
							$_336 = TRUE; break;
						}
						$result = $res_333;
						$this->pos = $pos_333;
						$matcher = 'match_'.'Lookup'; $key = $matcher; $pos = $this->pos;
						$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
						if ($subres !== FALSE) {
							$this->store( $result, $subres, "Lookup" );
							$_336 = TRUE; break;
						}
						$result = $res_333;
						$this->pos = $pos_333;
						$_336 = FALSE; break;
					}
					while(0);
					if( $_336 === TRUE ) { $_338 = TRUE; break; }
					$result = $res_331;
					$this->pos = $pos_331;
					$_338 = FALSE; break;
				}
				while(0);
				if( $_338 === FALSE) { $_340 = FALSE; break; }
				$_340 = TRUE; break;
			}
			while(0);
			if( $_340 === FALSE) { $_342 = FALSE; break; }
			$_342 = TRUE; break;
		}
		while(0);
		if( $_342 === TRUE ) { return $this->finalise($result); }
		if( $_342 === FALSE) { return FALSE; }
	}



	function CacheBlockArgument_DollarMarkedLookup(&$res, $sub) {
		$res['php'] = $sub['Lookup']['php'];
	}
				
	function CacheBlockArgument_QuotedString(&$res, $sub) {
		$res['php'] = "'" . str_replace("'", "\\'", $sub['String']['text']) . "'";
	}
				
	function CacheBlockArgument_Lookup(&$res, $sub) {
		$res['php'] = $sub['php'];
	}
								
	/* CacheBlockArguments: CacheBlockArgument ( < "," < CacheBlockArgument )* */
	protected $match_CacheBlockArguments_typestack = array('CacheBlockArguments');
	function match_CacheBlockArguments ($stack = array()) {
		$matchrule = "CacheBlockArguments"; $result = $this->construct($matchrule, $matchrule, null);
		$_351 = NULL;
		do {
			$matcher = 'match_'.'CacheBlockArgument'; $key = $matcher; $pos = $this->pos;
			$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
			if ($subres !== FALSE) { $this->store( $result, $subres ); }
			else { $_351 = FALSE; break; }
			while (true) {
				$res_350 = $result;
				$pos_350 = $this->pos;
				$_349 = NULL;
				do {
					if (( $subres = $this->whitespace(  ) ) !== FALSE) { $result["text"] .= $subres; }
					if (substr($this->string,$this->pos,1) == ',') {
						$this->pos += 1;
						$result["text"] .= ',';
					}
					else { $_349 = FALSE; break; }
					if (( $subres = $this->whitespace(  ) ) !== FALSE) { $result["text"] .= $subres; }
					$matcher = 'match_'.'CacheBlockArgument'; $key = $matcher; $pos = $this->pos;
					$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
					if ($subres !== FALSE) { $this->store( $result, $subres ); }
					else { $_349 = FALSE; break; }
					$_349 = TRUE; break;
				}
				while(0);
				if( $_349 === FALSE) {
					$result = $res_350;
					$this->pos = $pos_350;
					unset( $res_350 );
					unset( $pos_350 );
					break;
				}
			}
			$_351 = TRUE; break;
		}
		while(0);
		if( $_351 === TRUE ) { return $this->finalise($result); }
		if( $_351 === FALSE) { return FALSE; }
	}



	function CacheBlockArguments_CacheBlockArgument(&$res, $sub) {
		if (!empty($res['php'])) $res['php'] .= ".'_'.";
		else $res['php'] = '';
								
		$res['php'] .= str_replace('$$FINAL', 'XML_val', $sub['php']);
	}
				
	/* CacheBlockTemplate: (Comment | Translate | If | Require |    OldI18NTag | Include | Compose | ComposeShort | Composed | ClosedBlock |
	OpenBlock | MalformedBlock | Injection | Text)+ */
	protected $match_CacheBlockTemplate_typestack = array('CacheBlockTemplate','Template');
	function match_CacheBlockTemplate ($stack = array()) {
		$matchrule = "CacheBlockTemplate"; $result = $this->construct($matchrule, $matchrule, array('TemplateMatcher' => 'CacheRestrictedTemplate'));
		$count = 0;
		while (true) {
			$res_407 = $result;
			$pos_407 = $this->pos;
			$_406 = NULL;
			do {
				$_404 = NULL;
				do {
					$res_353 = $result;
					$pos_353 = $this->pos;
					$matcher = 'match_'.'Comment'; $key = $matcher; $pos = $this->pos;
					$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
					if ($subres !== FALSE) {
						$this->store( $result, $subres );
						$_404 = TRUE; break;
					}
					$result = $res_353;
					$this->pos = $pos_353;
					$_402 = NULL;
					do {
						$res_355 = $result;
						$pos_355 = $this->pos;
						$matcher = 'match_'.'Translate'; $key = $matcher; $pos = $this->pos;
						$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
						if ($subres !== FALSE) {
							$this->store( $result, $subres );
							$_402 = TRUE; break;
						}
						$result = $res_355;
						$this->pos = $pos_355;
						$_400 = NULL;
						do {
							$res_357 = $result;
							$pos_357 = $this->pos;
							$matcher = 'match_'.'If'; $key = $matcher; $pos = $this->pos;
							$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
							if ($subres !== FALSE) {
								$this->store( $result, $subres );
								$_400 = TRUE; break;
							}
							$result = $res_357;
							$this->pos = $pos_357;
							$_398 = NULL;
							do {
								$res_359 = $result;
								$pos_359 = $this->pos;
								$matcher = 'match_'.'Require'; $key = $matcher; $pos = $this->pos;
								$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
								if ($subres !== FALSE) {
									$this->store( $result, $subres );
									$_398 = TRUE; break;
								}
								$result = $res_359;
								$this->pos = $pos_359;
								$_396 = NULL;
								do {
									$res_361 = $result;
									$pos_361 = $this->pos;
									$matcher = 'match_'.'OldI18NTag'; $key = $matcher; $pos = $this->pos;
									$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
									if ($subres !== FALSE) {
										$this->store( $result, $subres );
										$_396 = TRUE; break;
									}
									$result = $res_361;
									$this->pos = $pos_361;
									$_394 = NULL;
									do {
										$res_363 = $result;
										$pos_363 = $this->pos;
										$matcher = 'match_'.'Include'; $key = $matcher; $pos = $this->pos;
										$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
										if ($subres !== FALSE) {
											$this->store( $result, $subres );
											$_394 = TRUE; break;
										}
										$result = $res_363;
										$this->pos = $pos_363;
										$_392 = NULL;
										do {
											$res_365 = $result;
											$pos_365 = $this->pos;
											$matcher = 'match_'.'Compose'; $key = $matcher; $pos = $this->pos;
											$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
											if ($subres !== FALSE) {
												$this->store( $result, $subres );
												$_392 = TRUE; break;
											}
											$result = $res_365;
											$this->pos = $pos_365;
											$_390 = NULL;
											do {
												$res_367 = $result;
												$pos_367 = $this->pos;
												$matcher = 'match_'.'ComposeShort'; $key = $matcher; $pos = $this->pos;
												$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
												if ($subres !== FALSE) {
													$this->store( $result, $subres );
													$_390 = TRUE; break;
												}
												$result = $res_367;
												$this->pos = $pos_367;
												$_388 = NULL;
												do {
													$res_369 = $result;
													$pos_369 = $this->pos;
													$matcher = 'match_'.'Composed'; $key = $matcher; $pos = $this->pos;
													$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
													if ($subres !== FALSE) {
														$this->store( $result, $subres );
														$_388 = TRUE; break;
													}
													$result = $res_369;
													$this->pos = $pos_369;
													$_386 = NULL;
													do {
														$res_371 = $result;
														$pos_371 = $this->pos;
														$matcher = 'match_'.'ClosedBlock'; $key = $matcher; $pos = $this->pos;
														$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
														if ($subres !== FALSE) {
															$this->store( $result, $subres );
															$_386 = TRUE; break;
														}
														$result = $res_371;
														$this->pos = $pos_371;
														$_384 = NULL;
														do {
															$res_373 = $result;
															$pos_373 = $this->pos;
															$matcher = 'match_'.'OpenBlock'; $key = $matcher; $pos = $this->pos;
															$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
															if ($subres !== FALSE) {
																$this->store( $result, $subres );
																$_384 = TRUE; break;
															}
															$result = $res_373;
															$this->pos = $pos_373;
															$_382 = NULL;
															do {
																$res_375 = $result;
																$pos_375 = $this->pos;
																$matcher = 'match_'.'MalformedBlock'; $key = $matcher; $pos = $this->pos;
																$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
																if ($subres !== FALSE) {
																	$this->store( $result, $subres );
																	$_382 = TRUE; break;
																}
																$result = $res_375;
																$this->pos = $pos_375;
																$_380 = NULL;
																do {
																	$res_377 = $result;
																	$pos_377 = $this->pos;
																	$matcher = 'match_'.'Injection'; $key = $matcher; $pos = $this->pos;
																	$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
																	if ($subres !== FALSE) {
																		$this->store( $result, $subres );
																		$_380 = TRUE; break;
																	}
																	$result = $res_377;
																	$this->pos = $pos_377;
																	$matcher = 'match_'.'Text'; $key = $matcher; $pos = $this->pos;
																	$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
																	if ($subres !== FALSE) {
																		$this->store( $result, $subres );
																		$_380 = TRUE; break;
																	}
																	$result = $res_377;
																	$this->pos = $pos_377;
																	$_380 = FALSE; break;
																}
																while(0);
																if( $_380 === TRUE ) { $_382 = TRUE; break; }
																$result = $res_375;
																$this->pos = $pos_375;
																$_382 = FALSE; break;
															}
															while(0);
															if( $_382 === TRUE ) { $_384 = TRUE; break; }
															$result = $res_373;
															$this->pos = $pos_373;
															$_384 = FALSE; break;
														}
														while(0);
														if( $_384 === TRUE ) { $_386 = TRUE; break; }
														$result = $res_371;
														$this->pos = $pos_371;
														$_386 = FALSE; break;
													}
													while(0);
													if( $_386 === TRUE ) { $_388 = TRUE; break; }
													$result = $res_369;
													$this->pos = $pos_369;
													$_388 = FALSE; break;
												}
												while(0);
												if( $_388 === TRUE ) { $_390 = TRUE; break; }
												$result = $res_367;
												$this->pos = $pos_367;
												$_390 = FALSE; break;
											}
											while(0);
											if( $_390 === TRUE ) { $_392 = TRUE; break; }
											$result = $res_365;
											$this->pos = $pos_365;
											$_392 = FALSE; break;
										}
										while(0);
										if( $_392 === TRUE ) { $_394 = TRUE; break; }
										$result = $res_363;
										$this->pos = $pos_363;
										$_394 = FALSE; break;
									}
									while(0);
									if( $_394 === TRUE ) { $_396 = TRUE; break; }
									$result = $res_361;
									$this->pos = $pos_361;
									$_396 = FALSE; break;
								}
								while(0);
								if( $_396 === TRUE ) { $_398 = TRUE; break; }
								$result = $res_359;
								$this->pos = $pos_359;
								$_398 = FALSE; break;
							}
							while(0);
							if( $_398 === TRUE ) { $_400 = TRUE; break; }
							$result = $res_357;
							$this->pos = $pos_357;
							$_400 = FALSE; break;
						}
						while(0);
						if( $_400 === TRUE ) { $_402 = TRUE; break; }
						$result = $res_355;
						$this->pos = $pos_355;
						$_402 = FALSE; break;
					}
					while(0);
					if( $_402 === TRUE ) { $_404 = TRUE; break; }
					$result = $res_353;
					$this->pos = $pos_353;
					$_404 = FALSE; break;
				}
				while(0);
				if( $_404 === FALSE) { $_406 = FALSE; break; }
				$_406 = TRUE; break;
			}
			while(0);
			if( $_406 === FALSE) {
				$result = $res_407;
				$this->pos = $pos_407;
				unset( $res_407 );
				unset( $pos_407 );
				break;
			}
			$count += 1;
		}
		if ($count > 0) { return $this->finalise($result); }
		else { return FALSE; }
	}



								
	/* UncachedBlock: 
	'<%' < "uncached" < CacheBlockArguments? ( < Conditional:("if"|"unless") > Condition:IfArgument )? > '%>'
		Template:$TemplateMatcher?
		'<%' < 'end_' ("uncached"|"cached"|"cacheblock") > '%>' */
	protected $match_UncachedBlock_typestack = array('UncachedBlock');
	function match_UncachedBlock ($stack = array()) {
		$matchrule = "UncachedBlock"; $result = $this->construct($matchrule, $matchrule, null);
		$_444 = NULL;
		do {
			if (( $subres = $this->literal( '<%' ) ) !== FALSE) { $result["text"] .= $subres; }
			else { $_444 = FALSE; break; }
			if (( $subres = $this->whitespace(  ) ) !== FALSE) { $result["text"] .= $subres; }
			if (( $subres = $this->literal( 'uncached' ) ) !== FALSE) { $result["text"] .= $subres; }
			else { $_444 = FALSE; break; }
			if (( $subres = $this->whitespace(  ) ) !== FALSE) { $result["text"] .= $subres; }
			$res_412 = $result;
			$pos_412 = $this->pos;
			$matcher = 'match_'.'CacheBlockArguments'; $key = $matcher; $pos = $this->pos;
			$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
			if ($subres !== FALSE) { $this->store( $result, $subres ); }
			else {
				$result = $res_412;
				$this->pos = $pos_412;
				unset( $res_412 );
				unset( $pos_412 );
			}
			$res_424 = $result;
			$pos_424 = $this->pos;
			$_423 = NULL;
			do {
				if (( $subres = $this->whitespace(  ) ) !== FALSE) { $result["text"] .= $subres; }
				$stack[] = $result; $result = $this->construct( $matchrule, "Conditional" ); 
				$_419 = NULL;
				do {
					$_417 = NULL;
					do {
						$res_414 = $result;
						$pos_414 = $this->pos;
						if (( $subres = $this->literal( 'if' ) ) !== FALSE) {
							$result["text"] .= $subres;
							$_417 = TRUE; break;
						}
						$result = $res_414;
						$this->pos = $pos_414;
						if (( $subres = $this->literal( 'unless' ) ) !== FALSE) {
							$result["text"] .= $subres;
							$_417 = TRUE; break;
						}
						$result = $res_414;
						$this->pos = $pos_414;
						$_417 = FALSE; break;
					}
					while(0);
					if( $_417 === FALSE) { $_419 = FALSE; break; }
					$_419 = TRUE; break;
				}
				while(0);
				if( $_419 === TRUE ) {
					$subres = $result; $result = array_pop($stack);
					$this->store( $result, $subres, 'Conditional' );
				}
				if( $_419 === FALSE) {
					$result = array_pop($stack);
					$_423 = FALSE; break;
				}
				if (( $subres = $this->whitespace(  ) ) !== FALSE) { $result["text"] .= $subres; }
				$matcher = 'match_'.'IfArgument'; $key = $matcher; $pos = $this->pos;
				$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
				if ($subres !== FALSE) {
					$this->store( $result, $subres, "Condition" );
				}
				else { $_423 = FALSE; break; }
				$_423 = TRUE; break;
			}
			while(0);
			if( $_423 === FALSE) {
				$result = $res_424;
				$this->pos = $pos_424;
				unset( $res_424 );
				unset( $pos_424 );
			}
			if (( $subres = $this->whitespace(  ) ) !== FALSE) { $result["text"] .= $subres; }
			if (( $subres = $this->literal( '%>' ) ) !== FALSE) { $result["text"] .= $subres; }
			else { $_444 = FALSE; break; }
			$res_427 = $result;
			$pos_427 = $this->pos;
			$matcher = 'match_'.$this->expression($result, $stack, 'TemplateMatcher'); $key = $matcher; $pos = $this->pos;
			$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
			if ($subres !== FALSE) {
				$this->store( $result, $subres, "Template" );
			}
			else {
				$result = $res_427;
				$this->pos = $pos_427;
				unset( $res_427 );
				unset( $pos_427 );
			}
			if (( $subres = $this->literal( '<%' ) ) !== FALSE) { $result["text"] .= $subres; }
			else { $_444 = FALSE; break; }
			if (( $subres = $this->whitespace(  ) ) !== FALSE) { $result["text"] .= $subres; }
			if (( $subres = $this->literal( 'end_' ) ) !== FALSE) { $result["text"] .= $subres; }
			else { $_444 = FALSE; break; }
			$_440 = NULL;
			do {
				$_438 = NULL;
				do {
					$res_431 = $result;
					$pos_431 = $this->pos;
					if (( $subres = $this->literal( 'uncached' ) ) !== FALSE) {
						$result["text"] .= $subres;
						$_438 = TRUE; break;
					}
					$result = $res_431;
					$this->pos = $pos_431;
					$_436 = NULL;
					do {
						$res_433 = $result;
						$pos_433 = $this->pos;
						if (( $subres = $this->literal( 'cached' ) ) !== FALSE) {
							$result["text"] .= $subres;
							$_436 = TRUE; break;
						}
						$result = $res_433;
						$this->pos = $pos_433;
						if (( $subres = $this->literal( 'cacheblock' ) ) !== FALSE) {
							$result["text"] .= $subres;
							$_436 = TRUE; break;
						}
						$result = $res_433;
						$this->pos = $pos_433;
						$_436 = FALSE; break;
					}
					while(0);
					if( $_436 === TRUE ) { $_438 = TRUE; break; }
					$result = $res_431;
					$this->pos = $pos_431;
					$_438 = FALSE; break;
				}
				while(0);
				if( $_438 === FALSE) { $_440 = FALSE; break; }
				$_440 = TRUE; break;
			}
			while(0);
			if( $_440 === FALSE) { $_444 = FALSE; break; }
			if (( $subres = $this->whitespace(  ) ) !== FALSE) { $result["text"] .= $subres; }
			if (( $subres = $this->literal( '%>' ) ) !== FALSE) { $result["text"] .= $subres; }
			else { $_444 = FALSE; break; }
			$_444 = TRUE; break;
		}
		while(0);
		if( $_444 === TRUE ) { return $this->finalise($result); }
		if( $_444 === FALSE) { return FALSE; }
	}



	function UncachedBlock_Template(&$res, $sub){
		$res['php'] = $sub['php'];
	}
				
	/* CacheRestrictedTemplate: (Comment | Translate | If | Require | CacheBlock | UncachedBlock | OldI18NTag | Include | Compose | ComposeShort | Composed | ClosedBlock |
	OpenBlock | MalformedBlock | Injection | Text)+ */
	protected $match_CacheRestrictedTemplate_typestack = array('CacheRestrictedTemplate','Template');
	function match_CacheRestrictedTemplate ($stack = array()) {
		$matchrule = "CacheRestrictedTemplate"; $result = $this->construct($matchrule, $matchrule, null);
		$count = 0;
		while (true) {
			$res_508 = $result;
			$pos_508 = $this->pos;
			$_507 = NULL;
			do {
				$_505 = NULL;
				do {
					$res_446 = $result;
					$pos_446 = $this->pos;
					$matcher = 'match_'.'Comment'; $key = $matcher; $pos = $this->pos;
					$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
					if ($subres !== FALSE) {
						$this->store( $result, $subres );
						$_505 = TRUE; break;
					}
					$result = $res_446;
					$this->pos = $pos_446;
					$_503 = NULL;
					do {
						$res_448 = $result;
						$pos_448 = $this->pos;
						$matcher = 'match_'.'Translate'; $key = $matcher; $pos = $this->pos;
						$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
						if ($subres !== FALSE) {
							$this->store( $result, $subres );
							$_503 = TRUE; break;
						}
						$result = $res_448;
						$this->pos = $pos_448;
						$_501 = NULL;
						do {
							$res_450 = $result;
							$pos_450 = $this->pos;
							$matcher = 'match_'.'If'; $key = $matcher; $pos = $this->pos;
							$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
							if ($subres !== FALSE) {
								$this->store( $result, $subres );
								$_501 = TRUE; break;
							}
							$result = $res_450;
							$this->pos = $pos_450;
							$_499 = NULL;
							do {
								$res_452 = $result;
								$pos_452 = $this->pos;
								$matcher = 'match_'.'Require'; $key = $matcher; $pos = $this->pos;
								$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
								if ($subres !== FALSE) {
									$this->store( $result, $subres );
									$_499 = TRUE; break;
								}
								$result = $res_452;
								$this->pos = $pos_452;
								$_497 = NULL;
								do {
									$res_454 = $result;
									$pos_454 = $this->pos;
									$matcher = 'match_'.'CacheBlock'; $key = $matcher; $pos = $this->pos;
									$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
									if ($subres !== FALSE) {
										$this->store( $result, $subres );
										$_497 = TRUE; break;
									}
									$result = $res_454;
									$this->pos = $pos_454;
									$_495 = NULL;
									do {
										$res_456 = $result;
										$pos_456 = $this->pos;
										$matcher = 'match_'.'UncachedBlock'; $key = $matcher; $pos = $this->pos;
										$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
										if ($subres !== FALSE) {
											$this->store( $result, $subres );
											$_495 = TRUE; break;
										}
										$result = $res_456;
										$this->pos = $pos_456;
										$_493 = NULL;
										do {
											$res_458 = $result;
											$pos_458 = $this->pos;
											$matcher = 'match_'.'OldI18NTag'; $key = $matcher; $pos = $this->pos;
											$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
											if ($subres !== FALSE) {
												$this->store( $result, $subres );
												$_493 = TRUE; break;
											}
											$result = $res_458;
											$this->pos = $pos_458;
											$_491 = NULL;
											do {
												$res_460 = $result;
												$pos_460 = $this->pos;
												$matcher = 'match_'.'Include'; $key = $matcher; $pos = $this->pos;
												$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
												if ($subres !== FALSE) {
													$this->store( $result, $subres );
													$_491 = TRUE; break;
												}
												$result = $res_460;
												$this->pos = $pos_460;
												$_489 = NULL;
												do {
													$res_462 = $result;
													$pos_462 = $this->pos;
													$matcher = 'match_'.'Compose'; $key = $matcher; $pos = $this->pos;
													$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
													if ($subres !== FALSE) {
														$this->store( $result, $subres );
														$_489 = TRUE; break;
													}
													$result = $res_462;
													$this->pos = $pos_462;
													$_487 = NULL;
													do {
														$res_464 = $result;
														$pos_464 = $this->pos;
														$matcher = 'match_'.'ComposeShort'; $key = $matcher; $pos = $this->pos;
														$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
														if ($subres !== FALSE) {
															$this->store( $result, $subres );
															$_487 = TRUE; break;
														}
														$result = $res_464;
														$this->pos = $pos_464;
														$_485 = NULL;
														do {
															$res_466 = $result;
															$pos_466 = $this->pos;
															$matcher = 'match_'.'Composed'; $key = $matcher; $pos = $this->pos;
															$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
															if ($subres !== FALSE) {
																$this->store( $result, $subres );
																$_485 = TRUE; break;
															}
															$result = $res_466;
															$this->pos = $pos_466;
															$_483 = NULL;
															do {
																$res_468 = $result;
																$pos_468 = $this->pos;
																$matcher = 'match_'.'ClosedBlock'; $key = $matcher; $pos = $this->pos;
																$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
																if ($subres !== FALSE) {
																	$this->store( $result, $subres );
																	$_483 = TRUE; break;
																}
																$result = $res_468;
																$this->pos = $pos_468;
																$_481 = NULL;
																do {
																	$res_470 = $result;
																	$pos_470 = $this->pos;
																	$matcher = 'match_'.'OpenBlock'; $key = $matcher; $pos = $this->pos;
																	$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
																	if ($subres !== FALSE) {
																		$this->store( $result, $subres );
																		$_481 = TRUE; break;
																	}
																	$result = $res_470;
																	$this->pos = $pos_470;
																	$_479 = NULL;
																	do {
																		$res_472 = $result;
																		$pos_472 = $this->pos;
																		$matcher = 'match_'.'MalformedBlock'; $key = $matcher; $pos = $this->pos;
																		$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
																		if ($subres !== FALSE) {
																			$this->store( $result, $subres );
																			$_479 = TRUE; break;
																		}
																		$result = $res_472;
																		$this->pos = $pos_472;
																		$_477 = NULL;
																		do {
																			$res_474 = $result;
																			$pos_474 = $this->pos;
																			$matcher = 'match_'.'Injection'; $key = $matcher; $pos = $this->pos;
																			$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
																			if ($subres !== FALSE) {
																				$this->store( $result, $subres );
																				$_477 = TRUE; break;
																			}
																			$result = $res_474;
																			$this->pos = $pos_474;
																			$matcher = 'match_'.'Text'; $key = $matcher; $pos = $this->pos;
																			$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
																			if ($subres !== FALSE) {
																				$this->store( $result, $subres );
																				$_477 = TRUE; break;
																			}
																			$result = $res_474;
																			$this->pos = $pos_474;
																			$_477 = FALSE; break;
																		}
																		while(0);
																		if( $_477 === TRUE ) { $_479 = TRUE; break; }
																		$result = $res_472;
																		$this->pos = $pos_472;
																		$_479 = FALSE; break;
																	}
																	while(0);
																	if( $_479 === TRUE ) { $_481 = TRUE; break; }
																	$result = $res_470;
																	$this->pos = $pos_470;
																	$_481 = FALSE; break;
																}
																while(0);
																if( $_481 === TRUE ) { $_483 = TRUE; break; }
																$result = $res_468;
																$this->pos = $pos_468;
																$_483 = FALSE; break;
															}
															while(0);
															if( $_483 === TRUE ) { $_485 = TRUE; break; }
															$result = $res_466;
															$this->pos = $pos_466;
															$_485 = FALSE; break;
														}
														while(0);
														if( $_485 === TRUE ) { $_487 = TRUE; break; }
														$result = $res_464;
														$this->pos = $pos_464;
														$_487 = FALSE; break;
													}
													while(0);
													if( $_487 === TRUE ) { $_489 = TRUE; break; }
													$result = $res_462;
													$this->pos = $pos_462;
													$_489 = FALSE; break;
												}
												while(0);
												if( $_489 === TRUE ) { $_491 = TRUE; break; }
												$result = $res_460;
												$this->pos = $pos_460;
												$_491 = FALSE; break;
											}
											while(0);
											if( $_491 === TRUE ) { $_493 = TRUE; break; }
											$result = $res_458;
											$this->pos = $pos_458;
											$_493 = FALSE; break;
										}
										while(0);
										if( $_493 === TRUE ) { $_495 = TRUE; break; }
										$result = $res_456;
										$this->pos = $pos_456;
										$_495 = FALSE; break;
									}
									while(0);
									if( $_495 === TRUE ) { $_497 = TRUE; break; }
									$result = $res_454;
									$this->pos = $pos_454;
									$_497 = FALSE; break;
								}
								while(0);
								if( $_497 === TRUE ) { $_499 = TRUE; break; }
								$result = $res_452;
								$this->pos = $pos_452;
								$_499 = FALSE; break;
							}
							while(0);
							if( $_499 === TRUE ) { $_501 = TRUE; break; }
							$result = $res_450;
							$this->pos = $pos_450;
							$_501 = FALSE; break;
						}
						while(0);
						if( $_501 === TRUE ) { $_503 = TRUE; break; }
						$result = $res_448;
						$this->pos = $pos_448;
						$_503 = FALSE; break;
					}
					while(0);
					if( $_503 === TRUE ) { $_505 = TRUE; break; }
					$result = $res_446;
					$this->pos = $pos_446;
					$_505 = FALSE; break;
				}
				while(0);
				if( $_505 === FALSE) { $_507 = FALSE; break; }
				$_507 = TRUE; break;
			}
			while(0);
			if( $_507 === FALSE) {
				$result = $res_508;
				$this->pos = $pos_508;
				unset( $res_508 );
				unset( $pos_508 );
				break;
			}
			$count += 1;
		}
		if ($count > 0) { return $this->finalise($result); }
		else { return FALSE; }
	}



	function CacheRestrictedTemplate_CacheBlock(&$res, $sub) { 
		throw new SSTemplateParseException('You cant have cache blocks nested within with, loop or control blocks ' .
			'that are within cache blocks', $this);
	}
				
	function CacheRestrictedTemplate_UncachedBlock(&$res, $sub) { 
		throw new SSTemplateParseException('You cant have uncache blocks nested within with, loop or control blocks ' .
			'that are within cache blocks', $this);
	}
				
	/* CacheBlock: 
	'<%' < CacheTag:("cached"|"cacheblock") < (CacheBlockArguments)? ( < Conditional:("if"|"unless") >
	Condition:IfArgument )? > '%>'
		(CacheBlock | UncachedBlock | CacheBlockTemplate)*
	'<%' < 'end_' ("cached"|"uncached"|"cacheblock") > '%>' */
	protected $match_CacheBlock_typestack = array('CacheBlock');
	function match_CacheBlock ($stack = array()) {
		$matchrule = "CacheBlock"; $result = $this->construct($matchrule, $matchrule, null);
		$_563 = NULL;
		do {
			if (( $subres = $this->literal( '<%' ) ) !== FALSE) { $result["text"] .= $subres; }
			else { $_563 = FALSE; break; }
			if (( $subres = $this->whitespace(  ) ) !== FALSE) { $result["text"] .= $subres; }
			$stack[] = $result; $result = $this->construct( $matchrule, "CacheTag" ); 
			$_516 = NULL;
			do {
				$_514 = NULL;
				do {
					$res_511 = $result;
					$pos_511 = $this->pos;
					if (( $subres = $this->literal( 'cached' ) ) !== FALSE) {
						$result["text"] .= $subres;
						$_514 = TRUE; break;
					}
					$result = $res_511;
					$this->pos = $pos_511;
					if (( $subres = $this->literal( 'cacheblock' ) ) !== FALSE) {
						$result["text"] .= $subres;
						$_514 = TRUE; break;
					}
					$result = $res_511;
					$this->pos = $pos_511;
					$_514 = FALSE; break;
				}
				while(0);
				if( $_514 === FALSE) { $_516 = FALSE; break; }
				$_516 = TRUE; break;
			}
			while(0);
			if( $_516 === TRUE ) {
				$subres = $result; $result = array_pop($stack);
				$this->store( $result, $subres, 'CacheTag' );
			}
			if( $_516 === FALSE) {
				$result = array_pop($stack);
				$_563 = FALSE; break;
			}
			if (( $subres = $this->whitespace(  ) ) !== FALSE) { $result["text"] .= $subres; }
			$res_521 = $result;
			$pos_521 = $this->pos;
			$_520 = NULL;
			do {
				$matcher = 'match_'.'CacheBlockArguments'; $key = $matcher; $pos = $this->pos;
				$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
				if ($subres !== FALSE) { $this->store( $result, $subres ); }
				else { $_520 = FALSE; break; }
				$_520 = TRUE; break;
			}
			while(0);
			if( $_520 === FALSE) {
				$result = $res_521;
				$this->pos = $pos_521;
				unset( $res_521 );
				unset( $pos_521 );
			}
			$res_533 = $result;
			$pos_533 = $this->pos;
			$_532 = NULL;
			do {
				if (( $subres = $this->whitespace(  ) ) !== FALSE) { $result["text"] .= $subres; }
				$stack[] = $result; $result = $this->construct( $matchrule, "Conditional" ); 
				$_528 = NULL;
				do {
					$_526 = NULL;
					do {
						$res_523 = $result;
						$pos_523 = $this->pos;
						if (( $subres = $this->literal( 'if' ) ) !== FALSE) {
							$result["text"] .= $subres;
							$_526 = TRUE; break;
						}
						$result = $res_523;
						$this->pos = $pos_523;
						if (( $subres = $this->literal( 'unless' ) ) !== FALSE) {
							$result["text"] .= $subres;
							$_526 = TRUE; break;
						}
						$result = $res_523;
						$this->pos = $pos_523;
						$_526 = FALSE; break;
					}
					while(0);
					if( $_526 === FALSE) { $_528 = FALSE; break; }
					$_528 = TRUE; break;
				}
				while(0);
				if( $_528 === TRUE ) {
					$subres = $result; $result = array_pop($stack);
					$this->store( $result, $subres, 'Conditional' );
				}
				if( $_528 === FALSE) {
					$result = array_pop($stack);
					$_532 = FALSE; break;
				}
				if (( $subres = $this->whitespace(  ) ) !== FALSE) { $result["text"] .= $subres; }
				$matcher = 'match_'.'IfArgument'; $key = $matcher; $pos = $this->pos;
				$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
				if ($subres !== FALSE) {
					$this->store( $result, $subres, "Condition" );
				}
				else { $_532 = FALSE; break; }
				$_532 = TRUE; break;
			}
			while(0);
			if( $_532 === FALSE) {
				$result = $res_533;
				$this->pos = $pos_533;
				unset( $res_533 );
				unset( $pos_533 );
			}
			if (( $subres = $this->whitespace(  ) ) !== FALSE) { $result["text"] .= $subres; }
			if (( $subres = $this->literal( '%>' ) ) !== FALSE) { $result["text"] .= $subres; }
			else { $_563 = FALSE; break; }
			while (true) {
				$res_546 = $result;
				$pos_546 = $this->pos;
				$_545 = NULL;
				do {
					$_543 = NULL;
					do {
						$res_536 = $result;
						$pos_536 = $this->pos;
						$matcher = 'match_'.'CacheBlock'; $key = $matcher; $pos = $this->pos;
						$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
						if ($subres !== FALSE) {
							$this->store( $result, $subres );
							$_543 = TRUE; break;
						}
						$result = $res_536;
						$this->pos = $pos_536;
						$_541 = NULL;
						do {
							$res_538 = $result;
							$pos_538 = $this->pos;
							$matcher = 'match_'.'UncachedBlock'; $key = $matcher; $pos = $this->pos;
							$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
							if ($subres !== FALSE) {
								$this->store( $result, $subres );
								$_541 = TRUE; break;
							}
							$result = $res_538;
							$this->pos = $pos_538;
							$matcher = 'match_'.'CacheBlockTemplate'; $key = $matcher; $pos = $this->pos;
							$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
							if ($subres !== FALSE) {
								$this->store( $result, $subres );
								$_541 = TRUE; break;
							}
							$result = $res_538;
							$this->pos = $pos_538;
							$_541 = FALSE; break;
						}
						while(0);
						if( $_541 === TRUE ) { $_543 = TRUE; break; }
						$result = $res_536;
						$this->pos = $pos_536;
						$_543 = FALSE; break;
					}
					while(0);
					if( $_543 === FALSE) { $_545 = FALSE; break; }
					$_545 = TRUE; break;
				}
				while(0);
				if( $_545 === FALSE) {
					$result = $res_546;
					$this->pos = $pos_546;
					unset( $res_546 );
					unset( $pos_546 );
					break;
				}
			}
			if (( $subres = $this->literal( '<%' ) ) !== FALSE) { $result["text"] .= $subres; }
			else { $_563 = FALSE; break; }
			if (( $subres = $this->whitespace(  ) ) !== FALSE) { $result["text"] .= $subres; }
			if (( $subres = $this->literal( 'end_' ) ) !== FALSE) { $result["text"] .= $subres; }
			else { $_563 = FALSE; break; }
			$_559 = NULL;
			do {
				$_557 = NULL;
				do {
					$res_550 = $result;
					$pos_550 = $this->pos;
					if (( $subres = $this->literal( 'cached' ) ) !== FALSE) {
						$result["text"] .= $subres;
						$_557 = TRUE; break;
					}
					$result = $res_550;
					$this->pos = $pos_550;
					$_555 = NULL;
					do {
						$res_552 = $result;
						$pos_552 = $this->pos;
						if (( $subres = $this->literal( 'uncached' ) ) !== FALSE) {
							$result["text"] .= $subres;
							$_555 = TRUE; break;
						}
						$result = $res_552;
						$this->pos = $pos_552;
						if (( $subres = $this->literal( 'cacheblock' ) ) !== FALSE) {
							$result["text"] .= $subres;
							$_555 = TRUE; break;
						}
						$result = $res_552;
						$this->pos = $pos_552;
						$_555 = FALSE; break;
					}
					while(0);
					if( $_555 === TRUE ) { $_557 = TRUE; break; }
					$result = $res_550;
					$this->pos = $pos_550;
					$_557 = FALSE; break;
				}
				while(0);
				if( $_557 === FALSE) { $_559 = FALSE; break; }
				$_559 = TRUE; break;
			}
			while(0);
			if( $_559 === FALSE) { $_563 = FALSE; break; }
			if (( $subres = $this->whitespace(  ) ) !== FALSE) { $result["text"] .= $subres; }
			if (( $subres = $this->literal( '%>' ) ) !== FALSE) { $result["text"] .= $subres; }
			else { $_563 = FALSE; break; }
			$_563 = TRUE; break;
		}
		while(0);
		if( $_563 === TRUE ) { return $this->finalise($result); }
		if( $_563 === FALSE) { return FALSE; }
	}



	function CacheBlock__construct(&$res){
		$res['subblocks'] = 0;
	}
				
	function CacheBlock_CacheBlockArguments(&$res, $sub){
		$res['key'] = !empty($sub['php']) ? $sub['php'] : '';
	}
				
	function CacheBlock_Condition(&$res, $sub){
		$res['condition'] = ($res['Conditional']['text'] == 'if' ? '(' : '!(') . $sub['php'] . ') && ';
	}
				
	function CacheBlock_CacheBlock(&$res, $sub){
		$res['php'] .= $sub['php'];
	}
				
	function CacheBlock_UncachedBlock(&$res, $sub){
		$res['php'] .= $sub['php'];
	}
				
	function CacheBlock_CacheBlockTemplate(&$res, $sub){
		// Get the block counter
		$block = ++$res['subblocks'];
		// Build the key for this block from the passed cache key, the block index, and the sha hash of the template
		// itself
		$key = "'" . sha1($sub['php']) . (isset($res['key']) && $res['key'] ? "_'.sha1(".$res['key'].")" : "'") . 
			".'_$block'";
		// Get any condition
		$condition = isset($res['condition']) ? $res['condition'] : '';
								
		$res['php'] .= 'if ('.$condition.'($partial = $cache->load('.$key.'))) $val .= $partial;' . PHP_EOL;
		$res['php'] .= 'else { $oldval = $val; $val = "";' . PHP_EOL;
		$res['php'] .= $sub['php'] . PHP_EOL;
		$res['php'] .= $condition . ' $cache->save($val); $val = $oldval . $val;' . PHP_EOL;
		$res['php'] .= '}';
	}
				
	/* OldTPart: "_t" N "(" N QuotedString (N "," N CallArguments)? N ")" N (";")? */
	protected $match_OldTPart_typestack = array('OldTPart');
	function match_OldTPart ($stack = array()) {
		$matchrule = "OldTPart"; $result = $this->construct($matchrule, $matchrule, null);
		$_582 = NULL;
		do {
			if (( $subres = $this->literal( '_t' ) ) !== FALSE) { $result["text"] .= $subres; }
			else { $_582 = FALSE; break; }
			$matcher = 'match_'.'N'; $key = $matcher; $pos = $this->pos;
			$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
			if ($subres !== FALSE) { $this->store( $result, $subres ); }
			else { $_582 = FALSE; break; }
			if (substr($this->string,$this->pos,1) == '(') {
				$this->pos += 1;
				$result["text"] .= '(';
			}
			else { $_582 = FALSE; break; }
			$matcher = 'match_'.'N'; $key = $matcher; $pos = $this->pos;
			$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
			if ($subres !== FALSE) { $this->store( $result, $subres ); }
			else { $_582 = FALSE; break; }
			$matcher = 'match_'.'QuotedString'; $key = $matcher; $pos = $this->pos;
			$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
			if ($subres !== FALSE) { $this->store( $result, $subres ); }
			else { $_582 = FALSE; break; }
			$res_575 = $result;
			$pos_575 = $this->pos;
			$_574 = NULL;
			do {
				$matcher = 'match_'.'N'; $key = $matcher; $pos = $this->pos;
				$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
				if ($subres !== FALSE) { $this->store( $result, $subres ); }
				else { $_574 = FALSE; break; }
				if (substr($this->string,$this->pos,1) == ',') {
					$this->pos += 1;
					$result["text"] .= ',';
				}
				else { $_574 = FALSE; break; }
				$matcher = 'match_'.'N'; $key = $matcher; $pos = $this->pos;
				$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
				if ($subres !== FALSE) { $this->store( $result, $subres ); }
				else { $_574 = FALSE; break; }
				$matcher = 'match_'.'CallArguments'; $key = $matcher; $pos = $this->pos;
				$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
				if ($subres !== FALSE) { $this->store( $result, $subres ); }
				else { $_574 = FALSE; break; }
				$_574 = TRUE; break;
			}
			while(0);
			if( $_574 === FALSE) {
				$result = $res_575;
				$this->pos = $pos_575;
				unset( $res_575 );
				unset( $pos_575 );
			}
			$matcher = 'match_'.'N'; $key = $matcher; $pos = $this->pos;
			$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
			if ($subres !== FALSE) { $this->store( $result, $subres ); }
			else { $_582 = FALSE; break; }
			if (substr($this->string,$this->pos,1) == ')') {
				$this->pos += 1;
				$result["text"] .= ')';
			}
			else { $_582 = FALSE; break; }
			$matcher = 'match_'.'N'; $key = $matcher; $pos = $this->pos;
			$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
			if ($subres !== FALSE) { $this->store( $result, $subres ); }
			else { $_582 = FALSE; break; }
			$res_581 = $result;
			$pos_581 = $this->pos;
			$_580 = NULL;
			do {
				if (substr($this->string,$this->pos,1) == ';') {
					$this->pos += 1;
					$result["text"] .= ';';
				}
				else { $_580 = FALSE; break; }
				$_580 = TRUE; break;
			}
			while(0);
			if( $_580 === FALSE) {
				$result = $res_581;
				$this->pos = $pos_581;
				unset( $res_581 );
				unset( $pos_581 );
			}
			$_582 = TRUE; break;
		}
		while(0);
		if( $_582 === TRUE ) { return $this->finalise($result); }
		if( $_582 === FALSE) { return FALSE; }
	}


	/* N: / [\s\n]* / */
	protected $match_N_typestack = array('N');
	function match_N ($stack = array()) {
		$matchrule = "N"; $result = $this->construct($matchrule, $matchrule, null);
		if (( $subres = $this->rx( '/ [\s\n]* /' ) ) !== FALSE) {
			$result["text"] .= $subres;
			return $this->finalise($result);
		}
		else { return FALSE; }
	}



	function OldTPart__construct(&$res) {
		$res['php'] = "_t(";
	}
				
	function OldTPart_QuotedString(&$res, $sub) {
		$entity = $sub['String']['text'];
		if (strpos($entity, '.') === false) {
			$res['php'] .= "\$scope->XML_val('I18NNamespace').'.$entity'";
		}
		else {
			$res['php'] .= "'$entity'";
		}
	}
				
	function OldTPart_CallArguments(&$res, $sub) {
		$res['php'] .= ',' . $sub['php'];
	}

	function OldTPart__finalise(&$res) {
		$res['php'] .= ')';
	}
				
	/* OldTTag: "<%" < OldTPart > "%>" */
	protected $match_OldTTag_typestack = array('OldTTag');
	function match_OldTTag ($stack = array()) {
		$matchrule = "OldTTag"; $result = $this->construct($matchrule, $matchrule, null);
		$_590 = NULL;
		do {
			if (( $subres = $this->literal( '<%' ) ) !== FALSE) { $result["text"] .= $subres; }
			else { $_590 = FALSE; break; }
			if (( $subres = $this->whitespace(  ) ) !== FALSE) { $result["text"] .= $subres; }
			$matcher = 'match_'.'OldTPart'; $key = $matcher; $pos = $this->pos;
			$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
			if ($subres !== FALSE) { $this->store( $result, $subres ); }
			else { $_590 = FALSE; break; }
			if (( $subres = $this->whitespace(  ) ) !== FALSE) { $result["text"] .= $subres; }
			if (( $subres = $this->literal( '%>' ) ) !== FALSE) { $result["text"] .= $subres; }
			else { $_590 = FALSE; break; }
			$_590 = TRUE; break;
		}
		while(0);
		if( $_590 === TRUE ) { return $this->finalise($result); }
		if( $_590 === FALSE) { return FALSE; }
	}



	function OldTTag_OldTPart(&$res, $sub) {
		$res['php'] = $sub['php'];
	}

	/* OldSprintfTag: "<%" < "sprintf" < "(" < OldTPart < "," < CallArguments > ")" > "%>"  */
	protected $match_OldSprintfTag_typestack = array('OldSprintfTag');
	function match_OldSprintfTag ($stack = array()) {
		$matchrule = "OldSprintfTag"; $result = $this->construct($matchrule, $matchrule, null);
		$_607 = NULL;
		do {
			if (( $subres = $this->literal( '<%' ) ) !== FALSE) { $result["text"] .= $subres; }
			else { $_607 = FALSE; break; }
			if (( $subres = $this->whitespace(  ) ) !== FALSE) { $result["text"] .= $subres; }
			if (( $subres = $this->literal( 'sprintf' ) ) !== FALSE) { $result["text"] .= $subres; }
			else { $_607 = FALSE; break; }
			if (( $subres = $this->whitespace(  ) ) !== FALSE) { $result["text"] .= $subres; }
			if (substr($this->string,$this->pos,1) == '(') {
				$this->pos += 1;
				$result["text"] .= '(';
			}
			else { $_607 = FALSE; break; }
			if (( $subres = $this->whitespace(  ) ) !== FALSE) { $result["text"] .= $subres; }
			$matcher = 'match_'.'OldTPart'; $key = $matcher; $pos = $this->pos;
			$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
			if ($subres !== FALSE) { $this->store( $result, $subres ); }
			else { $_607 = FALSE; break; }
			if (( $subres = $this->whitespace(  ) ) !== FALSE) { $result["text"] .= $subres; }
			if (substr($this->string,$this->pos,1) == ',') {
				$this->pos += 1;
				$result["text"] .= ',';
			}
			else { $_607 = FALSE; break; }
			if (( $subres = $this->whitespace(  ) ) !== FALSE) { $result["text"] .= $subres; }
			$matcher = 'match_'.'CallArguments'; $key = $matcher; $pos = $this->pos;
			$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
			if ($subres !== FALSE) { $this->store( $result, $subres ); }
			else { $_607 = FALSE; break; }
			if (( $subres = $this->whitespace(  ) ) !== FALSE) { $result["text"] .= $subres; }
			if (substr($this->string,$this->pos,1) == ')') {
				$this->pos += 1;
				$result["text"] .= ')';
			}
			else { $_607 = FALSE; break; }
			if (( $subres = $this->whitespace(  ) ) !== FALSE) { $result["text"] .= $subres; }
			if (( $subres = $this->literal( '%>' ) ) !== FALSE) { $result["text"] .= $subres; }
			else { $_607 = FALSE; break; }
			$_607 = TRUE; break;
		}
		while(0);
		if( $_607 === TRUE ) { return $this->finalise($result); }
		if( $_607 === FALSE) { return FALSE; }
	}



	function OldSprintfTag__construct(&$res) {
		$res['php'] = "sprintf(";
	}
				
	function OldSprintfTag_OldTPart(&$res, $sub) {
		$res['php'] .= $sub['php'];
	}

	function OldSprintfTag_CallArguments(&$res, $sub) {
		$res['php'] .= ',' . $sub['php'] . ')';
	}
				
	/* OldI18NTag: OldSprintfTag | OldTTag */
	protected $match_OldI18NTag_typestack = array('OldI18NTag');
	function match_OldI18NTag ($stack = array()) {
		$matchrule = "OldI18NTag"; $result = $this->construct($matchrule, $matchrule, null);
		$_612 = NULL;
		do {
			$res_609 = $result;
			$pos_609 = $this->pos;
			$matcher = 'match_'.'OldSprintfTag'; $key = $matcher; $pos = $this->pos;
			$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
			if ($subres !== FALSE) {
				$this->store( $result, $subres );
				$_612 = TRUE; break;
			}
			$result = $res_609;
			$this->pos = $pos_609;
			$matcher = 'match_'.'OldTTag'; $key = $matcher; $pos = $this->pos;
			$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
			if ($subres !== FALSE) {
				$this->store( $result, $subres );
				$_612 = TRUE; break;
			}
			$result = $res_609;
			$this->pos = $pos_609;
			$_612 = FALSE; break;
		}
		while(0);
		if( $_612 === TRUE ) { return $this->finalise($result); }
		if( $_612 === FALSE) { return FALSE; }
	}



	function OldI18NTag_STR(&$res, $sub) {
		$res['php'] = '$val .= ' . $sub['php'] . ';';
	}

	/* NamedArgument: Name:Word "=" Value:Argument */
	protected $match_NamedArgument_typestack = array('NamedArgument');
	function match_NamedArgument ($stack = array()) {
		$matchrule = "NamedArgument"; $result = $this->construct($matchrule, $matchrule, null);
		$_617 = NULL;
		do {
			$matcher = 'match_'.'Word'; $key = $matcher; $pos = $this->pos;
			$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
			if ($subres !== FALSE) {
				$this->store( $result, $subres, "Name" );
			}
			else { $_617 = FALSE; break; }
			if (substr($this->string,$this->pos,1) == '=') {
				$this->pos += 1;
				$result["text"] .= '=';
			}
			else { $_617 = FALSE; break; }
			$matcher = 'match_'.'Argument'; $key = $matcher; $pos = $this->pos;
			$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
			if ($subres !== FALSE) {
				$this->store( $result, $subres, "Value" );
			}
			else { $_617 = FALSE; break; }
			$_617 = TRUE; break;
		}
		while(0);
		if( $_617 === TRUE ) { return $this->finalise($result); }
		if( $_617 === FALSE) { return FALSE; }
	}



	function NamedArgument_Name(&$res, $sub) {
		$res['php'] = "'" . $sub['text'] . "' => ";
	}

	function NamedArgument_Value(&$res, $sub) {
		switch($sub['ArgumentMode']) {
			case 'string':
				$res['php'] .= $sub['php'];
				break;

			case 'default':
				$res['php'] .= $sub['string_php'];
				break;

			default:
				$res['php'] .= str_replace('$$FINAL', 'obj', $sub['php']) . '->self()';
				break;
		}
	}

	/* ComposedNamedArgument: Name:Word "=" Value:ComposedArgument */
	protected $match_ComposedNamedArgument_typestack = array('ComposedNamedArgument');
	function match_ComposedNamedArgument ($stack = array()) {
		$matchrule = "ComposedNamedArgument"; $result = $this->construct($matchrule, $matchrule, null);
		$_622 = NULL;
		do {
			$matcher = 'match_'.'Word'; $key = $matcher; $pos = $this->pos;
			$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
			if ($subres !== FALSE) {
				$this->store( $result, $subres, "Name" );
			}
			else { $_622 = FALSE; break; }
			if (substr($this->string,$this->pos,1) == '=') {
				$this->pos += 1;
				$result["text"] .= '=';
			}
			else { $_622 = FALSE; break; }
			$matcher = 'match_'.'ComposedArgument'; $key = $matcher; $pos = $this->pos;
			$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
			if ($subres !== FALSE) {
				$this->store( $result, $subres, "Value" );
			}
			else { $_622 = FALSE; break; }
			$_622 = TRUE; break;
		}
		while(0);
		if( $_622 === TRUE ) { return $this->finalise($result); }
		if( $_622 === FALSE) { return FALSE; }
	}




	function ComposedNamedArgument_Name(&$res, $sub) {
		$this->NamedArgument_Name($res, $sub);
	}

	function ComposedNamedArgument_Value(&$res, $sub) {
		$this->NamedArgument_Value($res, $sub);
	}

	/* Compose: '<:' Template:Word < (ComposedNamedArgument ( " " ComposedNamedArgument )*)? > '>' Composed:$TemplateMatcher?
	'</:' '$Template' '>' */
	protected $match_Compose_typestack = array('Compose');
	function match_Compose ($stack = array()) {
		$matchrule = "Compose"; $result = $this->construct($matchrule, $matchrule, null);
		$_640 = NULL;
		do {
			if (( $subres = $this->literal( '<:' ) ) !== FALSE) { $result["text"] .= $subres; }
			else { $_640 = FALSE; break; }
			$matcher = 'match_'.'Word'; $key = $matcher; $pos = $this->pos;
			$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
			if ($subres !== FALSE) {
				$this->store( $result, $subres, "Template" );
			}
			else { $_640 = FALSE; break; }
			if (( $subres = $this->whitespace(  ) ) !== FALSE) { $result["text"] .= $subres; }
			$res_633 = $result;
			$pos_633 = $this->pos;
			$_632 = NULL;
			do {
				$matcher = 'match_'.'ComposedNamedArgument'; $key = $matcher; $pos = $this->pos;
				$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
				if ($subres !== FALSE) { $this->store( $result, $subres ); }
				else { $_632 = FALSE; break; }
				while (true) {
					$res_631 = $result;
					$pos_631 = $this->pos;
					$_630 = NULL;
					do {
						if (substr($this->string,$this->pos,1) == ' ') {
							$this->pos += 1;
							$result["text"] .= ' ';
						}
						else { $_630 = FALSE; break; }
						$matcher = 'match_'.'ComposedNamedArgument'; $key = $matcher; $pos = $this->pos;
						$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
						if ($subres !== FALSE) {
							$this->store( $result, $subres );
						}
						else { $_630 = FALSE; break; }
						$_630 = TRUE; break;
					}
					while(0);
					if( $_630 === FALSE) {
						$result = $res_631;
						$this->pos = $pos_631;
						unset( $res_631 );
						unset( $pos_631 );
						break;
					}
				}
				$_632 = TRUE; break;
			}
			while(0);
			if( $_632 === FALSE) {
				$result = $res_633;
				$this->pos = $pos_633;
				unset( $res_633 );
				unset( $pos_633 );
			}
			if (( $subres = $this->whitespace(  ) ) !== FALSE) { $result["text"] .= $subres; }
			if (substr($this->string,$this->pos,1) == '>') {
				$this->pos += 1;
				$result["text"] .= '>';
			}
			else { $_640 = FALSE; break; }
			$res_636 = $result;
			$pos_636 = $this->pos;
			$matcher = 'match_'.$this->expression($result, $stack, 'TemplateMatcher'); $key = $matcher; $pos = $this->pos;
			$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
			if ($subres !== FALSE) {
				$this->store( $result, $subres, "Composed" );
			}
			else {
				$result = $res_636;
				$this->pos = $pos_636;
				unset( $res_636 );
				unset( $pos_636 );
			}
			if (( $subres = $this->literal( '</:' ) ) !== FALSE) { $result["text"] .= $subres; }
			else { $_640 = FALSE; break; }
			if (( $subres = $this->literal( ''.$this->expression($result, $stack, 'Template').'' ) ) !== FALSE) { $result["text"] .= $subres; }
			else { $_640 = FALSE; break; }
			if (substr($this->string,$this->pos,1) == '>') {
				$this->pos += 1;
				$result["text"] .= '>';
			}
			else { $_640 = FALSE; break; }
			$_640 = TRUE; break;
		}
		while(0);
		if( $_640 === TRUE ) { return $this->finalise($result); }
		if( $_640 === FALSE) { return FALSE; }
	}


	/* ComposeShort: '<:' Template:Word < (ComposedNamedArgument ( " " ComposedNamedArgument )*)? > '/>' */
	protected $match_ComposeShort_typestack = array('ComposeShort');
	function match_ComposeShort ($stack = array()) {
		$matchrule = "ComposeShort"; $result = $this->construct($matchrule, $matchrule, null);
		$_654 = NULL;
		do {
			if (( $subres = $this->literal( '<:' ) ) !== FALSE) { $result["text"] .= $subres; }
			else { $_654 = FALSE; break; }
			$matcher = 'match_'.'Word'; $key = $matcher; $pos = $this->pos;
			$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
			if ($subres !== FALSE) {
				$this->store( $result, $subres, "Template" );
			}
			else { $_654 = FALSE; break; }
			if (( $subres = $this->whitespace(  ) ) !== FALSE) { $result["text"] .= $subres; }
			$res_651 = $result;
			$pos_651 = $this->pos;
			$_650 = NULL;
			do {
				$matcher = 'match_'.'ComposedNamedArgument'; $key = $matcher; $pos = $this->pos;
				$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
				if ($subres !== FALSE) { $this->store( $result, $subres ); }
				else { $_650 = FALSE; break; }
				while (true) {
					$res_649 = $result;
					$pos_649 = $this->pos;
					$_648 = NULL;
					do {
						if (substr($this->string,$this->pos,1) == ' ') {
							$this->pos += 1;
							$result["text"] .= ' ';
						}
						else { $_648 = FALSE; break; }
						$matcher = 'match_'.'ComposedNamedArgument'; $key = $matcher; $pos = $this->pos;
						$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
						if ($subres !== FALSE) {
							$this->store( $result, $subres );
						}
						else { $_648 = FALSE; break; }
						$_648 = TRUE; break;
					}
					while(0);
					if( $_648 === FALSE) {
						$result = $res_649;
						$this->pos = $pos_649;
						unset( $res_649 );
						unset( $pos_649 );
						break;
					}
				}
				$_650 = TRUE; break;
			}
			while(0);
			if( $_650 === FALSE) {
				$result = $res_651;
				$this->pos = $pos_651;
				unset( $res_651 );
				unset( $pos_651 );
			}
			if (( $subres = $this->whitespace(  ) ) !== FALSE) { $result["text"] .= $subres; }
			if (( $subres = $this->literal( '/>' ) ) !== FALSE) { $result["text"] .= $subres; }
			else { $_654 = FALSE; break; }
			$_654 = TRUE; break;
		}
		while(0);
		if( $_654 === TRUE ) { return $this->finalise($result); }
		if( $_654 === FALSE) { return FALSE; }
	}



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
	    
	function ComposeShort__construct(&$res){
		$this->Compose__construct($res);
	}

	function ComposeShort_ComposedNamedArgument(&$res, $sub){
		$this->Compose_ComposedNamedArgument($res, $sub);
	}

	function ComposeShort__finalise(&$res){
		$this->Compose__finalise($res);
	}

	/* Composed: "<%" < "composed" > "%>" */
	protected $match_Composed_typestack = array('Composed');
	function match_Composed ($stack = array()) {
		$matchrule = "Composed"; $result = $this->construct($matchrule, $matchrule, null);
		$_661 = NULL;
		do {
			if (( $subres = $this->literal( '<%' ) ) !== FALSE) { $result["text"] .= $subres; }
			else { $_661 = FALSE; break; }
			if (( $subres = $this->whitespace(  ) ) !== FALSE) { $result["text"] .= $subres; }
			if (( $subres = $this->literal( 'composed' ) ) !== FALSE) { $result["text"] .= $subres; }
			else { $_661 = FALSE; break; }
			if (( $subres = $this->whitespace(  ) ) !== FALSE) { $result["text"] .= $subres; }
			if (( $subres = $this->literal( '%>' ) ) !== FALSE) { $result["text"] .= $subres; }
			else { $_661 = FALSE; break; }
			$_661 = TRUE; break;
		}
		while(0);
		if( $_661 === TRUE ) { return $this->finalise($result); }
		if( $_661 === FALSE) { return FALSE; }
	}




	function Composed__finalise(&$res){
		$res['php'] = "\$val .= (\$composed = \$scope->locally()->obj('Composed', null, true)->getItem()) ? \$composed() : '';";
	}

	/* Include: "<%" < "include" < Template:Word < (NamedArgument ( < "," < NamedArgument )*)? > "%>" */
	protected $match_Include_typestack = array('Include');
	function match_Include ($stack = array()) {
		$matchrule = "Include"; $result = $this->construct($matchrule, $matchrule, null);
		$_680 = NULL;
		do {
			if (( $subres = $this->literal( '<%' ) ) !== FALSE) { $result["text"] .= $subres; }
			else { $_680 = FALSE; break; }
			if (( $subres = $this->whitespace(  ) ) !== FALSE) { $result["text"] .= $subres; }
			if (( $subres = $this->literal( 'include' ) ) !== FALSE) { $result["text"] .= $subres; }
			else { $_680 = FALSE; break; }
			if (( $subres = $this->whitespace(  ) ) !== FALSE) { $result["text"] .= $subres; }
			$matcher = 'match_'.'Word'; $key = $matcher; $pos = $this->pos;
			$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
			if ($subres !== FALSE) {
				$this->store( $result, $subres, "Template" );
			}
			else { $_680 = FALSE; break; }
			if (( $subres = $this->whitespace(  ) ) !== FALSE) { $result["text"] .= $subres; }
			$res_677 = $result;
			$pos_677 = $this->pos;
			$_676 = NULL;
			do {
				$matcher = 'match_'.'NamedArgument'; $key = $matcher; $pos = $this->pos;
				$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
				if ($subres !== FALSE) { $this->store( $result, $subres ); }
				else { $_676 = FALSE; break; }
				while (true) {
					$res_675 = $result;
					$pos_675 = $this->pos;
					$_674 = NULL;
					do {
						if (( $subres = $this->whitespace(  ) ) !== FALSE) { $result["text"] .= $subres; }
						if (substr($this->string,$this->pos,1) == ',') {
							$this->pos += 1;
							$result["text"] .= ',';
						}
						else { $_674 = FALSE; break; }
						if (( $subres = $this->whitespace(  ) ) !== FALSE) { $result["text"] .= $subres; }
						$matcher = 'match_'.'NamedArgument'; $key = $matcher; $pos = $this->pos;
						$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
						if ($subres !== FALSE) {
							$this->store( $result, $subres );
						}
						else { $_674 = FALSE; break; }
						$_674 = TRUE; break;
					}
					while(0);
					if( $_674 === FALSE) {
						$result = $res_675;
						$this->pos = $pos_675;
						unset( $res_675 );
						unset( $pos_675 );
						break;
					}
				}
				$_676 = TRUE; break;
			}
			while(0);
			if( $_676 === FALSE) {
				$result = $res_677;
				$this->pos = $pos_677;
				unset( $res_677 );
				unset( $pos_677 );
			}
			if (( $subres = $this->whitespace(  ) ) !== FALSE) { $result["text"] .= $subres; }
			if (( $subres = $this->literal( '%>' ) ) !== FALSE) { $result["text"] .= $subres; }
			else { $_680 = FALSE; break; }
			$_680 = TRUE; break;
		}
		while(0);
		if( $_680 === TRUE ) { return $this->finalise($result); }
		if( $_680 === FALSE) { return FALSE; }
	}



	function Include__construct(&$res){
		$res['arguments'] = array();
	}

	function Include_Template(&$res, $sub){
		$res['template'] = "'" . $sub['text'] . "'";
	}

	function Include_NamedArgument(&$res, $sub){
		$res['arguments'][] = $sub['php'];
	}

	function Include__finalise(&$res){
		$template = $res['template'];
		$arguments = $res['arguments'];

		$res['php'] = '$val .= SSViewer::execute_template('.$template.', $scope->getItem(), array(' . 
			implode(',', $arguments)."), \$scope);\n";

		if($this->includeDebuggingComments) { // Add include filename comments on dev sites
			$res['php'] =
				'$val .= \'<!-- include '.addslashes($template).' -->\';'. "\n".
				$res['php'].
				'$val .= \'<!-- end include '.addslashes($template).' -->\';'. "\n";
		}
	}

	/* BlockArguments: :Argument ( < "," < :Argument)*  */
	protected $match_BlockArguments_typestack = array('BlockArguments');
	function match_BlockArguments ($stack = array()) {
		$matchrule = "BlockArguments"; $result = $this->construct($matchrule, $matchrule, null);
		$_689 = NULL;
		do {
			$matcher = 'match_'.'Argument'; $key = $matcher; $pos = $this->pos;
			$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
			if ($subres !== FALSE) {
				$this->store( $result, $subres, "Argument" );
			}
			else { $_689 = FALSE; break; }
			while (true) {
				$res_688 = $result;
				$pos_688 = $this->pos;
				$_687 = NULL;
				do {
					if (( $subres = $this->whitespace(  ) ) !== FALSE) { $result["text"] .= $subres; }
					if (substr($this->string,$this->pos,1) == ',') {
						$this->pos += 1;
						$result["text"] .= ',';
					}
					else { $_687 = FALSE; break; }
					if (( $subres = $this->whitespace(  ) ) !== FALSE) { $result["text"] .= $subres; }
					$matcher = 'match_'.'Argument'; $key = $matcher; $pos = $this->pos;
					$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
					if ($subres !== FALSE) {
						$this->store( $result, $subres, "Argument" );
					}
					else { $_687 = FALSE; break; }
					$_687 = TRUE; break;
				}
				while(0);
				if( $_687 === FALSE) {
					$result = $res_688;
					$this->pos = $pos_688;
					unset( $res_688 );
					unset( $pos_688 );
					break;
				}
			}
			$_689 = TRUE; break;
		}
		while(0);
		if( $_689 === TRUE ) { return $this->finalise($result); }
		if( $_689 === FALSE) { return FALSE; }
	}


	/* NotBlockTag: "end_" | (("if" | "else_if" | "else" | "require" | "cached" | "uncached" | "cacheblock" | "include" | "composed")]) */
	protected $match_NotBlockTag_typestack = array('NotBlockTag');
	function match_NotBlockTag ($stack = array()) {
		$matchrule = "NotBlockTag"; $result = $this->construct($matchrule, $matchrule, null);
		$_731 = NULL;
		do {
			$res_691 = $result;
			$pos_691 = $this->pos;
			if (( $subres = $this->literal( 'end_' ) ) !== FALSE) {
				$result["text"] .= $subres;
				$_731 = TRUE; break;
			}
			$result = $res_691;
			$this->pos = $pos_691;
			$_729 = NULL;
			do {
				$_726 = NULL;
				do {
					$_724 = NULL;
					do {
						$res_693 = $result;
						$pos_693 = $this->pos;
						if (( $subres = $this->literal( 'if' ) ) !== FALSE) {
							$result["text"] .= $subres;
							$_724 = TRUE; break;
						}
						$result = $res_693;
						$this->pos = $pos_693;
						$_722 = NULL;
						do {
							$res_695 = $result;
							$pos_695 = $this->pos;
							if (( $subres = $this->literal( 'else_if' ) ) !== FALSE) {
								$result["text"] .= $subres;
								$_722 = TRUE; break;
							}
							$result = $res_695;
							$this->pos = $pos_695;
							$_720 = NULL;
							do {
								$res_697 = $result;
								$pos_697 = $this->pos;
								if (( $subres = $this->literal( 'else' ) ) !== FALSE) {
									$result["text"] .= $subres;
									$_720 = TRUE; break;
								}
								$result = $res_697;
								$this->pos = $pos_697;
								$_718 = NULL;
								do {
									$res_699 = $result;
									$pos_699 = $this->pos;
									if (( $subres = $this->literal( 'require' ) ) !== FALSE) {
										$result["text"] .= $subres;
										$_718 = TRUE; break;
									}
									$result = $res_699;
									$this->pos = $pos_699;
									$_716 = NULL;
									do {
										$res_701 = $result;
										$pos_701 = $this->pos;
										if (( $subres = $this->literal( 'cached' ) ) !== FALSE) {
											$result["text"] .= $subres;
											$_716 = TRUE; break;
										}
										$result = $res_701;
										$this->pos = $pos_701;
										$_714 = NULL;
										do {
											$res_703 = $result;
											$pos_703 = $this->pos;
											if (( $subres = $this->literal( 'uncached' ) ) !== FALSE) {
												$result["text"] .= $subres;
												$_714 = TRUE; break;
											}
											$result = $res_703;
											$this->pos = $pos_703;
											$_712 = NULL;
											do {
												$res_705 = $result;
												$pos_705 = $this->pos;
												if (( $subres = $this->literal( 'cacheblock' ) ) !== FALSE) {
													$result["text"] .= $subres;
													$_712 = TRUE; break;
												}
												$result = $res_705;
												$this->pos = $pos_705;
												$_710 = NULL;
												do {
													$res_707 = $result;
													$pos_707 = $this->pos;
													if (( $subres = $this->literal( 'include' ) ) !== FALSE) {
														$result["text"] .= $subres;
														$_710 = TRUE; break;
													}
													$result = $res_707;
													$this->pos = $pos_707;
													if (( $subres = $this->literal( 'composed' ) ) !== FALSE) {
														$result["text"] .= $subres;
														$_710 = TRUE; break;
													}
													$result = $res_707;
													$this->pos = $pos_707;
													$_710 = FALSE; break;
												}
												while(0);
												if( $_710 === TRUE ) { $_712 = TRUE; break; }
												$result = $res_705;
												$this->pos = $pos_705;
												$_712 = FALSE; break;
											}
											while(0);
											if( $_712 === TRUE ) { $_714 = TRUE; break; }
											$result = $res_703;
											$this->pos = $pos_703;
											$_714 = FALSE; break;
										}
										while(0);
										if( $_714 === TRUE ) { $_716 = TRUE; break; }
										$result = $res_701;
										$this->pos = $pos_701;
										$_716 = FALSE; break;
									}
									while(0);
									if( $_716 === TRUE ) { $_718 = TRUE; break; }
									$result = $res_699;
									$this->pos = $pos_699;
									$_718 = FALSE; break;
								}
								while(0);
								if( $_718 === TRUE ) { $_720 = TRUE; break; }
								$result = $res_697;
								$this->pos = $pos_697;
								$_720 = FALSE; break;
							}
							while(0);
							if( $_720 === TRUE ) { $_722 = TRUE; break; }
							$result = $res_695;
							$this->pos = $pos_695;
							$_722 = FALSE; break;
						}
						while(0);
						if( $_722 === TRUE ) { $_724 = TRUE; break; }
						$result = $res_693;
						$this->pos = $pos_693;
						$_724 = FALSE; break;
					}
					while(0);
					if( $_724 === FALSE) { $_726 = FALSE; break; }
					$_726 = TRUE; break;
				}
				while(0);
				if( $_726 === FALSE) { $_729 = FALSE; break; }
				if (( $subres = $this->whitespace(  ) ) !== FALSE) { $result["text"] .= $subres; }
				else { $_729 = FALSE; break; }
				$_729 = TRUE; break;
			}
			while(0);
			if( $_729 === TRUE ) { $_731 = TRUE; break; }
			$result = $res_691;
			$this->pos = $pos_691;
			$_731 = FALSE; break;
		}
		while(0);
		if( $_731 === TRUE ) { return $this->finalise($result); }
		if( $_731 === FALSE) { return FALSE; }
	}


	/* ClosedBlock: '<%' < !NotBlockTag BlockName:Word ( [ :BlockArguments ] )? > Zap:'%>' Template:$TemplateMatcher? 
	'<%' < 'end_' '$BlockName' > '%>' */
	protected $match_ClosedBlock_typestack = array('ClosedBlock');
	function match_ClosedBlock ($stack = array()) {
		$matchrule = "ClosedBlock"; $result = $this->construct($matchrule, $matchrule, null);
		$_751 = NULL;
		do {
			if (( $subres = $this->literal( '<%' ) ) !== FALSE) { $result["text"] .= $subres; }
			else { $_751 = FALSE; break; }
			if (( $subres = $this->whitespace(  ) ) !== FALSE) { $result["text"] .= $subres; }
			$res_735 = $result;
			$pos_735 = $this->pos;
			$matcher = 'match_'.'NotBlockTag'; $key = $matcher; $pos = $this->pos;
			$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
			if ($subres !== FALSE) {
				$this->store( $result, $subres );
				$result = $res_735;
				$this->pos = $pos_735;
				$_751 = FALSE; break;
			}
			else {
				$result = $res_735;
				$this->pos = $pos_735;
			}
			$matcher = 'match_'.'Word'; $key = $matcher; $pos = $this->pos;
			$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
			if ($subres !== FALSE) {
				$this->store( $result, $subres, "BlockName" );
			}
			else { $_751 = FALSE; break; }
			$res_741 = $result;
			$pos_741 = $this->pos;
			$_740 = NULL;
			do {
				if (( $subres = $this->whitespace(  ) ) !== FALSE) { $result["text"] .= $subres; }
				else { $_740 = FALSE; break; }
				$matcher = 'match_'.'BlockArguments'; $key = $matcher; $pos = $this->pos;
				$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
				if ($subres !== FALSE) {
					$this->store( $result, $subres, "BlockArguments" );
				}
				else { $_740 = FALSE; break; }
				if (( $subres = $this->whitespace(  ) ) !== FALSE) { $result["text"] .= $subres; }
				else { $_740 = FALSE; break; }
				$_740 = TRUE; break;
			}
			while(0);
			if( $_740 === FALSE) {
				$result = $res_741;
				$this->pos = $pos_741;
				unset( $res_741 );
				unset( $pos_741 );
			}
			if (( $subres = $this->whitespace(  ) ) !== FALSE) { $result["text"] .= $subres; }
			$stack[] = $result; $result = $this->construct( $matchrule, "Zap" ); 
			if (( $subres = $this->literal( '%>' ) ) !== FALSE) {
				$result["text"] .= $subres;
				$subres = $result; $result = array_pop($stack);
				$this->store( $result, $subres, 'Zap' );
			}
			else {
				$result = array_pop($stack);
				$_751 = FALSE; break;
			}
			$res_744 = $result;
			$pos_744 = $this->pos;
			$matcher = 'match_'.$this->expression($result, $stack, 'TemplateMatcher'); $key = $matcher; $pos = $this->pos;
			$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
			if ($subres !== FALSE) {
				$this->store( $result, $subres, "Template" );
			}
			else {
				$result = $res_744;
				$this->pos = $pos_744;
				unset( $res_744 );
				unset( $pos_744 );
			}
			if (( $subres = $this->literal( '<%' ) ) !== FALSE) { $result["text"] .= $subres; }
			else { $_751 = FALSE; break; }
			if (( $subres = $this->whitespace(  ) ) !== FALSE) { $result["text"] .= $subres; }
			if (( $subres = $this->literal( 'end_' ) ) !== FALSE) { $result["text"] .= $subres; }
			else { $_751 = FALSE; break; }
			if (( $subres = $this->literal( ''.$this->expression($result, $stack, 'BlockName').'' ) ) !== FALSE) { $result["text"] .= $subres; }
			else { $_751 = FALSE; break; }
			if (( $subres = $this->whitespace(  ) ) !== FALSE) { $result["text"] .= $subres; }
			if (( $subres = $this->literal( '%>' ) ) !== FALSE) { $result["text"] .= $subres; }
			else { $_751 = FALSE; break; }
			$_751 = TRUE; break;
		}
		while(0);
		if( $_751 === TRUE ) { return $this->finalise($result); }
		if( $_751 === FALSE) { return FALSE; }
	}



				
	/**
	 * As mentioned in the parser comment, block handling is kept fairly generic for extensibility. The match rule
	 * builds up two important elements in the match result array:
	 *   'ArgumentCount' - how many arguments were passed in the opening tag
	 *   'Arguments' an array of the Argument match rule result arrays
	 *
	 * Once a block has successfully been matched against, it will then look for the actual handler, which should
	 * be on this class (either defined or extended on) as ClosedBlock_Handler_Name(&$res), where Name is the
	 * tag name, first letter captialized (i.e Control, Loop, With, etc).
	 * 
	 * This function will be called with the match rule result array as it's first argument. It should return
	 * the php result of this block as it's return value, or throw an error if incorrect arguments were passed.
	 */
				
	function ClosedBlock__construct(&$res) {
		$res['ArgumentCount'] = 0;
	}
				
	function ClosedBlock_BlockArguments(&$res, $sub) {
		if (isset($sub['Argument']['ArgumentMode'])) {
			$res['Arguments'] = array($sub['Argument']);
			$res['ArgumentCount'] = 1;
		}
		else {
			$res['Arguments'] = $sub['Argument'];
			$res['ArgumentCount'] = count($res['Arguments']);
		}
	}
				
	function ClosedBlock__finalise(&$res) {
		$blockname = $res['BlockName']['text'];
								
		$method = 'ClosedBlock_Handle_'.$blockname;
		if (method_exists($this, $method)) $res['php'] = $this->$method($res);
		else {
			throw new SSTemplateParseException('Unknown closed block "'.$blockname.'" encountered. Perhaps you are ' .
				'not supposed to close this block, or have mis-spelled it?', $this);
		}
	}

	/**
	 * This is an example of a block handler function. This one handles the loop tag.
	 */
	function ClosedBlock_Handle_Loop(&$res) {
		if ($res['ArgumentCount'] > 1) {
			throw new SSTemplateParseException('Either no or too many arguments in control block. Must be one ' .
				'argument only.', $this);
		}

		//loop without arguments loops on the current scope
		if ($res['ArgumentCount'] == 0) {
			$on = '$scope->obj(\'Up\', null, true)->obj(\'Foo\', null, true)';
		} else {    //loop in the normal way
			$arg = $res['Arguments'][0];
			if ($arg['ArgumentMode'] == 'string') {
				throw new SSTemplateParseException('Control block cant take string as argument.', $this);
			}
			$on = str_replace('$$FINAL', 'obj', 
				($arg['ArgumentMode'] == 'default') ? $arg['lookup_php'] : $arg['php']);
		}

		return
			$on . '; $scope->pushScope(); while (($key = $scope->next()) !== false) {' . PHP_EOL .
				$res['Template']['php'] . PHP_EOL .
			'}; $scope->popScope(); ';
	}

	/**
	 * The deprecated closed block handler for control blocks
	 * @deprecated
	 */
	function ClosedBlock_Handle_Control(&$res) {
		Deprecation::notice('3.1', '<% control %> is deprecated. Use <% with %> or <% loop %> instead.');
		return $this->ClosedBlock_Handle_Loop($res);
	}
				
	/**
	 * The closed block handler for with blocks
	 */
	function ClosedBlock_Handle_With(&$res) {
		if ($res['ArgumentCount'] != 1) {
			throw new SSTemplateParseException('Either no or too many arguments in with block. Must be one ' .
				'argument only.', $this);
		}
								
		$arg = $res['Arguments'][0];
		if ($arg['ArgumentMode'] == 'string') {
			throw new SSTemplateParseException('Control block cant take string as argument.', $this);
		}
								
		$on = str_replace('$$FINAL', 'obj', ($arg['ArgumentMode'] == 'default') ? $arg['lookup_php'] : $arg['php']);
		return 
			$on . '; $scope->pushScope();' . PHP_EOL .
				$res['Template']['php'] . PHP_EOL .
			'; $scope->popScope(); ';
	}
				
	/* OpenBlock: '<%' < !NotBlockTag BlockName:Word ( [ :BlockArguments ] )? > '%>' */
	protected $match_OpenBlock_typestack = array('OpenBlock');
	function match_OpenBlock ($stack = array()) {
		$matchrule = "OpenBlock"; $result = $this->construct($matchrule, $matchrule, null);
		$_764 = NULL;
		do {
			if (( $subres = $this->literal( '<%' ) ) !== FALSE) { $result["text"] .= $subres; }
			else { $_764 = FALSE; break; }
			if (( $subres = $this->whitespace(  ) ) !== FALSE) { $result["text"] .= $subres; }
			$res_755 = $result;
			$pos_755 = $this->pos;
			$matcher = 'match_'.'NotBlockTag'; $key = $matcher; $pos = $this->pos;
			$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
			if ($subres !== FALSE) {
				$this->store( $result, $subres );
				$result = $res_755;
				$this->pos = $pos_755;
				$_764 = FALSE; break;
			}
			else {
				$result = $res_755;
				$this->pos = $pos_755;
			}
			$matcher = 'match_'.'Word'; $key = $matcher; $pos = $this->pos;
			$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
			if ($subres !== FALSE) {
				$this->store( $result, $subres, "BlockName" );
			}
			else { $_764 = FALSE; break; }
			$res_761 = $result;
			$pos_761 = $this->pos;
			$_760 = NULL;
			do {
				if (( $subres = $this->whitespace(  ) ) !== FALSE) { $result["text"] .= $subres; }
				else { $_760 = FALSE; break; }
				$matcher = 'match_'.'BlockArguments'; $key = $matcher; $pos = $this->pos;
				$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
				if ($subres !== FALSE) {
					$this->store( $result, $subres, "BlockArguments" );
				}
				else { $_760 = FALSE; break; }
				if (( $subres = $this->whitespace(  ) ) !== FALSE) { $result["text"] .= $subres; }
				else { $_760 = FALSE; break; }
				$_760 = TRUE; break;
			}
			while(0);
			if( $_760 === FALSE) {
				$result = $res_761;
				$this->pos = $pos_761;
				unset( $res_761 );
				unset( $pos_761 );
			}
			if (( $subres = $this->whitespace(  ) ) !== FALSE) { $result["text"] .= $subres; }
			if (( $subres = $this->literal( '%>' ) ) !== FALSE) { $result["text"] .= $subres; }
			else { $_764 = FALSE; break; }
			$_764 = TRUE; break;
		}
		while(0);
		if( $_764 === TRUE ) { return $this->finalise($result); }
		if( $_764 === FALSE) { return FALSE; }
	}



	function OpenBlock__construct(&$res) {
		$res['ArgumentCount'] = 0;
	}
				
	function OpenBlock_BlockArguments(&$res, $sub) {
		if (isset($sub['Argument']['ArgumentMode'])) {
			$res['Arguments'] = array($sub['Argument']);
			$res['ArgumentCount'] = 1;
		}
		else {
			$res['Arguments'] = $sub['Argument'];
			$res['ArgumentCount'] = count($res['Arguments']);
		}
	}
				
	function OpenBlock__finalise(&$res) {
		$blockname = $res['BlockName']['text'];
				
		$method = 'OpenBlock_Handle_'.$blockname;
		if (method_exists($this, $method)) $res['php'] = $this->$method($res);
		else {
			throw new SSTemplateParseException('Unknown open block "'.$blockname.'" encountered. Perhaps you missed ' .
				' the closing tag or have mis-spelled it?', $this);
		}
	}

	/**
	 * This is an open block handler, for the <% debug %> utility tag
	 */
	function OpenBlock_Handle_Debug(&$res) {
		if ($res['ArgumentCount'] == 0) return '$scope->debug();';
		else if ($res['ArgumentCount'] == 1) {
			$arg = $res['Arguments'][0];
												
			if ($arg['ArgumentMode'] == 'string') return 'Debug::show('.$arg['php'].');';
												
			$php = ($arg['ArgumentMode'] == 'default') ? $arg['lookup_php'] : $arg['php'];
			return '$val .= Debug::show('.str_replace('FINALGET!', 'cachedCall', $php).');';
		}
		else {
			throw new SSTemplateParseException('Debug takes 0 or 1 argument only.', $this);
		}
	}

	/**
	 * This is an open block handler, for the <% base_tag %> tag
	 */
	function OpenBlock_Handle_Base_tag(&$res) {
		if ($res['ArgumentCount'] != 0) throw new SSTemplateParseException('Base_tag takes no arguments', $this);
		return '$val .= SSViewer::get_base_tag($val);';
	}

	/**
	 * This is an open block handler, for the <% current_page %> tag
	 */
	function OpenBlock_Handle_Current_page(&$res) {
		if ($res['ArgumentCount'] != 0) throw new SSTemplateParseException('Current_page takes no arguments', $this);
		return '$val .= $_SERVER[SCRIPT_URL];';
	}
				
	/* MismatchedEndBlock: '<%' < 'end_' :Word > '%>' */
	protected $match_MismatchedEndBlock_typestack = array('MismatchedEndBlock');
	function match_MismatchedEndBlock ($stack = array()) {
		$matchrule = "MismatchedEndBlock"; $result = $this->construct($matchrule, $matchrule, null);
		$_772 = NULL;
		do {
			if (( $subres = $this->literal( '<%' ) ) !== FALSE) { $result["text"] .= $subres; }
			else { $_772 = FALSE; break; }
			if (( $subres = $this->whitespace(  ) ) !== FALSE) { $result["text"] .= $subres; }
			if (( $subres = $this->literal( 'end_' ) ) !== FALSE) { $result["text"] .= $subres; }
			else { $_772 = FALSE; break; }
			$matcher = 'match_'.'Word'; $key = $matcher; $pos = $this->pos;
			$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
			if ($subres !== FALSE) {
				$this->store( $result, $subres, "Word" );
			}
			else { $_772 = FALSE; break; }
			if (( $subres = $this->whitespace(  ) ) !== FALSE) { $result["text"] .= $subres; }
			if (( $subres = $this->literal( '%>' ) ) !== FALSE) { $result["text"] .= $subres; }
			else { $_772 = FALSE; break; }
			$_772 = TRUE; break;
		}
		while(0);
		if( $_772 === TRUE ) { return $this->finalise($result); }
		if( $_772 === FALSE) { return FALSE; }
	}



	function MismatchedEndBlock__finalise(&$res) {
		$blockname = $res['Word']['text'];
		throw new SSTemplateParseException('Unexpected close tag end_' . $blockname . 
			' encountered. Perhaps you have mis-nested blocks, or have mis-spelled a tag?', $this);
	}

	/* MalformedOpenTag: '<%' < !NotBlockTag Tag:Word  !( ( [ :BlockArguments ] )? > '%>' ) */
	protected $match_MalformedOpenTag_typestack = array('MalformedOpenTag');
	function match_MalformedOpenTag ($stack = array()) {
		$matchrule = "MalformedOpenTag"; $result = $this->construct($matchrule, $matchrule, null);
		$_787 = NULL;
		do {
			if (( $subres = $this->literal( '<%' ) ) !== FALSE) { $result["text"] .= $subres; }
			else { $_787 = FALSE; break; }
			if (( $subres = $this->whitespace(  ) ) !== FALSE) { $result["text"] .= $subres; }
			$res_776 = $result;
			$pos_776 = $this->pos;
			$matcher = 'match_'.'NotBlockTag'; $key = $matcher; $pos = $this->pos;
			$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
			if ($subres !== FALSE) {
				$this->store( $result, $subres );
				$result = $res_776;
				$this->pos = $pos_776;
				$_787 = FALSE; break;
			}
			else {
				$result = $res_776;
				$this->pos = $pos_776;
			}
			$matcher = 'match_'.'Word'; $key = $matcher; $pos = $this->pos;
			$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
			if ($subres !== FALSE) {
				$this->store( $result, $subres, "Tag" );
			}
			else { $_787 = FALSE; break; }
			$res_786 = $result;
			$pos_786 = $this->pos;
			$_785 = NULL;
			do {
				$res_782 = $result;
				$pos_782 = $this->pos;
				$_781 = NULL;
				do {
					if (( $subres = $this->whitespace(  ) ) !== FALSE) { $result["text"] .= $subres; }
					else { $_781 = FALSE; break; }
					$matcher = 'match_'.'BlockArguments'; $key = $matcher; $pos = $this->pos;
					$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
					if ($subres !== FALSE) {
						$this->store( $result, $subres, "BlockArguments" );
					}
					else { $_781 = FALSE; break; }
					if (( $subres = $this->whitespace(  ) ) !== FALSE) { $result["text"] .= $subres; }
					else { $_781 = FALSE; break; }
					$_781 = TRUE; break;
				}
				while(0);
				if( $_781 === FALSE) {
					$result = $res_782;
					$this->pos = $pos_782;
					unset( $res_782 );
					unset( $pos_782 );
				}
				if (( $subres = $this->whitespace(  ) ) !== FALSE) { $result["text"] .= $subres; }
				if (( $subres = $this->literal( '%>' ) ) !== FALSE) { $result["text"] .= $subres; }
				else { $_785 = FALSE; break; }
				$_785 = TRUE; break;
			}
			while(0);
			if( $_785 === TRUE ) {
				$result = $res_786;
				$this->pos = $pos_786;
				$_787 = FALSE; break;
			}
			if( $_785 === FALSE) {
				$result = $res_786;
				$this->pos = $pos_786;
			}
			$_787 = TRUE; break;
		}
		while(0);
		if( $_787 === TRUE ) { return $this->finalise($result); }
		if( $_787 === FALSE) { return FALSE; }
	}



	function MalformedOpenTag__finalise(&$res) {
		$tag = $res['Tag']['text'];
		throw new SSTemplateParseException("Malformed opening block tag $tag. Perhaps you have tried to use operators?"
			, $this);
	}
				
	/* MalformedCloseTag: '<%' < Tag:('end_' :Word ) !( > '%>' ) */
	protected $match_MalformedCloseTag_typestack = array('MalformedCloseTag');
	function match_MalformedCloseTag ($stack = array()) {
		$matchrule = "MalformedCloseTag"; $result = $this->construct($matchrule, $matchrule, null);
		$_799 = NULL;
		do {
			if (( $subres = $this->literal( '<%' ) ) !== FALSE) { $result["text"] .= $subres; }
			else { $_799 = FALSE; break; }
			if (( $subres = $this->whitespace(  ) ) !== FALSE) { $result["text"] .= $subres; }
			$stack[] = $result; $result = $this->construct( $matchrule, "Tag" ); 
			$_793 = NULL;
			do {
				if (( $subres = $this->literal( 'end_' ) ) !== FALSE) { $result["text"] .= $subres; }
				else { $_793 = FALSE; break; }
				$matcher = 'match_'.'Word'; $key = $matcher; $pos = $this->pos;
				$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
				if ($subres !== FALSE) {
					$this->store( $result, $subres, "Word" );
				}
				else { $_793 = FALSE; break; }
				$_793 = TRUE; break;
			}
			while(0);
			if( $_793 === TRUE ) {
				$subres = $result; $result = array_pop($stack);
				$this->store( $result, $subres, 'Tag' );
			}
			if( $_793 === FALSE) {
				$result = array_pop($stack);
				$_799 = FALSE; break;
			}
			$res_798 = $result;
			$pos_798 = $this->pos;
			$_797 = NULL;
			do {
				if (( $subres = $this->whitespace(  ) ) !== FALSE) { $result["text"] .= $subres; }
				if (( $subres = $this->literal( '%>' ) ) !== FALSE) { $result["text"] .= $subres; }
				else { $_797 = FALSE; break; }
				$_797 = TRUE; break;
			}
			while(0);
			if( $_797 === TRUE ) {
				$result = $res_798;
				$this->pos = $pos_798;
				$_799 = FALSE; break;
			}
			if( $_797 === FALSE) {
				$result = $res_798;
				$this->pos = $pos_798;
			}
			$_799 = TRUE; break;
		}
		while(0);
		if( $_799 === TRUE ) { return $this->finalise($result); }
		if( $_799 === FALSE) { return FALSE; }
	}



	function MalformedCloseTag__finalise(&$res) {
		$tag = $res['Tag']['text'];
		throw new SSTemplateParseException("Malformed closing block tag $tag. Perhaps you have tried to pass an " .
			"argument to one?", $this);
	}
				
	/* MalformedBlock: MalformedOpenTag | MalformedCloseTag */
	protected $match_MalformedBlock_typestack = array('MalformedBlock');
	function match_MalformedBlock ($stack = array()) {
		$matchrule = "MalformedBlock"; $result = $this->construct($matchrule, $matchrule, null);
		$_804 = NULL;
		do {
			$res_801 = $result;
			$pos_801 = $this->pos;
			$matcher = 'match_'.'MalformedOpenTag'; $key = $matcher; $pos = $this->pos;
			$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
			if ($subres !== FALSE) {
				$this->store( $result, $subres );
				$_804 = TRUE; break;
			}
			$result = $res_801;
			$this->pos = $pos_801;
			$matcher = 'match_'.'MalformedCloseTag'; $key = $matcher; $pos = $this->pos;
			$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
			if ($subres !== FALSE) {
				$this->store( $result, $subres );
				$_804 = TRUE; break;
			}
			$result = $res_801;
			$this->pos = $pos_801;
			$_804 = FALSE; break;
		}
		while(0);
		if( $_804 === TRUE ) { return $this->finalise($result); }
		if( $_804 === FALSE) { return FALSE; }
	}




	/* Comment: "<%--" (!"--%>" /(?s)./)+ "--%>" */
	protected $match_Comment_typestack = array('Comment');
	function match_Comment ($stack = array()) {
		$matchrule = "Comment"; $result = $this->construct($matchrule, $matchrule, null);
		$_812 = NULL;
		do {
			if (( $subres = $this->literal( '<%--' ) ) !== FALSE) { $result["text"] .= $subres; }
			else { $_812 = FALSE; break; }
			$count = 0;
			while (true) {
				$res_810 = $result;
				$pos_810 = $this->pos;
				$_809 = NULL;
				do {
					$res_807 = $result;
					$pos_807 = $this->pos;
					if (( $subres = $this->literal( '--%>' ) ) !== FALSE) {
						$result["text"] .= $subres;
						$result = $res_807;
						$this->pos = $pos_807;
						$_809 = FALSE; break;
					}
					else {
						$result = $res_807;
						$this->pos = $pos_807;
					}
					if (( $subres = $this->rx( '/(?s)./' ) ) !== FALSE) { $result["text"] .= $subres; }
					else { $_809 = FALSE; break; }
					$_809 = TRUE; break;
				}
				while(0);
				if( $_809 === FALSE) {
					$result = $res_810;
					$this->pos = $pos_810;
					unset( $res_810 );
					unset( $pos_810 );
					break;
				}
				$count += 1;
			}
			if ($count > 0) {  }
			else { $_812 = FALSE; break; }
			if (( $subres = $this->literal( '--%>' ) ) !== FALSE) { $result["text"] .= $subres; }
			else { $_812 = FALSE; break; }
			$_812 = TRUE; break;
		}
		while(0);
		if( $_812 === TRUE ) { return $this->finalise($result); }
		if( $_812 === FALSE) { return FALSE; }
	}



	function Comment__construct(&$res) {
		$res['php'] = '';
	}
								
	/* TopTemplate: (Comment | Translate | If | Require | CacheBlock | UncachedBlock | OldI18NTag | Include | Compose | ComposeShort | Composed | ClosedBlock |
	OpenBlock |  MalformedBlock | MismatchedEndBlock  | Injection | Text)+ */
	protected $match_TopTemplate_typestack = array('TopTemplate','Template');
	function match_TopTemplate ($stack = array()) {
		$matchrule = "TopTemplate"; $result = $this->construct($matchrule, $matchrule, array('TemplateMatcher' => 'Template'));
		$count = 0;
		while (true) {
			$res_880 = $result;
			$pos_880 = $this->pos;
			$_879 = NULL;
			do {
				$_877 = NULL;
				do {
					$res_814 = $result;
					$pos_814 = $this->pos;
					$matcher = 'match_'.'Comment'; $key = $matcher; $pos = $this->pos;
					$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
					if ($subres !== FALSE) {
						$this->store( $result, $subres );
						$_877 = TRUE; break;
					}
					$result = $res_814;
					$this->pos = $pos_814;
					$_875 = NULL;
					do {
						$res_816 = $result;
						$pos_816 = $this->pos;
						$matcher = 'match_'.'Translate'; $key = $matcher; $pos = $this->pos;
						$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
						if ($subres !== FALSE) {
							$this->store( $result, $subres );
							$_875 = TRUE; break;
						}
						$result = $res_816;
						$this->pos = $pos_816;
						$_873 = NULL;
						do {
							$res_818 = $result;
							$pos_818 = $this->pos;
							$matcher = 'match_'.'If'; $key = $matcher; $pos = $this->pos;
							$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
							if ($subres !== FALSE) {
								$this->store( $result, $subres );
								$_873 = TRUE; break;
							}
							$result = $res_818;
							$this->pos = $pos_818;
							$_871 = NULL;
							do {
								$res_820 = $result;
								$pos_820 = $this->pos;
								$matcher = 'match_'.'Require'; $key = $matcher; $pos = $this->pos;
								$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
								if ($subres !== FALSE) {
									$this->store( $result, $subres );
									$_871 = TRUE; break;
								}
								$result = $res_820;
								$this->pos = $pos_820;
								$_869 = NULL;
								do {
									$res_822 = $result;
									$pos_822 = $this->pos;
									$matcher = 'match_'.'CacheBlock'; $key = $matcher; $pos = $this->pos;
									$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
									if ($subres !== FALSE) {
										$this->store( $result, $subres );
										$_869 = TRUE; break;
									}
									$result = $res_822;
									$this->pos = $pos_822;
									$_867 = NULL;
									do {
										$res_824 = $result;
										$pos_824 = $this->pos;
										$matcher = 'match_'.'UncachedBlock'; $key = $matcher; $pos = $this->pos;
										$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
										if ($subres !== FALSE) {
											$this->store( $result, $subres );
											$_867 = TRUE; break;
										}
										$result = $res_824;
										$this->pos = $pos_824;
										$_865 = NULL;
										do {
											$res_826 = $result;
											$pos_826 = $this->pos;
											$matcher = 'match_'.'OldI18NTag'; $key = $matcher; $pos = $this->pos;
											$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
											if ($subres !== FALSE) {
												$this->store( $result, $subres );
												$_865 = TRUE; break;
											}
											$result = $res_826;
											$this->pos = $pos_826;
											$_863 = NULL;
											do {
												$res_828 = $result;
												$pos_828 = $this->pos;
												$matcher = 'match_'.'Include'; $key = $matcher; $pos = $this->pos;
												$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
												if ($subres !== FALSE) {
													$this->store( $result, $subres );
													$_863 = TRUE; break;
												}
												$result = $res_828;
												$this->pos = $pos_828;
												$_861 = NULL;
												do {
													$res_830 = $result;
													$pos_830 = $this->pos;
													$matcher = 'match_'.'Compose'; $key = $matcher; $pos = $this->pos;
													$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
													if ($subres !== FALSE) {
														$this->store( $result, $subres );
														$_861 = TRUE; break;
													}
													$result = $res_830;
													$this->pos = $pos_830;
													$_859 = NULL;
													do {
														$res_832 = $result;
														$pos_832 = $this->pos;
														$matcher = 'match_'.'ComposeShort'; $key = $matcher; $pos = $this->pos;
														$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
														if ($subres !== FALSE) {
															$this->store( $result, $subres );
															$_859 = TRUE; break;
														}
														$result = $res_832;
														$this->pos = $pos_832;
														$_857 = NULL;
														do {
															$res_834 = $result;
															$pos_834 = $this->pos;
															$matcher = 'match_'.'Composed'; $key = $matcher; $pos = $this->pos;
															$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
															if ($subres !== FALSE) {
																$this->store( $result, $subres );
																$_857 = TRUE; break;
															}
															$result = $res_834;
															$this->pos = $pos_834;
															$_855 = NULL;
															do {
																$res_836 = $result;
																$pos_836 = $this->pos;
																$matcher = 'match_'.'ClosedBlock'; $key = $matcher; $pos = $this->pos;
																$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
																if ($subres !== FALSE) {
																	$this->store( $result, $subres );
																	$_855 = TRUE; break;
																}
																$result = $res_836;
																$this->pos = $pos_836;
																$_853 = NULL;
																do {
																	$res_838 = $result;
																	$pos_838 = $this->pos;
																	$matcher = 'match_'.'OpenBlock'; $key = $matcher; $pos = $this->pos;
																	$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
																	if ($subres !== FALSE) {
																		$this->store( $result, $subres );
																		$_853 = TRUE; break;
																	}
																	$result = $res_838;
																	$this->pos = $pos_838;
																	$_851 = NULL;
																	do {
																		$res_840 = $result;
																		$pos_840 = $this->pos;
																		$matcher = 'match_'.'MalformedBlock'; $key = $matcher; $pos = $this->pos;
																		$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
																		if ($subres !== FALSE) {
																			$this->store( $result, $subres );
																			$_851 = TRUE; break;
																		}
																		$result = $res_840;
																		$this->pos = $pos_840;
																		$_849 = NULL;
																		do {
																			$res_842 = $result;
																			$pos_842 = $this->pos;
																			$matcher = 'match_'.'MismatchedEndBlock'; $key = $matcher; $pos = $this->pos;
																			$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
																			if ($subres !== FALSE) {
																				$this->store( $result, $subres );
																				$_849 = TRUE; break;
																			}
																			$result = $res_842;
																			$this->pos = $pos_842;
																			$_847 = NULL;
																			do {
																				$res_844 = $result;
																				$pos_844 = $this->pos;
																				$matcher = 'match_'.'Injection'; $key = $matcher; $pos = $this->pos;
																				$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
																				if ($subres !== FALSE) {
																					$this->store( $result, $subres );
																					$_847 = TRUE; break;
																				}
																				$result = $res_844;
																				$this->pos = $pos_844;
																				$matcher = 'match_'.'Text'; $key = $matcher; $pos = $this->pos;
																				$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
																				if ($subres !== FALSE) {
																					$this->store( $result, $subres );
																					$_847 = TRUE; break;
																				}
																				$result = $res_844;
																				$this->pos = $pos_844;
																				$_847 = FALSE; break;
																			}
																			while(0);
																			if( $_847 === TRUE ) {
																				$_849 = TRUE; break;
																			}
																			$result = $res_842;
																			$this->pos = $pos_842;
																			$_849 = FALSE; break;
																		}
																		while(0);
																		if( $_849 === TRUE ) { $_851 = TRUE; break; }
																		$result = $res_840;
																		$this->pos = $pos_840;
																		$_851 = FALSE; break;
																	}
																	while(0);
																	if( $_851 === TRUE ) { $_853 = TRUE; break; }
																	$result = $res_838;
																	$this->pos = $pos_838;
																	$_853 = FALSE; break;
																}
																while(0);
																if( $_853 === TRUE ) { $_855 = TRUE; break; }
																$result = $res_836;
																$this->pos = $pos_836;
																$_855 = FALSE; break;
															}
															while(0);
															if( $_855 === TRUE ) { $_857 = TRUE; break; }
															$result = $res_834;
															$this->pos = $pos_834;
															$_857 = FALSE; break;
														}
														while(0);
														if( $_857 === TRUE ) { $_859 = TRUE; break; }
														$result = $res_832;
														$this->pos = $pos_832;
														$_859 = FALSE; break;
													}
													while(0);
													if( $_859 === TRUE ) { $_861 = TRUE; break; }
													$result = $res_830;
													$this->pos = $pos_830;
													$_861 = FALSE; break;
												}
												while(0);
												if( $_861 === TRUE ) { $_863 = TRUE; break; }
												$result = $res_828;
												$this->pos = $pos_828;
												$_863 = FALSE; break;
											}
											while(0);
											if( $_863 === TRUE ) { $_865 = TRUE; break; }
											$result = $res_826;
											$this->pos = $pos_826;
											$_865 = FALSE; break;
										}
										while(0);
										if( $_865 === TRUE ) { $_867 = TRUE; break; }
										$result = $res_824;
										$this->pos = $pos_824;
										$_867 = FALSE; break;
									}
									while(0);
									if( $_867 === TRUE ) { $_869 = TRUE; break; }
									$result = $res_822;
									$this->pos = $pos_822;
									$_869 = FALSE; break;
								}
								while(0);
								if( $_869 === TRUE ) { $_871 = TRUE; break; }
								$result = $res_820;
								$this->pos = $pos_820;
								$_871 = FALSE; break;
							}
							while(0);
							if( $_871 === TRUE ) { $_873 = TRUE; break; }
							$result = $res_818;
							$this->pos = $pos_818;
							$_873 = FALSE; break;
						}
						while(0);
						if( $_873 === TRUE ) { $_875 = TRUE; break; }
						$result = $res_816;
						$this->pos = $pos_816;
						$_875 = FALSE; break;
					}
					while(0);
					if( $_875 === TRUE ) { $_877 = TRUE; break; }
					$result = $res_814;
					$this->pos = $pos_814;
					$_877 = FALSE; break;
				}
				while(0);
				if( $_877 === FALSE) { $_879 = FALSE; break; }
				$_879 = TRUE; break;
			}
			while(0);
			if( $_879 === FALSE) {
				$result = $res_880;
				$this->pos = $pos_880;
				unset( $res_880 );
				unset( $pos_880 );
				break;
			}
			$count += 1;
		}
		if ($count > 0) { return $this->finalise($result); }
		else { return FALSE; }
	}



				
	/**
	 * The TopTemplate also includes the opening stanza to start off the template
	 */
	function TopTemplate__construct(&$res) {
		$res['php'] = "<?php" . PHP_EOL;
	}

	/* Text: (
		/ [^<${\\]+ / |
		/ (\\.) / |
		'<' !/ % | : | \/: / |
		'$' !(/[A-Za-z_]/) |
		'{' !'$' |
		'{$' !(/[A-Za-z_]/)
	)+ */
	protected $match_Text_typestack = array('Text');
	function match_Text ($stack = array()) {
		$matchrule = "Text"; $result = $this->construct($matchrule, $matchrule, null);
		$count = 0;
		while (true) {
			$res_919 = $result;
			$pos_919 = $this->pos;
			$_918 = NULL;
			do {
				$_916 = NULL;
				do {
					$res_881 = $result;
					$pos_881 = $this->pos;
					if (( $subres = $this->rx( '/ [^<${\\\\]+ /' ) ) !== FALSE) {
						$result["text"] .= $subres;
						$_916 = TRUE; break;
					}
					$result = $res_881;
					$this->pos = $pos_881;
					$_914 = NULL;
					do {
						$res_883 = $result;
						$pos_883 = $this->pos;
						if (( $subres = $this->rx( '/ (\\\\.) /' ) ) !== FALSE) {
							$result["text"] .= $subres;
							$_914 = TRUE; break;
						}
						$result = $res_883;
						$this->pos = $pos_883;
						$_912 = NULL;
						do {
							$res_885 = $result;
							$pos_885 = $this->pos;
							$_888 = NULL;
							do {
								if (substr($this->string,$this->pos,1) == '<') {
									$this->pos += 1;
									$result["text"] .= '<';
								}
								else { $_888 = FALSE; break; }
								$res_887 = $result;
								$pos_887 = $this->pos;
								if (( $subres = $this->rx( '/ % | : | \/: /' ) ) !== FALSE) {
									$result["text"] .= $subres;
									$result = $res_887;
									$this->pos = $pos_887;
									$_888 = FALSE; break;
								}
								else {
									$result = $res_887;
									$this->pos = $pos_887;
								}
								$_888 = TRUE; break;
							}
							while(0);
							if( $_888 === TRUE ) { $_912 = TRUE; break; }
							$result = $res_885;
							$this->pos = $pos_885;
							$_910 = NULL;
							do {
								$res_890 = $result;
								$pos_890 = $this->pos;
								$_895 = NULL;
								do {
									if (substr($this->string,$this->pos,1) == '$') {
										$this->pos += 1;
										$result["text"] .= '$';
									}
									else { $_895 = FALSE; break; }
									$res_894 = $result;
									$pos_894 = $this->pos;
									$_893 = NULL;
									do {
										if (( $subres = $this->rx( '/[A-Za-z_]/' ) ) !== FALSE) { $result["text"] .= $subres; }
										else { $_893 = FALSE; break; }
										$_893 = TRUE; break;
									}
									while(0);
									if( $_893 === TRUE ) {
										$result = $res_894;
										$this->pos = $pos_894;
										$_895 = FALSE; break;
									}
									if( $_893 === FALSE) {
										$result = $res_894;
										$this->pos = $pos_894;
									}
									$_895 = TRUE; break;
								}
								while(0);
								if( $_895 === TRUE ) { $_910 = TRUE; break; }
								$result = $res_890;
								$this->pos = $pos_890;
								$_908 = NULL;
								do {
									$res_897 = $result;
									$pos_897 = $this->pos;
									$_900 = NULL;
									do {
										if (substr($this->string,$this->pos,1) == '{') {
											$this->pos += 1;
											$result["text"] .= '{';
										}
										else { $_900 = FALSE; break; }
										$res_899 = $result;
										$pos_899 = $this->pos;
										if (substr($this->string,$this->pos,1) == '$') {
											$this->pos += 1;
											$result["text"] .= '$';
											$result = $res_899;
											$this->pos = $pos_899;
											$_900 = FALSE; break;
										}
										else {
											$result = $res_899;
											$this->pos = $pos_899;
										}
										$_900 = TRUE; break;
									}
									while(0);
									if( $_900 === TRUE ) { $_908 = TRUE; break; }
									$result = $res_897;
									$this->pos = $pos_897;
									$_906 = NULL;
									do {
										if (( $subres = $this->literal( '{$' ) ) !== FALSE) { $result["text"] .= $subres; }
										else { $_906 = FALSE; break; }
										$res_905 = $result;
										$pos_905 = $this->pos;
										$_904 = NULL;
										do {
											if (( $subres = $this->rx( '/[A-Za-z_]/' ) ) !== FALSE) { $result["text"] .= $subres; }
											else { $_904 = FALSE; break; }
											$_904 = TRUE; break;
										}
										while(0);
										if( $_904 === TRUE ) {
											$result = $res_905;
											$this->pos = $pos_905;
											$_906 = FALSE; break;
										}
										if( $_904 === FALSE) {
											$result = $res_905;
											$this->pos = $pos_905;
										}
										$_906 = TRUE; break;
									}
									while(0);
									if( $_906 === TRUE ) { $_908 = TRUE; break; }
									$result = $res_897;
									$this->pos = $pos_897;
									$_908 = FALSE; break;
								}
								while(0);
								if( $_908 === TRUE ) { $_910 = TRUE; break; }
								$result = $res_890;
								$this->pos = $pos_890;
								$_910 = FALSE; break;
							}
							while(0);
							if( $_910 === TRUE ) { $_912 = TRUE; break; }
							$result = $res_885;
							$this->pos = $pos_885;
							$_912 = FALSE; break;
						}
						while(0);
						if( $_912 === TRUE ) { $_914 = TRUE; break; }
						$result = $res_883;
						$this->pos = $pos_883;
						$_914 = FALSE; break;
					}
					while(0);
					if( $_914 === TRUE ) { $_916 = TRUE; break; }
					$result = $res_881;
					$this->pos = $pos_881;
					$_916 = FALSE; break;
				}
				while(0);
				if( $_916 === FALSE) { $_918 = FALSE; break; }
				$_918 = TRUE; break;
			}
			while(0);
			if( $_918 === FALSE) {
				$result = $res_919;
				$this->pos = $pos_919;
				unset( $res_919 );
				unset( $pos_919 );
				break;
			}
			$count += 1;
		}
		if ($count > 0) { return $this->finalise($result); }
		else { return FALSE; }
	}



				
	/**
	 * We convert text 
	 */
	function Text__finalise(&$res) {
		$text = $res['text'];
								
		// Unescape any escaped characters in the text, then put back escapes for any single quotes and backslashes
		$text = stripslashes($text);
		$text = addcslashes($text, '\'\\');

		// TODO: This is pretty ugly & gets applied on all files not just html. I wonder if we can make this
		// non-dynamically calculated
		$text = preg_replace(
			'/href\s*\=\s*\"\#/', 
			'href="\' . (Config::inst()->get(\'SSViewer\', \'rewrite_hash_links\') ?' .
			' strip_tags( $_SERVER[\'REQUEST_URI\'] ) : "") . 
				\'#',
			$text
		);

		$res['php'] .= '$val .= \'' . $text . '\';' . PHP_EOL;
	}
								
	/******************
	 * Here ends the parser itself. Below are utility methods to use the parser
	 */
				
	/**
	 * Compiles some passed template source code into the php code that will execute as per the template source.
	 * 
	 * @static
	 * @throws SSTemplateParseException
	 * @param  $string The source of the template
	 * @param string $templateName The name of the template, normally the filename the template source was loaded from
	 * @param bool $includeDebuggingComments True is debugging comments should be included in the output
	 * @return mixed|string The php that, when executed (via include or exec) will behave as per the template source
	 */
	static function compileString($string, $templateName = "", $includeDebuggingComments=false) {
		if (!trim($string)) {
			$code = '';
		}
		else {
			// Construct a parser instance
			$parser = new ComposeTemplateParser($string);
			$parser->includeDebuggingComments = $includeDebuggingComments;
				
			// Ignore UTF8 BOM at begining of string. TODO: Confirm this is needed, make sure SSViewer handles UTF
			// (and other encodings) properly
			if(substr($string, 0,3) == pack("CCC", 0xef, 0xbb, 0xbf)) $parser->pos = 3;
												
			// Match the source against the parser
			$result =  $parser->match_TopTemplate();
			if(!$result) throw new SSTemplateParseException('Unexpected problem parsing template', $parser);
				
			// Get the result
			$code = $result['php'];
		}

		// Include top level debugging comments if desired
		if($includeDebuggingComments && $templateName && stripos($code, "<?xml") === false) {
			$code = $parser->includeDebuggingComments($code, $templateName);
		}	
								
		return $code;
	}

	/**
	 * @param string $code
	 * @return string $code
	 */
	protected function includeDebuggingComments($code, $templateName) {
		// If this template contains a doctype, put it right after it,
		// if not, put it after the <html> tag to avoid IE glitches
		if(stripos($code, "<!doctype") !== false) {
			$code = preg_replace('/(<!doctype[^>]*("[^"]")*[^>]*>)/im', "$1\r\n<!-- template $templateName -->", $code);
			$code .= "\r\n" . '$val .= \'<!-- end template ' . $templateName . ' -->\';';
		} elseif(stripos($code, "<html") !== false) {
			$code = preg_replace_callback('/(.*)(<html[^>]*>)(.*)/i', function($matches) use ($templateName) {
				if (stripos($matches[3], '<!--') === false && stripos($matches[3], '-->') !== false) {
					// after this <html> tag there is a comment close but no comment has been opened
					// this most likely means that this <html> tag is inside a comment
					// we should not add a comment inside a comment (invalid html)
					// lets append it at the end of the comment
					// an example case for this is the html5boilerplate: <!--[if IE]><html class="ie"><![endif]-->
					return $matches[0];
				} else {
					// all other cases, add the comment and return it
					return "{$matches[1]}{$matches[2]}<!-- template $templateName -->{$matches[3]}";
				}
			}, $code);
			$code = preg_replace('/(<\/html[^>]*>)/i', "<!-- end template $templateName -->$1", $code);
		} else {
			$code = str_replace('<?php' . PHP_EOL, '<?php' . PHP_EOL . '$val .= \'<!-- template ' . $templateName .
				' -->\';' . "\r\n", $code);
			$code .= "\r\n" . '$val .= \'<!-- end template ' . $templateName . ' -->\';';
		}
		return $code;
	}
				
	/**
	 * Compiles some file that contains template source code, and returns the php code that will execute as per that
	 * source
	 * 
	 * @static
	 * @param  $template - A file path that contains template source code
	 * @return mixed|string - The php that, when executed (via include or exec) will behave as per the template source
	 */
	static function compileFile($template) {
		return self::compileString(file_get_contents($template), $template);
	}
}
