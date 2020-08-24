// $(document).ready(function ()
//  {
// 	$.ajaxSetup({
// 		headers:{
// 			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
// 		}
// 	});

// 	$('#member').change(function ()
// 	 {
// 		var id=$(this).val();
// 		alert(id);
// 		$.post("/getdepartment",{id:id},function (res)
// 		 {
// 			console.log(res);
// 			$('#department').prop('disabled',false);

// 			var html=`<option value="">Department:</option>`;
// 			$.each(res,function (i,v)
// 			 {
// 				html +=`<option value="${v.id}">
// 						${v.department_name}
// 						</option>`;
// 			})
// 			$('#department').html(html);
// 		})
// 	})
// })