@extends('layouts.userlayout')
@section('headers')
<title>Chat Room </title>
<meta name="description" content="Huge community of designers, developers and creatives ready for your project.">
<meta name="keywords" content="Huge community of designers, developers and creatives ready for your project.">

@endsection
@section('content')

<!-- Dashboard Content
	================================================== -->
<div class="dashboard-content-container" data-simplebar>
	<div class="dashboard-content-inner">

		<!-- Dashboard Headline -->
		<div class="dashboard-headline">
			<h3>Messages</h3>

			<!-- Breadcrumbs -->
			<nav id="breadcrumbs" class="dark">
				<ul>
					<li><a href="#">Home</a></li>
					<li><a href="#">Dashboard</a></li>
					<li>Messages</li>
				</ul>
			</nav>
		</div>

		<div class="messages-container margin-top-0">

			<div class="messages-container-inner">

				<!-- Messages -->
				<div class="messages-inbox">


					<ul>

						@foreach ($chats as $chat)
						<li>
							@if ($chat->from_id != auth()->user()->id)
							<a href="/messages/{{$users->where('id',$chat->from_id)->first()->name }}">

								<div class="message-by">
									<div class="message-by-headline">

										@if ($chat->from_id != auth()->user()->id)
										<h5>{{$users->where('id',$chat->from_id)->first()->name  }}</h5>


										@else
										<h5>{{$users->where('id',$chat->to_id)->first()->name  }}</h5>

										@endif
										<span>{{ $chat->updated_at->diffForHumans() }}</span>
									</div>
									<p>{{ $chat->last_message }}</p>
								</div>
							</a>
							@else

							<a href="/messages/{{$users->where('id',$chat->to_id)->first()->name  }}">

								<div class="message-by">
									<div class="message-by-headline">

										@if ($chat->from_id != auth()->user()->id)
										<h5>{{$chat->from_id  }}</h5>

										@else
										<h5>{{$users->where('id',$chat->to_id)->first()->name  }}</h5>

										@endif
										<span>{{ $chat->updated_at->diffForHumans() }}</span>
									</div>
									<p>{{ $chat->last_message }}</p>
								</div>
							</a>

							@endif




						</li>

						@endforeach





					</ul>
				</div>
				<!-- Messages / End -->

				<!-- Message Content -->

				@if ($to !=null)
				<div class="message-content">

					<div class="messages-headline">
						<h4>{{$to->name  }}</h4>
						<a href="#" class="message-action"><i class="icon-feather-trash-2"></i> Delete Conversation</a>
					</div>

					<!-- Message Content Inner -->
					<div class="message-content-inner">

						@foreach ($messages as $message)

						@if ($message->from_id==auth()->user()->id)
						<div class="message-bubble me">
							<div class="message-bubble-inner">
								<div class="message-avatar"><img src="images/user-avatar-small-01.jpg" alt="" /></div>
								<div class="message-text">
									<p>{{ $message->content }}</p>
								</div>
							</div>
							<div class="clearfix"></div>
						</div>
						@else
						<div class="message-bubble">
							<div class="message-bubble-inner">
								<div class="message-avatar"><img src="images/user-avatar-small-02.jpg" alt="" /></div>
								<div class="message-text">
									<p>{{ $message->content }}</p>
								</div>
							</div>
							<div class="clearfix"></div>
						</div>
						@endif



						@endforeach












					</div>
					<!-- Message Content Inner / End -->

					<!-- Reply Area -->
					<form action="/message/create/{{ $to->id }}" method="post">
						@csrf
						<div class="message-reply">
							<textarea cols="1" rows="1" name="message" placeholder="Your Message"
								data-autoresize></textarea>
							<button class="button ripple-effect">Send</button>
						</div>
					</form>


				</div>
				@endif

				<!-- Message Content -->

			</div>
		</div>
		<!-- Messages Container / End -->




		<!-- Footer -->
		<div class="dashboard-footer-spacer"></div>
		<div class="small-footer margin-top-15">
			<div class="small-footer-copyrights">
				© {{ date("Y") }} <strong>Ajira</strong>. All Rights Reserved.
			</div>
			<ul class="footer-social-links">
				<li>
					<a href="#" title="Facebook" data-tippy-placement="top">
						<i class="icon-brand-facebook-f"></i>
					</a>
				</li>
				<li>
					<a href="#" title="Twitter" data-tippy-placement="top">
						<i class="icon-brand-twitter"></i>
					</a>
				</li>
				<li>
					<a href="#" title="Google Plus" data-tippy-placement="top">
						<i class="icon-brand-google-plus-g"></i>
					</a>
				</li>
				<li>
					<a href="#" title="LinkedIn" data-tippy-placement="top">
						<i class="icon-brand-linkedin-in"></i>
					</a>
				</li>
			</ul>
			<div class="clearfix"></div>
		</div>
		<!-- Footer / End -->

	</div>
</div>
<!-- Dashboard Content / End -->
@endsection