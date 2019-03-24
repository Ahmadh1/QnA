@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                @include('layouts.msg')
                <div class="card-header">
                	<span class="float-left">
                		<h3>Quote of the Day</h3>
                	</span>
                	<span class="float-right">
					<a href="{{ route('questions.create') }}" class="btn btn-outline-danger">Ask new Question</a>
					</span>
                </div>
                <div class="card-body">
                  <p>"If you work just for money, you'll never make it, but if you love what you're doing and you always put the customer first, success will be yours."</p>
                </div>
            </div>
            <hr>
        </div>
    </div>
    {{-- Questions --}}
    <div class="row justify-content-center">
        <div class="col-md-10">
        	@foreach ($questions as $q)
        		<div class="card">
                	<div class="card-header">
                		<span class="float-left">Asked by <a class="text-danger" href="{{ $q->user->url }}"><b>{{ $q->user->name }}</b></a></span>
                		<span class="float-right text-dark">{{ $q->formattedDate() }}</span>
                	</div>
		            <div class="card-body">
		            	<div class="media">
							<div class="d-flex flex-column counters">
		            		<div class="vote">
		            			<strong>{{ $q->votes }} </strong>{{ str_plural('vote', $q->votes) }}
		            		</div>
		            		<div class="status {{ $q->status }}">
		            			<strong>{{ $q->answers }} </strong>{{ str_plural('answer', $q->answers) }}
		            		</div>
		            		<div class="view">
		            			{{ $q->views . " " . str_plural('view', $q->views) }}
		            		</div>
		            	</div>
	            		<div class="media-body">
		            		<h4><a href="{{ $q->url }}">{{ $q->title }}</a></h4>
		            		<hr>
		            		<p>{{ str_limit($q->body, 250) }}</p>
	            		</div>
		            	</div>
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
@stop
