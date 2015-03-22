
<!doctype html>
<html>
<head>
<link href="e_css/style.css" rel='stylesheet' type='text/css' />
<!-- .............. -->
<link href="../css/style.css" rel="stylesheet" type="text/css">
<link href="../assets/css/style.css" rel="stylesheet" />
<link href="../css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="../css/font-awesome.css" rel="stylesheet" type="text/css">
<link href="../css/table.css" rel="stylesheet" type="text/css">
	<!--DatePicker Css-->
 <link rel="stylesheet" href="../CSS/jquery-ui.css">
	<!--DatePicker Css-->

<script src="../js/jquery.min.js"></script>
<script src="../js/bootstrap.min.js" type="text/javascript"></script>

	<!--DatePicker js-->
<script src="../js/jquery-ui.js"></script>
<!--  -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<script src="js/jquery.min.js"></script>
<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
			});
		});
	</script>
<!-- grid-slider -->
<script type="text/javascript" src="js/jquery.mousewheel.js"></script>
<script type="text/javascript" src="js/jquery.contentcarousel.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="../js/exer_alarm.js"></script>

<!-- //grid-slider -->
</head>
<body>
 <!-- start header_top -->
 <div class="header">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-sm-3 col-md-3 col-xs-12 hidden-xs">
        <div class="logo"> <a href="#"><img src="../images/logo.png" class="img-responsive" alt=""/></a> </div>
      </div>
      <div class="col-lg-8 col-sm-9 col-md-9 col-xs-12 no-padding">
        <nav class="navbar navbar-default bg" role="navigation"> 
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
          </div>
          
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
              <li class="active"><a href="#">Medicine Assistant</a></li>
              <li class="active"><a href="#">Exercise Assistant</a></li>
              <li class="active"><a href="#">Food Assistant</a></li>
              <li class="active"><a href="#">Social Activities</a></li>
              <li class="active"><a href="#">Account</a></li>
            </ul>
          </div>
          <!-- /.navbar-collapse --> 
          
        </nav>
      </div>
      <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12 hidden-lg hidden-sm hidden-md">
        <div class="logo"> <a href="#"><img src="../images/logo.png" class="img-responsive"  alt=""/></a> </div>
      </div>
    </div>
 </div>
</div>
 
          <!-- /.navbar-collapse --> 
	<div class="header1">
	   <div class="container">
		  <div class="header-text">
			<h1>WELCOME </h1>
			<h2>DIET ASSISTANCE IS HERE </h2>
			<br>
			<br>

			<div class="banner_btn"  >
				
				<a  data-toggle="modal" data-target="#myModal1 " href="#">Calorie</a>
				<a href="#">Recipes</a>
				
			</div>
		  </div>
		  
	 <div class="col-lg-12 contact-form">
      <div class="clearfix"></div>
      <!-- Modal -->
	  <script type="text/javascript">
function caldci()
{
   
     var age = document.dci.age.value;	//age in years
     var height = document.dci.height.value;
     var weight = document.dci.weight.value;
     var wkg = document.dci.wkg.value; //weight in pounds
     var hcm = document.dci.hcm.value;	//height in inches
     var esel = document.dci.esel.value; //activity levels
     var sex = document.dci.sex.value;	
     

     var ret="";	 

	 for( i = 0; i < document.dci.sex.length; i++ )
	 {
		if( document.dci.sex[i].checked == true )
		sex = document.dci.sex[i].value;
	 }
	 

	//formulas
	 if (age=="" || weight=="" || height=="")
	 {return;}
	 else
	 {
	     if (sex == "female")
		 {
					   
	         ret = 655 + 4.35 * weight * wkg + 4.7 * height * hcm - 4.7 * age;
		 }
		 else if (sex == "male")
	         ret = 66 + 6.23 * weight * wkg + 12.7 * height * hcm - 6.8 * age;
		
		 ret = ret * esel;
		 
		 ret = ret.toFixed(2);

		 document.dci.res.value=ret;
	 }
}

function isNum(args)
{
	args = args.toString();

	if (args.length == 0)
	return false;

	for (var i = 0;  i<args.length;  i++)
	{
		if ((args.substring(i,i+1) < "0" || args.substring(i, i+1) > "9") && args.substring(i, i+1) != ".")
		{
			return false;
		}
	}

	return true;
}

function dcicheck(p)
{
     var age = document.dci.age.value;
     var height = document.dci.height.value;
     var weight = document.dci.weight.value;
	 //alert(a);
 	if (p == "1" && !isNum(age))
	{
		  age = a.substring(0,a.length-1);
		  document.dci.age.value = age;
		  return;	   
	}
 	if (p == "2" && !isNum(weight))
	{
		  weight = weight.substring(0,weight.length-1);
		  document.dci.weight.value = weight;
		  return;	   
	}
 	if (p == "3" && !isNum(height))
	{
		  height = height.substring(0,height.length-1);
		  document.dci.height.value = height;
		  return;	   
	}
}

function dciclear()
{
     document.dci.age.value = '';
     document.dci.height.value = '';
     document.dci.weight.value = '';
     document.dci.res.value = '';
	 document.dci.esel.options[0].selected = true;
     document.dci.a.focus();	 
}
</script>

      <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
              <h4 class="modal-title" id="myModalLabel">
                <h3>Calculate Your Calories here</h3>
              </h4>
            </div>
		

	 <font size=4>
	 <FORM name="dci"   id="dci">
	 
		  <tr>
              <input class="forminputcontent"  placeholder="Age"    type="number" onkeyup=dcicheck(1)  name=age size="10" > 
              </tr>
			  <br>
			 
			
			
			<tr>
                 <td><input class="forminputcontent" type="number"  placeholder="Weight" onkeyup=dcicheck(2) name=weight size="20" ></td>
                <td><select class="cal_option" name=wkg>
                <option value=1 selected>Pnd</option>
				<option value=2.2046 >Kg</option>
                
                </select></td>
               </tr>
			   <br>
			   
			
			 <tr>
                  <td><input class="forminputcontent"  placeholder="Height" type="number"  min="0" onkeyup=dcicheck(3) name=height size="20" ></td>
                   <td><select class="cal_option" name=hcm>
                        <option value=1>inch</option>
						<option value=0.3937>cm</option> 
                         </select></td>
                   </tr>
				   <br>
				  
				   
				   <tr>
               <SELECT name=esel style="width:72%;border: solid 1px silver";>
			   <option value=1.2>sedentary, desk job</option>
							   <option value=1.375>light exercise, 1-3 days per week</option>
							   <option value=1.55>moderate exercise, 3-5 days per week</option>
							   <option value=1.725>hard exercise, 6-7 days per week</option>
							   <option value=1.9>very hard exercise, physics job</option>
				</SELECT>		
               
              </tr>
			
			<br>
			<br>
			
			
			
			<tr>
			<td width=200 style="font-size:18px" align=right> Gender: </TD>
			<td width=10></TD>
			<td width=240>
			<input type="radio" value="male" checked name="sex"><font style="color:black;font-size:16px">&nbsp;&nbsp;male</font></input>
			&nbsp;&nbsp;&nbsp;
			<input type="radio" value="female" name="sex"><font style="color:black;font-size:16px">&nbsp;&nbsp;female</font></input>
			</TD>
			<td width=120>
			</td>
			</tr>
			<br>
			<br>
			
			<tr>
            <input ReadOnly class="forminputcontent" name=res placeholder="Daily Calories Needed"  style="width:50%;border: solid 1px silver;" size="20" > 
            </tr>
			
			
			
		</TBODY>
		
	</FORM>
	</font>
            
			
			<div class="modal-footer">
			<input style="font-size: 17px" onclick="caldci()" type="button" name="Calculate" value="Calculate"/>
			 &nbsp;&nbsp;&nbsp;
			 <input style="font-size: 17px" onclick="dciclear()" type="button" name="reset" value="Reset All"/>
              
              <br><br>
              </div>
          </div>
        </div>
      </div>
    </div>
		  <!--Model1  -->
		  
		  
		  
		  
		  <div class="header-arrow">
		     <a href="#menu" class="class scroll"><span> </span </a>
		  </div>
	    </div>
	  </div>
	
	<!-- end header_bottom -->
	<!-- start menu -->
    <div class="menu" id="menu">
	  <div class="container">
		 
		 <div class="h_menu4"><!-- start h_menu4 -->
		   <a class="toggleMenu" href="#">Menu</a>
			 <ul class="nav">
			   
			 </ul>
			  <script type="text/javascript" src="js/nav.js"></script>
		  </div><!-- end h_menu4 -->
		 <div class="clear"></div>
	  </div>
	</div>
	<!-- end menu -->
	 <div class="main">
	 	 <div class="container">
			<!-- start content-top -->
			<div class="row content-top">
				 <div class="col-md-5">
				  <img src="e_images/pic.png" class="img-responsive" alt=""/> 
			     </div>
				 <div class="col-md-7 content_left_text">
				   <h3>Lorem ipsum dolor sit!</h3>
				   <p>aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
				 </div>
            </div>
		 </div>
		<!-- end content-top -->
		<div class="container">
		    <div class="row content-middle">
		      <!-- start content-middle -->
	 	    	<div class="col-md-4"><a href="food.php">
	 	    		<ul class="spinning">
	 	    			<li class="live">Breakfast</li>
	 	    			
	 	    			<div class="clear"></div>	
	 	    		</ul>
					 <div class="view view-fifth">
				  	   <img src="e_images/pic3.jpg" class="img-responsive" alt=""/>
					      <div class="mask">
	                       	<div class="info">Read More</div>
			              </div>
	                  </div>
			     </a></div>
				 <div class="col-md-4"><a href="lunch.php">
	 	    		<ul class="spinning">
	 	    			<li class="live">Lunch</span></li>
	 	    			
	 	    			<div class="clear"></div>	
	 	    		</ul>
					 <div class="view view-fifth">
				  	   <img src="e_images/pic2.jpg" class="img-responsive"  alt=""/>
					      <div class="mask">
	                       	<div class="info">Read More</div>
			              </div>
	                  </div>
			     </a></div>
				 <div class="col-md-4"><a href="dinner.php">
	 	    		<ul class="spinning">
	 	    			<li class="live">Dinner </li>
	 	    			
	 	    			<div class="clear"></div>	
	 	    		</ul>
					 <div class="view view-fifth">
				  	   <img src="e_images/pic1.jpg" class="img-responsive" alt=""/>
					      <div class="mask">
	                       	<div class="info">Read More</div>
			              </div>
	                  </div>
			     </a></div>
				<div class="clear"></div>
		   </div>
		  
	     </div>
	     <Script>
	     
	<div id="showHtml">
   
	</div>
</html>