$('.list-factory').click(function(event) {
	 var id = $(this).attr('data-id');
	   $.ajax({
                    url : "xem-factory",
                    type : "get",
                    dataType:"text",
                    data : {
                         id: id
                    },
                    success : function (result){
                        $('.viewfactory').html(result);
                    }
                });
     event.preventDefault();
  $('#viewfactory').modal('show');
});