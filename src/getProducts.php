<?php

try
							{
							$ch = curl_init(); 

							// set url 
							$url="";
							switch($_GET['owner'])
							{
								case "Manish":
									$url  .=  "http://www.manishgangal.com/product_api.php";
									break;
								case "Dharma":
									$url  .= "http://dharmachintala.com/school/getProducts.php";
									break;
								case "Pratheek":
									$url  .= "http://www.pratikpagade.com/object.php";
									break;
								case "Jason":
									$url  .= "http://www.jasongcenter.com/curl_products.php";
									break;
								default:
									$url  .= "http://dharmachintala.com/school/getProducts.php";
									break;
							}
							
							curl_setopt($ch, CURLOPT_URL, $url); 
							//return the transfer as a string 
							curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 

							// $output contains the output string 
							$output = curl_exec($ch); 
							
							$data =  json_decode($output,true);
							
							function filter($var)
							{
								return ($var['price'] >= $_GET['from'] && $var['price'] <= $_GET['to']);
							}

							
							if (count($data) > 0)
							{
								if($_GET['from'] && $_GET['to'])
								{
									$filtereddata = array_filter($data,"filter");
								}
								else
								{
									$filtereddata = $data;
								}
								
								if($_GET['sort'])
								{
									$price  = array_column($filtereddata, 'price');
									
									if($_GET['sort'] == "asc")
									array_multisort($price, SORT_ASC,$filtereddata);
									else
									array_multisort($price, SORT_DESC,$filtereddata);	
									
								}
								
								if(count($filtereddata) > 0)
								{
									foreach ($filtereddata as $key => $value)
									{
										echo('<div class="col-sm-12 col-md-6 col-lg-4 p-b-50">
									<!-- Block2 -->
									<div class="block2">
										<div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelnew">
											<img src="' .$filtereddata[$key]['imagepath'] . '" alt="IMG-PRODUCT" style="height:360px;width:270px">

											<div class="block2-overlay trans-0-4">
												<a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
													<i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
													<i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
												</a>

												<div class="block2-btn-addcart w-size1 trans-0-4">
													<!-- Button -->
													<button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
														Add to Cart
													</button>
												</div>
											</div>
										</div>

										<div class="block2-txt p-t-20">
											<a href="product-detail.php?owner='. $_GET['owner'] . '&id=' . $filtereddata[$key]['id'] . '" class="block2-name dis-block s-text3 p-b-5">
												' . $filtereddata[$key]['productname'] . '
											</a>

											<span class="block2-price m-text6 p-r-5">
												' . $filtereddata[$key]['price'] . '
											</span>
										</div>
									</div>
								</div>');
								}
								}
								else
								{
									echo ('No Results Matching Your Search');
								}
							}
							
							curl_close($ch);
				}
				
				catch(Exception $e)
				{
					echo ($e);
				}

?>