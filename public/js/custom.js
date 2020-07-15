$('#calendar').datepicker({
		});

!function ($) {
    $(document).on("click","ul.nav li.parent > a ", function(){          
        $(this).find('em').toggleClass("fa-minus");      
    }); 
    $(".sidebar span.icon").find('em:first').addClass("fa-plus");
}

(window.jQuery);
	$(window).on('resize', function () {
  if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
})
$(window).on('resize', function () {
  if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
})

$(document).on('click', '.panel-heading span.clickable', function(e){
    var $this = $(this);
	if(!$this.hasClass('panel-collapsed')) {
		$this.parents('.panel').find('.panel-body').slideUp();
		$this.addClass('panel-collapsed');
		$this.find('em').removeClass('fa-toggle-up').addClass('fa-toggle-down');
	} else {
		$this.parents('.panel').find('.panel-body').slideDown();
		$this.removeClass('panel-collapsed');
		$this.find('em').removeClass('fa-toggle-down').addClass('fa-toggle-up');
	}
})

var count = 0;
        function form_validation(){
          var item_name = $("#get_item")
          var item_qty = $("#get_qty");
          var item_rate = $("#get_rate");
          var tax = $("#get_tax");
          var total_amt = $("#get_total");

          if(item_name.val()=="" || item_name.val()==null) {
            alert("Item Name is invalid");
            return false;
          }
          if(item_qty.val()==0 || item_qty.val()=="" || item_qty.val()==null){
            alert("Item Qty is invalid");
            return false;
          }
          if(item_rate.val()=="" || item_rate.val()==0 || item_rate.val()==null){
            alert("Item Rate is Invalid");
            return false;
          }
          return true;
        }
          function search_items(that){
            $.ajax({
              url:"../ajax/get_all_item",
              method:"get",
              dataType:"json",
              data:{
                item_name : that
              },
              success:function(data, msg){
              var availableTags = data;
              $( "#get_item" ).autocomplete({
                source: availableTags
              });
              }
            })
          }
        function reset_function(){
          var item_name = $("#get_item")
          var item_qty = $("#get_qty");
          var item_rate = $("#get_rate");
          var tax = $("#get_tax");
          var total_amt = $("#get_total");
          item_name.val("");
          item_qty.val("1.00");
          item_rate.val("");
          tax.val("0.00");
          total_amt.val("");
        }

        function calculate_total_amt(){
          var item_qty = $("#get_qty");
          var item_rate = $("#get_rate");
          var tax = $("#get_tax");
          var amt_wo_tax = item_qty.val()*item_rate.val();
          var amt_w_tax = (amt_wo_tax*tax.val())/(100);
          var full_calculation = amt_wo_tax+amt_w_tax;
          $("#get_total").val(full_calculation);
        }

        function total_sum(){
          var all_sum = 0;
          var discount = $("#discount");
          $(".all_total_amt").each(function(){
            all_sum+=parseInt($(this).html());
            });
          if(discount.val()>0){
            all_sum = all_sum-discount.val();
          }
          $("#all_sum").val(all_sum);
        }

        function add_item(){
          var item_name = $("#get_item")
          var item_qty = $("#get_qty");
          var item_rate = $("#get_rate");
          var tax = $("#get_tax");
          var total_amt = $("#get_total");
          var text = "";
          count++;
          if(form_validation()==true){
          $.ajax({
            url:"ajax/add_po_item",
            method:"POST",
            dataType:"json",
            data:{
              po_date:$("#po_date").val(),
              vendor_id:$("#vendor_id").val(),
              warehouse_id : $("#warehouse_id").val(),
              
            },
            success:function(data, msg){
              text+="<tr class='item_row_"+count+"' id='table_rows'><td>"+item_name.val()+"</td><td>"+item_qty.val()+"</td><td>"+item_rate.val()+"</td><td>"+tax.val()+"%</td><td class='all_total_amt'>"+total_amt.val()+"</td><td><button type='button' class='btn btn-lg btn-danger' onclick='subtract_item("+count+")'><span class='fa fa-trash'></span></button></td></tr>";
              $("tbody").append(text);
              total_sum();
              reset_function();
            }
          });
          
       
        }
        }

        function subtract_item(countable){
        $(".item_row_"+countable).remove();
        }

        function reset_initial_part(){
          var vendor = $("#vendor_id");
          var warehouse = $("#warehouse_id");
          var payment_terms = $("#payment_terms");
          var labor_bill = $("#labor_bill");
          var transport_bill = $("#transport_bill");
          vendor.html("");
          warehouse.html("");
          payment_terms.html("");
          labor_bill.html("");
          transport_bill.html("");
        }
        function reset_item_table(){
        $("tbody").html("");
        $("#discount").val("0.00");
        $("#all_sum").val("0.00");
        }
        function cancel_order(){
        reset_initial_part(); 
        reset_function();
        reset_item_table();
        }
