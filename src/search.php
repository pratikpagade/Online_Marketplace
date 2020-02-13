<?php

/* $val = $_GET['search'];
echo $val; */

$searchval = $_GET['search'];

try
							{
                            $ch1 = curl_init();
                            $ch2 = curl_init();
                            $ch3 = curl_init();
                            $ch4 = curl_init();

							// set url 
                            $url1="";
                            $url2="";
                            $url3="";
                            $url4="";
						
					
									$url1  .=  "http://52.53.161.113/product_api.php";

                                    curl_setopt($ch1, CURLOPT_URL, $url1); 
							//return the transfer as a string 
							curl_setopt($ch1, CURLOPT_RETURNTRANSFER, 1); 

							// $output contains the output string 
							$output1 = curl_exec($ch1); 
                            
                                    
                                    $url2  .= "http://dharmachintala.com/school/getProducts.php";
                                    
                                    curl_setopt($ch2, CURLOPT_URL, $url2); 
							//return the transfer as a string 
							curl_setopt($ch2, CURLOPT_RETURNTRANSFER, 1); 

							// $output contains the output string 
							$output2 = curl_exec($ch2); 
								
							
                                    $url3  .= "http://www.pratikpagade.com/object.php";
                                    curl_setopt($ch3, CURLOPT_URL, $url3); 
							//return the transfer as a string 
							curl_setopt($ch3, CURLOPT_RETURNTRANSFER, 1); 

							// $output contains the output string 
							$output3 = curl_exec($ch3); 
								
								
									$url4 .= "http://www.jasongcenter.com/curl_products.php";
																		
							
							curl_setopt($ch4, CURLOPT_URL, $url4); 
							//return the transfer as a string 
							curl_setopt($ch4, CURLOPT_RETURNTRANSFER, 1); 

							// $output contains the output string 
							$output4 = curl_exec($ch4); 
                            
                            
                            $data1 =  json_decode($output1,true);

                            //print_r($data1);

                            $data2 =  json_decode($output2,true);
                            $data3 =  json_decode($output3,true);
                            $data4 =  json_decode($output4,true);
                            $data = array();
                            array_push($data,$data1);
                            array_push($data,$data2);
                            array_push($data,$data3);
                            array_push($data,$data4);
                             
                            $result = array_merge($data1, $data2,$data3,$data4);

                            foreach($result as $key => $value){
                                if(strpos(strtolower($value['productname']),strtolower($searchval))!==false){
                                  
                                
                                    $owner = "";
                                    
                                    switch($value['url'])
                                    {
                                        case "Manish's ur";
                                            $owner = "Manish";
                                            //curl_setopt($ch, CURLOPT_URL, $url); 
                                            break;
                                        case "http://dharmachintala.com/school/getProducts.php";
                                            $owner = "Dharma";
                                            //curl_setopt($ch, CURLOPT_URL, $url); 
                                            break;
                                        case "http://www.pratikpagade.com/productdetail.php";
                                            $owner = "Pratheek";
                                            //curl_setopt($ch, CURLOPT_URL, $url ); 
                                            break;
                                        case "http://www.jasongcenter.com/curl_products.php";
                                            $owner = "Jason";
                                            //curl_setopt($ch, CURLOPT_URL, $url ); 
                                            break;
                                        default:
                                            $owner="";
                                            //curl_setopt($ch, CURLOPT_URL, $url ); 
                                            break;
                                    }
                                    
                                

                                    echo('<div class="col-sm-12 col-md-6 col-lg-4 p-b-50">
                                    <!-- Block2 -->
                                    <div class="block2">
                                        <div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelnew">
                                            <img src="' .$value['imagepath'] . '" alt="IMG-PRODUCT" style="height:360px;width:270px">
        
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
                                            
        
                                            <span class="block2-price m-text6 p-r-5">
                                                ' . $value['price'] . '
                                            </span>
                                            <span class="block2-price m-text6 p-r-5">
                                            <a href="product-detail.php?owner='. $owner . '&id=' . $value['id'] . '" class="block2-name dis-block s-text3 p-b-5">
                                            ' . $value['productname'] . '
    </a>
                                        </span>
                                        </div>
                                    </div>
                                </div>');
                                   
                                    
                                }
                                //break;
                            }
                            //print_r($result);
					curl_close($ch1);
					curl_close($ch2);
					curl_close($ch3);
					curl_close($ch4);
				}
				
				catch(Exception $e)
				{
					echo ($e);
				}

?>