@extends('layouts.app')

@section('content')
<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
<style>
    .container{
			width: 800px;
			margin: 0 auto;
		}

		ul.tabs{
			margin: 0px;
			padding: 0px;
			list-style: none;
		}
		ul.tabs li{
			background: none;
			color: #222;
			display: inline-block;
			padding: 10px 15px;
			cursor: pointer;
		}

		ul.tabs li.current{
			background: #ededed;
			color: #222;
		}

		.tab-content{
			display: none;
			background: #ededed;
			padding: 15px;
		}

		.tab-content.current{
			display: inherit;
		}
</style>
<script type="text/javascript">
    $(document).ready(function(){
	
	$('ul.tabs li').click(function(){
		var tab_id = $(this).attr('data-tab');

		$('ul.tabs li').removeClass('current');
		$('.tab-content').removeClass('current');

		$(this).addClass('current');
		$("#"+tab_id).addClass('current');
	})

})
</script>
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
                <div class="panel-body">
                        <a href='{{ url('user_update') }}'>Update</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <a href='{{ url('/change_password') }}'>Change Password</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <a href='{{ url('/create_vendor') }}'>Vendor Create</a>
                        <div class="container">
                            <ul class="tabs">
                                    <li class="tab-link current" data-tab="tab-1">Vendor Search</li>
                                    <li class="tab-link" data-tab="tab-2">Vendor Login</li>
                            </ul>
                            <div id="tab-1" class="tab-content current">
							<div class="user">
                    				<div class="smh">Search Media Here:</div>
                      				  <div class="Media">
                        	<div class="teboxs">Media :</div>
                            <div class="rra"><select>
            <option>Hoarding</option>
            
            </select></div>
							<div class="teboxs">Type :</div>
                            <div class="rra"><select>
                         <option>1</option>
                         <option>1</option>
                         <option>122222222222222</option>
                         </select></div>
                        </div>
                         <div class="Mediaone">
                        	<div class="teboxs">State :</div>
                            <div class="rra"><select>
                         <option>1</option>
                         <option>1</option>
                         <option>122222222222222</option>
                         </select></div>
							<div class="teboxs">Dist./City :</div>
                            <div class="rra"><select>
                         <option>1</option>
                         <option>1</option>
                         <option>122222222222222</option>
                         </select></div>
                        </div>
                        <div class="Media">
                        	<div class="teboxs">Area/Loc :</div>
                            <div class="rra"><select>
                         <option>1</option>
                         <option>1</option>
                         <option>122222222222222</option>
                         </select></div>
							<div class="teboxs">Street :</div>
                            <div class="rra"><select>
                         <option>1</option>
                         <option>1</option>
                         <option>122222222222222</option>
                         </select></div>
                        </div>
                        <div class="Mediather">
                        	<div class="teboxs">From :</div>
                            <div class="rra"><select>
                         <option>1</option>
                         <option>1</option>
                         <option>122222222222222</option>
                         </select></div>
							<div class="teboxs">To :</div>

                            <div class="rra"><select>
                         <option>1</option>
                         <option>1</option>
                         <option>122222222222222</option>
                         </select></div>
                        </div>
                         <div class="Avlble">
                         	<div class="Avlbleboxone">&nbsp;Avlble from :
                            	<div class="taexbox"><select>
                         <option>1</option>
                         <option>1</option>
                         <option>122222222222222</option>
                         </select> <img  src="images/claculator.gif" width="24" height="20" align="right" /></div>
                         		<div class="taexbox">to:&nbsp;</div>
                              <div class="taexbox"><select>
                         <option>1</option>
                         <option>1</option>
                         <option>122222222222222</option>
                         </select> <img  src="images/claculator.gif" width="24" height="20" align="right"  /></div>
                         	</div>
                             
                             <div class="Searchbox">
                             	<div class="boxone">
                                	
                                  <div class="botton"><input type="reset" name="submitbutton"  value="Search"  class="Search-botton"  />
                                  </div>
                                </div><div class="or">OR</div>
                               <div class="boxtwo">
                               	<div class="bottontwo"><img src="images/make.png" border="0" usemap="#Map2"/>
                                  <map name="Map2" id="Map2">
                                    <area shape="rect" coords="-2,-1,101,33" href="#" />
                                  </map>
                               	</div>
                               </div>
                             </div>
                         </div>
                    	 <div class="EasySearch">
                         	<div class="el"></div>
                            <div class="text">Easy
							Search</div>
                            <div class="e-icon"></div>
                            <div class="textbox"> <input id="password" name="password" value="" type="password"> </div>
                            <div class="csr"></div>
                         </div>
                    </div>
                             </div>           
                            <div id="tab-2" class="tab-content">
                                     <div id="ifUserNotLoggedIn">
		  				<p class="frm_cntrls">
							<label style="text-align: left;  font: normal 15px  Gisha;  color:#b64f15; margin:0px 0px 0px 5px; padding:0px;">
								I am a :&nbsp;&nbsp; &nbsp; &nbsp;&nbsp; 
							</label>
                   			
				
							<label><input  id="newUser1" name="newUser" onclick="javascript : switchUserType(this.value)" value="Y" type="radio">New  vendor&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  </label>
                            <label  > <input checked="checked" id="exsitngvendor" name="newUser" onclick="javascript : switchUserType(this.value)" value="N" type="radio">  Existing vendor &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; </label>
                            <span class="cl"></span>
							<span class="err_msg" id="newUserError"></span>
				  		</span>
					<span class="cl"></span>
	    </p>

				<!--New/Existing vendor   User Radio Button-->
  <div class="MoreDet" id="regDiv" style="display: block; background-color: rgb(251, 251, 251);">
					<p class="frm_cntrls">
						<span class="cl"></span>
					</p>
                    <div class="login_vendor">
                    <label for="emailaddress">Username:</label>
            <input type="text" name="emailaddress" value="" style=" height: 16px; width: 150px; float:right;" /><br /><br />
            <label for="emailaddress">Password:</label>
            <input type="text" name="emailaddress" value=""  style=" height: 16px; width: 150px; float:right;" /><br /><br />
             <input type="reset" class="singin-botton" value="upload" name="singinbutton">
            </div>
            
            
                 <span class="cl"></span>
                        

					</p>
                  
					<p class="frm_cntrls">
                    
                         <div style=" border-bottom:1px #ccc solid;width:582px; margin-bottom:10px;"></div>
                                             
                    <!---VEndor Boxs--------------------------------------------------------------------------------------------------------------->
                    <div class="updat_text">Update &amp; Upload by media / location from existing list :</div>
                    <!--<div style="width:500px; margin-left:181px;"><img src="images/youwantthis.png"/> </div>-->
                      
                      
                      
                      
                       <!---Vendor Forms start---------------------------------->               
                    <div id="existing_vendor">
                   
                   
                    <!---Existing vendor upload start -->
                    <div class="vendor_box">
                    
        <form name="vuploadform" method="post" action="vendorupload_final.php" enctype="multipart/form-data">                                     
                    
                    <h2>---Upload---</h2>
                   
                    <p style="padding:0px;">
                     <label for="yourcompany">Your Company:</label>
                     <input type="text" style="width:150px; height:16px;" id="cname" name="cname"/><br /><br />
                     </p> 
                   

                        <h4>By Location </h4><br /><br />
                        <label for="state">State :</label>
                        <select style="font-size: 8pt;
                        width: 172px; font-family: tahoma"  name="state" id="state" onChange="onState(this.value)">
                             <option>--selectstate--</option>                  
                        </select>       <br /><br />
                        
                        <label for="city">Dist./City:</label>
                        <select style="font-size: 8pt;
                        width: 172px; font-family: tahoma"  name="city" id="citydiv" onchange="onCityChange()">
                            <option>--selectcity--</option>
                        </select><br />
                        
                         <h4>By Media: </h4><br /><br />


                        <label for="mformat">Format:</label>
                        <select style="font-size: 8pt;
                        width: 172px; " id="mf" name="mformat" onchange="onMFChange(this.value)">
                             <option>--selectmediaformat--</option>                         
                        </select>   <br />  <br />   
                          
                          
                        <label for="knownas">Known as:</label>
                        <select style="font-size: 8pt;
                        width: 172px; font-family: tahoma" name="media" id="mediadiv" onchange="onMediaChange()">
                             <option>--selectmedia--</option>
                        </select>
                        
                       <input type="submit" class="vendor_button" value="Upload" name="uploadbtn">
                  
                   </form>
                    </div>
                    
                   <!--Exsting vendor upload end--> 
                    
                    
                    
                   <!--Exsting vendor update start--> 
                    <div class="vendor_box">
                   
                    <h2>---Update---</h2>
                    
                    <p>
                     <label for="emailaddress">Your Company:</label>
                     <input type=""   style="width:150px; height:16px;"/><br /><br />
                     </p> 
                   

                        <h4>By Location </h4><br /><br />
                        <label for="state">State :</label>
                        <select style="font-size: 8pt;
                        width: 172px; font-family: tahoma" id="tp1" name="tp1">
                        
                        </select>       <br /><br />
                        
                        <label for="city">Dist./City:</label>
                        <select style="font-size: 8pt;
                        width: 172px; font-family: tahoma" id="tp1" name="tp1">
                        
                        
                        </select><br />
                        
                         <h4>By Media: </h4><br /><br />
                        <label for="mformat">Format:</label>
                        <select style="font-size: 8pt;
                        width: 172px; font-family: tahoma" id="tp1" name="format">
                       
                        
                        </select>       <br /><br />
                        
                        <label for="knownas">Known as:</label>
                        <select style="font-size: 8pt;
                        width: 172px; font-family: tahoma" id="tp1" name="tp1">
                       
                        
                        </select>
                        
                         <input type="reset" class="vendor_button" value="update" name="singinbutton">
                    
                    </div>
                    <!--Exsting vendor update end-->
                    
                    </div>
                   <!---Vendor Forms end---------------------------------->  
                    
                  
                   <div class="vendor_EasySearch">
                     <div style="border-bottom:#ccc 1px solid; width:100%">Search By Item Code: </div>
                         	<div class="el"></div>
                            <div class="text"></div>
                            <div class="e-icon"></div>
                            <div class="textbox"> <input type="password" value="" name="password" id="password" style=" margin-left: 5px; margin-top: 4px;"><input type="reset" class="vendor_button2" value="update" name="singinbutton"> </div>
                            <div class="csr"></div>
                         </div>
                    
                   
                   
                   
                     <!---Vendor buttons---------------------------------->  
                     
                     
                    <div class="updat_text">Update by Item</div>
                     <div style=" border-bottom:1px #ccc solid;width:700px; margin-bottom:10px; margin-top:10px;"></div>
                    
                    <div id="existing_vendor">
                    
                    <div class="vendor_box">
                    <h2>---Add / Update---</h2>
                    
                    <div class="Makemymedialist">
                                    	<div class="Makemymedialist-left"></div>
                                        <div class="Makemymedialist-midle">
                                        	<div class="Clickheare">Click heare</div>
                                            <div class="Addphotos"><a href="#">Add photos</a></div>
                                        </div>
                                        <div class="Makemymedialist-right"></div>
                                       </div> 
                                       
                      <div class="uvl">
                                    	<div class="uvl-left"></div>
                                        <div class="uvl-midle">
                                        	<div class="Clickheare">Click heare</div>
                                            <div class="uvl-tatextbox"><a href="#">Update vacant list</a></div>
                                        </div>
                                        <div class="uvl-right"></div>
                                       </div>
                                       
                      <div class="Makemymedialist">
                                    	<div class="Makemymedialist-left"></div>
                                        <div class="Makemymedialist-midle">
                                        	<div class="Clickheare">Click heare</div>
                                            <div class="Addphotos"><a href="#">Add Features</a></div>
                                        </div>
                                        <div class="Makemymedialist-right"></div>
                                    </div>                                  

                    
                    </div>
                    
                    
                    
                    <div class="vendor_box">
                    <h2>---View---</h2>
                    
                    <!--Current List-->
                    <div class="Makemymedialist">
                                    	<div class="Makemymedialist-left"></div>
                                        <div class="Makemymedialist-midle">
                                        	<div class="Clickheare">Click heare</div>
                                            <div class="Addphotos"><a href="http://localhost/demo/vendorupload_new/externalcurrentlist.php" target="_blank">My Current List</a></div>
                                        </div>
                                        <div class="Makemymedialist-right"></div>
                                    </div>
                      <!--Current List-->               
                            
                     <!--vacant List-->                
                     <div class="uvl">
                                    	<div class="uvl-left"></div>
                                        <div class="uvl-midle">
                                        	<div class="Clickheare">Click heare</div>
                                            <div class="uvl-tatextbox"> <a href="http://localhost/demo/vendorupload_new/externalvacancylist.php" target="_blank">My Vacant List</a></div>
                                        </div>
                                        <div class="uvl-right"></div>
                                    </div>
                       <!--vacant List-->              
                            
                       <!--Booked List-->              
                      <div class="Makemymedialist">
                                    	<div class="Makemymedialist-left"></div>
                                        <div class="Makemymedialist-midle">
                                        	<div class="Clickheare">Click heare</div>
                                            <div class="Addphotos"> <a href="http://localhost/demo/vendorupload_new/externalbookedlist.php" target="_blank">My Booked list</a></div>
                                        </div>
                                        <div class="Makemymedialist-right"></div>
                                       	</div>
                       <!--Booked List-->  
                    </div>
                    
                    </div>
                    
                    
                    <!----New div --->
                    <div class="claer"></div>
                    
                   <div class="vendor_3box"></div>
                  
                  <div id="detail_location_reg_div" style="display: none;">
						<p class="frm_cntrls">
							<label style="width: 85px">
								State :
							</label>
							<span class="frm_cnt"> <select id="regStateDropDown" name="regState" onchange="javascript :populateCityBasedOnState('regStateDropDown', 'regcityDropDown', '','');">
									<option selected="selected" value="-1">---Select State---</option>
										<option value="500">Andaman &amp; Nicobar</option>
								</select> <br> <span class="err_msg" id="regStateError"></span> 
							</span>
							<span class="cl"></span>
						</p>
						<p class="frm_cntrls">
							<label style="width: 85px">
								City :
							</label>
							<span class="frm_cnt"> <select id="regcityDropDown" name="regCity">
									<option selected="selected" value="-1">---Select City---</option>
								</select> <br> <span class="err_msg" id="regCityError"></span> 
							</span>
							<span class="cl"></span>
						</p>
	  </div>
	  <span class="cl"></span>
	</div>
				<div class="clr"></div>
				<div class="frm_container MoreDet" id="loginDiv" style="display: none; background-color: rgb(251, 251, 251);">
                         <div class="Registeredvendor">Select Pacages</div>
                   		 <div class="Registeredvendor">
                        <p class="frm_cntrls">
						<label style="width: 10px">
                        <input id="priceNegotiableFlag1" name="priceNegotiableFlag" class="pad_lft4" value="Y" type="checkbox">
						</label>
						<span class="frm_cnt"> <label style="width: 85px">
							Free Trail
						</label> </span> 
						</span>
						<span class="cl"></span>
					</p>
                        </div>
                         <div class="Registeredvendor">
                        <p class="frm_cntrls">
						<label style="width: 10px">
						<input id="priceNegotiableFlag1" name="priceNegotiableFlag" class="pad_lft4" value="Y" type="checkbox">
						</label>
						<span class="frm_cnt"> <label style="width: 165px">
							For 3 Months Package
						</label> </span> 
						</span>
						<span class="cl"></span>
					</p>
                        </div>
                         <div class="Registeredvendor">
                        <p class="frm_cntrls">
						<label style="width: 10px">
						<input id="priceNegotiableFlag1" name="priceNegotiableFlag" class="pad_lft4" value="Y" type="checkbox">
						</label>
						<span class="frm_cnt"> <label style="width: 165px">
							For 6 Months Package
						</label> </span> 
						</span>
						<span class="cl"></span>
					</p>
                        </div>
                         <div class="Registeredvendor">
                        <p class="frm_cntrls">
						<label style="width: 10px">
						<input id="priceNegotiableFlag1" name="priceNegotiableFlag" class="pad_lft4" value="Y" type="checkbox">
						</label>
						<span class="frm_cnt"> <label style="width: 165px">
							For 9 Months Package
						</label>
                        	<div class="Register"><input type="reset" name="Registerbutton"  value="Register"  class="Register-botton"  /></div>
                         </span> 
						</span>
						<span class="cl"></span>
					</p>
                        </div>
                           <p class="frm_cntrls">
					<label style="text-align: left;  font: normal 15px  Gisha;  color:#b64f15;">
						I Want to :&nbsp;&nbsp; &nbsp; &nbsp;&nbsp; 
					</label>
                    	<label><input id="propertyFor1" name="propertyFor" onclick="javascript : toggleOptions(this.value)" value="S" checked="checked" type="radio">Upload</label>
                          <span class="err_msg" id="newUserError"></span>
				  </span>
	    </p>
                         <div class="Uploadmainbox">
                	<div class="frm_container">
             <span class="frm_cnt"><span id="typeSell"> </span> <span id="typeRent" style="display: none;">  </span>     </span>
							<!-- end of country-->
  </div>
			  <div class="frm_container">
<p class="frm_cntrls" id="perUnitPriceDiv"><span class="cl"></span>
                                <div class="raj">
                                	 <label style=" width:auto;  font: normal 12px  Verdana;  color:#000;">
									<span id="sellPerUnitLabel">Enter your Company name:</span><span id="rentPerUnitLabel" style="display: none;">Monthly
										444444444444444444444 </span>
							  </label>
								<span class="frm_cnt"><span class="font12"><input id="perUnitPrice" name="perUnitPrice" class="txt_10" type="text"></span><br> 
                                </div>
							 
                                <div class="Mediainbox">
									By Location :
								</div>
                                <div class="Mediainonebox">
                                	<label style="width: auto ; font: normal 12px  Verdana;  color:#000;">
										 State :  &nbsp;
									</label>
                                    <span class="frm_cnt"> <select id="locatityDropDown" name="locality" onchange="javascript: showOtherLocality(this);">
<option selected="selected" value="-1">--- Select Locality ---</option><option value="other">Other</option></select> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <br> <span class="err_msg" id="localityError"></span> 
									</span>
                                    <label style="width: auto;  font: normal 12px  Verdana;  color:#000;">
										  Dist./City : 
									</label>
                                    <span class="frm_cnt"> <select id="locatityDropDown" name="locality" onchange="javascript: showOtherLocality(this);">
										<option selected="selected" value="-1">--- Select Locality ---</option><option value="other">Other</option></select> <br> <span class="err_msg" id="localityError"></span> 
                                      <label>
                                      </label>
                                </div>
                              <span id="sellLabel"> <div class="Updatebtaon"><input type="reset" name="Uploadbutton"  value="Upload"  class="Upload-botton"  /></div>                              <div class="jsdf">&nbsp;</div>
                              </span> 
                              </label>
                              	 </span>
                               	<span id="rentLabel" style="display: none;">
                               <div class="Uploadbtaon">rajam</div>
                               <div class="jsdf">Update by Item code :</div>
                               <div class="UpdatebyItemcode">
                               	<div class="searchbyItemcodeinbox">
                                	<div class="searchbyItemcodeinbox-left"></div>
                                    <div class="searchbyItemcodeinboxtextbox">search by Item code</div>
                                    <div class="e-iconv"></div>
                                    <div class="searchbytextbix"><span class="font12"><input id="perUnitPrice" name="perUnitPrice" class="txt_10" type="text"></span></div>
                                    <div class="searchbyItemcodeinbox-right"></div>
                                </div>
                                 <div class="Updatebtaons"><input type="reset" name="Uploadbutton"  value="Upload"  class="Update-botton"  /></div>
                                <div class="jsdf">Add / Update :</div>
                                <div class="fgh">
                                	<div class="Makemymedialist">
                                    	<div class="Makemymedialist-left"></div>
                                        <div class="Makemymedialist-midle">
                                        	<div class="Clickheare">Click heare</div>
                                            <div class="Addphotos">Add photos</div>
                                        </div>
                                        <div class="Makemymedialist-right"></div>
                                    </div>
                                    <div class="uvl">
                                    	<div class="uvl-left"></div>
                                        <div class="uvl-midle">
                                        	<div class="Clickheare">Click heare</div>
                                            <div class="uvl-tatextbox">Update vacant list</div>
                                        </div>
                                        <div class="uvl-right"></div>
                                    </div>
                                    <div class="Makemymedialist">
                                    	<div class="Makemymedialist-left"></div>
                                        <div class="Makemymedialist-midle">
                                        	<div class="Clickheare">Click heare</div>
                                            <div class="Addphotos">Add Features</div>
                                        </div>
                                        <div class="Makemymedialist-right"></div>
                                    </div>
                                </div>
                                <div class="jsdf">View :</div>
                                <div class="fgh">
                                	<div class="Makemymedialist">
                                    	<div class="Makemymedialist-left"></div>
                                        <div class="Makemymedialist-midle">
                                        	<div class="Clickheare">Click heare</div>
                                            <div class="Addphotos"> My media list</div>
                                        </div>
                                        <div class="Makemymedialist-right"></div>
                                    </div>
                                    <div class="uvl">
                                    	<div class="uvl-left"></div>
                                        <div class="uvl-midle">
                                        	<div class="Clickheare">Click heare</div>
                                            <div class="uvl-tatextbox"> My media list</div>
                                        </div>
                                        <div class="uvl-right"></div>
                                    </div>
                                    <div class="Makemymedialist">
                                    	<div class="Makemymedialist-left"></div>
                                        <div class="Makemymedialist-midle">
                                        	<div class="Clickheare">Click heare</div>
                                            <div class="Addphotos"> My Booked list</div>
                                        </div>
                                        <div class="Makemymedialist-right"></div>
                                    </div>
                                </div>
                               </div>
                               </span>
                                <label>
 			   </label></span></label>
                        </p>
	</div>
    </div>
                    <p></p>
                    </div>
                    	</div>
                            </div>                            
                        </div>
                        <!-- container -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
