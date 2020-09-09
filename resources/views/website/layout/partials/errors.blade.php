@if ($errors->any())
<div class="col-sm-12">
    <div class="row">
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
</div>
          
</div>
@endif