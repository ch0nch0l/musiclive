@include('admin_panel.layout.header')
@include('admin_panel.layout.navbar')
@include('admin_panel.layout.sidebar')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		
<div class="row">
    @section('body')
        
    @show
    <div class="col-sm-12">
        <p class="back-link">Copy Right of Little Inventory is sksshouvo.inc</p>
    </div>
</div><!--/.row-->
</div>	<!--/.main-->

@include('admin_panel.layout.footer')	