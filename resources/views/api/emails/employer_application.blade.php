@extends('api.emails.layouts.master')

@section('email_page_title')
    Notification - {{ config('myapp.name') }}
@endsection

@section('email_body_title')
@endsection

@section('email_body')
    Hi {{ $admin_name }},
    <br>
    <p>
    	An employer have registered and completed his application. <br>
    	Find below the accompanying details:
    </p>
    <table class="table">
    	<tr>
    		<td>Registered Name </td>
    		<td>{{$name}}</td>
    	</tr>
    	<tr>
    		<td>Organisation Name </td>
    		<td>{{$employer_org_name}}</td>
    	</tr>
    	<tr>
    		<td>Core Services</td>
    		<td>{{$employer_org_core_services}}</td>
    	</tr>
    	<tr>
    		<td>Organisation size </td>
    		<td>{{$employer_org_size}}</td>
    	</tr>
    	<tr>
    		<td>Organisation contact </td>
    		<td>{{$employer_org_contact}}</td>
    	</tr>
    </table>

    <p>
        @include('api.emails.layouts.partials.button_primary', [
            'button_text' => 'Click here to view application',
            'button_url' => $employer_application_url
        ])
    </p>
@endsection

@section('email_complimentary_close')
    @include('api.emails.layouts.partials.complimentary_close')
@endsection
