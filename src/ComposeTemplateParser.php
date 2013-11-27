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


	/* ComposedArgumentInjection: BracketInjection | SimpleInjection | If */
	protected $match_ComposedArgumentInjection_typestack = array('ComposedArgumentInjection');
	function match_ComposedArgumentInjection ($stack = array()) {
		$matchrule = "ComposedArgumentInjection"; $result = $this->construct($matchrule, $matchrule, null);
		$_138 = NULL;
		do {
			$res_131 = $result;
			$pos_131 = $this->pos;
			$matcher = 'match_'.'BracketInjection'; $key = $matcher; $pos = $this->pos;
			$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
			if ($subres !== FALSE) {
				$this->store( $result, $subres );
				$_138 = TRUE; break;
			}
			$result = $res_131;
			$this->pos = $pos_131;
			$_136 = NULL;
			do {
				$res_133 = $result;
				$pos_133 = $this->pos;
				$matcher = 'match_'.'SimpleInjection'; $key = $matcher; $pos = $this->pos;
				$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
				if ($subres !== FALSE) {
					$this->store( $result, $subres );
					$_136 = TRUE; break;
				}
				$result = $res_133;
				$this->pos = $pos_133;
				$matcher = 'match_'.'If'; $key = $matcher; $pos = $this->pos;
				$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
				if ($subres !== FALSE) {
					$this->store( $result, $subres );
					$_136 = TRUE; break;
				}
				$result = $res_133;
				$this->pos = $pos_133;
				$_136 = FALSE; break;
			}
			while(0);
			if( $_136 === TRUE ) { $_138 = TRUE; break; }
			$result = $res_131;
			$this->pos = $pos_131;
			$_138 = FALSE; break;
		}
		while(0);
		if( $_138 === TRUE ) { return $this->finalise($result); }
		if( $_138 === FALSE) { return FALSE; }
	}


	/* ComposedArgumentQuotedString: q:/['"]/ ( ComposedArgumentInjection | ComposedArgumentString )* '$q' */
	protected $match_ComposedArgumentQuotedString_typestack = array('ComposedArgumentQuotedString');
	function match_ComposedArgumentQuotedString ($stack = array()) {
		$matchrule = "ComposedArgumentQuotedString"; $result = $this->construct($matchrule, $matchrule, null);
		$_149 = NULL;
		do {
			$stack[] = $result; $result = $this->construct( $matchrule, "q" ); 
			if (( $subres = $this->rx( '/[\'"]/' ) ) !== FALSE) {
				$result["text"] .= $subres;
				$subres = $result; $result = array_pop($stack);
				$this->store( $result, $subres, 'q' );
			}
			else {
				$result = array_pop($stack);
				$_149 = FALSE; break;
			}
			while (true) {
				$res_147 = $result;
				$pos_147 = $this->pos;
				$_146 = NULL;
				do {
					$_144 = NULL;
					do {
						$res_141 = $result;
						$pos_141 = $this->pos;
						$matcher = 'match_'.'ComposedArgumentInjection'; $key = $matcher; $pos = $this->pos;
						$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
						if ($subres !== FALSE) {
							$this->store( $result, $subres );
							$_144 = TRUE; break;
						}
						$result = $res_141;
						$this->pos = $pos_141;
						$matcher = 'match_'.'ComposedArgumentString'; $key = $matcher; $pos = $this->pos;
						$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
						if ($subres !== FALSE) {
							$this->store( $result, $subres );
							$_144 = TRUE; break;
						}
						$result = $res_141;
						$this->pos = $pos_141;
						$_144 = FALSE; break;
					}
					while(0);
					if( $_144 === FALSE) { $_146 = FALSE; break; }
					$_146 = TRUE; break;
				}
				while(0);
				if( $_146 === FALSE) {
					$result = $res_147;
					$this->pos = $pos_147;
					unset( $res_147 );
					unset( $pos_147 );
					break;
				}
			}
			if (( $subres = $this->literal( ''.$this->expression($result, $stack, 'q').'' ) ) !== FALSE) { $result["text"] .= $subres; }
			else { $_149 = FALSE; break; }
			$_149 = TRUE; break;
		}
		while(0);
		if( $_149 === TRUE ) { return $this->finalise($result); }
		if( $_149 === FALSE) { return FALSE; }
	}


	/* Argument:
	:DollarMarkedLookup |
	:QuotedString |
	:Lookup !(< FreeString)|
	:FreeString */
	protected $match_Argument_typestack = array('Argument');
	function match_Argument ($stack = array()) {
		$matchrule = "Argument"; $result = $this->construct($matchrule, $matchrule, null);
		$_168 = NULL;
		do {
			$res_151 = $result;
			$pos_151 = $this->pos;
			$matcher = 'match_'.'DollarMarkedLookup'; $key = $matcher; $pos = $this->pos;
			$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
			if ($subres !== FALSE) {
				$this->store( $result, $subres, "DollarMarkedLookup" );
				$_168 = TRUE; break;
			}
			$result = $res_151;
			$this->pos = $pos_151;
			$_166 = NULL;
			do {
				$res_153 = $result;
				$pos_153 = $this->pos;
				$matcher = 'match_'.'QuotedString'; $key = $matcher; $pos = $this->pos;
				$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
				if ($subres !== FALSE) {
					$this->store( $result, $subres, "QuotedString" );
					$_166 = TRUE; break;
				}
				$result = $res_153;
				$this->pos = $pos_153;
				$_164 = NULL;
				do {
					$res_155 = $result;
					$pos_155 = $this->pos;
					$_161 = NULL;
					do {
						$matcher = 'match_'.'Lookup'; $key = $matcher; $pos = $this->pos;
						$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
						if ($subres !== FALSE) {
							$this->store( $result, $subres, "Lookup" );
						}
						else { $_161 = FALSE; break; }
						$res_160 = $result;
						$pos_160 = $this->pos;
						$_159 = NULL;
						do {
							if (( $subres = $this->whitespace(  ) ) !== FALSE) { $result["text"] .= $subres; }
							$matcher = 'match_'.'FreeString'; $key = $matcher; $pos = $this->pos;
							$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
							if ($subres !== FALSE) {
								$this->store( $result, $subres );
							}
							else { $_159 = FALSE; break; }
							$_159 = TRUE; break;
						}
						while(0);
						if( $_159 === TRUE ) {
							$result = $res_160;
							$this->pos = $pos_160;
							$_161 = FALSE; break;
						}
						if( $_159 === FALSE) {
							$result = $res_160;
							$this->pos = $pos_160;
						}
						$_161 = TRUE; break;
					}
					while(0);
					if( $_161 === TRUE ) { $_164 = TRUE; break; }
					$result = $res_155;
					$this->pos = $pos_155;
					$matcher = 'match_'.'FreeString'; $key = $matcher; $pos = $this->pos;
					$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
					if ($subres !== FALSE) {
						$this->store( $result, $subres, "FreeString" );
						$_164 = TRUE; break;
					}
					$result = $res_155;
					$this->pos = $pos_155;
					$_164 = FALSE; break;
				}
				while(0);
				if( $_164 === TRUE ) { $_166 = TRUE; break; }
				$result = $res_153;
				$this->pos = $pos_153;
				$_166 = FALSE; break;
			}
			while(0);
			if( $_166 === TRUE ) { $_168 = TRUE; break; }
			$result = $res_151;
			$this->pos = $pos_151;
			$_168 = FALSE; break;
		}
		while(0);
		if( $_168 === TRUE ) { return $this->finalise($result); }
		if( $_168 === FALSE) { return FALSE; }
	}


	/* ComposedArgument:
	'{' < :IfArgument > '}' |
	:DollarMarkedLookup |
	:ComposedArgumentQuotedString |
	:Lookup !(< FreeString)|
	:FreeString */
	protected $match_ComposedArgument_typestack = array('ComposedArgument','Argument');
	function match_ComposedArgument ($stack = array()) {
		$matchrule = "ComposedArgument"; $result = $this->construct($matchrule, $matchrule, null);
		$_197 = NULL;
		do {
			$res_170 = $result;
			$pos_170 = $this->pos;
			$_176 = NULL;
			do {
				if (substr($this->string,$this->pos,1) == '{') {
					$this->pos += 1;
					$result["text"] .= '{';
				}
				else { $_176 = FALSE; break; }
				if (( $subres = $this->whitespace(  ) ) !== FALSE) { $result["text"] .= $subres; }
				$matcher = 'match_'.'IfArgument'; $key = $matcher; $pos = $this->pos;
				$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
				if ($subres !== FALSE) {
					$this->store( $result, $subres, "IfArgument" );
				}
				else { $_176 = FALSE; break; }
				if (( $subres = $this->whitespace(  ) ) !== FALSE) { $result["text"] .= $subres; }
				if (substr($this->string,$this->pos,1) == '}') {
					$this->pos += 1;
					$result["text"] .= '}';
				}
				else { $_176 = FALSE; break; }
				$_176 = TRUE; break;
			}
			while(0);
			if( $_176 === TRUE ) { $_197 = TRUE; break; }
			$result = $res_170;
			$this->pos = $pos_170;
			$_195 = NULL;
			do {
				$res_178 = $result;
				$pos_178 = $this->pos;
				$matcher = 'match_'.'DollarMarkedLookup'; $key = $matcher; $pos = $this->pos;
				$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
				if ($subres !== FALSE) {
					$this->store( $result, $subres, "DollarMarkedLookup" );
					$_195 = TRUE; break;
				}
				$result = $res_178;
				$this->pos = $pos_178;
				$_193 = NULL;
				do {
					$res_180 = $result;
					$pos_180 = $this->pos;
					$matcher = 'match_'.'ComposedArgumentQuotedString'; $key = $matcher; $pos = $this->pos;
					$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
					if ($subres !== FALSE) {
						$this->store( $result, $subres, "ComposedArgumentQuotedString" );
						$_193 = TRUE; break;
					}
					$result = $res_180;
					$this->pos = $pos_180;
					$_191 = NULL;
					do {
						$res_182 = $result;
						$pos_182 = $this->pos;
						$_188 = NULL;
						do {
							$matcher = 'match_'.'Lookup'; $key = $matcher; $pos = $this->pos;
							$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
							if ($subres !== FALSE) {
								$this->store( $result, $subres, "Lookup" );
							}
							else { $_188 = FALSE; break; }
							$res_187 = $result;
							$pos_187 = $this->pos;
							$_186 = NULL;
							do {
								if (( $subres = $this->whitespace(  ) ) !== FALSE) { $result["text"] .= $subres; }
								$matcher = 'match_'.'FreeString'; $key = $matcher; $pos = $this->pos;
								$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
								if ($subres !== FALSE) {
									$this->store( $result, $subres );
								}
								else { $_186 = FALSE; break; }
								$_186 = TRUE; break;
							}
							while(0);
							if( $_186 === TRUE ) {
								$result = $res_187;
								$this->pos = $pos_187;
								$_188 = FALSE; break;
							}
							if( $_186 === FALSE) {
								$result = $res_187;
								$this->pos = $pos_187;
							}
							$_188 = TRUE; break;
						}
						while(0);
						if( $_188 === TRUE ) { $_191 = TRUE; break; }
						$result = $res_182;
						$this->pos = $pos_182;
						$matcher = 'match_'.'FreeString'; $key = $matcher; $pos = $this->pos;
						$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
						if ($subres !== FALSE) {
							$this->store( $result, $subres, "FreeString" );
							$_191 = TRUE; break;
						}
						$result = $res_182;
						$this->pos = $pos_182;
						$_191 = FALSE; break;
					}
					while(0);
					if( $_191 === TRUE ) { $_193 = TRUE; break; }
					$result = $res_180;
					$this->pos = $pos_180;
					$_193 = FALSE; break;
				}
				while(0);
				if( $_193 === TRUE ) { $_195 = TRUE; break; }
				$result = $res_178;
				$this->pos = $pos_178;
				$_195 = FALSE; break;
			}
			while(0);
			if( $_195 === TRUE ) { $_197 = TRUE; break; }
			$result = $res_170;
			$this->pos = $pos_170;
			$_197 = FALSE; break;
		}
		while(0);
		if( $_197 === TRUE ) { return $this->finalise($result); }
		if( $_197 === FALSE) { return FALSE; }
	}



	function ComposedArgumentInjection_STR(&$res, $sub) {
		$res['php'] = '\'.'.str_replace('$$FINAL', 'XML_val', $sub['Lookup']['php']).'.\'';
	}

	function ComposedArgumentInjection_If(&$res, $sub) {
		$res['php'] .= <<<PHP
' . call_user_func(
	function () use (\$scope) {
		\$val = '';
		{$sub['php']}
		return \$val;
	}
) . '
PHP;
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

	function ComposedArgument_IfArgument(&$res, $sub) {
		$res['ArgumentMode'] = 'string';
		$res['php'] = $sub['php'];
	}

	/* ComposeWord: / [A-Za-z_] [A-Za-z0-9_\-]* / */
	protected $match_ComposeWord_typestack = array('ComposeWord');
	function match_ComposeWord ($stack = array()) {
		$matchrule = "ComposeWord"; $result = $this->construct($matchrule, $matchrule, null);
		if (( $subres = $this->rx( '/ [A-Za-z_] [A-Za-z0-9_\-]* /' ) ) !== FALSE) {
			$result["text"] .= $subres;
			return $this->finalise($result);
		}
		else { return FALSE; }
	}


	/* NamedArgument: Name:Word "=" Value:Argument */
	protected $match_NamedArgument_typestack = array('NamedArgument');
	function match_NamedArgument ($stack = array()) {
		$matchrule = "NamedArgument"; $result = $this->construct($matchrule, $matchrule, null);
		$_203 = NULL;
		do {
			$matcher = 'match_'.'Word'; $key = $matcher; $pos = $this->pos;
			$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
			if ($subres !== FALSE) {
				$this->store( $result, $subres, "Name" );
			}
			else { $_203 = FALSE; break; }
			if (substr($this->string,$this->pos,1) == '=') {
				$this->pos += 1;
				$result["text"] .= '=';
			}
			else { $_203 = FALSE; break; }
			$matcher = 'match_'.'Argument'; $key = $matcher; $pos = $this->pos;
			$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
			if ($subres !== FALSE) {
				$this->store( $result, $subres, "Value" );
			}
			else { $_203 = FALSE; break; }
			$_203 = TRUE; break;
		}
		while(0);
		if( $_203 === TRUE ) { return $this->finalise($result); }
		if( $_203 === FALSE) { return FALSE; }
	}


	/* ComposedNamedArgument: Name:ComposeWord "=" Value:ComposedArgument */
	protected $match_ComposedNamedArgument_typestack = array('ComposedNamedArgument','NamedArgument');
	function match_ComposedNamedArgument ($stack = array()) {
		$matchrule = "ComposedNamedArgument"; $result = $this->construct($matchrule, $matchrule, null);
		$_208 = NULL;
		do {
			$matcher = 'match_'.'ComposeWord'; $key = $matcher; $pos = $this->pos;
			$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
			if ($subres !== FALSE) {
				$this->store( $result, $subres, "Name" );
			}
			else { $_208 = FALSE; break; }
			if (substr($this->string,$this->pos,1) == '=') {
				$this->pos += 1;
				$result["text"] .= '=';
			}
			else { $_208 = FALSE; break; }
			$matcher = 'match_'.'ComposedArgument'; $key = $matcher; $pos = $this->pos;
			$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
			if ($subres !== FALSE) {
				$this->store( $result, $subres, "Value" );
			}
			else { $_208 = FALSE; break; }
			$_208 = TRUE; break;
		}
		while(0);
		if( $_208 === TRUE ) { return $this->finalise($result); }
		if( $_208 === FALSE) { return FALSE; }
	}




	/* Compose: '<:' Template:Word < (ComposedNamedArgument ( " " ComposedNamedArgument )*)? > '>' Composed:$TemplateMatcher?
	'</:' '$Template' '>' */
	protected $match_Compose_typestack = array('Compose');
	function match_Compose ($stack = array()) {
		$matchrule = "Compose"; $result = $this->construct($matchrule, $matchrule, null);
		$_226 = NULL;
		do {
			if (( $subres = $this->literal( '<:' ) ) !== FALSE) { $result["text"] .= $subres; }
			else { $_226 = FALSE; break; }
			$matcher = 'match_'.'Word'; $key = $matcher; $pos = $this->pos;
			$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
			if ($subres !== FALSE) {
				$this->store( $result, $subres, "Template" );
			}
			else { $_226 = FALSE; break; }
			if (( $subres = $this->whitespace(  ) ) !== FALSE) { $result["text"] .= $subres; }
			$res_219 = $result;
			$pos_219 = $this->pos;
			$_218 = NULL;
			do {
				$matcher = 'match_'.'ComposedNamedArgument'; $key = $matcher; $pos = $this->pos;
				$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
				if ($subres !== FALSE) { $this->store( $result, $subres ); }
				else { $_218 = FALSE; break; }
				while (true) {
					$res_217 = $result;
					$pos_217 = $this->pos;
					$_216 = NULL;
					do {
						if (substr($this->string,$this->pos,1) == ' ') {
							$this->pos += 1;
							$result["text"] .= ' ';
						}
						else { $_216 = FALSE; break; }
						$matcher = 'match_'.'ComposedNamedArgument'; $key = $matcher; $pos = $this->pos;
						$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
						if ($subres !== FALSE) {
							$this->store( $result, $subres );
						}
						else { $_216 = FALSE; break; }
						$_216 = TRUE; break;
					}
					while(0);
					if( $_216 === FALSE) {
						$result = $res_217;
						$this->pos = $pos_217;
						unset( $res_217 );
						unset( $pos_217 );
						break;
					}
				}
				$_218 = TRUE; break;
			}
			while(0);
			if( $_218 === FALSE) {
				$result = $res_219;
				$this->pos = $pos_219;
				unset( $res_219 );
				unset( $pos_219 );
			}
			if (( $subres = $this->whitespace(  ) ) !== FALSE) { $result["text"] .= $subres; }
			if (substr($this->string,$this->pos,1) == '>') {
				$this->pos += 1;
				$result["text"] .= '>';
			}
			else { $_226 = FALSE; break; }
			$res_222 = $result;
			$pos_222 = $this->pos;
			$matcher = 'match_'.$this->expression($result, $stack, 'TemplateMatcher'); $key = $matcher; $pos = $this->pos;
			$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
			if ($subres !== FALSE) {
				$this->store( $result, $subres, "Composed" );
			}
			else {
				$result = $res_222;
				$this->pos = $pos_222;
				unset( $res_222 );
				unset( $pos_222 );
			}
			if (( $subres = $this->literal( '</:' ) ) !== FALSE) { $result["text"] .= $subres; }
			else { $_226 = FALSE; break; }
			if (( $subres = $this->literal( ''.$this->expression($result, $stack, 'Template').'' ) ) !== FALSE) { $result["text"] .= $subres; }
			else { $_226 = FALSE; break; }
			if (substr($this->string,$this->pos,1) == '>') {
				$this->pos += 1;
				$result["text"] .= '>';
			}
			else { $_226 = FALSE; break; }
			$_226 = TRUE; break;
		}
		while(0);
		if( $_226 === TRUE ) { return $this->finalise($result); }
		if( $_226 === FALSE) { return FALSE; }
	}


	/* ComposeShort: '<:' Template:Word < (ComposedNamedArgument ( " " ComposedNamedArgument )*)? > '/>' */
	protected $match_ComposeShort_typestack = array('ComposeShort','Compose');
	function match_ComposeShort ($stack = array()) {
		$matchrule = "ComposeShort"; $result = $this->construct($matchrule, $matchrule, null);
		$_240 = NULL;
		do {
			if (( $subres = $this->literal( '<:' ) ) !== FALSE) { $result["text"] .= $subres; }
			else { $_240 = FALSE; break; }
			$matcher = 'match_'.'Word'; $key = $matcher; $pos = $this->pos;
			$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
			if ($subres !== FALSE) {
				$this->store( $result, $subres, "Template" );
			}
			else { $_240 = FALSE; break; }
			if (( $subres = $this->whitespace(  ) ) !== FALSE) { $result["text"] .= $subres; }
			$res_237 = $result;
			$pos_237 = $this->pos;
			$_236 = NULL;
			do {
				$matcher = 'match_'.'ComposedNamedArgument'; $key = $matcher; $pos = $this->pos;
				$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
				if ($subres !== FALSE) { $this->store( $result, $subres ); }
				else { $_236 = FALSE; break; }
				while (true) {
					$res_235 = $result;
					$pos_235 = $this->pos;
					$_234 = NULL;
					do {
						if (substr($this->string,$this->pos,1) == ' ') {
							$this->pos += 1;
							$result["text"] .= ' ';
						}
						else { $_234 = FALSE; break; }
						$matcher = 'match_'.'ComposedNamedArgument'; $key = $matcher; $pos = $this->pos;
						$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
						if ($subres !== FALSE) {
							$this->store( $result, $subres );
						}
						else { $_234 = FALSE; break; }
						$_234 = TRUE; break;
					}
					while(0);
					if( $_234 === FALSE) {
						$result = $res_235;
						$this->pos = $pos_235;
						unset( $res_235 );
						unset( $pos_235 );
						break;
					}
				}
				$_236 = TRUE; break;
			}
			while(0);
			if( $_236 === FALSE) {
				$result = $res_237;
				$this->pos = $pos_237;
				unset( $res_237 );
				unset( $pos_237 );
			}
			if (( $subres = $this->whitespace(  ) ) !== FALSE) { $result["text"] .= $subres; }
			if (( $subres = $this->literal( '/>' ) ) !== FALSE) { $result["text"] .= $subres; }
			else { $_240 = FALSE; break; }
			$_240 = TRUE; break;
		}
		while(0);
		if( $_240 === TRUE ) { return $this->finalise($result); }
		if( $_240 === FALSE) { return FALSE; }
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
		$_247 = NULL;
		do {
			if (( $subres = $this->literal( '<%' ) ) !== FALSE) { $result["text"] .= $subres; }
			else { $_247 = FALSE; break; }
			if (( $subres = $this->whitespace(  ) ) !== FALSE) { $result["text"] .= $subres; }
			if (( $subres = $this->literal( 'composed' ) ) !== FALSE) { $result["text"] .= $subres; }
			else { $_247 = FALSE; break; }
			if (( $subres = $this->whitespace(  ) ) !== FALSE) { $result["text"] .= $subres; }
			if (( $subres = $this->literal( '%>' ) ) !== FALSE) { $result["text"] .= $subres; }
			else { $_247 = FALSE; break; }
			$_247 = TRUE; break;
		}
		while(0);
		if( $_247 === TRUE ) { return $this->finalise($result); }
		if( $_247 === FALSE) { return FALSE; }
	}




	function Composed__finalise(&$res){
		$res['php'] = "\$val .= (\$composed = \$scope->locally()->obj('Composed', null, true)->getItem()) ? \$composed() : '';";
	}

	/* NotBlockTag: "end_" | (("if" | "else_if" | "else" | "require" | "cached" | "uncached" | "cacheblock" | "include" | "composed")]) */
	protected $match_NotBlockTag_typestack = array('NotBlockTag');
	function match_NotBlockTag ($stack = array()) {
		$matchrule = "NotBlockTag"; $result = $this->construct($matchrule, $matchrule, null);
		$_289 = NULL;
		do {
			$res_249 = $result;
			$pos_249 = $this->pos;
			if (( $subres = $this->literal( 'end_' ) ) !== FALSE) {
				$result["text"] .= $subres;
				$_289 = TRUE; break;
			}
			$result = $res_249;
			$this->pos = $pos_249;
			$_287 = NULL;
			do {
				$_284 = NULL;
				do {
					$_282 = NULL;
					do {
						$res_251 = $result;
						$pos_251 = $this->pos;
						if (( $subres = $this->literal( 'if' ) ) !== FALSE) {
							$result["text"] .= $subres;
							$_282 = TRUE; break;
						}
						$result = $res_251;
						$this->pos = $pos_251;
						$_280 = NULL;
						do {
							$res_253 = $result;
							$pos_253 = $this->pos;
							if (( $subres = $this->literal( 'else_if' ) ) !== FALSE) {
								$result["text"] .= $subres;
								$_280 = TRUE; break;
							}
							$result = $res_253;
							$this->pos = $pos_253;
							$_278 = NULL;
							do {
								$res_255 = $result;
								$pos_255 = $this->pos;
								if (( $subres = $this->literal( 'else' ) ) !== FALSE) {
									$result["text"] .= $subres;
									$_278 = TRUE; break;
								}
								$result = $res_255;
								$this->pos = $pos_255;
								$_276 = NULL;
								do {
									$res_257 = $result;
									$pos_257 = $this->pos;
									if (( $subres = $this->literal( 'require' ) ) !== FALSE) {
										$result["text"] .= $subres;
										$_276 = TRUE; break;
									}
									$result = $res_257;
									$this->pos = $pos_257;
									$_274 = NULL;
									do {
										$res_259 = $result;
										$pos_259 = $this->pos;
										if (( $subres = $this->literal( 'cached' ) ) !== FALSE) {
											$result["text"] .= $subres;
											$_274 = TRUE; break;
										}
										$result = $res_259;
										$this->pos = $pos_259;
										$_272 = NULL;
										do {
											$res_261 = $result;
											$pos_261 = $this->pos;
											if (( $subres = $this->literal( 'uncached' ) ) !== FALSE) {
												$result["text"] .= $subres;
												$_272 = TRUE; break;
											}
											$result = $res_261;
											$this->pos = $pos_261;
											$_270 = NULL;
											do {
												$res_263 = $result;
												$pos_263 = $this->pos;
												if (( $subres = $this->literal( 'cacheblock' ) ) !== FALSE) {
													$result["text"] .= $subres;
													$_270 = TRUE; break;
												}
												$result = $res_263;
												$this->pos = $pos_263;
												$_268 = NULL;
												do {
													$res_265 = $result;
													$pos_265 = $this->pos;
													if (( $subres = $this->literal( 'include' ) ) !== FALSE) {
														$result["text"] .= $subres;
														$_268 = TRUE; break;
													}
													$result = $res_265;
													$this->pos = $pos_265;
													if (( $subres = $this->literal( 'composed' ) ) !== FALSE) {
														$result["text"] .= $subres;
														$_268 = TRUE; break;
													}
													$result = $res_265;
													$this->pos = $pos_265;
													$_268 = FALSE; break;
												}
												while(0);
												if( $_268 === TRUE ) { $_270 = TRUE; break; }
												$result = $res_263;
												$this->pos = $pos_263;
												$_270 = FALSE; break;
											}
											while(0);
											if( $_270 === TRUE ) { $_272 = TRUE; break; }
											$result = $res_261;
											$this->pos = $pos_261;
											$_272 = FALSE; break;
										}
										while(0);
										if( $_272 === TRUE ) { $_274 = TRUE; break; }
										$result = $res_259;
										$this->pos = $pos_259;
										$_274 = FALSE; break;
									}
									while(0);
									if( $_274 === TRUE ) { $_276 = TRUE; break; }
									$result = $res_257;
									$this->pos = $pos_257;
									$_276 = FALSE; break;
								}
								while(0);
								if( $_276 === TRUE ) { $_278 = TRUE; break; }
								$result = $res_255;
								$this->pos = $pos_255;
								$_278 = FALSE; break;
							}
							while(0);
							if( $_278 === TRUE ) { $_280 = TRUE; break; }
							$result = $res_253;
							$this->pos = $pos_253;
							$_280 = FALSE; break;
						}
						while(0);
						if( $_280 === TRUE ) { $_282 = TRUE; break; }
						$result = $res_251;
						$this->pos = $pos_251;
						$_282 = FALSE; break;
					}
					while(0);
					if( $_282 === FALSE) { $_284 = FALSE; break; }
					$_284 = TRUE; break;
				}
				while(0);
				if( $_284 === FALSE) { $_287 = FALSE; break; }
				if (( $subres = $this->whitespace(  ) ) !== FALSE) { $result["text"] .= $subres; }
				else { $_287 = FALSE; break; }
				$_287 = TRUE; break;
			}
			while(0);
			if( $_287 === TRUE ) { $_289 = TRUE; break; }
			$result = $res_249;
			$this->pos = $pos_249;
			$_289 = FALSE; break;
		}
		while(0);
		if( $_289 === TRUE ) { return $this->finalise($result); }
		if( $_289 === FALSE) { return FALSE; }
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
			$res_329 = $result;
			$pos_329 = $this->pos;
			$_328 = NULL;
			do {
				$_326 = NULL;
				do {
					$res_291 = $result;
					$pos_291 = $this->pos;
					if (( $subres = $this->rx( '/ [^<${\\\\]+ /' ) ) !== FALSE) {
						$result["text"] .= $subres;
						$_326 = TRUE; break;
					}
					$result = $res_291;
					$this->pos = $pos_291;
					$_324 = NULL;
					do {
						$res_293 = $result;
						$pos_293 = $this->pos;
						if (( $subres = $this->rx( '/ (\\\\.) /' ) ) !== FALSE) {
							$result["text"] .= $subres;
							$_324 = TRUE; break;
						}
						$result = $res_293;
						$this->pos = $pos_293;
						$_322 = NULL;
						do {
							$res_295 = $result;
							$pos_295 = $this->pos;
							$_298 = NULL;
							do {
								if (substr($this->string,$this->pos,1) == '<') {
									$this->pos += 1;
									$result["text"] .= '<';
								}
								else { $_298 = FALSE; break; }
								$res_297 = $result;
								$pos_297 = $this->pos;
								if (( $subres = $this->rx( '/ % | : | \/: /' ) ) !== FALSE) {
									$result["text"] .= $subres;
									$result = $res_297;
									$this->pos = $pos_297;
									$_298 = FALSE; break;
								}
								else {
									$result = $res_297;
									$this->pos = $pos_297;
								}
								$_298 = TRUE; break;
							}
							while(0);
							if( $_298 === TRUE ) { $_322 = TRUE; break; }
							$result = $res_295;
							$this->pos = $pos_295;
							$_320 = NULL;
							do {
								$res_300 = $result;
								$pos_300 = $this->pos;
								$_305 = NULL;
								do {
									if (substr($this->string,$this->pos,1) == '$') {
										$this->pos += 1;
										$result["text"] .= '$';
									}
									else { $_305 = FALSE; break; }
									$res_304 = $result;
									$pos_304 = $this->pos;
									$_303 = NULL;
									do {
										if (( $subres = $this->rx( '/[A-Za-z_]/' ) ) !== FALSE) { $result["text"] .= $subres; }
										else { $_303 = FALSE; break; }
										$_303 = TRUE; break;
									}
									while(0);
									if( $_303 === TRUE ) {
										$result = $res_304;
										$this->pos = $pos_304;
										$_305 = FALSE; break;
									}
									if( $_303 === FALSE) {
										$result = $res_304;
										$this->pos = $pos_304;
									}
									$_305 = TRUE; break;
								}
								while(0);
								if( $_305 === TRUE ) { $_320 = TRUE; break; }
								$result = $res_300;
								$this->pos = $pos_300;
								$_318 = NULL;
								do {
									$res_307 = $result;
									$pos_307 = $this->pos;
									$_310 = NULL;
									do {
										if (substr($this->string,$this->pos,1) == '{') {
											$this->pos += 1;
											$result["text"] .= '{';
										}
										else { $_310 = FALSE; break; }
										$res_309 = $result;
										$pos_309 = $this->pos;
										if (substr($this->string,$this->pos,1) == '$') {
											$this->pos += 1;
											$result["text"] .= '$';
											$result = $res_309;
											$this->pos = $pos_309;
											$_310 = FALSE; break;
										}
										else {
											$result = $res_309;
											$this->pos = $pos_309;
										}
										$_310 = TRUE; break;
									}
									while(0);
									if( $_310 === TRUE ) { $_318 = TRUE; break; }
									$result = $res_307;
									$this->pos = $pos_307;
									$_316 = NULL;
									do {
										if (( $subres = $this->literal( '{$' ) ) !== FALSE) { $result["text"] .= $subres; }
										else { $_316 = FALSE; break; }
										$res_315 = $result;
										$pos_315 = $this->pos;
										$_314 = NULL;
										do {
											if (( $subres = $this->rx( '/[A-Za-z_]/' ) ) !== FALSE) { $result["text"] .= $subres; }
											else { $_314 = FALSE; break; }
											$_314 = TRUE; break;
										}
										while(0);
										if( $_314 === TRUE ) {
											$result = $res_315;
											$this->pos = $pos_315;
											$_316 = FALSE; break;
										}
										if( $_314 === FALSE) {
											$result = $res_315;
											$this->pos = $pos_315;
										}
										$_316 = TRUE; break;
									}
									while(0);
									if( $_316 === TRUE ) { $_318 = TRUE; break; }
									$result = $res_307;
									$this->pos = $pos_307;
									$_318 = FALSE; break;
								}
								while(0);
								if( $_318 === TRUE ) { $_320 = TRUE; break; }
								$result = $res_300;
								$this->pos = $pos_300;
								$_320 = FALSE; break;
							}
							while(0);
							if( $_320 === TRUE ) { $_322 = TRUE; break; }
							$result = $res_295;
							$this->pos = $pos_295;
							$_322 = FALSE; break;
						}
						while(0);
						if( $_322 === TRUE ) { $_324 = TRUE; break; }
						$result = $res_293;
						$this->pos = $pos_293;
						$_324 = FALSE; break;
					}
					while(0);
					if( $_324 === TRUE ) { $_326 = TRUE; break; }
					$result = $res_291;
					$this->pos = $pos_291;
					$_326 = FALSE; break;
				}
				while(0);
				if( $_326 === FALSE) { $_328 = FALSE; break; }
				$_328 = TRUE; break;
			}
			while(0);
			if( $_328 === FALSE) {
				$result = $res_329;
				$this->pos = $pos_329;
				unset( $res_329 );
				unset( $pos_329 );
				break;
			}
			$count += 1;
		}
		if ($count > 0) { return $this->finalise($result); }
		else { return FALSE; }
	}



}
?>