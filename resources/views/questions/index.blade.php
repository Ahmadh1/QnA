@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h3>Quote of the Day</h3></div>

                <div class="card-body">
                  <p>"If you work just for money, you'll never make it, but if you love what you're doing and you always put the customer first, success will be yours."</p>
                </div>
            </div>
            <hr>
        </div>
    </div>
    {{-- Questions --}}
    <div class="row justify-content-center">
        <div class="col-md-8">
        	@foreach ($questions as $q)
        		<div class="card">
                	<div class="card-header">
                		<span class="float-left">Asked by: <a class="text-danger" href="{{ $q->user->url }}">{{ $q->user->name }}</a></span>
                		<span class="float-right text-dark">{{ $q->formattedDate() }}</span>
                	</div>
		            <div class="card-body">
		            	<h4><a href="{{ $q->url }}">{{ $q->title }}</a></h4>
		            	<hr>
		              <p>{{ str_limit($q->body, 250) }}</p>
		            </div>
            	</div>
            	<hr>
        	@endforeach
        </div>
    </div>
    {{-- pagination --}}
    <div class="row justify-content-center">
        <div class="col-md-8">
        		{{ $questions->links() }}
        </div>
    </div>
</div>
@endsection
