$('.xoasize').click(function(event) {
  var id = $(this).attr('data-id');
	
	 $.ajax({
                    url : "sua-size?id="+id,
                    type : "get",
                    dataType:"text",
                  
                    success : function (result){
                        $('.sua-size').html(result);
                    }
                });
	 event.preventDefault();
  $('#sua-size').modal('show');
});