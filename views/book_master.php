<html>
<?php include_once('header.php'); ?>

    <link  href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/buttons/1.6.0/css/buttons.dataTables.min.css" rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.0/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.0/js/buttons.colVis.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>../assets/js/book_list.js"></script>

<style>
	table.dataTable tbody td {
    
	font-size: 13px;}
	table.dataTable tbody th {
    
	font-size: 14px;}
	</style>
<body>




    <script>
    
    $(document).ready(function() {
    $('#example').DataTable( {
        dom: 'Bfrtip',
        columnDefs: [
            {
                targets: 0,
                className: 'noVis'
            }
        ],
        // buttons: [
        //     {
        //         extend: 'colvis',
        //         columns: ':not(.noVis)'
        //     }
        // ],
        "order": [[ 0, "asc" ]]
    } );
 } );




        
        function modi(c_id)
        {
            document.getElementById("driver_id2").value = c_id;
            document.getElementById("c2").submit();
        }
        
        function module_list()
        {
            document.getElementById("c3").submit();
        }
        
        // function view_p(d_id)
        // {
        //     document.getElementById("driver_id").value = d_id;
        //     document.getElementById("c6").submit();
        // }
        
        // function dr_delete(c_id)
        // {
        //     var conirm_delete = confirm("You are about to Delete Agent ID "+c_id+ " . Please confirm ?")
        //     if (conirm_delete == true) { 
        //         document.getElementById("driver_id3").value = c_id;
        //         document.getElementById("c4").submit();
        //     } else { 
        //         return;
        //     } 
            
        // }
        
        function driver_reg()
        {
            document.getElementById("c5").submit();
        }
        
        $(document).ready(function(){
            $("#agadd").click(function(){
                $("#c5").submit(); // Submit the form
            });
            $("#agedit").click(function(){
                $("#c3").submit(); // Submit the form
            });
        })


    
</script>
<form name="c2" id="c2" action="driver_edit" method="post">
    <input type="hidden" id="driver_id2" name="driver_id2" />
</form>
<form name="c3" id="c3" action="admin_tools" method="post">
</form>

<form name="c4" id="c4" action="driver_delete" method="post">
    <input type="hidden" id="driver_id3" name="driver_id3" />
</form>

<form name="c5" id="c5" action="<?php echo base_url();?>/Welcome/book_add" method="post">
    
</form>

 <!-- <form name="c6" id="c6" action="<?php echo site_url('Driver/driver_view'); ?>"method="post">
    <input type="hidden" id="driver_id" name="driver_id"/>
</form> -->


<form name="driver_list"  method="post">
<div class="content">
  <div class="container">
  <a id="back2Top" title="Back to top" href="#">&#10148;</a>
  <!-- <?php if($alert_flag == 1){?>
  <div class="alert alert-success alert-dismissible">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <?php echo $alert_message;?>
  </div>
  <?php }$alert_flag = 0;
  $alert_message = "" ?> -->
  
   <h2 class="gold-underline">Book List</h2>
   
     <div class="btn-group" role="group" aria-label="Basic example">
   <!--  <input type="button" class="btn btn-primary btn-lg my-2 pull-left" id="agadd" value="Driver Add" onclick="agent_reg()" />//-->
   <input type="button" class="btn btn-success  btn-lg my-2 pull-left" id="agadd" value="Book Add" onclick="agent_reg()"/>
   </div>
             

    
      <table id="example" class="display" >
        <thead>
            <tr>
              <th>Book Name</th>
              <th>Class</th>
              <th>Session</th>
              <th>Categorie</th>
              <th>Action</th>
            </tr>
        </thead>
        
         <tbody>
            <?php if($result){
                  foreach($result as $master_list){ ?>
            <tr>
                <td><?php echo $master_list['book_name'];?></td>
                <td><?php echo $master_list['class'];?></td>
                <td><?php echo $master_list['session'];?></td>
                <td><?php echo $master_list['categorie'];?></td>
                
                
          <td>
            <div class="btn-group">
              <a href="<?php echo base_url()?>/Welcome/viewBook?id=<?php echo $master_list['id'];?>"><i class="fa fa-eye" data-toggle="tooltip" title="View"> </i></a> &nbsp;&nbsp;

              <a href="<?php echo base_url()?>/Welcome/editBook?id=<?php echo $master_list['id'];?>" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>&nbsp;&nbsp;

              <a href="<?php echo base_url()?>/Welcome/publish?id=<?php echo $master_list['id'];?>" data-toggle="tooltip" title="Publish"><i class="fa fa-pencil-square-o"></i></a>&nbsp;&nbsp;

              <a href="<?php echo base_url()?>/Welcome/unpublish?id=<?php echo $master_list['id'];?>" data-toggle="tooltip" title="Unpublish"> <i class="fa fa-window-close-o"></i></a>
            </div>

          </td>
        </tr>
        <?php }}?>
      </tbody>
    </table>

  <div class="btn-group" role="group" aria-label="Basic example">             
    <input type="button" class="btn btn-secondary btn-lg my-2 pull-left" id="backk" value="Back" onclick="window.history.back();" />
  </div>
</div>
         <!-- <?php if($access_edit == 0){ ?><?php }?>
         <?php echo $master_list['driver_id'];?> -->
       <!-- <input type="hidden" name="driver_id" value="<?php echo $driver_id;?>"/> --> 
  
</div>
</form>
  
</body>
</html>
 <!-- <?php include_once('footer.php'); ?>   -->