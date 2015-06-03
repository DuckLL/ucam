item = function ($id,$label,$model){
	$.ajax( {
		url: 'control/gotitem.php',
		type: 'POST',
		data: {
			label:$label,
			model:$model,
			id:$id
		},
		error: function(xhr) {
			alert('Ajax request 發生錯誤');
		},
		success: function(response) {
			if($id==1){
				$('#item1').html(response);
			}
			if($id==2){
				$('#item2').html(response);
			}
		}
	} );
};