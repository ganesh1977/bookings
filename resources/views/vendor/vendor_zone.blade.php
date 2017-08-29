@extends('layouts.app')

@section('content')
<div class="vendormain_bg" ng-app="myvendor">
				<div class="vendormain_bgsub_one">	
						<div style="width: 267px;height: 220px;background:#FFF no-repeat;float: left; color:#F90;">outdoor media partner</div>	
					<div style="float: right;width:334px;height: 267px;">
						<div class="yui-u" ng-controller="vendorController">				 
                        
                        <div class="vendor_one">
                        <h3 class="vendortext">Vendor</h3>
                                <span class="iama_one">I am a :</span>
                                <select id="second_id" name="first" ng-model="itemSelected" ng-change="onCategoryChange(itemSelected)" style="width:120px;" >
                                                   <option value="" selected="selected">--select--</option>
                                                   <option value="1">New</option>
                                                   <option value="2">Existing</option>
                                   </select>            
                                <div id="reg_id">
                                      <input type="button" value="Register" ng-click="register()" ng-show="goReg">
                                </div>
                                <div id="login_id" ng-show="goLogin">
                                <form name="form" method="post" ng-submit="login()" role="form" role="form">                                    
                                        <h3 class="vendortextlogin">Login Here</h3>
                                        <div id="my_div">
                                            <table width="100%" class="login_form">
                                                <tr><td>
                                                        <table width="100%">
                                                            <tr>
                                                                <td width="50%"><span class="iama_one">Type:</span></td>
                                                                <td width="50%">
                                                                    <div class="form-group" ng-class="{ 'has-error': form.types.$dirty && form.types.$error.required }">
                                                                        <select id="type_id" name="types" ng-model="login.types"  style="width:120px;">
                                                                         <option value="" selected="selected">--select--</option>
                                                                            <option value="m">Media owner</option>
                                                                            <option value="s">Service provider</option>
                                                                        </select>
                                                                        <!-- <div ng-message="required">You did not enter a field</div> -->
                                                                        <span ng-show="error_types" class="help-block error">Type is required</span>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </td></tr>
                                                <tr><td>
                                                        <table width="100%">
                                                            <tr>
                                                                <td width="50%">
                                                                    <span class="iama_one">Username:</span>
                                                                </td>
                                                                <td width="50%">
                                                                    <div class="form-group" ng-class="{ 'has-error': form.logins.$dirty && form.logins.$error.required }">
                                                                        <input name="logins" type="text"  ng-model="login.logins"/>                                                                    
                                                                        <span ng-show="error_logins" class="help-block error">Username is required</span>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        </table>                
                                                </td></tr>
                                                <tr><td>
                                                        <table width="100%">
                                                            <tr>
                                                                <td width="50%">
                                                                    <span class="iama_one">Password:</span>
                                                                </td>
                                                                <td width="50%">
                                                                    <div class="form-group" ng-class="{ 'has-error': form.password.$dirty && form.password.$error.required }">
                                                                        <input name="pwd" type="password" ng-model="login.password"  />
                                                                        <span ng-show="error_password" class="help-block error">Password is required</span>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        </table>                
                                                </td></tr>
                                                <tr><td>
                                             <input type="submit" name="signin"  value="Sign in" />
                                             <a href=""><span class="forgetpass1">Forgot Password?</span></a>       </td></tr>
                                            </table>
                                         </div>
                                        </form>
                                    </div>
                        </div>

                    </div> 
                  </div>
                  <div style="clear: both;"></div>
          </div>
          <div style="margin-top:25px;">

          </div>
</div>
<script type="text/javascript">
angular.module("myvendor",[]).controller('vendorController',function($scope,$location,$http)
{
	$scope.onCategoryChange = function () 
	{
		if($scope.itemSelected==1)
		{
			$scope.goCats = true;
			$scope.goLogin = false;
			$scope.goReg  = true;
		}
		else if($scope.itemSelected==2)
		{
			$scope.goCats = true;		
			$scope.goReg  = false;
                        $scope.goLogin = true;			
		}				
	}
	$scope.register = function()
	{		
		window.location.href = 'user_register';
	}
        $scope.login = function()
        {   
            //alert("DATA LIST::"+$scope.login.types); return false;
            if( ($scope.login.types=='') || ($scope.login.types==undefined))
            {
                $scope.error_types = true;                
                return false;
            } else {  $scope.error_types = false;   }
            
            if( ($scope.login.logins=='') || ($scope.login.logins==undefined))
            {
                $scope.error_logins = true;                
                return false;
            } else {  $scope.error_logins = false;   }
            
            if( ($scope.login.password=='') || ($scope.login.password==undefined))
            {
                $scope.error_password = true;                
                return false;
            } else {  $scope.error_password = false;   }
            
            var data = $.param($scope.login);
            
            $http({
                url: "/laravel_new/public/user_login",
                method: "POST",
                headers: {'Content-Type': 'application/x-www-form-urlencoded'},
                data: $.param($scope.login)
            }).success(function(response) {                
                console.log(response);
                if(response==1)
                {
                    alert("Successfully Registered");
                    $scope.status = response;                    
                    window.location.href = 'vendor_zone';
                }else {   alert("Not Successfully Registered");  }                
            }).error(function(response, status, headers, config) {                
                console.log(response);
                //alert(response);
                $scope.status = status;
            });    
            
            /*if( ($scope.logins=='') || ($scope.logins==undefined))
            {
                alert('Please select login');
                return false;
            }
            
            if( ($scope.password=='') || ($scope.password==undefined))
            {
                alert('Please select password');
                return false;
            }*/
            /*$http({
                url: "/laravel_new/public/user_login",
                method: "POST",
                headers: {'Content-Type': 'application/x-www-form-urlencoded'},
                data: $.param($scope.user)
            }).success(function(response) {                
                    
            }).error(function(response, status, headers, config) {                
                console.log(response);
                alert(response);
                $scope.status = status;
            });   */
        }    
});
</script>

@endsection
</div>