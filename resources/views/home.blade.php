@extends('layouts.app')

@section('content')
<div class="container">
    
<div class="row">
    <div class="col-4 p-5"><img src="https://targetict.co.uk/assets/images/logo.jpg" class="rounded-circle"></div>
    <div class="col-8">
        <div class="pt-5"><h1>{{ 'user'}}</h1></div>
        <div class="d-flex">
        	<div class="pr-5"><strong>59</strong> posts</div>
        	<div class="pr-5"><strong>11k</strong> followers</div>
        	<div class="pr-5"><strong>900</strong> following</div>
        </div>
        <div class="pt-4 font-weight-bold">{{ $user}}</div>
        <div>🇬🇧 Global Digital/ICT Consultancy<br>
        	💻 #WebDevelopment<br>	
			🖥 #iOSApp and #AndroidApp Dev<br>
			💻 #WebHosting @targethost<br>
			🖥 #DigitalTransformation<br>
			☎️ 0330-223-2376<br>
		</div>
		<div><a href="#">targetict.co.uk/blog/bio-link</a></div>
    </div>
</div>

<div class="row pt-5">
	<div class="col-4"><img src="/images/1PAGEBUSINESSPLAN.png" class="w-100"></div>
	<div class="col-4"><img src="/images/AUTOMATE.png" class="w-100"></div>
	<div class="col-4"><img src="/images/SAVETIME.png" class="w-100"></div>
</div>

<div class="row pt-5">
	<div class="col-4"><img src="/images/1PAGEBUSINESSPLAN.png" class="w-100"></div>
	<div class="col-4"><img src="/images/AUTOMATE.png" class="w-100"></div>
	<div class="col-4"><img src="/images/SAVETIME.png" class="w-100"></div>
</div>

<div class="row pt-5">
	<div class="col-4"><img src="/images/1PAGEBUSINESSPLAN.png" class="w-100"></div>
	<div class="col-4"><img src="/images/AUTOMATE.png" class="w-100"></div>
	<div class="col-4"><img src="/images/SAVETIME.png" class="w-100"></div>
</div>


</div>
@endsection
