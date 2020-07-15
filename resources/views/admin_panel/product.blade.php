@extends('admin_panel.main')
@section('body')
<div class="col-sm-6">
    <br>
    <table class="table table-hovered table-bordered ">
        <tr>
            <th class="text-center">ID</th>
            <th class="text-center">Product name</th>
            <th class="text-center">Product sub group</th>
        </tr>
        <tr>
          <td class="text-center">AAA</td>
            <td class="text-center">BB</td>
            <td class="text-center">CC</td>
        </tr>
    </table>
</div>
<div class="col-sm-6">
    <br>
    <form action="" method="post">
    <table class="table table-hovered table-bordered ">
        <tr>
            <th class="text-center">Details</th>
            <th class="text-center">Fields</th>
            <th class="text-center">Action</th>
        </tr>
        <tr>
          <td class="text-center">AAA</td>
            <td class="text-center">BB</td>
            <td class="text-center">CC</td>
        </tr>
        
    </table>
    <div class="row">
        <div class="col-sm-6"><button type="submit" class="btn btn-success btn-block">Save</button></div>
        </form>
        <div class="col-sm-6"> <button type="submit" class="btn btn-danger btn-block" >Delete</button></div>

    </div>
    
</div>

@endsection