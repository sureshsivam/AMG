
$("#date1").datepicker({
	dateFormat: 'yy-mm-dd',
	defaultDate: new Date()	
});



			function findTotalHrs(){
				var start1 = document.getElementById("intimeH").value;
				var start2 = document.getElementById("intimeM").value;
				var start = start1+':'+start2;
				var end1 = document.getElementById("outtimeH").value;
				var end2 = document.getElementById("outtimeM").value;
				var end = end1+':'+end2;
				if(parseInt(start1)< parseInt(end1)){
					start = start.split(":");
				    end = end.split(":");
				    var startDate = new Date(0, 0, 0, start[0], start[1], 0);
				    var endDate = new Date(0, 0, 0, end[0], end[1], 0);if(startDate<endDate){
				    	var diff = endDate.getTime() - startDate.getTime();
						    
					    var hours = Math.floor(diff / 1000 / 60 / 60);
					    diff -= hours * 1000 * 60 * 60;
					    var minutes = Math.floor(diff / 1000 / 60);

					    //return (hours <= 9 ? "0" : "") + hours + ":" + (minutes <= 9 ? "0" : "") + minutes;
					    
						document.getElementById("total").value=(hours <= 9 ? "0" : "") + hours + ":" + (minutes <= 9 ? "0" : "") + minutes+":00";
						
						    }
					    else{
							document.getElementById("total").value="00:00:00";
						}
						
					}
				else{
					document.getElementById("total").value="00:00:00";
				}
			}
			
	
			function enableCol(){
				document.getElementById('row1').style.display="none";
				document.getElementById('reset').style.display="none";
				document.getElementById('update').style.display="";
				document.getElementById('row2').style.display="";
				document.getElementById('col1').style.display="";
				document.getElementById('col2').style.display="";
				document.getElementById('col3').style.display="";
				document.getElementById('col4').style.display="";
				document.getElementById('col5').style.display="";
				document.getElementById('col6').style.display="";
				document.getElementById('col7').style.display="";
				document.getElementById('col8').style.display="";
						
			}
				
			function update_param(){
				var start1 = document.getElementById("intimeH").value;
				var start2 = document.getElementById("intimeM").value;
				var start = start1+':'+start2+':00';
				var end1 = document.getElementById("outtimeH").value;
				var end2 = document.getElementById("outtimeM").value;
				var end = end1+':'+end2+':00';
				var ot1 = document.getElementById("otH").value;
				var ot2 = document.getElementById("otM").value;
				var oth = ot1+':'+ot2+':00';
				var l1 = document.getElementById("lunchH").value;
				var l2 = document.getElementById("lunchM").value;
				var lh = l1+':'+l2+':00';
				var total=document.getElementById("total").value;

				if(start!="00:00:00" && total != '00:00:00' && lh!="00:00:00"){
				
				$.post(site_url+"/general/update_param/",{intime:start,outtime:end,tot:total,ot:oth,lunch:lh},function(data){
									window.location.reload();
					});
				}
				else{
					document.getElementById("error").style.display="";
					
				}
			
			}
				
				
			
			
			function enableCol_details(){
			
				document.getElementById("modify").style.display="none";
				document.getElementById("update").style.display="";
				document.getElementById("cur_pwd").style.display="";
				document.getElementById("row1").style.display="";
				document.getElementById("row2").style.display="";
					
				document.getElementById("cur_pwd").value="";
				document.getElementById("cur_pwd").removeAttribute("readonly",0);
			//	document.getElementById("name").removeAttribute("readonly",0);
				document.getElementById("phone").removeAttribute("readonly",0);
				document.getElementById("mail").removeAttribute("readonly",0);
							
			}
			
			function update_details(){
				var pwd=document.getElementById("pwd_1").value;
				var cpwd=document.getElementById("pwd_2").value;
				
				if(pwd == cpwd){
					var data={};
					data["id"]=document.getElementById("u_id").value;
					data["pwd"]=document.getElementById("pwd_1").value;
						data["name"]=document.getElementById("name").value;				
					 data["phone"]=document.getElementById("phone").value;				
					 data["mail"]=document.getElementById("mail").value;				
			
					$.post(site_url+"/logincheck/update_details/",data,function(result){
						window.location.reload();
						//alert(result);
					});
				}
				else{
					document.getElementById("error").style.display="";
				}
				
			}
			
			
			function show_holidays(){
				var yr=document.getElementById('year').value;
				if(yr!=""){

					$.post(site_url+"/general/show_holidays",{year:yr},function(data){
						//alert(data);
								$("#contentData").html("");
								$("#contentData").append(data);
					});
				}
			
			}
			
			function show_holidays_emp(){
				var yr=document.getElementById('year').value;
				if(yr!=""){

					$.post(site_url+"/general/show_holidays_emp",{year:yr},function(data){
						//alert(data);
								$("#contentData").html("");
								$("#contentData").append(data);
					});
				}
			
			}
			
			
			function add_holiday(){	
				
				var date1=document.getElementById('date1').value;
				var desc1=document.getElementById('desc1').value;
					
				if(desc1!="" && date1!=""){

					$.post(site_url+"/general/add_holiday",{desc:desc1,date:date1},function(data){
						//alert(data);	
						show_holidays();
						document.getElementById('date1').value="";
						document.getElementById('desc1').value="";
			
					});
					
					
				}
			
			}
			
			function remove_holiday(id1){	
			
				if(id1!=""){
					$.post(site_url+"/general/remove_holiday",{id:id1},function(data){
						//alert(data);			
						show_holidays();
					});
				
				}
			
			}
			