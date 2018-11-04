<?php include('header.php'); ?>
<!DOCTYPE html>
<html>
<head>
  <title>Chiper</title>
  <link href="Album%20example%20for%20Bootstrap_files/album.css" rel="stylesheet">
  
</head>
<body>
<div class="body>   
    <a name="slide"></a>
		<div class="container">
		<div class="card1">
		    <div class="card-head">
		              <img src="imgs/logo.png" alt="logo" class="card-logo">
		              <img src="10.jpg" alt="Shoe" class="product-img">
		                <div class="quickview">
		                  <a  id="button" class="button" onclick="">QUICKVIEW</a>
		                </div>
		              <span class="back-text">
		                FAS
		              </span>
            </div>
            <div class="card-body">
              <div class="product-desc">
                <span class="product-title">
	                  <b>Nike </b>
                </span>
                <span class="product-rating">
	                  <i class="fa fa-star"></i>
	                  <i class="fa fa-star"></i>
	                  <i class="fa fa-star"></i>
	                  <i class="fa fa-star"></i>
	                  <i class="fa fa-star"></i>
                </span>
              </div>
              <div class="product-properties">
                <span class="product-price">
	                  Rs<b>5000</b>
                </span>
              </div>
            </div>
		</div>  
		<div id="prod-view" class="prod-view">
		           <div class="close-btn">X</div> 
		            <div class="prod-big-img">
		              <img src="10.jpg">               
		            </div>
		            <div class="prod-big">
		              <h2>Nike Running Shoe light base</h2>
		              <h5>Product id = nik-01</h5>
		              <h5>Brand = NIKE</h5>
		              <div class="product-rating">
		                    <i class="fa fa-star"></i>
		                    <i class="fa fa-star"></i>
		                    <i class="fa fa-star"></i>
		                    <i class="fa fa-star"></i>
		                    <i class="fa fa-star red"></i>
		              </div>             
		              <h4 class="newprice">Rs. 5,000 + <abbr>50 shipping</abbr></h4>              
		              <!-- <button class="buy">Click</button></br> -->
		              <p><b>Warranty :</b> 6months</p>
		              <p><b>Shipping :</b> Dispatched within 2-3 days</p>
		            </div>
		 </div>
	     <script type="text/javascript" src="Album%20example%20for%20Bootstrap_files/jquery-3"></script>
	     <script type="text/javascript">
		          document.getElementById('button').addEventListener('click',
		            function() {
		            document.querySelector('.prod-view').style.display = 'inline-flex';
		          });
		          document.querySelector('.close-btn').addEventListener('click',
		            function() {
		            document.querySelector('.prod-view').style.display = 'none';
		          });
	     </script>

<!-- product -> 2 -->
		<div class="card2">
        	<div class="card-head">
	            <img src="imgs/logo.png" alt="logo" class="card-logo">
	            <img src="11.jpg" alt="Shoe" class="product-img">
	            <div class="quickview">
	       			<a  id="button2" class="button" onclick="">QUICKVIEW</a>
	            </div>
              	<span class="back-text">
	              FAS
	            </span>
            </div>
            <div class="card-body">
	            <div class="product-desc">
		              <span class="product-title">
		                <b>Nikon</b>
		              </span>            
		              <span class="product-rating">
		                <i class="fa fa-star"></i>
		                <i class="fa fa-star"></i>
		                <i class="fa fa-star"></i>
		                <i class="fa fa-star"></i>
		                <i class="fa fa-star"></i>
		              </span>
	            </div>
	            <div class="product-properties">             
		              <span class="product-price">
		                Rs<b>25000</b>
		              </span>
	            </div>
          	</div>
        </div>
<!--  quick view ->2 -->
		<div id="prod-view" class="prod-view2">
        	<div class="close-btn2">X</div> 
        		<div class="prod-big-img">
        			<img src="11.jpg">
         
      			</div>
      			<div class="prod-big">
			        <h2>New Nikon camera </h2>
			        <h5>Product id = cam-01</h5>
			        <h5>Brand = Nikon</h5>
			        <div class="product-rating">
			                <i class="fa fa-star"></i>
			                <i class="fa fa-star"></i>
			                <i class="fa fa-star"></i>
			                <i class="fa fa-star"></i>
			                <i class="fa fa-star red"></i>
			        </div>			         
			              <h4 class="newprice">Rs. 25000 + <abbr>50 shipping</abbr></h4>			          
				          <!-- <button class="buy">Click</button></br> -->
				          <p><b>Warranty :</b> 1year</p>
				          <p><b>Shipping :</b> Dispatched within 2-3 days</p>
			    </div>
   		</div>
	     <script type="text/javascript" src="Album%20example%20for%20Bootstrap_files/jquery-3"></script>
	 	 <script type="text/javascript">
		    document.getElementById('button2').addEventListener('click',
		      function() {
		      document.querySelector('.prod-view2').style.display = 'flex';
		    });
		    document.querySelector('.close-btn2').addEventListener('click',
		      function() {
		      document.querySelector('.prod-view2').style.display = 'none';
		    });
	  	</script>
	  	<!--product3-->
             
        <div class="card3">
          <div class="card-head">
            <img src="imgs/logo.png" alt="logo" class="card-logo">
            <img src="12.jpg" alt="Shoe" class="product-img">
             <div class="quickview">
          <a  id="button3" class="button" onclick="">QUICKVIEW</a>
          </div>
            <div class="product-detail">
             <!-- <h2>Casuals</h2>-->
             
            </div>
            <span class="back-text">
              FAS
            </span>
          </div>
          <div class="card-body">
            <div class="product-desc">
              <span class="product-title">
                <b>IPhoneX</b>
               <!-- <span class="badge">
                  New
                </span>-->
              </span>
             <!-- <span class="product-caption">
                Running Collections
              </span>-->
              <span class="product-rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star red"></i>
              </span>
            </div>
            <div class="product-properties">
             <!-- <span class="product-size">
                <h4>Size</h4>
                <ul class="ul-size">
                  <li><a href="#">7</a></li>
                  <li><a href="#">8</a></li>
                  <li><a href="#">9</a></li>
                  <li><a href="#" class="active">10</a></li>
                  
                </ul>
              </span>
             <!-- <span class="product-color">
                <h4>Colour</h4>
                <ul class="ul-color">
                  <li><a href="#" class="orange active"></a></li>
                  <li><a href="#" class="green"></a></li>
                  <li><a href="#" class="yellow"></a></li>
                </ul>
              </span>-->
              <span class="product-price">
                Rs<b>45,000</b>
              </span>
            </div>
          </div>
        </div>

        <!-- quickview3 -->
   <div id="prod-view" class="prod-view3">
       <div class="close-btn3">X</div> 
      <div class="prod-big-img">
        <img src="12.jpg">
         
      </div>
      <div class="prod-big">
        <h2>Apple IphoneX </h2>
        <h5>Product id = iph-01</h5>
        <h5>Brand = Apple </h5>
         <div class="product-rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star red"></i>
          </div>
         
            <h4 class="newprice">Rs. 45,000 + <abbr>100 shipping</abbr></h4>
          
          <!-- <button class="buy">Click</button></br> -->
          <p><b>Warranty :</b> 2year</p>
          <p><b>Shipping :</b> Dispatched within 2-3 days</p>
      </div>
    </div>

     <script type="text/javascript" src="Album%20example%20for%20Bootstrap_files/jquery-3"></script>
 <script type="text/javascript">
    document.getElementById('button3').addEventListener('click',
      function() {
      document.querySelector('.prod-view3').style.display = 'flex';
    });
    document.querySelector('.close-btn3').addEventListener('click',
      function() {
      document.querySelector('.prod-view3').style.display = 'none';
    });
  </script>
  


<!--product4-->
           
        <div class="card4">
          <div class="card-head">
            <img src="imgs/logo.png" alt="logo" class="card-logo">
            <img src="13.jpg" alt="Shoe" class="product-img">
             <div class="quickview">
          <a  id="button4" class="button" onclick="">QUICKVIEW</a>
          </div>
            <div class="product-detail">
             <!-- <h2>Casuals</h2>-->
             
            </div>
            <span class="back-text">
              FAS
            </span>
          </div>
          <div class="card-body">
            <div class="product-desc">
              <span class="product-title">
                <b>Apple PC</b>
               <!-- <span class="badge">
                  New
                </span>-->
              </span>
             <!-- <span class="product-caption">
                Running Collections
              </span>-->
              <span class="product-rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star red"></i>
              </span>
            </div>
            <div class="product-properties">
             <!-- <span class="product-size">
                <h4>Size</h4>
                <ul class="ul-size">
                  <li><a href="#">7</a></li>
                  <li><a href="#">8</a></li>
                  <li><a href="#">9</a></li>
                  <li><a href="#" class="active">10</a></li>
                  
                </ul>
              </span>
             <!-- <span class="product-color">
                <h4>Colour</h4>
                <ul class="ul-color">
                  <li><a href="#" class="orange active"></a></li>
                  <li><a href="#" class="green"></a></li>
                  <li><a href="#" class="yellow"></a></li>
                </ul>
              </span>-->
              <span class="product-price">
                Rs<b>1,00,000</b>
              </span>
            </div>
          </div>
        </div>
   
        <!-- quickview4-->
   <div id="prod-view" class="prod-view4">
       <div class="close-btn4">X</div> 
      <div class="prod-big-img">
        <img src="13.jpg">
         
      </div>
      <div class="prod-big">
        <h2>Apple PC </h2>
        <h5>Product id = app-02</h5>
        <h5>Brand = Apple</h5>
         <div class="product-rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star red"></i>
          </div>
         
            <h4 class="newprice">Rs. 1,00,000 + <abbr>100 shipping</abbr></h4>
          
          <!-- <button class="buy">Click</button></br> -->
          <p><b>Warranty :</b> 2year</p>
          <p><b>Shipping :</b> Dispatched within 2-3 days</p>
      </div>
    </div>

     <script type="text/javascript" src="Album%20example%20for%20Bootstrap_files/jquery-3"></script>
 <script type="text/javascript">
    document.getElementById('button4').addEventListener('click',
      function() {
      document.querySelector('.prod-view4').style.display = 'flex';
    });
    document.querySelector('.close-btn4').addEventListener('click',
      function() {
      document.querySelector('.prod-view4').style.display = 'none';
    });
  </script>
  


<!--product5-->
             
        <div class="card5">
          <div class="card-head">
            <img src="imgs/logo.png" alt="logo" class="card-logo">
            <img src="14.jpg" alt="Shoe" class="product-img">
             <div class="quickview">
          <a  id="button5" class="button" onclick="">QUICKVIEW</a>
          </div>
            <div class="product-detail">
             <!-- <h2>Casuals</h2>-->
             
            </div>
            <span class="back-text">
              FAS
            </span>
          </div>
          <div class="card-body">
            <div class="product-desc">
              <span class="product-title">
                <b>Huawai Hotspot</b>
               <!-- <span class="badge">
                  New
                </span>-->
              </span>
             <!-- <span class="product-caption">
                Running Collections
              </span>-->
              <span class="product-rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star red"></i>
              </span>
            </div>
            <div class="product-properties">
              <!--<span class="product-size">
                <h4>Size</h4>
                <ul class="ul-size">
                  <li><a href="#">7</a></li>
                  <li><a href="#">8</a></li>
                  <li><a href="#">9</a></li>
                  <li><a href="#" class="active">10</a></li>
                  
                </ul>
              </span>
             <!-- <span class="product-color">
                <h4>Colour</h4>
                <ul class="ul-color">
                  <li><a href="#" class="orange active"></a></li>
                  <li><a href="#" class="green"></a></li>
                  <li><a href="#" class="yellow"></a></li>
                </ul>
              </span>-->
              <span class="product-price">
                Rs<b>3,000</b>
              </span>
            </div>
          </div>
        </div>
   
 <!-- quickview5-->
   <div id="prod-view" class="prod-view5">
       <div class="close-btn5">X</div> 
      <div class="prod-big-img">
        <img src="14.jpg">
         
      </div>
      <div class="prod-big">
        <h2>New Huawai Router </h2>
        <h5>Product id = huw-01</h5>
        <h5>Brand = Huawai</h5>
         <div class="product-rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star red"></i>
          </div>
         
            <h4 class="newprice">Rs. 3,000 + <abbr>100 shipping</abbr></h4>
          
          <!-- <button class="buy">Click</button></br> -->
          <p><b>Warranty :</b> 2year</p>
          <p><b>Shipping :</b> Dispatched within 2-3 days</p>
      </div>
    </div>

     <script type="text/javascript" src="Album%20example%20for%20Bootstrap_files/jquery-3"></script>
 <script type="text/javascript">
    document.getElementById('button5').addEventListener('click',
      function() {
      document.querySelector('.prod-view5').style.display = 'flex';
    });
    document.querySelector('.close-btn5').addEventListener('click',
      function() {
      document.querySelector('.prod-view5').style.display = 'none';
    });
  </script>

<!--product6-->
              
        <div class="card6">
          <div class="card-head">
            <img src="imgs/logo.png" alt="logo" class="card-logo">
            <img src="15.jpg" alt="Shoe" class="product-img">
             <div class="quickview">
          <a  id="button6" class="button" onclick="">QUICKVIEW</a>
          </div>
            <div class="product-detail">
             <!-- <h2>Casuals</h2>-->
             
            </div>
            <span class="back-text">
              FAS
            </span>
          </div>
          <div class="card-body">
            <div class="product-desc">
              <span class="product-title">
                <b>Titan</b>
               <!-- <span class="badge">
                  New
                </span>-->
              </span>
             <!-- <span class="product-caption">
                Running Collections
              </span>-->
              <span class="product-rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star red"></i>
              </span>
            </div>
            <div class="product-properties">
             <!-- <span class="product-size">
                <h4>Size</h4>
                <ul class="ul-size">
                  <li><a href="#">7</a></li>
                  <li><a href="#">8</a></li>
                  <li><a href="#">9</a></li>
                  <li><a href="#" class="active">10</a></li>
                  
                </ul>
              </span>
             <!-- <span class="product-color">
                <h4>Colour</h4>
                <ul class="ul-color">
                  <li><a href="#" class="orange active"></a></li>
                  <li><a href="#" class="green"></a></li>
                  <li><a href="#" class="yellow"></a></li>
                </ul>
              </span>-->
              <span class="product-price">
                Rs<b>15,000</b>
              </span>
            </div>
          </div>
        </div>
   
<!-- quickview6-->
   <div id="prod-view" class="prod-view6">
       <div class="close-btn6">X</div> 
      <div class="prod-big-img">
        <img src="15.jpg">
         
      </div>
      <div class="prod-big">
        <h2>Titan wrist Watch </h2>
        <h5>Product id = titan-01</h5>
        <h5>Brand = Titan Watch</h5>
         <div class="product-rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star red"></i>
          </div>
         
            <h4 class="newprice">Rs.15,000 + <abbr>100 shipping</abbr></h4>
          
          <!-- <button class="buy">Click</button></br> -->
          <p><b>Warranty :</b> 1year</p>
          <p><b>Shipping :</b> Dispatched within 2-3 days</p>
      </div>
    </div>

     <script type="text/javascript" src="Album%20example%20for%20Bootstrap_files/jquery-3"></script>
 <script type="text/javascript">
    document.getElementById('button6').addEventListener('click',
      function() {
      document.querySelector('.prod-view6').style.display = 'flex';
    });
    document.querySelector('.close-btn6').addEventListener('click',
      function() {
      document.querySelector('.prod-view6').style.display = 'none';
    });
  </script>

<!--product7-->

          
        <div class="card7">
          <div class="card-head">
            <img src="imgs/logo.png" alt="logo" class="card-logo">
            <img src="17.jpg" alt="Shoe" class="product-img">
             <div class="quickview">
          <a  id="button7" class="button" onclick="">QUICKVIEW</a>
          </div>
            <div class="product-detail">
             <!-- <h2>Casuals</h2>-->
             
            </div>
            <span class="back-text">
              FAS
            </span>
          </div>
          <div class="card-body">
            <div class="product-desc">
              <span class="product-title">
                <b>Alexa</b>
               <!-- <span class="badge">
                  New
                </span>-->
              </span>
             <!-- <span class="product-caption">
                Running Collections
              </span>-->
              <span class="product-rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star red"></i>
              </span>
            </div>
            <div class="product-properties">
            
              <span class="product-price">
                Rs<b>15,000</b>
              </span>
            </div>
          </div>
        </div>
    

<!-- quickview6-->
   <div id="prod-view" class="prod-view7">
       <div class="close-btn7">X</div> 
      <div class="prod-big-img">
        <img src="17.jpg">
         
      </div>
      <div class="prod-big">
        <h2>Amazon Alexa</h2>
        <h5>Product id = Alex-01</h5>
        <h5>Brand = Amazon</h5>
         <div class="product-rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star red"></i>
          </div>
         
            <h4 class="newprice">Rs.15,000 + <abbr>100 shipping</abbr></h4>
          
          <!-- <button class="buy">Click</button></br> -->
          <p><b>Warranty :</b> 1year</p>
          <p><b>Shipping :</b> Dispatched within 2-3 days</p>
      </div>
    </div>

     <script type="text/javascript" src="Album%20example%20for%20Bootstrap_files/jquery-3"></script>
 <script type="text/javascript">
    document.getElementById('button7').addEventListener('click',
      function() {
      document.querySelector('.prod-view7').style.display = 'flex';
    });
    document.querySelector('.close-btn7').addEventListener('click',
      function() {
      document.querySelector('.prod-view7').style.display = 'none';
    });
  </script>
<!--product8-->
            
        <div class="card8">
          <div class="card-head">
            <img src="imgs/logo.png" alt="logo" class="card-logo">
            <img src="18.jpg" alt="Shoe" class="product-img">
             <div class="quickview">
          <a  id="button8" class="button" onclick="">QUICKVIEW</a>
          </div>
            <div class="product-detail">
             <!-- <h2>Casuals</h2>-->
             
            </div>
            <span class="back-text">
              FAS
            </span>
          </div>
          <div class="card-body">
            <div class="product-desc">
              <span class="product-title">
                <b>JBL Headphones</b>
               <!-- <span class="badge">
                  New
                </span>-->
              </span>
             <!-- <span class="product-caption">
                Running Collections
              </span>-->
              <span class="product-rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star red"></i>
              </span>
            </div>
            <div class="product-properties">
             
              <span class="product-price">
                Rs<b>5,000</b>
              </span>
            </div>
          </div>
        </div>
   

<!-- quickview8-->
   <div id="prod-view" class="prod-view8">
       <div class="close-btn8">X</div> 
      <div class="prod-big-img">
        <img src="18.jpg">
         
      </div>
      <div class="prod-big">
        <h2>JBL Headphones </h2>
        <h5>Product id = jbl-01</h5>
        <h5>Brand = JBL</h5>
         <div class="product-rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star red"></i>
          </div>
         
            <h4 class="newprice">Rs.5,000 + <abbr>100 shipping</abbr></h4>
          
          <!-- <button class="buy">Click</button></br> -->
          <p><b>Warranty :</b> 1year</p>
          <p><b>Shipping :</b> Dispatched within 2-3 days</p>
      </div>
    </div>

     <script type="text/javascript" src="Album%20example%20for%20Bootstrap_files/jquery-3"></script>
 <script type="text/javascript">
    document.getElementById('button8').addEventListener('click',
      function() {
      document.querySelector('.prod-view8').style.display = 'flex';
    });
    document.querySelector('.close-btn8').addEventListener('click',
      function() {
      document.querySelector('.prod-view8').style.display = 'none';
    });
  </script>
<!--product9-->
      
        <div class="card9">
          <div class="card-head">
            <img src="imgs/logo.png" alt="logo" class="card-logo">
            <img src="19.jpg" alt="Shoe" class="product-img">
             <div class="quickview">
          <a  id="button9" class="button" onclick="">QUICKVIEW</a>
          </div>
            <div class="product-detail">
             <!-- <h2>Casuals</h2>-->
             
            </div>
            <span class="back-text">
              FAS
            </span>
          </div>
          <div class="card-body">
            <div class="product-desc">
              <span class="product-title">
                <b>Yonex</b>
               <!-- <span class="badge">
                  New
                </span>-->
              </span>
             <!-- <span class="product-caption">
                Running Collections
              </span>-->
              <span class="product-rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star red"></i>
              </span>
            </div>
            <div class="product-properties">
              <!--<span class="product-size">
                <h4>Size</h4>
                <ul class="ul-size">
                  <li><a href="#">7</a></li>
                  <li><a href="#">8</a></li>
                  <li><a href="#">9</a></li>
                  <li><a href="#" class="active">10</a></li>
                  
                </ul>
              </span>
             <!-- <span class="product-color">
                <h4>Colour</h4>
                <ul class="ul-color">
                  <li><a href="#" class="orange active"></a></li>
                  <li><a href="#" class="green"></a></li>
                  <li><a href="#" class="yellow"></a></li>
                </ul>
              </span>-->
              <span class="product-price">
                Rs<b>6,000</b>
              </span>
            </div>
          </div>
        </div>
    
      
<!-- quickview9-->
   <div id="prod-view" class="prod-view9">
       <div class="close-btn9">X</div> 
      <div class="prod-big-img">
        <img src="19.jpg">
         
      </div>
      <div class="prod-big">
        <h2>Yonex Racket </h2>
        <h5>Product id = Y-01</h5>
        <h5>Brand = Yonex</h5>
         <div class="product-rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star red"></i>
          </div>
         
            <h4 class="newprice">Rs.6,000 + <abbr>100 shipping</abbr></h4>
          
          <!-- <button class="buy">Click</button></br> -->
          <p><b>Warranty :</b> 1year</p>
          <p><b>Shipping :</b> Dispatched within 2-3 days</p>
      </div>
    </div>

     <script type="text/javascript" src="Album%20example%20for%20Bootstrap_files/jquery-3"></script>
 <script type="text/javascript">
    document.getElementById('button9').addEventListener('click',
      function() {
      document.querySelector('.prod-view9').style.display = 'flex';
    });
    document.querySelector('.close-btn9').addEventListener('click',
      function() {
      document.querySelector('.prod-view9').style.display = 'none';
    });
  </script>
</div>
</div>

    <script src="Album%20example%20for%20Bootstrap_files/jquery-3.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="Album%20example%20for%20Bootstrap_files/popper.js"></script>
    <script src="Album%20example%20for%20Bootstrap_files/bootstrap.js"></script>
    <script src="Album%20example%20for%20Bootstrap_files/holder.js"></script>
  

<svg xmlns="http://www.w3.org/2000/svg" width="348" height="225" viewBox="0 0 348 225" preserveAspectRatio="none" style="display: none; visibility: hidden; position: absolute; top: -100%; left: -100%;">
  <text x="0" y="17" style="font-weight:bold;font-size:17pt;font-family:Arial, Helvetica, Open Sans, sans-serif">Thumbnail</text>
</svg>
 <section id="intro">
    <div class="intro1">
      <p>Dbms Mini Project</p>
    </div>
  </section>
</body>
</html>