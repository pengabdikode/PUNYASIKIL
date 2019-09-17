@extends('site.app')
@section('title', 'Contact Us')
@section('content')

<div class="container">
	<h1 class="mb-2 text-center">Contact Us</h1>
	
	@if ($message = Session::get('success'))
      <div class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button> 
          <strong>{{ $message }}</strong>
      </div>
	@endif
	
	
	<div class="col-12 col-md-6">
		<form class="form-horizontal" method="POST" action="{{ route('contact.store') }}">
			{{ csrf_field() }} 
			<div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
			<label for="Name">Name: </label>
			<input type="text" class="form-control" id="name" placeholder="Your name" name="name" required>
			@if ($errors->has('name'))
				<span class="help-block">
					<strong>{{ $errors->first('name') }}
					</strong>
				</span>
			@endif
		</div>

		<div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
			<label for="email">Email: </label>
			<input type="text" class="form-control" id="email" placeholder="john@example.com" name="email" required>
			@if ($errors->has('email'))
				<span class="help-block">
					<strong>{{ $errors->first('email') }}
					</strong>
				</span>
			 @endif
		</div>

		<div class="form-group {{ $errors->has('message') ? ' has-error' : '' }}">
			<label for="message">Message: </label>
			<textarea type="text" class="form-control luna-message" id="message" placeholder="Type your messages here" name="message" style="width: 100%; height: 150px;" required></textarea>
			@if ($errors->has('message'))
				<span class="help-block">
					<strong>{{ $errors->first('message') }}</strong>
				</span>
			@endif
		</div>

			<div class="form-group">
				<button type="submit" name="btnSubmit" class="btn btn-primary btn-round btn-sm" value="Send">Send Message</button>
			</div>
		</form>
	</div>
 </div> <!-- /container -->
@endsection