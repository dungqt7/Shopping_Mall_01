$('.listsize').click(function(event) {
	 var id = $(this).attr('data-id');
	   $.ajax({
                    url : "xem-size",
                    type : "get",
                    dataType:"text",
                    data : {
                         id: id
                    },
                    success : function (result){
                        $('.xem-size').html(result);
                    }
                });
     event.preventDefault();
  $('#xem-size').modal('show');
});