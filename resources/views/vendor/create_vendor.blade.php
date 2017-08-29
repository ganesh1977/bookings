@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Vendor Registration</div>
                <div class="panel-body" ng-app="userreg">
                    <table border='0' width="100%">
                        <tr><td>                                
                        <label for="username" class="col-md-4 control-label">Vendor Category:</label>
                            </td><td>
                                <select name='vendorCategory' style="width:200px;">
                            <option value=''>Select Vendor Cateogry</option>    
                            <option value=1>Media Owner</option>
                            <option value=2>Sole Consessioner</option>
                            <option value=3>Landlord-Owner</option>
                            <option value=4>Media Contractor</option>
                            <option value=5>Media Sub Contractor</option>
                            <option value=6>Government</option>
                            <option value=7>Semi Government</option>
                        </select>    
                            </td></tr>
                        <tr><td colspan="2">&nbsp;</td></tr>
                        <tr><td>
                    <label for="username" class="col-md-4 control-label">Vendor Type:</label>
                    </td><td>
                        <select name='vendorType' style="width:200px;">
                            <option value="">Select Vendor Type</option>
                            <option value=1>Multi National</option>
                            <option value=2>National</option>
                            <option value=3>State</option>
                            <option value=4>City / District</option>
                            <option value=5>Individual</option>
                            <option value=6>Rural </option>
                            <option value=7>Urban</option>
                        </select>
                    </td></tr>
                        <tr><td colspan="2">&nbsp;</td></tr>
                        <tr><td>
                        <label for="username" class="col-md-4 control-label">Vendor description :</label>
                        </td><td>
                        <textarea  cols="30" rows="10"></textarea>
                        </div>
                    </td></tr>
            <tr><td colspan="2">&nbsp;</td></tr>
            <tr><td colspan="2" align="center"><input type="submit" value='Vendor Registraton'></td></tr>
                    </table>                
                    <br>                    
                    <table border='1' width="100%">
                        <tr><td colspan="2" align="center"><b><h2>View Vendor</h2></b></td></tr>
                        <tr><td>                                
                        <label for="username" class="col-md-4 control-label">Vendor Category:</label>
                            </td><td>&nbsp;                            
                            </td></tr>
                        <tr><td>
                    <label for="username" class="col-md-4 control-label">Vendor Type:</label>
                    </td><td>&nbsp;
                        
                    </td></tr>
                        <tr><td>
                        <label for="username" class="col-md-4 control-label">Vendor description :</label>
                        </td><td>&nbsp;                        
                            
                    </td></tr>
                        <tr><td align="right" colspan="2"><a href="{{ URL::to('create_media_p')}}">Create Media</a></td></tr>
                    </table>                 
                </div>
            </div>
        </div>
</div>
@endsection