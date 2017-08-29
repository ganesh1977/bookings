@extends('layouts.app')

@section('content')
<style>
    .help-block{ color: red; font-size: 10px;}
</style>
@if(session()->has('message.level'))
    <div class="alert alert-{{ session('message.level') }}"> 
    {!! session('message.content') !!}
    </div>
@endif
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Provide Your Company Information</div>
                <div class="panel-body" ng-app="userreg">
    <form name="form" ng-submit="register()" role="form" ng-controller="regController" >
	<table cellpadding="0" cellspacing="0">
        <tr><td>                    
        <div class="form-group" ng-class="{ 'has-error': form.Type.$dirty && form.Type.$error.required }">
            <table width="100%">
                <tr>
                    <td width="50%"><label for="username" class="col-md-4 control-label">Type:</label></td>
                    <td width="50%">                        
                        <select name="Type" id="Type" class="form-control" ng-model="user.Type" required>
                            <option value="" selected="selected">-- Select Type --</option>
                            <option value="m">Media owner</option>
                            <option value="s">Service provider</option>
                       </select>
                        <span ng-show="form.Type.$dirty && form.Type.$error.required" class="help-block">Type is required</span>
                    </td>
                </tr>
                </table>
        </div>
        </td></tr>
        <tr><td> 
                <!-- starting with 9 or 8 or 7 and other 9 digit using any number) 8237373746 7383673874 -->
            <div class="form-group" ng-class="{ 'has-error': form.mobileNumber.$dirty && form.mobileNumber.$error.required }">
                <table width="100%">
                    <tr>
                        <td width="50%"><label for="username" class="col-md-4 control-label">Mobile Number&nbsp;</label></td>
                        <td><input type="tel" name="mobileNumber" pattern="[7-9]{1}[0-9]{9}" id="mobileNumber" class="form-control" ng-model="user.mobileNumber" required />
                            <span ng-show="form.mobileNumber.$dirty && form.mobileNumber.$error.required" class="help-block">starting with 9 or 8 or 7 is required</span>
                        </td>
                    </tr>
                </table>
            </div>
        </td></tr>        
        <tr><td> 
                <!-- starting with 9 or 8 or 7 and other 9 digit using any number) 8237373746 7383673874 -->
                <div class="form-group" ng-class="{ 'has-error': form.email.$dirty && form.email.$error.required }">
                    <table width="100%">
                    <tr>
                        <td width="50%"><label for="email" class="col-md-4 control-label">Email&nbsp;</label></td>
                        <td width="50%">{{ $email_list }}</td>
                    </tr>
                    </table>
                </div>
        </td></tr>                
        <tr><td> 
            <div class="form-group" ng-class="{ 'has-error': form.company_name.$dirty && form.company_name.$error.required }">
                <table width="100%">
                    <tr>
                        <td width="50%"><label for=" company_name" class="col-md-4 control-label">Company Name:&nbsp;&nbsp;</label></td>
                        <td width="50%">
                                        <input type="text" name="company_name" id="company_name" class="form-control" ng-model="user.company_name" required />
                                        <span ng-show="form.company_name.$dirty && form.company_name.$error.required" class="help-block">company_name is required</span>
                        </td>
                    </tr>
                </table>
            </div>
        </td></tr>
        <tr><td> 
            <div class="form-group" ng-class="{ 'has-error': form.Co_Website.$dirty && form.Co_Website.$error.required }">		
                <table width="100%">
                    <tr>
                        <td width="50%"><label for=" company_name" class="col-md-4 control-label">Co. Website&nbsp;&nbsp;</label></td>
                        <td width="50%">
                                <input type="url" name="Co_Website" id="Co_Website" class="form-control" ng-model="user.Co_Website" required />
                                <span ng-show="form.Co_Website.$dirty && form.Co_Website.$error.required" class="help-block">Co_Website is required</span>
                        </td>
                    </tr>
                </table>
            </div>
        </td></tr>
        <tr><td> 
            <div class="form-group" ng-class="{ 'has-error': form.co_email_id.$dirty && form.co_email_id.$error.required }">
                <table width="100%">
                    <tr>
                        <td width="50%"><label for=" co_email_id" class="col-md-4 control-label">Co.Office.email Id:&nbsp;&nbsp;</label></td>
                        <td width="50%">
                            <input type="email" name="co_email_id" id="co_email_id" class="form-control" ng-model="user.co_email_id" required />
                            <span ng-show="form.co_email_id.$dirty && form.co_email_id.$error.required" class="help-block">co_email_id is required</span>
                        </td>
                    </tr>
                </table>
            </div>
        </td></tr>
        <tr><td> 
		<div class="form-group" ng-class="{ 'has-error': form.Landline_Ph_No.$dirty && form.Landline_Ph_No.$error.required }">
                    <table width="100%">
                    <tr>
                        <td width="50%"><label for=" Landline" class="col-md-4 control-label">Landline Ph.No.:&nbsp;&nbsp;</label></td>
                        <td width="50%">
                            <input type="number" maxlength="12" name="Landline_Ph_No" id="Landline_Ph_No" class="form-control" ng-model="user.Landline_Ph_No" required />
                                <span ng-show="form.Landline_Ph_No.$dirty && form.Landline_Ph_No.$error.required" class="help-block">Landline_Ph_No is required</span>
                        </td>
                    </tr>
                    </table>
                </div>
        </td></tr>
        <tr><td> 
		<div class="form-group" ng-class="{ 'has-error': form.Location.$dirty && form.Location.$error.required }">
                    <table width="100%">
                    <tr>
                        <td width="50%"><label for=" Location" class="col-md-4 control-label">Location:&nbsp;&nbsp;</label></td>
                        <td width="50%">
                            <select name="Location" id="Location" class="form-control" ng-model="user.Location" required>
                                <option value=''>Select City</option>
                                @foreach($posts as $post)                                
                                <option value='{{ $post->id }}'>{{ $post->country_name }}</option>
                                @endforeach
                            </select>                                
                                <span ng-show="form.Location.$dirty && form.Location.$error.required" class="help-block">Location is required</span>
                        </td>
                    </tr>
                    </table>
                </div>
        </td></tr>
        <tr><td> 
		<div class="form-group" ng-class="{ 'has-error': form.current_office_status.$dirty && form.current_office_status.$error.required }">
                    <table width="100%">
                    <tr>
                        <td width="50%"><label for=" current_office_status" class="col-md-4 control-label">Current Office Status:&nbsp;&nbsp;</label></td>
                        <td width="50%">
                            <select name="current_office_status" id="current_office_status" class="form-control" ng-model="user.current_office_status" required>
                                <option value=""> Select office</option>
                                <option value="1">Head office</option>
                                <option value="2">Branch office</option>
                                <option value="3">regional office</option>                                
                            </select>
                                    <!--<input type="text" name="current_office_status" id="current_office_status" class="form-control" ng-model="user.current_office_status" required />-->
                            <span ng-show="form.current_office_status.$dirty && form.current_office_status.$error.required" class="help-block">current_office_status is required</span>
                        </td>
                    </tr>
                    </table>
                </div>
        </td></tr>
        <tr><td>
		<div class="form-group" ng-class="{ 'has-error': form.Address.$dirty && form.Address.$error.required }">
                    <table width="100%">
                    <tr>
                        <td width="50%"><label for=" Address" class="col-md-4 control-label">Address:&nbsp;&nbsp;</label></td>
                        <td width="50%">    
                            <textarea rows="5" cols="25" name="Address" id="Address" class="form-control" ng-model="user.Address" required></textarea>                                
                                <span ng-show="form.Address.$dirty && form.Address.$error.required" class="help-block">Address is required</span>
                        </td>
                    </tr>
                    </table>
                </div>
        </td></tr>
        <tr><td>
                <div class="form-actions">
                    <button type="submit" ng-disabled="dataLoading" class="btn btn-primary">Update</button>            
                    <a href="{{url('/')}}" class="btn btn-link"><button type="button" class="btn btn-primary">Cancel</button>            </a>
                </div>
        </td></tr></table>
    </form>
                    </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
angular.module("userreg",[]).controller('regController',function($scope,$location,$http)
{
    $scope.register = function() {                        
            $http({
                url: "user_register_submit", 
                method: "POST",
                headers: {'Content-Type': 'application/x-www-form-urlencoded'},
                data: $.param($scope.user)
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
      };
});
</script>
@endsection
</div>