@if ($errors->any())
<div class="col-sm-12">
    <div class="row">
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
</div>
          
</div>
@endif