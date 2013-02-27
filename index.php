

<link rel="stylesheet" type="text/css" href="style.css">
<script type="text/javascript" src='uploader/client/fileuploader.js'></script>
<body>
  <div id="containertop" >
    <div id='heading' style='margin:10px;height:100px'>
    <h1 style='margin-left:120px'>Vibewire Timeline</h1>
    <div id="admin">
      <div id="admin_text">Admin Login</div>
      <input type="button" id="admin_button" name="admin" value="Admin Login"/>
    </div>
    </div>
  </div>

  <div id="container">

       <div class="timeline_container">
            <div class="timeline">
                <div class="plus"></div>
            </div>
        </div>
	 
    <div class="item">
           <a href='#' class='deletebox'>X</a>
           <div class='photo'><img src='images/Rocky.jpeg'></div>
           <p> 
            Working at vibewire greatly helps me to apply my technical skill to real project.
            As a member of web development, people would work together in a......
           </p>
        <div> 
        </div>
    </div>

    <div class="item ">
      <a href='#' class='deletebox'>X</a>
        <div class='photo'><img src='images/haozhou.jpg'></div>
          <p> 
            Working at vibewire greatly helps me to apply my technical skill to real project.
            As a member of web development, people would work together in a......
          </p>
        <div> 
    </div>
    </div>

    <div class="item ">
           <a href='#' class='deletebox'>X</a>
           <div class='photo'><img src='images/unknow.jpeg'></div>
           <p> 
            Working at vibewire greatly helps me to apply my technical skill to real project.
            As a member of web development, people would work together in a......
           </p>
        <div> 
        </div>
    </div>

    <div class="item ">
           <a href='#' class='deletebox'>X</a>
        <div> 
        </div>
    </div>

	  
	 <div id="popup" class='shade'>
		  <div class="Popup_rightCorner" >	
      </div>
		  <div id='box'>
		    <b>Add Internship Here</b><br/><br/>
        <div id='text_area'>
    		  <textarea id='update' value=''>

          </textarea>
        </div>
        <form action='file_upload_check.php' method='POST' enctype="multipart/form-data">
        <div id='photo_upload'>
          <div id='ptext'>Photo Here</div>
          <div id='upload_button'></div>
            <input type='file' name='photo' value='Photo Here' id='photo_button' />
        </div>

        </form>
        <div id="drop_box">
          <select id="drop">
            <option>Year</option>
            <option>2013</option>
            <option>2012</option>
            <option>2011</option>
          </select>
        </div>
          <!-- <input type='submit' value=' photo ' class='button' id='photo_button'/> -->
      </div>
      <div id='submitbutton'>
       <input type='submit' value=' Update ' class='button' id='update_button'/>
	    </div>
   </div>
	
  </div>
	
		
	</div>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
<script src="masonry.js"></script>

<script type="text/javascript" src="timeline.js"></script>

</body>
</html>