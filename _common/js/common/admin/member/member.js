
jQuery(document).ready(function(){
	$(".member_row").click(function(e){
		var row_index = $(this).attr('seq');
		
		$.ajax({
            url:'/admin/util/member/',
            success:function(data){
                $('#time').append(data);
            }
        })
	});
});