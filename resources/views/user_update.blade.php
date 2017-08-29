@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">User Update</div>
                <div class="panel-body">
                    <form name="form" ng-submit="register()" role="form" ng-controller="regController">
	<table border="1" cellpadding="0" cespacing="0">
        <tr><td>                    
        <div class="form-group" ng-class="{ 'has-error': form.Type.$dirty && form.Type.$error.required }">
            <table width="100%">
                <tr>
                    <td width="50%"><label for="username">Type:</label></td>
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
            <div class="form-group" ng-class="{ 'has-error': form.firstName.$dirty && form.firstName.$error.required }">
                <table width="100%">
                    <tr>
                        <td width="50%"><label for="username">First name</label></td>
                        <td width="50%">
                            <input type="string" name="firstName" id="firstName" class="form-control" ng-model="user.firstName" required />
                            <span ng-show="form.firstName.$dirty && form.firstName.$error.required" class="help-block">First name is required</span>
                        </td>
                    </tr>
                    </table>
            </div>
        </td></tr>
        <tr><td>
            <div class="form-group" ng-class="{ 'has-error': form.lastName.$dirty && form.lastName.$error.required }">
                <table width="100%">
                    <tr>
                        <td width="50%"><label for="username">Last name&nbsp;</label></td>
                        <td width="50%"><input type="string" name="lastName" id="Text1" class="form-control" ng-model="user.lastName" required />
                            <span ng-show="form.lastName.$dirty && form.lastName.$error.required" class="help-block">Last name is required</span></td>
                    </tr>
                </table>
            </div>
        </td></tr>
        <tr><td> 
                <!-- starting with 9 or 8 or 7 and other 9 digit using any number) 8237373746 7383673874 -->
            <div class="form-group" ng-class="{ 'has-error': form.mobileNumber.$dirty && form.mobileNumber.$error.required }">
                <table width="100%">
                    <tr>
                        <td width="50%"><label for="username">Mobile Number&nbsp;</label></td>
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
                        <td width="50%"><label for="email">Email&nbsp;</label></td>
                        <td width="50%"><input type="email" name="email" id="email" class="form-control" ng-model="user.email" required />
                            <span ng-show="form.email.$dirty && form.email.$error.required" class="help-block">email is required</span></td>
                    </tr>
                    </table>
                </div>
        </td></tr>        
        <tr><td> 
            <div class="form-group" ng-class="{ 'has-error': form.username.$dirty && form.username.$error.required }">
                <table width="100%">
                    <tr>
                        <td width="50%"><label for="username">Username&nbsp;</label></td>
                        <td width="50%"><input type="text" name="username" id="username" class="form-control" ng-model="user.username" required />
                                        <span ng-show="form.username.$dirty && form.username.$error.required" class="help-block">Username is required</span>
                        </td>
                    </tr>
                </table>
            </div>
        </td></tr>
        <tr><td> 
            <div class="form-group" ng-class="{ 'has-error': form.password.$dirty && form.password.$error.required }">
                <table width="100%">
                    <tr>
                        <td width="50%"><label for="password">Password&nbsp;&nbsp;</label></td>
                        <td width="50%">
                                <input type="password" name="password" id="password" class="form-control" ng-model="user.password" required />
                                <span ng-show="form.password.$dirty && form.password.$error.required" class="help-block">Password is required</span>
                        </td>
                    </tr>
                </table>
            </div>
        </td></tr>
        <tr><td> 
            <div class="form-group" ng-class="{ 'has-error': form.company_name.$dirty && form.company_name.$error.required }">
                <table width="100%">
                    <tr>
                        <td width="50%"><label for=" company_name">Company Name:&nbsp;&nbsp;</label></td>
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
                        <td width="50%"><label for=" company_name">Co. Website&nbsp;&nbsp;</label></td>
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
                        <td width="50%"><label for=" co_email_id">Co.Office.email Id:&nbsp;&nbsp;</label></td>
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
                        <td width="50%"><label for=" Landline">Landline Ph.No.:&nbsp;&nbsp;</label></td>
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
                        <td width="50%"><label for=" Location">Location:&nbsp;&nbsp;</label></td>
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
                        <td width="50%"><label for=" current_office_status">Current Office Status:&nbsp;&nbsp;</label></td>
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
                        <td width="50%"><label for=" Address">Address:&nbsp;&nbsp;</label></td>
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
                    <button type="submit" ng-disabled="dataLoading" class="btn btn-primary">Register</button>            
                    <a href="{{url('/vendor_zone')}}" class="btn btn-link"><button type="button" class="btn btn-primary">Cancel</button>            </a>
                </div>
        </td></tr></table>
    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection