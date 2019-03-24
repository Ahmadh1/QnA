@extends('layouts.app')
@section('content')
	<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
					<span class="float-left">
                		<h3>Ask new Question</h3>
                	</span>
                	<span class="float-right">
					<a href="{{ route('questions.index') }}" class="btn btn-outline-dark">Back to questions</a>
					</span>
                </div>

                <div class="card-body">
                    <form action="{{ route('questions.store') }}" method="POST">
                    	@csrf
                    	<div class="form-group">
                    		<label for="title">Title</label>
                    		<input type="text" name="title" class="form-control{{ $errors->has('title') ? ' is-invalid ' : '' }}" id="title" value="{{ old('title') }}">
                    		@if ($errors->has('title'))
                    			<div class="invalid-feedback">
                    				<strong>{{ $errors->first('title') }}</strong>
                    			</div>
                    		@endif
                    	</div>
                    	<div class="form-group">
                    		<label for="body">Explain Problem</label>
                    		<textarea name="body" id="body" rows="5" class="form-control{{ $errors->has('body') ? ' is-invalid ' : '' }}">{{ old('body') }}</textarea>
                    		@if ($errors->has('body'))
                    			<div class="invalid-feedback">
                    				<strong>{{ $errors->first('body') }}</strong>
                    			</div>
                    		@endif
                    	</div>
                    	<div class="form-group"><button class="btn btn-outline-danger form-control" type="submit">Ask Question</button></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@stop