$(document).ready(function () {
	$.ajaxSetup({
		headers: {
			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		}
	});

	$("#member").change(function(){
		var id=$(this).val();
		//alert(id);
		$.post("/getdep",{id:id},function(res){
			console.log(res);
			$("#dep").prop('disabled',false);

			var html = `<option value="">Dep</option>`;
			$.each(res,function(i,v){
				html +=`<option value="${v.id}">
						${v.name}
						</option>`;
			})

			$('#dep').html(html);
		})
	})
})