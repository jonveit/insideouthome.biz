<?php require_once 'header.php'; ?>

<!-- Any Additional Header Tags Place Here -->

</head>
<body>
	
<?php require_once 'body_header.php'; ?>
	
	<div id="content"> 
		<div id="center_content">
<!-- Main Content Goes Here -->
			<div id="maincontent">
			<div class="container-fluid">
				<div class="row">
              
        		<div class="col-sm-6 col-xs-12">
              	<h3> Our Contact Information </h3>
        			<p>Shantih Brando <br />215.817.0485 <br /><a href="shantih.brando@gmail.com">shantih.brando@gmail.com</a></p>
				</div>
            
              
            	<div class="col-sm-6 col-xs-12">
            	<h3> Or Send Us a Message </h3>
              
                <form action="thankyou.php" method="post" name="contactusform">
                	<input type="hidden" name="env_report" value="REMOTE_HOST,REMOTE_ADDR,HTTP_USER_AGENT,AUTH_TYPE,REMOTE_USER" />
					<input type="hidden" name="recipients" value="shantih.brando@gmail.com" />
					<input type="hidden" name="required" value="EmailAddr:Your email address,FullName:Your name" />
					<input type="hidden" name="subject" value="Message Delivered From InsideoutHome.biz" />
                      
					  <p> Name: &nbsp;<input class="contacttext" type="text" name="FullName"> </p>
                      <p> E-mail: <input type="text" name="EmailAddr"> </p>
                      <p> Phone: &nbsp;<input type="text" name="Phone"> </p>
                      <p> May We Contact You? </p>
                      <p> Yes <input type="radio" name="contact" value="Y" checked="checked" />
      						No <input type="radio" name="contact" value="N" /> </p>
                   	   <p><textarea name="message" rows="10" cols="27"> </textarea></p>
                   	   <p><input type="submit" value="Submit" title="Submit"> <input type="reset"> </p>
                </form>
				</div>
	
				</div>
			</div>
		</div>
		</div>
	</div>
	
<?php require_once 'footer.php'; ?>


