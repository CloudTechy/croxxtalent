@extends('api.emails.layouts.master_plain')

@section('email_body')
Hi {{ $admin_name }}, 

	An employer have registered and completed his application,
	Find below the accompanying details:

	Registered Name:       	{{ $name }} 
	Organisation Name:		{{ $employer_org_name }}
	Core Services:			{{ $employer_org_core_services }}
	Organisation size:		{{ $employer_org_size }}
	Organisation contact:	{{ $employer_org_contact }}
	
	Simply click or copy the link below and paste on your favourite browser to view application.
   
   {{ $employer_application_url }}

@endsection

@section('email_complimentary_close')
@include('api.emails.layouts.partials.complimentary_close_plain')
@endsection
