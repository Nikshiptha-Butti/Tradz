<html>
<head>
     <link rel="stylesheet" href="sell.css">
    </head>
<body background="images/giverenthtmlback.jpg" style="background-repeat:no-repeat;background-size:cover;width:100%;height:1200px;">    
        <div class="login-box">
			 <h2>ENTER DETAILS</h2>
			  <form method="post" action="./sell.php?val1=<?php echo $_GET['val1']?>">
			  <div class="user-box">
					<input type="email" name="email" required />
					<label>Registered Email</label>
			  </div>
              <div class="user-box">
					<select id="proptype" name="property">
						<option value="select" disabled selected>select</option><option value="Land">Land</option><option value="Building">Building</option>
													</select>
                   <label>Asset</label>
             </div>
          <div class="user-box">
            <input type="text" name="loc" required/>
            <label>Location</label>
          </div>
          <div class="user-box">
            <input type="text" name="price" required />
            <label>Price</label>
          </div>
          <div class="user-box">
            <input type="text" name="Area" required>
            <label>Area in yards</label>
          </div>
          <div class="user-box">
            <input type="text" name="status" value="Lease" readonly>
            </div>
          <div class="user-box">
            <input type="text" name="description" required />
            <label>Description</label>
          </div>
          <div class="user-box">
            <input type="file" name="pic1" id="pic1">
            <label>Upload picture</label>
          </div>
          <div class="user-box">
            <input type="file" name="pic2" id="pic2">
            <label>Upload picture</label>
          </div>
          <div class="user-box">
            <input type="file" name="pic3" id="pic3">
            <label>Upload picture</label>
          </div>
          <div class="user-box">
            <input type="file" name="pic4" id="pic4">
            <label>Upload picture1</label>
          </div>
          <div class="user-box">
            <input type="file" name="video" id="video">
            <label>Upload Video</label>
          </div>
          <a href="./sell.php?val1=<?php echo $_GET['val1']?>">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <input type="submit" class="button" name="Ok" value="Submit">
          </a>
        </form>
      </div>    
    </body>
</html>