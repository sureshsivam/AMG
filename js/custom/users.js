$("#doj").datepicker({
	dateFormat: 'yy-mm-dd',		
	defaultDate: new Date()		
});


function user_form(){
	var u_name=document.getElementById("u_name").value;
	var username=document.getElementById("username").value;
	var passwd=document.getElementById("passwd").value;
	var cpasswd=document.getElementById("cpasswd").value;
	var ph_num=document.getElementById("ph_num").value;
	var userrole=document.getElementById("userrole").value;
	if(u_name=="")
		{
		alert("Please Enter Name of User");
		}else if(username==""){
		alert("Please Enter Username");
		}
		else if(passwd=="")
	   {
		   alert("Please Enter Password");
		}
	   else if(cpasswd=="")
	   {
		   alert("Please Enter Confirm Password");
		}
	   else if(isNaN(ph_num)&&(ph_num!=''))
	   {		   alert("Please Check Phone Number");
		}
	   else if(passwd!=cpasswd)
	   {
		   alert("Passwords do not match");
		}
	    else
		{
		document.forms['userform'].submit();
		}
}

function check_username(){
	var username=document.getElementById("username").value;
	$.get(site_url + "/users/check_username/"+username,function(data) {

		if(data=='E'|| username==''){
			document.getElementById('correct').style.display='none';
			document.getElementById('incorrect').style.display='';
			document.getElementById("button").style.display='none';
		}
		else{
			document.getElementById('incorrect').style.display='none';
			document.getElementById('correct').style.display='';	
			document.getElementById("button").style.display='';
		}

	});
}

function check_passwd(){
	var passwd=document.getElementById("passwd").value;
	var cpasswd=document.getElementById("cpasswd").value;
	
	if(passwd==cpasswd){
		document.getElementById("passwd_match").innerHTML="Passwords Match";
	}
	else{
		document.getElementById("passwd_match").innerHTML="Passwords do not Match";
		}
}

function updateuser(user_id)
{
	
	updatepop=window.open("","","menubar=no, location=no, status=no, titlebar=yes, width=600, height=520,toolbar=no,addressbar=yes");
			var generatedContent="<html><head><title>Update Customer Info</title><link rel='stylesheet' media='screen,projection' type='text/css' href='../../css/mystyle.css' /></head>"+
			 "<body background='../../images/bg-radial-gradient.gif' bgcolor=''><div style='height:auto; background:#CEF6F5;margin:20px 0px 0px 40px;width:80%;border:0px solid black ;border-radius:0px;'><p style='height:10px;padding:0px 0px 0px 20px;' align='center'><span style='font-weight:bolder;font-size:13pt;'>User Information </span></p>"+
		"<hr width='100%'>"+
		"<div id='myuser' style='margin:20px 20px 20px 40px;'><p>Please wait while Loading....</p></div>  <div style='margin-left:100px;margin-bottom:30px'><input style='margin-right:25px;' class='button' type=\"button\" id='update' value='Update' onclick='opener.updateuserFinish()'/><input class='button' type=\"button\" id='close' value='Close' onclick='javascript:self.close()'/></div></body</html>";
			 updatepop.document.write(generatedContent);   
			 $.get(site_url + "/users/fetch_user_info/"+user_id,function(data){	
		 updatepop.document.getElementById('myuser').innerHTML=data;
		}); 
}

function deleteuser(user_id1,name){
	//alert(user_id);
	var ask = confirm("Do you want to Remove this User - "+name+" ?");
	if(ask==true){	
		$.post(site_url + "/users/remove_user_info/",{user_id:user_id1},function(data){	
		window.location.reload();
		}); 
	}
}


function updateuserFinish(){
	var u_name=updatepop.document.getElementById("u_name").value;		
	var username=updatepop.document.getElementById("username").value;
	var passwd=updatepop.document.getElementById("passwd").value;
	var cpasswd=updatepop.document.getElementById("cpasswd").value;
	var ph_num=updatepop.document.getElementById("ph_num").value;
	var userrole=updatepop.document.getElementById("userrole").value;
	var mail=updatepop.document.getElementById("mail").value;
	var to_id=updatepop.document.getElementById("timeoffice_id").value;
	if(passwd!=cpasswd){
		alert("Passwords do not match");
		return false;
	}
	
	var collect={};
	collect["u_name"]=u_name;
	collect["username"]=username;
	collect["passwd"]=passwd;
	collect["ph_num"]=ph_num;
	collect["userrole"]=userrole;
	collect["mail"]=mail;
	
	
	   $.post(site_url+"/logincheck/updateuser",collect,function(data){
		 
		   updatepop.document.getElementById('myuser').innerHTML=data;
		   updatepop.document.getElementById('update').style.display="none";
		   updatepop.document.getElementById('close').style.marginLeft="80px";
		   window.location.reload();	
	    });
	}

String.prototype.trim = function()
{return ((this.replace(/^[\s\xA0]+/, "")).replace(/[\s\xA0]+$/, ""));};

String.prototype.startsWith = function(str)
{return (this.match(str)==str);};

String.prototype.endsWith = function(str)
{return (this.match(str+"$")==str);};

function searchbyname()
{
	var user=document.getElementById('user').value;
	filterTableByname(user);
}
function filterTableByname(str){
	
	str.trim();
	 var rowid, colid, rowc,vbid;
	  rcount=document.getElementById("hrowcount");
	  rowc=rcount.value;
	  
	  for(var i=1;i<=rowc;i++){
	    rowid="row"+i;
	    colid="name"+i;
	    var lstr=(str.toString()).toLowerCase();
	    displayRowStartsWith(rowid,colid,lstr);
	  }
	}
function displayRowStartsWith(rowid,colid,str){
	var row = document.getElementById(rowid);
      var searchcol= document.getElementById(colid);
     var colstr=searchcol.value;
     var lcolstr=(colstr.toString()).toLowerCase();
      if (lcolstr.startsWith(str))
    	  row.style.display = '';
      else
          row.style.display = 'none';
}


				
				function get_team_leader(obj)
				{
					var select=document.getElementById('L1');
					var select2=document.getElementById('L2');
					if(select && select2){
						var length=select.length;
						var length2=select2.length;
						for (i=0;i<=length;i++) {
						select.remove(select.selectedIndex);
						}
						
						/*	for (i=0;i<=length;i++) {
						select2.remove(select2.selectedIndex);
						alert(select.selectedIndex);
						alert(select.length);
						select.remove(i);
						}*/
					}
					
					$.post(site_url+"/users/get_team_leader",{dept:obj},function(data){
				
						var leaderlist=data.split('!');
						for(i=1;i<leaderlist.length;i++)
						{
						var opt = document.createElement("option");
						if(document.getElementById("L1")){
							document.getElementById("L1").options.add(opt);
							opt.text = leaderlist[i];
						    opt.value = leaderlist[i];
							
							}
							}
					});
					
					Add_admin_option();
			}

				
				
					function Add_admin_option(){
						var opt = document.createElement("option");
						document.getElementById("L1").options.add(opt);
						opt.text = "MD";
					    opt.value = "MD";
				
					}