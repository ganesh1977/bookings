@extends('layouts.app')

@section('content')
<div class="container"> ganesh ganesh
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Vendor Media Registration</div>
                <div class="panel-body" ng-app="media" ng-controller="media_controller">
                    <table border='0' width="100%">
                        {{ csrf_field() }}
                        <tr><td>                                
                        <label for="username" class="col-md-4 control-label">Media Category:</label>
                            </td><td>
                                <select name='vendorCategory' style="width:200px;" class="form-control" ng-model="itemSelected" ng-change="mediaChange(itemSelected)">
                                    <option value=''>Select Media Cateogry</option>    
                                    <option value='1'>Outdoor</option>
                                    <option value='2'>Indoor </option>
                                    <option value='3'>Transit</option>
                                    <option value='4'>Sports </option>
                                    <option value='5'>Touch Points</option>
                                </select>    
                            </td></tr>
                        <tr><td colspan="2">&nbsp;</td></tr>
                        <tr>
                            <td>
                                <label for="username" class="col-md-4 control-label">Media Sub Category:</label>
                            </td>
                            <td>
                                <select  ng-model="names" style="width:200px;" class="form-control" ng-options="item.sub_category_name for item in names">	
								<option value=''>Select Media Sub Cateogry</option>
                                </select>
                            </td>
                        </tr>
                        <tr><td colspan="2">&nbsp;</td></tr>
                        <tr><td>
                        <label for="username" class="col-md-4 control-label">Media description :</label>
                        </td><td>
                        <textarea  cols="30" rows="10" class="form-control"></textarea>
                        </div>
                    </td></tr>yyyyyy
            <tr><td colspan="2">&nbsp;</td></tr>
            <tr><td colspan="2" align="center"><input type="submit" value='Media Registraton'></td></tr>
                    </table>                
                    <br>
                        <table border="1" width="100%"> 
                            <tr><td colspan="2" align="center"><b><h2>View Vendor Media</h2></b></td></tr>
                            <tr><td>
                            <table border='1' width="100%">
                                <tr><td>                                
                                <label for="username" class="col-md-4 control-label">Media Category:</label>
                                    </td><td>&nbsp;
                                    
                                    </td></tr>
                                <tr><td>
                            <label for="username" class="col-md-4 control-label">Media Sub Category:</label>
                            </td><td>&nbsp;
                                
                            </td></tr>
                                <tr><td>
                                <label for="username" class="col-md-4 control-label">Media description :</label>
                                </td><td>&nbsp;
                                    
                            </td></tr>
                            </table>  
                            </table>
                         </td></tr>
                    </table>
                </div>
            </div>
        </div>
</div>
<script type="text/javascript">
    angular.module("media",[]).controller('media_controller',function($scope,$http)
    {
            $scope.mediaChange = function()
            {           //alert('Hai'+$scope.itemSelected);
                        $http({
                        url: "/laravel_new/public/media_select_type", 
                        method: "POST",
                        headers: {'Accept': 'application/json','Content-Type': 'application/x-www-form-urlencoded'},
                        data: { "id":$scope.itemSelected},
                        withCredentials: false,
                    }).success(function(response, status,headers, config){    
						//alert(JSON.stringify(response));            
                        $scope.names = response;
						//alert($scope.names);
						//alert(" New DATA::::: "+response+" STATUS "+status+"onfig::"+config);     
                        console.log($scope.names);
                        if(response==1)
                        {
                            //alert("Successfully Registered");
                            $scope.status = response;                    
                            window.location.href = 'vendor_zone';
                        }else { alert("Not Successfully Registered");  }                
                    }).error(function(response, status, headers, config) {                
                        console.log(response);
                        $scope.status = status;
                    });     
            }
    });
</script>
@endsection