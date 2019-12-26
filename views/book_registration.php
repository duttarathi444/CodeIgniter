<?php include_once('header.php'); ?>
<script>
$(document).ready(function(){
  $('#CompanyPhone').mask('000-000-0000');
  $('#CompanyFax').mask('000-000-0000');
  $('#client_telephone1').mask('000-000-0000');
  $('#client_telephone2').mask('000-000-0000');
});
</script>
    
<div class="content">

	
  <div class="container">
      <a id="back2Top" title="Ba
      ck to top" href="#">&#10148;</a>
  <?php if($edit != true){?>
    <h2 class="gold-underline">Add new Book</h2>
  <?php }else{?>
    <h2 class="gold-underline">Edit Book</h2>
  <?php }?>
          <form name="driver_add" action="<?php if($edit != true){?><?php echo base_url();?>/Welcome/book_data<?php }else{?><?php echo base_url();?>/Welcome/editData<?php }?>" method="post" enctype="multipart/form-data">	 
            <div class="form-row">
              <div class="col-md-12 mb-3">
                
                <label for="validationDefault01">Book Name</label>
                <div class="input-group">

                  <input type="text" class="form-control" id="validationDefault01" placeholder="Book Name" name="book_name" required style="" value="<?php if($edit == true){?><?php echo $result[0]['book_name']?><?php }?>">
               </div>
              </div>
            </div>

           <div class="form-row">
             <div class="col-md-6 mb-3">
                <label for="validationDefault02">Class</label>
                <div class="input-group">
                <input type="text" class="form-control" id="CompanyPhone" placeholder="" name='class' required="required" value="<?php if($edit == true){?><?php echo $result[0]['class']?><?php }?>">
               </div>
             </div>
             <div class="col-md-6 mb-3">
               <label for="validationPrimaryEmail">Session</label>
                <div class="input-group">
                <input type="text" class="form-control" name="session" id="validationPrimaryEmail" placeholder="" aria-describedby="inputGroupPrepend2" required="" style="" value="<?php if($edit == true){?><?php echo $result[0]['session']?><?php }?>">
               </div>
			   <span id="email_status"></span>
             </div>
           </div>
            <div class="form-row">
            <div class="col-md-6 mb-3">
                
                <label for="validationDefault01">Categorie</label>
                <input type="text" class="form-control" name="catego" id="hub_idd" placeholder="" required="" style="" value="<?php if($edit == true){?><?php echo $result[0]['categorie']?><?php }?>">
                <!-- <select name="catego" id="hub_idd" class="form-control">
                      <?php if($rate_master_list){foreach($rate_master_list as $p_list){ ?>
                      
                    <option selected="" value="<?php echo $p_list['hub_id']; ?>"><?php echo  $p_list['hub_name'];?></option>
                    <?php }}?>
                  </select> -->
                
              </div>
              
               <!-- <div class="col-md-6 mb-3">
                
                <label for="validationDefault01">Login Id</label>
                <div class="input-group">

                  <input type="text" class="form-control" id="login_id" placeholder="login_id" name="login_id" required style="">
               </div>
              </div> -->
              
              </div>
           
           
           
           
           
            <!-- <div class="form-row"> -->
             <div class="col-md-6 mb-3">
                <label for="validationDefault02">Book Image 1</label><br>
                <div class="input-group">
                <input type="file" id="gst_no"  name="image1" placeholder="" required="required" accept=".png, .jpg, .jpeg">
               </div>
             </div>
			 <div class="col-md-6 mb-3">
                <label for="validationDefault02">Book Image 2</label><br>
                <div class="input-group">
                <input type="file" class=""   id="pst_no"  name="image2" placeholder="" required="required" accept=".png, .jpg, .jpeg">
               </div>
             </div>
             <div class="col-md-6 mb-3">
                <label for="validationDefault03">Book Image 3</label><br>
                <div class="input-group">
                <input type="file" class="" id="qst_no" placeholder="" name="image3" accept=".png, .jpg, .jpeg" required="required">
               </div>
             </div>
			 
             <div class="col-md-6 mb-3">
                <label for="validationDefault03">Book Image 4</label><br>
                <div class="input-group">
                <input type="file" class="" id="hst_no" placeholder="" name="image4" accept=".png, .jpg, .jpeg" required="required">
               </div>
             </div>

             <div class="col-md-6 mb-3">
                <label for="validationDefault03">Book Image 5</label><br>
                <div class="input-group">
                <input type="file" class="" id="hst_no" placeholder="" name="image5" accept=".png, .jpg, .jpeg" required="required">
               </div>
             </div>
           

           
           <!-- <div class="form-row">
            <div class="col-md-12 mb-3">
              <label for="exampleFormControlTextarea1">Address</label>
              <div class="input-group">
                  <input type="address" class="form-control" name="c_address" id="exampleFormControlTextarea1"  required="required">
              </div>   
            </div>          
           </div> -->
           
           
            <!-- <div class="form-row">
                <div class="col col-md-4">
                  <label for="inputState">Province</label>
                  <select name="province" id="province" class="form-control">
                      <?php if($province_master_list){foreach($province_master_list as $p_list){ ?>
                    <option selected="" value="<?php echo $p_list['province_id']; ?>"><?php echo  $p_list['province_name'];?></option>
                    <?php }}?>
                  </select>
                </div>
                <div class="col col-md-4">
                  <label for="inputState">City</label>
                  <select name="region" id="region" class="form-control">
                  <option value="">No Selected</option>
                  </select>
                </div>
                <div class="col col-md-4">
                  <label for="validationDefault03">Postal Code</label>
                  <input type="text" class="form-control" name="postal_code" id="postal_code" maxlength="6" placeholder="TO1" required="">
                </div>
              </div> -->
           
           
           
           
           
           
          <!-- <div class="form-row">
                <div class="col col-md-4">
                  <input type="file" name="userFile"/>
	              
                </div>
                
              </div> //-->
           
          
    <div class="btn-group" role="group" aria-label="Basic example">
		<input type="button" class="btn btn-secondary btn-lg my-2 pull-left" id="backk" value="Back" onclick="window.history.back();"/>
		
		
		<?php if($edit != true){?>
		  <input type="submit" class="btn btn-success  btn-lg my-2 pull-left" id="auto_click" value="Submit"/>
		<?php }else{?>
      <input type="submit" class="btn btn-success  btn-lg my-2 pull-left" id="auto_click" value="Edit"/>
    <?php }?>
		</div>
      <?php if($edit == true){?>
			  <input type="hidden" id="TS" name="TS" value="<?php echo $result[0]['id']?>" />
      <?php }?>
        </form>
                
    </div>
</div>
<!-- <script type="text/javascript">

onclick="form_submit()"

onclick="form_submit()"

function checkemail()
{
  var user_email=document.getElementById("validationPrimaryEmail").value;
  var flg='3';
  
 if(user_email)
 {
  $.ajax({
  method: 'post',
  url: 'http://purpuligo.com/booya/index.php/User_auth/mail_validation_client_agent',
  data: {
   user_email:user_email,flg:flg
  },
  success: function (response) {
   $( '#email_status' ).html(response);
   if(response=="OK")	
   {
     return true;	
   }
   else
   {
     return false;	
   }
  }
  });
 }
 else
 {
  $( '#email_status' ).html("");
  return false;
 }
}
</script>
<script>
        $(document).ready(function(){
            
            $('#province').change(function(){ 
                var id=$(this).val();
                $.ajax({
                    url : "<?php echo site_url('Admin/get_region_category_by_province');?>",
                    method : "POST",
                    data : {id: id},
                    async : true,
                    dataType : 'json',
                    success: function(data){
                        var html = '';
                        var i;
                        for(i=0; i<data.length; i++){
                            html += '<option value='+data[i].zone_id+'>'+data[i].zone_name+'</option>';
                            $('#postal_code').val(data[i].postal_code);
                        }
                        $('#region').html(html);
                        
                    }
                });
            }); 
            $.ajax({
            url : "<?php echo site_url('Admin/client_list_ajx');?>",
                    method : "POST",
                    async : true,
                    dataType : 'json',
                    success: function(data){
                        var html = '';
                        var i;
                        for(i=0; i<data.length; i++){
                            $("#client").append('<option value='+data[i].client_id+'>'+data[i].client_name+'</option>');
                            //html += '<option value='+data[i].client_id+'>'+data[i].client_name+'</option>';
                        }
                        $('#client').multiselect({
                        includeSelectAllOption: true,
                        buttonWidth: 500,
                        enableFiltering: true,
                        selectAll: true
                    });
                    
                    }
            });
			
			$('#region').change(function(){ 
                var id=$(this).val();
                $.ajax({
                    url : "<?php echo site_url('Admin/get_fsa_by_zone');?>",
                    method : "POST",
                    data : {id: id},
                    async : true,
                    dataType : 'json',
                    success: function(data){
                        for(i=0; i<data.length; i++){
                            $('#postal_code').val(data[i].postal_code);
                        }
                    }
                });
            }); 
			$('#phone_no1').mask('000-000-0000');
			
			
        });
    </script> -->
  </body>
</html>
 <!-- <?php include_once('footer.php'); ?> -->         

              