
	function edit(id){
		window.location.assign("http://localhost:8080/nckh2017/"+id+".php");
	}
	
  function deleteObject(id,link){
		var selected= [];
			var checked = $("input:checked").each(function(){
				selected.push($(this).val());
			});
			 var myarray = [];
			var myJSON = "";

			for (var i = 0; i < selected.length; i++) {

				var item = {
					"label": i,
					"value": selected[i]
				};

				myarray.push(item);
			} 
			myJSON = JSON.stringify({myarray: myarray});
			$.ajax({
			 type: 'POST',
			 url: 'http://localhost:8080/nckh2017/delete.php',
			 data: {json:myJSON,pid:id}, 
			 success: function(data){ 	            	  
				   if(data!="1"){
					   $("#delete_failed").css("display","block");
					   $("#failed_content").html("Xóa thất bại");
					   $("#success_content").css("display","none");
				   }else
				   {
					   $("#delete_success").css("display","block");
					   $("#success_content").html("Xóa thành công");
					   $("#delete_failed").css("display","none");
						   var xmlhttp = new XMLHttpRequest();
						xmlhttp.onreadystatechange = function() {
					    if (this.readyState == 4 && this.status == 200) {
					      var  json = this.responseText;
					      if(json){
					      	var obj =JSON.parse(json);
					        var i;
					        var data="";
					        
					        for(i=0;i<obj.length;i++){
					        	if(id=="delac"){
					        	 data+="<tr role='row'><td class='sorting_1'>";
					        	 data+="<div class='icheckbox_flat-blue' aria-checked='false' aria-disabled='false' style='position: relative;'>";
					        	 data+="<input type='checkbox' value="+obj[i]["taikhoan_id"]+" style='position: absolute; opacity: 0;'>";
					        	 data+="<ins class='iCheck-helper' style='position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;'></ins></div></td>";
					        	 data+= "<td><a href='#'>"+obj[i]["hodem"]+"</a></td>";
					        	 data+="<td>"+obj[i]["taikhoan"]+"</td>";
					        	 data+="<td><a href='#'>"+obj[i]["ten"]+"</a></td>";
					        	 data+="<td>"+obj[i]["diachi"]+"</td>";
					        	 data+="<td>"+obj[i]["phanquyen"]+"</td></tr>" ;
					        	}
					        	if (id=="delbvs") {
					        		data+="<tr role='row'><td class='sorting_1'><input type='checkbox' value="+obj[i]["benhvien_id"]+"></td>;"
					        		data+="<td><a href='#'>"+ obj[i]["tenbenhvien"]+"</a></td>";
					        		data+="<td>"+obj[i]["diachi"]+"</td>";
					        		data+="<td><a href='#'>"+obj[i]["mota"]+"</a></td>";
					        		data+="<td>"+obj[i]["danhgia"]+"</td></tr>";
					        	}
					        }
					        

					        document.getElementById('tbody').innerHTML=data;
					    }else{
					    		document.getElementById('tbody').innerHTML="";
					    }
					    }
					};
					xmlhttp.open("GET", "getajax.php?act="+id, true);
					xmlhttp.send();
					}
				}
			});
				   	
			
		}