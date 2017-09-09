<?php include('header.php'); ?>
<body>   

<br><br><br>
<div class="cleafix"></div>
<div class="container">
<div class="alert alert-info">
    <strong>Hi..</strong> jQuery fromData post data.
</div>
 <div class="alert alert-warning">
        <a href=" https://drive.google.com/open?id=0BxmTZPVcu72faXpZcmNuNmhQZTQ" class="btn btn-xs btn-warning pull-right" target="blank();">Click</a>
        <strong> Code download link-</strong>
    </div>

 </div>
<div class="container text-center card">
                     <div class="col-md-6">        
                       <form enctype="multipart/form-data"  name="fromSubmit" id="fromSubmit">

                            <label for="name">First Name</label>            
                            <input type="text" name="fname" id="fname" class="form-control" placeholder="Enter First Name..." />   
                            <div class="clearfix"></div>
                           
                            <label for="name">Last Name</label>            
                            <input type="text" name="lname" id="lname" class="form-control" placeholder="Enter Last Name..." />      
                            <div class="clearfix"></div>
                           </br>
                            <button type="button" name="submit" id="submit" class="btn btn-primary">Singup</button>
                         </form>                       
                    
        </div>
        <div class="clearfix"></div>
        <div class="col-md-6" id="result"> 
           
        </div> 
    </div> 
 
</br>
<?php include('footer.php'); ?>
<script>


$("#submit").click(function(){
    //form data and create object
    var formData = new FormData($('#fromSubmit')[0]);

    $.ajax({
        type: 'post',
        url : 'action.php',
        data : formData,
        async: false,
        cache: false,
        contentType: false,
        processData: false,
        success : function(data){            
            $("#result").append(data);
        },
        error : function(error){
            console.log(error); 
        }
   });
 
});

</script>


