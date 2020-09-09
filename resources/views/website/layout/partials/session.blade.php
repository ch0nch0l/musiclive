 @if (session()->has('message'))
<div class="col-sm-12">
  <div class="row">
    <div class="alert alert-success"> {{session()->get('message')}}
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
  </div>

</div>
@endif