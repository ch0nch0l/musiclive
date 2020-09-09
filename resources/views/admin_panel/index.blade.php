
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
							<div class="row no-padding"><em class="fa fa-xl fa-headphones color-blue"></em>
								<div class="large">@php
									$countries = \DB::table('musics')->groupBy('album_name')->get();
								@endphp
								{{$countries->count()}}</div>
								<div class="text-muted">TOTAL Albums</div>
							</div>
						</div>
					</div>
					<div class="col-xs-6 col-md-3 col-lg-3 no-padding">
						<div class="panel panel-blue panel-widget border-right">
							<div class="row no-padding"><em class="fa fa-xl fa-music color-orange"></em>
								<div class="large">
									@php
									$musics = \DB::table('musics')->get();
									@endphp
									{{$musics->count()}}</div>
								<div class="text-muted">Total Musics</div>
							</div>
						</div>
					</div>
					<div class="col-xs-6 col-md-3 col-lg-3 no-padding">
						<div class="panel panel-orange panel-widget border-right">
							<div class="row no-padding"><em class="fa fa-xl fa-users color-teal"></em>
								<div class="large">
									@php
														$count_user = \DB::table('users')->count();
													@endphp
													{{$count_user}}
													
	
								</div>
								<div class="text-muted">Users</div>
							</div>
						</div>
					</div>
					<div class="col-xs-6 col-md-3 col-lg-3 no-padding">
						<div class="panel panel-red panel-widget ">
							<div class="row no-padding"><em class="fa fa-xl fa-cogs color-red"></em>
								@php
									$pkg = \DB::table('plans')->count();
								@endphp
								<div class="large">{{$pkg}}</div>
								<div class="text-muted">Total Packages</div>
							</div>
						</div>
					</div>
				</div><!--/.row-->
			</div>
		</div>
	@endsection