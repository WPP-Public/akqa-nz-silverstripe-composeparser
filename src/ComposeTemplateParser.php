<?php

/*
WARNING: This file has been machine generated. Do not edit it, or your changes will be overwritten next time it is compiled.
*/


class ComposeTemplateParser extends SSTemplateParser {
				
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


	/* TopTemplate: (Comment | Translate | If | Require | CacheBlock | UncachedBlock | OldI18NTag | Include | Compose | ComposeShort | Composed | ClosedBlock |
	OpenBlock |  MalformedBlock | MismatchedEndBlock  | Injection | Text)+ */
	protected $match_TopTemplate_typestack = array('TopTemplate','Template');
	function match_TopTemplate ($stack = array()) {
		$matchrule = "TopTemplate"; $result = $this->construct($matchrule, $matchrule, array('TemplateMatcher' => 'Template'));
		$count = 0;
		while (true) {
			$res_129 = $result;
			$pos_129 = $this->pos;
			$_128 = NULL;
			do {
				$_126 = NULL;
				do {
					$res_63 = $result;
					$pos_63 = $this->pos;
					$matcher = 'match_'.'Comment'; $key = $matcher; $pos = $this->pos;
					$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
					if ($subres !== FALSE) {
						$this->store( $result, $subres );
						$_126 = TRUE; break;
					}
					$result = $res_63;
					$this->pos = $pos_63;
					$_124 = NULL;
					do {
						$res_65 = $result;
						$pos_65 = $this->pos;
						$matcher = 'match_'.'Translate'; $key = $matcher; $pos = $this->pos;
						$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
						if ($subres !== FALSE) {
							$this->store( $result, $subres );
							$_124 = TRUE; break;
						}
						$result = $res_65;
						$this->pos = $pos_65;
						$_122 = NULL;
						do {
							$res_67 = $result;
							$pos_67 = $this->pos;
							$matcher = 'match_'.'If'; $key = $matcher; $pos = $this->pos;
							$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
							if ($subres !== FALSE) {
								$this->store( $result, $subres );
								$_122 = TRUE; break;
							}
							$result = $res_67;
							$this->pos = $pos_67;
							$_120 = NULL;
							do {
								$res_69 = $result;
								$pos_69 = $this->pos;
								$matcher = 'match_'.'Require'; $key = $matcher; $pos = $this->pos;
								$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
								if ($subres !== FALSE) {
									$this->store( $result, $subres );
									$_120 = TRUE; break;
								}
								$result = $res_69;
								$this->pos = $pos_69;
								$_118 = NULL;
								do {
									$res_71 = $result;
									$pos_71 = $this->pos;
									$matcher = 'match_'.'CacheBlock'; $key = $matcher; $pos = $this->pos;
									$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
									if ($subres !== FALSE) {
										$this->store( $result, $subres );
										$_118 = TRUE; break;
									}
									$result = $res_71;
									$this->pos = $pos_71;
									$_116 = NULL;
									do {
										$res_73 = $result;
										$pos_73 = $this->pos;
										$matcher = 'match_'.'UncachedBlock'; $key = $matcher; $pos = $this->pos;
										$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
										if ($subres !== FALSE) {
											$this->store( $result, $subres );
											$_116 = TRUE; break;
										}
										$result = $res_73;
										$this->pos = $pos_73;
										$_114 = NULL;
										do {
											$res_75 = $result;
											$pos_75 = $this->pos;
											$matcher = 'match_'.'OldI18NTag'; $key = $matcher; $pos = $this->pos;
											$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
											if ($subres !== FALSE) {
												$this->store( $result, $subres );
												$_114 = TRUE; break;
											}
											$result = $res_75;
											$this->pos = $pos_75;
											$_112 = NULL;
											do {
												$res_77 = $result;
												$pos_77 = $this->pos;
												$matcher = 'match_'.'Include'; $key = $matcher; $pos = $this->pos;
												$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
												if ($subres !== FALSE) {
													$this->store( $result, $subres );
													$_112 = TRUE; break;
												}
												$result = $res_77;
												$this->pos = $pos_77;
												$_110 = NULL;
												do {
													$res_79 = $result;
													$pos_79 = $this->pos;
													$matcher = 'match_'.'Compose'; $key = $matcher; $pos = $this->pos;
													$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
													if ($subres !== FALSE) {
														$this->store( $result, $subres );
														$_110 = TRUE; break;
													}
													$result = $res_79;
													$this->pos = $pos_79;
													$_108 = NULL;
													do {
														$res_81 = $result;
														$pos_81 = $this->pos;
														$matcher = 'match_'.'ComposeShort'; $key = $matcher; $pos = $this->pos;
														$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
														if ($subres !== FALSE) {
															$this->store( $result, $subres );
															$_108 = TRUE; break;
														}
														$result = $res_81;
														$this->pos = $pos_81;
														$_106 = NULL;
														do {
															$res_83 = $result;
															$pos_83 = $this->pos;
															$matcher = 'match_'.'Composed'; $key = $matcher; $pos = $this->pos;
															$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
															if ($subres !== FALSE) {
																$this->store( $result, $subres );
																$_106 = TRUE; break;
															}
															$result = $res_83;
															$this->pos = $pos_83;
															$_104 = NULL;
															do {
																$res_85 = $result;
																$pos_85 = $this->pos;
																$matcher = 'match_'.'ClosedBlock'; $key = $matcher; $pos = $this->pos;
																$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
																if ($subres !== FALSE) {
																	$this->store( $result, $subres );
																	$_104 = TRUE; break;
																}
																$result = $res_85;
																$this->pos = $pos_85;
																$_102 = NULL;
																do {
																	$res_87 = $result;
																	$pos_87 = $this->pos;
																	$matcher = 'match_'.'OpenBlock'; $key = $matcher; $pos = $this->pos;
																	$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
																	if ($subres !== FALSE) {
																		$this->store( $result, $subres );
																		$_102 = TRUE; break;
																	}
																	$result = $res_87;
																	$this->pos = $pos_87;
																	$_100 = NULL;
																	do {
																		$res_89 = $result;
																		$pos_89 = $this->pos;
																		$matcher = 'match_'.'MalformedBlock'; $key = $matcher; $pos = $this->pos;
																		$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
																		if ($subres !== FALSE) {
																			$this->store( $result, $subres );
																			$_100 = TRUE; break;
																		}
																		$result = $res_89;
																		$this->pos = $pos_89;
																		$_98 = NULL;
																		do {
																			$res_91 = $result;
																			$pos_91 = $this->pos;
																			$matcher = 'match_'.'MismatchedEndBlock'; $key = $matcher; $pos = $this->pos;
																			$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
																			if ($subres !== FALSE) {
																				$this->store( $result, $subres );
																				$_98 = TRUE; break;
																			}
																			$result = $res_91;
																			$this->pos = $pos_91;
																			$_96 = NULL;
																			do {
																				$res_93 = $result;
																				$pos_93 = $this->pos;
																				$matcher = 'match_'.'Injection'; $key = $matcher; $pos = $this->pos;
																				$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
																				if ($subres !== FALSE) {
																					$this->store( $result, $subres );
																					$_96 = TRUE; break;
																				}
																				$result = $res_93;
																				$this->pos = $pos_93;
																				$matcher = 'match_'.'Text'; $key = $matcher; $pos = $this->pos;
																				$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
																				if ($subres !== FALSE) {
																					$this->store( $result, $subres );
																					$_96 = TRUE; break;
																				}
																				$result = $res_93;
																				$this->pos = $pos_93;
																				$_96 = FALSE; break;
																			}
																			while(0);
																			if( $_96 === TRUE ) { $_98 = TRUE; break; }
																			$result = $res_91;
																			$this->pos = $pos_91;
																			$_98 = FALSE; break;
																		}
																		while(0);
																		if( $_98 === TRUE ) { $_100 = TRUE; break; }
																		$result = $res_89;
																		$this->pos = $pos_89;
																		$_100 = FALSE; break;
																	}
																	while(0);
																	if( $_100 === TRUE ) { $_102 = TRUE; break; }
																	$result = $res_87;
																	$this->pos = $pos_87;
																	$_102 = FALSE; break;
																}
																while(0);
																if( $_102 === TRUE ) { $_104 = TRUE; break; }
																$result = $res_85;
																$this->pos = $pos_85;
																$_104 = FALSE; break;
															}
															while(0);
															if( $_104 === TRUE ) { $_106 = TRUE; break; }
															$result = $res_83;
															$this->pos = $pos_83;
															$_106 = FALSE; break;
														}
														while(0);
														if( $_106 === TRUE ) { $_108 = TRUE; break; }
														$result = $res_81;
														$this->pos = $pos_81;
														$_108 = FALSE; break;
													}
													while(0);
													if( $_108 === TRUE ) { $_110 = TRUE; break; }
													$result = $res_79;
													$this->pos = $pos_79;
													$_110 = FALSE; break;
												}
												while(0);
												if( $_110 === TRUE ) { $_112 = TRUE; break; }
												$result = $res_77;
												$this->pos = $pos_77;
												$_112 = FALSE; break;
											}
											while(0);
											if( $_112 === TRUE ) { $_114 = TRUE; break; }
											$result = $res_75;
											$this->pos = $pos_75;
											$_114 = FALSE; break;
										}
										while(0);
										if( $_114 === TRUE ) { $_116 = TRUE; break; }
										$result = $res_73;
										$this->pos = $pos_73;
										$_116 = FALSE; break;
									}
									while(0);
									if( $_116 === TRUE ) { $_118 = TRUE; break; }
									$result = $res_71;
									$this->pos = $pos_71;
									$_118 = FALSE; break;
								}
								while(0);
								if( $_118 === TRUE ) { $_120 = TRUE; break; }
								$result = $res_69;
								$this->pos = $pos_69;
								$_120 = FALSE; break;
							}
							while(0);
							if( $_120 === TRUE ) { $_122 = TRUE; break; }
							$result = $res_67;
							$this->pos = $pos_67;
							$_122 = FALSE; break;
						}
						while(0);
						if( $_122 === TRUE ) { $_124 = TRUE; break; }
						$result = $res_65;
						$this->pos = $pos_65;
						$_124 = FALSE; break;
					}
					while(0);
					if( $_124 === TRUE ) { $_126 = TRUE; break; }
					$result = $res_63;
					$this->pos = $pos_63;
					$_126 = FALSE; break;
				}
				while(0);
				if( $_126 === FALSE) { $_128 = FALSE; break; }
				$_128 = TRUE; break;
			}
			while(0);
			if( $_128 === FALSE) {
				$result = $res_129;
				$this->pos = $pos_129;
				unset( $res_129 );
				unset( $pos_129 );
				break;
			}
			$count += 1;
		}
		if ($count > 0) { return $this->finalise($result); }
		else { return FALSE; }
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
		$_134 = NULL;
		do {
			$res_131 = $result;
			$pos_131 = $this->pos;
			$matcher = 'match_'.'BracketInjection'; $key = $matcher; $pos = $this->pos;
			$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
			if ($subres !== FALSE) {
				$this->store( $result, $subres );
				$_134 = TRUE; break;
			}
			$result = $res_131;
			$this->pos = $pos_131;
			$matcher = 'match_'.'SimpleInjection'; $key = $matcher; $pos = $this->pos;
			$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
			if ($subres !== FALSE) {
				$this->store( $result, $subres );
				$_134 = TRUE; break;
			}
			$result = $res_131;
			$this->pos = $pos_131;
			$_134 = FALSE; break;
		}
		while(0);
		if( $_134 === TRUE ) { return $this->finalise($result); }
		if( $_134 === FALSE) { return FALSE; }
	}


	/* ComposedArgumentQuotedString: q:/['"]/ ( ComposedArgumentInjection | ComposedArgumentString )* '$q' */
	protected $match_ComposedArgumentQuotedString_typestack = array('ComposedArgumentQuotedString');
	function match_ComposedArgumentQuotedString ($stack = array()) {
		$matchrule = "ComposedArgumentQuotedString"; $result = $this->construct($matchrule, $matchrule, null);
		$_145 = NULL;
		do {
			$stack[] = $result; $result = $this->construct( $matchrule, "q" ); 
			if (( $subres = $this->rx( '/[\'"]/' ) ) !== FALSE) {
				$result["text"] .= $subres;
				$subres = $result; $result = array_pop($stack);
				$this->store( $result, $subres, 'q' );
			}
			else {
				$result = array_pop($stack);
				$_145 = FALSE; break;
			}
			while (true) {
				$res_143 = $result;
				$pos_143 = $this->pos;
				$_142 = NULL;
				do {
					$_140 = NULL;
					do {
						$res_137 = $result;
						$pos_137 = $this->pos;
						$matcher = 'match_'.'ComposedArgumentInjection'; $key = $matcher; $pos = $this->pos;
						$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
						if ($subres !== FALSE) {
							$this->store( $result, $subres );
							$_140 = TRUE; break;
						}
						$result = $res_137;
						$this->pos = $pos_137;
						$matcher = 'match_'.'ComposedArgumentString'; $key = $matcher; $pos = $this->pos;
						$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
						if ($subres !== FALSE) {
							$this->store( $result, $subres );
							$_140 = TRUE; break;
						}
						$result = $res_137;
						$this->pos = $pos_137;
						$_140 = FALSE; break;
					}
					while(0);
					if( $_140 === FALSE) { $_142 = FALSE; break; }
					$_142 = TRUE; break;
				}
				while(0);
				if( $_142 === FALSE) {
					$result = $res_143;
					$this->pos = $pos_143;
					unset( $res_143 );
					unset( $pos_143 );
					break;
				}
			}
			if (( $subres = $this->literal( ''.$this->expression($result, $stack, 'q').'' ) ) !== FALSE) { $result["text"] .= $subres; }
			else { $_145 = FALSE; break; }
			$_145 = TRUE; break;
		}
		while(0);
		if( $_145 === TRUE ) { return $this->finalise($result); }
		if( $_145 === FALSE) { return FALSE; }
	}


	/* Argument:
	:DollarMarkedLookup |
	:QuotedString |
	:Lookup !(< FreeString)|
	:FreeString */
	protected $match_Argument_typestack = array('Argument');
	function match_Argument ($stack = array()) {
		$matchrule = "Argument"; $result = $this->construct($matchrule, $matchrule, null);
		$_164 = NULL;
		do {
			$res_147 = $result;
			$pos_147 = $this->pos;
			$matcher = 'match_'.'DollarMarkedLookup'; $key = $matcher; $pos = $this->pos;
			$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
			if ($subres !== FALSE) {
				$this->store( $result, $subres, "DollarMarkedLookup" );
				$_164 = TRUE; break;
			}
			$result = $res_147;
			$this->pos = $pos_147;
			$_162 = NULL;
			do {
				$res_149 = $result;
				$pos_149 = $this->pos;
				$matcher = 'match_'.'QuotedString'; $key = $matcher; $pos = $this->pos;
				$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
				if ($subres !== FALSE) {
					$this->store( $result, $subres, "QuotedString" );
					$_162 = TRUE; break;
				}
				$result = $res_149;
				$this->pos = $pos_149;
				$_160 = NULL;
				do {
					$res_151 = $result;
					$pos_151 = $this->pos;
					$_157 = NULL;
					do {
						$matcher = 'match_'.'Lookup'; $key = $matcher; $pos = $this->pos;
						$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
						if ($subres !== FALSE) {
							$this->store( $result, $subres, "Lookup" );
						}
						else { $_157 = FALSE; break; }
						$res_156 = $result;
						$pos_156 = $this->pos;
						$_155 = NULL;
						do {
							if (( $subres = $this->whitespace(  ) ) !== FALSE) { $result["text"] .= $subres; }
							$matcher = 'match_'.'FreeString'; $key = $matcher; $pos = $this->pos;
							$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
							if ($subres !== FALSE) {
								$this->store( $result, $subres );
							}
							else { $_155 = FALSE; break; }
							$_155 = TRUE; break;
						}
						while(0);
						if( $_155 === TRUE ) {
							$result = $res_156;
							$this->pos = $pos_156;
							$_157 = FALSE; break;
						}
						if( $_155 === FALSE) {
							$result = $res_156;
							$this->pos = $pos_156;
						}
						$_157 = TRUE; break;
					}
					while(0);
					if( $_157 === TRUE ) { $_160 = TRUE; break; }
					$result = $res_151;
					$this->pos = $pos_151;
					$matcher = 'match_'.'FreeString'; $key = $matcher; $pos = $this->pos;
					$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
					if ($subres !== FALSE) {
						$this->store( $result, $subres, "FreeString" );
						$_160 = TRUE; break;
					}
					$result = $res_151;
					$this->pos = $pos_151;
					$_160 = FALSE; break;
				}
				while(0);
				if( $_160 === TRUE ) { $_162 = TRUE; break; }
				$result = $res_149;
				$this->pos = $pos_149;
				$_162 = FALSE; break;
			}
			while(0);
			if( $_162 === TRUE ) { $_164 = TRUE; break; }
			$result = $res_147;
			$this->pos = $pos_147;
			$_164 = FALSE; break;
		}
		while(0);
		if( $_164 === TRUE ) { return $this->finalise($result); }
		if( $_164 === FALSE) { return FALSE; }
	}


	/* ComposedArgument:
	:DollarMarkedLookup |
	:ComposedArgumentQuotedString |
	:Lookup !(< FreeString)|
	:FreeString */
	protected $match_ComposedArgument_typestack = array('ComposedArgument','Argument');
	function match_ComposedArgument ($stack = array()) {
		$matchrule = "ComposedArgument"; $result = $this->construct($matchrule, $matchrule, null);
		$_183 = NULL;
		do {
			$res_166 = $result;
			$pos_166 = $this->pos;
			$matcher = 'match_'.'DollarMarkedLookup'; $key = $matcher; $pos = $this->pos;
			$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
			if ($subres !== FALSE) {
				$this->store( $result, $subres, "DollarMarkedLookup" );
				$_183 = TRUE; break;
			}
			$result = $res_166;
			$this->pos = $pos_166;
			$_181 = NULL;
			do {
				$res_168 = $result;
				$pos_168 = $this->pos;
				$matcher = 'match_'.'ComposedArgumentQuotedString'; $key = $matcher; $pos = $this->pos;
				$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
				if ($subres !== FALSE) {
					$this->store( $result, $subres, "ComposedArgumentQuotedString" );
					$_181 = TRUE; break;
				}
				$result = $res_168;
				$this->pos = $pos_168;
				$_179 = NULL;
				do {
					$res_170 = $result;
					$pos_170 = $this->pos;
					$_176 = NULL;
					do {
						$matcher = 'match_'.'Lookup'; $key = $matcher; $pos = $this->pos;
						$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
						if ($subres !== FALSE) {
							$this->store( $result, $subres, "Lookup" );
						}
						else { $_176 = FALSE; break; }
						$res_175 = $result;
						$pos_175 = $this->pos;
						$_174 = NULL;
						do {
							if (( $subres = $this->whitespace(  ) ) !== FALSE) { $result["text"] .= $subres; }
							$matcher = 'match_'.'FreeString'; $key = $matcher; $pos = $this->pos;
							$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
							if ($subres !== FALSE) {
								$this->store( $result, $subres );
							}
							else { $_174 = FALSE; break; }
							$_174 = TRUE; break;
						}
						while(0);
						if( $_174 === TRUE ) {
							$result = $res_175;
							$this->pos = $pos_175;
							$_176 = FALSE; break;
						}
						if( $_174 === FALSE) {
							$result = $res_175;
							$this->pos = $pos_175;
						}
						$_176 = TRUE; break;
					}
					while(0);
					if( $_176 === TRUE ) { $_179 = TRUE; break; }
					$result = $res_170;
					$this->pos = $pos_170;
					$matcher = 'match_'.'FreeString'; $key = $matcher; $pos = $this->pos;
					$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
					if ($subres !== FALSE) {
						$this->store( $result, $subres, "FreeString" );
						$_179 = TRUE; break;
					}
					$result = $res_170;
					$this->pos = $pos_170;
					$_179 = FALSE; break;
				}
				while(0);
				if( $_179 === TRUE ) { $_181 = TRUE; break; }
				$result = $res_168;
				$this->pos = $pos_168;
				$_181 = FALSE; break;
			}
			while(0);
			if( $_181 === TRUE ) { $_183 = TRUE; break; }
			$result = $res_166;
			$this->pos = $pos_166;
			$_183 = FALSE; break;
		}
		while(0);
		if( $_183 === TRUE ) { return $this->finalise($result); }
		if( $_183 === FALSE) { return FALSE; }
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

	/* NamedArgument: Name:Word "=" Value:Argument */
	protected $match_NamedArgument_typestack = array('NamedArgument');
	function match_NamedArgument ($stack = array()) {
		$matchrule = "NamedArgument"; $result = $this->construct($matchrule, $matchrule, null);
		$_188 = NULL;
		do {
			$matcher = 'match_'.'Word'; $key = $matcher; $pos = $this->pos;
			$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
			if ($subres !== FALSE) {
				$this->store( $result, $subres, "Name" );
			}
			else { $_188 = FALSE; break; }
			if (substr($this->string,$this->pos,1) == '=') {
				$this->pos += 1;
				$result["text"] .= '=';
			}
			else { $_188 = FALSE; break; }
			$matcher = 'match_'.'Argument'; $key = $matcher; $pos = $this->pos;
			$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
			if ($subres !== FALSE) {
				$this->store( $result, $subres, "Value" );
			}
			else { $_188 = FALSE; break; }
			$_188 = TRUE; break;
		}
		while(0);
		if( $_188 === TRUE ) { return $this->finalise($result); }
		if( $_188 === FALSE) { return FALSE; }
	}


	/* ComposedNamedArgument: Name:Word "=" Value:ComposedArgument */
	protected $match_ComposedNamedArgument_typestack = array('ComposedNamedArgument','NamedArgument');
	function match_ComposedNamedArgument ($stack = array()) {
		$matchrule = "ComposedNamedArgument"; $result = $this->construct($matchrule, $matchrule, null);
		$_193 = NULL;
		do {
			$matcher = 'match_'.'Word'; $key = $matcher; $pos = $this->pos;
			$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
			if ($subres !== FALSE) {
				$this->store( $result, $subres, "Name" );
			}
			else { $_193 = FALSE; break; }
			if (substr($this->string,$this->pos,1) == '=') {
				$this->pos += 1;
				$result["text"] .= '=';
			}
			else { $_193 = FALSE; break; }
			$matcher = 'match_'.'ComposedArgument'; $key = $matcher; $pos = $this->pos;
			$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
			if ($subres !== FALSE) {
				$this->store( $result, $subres, "Value" );
			}
			else { $_193 = FALSE; break; }
			$_193 = TRUE; break;
		}
		while(0);
		if( $_193 === TRUE ) { return $this->finalise($result); }
		if( $_193 === FALSE) { return FALSE; }
	}




	/* Compose: '<:' Template:Word < (ComposedNamedArgument ( " " ComposedNamedArgument )*)? > '>' Composed:$TemplateMatcher?
	'</:' '$Template' '>' */
	protected $match_Compose_typestack = array('Compose');
	function match_Compose ($stack = array()) {
		$matchrule = "Compose"; $result = $this->construct($matchrule, $matchrule, null);
		$_211 = NULL;
		do {
			if (( $subres = $this->literal( '<:' ) ) !== FALSE) { $result["text"] .= $subres; }
			else { $_211 = FALSE; break; }
			$matcher = 'match_'.'Word'; $key = $matcher; $pos = $this->pos;
			$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
			if ($subres !== FALSE) {
				$this->store( $result, $subres, "Template" );
			}
			else { $_211 = FALSE; break; }
			if (( $subres = $this->whitespace(  ) ) !== FALSE) { $result["text"] .= $subres; }
			$res_204 = $result;
			$pos_204 = $this->pos;
			$_203 = NULL;
			do {
				$matcher = 'match_'.'ComposedNamedArgument'; $key = $matcher; $pos = $this->pos;
				$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
				if ($subres !== FALSE) { $this->store( $result, $subres ); }
				else { $_203 = FALSE; break; }
				while (true) {
					$res_202 = $result;
					$pos_202 = $this->pos;
					$_201 = NULL;
					do {
						if (substr($this->string,$this->pos,1) == ' ') {
							$this->pos += 1;
							$result["text"] .= ' ';
						}
						else { $_201 = FALSE; break; }
						$matcher = 'match_'.'ComposedNamedArgument'; $key = $matcher; $pos = $this->pos;
						$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
						if ($subres !== FALSE) {
							$this->store( $result, $subres );
						}
						else { $_201 = FALSE; break; }
						$_201 = TRUE; break;
					}
					while(0);
					if( $_201 === FALSE) {
						$result = $res_202;
						$this->pos = $pos_202;
						unset( $res_202 );
						unset( $pos_202 );
						break;
					}
				}
				$_203 = TRUE; break;
			}
			while(0);
			if( $_203 === FALSE) {
				$result = $res_204;
				$this->pos = $pos_204;
				unset( $res_204 );
				unset( $pos_204 );
			}
			if (( $subres = $this->whitespace(  ) ) !== FALSE) { $result["text"] .= $subres; }
			if (substr($this->string,$this->pos,1) == '>') {
				$this->pos += 1;
				$result["text"] .= '>';
			}
			else { $_211 = FALSE; break; }
			$res_207 = $result;
			$pos_207 = $this->pos;
			$matcher = 'match_'.$this->expression($result, $stack, 'TemplateMatcher'); $key = $matcher; $pos = $this->pos;
			$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
			if ($subres !== FALSE) {
				$this->store( $result, $subres, "Composed" );
			}
			else {
				$result = $res_207;
				$this->pos = $pos_207;
				unset( $res_207 );
				unset( $pos_207 );
			}
			if (( $subres = $this->literal( '</:' ) ) !== FALSE) { $result["text"] .= $subres; }
			else { $_211 = FALSE; break; }
			if (( $subres = $this->literal( ''.$this->expression($result, $stack, 'Template').'' ) ) !== FALSE) { $result["text"] .= $subres; }
			else { $_211 = FALSE; break; }
			if (substr($this->string,$this->pos,1) == '>') {
				$this->pos += 1;
				$result["text"] .= '>';
			}
			else { $_211 = FALSE; break; }
			$_211 = TRUE; break;
		}
		while(0);
		if( $_211 === TRUE ) { return $this->finalise($result); }
		if( $_211 === FALSE) { return FALSE; }
	}


	/* ComposeShort: '<:' Template:Word < (ComposedNamedArgument ( " " ComposedNamedArgument )*)? > '/>' */
	protected $match_ComposeShort_typestack = array('ComposeShort','Compose');
	function match_ComposeShort ($stack = array()) {
		$matchrule = "ComposeShort"; $result = $this->construct($matchrule, $matchrule, null);
		$_225 = NULL;
		do {
			if (( $subres = $this->literal( '<:' ) ) !== FALSE) { $result["text"] .= $subres; }
			else { $_225 = FALSE; break; }
			$matcher = 'match_'.'Word'; $key = $matcher; $pos = $this->pos;
			$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
			if ($subres !== FALSE) {
				$this->store( $result, $subres, "Template" );
			}
			else { $_225 = FALSE; break; }
			if (( $subres = $this->whitespace(  ) ) !== FALSE) { $result["text"] .= $subres; }
			$res_222 = $result;
			$pos_222 = $this->pos;
			$_221 = NULL;
			do {
				$matcher = 'match_'.'ComposedNamedArgument'; $key = $matcher; $pos = $this->pos;
				$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
				if ($subres !== FALSE) { $this->store( $result, $subres ); }
				else { $_221 = FALSE; break; }
				while (true) {
					$res_220 = $result;
					$pos_220 = $this->pos;
					$_219 = NULL;
					do {
						if (substr($this->string,$this->pos,1) == ' ') {
							$this->pos += 1;
							$result["text"] .= ' ';
						}
						else { $_219 = FALSE; break; }
						$matcher = 'match_'.'ComposedNamedArgument'; $key = $matcher; $pos = $this->pos;
						$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
						if ($subres !== FALSE) {
							$this->store( $result, $subres );
						}
						else { $_219 = FALSE; break; }
						$_219 = TRUE; break;
					}
					while(0);
					if( $_219 === FALSE) {
						$result = $res_220;
						$this->pos = $pos_220;
						unset( $res_220 );
						unset( $pos_220 );
						break;
					}
				}
				$_221 = TRUE; break;
			}
			while(0);
			if( $_221 === FALSE) {
				$result = $res_222;
				$this->pos = $pos_222;
				unset( $res_222 );
				unset( $pos_222 );
			}
			if (( $subres = $this->whitespace(  ) ) !== FALSE) { $result["text"] .= $subres; }
			if (( $subres = $this->literal( '/>' ) ) !== FALSE) { $result["text"] .= $subres; }
			else { $_225 = FALSE; break; }
			$_225 = TRUE; break;
		}
		while(0);
		if( $_225 === TRUE ) { return $this->finalise($result); }
		if( $_225 === FALSE) { return FALSE; }
	}



	function Compose__construct(&$res){
		$res['arguments'] = array();
	}

	function Compose_ComposedNamedArgument(&$res, $sub){
		$res['arguments'][] = $sub['php'];
	}

	function Compose__finalise(&$res) {
		if (isset($res['Composed'])) {
			$template = $res['Template']['text'];
			$arguments = implode(',', $res['arguments']);
			$res['php'] .= <<<PHP
\$val .= SSViewer::execute_template(
	'$template',
	\$scope->getItem(),
	array(
		'Composed' => function () use (\$scope) {
			\$val = '';
			{$res['Composed']['php']}\t\t\treturn \$val;
		},
		$arguments
	),
	\$scope
);
PHP;
		} else {
            $res['template'] = '\''.$res['Template']['text'].'\'';
            $this->Include__finalise($res);
		}
	}

	/* Composed: "<%" < "composed" > "%>" */
	protected $match_Composed_typestack = array('Composed');
	function match_Composed ($stack = array()) {
		$matchrule = "Composed"; $result = $this->construct($matchrule, $matchrule, null);
		$_232 = NULL;
		do {
			if (( $subres = $this->literal( '<%' ) ) !== FALSE) { $result["text"] .= $subres; }
			else { $_232 = FALSE; break; }
			if (( $subres = $this->whitespace(  ) ) !== FALSE) { $result["text"] .= $subres; }
			if (( $subres = $this->literal( 'composed' ) ) !== FALSE) { $result["text"] .= $subres; }
			else { $_232 = FALSE; break; }
			if (( $subres = $this->whitespace(  ) ) !== FALSE) { $result["text"] .= $subres; }
			if (( $subres = $this->literal( '%>' ) ) !== FALSE) { $result["text"] .= $subres; }
			else { $_232 = FALSE; break; }
			$_232 = TRUE; break;
		}
		while(0);
		if( $_232 === TRUE ) { return $this->finalise($result); }
		if( $_232 === FALSE) { return FALSE; }
	}




	function Composed__finalise(&$res){
		$res['php'] = "\$val .= (\$composed = \$scope->locally()->obj('Composed', null, true)->getItem()) ? \$composed() : '';";
	}

	/* NotBlockTag: "end_" | (("if" | "else_if" | "else" | "require" | "cached" | "uncached" | "cacheblock" | "include" | "composed")]) */
	protected $match_NotBlockTag_typestack = array('NotBlockTag');
	function match_NotBlockTag ($stack = array()) {
		$matchrule = "NotBlockTag"; $result = $this->construct($matchrule, $matchrule, null);
		$_274 = NULL;
		do {
			$res_234 = $result;
			$pos_234 = $this->pos;
			if (( $subres = $this->literal( 'end_' ) ) !== FALSE) {
				$result["text"] .= $subres;
				$_274 = TRUE; break;
			}
			$result = $res_234;
			$this->pos = $pos_234;
			$_272 = NULL;
			do {
				$_269 = NULL;
				do {
					$_267 = NULL;
					do {
						$res_236 = $result;
						$pos_236 = $this->pos;
						if (( $subres = $this->literal( 'if' ) ) !== FALSE) {
							$result["text"] .= $subres;
							$_267 = TRUE; break;
						}
						$result = $res_236;
						$this->pos = $pos_236;
						$_265 = NULL;
						do {
							$res_238 = $result;
							$pos_238 = $this->pos;
							if (( $subres = $this->literal( 'else_if' ) ) !== FALSE) {
								$result["text"] .= $subres;
								$_265 = TRUE; break;
							}
							$result = $res_238;
							$this->pos = $pos_238;
							$_263 = NULL;
							do {
								$res_240 = $result;
								$pos_240 = $this->pos;
								if (( $subres = $this->literal( 'else' ) ) !== FALSE) {
									$result["text"] .= $subres;
									$_263 = TRUE; break;
								}
								$result = $res_240;
								$this->pos = $pos_240;
								$_261 = NULL;
								do {
									$res_242 = $result;
									$pos_242 = $this->pos;
									if (( $subres = $this->literal( 'require' ) ) !== FALSE) {
										$result["text"] .= $subres;
										$_261 = TRUE; break;
									}
									$result = $res_242;
									$this->pos = $pos_242;
									$_259 = NULL;
									do {
										$res_244 = $result;
										$pos_244 = $this->pos;
										if (( $subres = $this->literal( 'cached' ) ) !== FALSE) {
											$result["text"] .= $subres;
											$_259 = TRUE; break;
										}
										$result = $res_244;
										$this->pos = $pos_244;
										$_257 = NULL;
										do {
											$res_246 = $result;
											$pos_246 = $this->pos;
											if (( $subres = $this->literal( 'uncached' ) ) !== FALSE) {
												$result["text"] .= $subres;
												$_257 = TRUE; break;
											}
											$result = $res_246;
											$this->pos = $pos_246;
											$_255 = NULL;
											do {
												$res_248 = $result;
												$pos_248 = $this->pos;
												if (( $subres = $this->literal( 'cacheblock' ) ) !== FALSE) {
													$result["text"] .= $subres;
													$_255 = TRUE; break;
												}
												$result = $res_248;
												$this->pos = $pos_248;
												$_253 = NULL;
												do {
													$res_250 = $result;
													$pos_250 = $this->pos;
													if (( $subres = $this->literal( 'include' ) ) !== FALSE) {
														$result["text"] .= $subres;
														$_253 = TRUE; break;
													}
													$result = $res_250;
													$this->pos = $pos_250;
													if (( $subres = $this->literal( 'composed' ) ) !== FALSE) {
														$result["text"] .= $subres;
														$_253 = TRUE; break;
													}
													$result = $res_250;
													$this->pos = $pos_250;
													$_253 = FALSE; break;
												}
												while(0);
												if( $_253 === TRUE ) { $_255 = TRUE; break; }
												$result = $res_248;
												$this->pos = $pos_248;
												$_255 = FALSE; break;
											}
											while(0);
											if( $_255 === TRUE ) { $_257 = TRUE; break; }
											$result = $res_246;
											$this->pos = $pos_246;
											$_257 = FALSE; break;
										}
										while(0);
										if( $_257 === TRUE ) { $_259 = TRUE; break; }
										$result = $res_244;
										$this->pos = $pos_244;
										$_259 = FALSE; break;
									}
									while(0);
									if( $_259 === TRUE ) { $_261 = TRUE; break; }
									$result = $res_242;
									$this->pos = $pos_242;
									$_261 = FALSE; break;
								}
								while(0);
								if( $_261 === TRUE ) { $_263 = TRUE; break; }
								$result = $res_240;
								$this->pos = $pos_240;
								$_263 = FALSE; break;
							}
							while(0);
							if( $_263 === TRUE ) { $_265 = TRUE; break; }
							$result = $res_238;
							$this->pos = $pos_238;
							$_265 = FALSE; break;
						}
						while(0);
						if( $_265 === TRUE ) { $_267 = TRUE; break; }
						$result = $res_236;
						$this->pos = $pos_236;
						$_267 = FALSE; break;
					}
					while(0);
					if( $_267 === FALSE) { $_269 = FALSE; break; }
					$_269 = TRUE; break;
				}
				while(0);
				if( $_269 === FALSE) { $_272 = FALSE; break; }
				if (( $subres = $this->whitespace(  ) ) !== FALSE) { $result["text"] .= $subres; }
				else { $_272 = FALSE; break; }
				$_272 = TRUE; break;
			}
			while(0);
			if( $_272 === TRUE ) { $_274 = TRUE; break; }
			$result = $res_234;
			$this->pos = $pos_234;
			$_274 = FALSE; break;
		}
		while(0);
		if( $_274 === TRUE ) { return $this->finalise($result); }
		if( $_274 === FALSE) { return FALSE; }
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
			$res_314 = $result;
			$pos_314 = $this->pos;
			$_313 = NULL;
			do {
				$_311 = NULL;
				do {
					$res_276 = $result;
					$pos_276 = $this->pos;
					if (( $subres = $this->rx( '/ [^<${\\\\]+ /' ) ) !== FALSE) {
						$result["text"] .= $subres;
						$_311 = TRUE; break;
					}
					$result = $res_276;
					$this->pos = $pos_276;
					$_309 = NULL;
					do {
						$res_278 = $result;
						$pos_278 = $this->pos;
						if (( $subres = $this->rx( '/ (\\\\.) /' ) ) !== FALSE) {
							$result["text"] .= $subres;
							$_309 = TRUE; break;
						}
						$result = $res_278;
						$this->pos = $pos_278;
						$_307 = NULL;
						do {
							$res_280 = $result;
							$pos_280 = $this->pos;
							$_283 = NULL;
							do {
								if (substr($this->string,$this->pos,1) == '<') {
									$this->pos += 1;
									$result["text"] .= '<';
								}
								else { $_283 = FALSE; break; }
								$res_282 = $result;
								$pos_282 = $this->pos;
								if (( $subres = $this->rx( '/ % | : | \/: /' ) ) !== FALSE) {
									$result["text"] .= $subres;
									$result = $res_282;
									$this->pos = $pos_282;
									$_283 = FALSE; break;
								}
								else {
									$result = $res_282;
									$this->pos = $pos_282;
								}
								$_283 = TRUE; break;
							}
							while(0);
							if( $_283 === TRUE ) { $_307 = TRUE; break; }
							$result = $res_280;
							$this->pos = $pos_280;
							$_305 = NULL;
							do {
								$res_285 = $result;
								$pos_285 = $this->pos;
								$_290 = NULL;
								do {
									if (substr($this->string,$this->pos,1) == '$') {
										$this->pos += 1;
										$result["text"] .= '$';
									}
									else { $_290 = FALSE; break; }
									$res_289 = $result;
									$pos_289 = $this->pos;
									$_288 = NULL;
									do {
										if (( $subres = $this->rx( '/[A-Za-z_]/' ) ) !== FALSE) { $result["text"] .= $subres; }
										else { $_288 = FALSE; break; }
										$_288 = TRUE; break;
									}
									while(0);
									if( $_288 === TRUE ) {
										$result = $res_289;
										$this->pos = $pos_289;
										$_290 = FALSE; break;
									}
									if( $_288 === FALSE) {
										$result = $res_289;
										$this->pos = $pos_289;
									}
									$_290 = TRUE; break;
								}
								while(0);
								if( $_290 === TRUE ) { $_305 = TRUE; break; }
								$result = $res_285;
								$this->pos = $pos_285;
								$_303 = NULL;
								do {
									$res_292 = $result;
									$pos_292 = $this->pos;
									$_295 = NULL;
									do {
										if (substr($this->string,$this->pos,1) == '{') {
											$this->pos += 1;
											$result["text"] .= '{';
										}
										else { $_295 = FALSE; break; }
										$res_294 = $result;
										$pos_294 = $this->pos;
										if (substr($this->string,$this->pos,1) == '$') {
											$this->pos += 1;
											$result["text"] .= '$';
											$result = $res_294;
											$this->pos = $pos_294;
											$_295 = FALSE; break;
										}
										else {
											$result = $res_294;
											$this->pos = $pos_294;
										}
										$_295 = TRUE; break;
									}
									while(0);
									if( $_295 === TRUE ) { $_303 = TRUE; break; }
									$result = $res_292;
									$this->pos = $pos_292;
									$_301 = NULL;
									do {
										if (( $subres = $this->literal( '{$' ) ) !== FALSE) { $result["text"] .= $subres; }
										else { $_301 = FALSE; break; }
										$res_300 = $result;
										$pos_300 = $this->pos;
										$_299 = NULL;
										do {
											if (( $subres = $this->rx( '/[A-Za-z_]/' ) ) !== FALSE) { $result["text"] .= $subres; }
											else { $_299 = FALSE; break; }
											$_299 = TRUE; break;
										}
										while(0);
										if( $_299 === TRUE ) {
											$result = $res_300;
											$this->pos = $pos_300;
											$_301 = FALSE; break;
										}
										if( $_299 === FALSE) {
											$result = $res_300;
											$this->pos = $pos_300;
										}
										$_301 = TRUE; break;
									}
									while(0);
									if( $_301 === TRUE ) { $_303 = TRUE; break; }
									$result = $res_292;
									$this->pos = $pos_292;
									$_303 = FALSE; break;
								}
								while(0);
								if( $_303 === TRUE ) { $_305 = TRUE; break; }
								$result = $res_285;
								$this->pos = $pos_285;
								$_305 = FALSE; break;
							}
							while(0);
							if( $_305 === TRUE ) { $_307 = TRUE; break; }
							$result = $res_280;
							$this->pos = $pos_280;
							$_307 = FALSE; break;
						}
						while(0);
						if( $_307 === TRUE ) { $_309 = TRUE; break; }
						$result = $res_278;
						$this->pos = $pos_278;
						$_309 = FALSE; break;
					}
					while(0);
					if( $_309 === TRUE ) { $_311 = TRUE; break; }
					$result = $res_276;
					$this->pos = $pos_276;
					$_311 = FALSE; break;
				}
				while(0);
				if( $_311 === FALSE) { $_313 = FALSE; break; }
				$_313 = TRUE; break;
			}
			while(0);
			if( $_313 === FALSE) {
				$result = $res_314;
				$this->pos = $pos_314;
				unset( $res_314 );
				unset( $pos_314 );
				break;
			}
			$count += 1;
		}
		if ($count > 0) { return $this->finalise($result); }
		else { return FALSE; }
	}



}
?>