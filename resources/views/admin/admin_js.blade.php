update_<!--Main Jquery-->
    <script src="{{asset('/vendors/jquery/jquery-3.6.0.min.js')}}"></script>
    <!--Bootstrap bundle with popper-->
    <script src="{{asset('/vendors/bootstrap-5.1.3/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('/js/swiper-bundle.min.js')}}"></script>
    <!-- Datepicker js -->
    <script src="{{asset('/js/moment.min.js')}}"></script>
    <script src="{{asset('/js/daterangepicker.min.js')}}"></script>
    <!-- Select2 js -->
    <script src="{{asset('/js/select2.min.js')}}"></script>

    <!--Custom Script-->
    <script src="{{asset('/js/script.js')}}"></script>
    <!-- jquer cdn link -->
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <!-- ajax install -->
   <script>
      $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
    </script>

    <script>
        $(document).ready(function(){
        $(document).on('click','.add_client',function(paramiter){
        paramiter.preventDefault();
        let name = $('#name').val();
        let email = $('#email').val();
        let password = $('#password').val();
        let address = $('#address').val();
        let phone = $('#phone').val();
        let website = $('#website').val();
        let skype_id = $('#skype_id').val();
        let facebook_profile_link = $('#facebook_profile_link').val();
        let linkedin_profile_link = $('#linkedin_profile_link').val();
        let twitter_profile_link = $('#twitter_profile_link').val();
        let short_note = $('#short_note').val();
        
        $.ajax({
          url:"{{route('add.client')}}",
          method:'post',
          dataType:'json',
          data: {name:name,email:email,password:password,address:address,phone:phone,website:website,skype_id:skype_id,facebook_profile_link:facebook_profile_link,linkedin_profile_link:linkedin_profile_link,twitter_profile_link:twitter_profile_link,short_note:short_note},
          success:function(res){
            if(res.status=='success'){
              $('#addClientModal').modal('hide');
              $('#add_client_form')[0].reset();
              $('.table').load(location.href+' .table');
            }

          },error:function(err){
            let error = err.responseJSON;
            $.each(error.errors,function(index, value){
             $('.errMagContainer').append('<span class="text-danger">'+value+'</span>'+'<br>');
            });
          }
        });
       })
            //__show student info in update form.....

       $(document).on('click','.update_client_form',function(){

        

          let id = $(this).data('id');
          let name = $(this).data('name');
          let email = $(this).data('email');
          let password = $(this).data('password');
          let address = $(this).data('address');
          let website = $(this).data('website');
          let skype_id = $(this).data('skype_id');
          let facebook_profile_link = $(this).data('facebook_profile_link');
          let linkedin_profile_link = $(this).data('linkedin_profile_link');
          let twitter_profile_link = $(this).data('twitter_profile_link');
          let short_note = $(this).data('short_note');

        $('#update_id').val(id);
        $('#update_name').val(name);
        $('#update_email').val(email);
        $('#update_password').val(password);
        $('#update_address').val(address);
        $('#update_phone').val(phone);
        $('#update_website').val(website);
        $('#update_skype_id').val(skype_id);
        $('#update_facebook_profile_link').val(facebook_profile_link);
        $('#update_linkedin_profile_link').val(linkedin_profile_link);
        $('#update_twitter_profile_link').val(twitter_profile_link);
        $('#update_short_note').val(short_note);

       });

       //___update students info__

       $(document).on('click','.update_client',function(paramiter){
        paramiter.preventDefault();
        let update_id = $('#update_id').val();
        let update_name = $('#update_name').val();
        let update_email = $('#update_email').val();
        let update_password = $('#update_password').val();
        let update_address = $('#update_address').val();
        let update_phone = $('#update_phone').val();
        let update_website = $('#update_website').val();
        let update_skype_id = $('#update_skype_id').val();
        let update_facebook_profile_link = $('#update_facebook_profile_link').val();
        let update_linkedin_profile_link = $('#update_linkedin_profile_link').val();
        let update_twitter_profile_link = $('#update_twitter_profile_link').val();
        let update_short_note = $('#update_short_note').val();
        console.log(update_id+update_name+update_website);
        $.ajax({
          url:"{{route('update.client')}}",
          method:'post',
          dataType:'json',
          data: {update_id:update_id,update_name:update_name,update_email:update_email,update_password:update_password,update_address:update_address,update_phone:update_phone,update_website:update_website,update_skype_id:update_skype_id,update_facebook_profile_link:update_facebook_profile_link,update_linkedin_profile_link:update_linkedin_profile_link,update_twitter_profile_link:update_twitter_profile_link,update_short_note:update_short_note},
          success:function(res){
            if(res.status=='success'){
              $('#updateClientModal').modal('hide');
              $('#update_client_form')[0].reset();
              $('.table').load(location.href+' .table');
            }

          },error:function(err){
            let error = err.responseJSON;
            $.each(error.errors,function(index, value){
             $('.errMagContainer').append('<span class="text-danger">'+value+'</span>'+'<br>');
            });
          }
        });
       })

       //___delete client info__

       $(document).on('click','.delete_client',function(paramiter){
        paramiter.preventDefault();
        let client_id = $(this).data('id');
        if(confirm('Are you Sure to Delete Client ??')){

          $.ajax({
          url:"{{route('delete.client')}}",
          method:'post',
          dataType:'json',
          data: {client_id:client_id},
          success:function(res){
            if(res.status=='success'){
              $('.table').load(location.href+' .table');
            }
          }
        });
        }
       })

       // project task ajax____

       // task added___
       $(document).on('click','.add_task',function(paramiter){
        paramiter.preventDefault();
        let title = $('#task_title').val();
        let description = $('#task_description').val();
        let staff_id = $('#staff_id').val();
        let status = $('#status').val();
        let timestamp_start = $('#timestamp_start').val();
        let timestamp_end = $('#timestamp_end').val();
        let task_color = $('#task_color').val();
         // console.log(title+description+staff_id+status+timestamp_start+task_color);
        $.ajax({
          url:"{{route('task.store')}}",
          method:'post',
          dataType:'json',
          data: {title:title,description:description,staff_id:staff_id,status:status,timestamp_start:timestamp_start,timestamp_end:timestamp_end,task_color:task_color},
          success:function(res){
            if(res.status=='success'){
              $('#addTaskModal').modal('hide');
              $('#add_task_form')[0].reset();
              $('.table').load(location.href+' .table');
            }

          },error:function(err){
            
          }
        });
       })
       // task delete___

       $(document).on('click','.delete_task',function(paramiter){
        paramiter.preventDefault();
        let task_id = $(this).data('id');
        if(confirm('Are you Sure to Delete task ??')){

          $.ajax({
          url:"{{route('task.delete')}}",
          method:'post',
          dataType:'json',
          data: {task_id:task_id},
          success:function(res){
            if(res.status=='success'){
              $('.table').load(location.href+' .table');
            }
          }
        });
        }
       })


       //staff part.........

       // staff added.............
        $(document).on('click','.add_staff',function(paramiter){
        paramiter.preventDefault();
        let name = $('#name').val();
        let email = $('#email').val();
        let password = $('#password').val();
        let account_role_id = $('#account_role_id').val();
        let phone = $('#phone').val();
        let skype_id = $('#skype_id').val();
        let facebook_profile_link = $('#facebook_profile_link').val();
        let linkedin_profile_link = $('#linkedin_profile_link').val();
        let twitter_profile_link = $('#twitter_profile_link').val();
        console.log(name+email+password+account_role_id+phone+skype_id+facebook_profile_link+phone+linkedin_profile_link);
        $.ajax({
          url:"{{route('staff.store')}}",
          method:'post',
          dataType:'json',
          data: {name:name,email:email,password:password,account_role_id:account_role_id,phone:phone,skype_id:skype_id,facebook_profile_link:facebook_profile_link,linkedin_profile_link:linkedin_profile_link,twitter_profile_link:twitter_profile_link},
          success:function(res){
            if(res.status=='success'){
              $('#addStaffModal').modal('hide');
              $('#add_staff_form')[0].reset();
              $('.table').load(location.href+' .table');
            }

          },error:function(err){
            let error = err.responseJSON;
            $.each(error.errors,function(index, value){
             $('.errMagContainer').append('<span class="text-danger">'+value+'</span>'+'<br>');
            });
          }
        });
       })
        //__staff delete.....
        $(document).on('click','.delete_staff',function(paramiter){
        paramiter.preventDefault();
        let staff_id = $(this).data('id');
        if(confirm('Are you Sure to Delete staff ??')){

          $.ajax({
          url:"{{route('staff.delete')}}",
          method:'post',
          dataType:'json',
          data: {staff_id:staff_id},
          success:function(res){
            if(res.status=='success'){
              $('.table').load(location.href+' .table');
            }
          }
        });
        }
       })
 });
    </script>
