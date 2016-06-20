$("#brand_name").blur(function(){
        brand_name=$("#brand_name").val();
        if(brand_name==''){
            $("#s1").html("<font color='red'>*不能为空</font>");
            return false;
        }else{
             $("#s1").html("");
            return true;
        }
    })
function check_all(){
    brand_name=$("#brand_name").val();
    if(brand_name==''){
        $("#s1").html("<font color='red'>*不能为空</font>");
        return false;
    }else{
        return true;
    }
}

    //分页
function ajax_page(page){
    $.ajax({
        type:"GET",
        url:"brand_list2",
        data:{page:page},
        success:function(msg){
            $("#div2").html(msg)
        }
    })
}