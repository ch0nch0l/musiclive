
	@extends('admin_panel.main')
	@section('body')
	<div class="col-sm-12">
			<div class="row">
				<div class="col-lg-12">
					<h1 class="page-header">Dashboard</h1>
				</div>
			</div><div class="panel panel-container">
				<div class="row">
					<div class="col-xs-6 col-md-3 col-lg-3 no-padding">
						<div class="panel panel-teal panel-widget border-right">
							<div class="row no-padding"><em class="fa fa-xl fa-globe color-blue"></em>
								<div class="large">@php
									$countries = \DB::table('countries')->get();
								@endphp
								{{$countries->count()}}</div>
								<div class="text-muted">Countries</div>
							</div>
						</div>
					</div>
					<div class="col-xs-6 col-md-3 col-lg-3 no-padding">
						<div class="panel panel-blue panel-widget border-right">
							<div class="row no-padding"><em class="fa fa-xl fa-comments color-orange"></em>
								<div class="large">0</div>
								<div class="text-muted">Comments</div>
							</div>
						</div>
					</div>
					<div class="col-xs-6 col-md-3 col-lg-3 no-padding">
						<div class="panel panel-orange panel-widget border-right">
							<div class="row no-padding"><em class="fa fa-xl fa-users color-teal"></em>
								<div class="large">
									@php
														$count_user = \DB::table('users')->get();
													@endphp
													{{$count_user->count()}}
													
	
								</div>
								<div class="text-muted">Users</div>
							</div>
						</div>
					</div>
					<div class="col-xs-6 col-md-3 col-lg-3 no-padding">
						<div class="panel panel-red panel-widget ">
							<div class="row no-padding"><em class="fa fa-xl fa-search color-red"></em>
								<div class="large">0</div>
								<div class="text-muted">Page Views</div>
							</div>
						</div>
					</div>
				</div><!--/.row-->
			</div>
		</div>
	@endsection