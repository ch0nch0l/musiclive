@extends('admin_panel.main')
        @section('body')    
        <style> 
          .ui-autocomplete {
            position: absolute;
            z-index: 2150000000 !important;
            cursor: default;
            border: 2px solid #ccc;
            padding: 5px 0;
            border-radius: 2px;
            }

        </style>
        <br>
        <div class="col-sm-12">
          <h1>Purchase Items</h1>
          <p>This section is for purchasing items via purchase order to vendors.</p>
         <button class="btn btn-block btn-primary" data-toggle="modal" data-target=".new_purchase_order_modal">Add New Purchase Order</button>       

         {{-- modal starts here --}}
         
        <div class="modal fade new_purchase_order_modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
        <div class="modal-content">
        <div class="modal-header"><h5>Add New Purchase Order</h5>        
        </div>
                 <div class="modal-body">
                    <form action="" method="POST">
                      <div class="container-fluid">
                        <div class="row">
                          <div class="col-sm-6">
                            <label for="po_date" class="form-control">PO Date: </label>
                            <input type="date" class="form-control" id="po_date" name="po_date" placeholder="Select A Date" value="{{date('Y-m-d')}}" >
                            <br>
                            <label for="warehouse_id" class="form-control">Warehouse Name: </label>
                            <select name="warehouse_id" id="warehouse_id" class="form-control">
                            <option value="">-Select Warehouse-</option>
                            @foreach ($warehouse as $wr)
                            <option value="{{$wr->id}}">{{$wr->warehouse_name}}</option>
                            @endforeach
                            
                            </select>
                            <br>
                            <label for="labor_bill" class="form-control">Labor Bill:</label>
                            <input type="text" name="labor_bill" id="labor_bill" class="form-control">
                            </div>

                            <div class="col-sm-6">
                            <label for="vendor_id" class="form-control">Vendor name:</label>
                            <select name="vendor_id" id="vendor_id" class="form-control">
                            <option value="">-Select A Vendor-</option>
                            @foreach ($vendor as $vendor_list)
                            <option value="{{$vendor_list->vendor_id}}">{{$vendor_list->vendor_name}}</option>
                            @endforeach
                            </select> 
                            <br>
                            <label for="payment_terms" class="form-control">Payment Terms: </label>  
                            <select name="payment_terms" id="payment_terms" class="form-control">
                            <option value="">-Select Payment Terms-</option>
                            @forelse ($pt as $pts)
                                <option value="{{$pts->id}}">{{$pts->payment_terms}}</option>
                            @empty
                                
                            @endforelse
                            </select>
                            <br>
                            <label for="transport_bill" class="form-control">Transport Bill: </label>
                            <input type="text" name="transport_bill" id="transport_bill" class="form-control">
                            </div> 

                            <div class="col-sm-12" style="overflow: auto">
                              <table class="table table-responsive table-striped" id="item_table">
                                <thead>
                                  <tr>
                                    <th colspan="6" class="text-center"><h2>Item Details</h2></th>
                                  </tr>
                                <tr>
                                  <th>Item Name</th><th>Item Qty</th><th>Item Rate</th><th>Tax (%)</th><th>Total Amount</th><th>Action</th>
                                </tr>
                              
                              
                               <tr>
                                 <td>
                                  <div class="ui-widget">
                                  <input type="text" name="get_item" id="get_item" class="form-control" onkeyup="search_items(this.value)"></td>
                                  </div> 
                                 <td><input type="text" name="get_qty" id="get_qty" class="form-control" value="1.00" onkeyup="calculate_total_amt()"></td>
                                 <td><input type="text" name="get_rate" id="get_rate" class="form-control" onkeyup="calculate_total_amt()"></td>
                                 <td><input type="text" name="get_tax" id="get_tax" class="form-control" onkeyup="calculate_total_amt()" value="0.00"></td>
                                 <td><input type="text" name="get_total" id="get_total" class="form-control" readonly></td>
                                 <td> <button type="button" class="btn btn-info btn-lg" onclick="add_item()">+</button> </td>
                               </tr>
                              </thead>
                              <tbody>
                              </tbody>
                              <tfoot>
                              <tr>
                                <td colspan="4" class="text-right">Discount</td><td><input type="text" name="discount" id="discount" class="form-control" onkeyup="total_sum()"></td>
                              </tr>
                              <tr>
                                <td colspan="4" class="text-right">Tota Sum Amount</td><td><input type="text" name="all_sum" id="all_sum" class="form-control" value="0.00" readonly></td>
                              </tr>
                              </tfoot>
                              </table>
                            </div>
                        </div>
                      </div>
                    </form>
                <div class="modal-footer">
                <button class="btn btn-danger" data-dismiss="modal" aria-label="Close">Close</button>
                <button class="btn btn-info" id="cancel" type="button" onclick="cancel_order()">Cancel</button>
                <button class="btn btn-warning">Save Order</button>
                <button class="btn btn-success" onclick="confirm_order()">Confirm Order</button>
                </div>
            </div>
          </div>
        </div>
      </div>
      {{-- modal ends here --}}
        </div>
        @section('extra_js')
        
        <script>  
        
        </script>
        
        @endsection
        @endsection
        