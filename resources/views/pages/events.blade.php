@extends('master')
<div>
@section('title')
	STRATIGES
@stop

@section('description')
    This is a description
@stop
<div>
@section('content')
			<form>
			<table border=5 width="50%" cellpadding="0" cellspacing="0" class="events_login"  align="center">
            <tr>
				<td width="25%">
            		<label for="user" class="register_label">Login ID :</label></td>
			        <td width="25%"><input name="" type="text" /></td>
			</tr>
			<tr>            
            	<td width="25%"><label for="user" class="register_label">Password:</label></td>
		        <td width="25%"><input name="" type="text" /></td>
			</tr>
			<tr><td colspan="2"><a href="eventpost.html"><input type="button" name="submitbutton"  value="Sign"  class="Continue_signin"  style="cursor:pointer" /></a><br />
              <a href=""><span class="forget">forget password?</a></td></tr>
			</table>              
       </form>
@endsection
</div>