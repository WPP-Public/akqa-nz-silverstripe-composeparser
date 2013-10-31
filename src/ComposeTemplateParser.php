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
	:DollarMarkedLookup |
	:ComposedArgumentQuotedString |
	:Lookup !(< FreeString)|
	:FreeString */
	protected $match_ComposedArgument_typestack = array('ComposedArgument','Argument');
	function match_ComposedArgument ($stack = array()) {
		$matchrule = "ComposedArgument"; $result = $this->construct($matchrule, $matchrule, null);
		$_187 = NULL;
		do {
			$res_170 = $result;
			$pos_170 = $this->pos;
			$matcher = 'match_'.'DollarMarkedLookup'; $key = $matcher; $pos = $this->pos;
			$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
			if ($subres !== FALSE) {
				$this->store( $result, $subres, "DollarMarkedLookup" );
				$_187 = TRUE; break;
			}
			$result = $res_170;
			$this->pos = $pos_170;
			$_185 = NULL;
			do {
				$res_172 = $result;
				$pos_172 = $this->pos;
				$matcher = 'match_'.'ComposedArgumentQuotedString'; $key = $matcher; $pos = $this->pos;
				$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
				if ($subres !== FALSE) {
					$this->store( $result, $subres, "ComposedArgumentQuotedString" );
					$_185 = TRUE; break;
				}
				$result = $res_172;
				$this->pos = $pos_172;
				$_183 = NULL;
				do {
					$res_174 = $result;
					$pos_174 = $this->pos;
					$_180 = NULL;
					do {
						$matcher = 'match_'.'Lookup'; $key = $matcher; $pos = $this->pos;
						$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
						if ($subres !== FALSE) {
							$this->store( $result, $subres, "Lookup" );
						}
						else { $_180 = FALSE; break; }
						$res_179 = $result;
						$pos_179 = $this->pos;
						$_178 = NULL;
						do {
							if (( $subres = $this->whitespace(  ) ) !== FALSE) { $result["text"] .= $subres; }
							$matcher = 'match_'.'FreeString'; $key = $matcher; $pos = $this->pos;
							$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
							if ($subres !== FALSE) {
								$this->store( $result, $subres );
							}
							else { $_178 = FALSE; break; }
							$_178 = TRUE; break;
						}
						while(0);
						if( $_178 === TRUE ) {
							$result = $res_179;
							$this->pos = $pos_179;
							$_180 = FALSE; break;
						}
						if( $_178 === FALSE) {
							$result = $res_179;
							$this->pos = $pos_179;
						}
						$_180 = TRUE; break;
					}
					while(0);
					if( $_180 === TRUE ) { $_183 = TRUE; break; }
					$result = $res_174;
					$this->pos = $pos_174;
					$matcher = 'match_'.'FreeString'; $key = $matcher; $pos = $this->pos;
					$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
					if ($subres !== FALSE) {
						$this->store( $result, $subres, "FreeString" );
						$_183 = TRUE; break;
					}
					$result = $res_174;
					$this->pos = $pos_174;
					$_183 = FALSE; break;
				}
				while(0);
				if( $_183 === TRUE ) { $_185 = TRUE; break; }
				$result = $res_172;
				$this->pos = $pos_172;
				$_185 = FALSE; break;
			}
			while(0);
			if( $_185 === TRUE ) { $_187 = TRUE; break; }
			$result = $res_170;
			$this->pos = $pos_170;
			$_187 = FALSE; break;
		}
		while(0);
		if( $_187 === TRUE ) { return $this->finalise($result); }
		if( $_187 === FALSE) { return FALSE; }
	}



	function ComposedArgumentInjection_STR(&$res, $sub) {
//        var_dump(func_get_args());
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

	/* NamedArgument: Name:Word "=" Value:Argument */
	protected $match_NamedArgument_typestack = array('NamedArgument');
	function match_NamedArgument ($stack = array()) {
		$matchrule = "NamedArgument"; $result = $this->construct($matchrule, $matchrule, null);
		$_192 = NULL;
		do {
			$matcher = 'match_'.'Word'; $key = $matcher; $pos = $this->pos;
			$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
			if ($subres !== FALSE) {
				$this->store( $result, $subres, "Name" );
			}
			else { $_192 = FALSE; break; }
			if (substr($this->string,$this->pos,1) == '=') {
				$this->pos += 1;
				$result["text"] .= '=';
			}
			else { $_192 = FALSE; break; }
			$matcher = 'match_'.'Argument'; $key = $matcher; $pos = $this->pos;
			$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
			if ($subres !== FALSE) {
				$this->store( $result, $subres, "Value" );
			}
			else { $_192 = FALSE; break; }
			$_192 = TRUE; break;
		}
		while(0);
		if( $_192 === TRUE ) { return $this->finalise($result); }
		if( $_192 === FALSE) { return FALSE; }
	}


	/* ComposedNamedArgument: Name:Word "=" Value:ComposedArgument */
	protected $match_ComposedNamedArgument_typestack = array('ComposedNamedArgument','NamedArgument');
	function match_ComposedNamedArgument ($stack = array()) {
		$matchrule = "ComposedNamedArgument"; $result = $this->construct($matchrule, $matchrule, null);
		$_197 = NULL;
		do {
			$matcher = 'match_'.'Word'; $key = $matcher; $pos = $this->pos;
			$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
			if ($subres !== FALSE) {
				$this->store( $result, $subres, "Name" );
			}
			else { $_197 = FALSE; break; }
			if (substr($this->string,$this->pos,1) == '=') {
				$this->pos += 1;
				$result["text"] .= '=';
			}
			else { $_197 = FALSE; break; }
			$matcher = 'match_'.'ComposedArgument'; $key = $matcher; $pos = $this->pos;
			$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
			if ($subres !== FALSE) {
				$this->store( $result, $subres, "Value" );
			}
			else { $_197 = FALSE; break; }
			$_197 = TRUE; break;
		}
		while(0);
		if( $_197 === TRUE ) { return $this->finalise($result); }
		if( $_197 === FALSE) { return FALSE; }
	}




	/* Compose: '<:' Template:Word < (ComposedNamedArgument ( " " ComposedNamedArgument )*)? > '>' Composed:$TemplateMatcher?
	'</:' '$Template' '>' */
	protected $match_Compose_typestack = array('Compose');
	function match_Compose ($stack = array()) {
		$matchrule = "Compose"; $result = $this->construct($matchrule, $matchrule, null);
		$_215 = NULL;
		do {
			if (( $subres = $this->literal( '<:' ) ) !== FALSE) { $result["text"] .= $subres; }
			else { $_215 = FALSE; break; }
			$matcher = 'match_'.'Word'; $key = $matcher; $pos = $this->pos;
			$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
			if ($subres !== FALSE) {
				$this->store( $result, $subres, "Template" );
			}
			else { $_215 = FALSE; break; }
			if (( $subres = $this->whitespace(  ) ) !== FALSE) { $result["text"] .= $subres; }
			$res_208 = $result;
			$pos_208 = $this->pos;
			$_207 = NULL;
			do {
				$matcher = 'match_'.'ComposedNamedArgument'; $key = $matcher; $pos = $this->pos;
				$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
				if ($subres !== FALSE) { $this->store( $result, $subres ); }
				else { $_207 = FALSE; break; }
				while (true) {
					$res_206 = $result;
					$pos_206 = $this->pos;
					$_205 = NULL;
					do {
						if (substr($this->string,$this->pos,1) == ' ') {
							$this->pos += 1;
							$result["text"] .= ' ';
						}
						else { $_205 = FALSE; break; }
						$matcher = 'match_'.'ComposedNamedArgument'; $key = $matcher; $pos = $this->pos;
						$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
						if ($subres !== FALSE) {
							$this->store( $result, $subres );
						}
						else { $_205 = FALSE; break; }
						$_205 = TRUE; break;
					}
					while(0);
					if( $_205 === FALSE) {
						$result = $res_206;
						$this->pos = $pos_206;
						unset( $res_206 );
						unset( $pos_206 );
						break;
					}
				}
				$_207 = TRUE; break;
			}
			while(0);
			if( $_207 === FALSE) {
				$result = $res_208;
				$this->pos = $pos_208;
				unset( $res_208 );
				unset( $pos_208 );
			}
			if (( $subres = $this->whitespace(  ) ) !== FALSE) { $result["text"] .= $subres; }
			if (substr($this->string,$this->pos,1) == '>') {
				$this->pos += 1;
				$result["text"] .= '>';
			}
			else { $_215 = FALSE; break; }
			$res_211 = $result;
			$pos_211 = $this->pos;
			$matcher = 'match_'.$this->expression($result, $stack, 'TemplateMatcher'); $key = $matcher; $pos = $this->pos;
			$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
			if ($subres !== FALSE) {
				$this->store( $result, $subres, "Composed" );
			}
			else {
				$result = $res_211;
				$this->pos = $pos_211;
				unset( $res_211 );
				unset( $pos_211 );
			}
			if (( $subres = $this->literal( '</:' ) ) !== FALSE) { $result["text"] .= $subres; }
			else { $_215 = FALSE; break; }
			if (( $subres = $this->literal( ''.$this->expression($result, $stack, 'Template').'' ) ) !== FALSE) { $result["text"] .= $subres; }
			else { $_215 = FALSE; break; }
			if (substr($this->string,$this->pos,1) == '>') {
				$this->pos += 1;
				$result["text"] .= '>';
			}
			else { $_215 = FALSE; break; }
			$_215 = TRUE; break;
		}
		while(0);
		if( $_215 === TRUE ) { return $this->finalise($result); }
		if( $_215 === FALSE) { return FALSE; }
	}


	/* ComposeShort: '<:' Template:Word < (ComposedNamedArgument ( " " ComposedNamedArgument )*)? > '/>' */
	protected $match_ComposeShort_typestack = array('ComposeShort','Compose');
	function match_ComposeShort ($stack = array()) {
		$matchrule = "ComposeShort"; $result = $this->construct($matchrule, $matchrule, null);
		$_229 = NULL;
		do {
			if (( $subres = $this->literal( '<:' ) ) !== FALSE) { $result["text"] .= $subres; }
			else { $_229 = FALSE; break; }
			$matcher = 'match_'.'Word'; $key = $matcher; $pos = $this->pos;
			$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
			if ($subres !== FALSE) {
				$this->store( $result, $subres, "Template" );
			}
			else { $_229 = FALSE; break; }
			if (( $subres = $this->whitespace(  ) ) !== FALSE) { $result["text"] .= $subres; }
			$res_226 = $result;
			$pos_226 = $this->pos;
			$_225 = NULL;
			do {
				$matcher = 'match_'.'ComposedNamedArgument'; $key = $matcher; $pos = $this->pos;
				$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
				if ($subres !== FALSE) { $this->store( $result, $subres ); }
				else { $_225 = FALSE; break; }
				while (true) {
					$res_224 = $result;
					$pos_224 = $this->pos;
					$_223 = NULL;
					do {
						if (substr($this->string,$this->pos,1) == ' ') {
							$this->pos += 1;
							$result["text"] .= ' ';
						}
						else { $_223 = FALSE; break; }
						$matcher = 'match_'.'ComposedNamedArgument'; $key = $matcher; $pos = $this->pos;
						$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
						if ($subres !== FALSE) {
							$this->store( $result, $subres );
						}
						else { $_223 = FALSE; break; }
						$_223 = TRUE; break;
					}
					while(0);
					if( $_223 === FALSE) {
						$result = $res_224;
						$this->pos = $pos_224;
						unset( $res_224 );
						unset( $pos_224 );
						break;
					}
				}
				$_225 = TRUE; break;
			}
			while(0);
			if( $_225 === FALSE) {
				$result = $res_226;
				$this->pos = $pos_226;
				unset( $res_226 );
				unset( $pos_226 );
			}
			if (( $subres = $this->whitespace(  ) ) !== FALSE) { $result["text"] .= $subres; }
			if (( $subres = $this->literal( '/>' ) ) !== FALSE) { $result["text"] .= $subres; }
			else { $_229 = FALSE; break; }
			$_229 = TRUE; break;
		}
		while(0);
		if( $_229 === TRUE ) { return $this->finalise($result); }
		if( $_229 === FALSE) { return FALSE; }
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
		$_236 = NULL;
		do {
			if (( $subres = $this->literal( '<%' ) ) !== FALSE) { $result["text"] .= $subres; }
			else { $_236 = FALSE; break; }
			if (( $subres = $this->whitespace(  ) ) !== FALSE) { $result["text"] .= $subres; }
			if (( $subres = $this->literal( 'composed' ) ) !== FALSE) { $result["text"] .= $subres; }
			else { $_236 = FALSE; break; }
			if (( $subres = $this->whitespace(  ) ) !== FALSE) { $result["text"] .= $subres; }
			if (( $subres = $this->literal( '%>' ) ) !== FALSE) { $result["text"] .= $subres; }
			else { $_236 = FALSE; break; }
			$_236 = TRUE; break;
		}
		while(0);
		if( $_236 === TRUE ) { return $this->finalise($result); }
		if( $_236 === FALSE) { return FALSE; }
	}




	function Composed__finalise(&$res){
		$res['php'] = "\$val .= (\$composed = \$scope->locally()->obj('Composed', null, true)->getItem()) ? \$composed() : '';";
	}

	/* NotBlockTag: "end_" | (("if" | "else_if" | "else" | "require" | "cached" | "uncached" | "cacheblock" | "include" | "composed")]) */
	protected $match_NotBlockTag_typestack = array('NotBlockTag');
	function match_NotBlockTag ($stack = array()) {
		$matchrule = "NotBlockTag"; $result = $this->construct($matchrule, $matchrule, null);
		$_278 = NULL;
		do {
			$res_238 = $result;
			$pos_238 = $this->pos;
			if (( $subres = $this->literal( 'end_' ) ) !== FALSE) {
				$result["text"] .= $subres;
				$_278 = TRUE; break;
			}
			$result = $res_238;
			$this->pos = $pos_238;
			$_276 = NULL;
			do {
				$_273 = NULL;
				do {
					$_271 = NULL;
					do {
						$res_240 = $result;
						$pos_240 = $this->pos;
						if (( $subres = $this->literal( 'if' ) ) !== FALSE) {
							$result["text"] .= $subres;
							$_271 = TRUE; break;
						}
						$result = $res_240;
						$this->pos = $pos_240;
						$_269 = NULL;
						do {
							$res_242 = $result;
							$pos_242 = $this->pos;
							if (( $subres = $this->literal( 'else_if' ) ) !== FALSE) {
								$result["text"] .= $subres;
								$_269 = TRUE; break;
							}
							$result = $res_242;
							$this->pos = $pos_242;
							$_267 = NULL;
							do {
								$res_244 = $result;
								$pos_244 = $this->pos;
								if (( $subres = $this->literal( 'else' ) ) !== FALSE) {
									$result["text"] .= $subres;
									$_267 = TRUE; break;
								}
								$result = $res_244;
								$this->pos = $pos_244;
								$_265 = NULL;
								do {
									$res_246 = $result;
									$pos_246 = $this->pos;
									if (( $subres = $this->literal( 'require' ) ) !== FALSE) {
										$result["text"] .= $subres;
										$_265 = TRUE; break;
									}
									$result = $res_246;
									$this->pos = $pos_246;
									$_263 = NULL;
									do {
										$res_248 = $result;
										$pos_248 = $this->pos;
										if (( $subres = $this->literal( 'cached' ) ) !== FALSE) {
											$result["text"] .= $subres;
											$_263 = TRUE; break;
										}
										$result = $res_248;
										$this->pos = $pos_248;
										$_261 = NULL;
										do {
											$res_250 = $result;
											$pos_250 = $this->pos;
											if (( $subres = $this->literal( 'uncached' ) ) !== FALSE) {
												$result["text"] .= $subres;
												$_261 = TRUE; break;
											}
											$result = $res_250;
											$this->pos = $pos_250;
											$_259 = NULL;
											do {
												$res_252 = $result;
												$pos_252 = $this->pos;
												if (( $subres = $this->literal( 'cacheblock' ) ) !== FALSE) {
													$result["text"] .= $subres;
													$_259 = TRUE; break;
												}
												$result = $res_252;
												$this->pos = $pos_252;
												$_257 = NULL;
												do {
													$res_254 = $result;
													$pos_254 = $this->pos;
													if (( $subres = $this->literal( 'include' ) ) !== FALSE) {
														$result["text"] .= $subres;
														$_257 = TRUE; break;
													}
													$result = $res_254;
													$this->pos = $pos_254;
													if (( $subres = $this->literal( 'composed' ) ) !== FALSE) {
														$result["text"] .= $subres;
														$_257 = TRUE; break;
													}
													$result = $res_254;
													$this->pos = $pos_254;
													$_257 = FALSE; break;
												}
												while(0);
												if( $_257 === TRUE ) { $_259 = TRUE; break; }
												$result = $res_252;
												$this->pos = $pos_252;
												$_259 = FALSE; break;
											}
											while(0);
											if( $_259 === TRUE ) { $_261 = TRUE; break; }
											$result = $res_250;
											$this->pos = $pos_250;
											$_261 = FALSE; break;
										}
										while(0);
										if( $_261 === TRUE ) { $_263 = TRUE; break; }
										$result = $res_248;
										$this->pos = $pos_248;
										$_263 = FALSE; break;
									}
									while(0);
									if( $_263 === TRUE ) { $_265 = TRUE; break; }
									$result = $res_246;
									$this->pos = $pos_246;
									$_265 = FALSE; break;
								}
								while(0);
								if( $_265 === TRUE ) { $_267 = TRUE; break; }
								$result = $res_244;
								$this->pos = $pos_244;
								$_267 = FALSE; break;
							}
							while(0);
							if( $_267 === TRUE ) { $_269 = TRUE; break; }
							$result = $res_242;
							$this->pos = $pos_242;
							$_269 = FALSE; break;
						}
						while(0);
						if( $_269 === TRUE ) { $_271 = TRUE; break; }
						$result = $res_240;
						$this->pos = $pos_240;
						$_271 = FALSE; break;
					}
					while(0);
					if( $_271 === FALSE) { $_273 = FALSE; break; }
					$_273 = TRUE; break;
				}
				while(0);
				if( $_273 === FALSE) { $_276 = FALSE; break; }
				if (( $subres = $this->whitespace(  ) ) !== FALSE) { $result["text"] .= $subres; }
				else { $_276 = FALSE; break; }
				$_276 = TRUE; break;
			}
			while(0);
			if( $_276 === TRUE ) { $_278 = TRUE; break; }
			$result = $res_238;
			$this->pos = $pos_238;
			$_278 = FALSE; break;
		}
		while(0);
		if( $_278 === TRUE ) { return $this->finalise($result); }
		if( $_278 === FALSE) { return FALSE; }
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
			$res_318 = $result;
			$pos_318 = $this->pos;
			$_317 = NULL;
			do {
				$_315 = NULL;
				do {
					$res_280 = $result;
					$pos_280 = $this->pos;
					if (( $subres = $this->rx( '/ [^<${\\\\]+ /' ) ) !== FALSE) {
						$result["text"] .= $subres;
						$_315 = TRUE; break;
					}
					$result = $res_280;
					$this->pos = $pos_280;
					$_313 = NULL;
					do {
						$res_282 = $result;
						$pos_282 = $this->pos;
						if (( $subres = $this->rx( '/ (\\\\.) /' ) ) !== FALSE) {
							$result["text"] .= $subres;
							$_313 = TRUE; break;
						}
						$result = $res_282;
						$this->pos = $pos_282;
						$_311 = NULL;
						do {
							$res_284 = $result;
							$pos_284 = $this->pos;
							$_287 = NULL;
							do {
								if (substr($this->string,$this->pos,1) == '<') {
									$this->pos += 1;
									$result["text"] .= '<';
								}
								else { $_287 = FALSE; break; }
								$res_286 = $result;
								$pos_286 = $this->pos;
								if (( $subres = $this->rx( '/ % | : | \/: /' ) ) !== FALSE) {
									$result["text"] .= $subres;
									$result = $res_286;
									$this->pos = $pos_286;
									$_287 = FALSE; break;
								}
								else {
									$result = $res_286;
									$this->pos = $pos_286;
								}
								$_287 = TRUE; break;
							}
							while(0);
							if( $_287 === TRUE ) { $_311 = TRUE; break; }
							$result = $res_284;
							$this->pos = $pos_284;
							$_309 = NULL;
							do {
								$res_289 = $result;
								$pos_289 = $this->pos;
								$_294 = NULL;
								do {
									if (substr($this->string,$this->pos,1) == '$') {
										$this->pos += 1;
										$result["text"] .= '$';
									}
									else { $_294 = FALSE; break; }
									$res_293 = $result;
									$pos_293 = $this->pos;
									$_292 = NULL;
									do {
										if (( $subres = $this->rx( '/[A-Za-z_]/' ) ) !== FALSE) { $result["text"] .= $subres; }
										else { $_292 = FALSE; break; }
										$_292 = TRUE; break;
									}
									while(0);
									if( $_292 === TRUE ) {
										$result = $res_293;
										$this->pos = $pos_293;
										$_294 = FALSE; break;
									}
									if( $_292 === FALSE) {
										$result = $res_293;
										$this->pos = $pos_293;
									}
									$_294 = TRUE; break;
								}
								while(0);
								if( $_294 === TRUE ) { $_309 = TRUE; break; }
								$result = $res_289;
								$this->pos = $pos_289;
								$_307 = NULL;
								do {
									$res_296 = $result;
									$pos_296 = $this->pos;
									$_299 = NULL;
									do {
										if (substr($this->string,$this->pos,1) == '{') {
											$this->pos += 1;
											$result["text"] .= '{';
										}
										else { $_299 = FALSE; break; }
										$res_298 = $result;
										$pos_298 = $this->pos;
										if (substr($this->string,$this->pos,1) == '$') {
											$this->pos += 1;
											$result["text"] .= '$';
											$result = $res_298;
											$this->pos = $pos_298;
											$_299 = FALSE; break;
										}
										else {
											$result = $res_298;
											$this->pos = $pos_298;
										}
										$_299 = TRUE; break;
									}
									while(0);
									if( $_299 === TRUE ) { $_307 = TRUE; break; }
									$result = $res_296;
									$this->pos = $pos_296;
									$_305 = NULL;
									do {
										if (( $subres = $this->literal( '{$' ) ) !== FALSE) { $result["text"] .= $subres; }
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
									if( $_305 === TRUE ) { $_307 = TRUE; break; }
									$result = $res_296;
									$this->pos = $pos_296;
									$_307 = FALSE; break;
								}
								while(0);
								if( $_307 === TRUE ) { $_309 = TRUE; break; }
								$result = $res_289;
								$this->pos = $pos_289;
								$_309 = FALSE; break;
							}
							while(0);
							if( $_309 === TRUE ) { $_311 = TRUE; break; }
							$result = $res_284;
							$this->pos = $pos_284;
							$_311 = FALSE; break;
						}
						while(0);
						if( $_311 === TRUE ) { $_313 = TRUE; break; }
						$result = $res_282;
						$this->pos = $pos_282;
						$_313 = FALSE; break;
					}
					while(0);
					if( $_313 === TRUE ) { $_315 = TRUE; break; }
					$result = $res_280;
					$this->pos = $pos_280;
					$_315 = FALSE; break;
				}
				while(0);
				if( $_315 === FALSE) { $_317 = FALSE; break; }
				$_317 = TRUE; break;
			}
			while(0);
			if( $_317 === FALSE) {
				$result = $res_318;
				$this->pos = $pos_318;
				unset( $res_318 );
				unset( $pos_318 );
				break;
			}
			$count += 1;
		}
		if ($count > 0) { return $this->finalise($result); }
		else { return FALSE; }
	}



}
?>