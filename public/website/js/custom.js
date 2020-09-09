function load_page(url){
    $.ajax({
        url:"page/"+url,
        method:"get",
        success:function(data, msg){
            console.log(msg);
        $("#main_site").html(data);
        }
    })
}