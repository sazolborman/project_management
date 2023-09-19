

<!--Main Jquery-->
    @php $project_code = session('project_code'); @endphp
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

        //client_add ajax......................

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
              $('#add_client_form_1')[0].reset();
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
            //__show client info in update form.....

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

       //___update client info__

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
        // console.log(update_id+update_name+update_short_note+update_password+update_address+update_phone+update_website);

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

      //Company Ajax part.......................................................................
       //company_add ajax......................
          
        $(document).on('click','.add_company',function(paramiter){
        paramiter.preventDefault();
        let name = $('#name').val();
        let email = $('#email').val();
        let address = $('#address').val();
        let phone = $('#phone').val();
        let website = $('#website').val();
        let client_id = $('#client_id').val();
        
        $.ajax({
          url:"{{route('company.add')}}",
          method:'post',
          dataType:'json',
          data: {name:name,email:email,address:address,phone:phone,website:website,client_id:client_id},
          success:function(res){
            if(res.status=='success'){
              $('#addCompanyModal').modal('hide');
              $('#add_company_form')[0].reset();
              $('#add_company_form_1')[0].reset();
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


       //__show company info in update form.....

       $(document).on('click','.update_company_form',function(){

        

          let id = $(this).data('id');
          let name = $(this).data('name');
          let email = $(this).data('email');
          let phone = $(this).data('phone');
          let address = $(this).data('address');
          let website = $(this).data('website');
          let client_id = $(this).data('client_id');
          

          $('#update_id').val(id);
          $('#update_name').val(name);
          $('#update_email').val(email);
          $('#update_address').val(address);
          $('#update_phone').val(phone);
          $('#update_website').val(website);
          $('#update_client_id').val(client_id);

       });

       //___update client info__

       $(document).on('click','.update_company',function(paramiter){
        paramiter.preventDefault();
        let update_id = $('#update_id').val();
        let update_name = $('#update_name').val();
        let update_email = $('#update_email').val();
        let update_address = $('#update_address').val();
        let update_phone = $('#update_phone').val();
        let update_website = $('#update_website').val();
        let update_client_id = $('#update_client_id').val();
        // console.log(update_id+update_name+update_short_note+update_password+update_address+update_phone+update_website);

        $.ajax({
          url:"{{route('company.update')}}",
          method:'post',
          dataType:'json',
          data: {update_id:update_id,update_name:update_name,update_email:update_email,update_address:update_address,update_phone:update_phone,update_website:update_website,update_client_id:update_client_id},
          success:function(res){
            if(res.status=='success'){
              $('#updateCompanyModal').modal('hide');
              $('.table_1').load(location.href+' .table_1');
              $('#update_company_form')[0].reset();
              
            }

          },error:function(err){
            let error = err.responseJSON;
            $.each(error.errors,function(index, value){
             $('.errMagContainer').append('<span class="text-danger">'+value+'</span>'+'<br>');
            });
          }
        });
       })

        //___delete company info__

       $(document).on('click','.delete_company',function(paramiter){
        paramiter.preventDefault();
        let company_id = $(this).data('id');
        if(confirm('Are you Sure to Delete Company ??')){

          $.ajax({
          url:"{{route('company.delete')}}",
          method:'post',
          dataType:'json',
          data: {company_id:company_id},
          success:function(res){
            if(res.status=='success'){
              $('.table').load(location.href+' .table');
            }
          }
        });
        }
       })

       // project task ajax part.........................................................

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
        let project_code = $('#project_code').val();
         // console.log(title+description+staff_id+status+timestamp_start+task_color);
        $.ajax({
          url:"{{route('task.store')}}",
          method:'post',
          dataType:'json',
          data: {title:title,description:description,staff_id:staff_id,status:status,timestamp_start:timestamp_start,timestamp_end:timestamp_end,task_color:task_color,project_code:project_code},
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

       //__show task info in update form.....

       $(document).on('click','.update_task_form',function(){
          let id = $(this).data('id');
          let title = $(this).data('title');
          let description = $(this).data('description');
          let staff_id = $(this).data('staff_id');
          let status = $(this).data('status');
          let timestamp_start = $(this).data('timestamp_start');
          let timestamp_end = $(this).data('timestamp_end');
          let task_color = $(this).data('task_color');
          
          $('#update_id').val(id);
          $('#update_task_title').val(title);
          $('#update_task_description').val(description);
          $('#update_staff_id').val(staff_id);
          $('#update_status').val(status);
          $('#update_timestamp_start').val(timestamp_start);
          $('#update_timestamp_end').val(timestamp_end);
          $('#update_task_color').val(task_color);
       });

       //___update task info__

       $(document).on('click','.update_task',function(paramiter){
        paramiter.preventDefault();
          let update_id = $('#update_id').val();
          let update_task_title = $('#update_task_title').val();
          let update_task_description = $('#update_task_description').val();
          let update_staff_id = $('#update_staff_id').val();
          let update_status = $('#update_status').val();
          let update_timestamp_start = $('#update_timestamp_start').val();
          let update_timestamp_end = $('#update_timestamp_end').val();
          let update_task_color = $('#update_task_color').val();
        
        $.ajax({
          url:"{{route('task.update')}}",
          method:'post',
          dataType:'json',
          data: {update_id:update_id,update_task_title:update_task_title,update_task_description:update_task_description,update_staff_id:update_staff_id,update_status:update_status,update_timestamp_start:update_timestamp_start,update_timestamp_end:update_timestamp_end,update_task_color:update_task_color},
          success:function(res){
            if(res.status=='success'){
              $('#updateTaskModal').modal('hide');
              $('#update_task_form')[0].reset();
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


       //staff part..................................................

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
        // console.log(name+email+password+account_role_id+phone+skype_id+facebook_profile_link+phone+linkedin_profile_link);
        $.ajax({
          url:"{{route('staff.store')}}",
          method:'post',
          dataType:'json',
          data: {name:name,email:email,password:password,account_role_id:account_role_id,phone:phone,skype_id:skype_id,facebook_profile_link:facebook_profile_link,linkedin_profile_link:linkedin_profile_link,twitter_profile_link:twitter_profile_link},
          success:function(res){
            if(res.status=='success'){
              $('#addStaffModal').modal('hide');
              $('#add_staff_form')[0].reset();
              $('#add_staff_form_1')[0].reset();
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
         //__show staff info in update form.....

       $(document).on('click','.update_staff_form',function(){

        

          let id = $(this).data('id');
          let name = $(this).data('name');
          let email = $(this).data('email');
          let password = $(this).data('password');
          let account_role_id = $(this).data('account_role_id');
          let skype_id = $(this).data('skype_id');
          let facebook_profile_link = $(this).data('facebook_profile_link');
          let linkedin_profile_link = $(this).data('linkedin_profile_link');
          let twitter_profile_link = $(this).data('twitter_profile_link');
          

          $('#update_id').val(id);
          $('#update_name').val(name);
          $('#update_email').val(email);
          $('#update_password').val(password);
          $('#update_account_role_id').val(account_role_id);
          $('#update_phone').val(phone);
          $('#update_skype_id').val(skype_id);
          $('#update_facebook_profile_link').val(facebook_profile_link);
          $('#update_linkedin_profile_link').val(linkedin_profile_link);
          $('#update_twitter_profile_link').val(twitter_profile_link);
       });

       //___update staff info__

       $(document).on('click','.update_staff',function(paramiter){
        paramiter.preventDefault();
        let update_id = $('#update_id').val();
        let update_name = $('#update_name').val();
        let update_email = $('#update_email').val();
        let update_password = $('#update_password').val();
        let update_account_role_id = $('#update_account_role_id').val();
        let update_phone = $('#update_phone').val();
        let update_skype_id = $('#update_skype_id').val();
        let update_facebook_profile_link = $('#update_facebook_profile_link').val();
        let update_linkedin_profile_link = $('#update_linkedin_profile_link').val();
        let update_twitter_profile_link = $('#update_twitter_profile_link').val();
        
        // console.log(update_id+update_name+update_password+update_phone);

       $.ajax({
          url:"{{route('staff.update')}}",
          method:'post',
          dataType:'json',
          data: {update_id:update_id,update_name:update_name,update_email:update_email,update_password:update_password,update_account_role_id:update_account_role_id,update_phone:update_phone,update_skype_id:update_skype_id,update_facebook_profile_link:update_facebook_profile_link,update_linkedin_profile_link:update_linkedin_profile_link,update_twitter_profile_link:update_twitter_profile_link},
          success:function(res){
            if(res.status=='success'){
              $('#updateStaffModal').modal('hide');
              $('#update_staff_form')[0].reset();
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
        //bug part..................................................

       // bug added.............
        $(document).on('click','.add_bug',function(paramiter){
        paramiter.preventDefault();
        let title = $('#bug_title').val();
        let description = $('#bug_description').val();
        let status = $('#status').val();
        let assigned_staff = $('#assigned_staff').val();
        let project_code = $('#project_code').val();
        let user_id = $('#user_id').val();

        $.ajax({
          url:"{{route('bug.store')}}",
          method:'post',
          dataType:'json',

          data: {
            title: title,
            description: description,
            status: status,
            assigned_staff: assigned_staff,
            project_code: project_code,
            user_id: user_id
            
          },

          success:function(res){
            if(res.status=='success'){
              $('#addBugModal').modal('hide');
              $('#add_bug_form')[0].reset();
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

        //__show bug info in update form.............................

       $(document).on('click','.update_bug_form',function(){

        

          let id = $(this).data('id');
          let title = $(this).data('title');
          let description = $(this).data('description');
          let status = $(this).data('status');
          let assigned_staff = $(this).data('assigned_staff');

          $('#update_id').val(id);
          $('#update_bug_title').val(title);
          $('#update_bug_description').val(description);
          $('#update_status').val(status);
          $('#update_assigned_staff').val(assigned_staff);
          
       });

       


       //___update bug info__

       $(document).on('click','.update_bug',function(paramiter){
        paramiter.preventDefault();

        let update_id = $('#update_id').val();
        let update_title = $('#update_bug_title').val();
        let update_description = $('#update_bug_description').val();
        let update_status = $('#update_status').val();
        let update_assigned_staff = $('#update_assigned_staff').val();
        
        
        // console.log(update_id+update_title+update_description+update_status+update_assigned_staff);

       $.ajax({
          url:"{{route('bug.update')}}",
          method:'post',
          dataType:'json',
          
          data: {
          update_id:update_id,
          update_title:update_title,
          update_description:update_description,
          update_status:update_status,
          update_assigned_staff:update_assigned_staff
          },
          success:function(res){
            if(res.status=='success'){
              $('#updateBugModal').modal('hide');
              $('#update_bug_form')[0].reset();
              $('.table').load(location.href+' .table');
            }

          },error:function(err){
            let error = err.responseJSON;
           
          }
        });
        })

        //__Bug delete.....
        $(document).on('click','.delete_bug',function(paramiter){
        paramiter.preventDefault();
        let bug_id = $(this).data('id');
        if(confirm('Are you Sure to Delete bug ??')){

          $.ajax({
          url:"{{route('bug.delete')}}",
          method:'post',
          dataType:'json',
          data: {bug_id:bug_id},
          success:function(res){
            if(res.status=='success'){
              $('.table').load(location.href+' .table');
            }
          }
        });
        }
       })
        // Wall part ajax........................................
        // wall added.............
        $(document).on('click','.add_wall',function(paramiter){
        paramiter.preventDefault();
        let message = $('#message').val();
        let project_code = $('#project_code').val();
        let user_id = $('#user_id').val();

        $.ajax({
          url:"{{route('wall.store')}}",
          method:'post',
          dataType:'json',

          data: {
            message: message,
            project_code: project_code,
            user_id: user_id
            
          },

          success:function(res){
            if(res.status=='success'){
              $('#add_wall_form')[0].reset();
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

        // Expense part ajax........................................
        // expense added.............
        $(document).on('click','.add_expense',function(paramiter){
        paramiter.preventDefault();
        let title = $('#expense_title').val();
        let amount = $('#amount').val();
        let project_code = $('#project_code').val();
        // console.log(title+project_code+amount);
        $.ajax({
          url:"{{route('expense.store')}}",
          method:'post',
          dataType:'json',

          data: {
            title: title,
            project_code: project_code,
            amount:amount
            
          },

          success:function(res){
            if(res.status=='success'){
              $('#addExpenseModal').modal('hide');
              $('#add_expense_form')[0].reset();
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

          //__show expense info in update form.....

       $(document).on('click','.update_expense_form',function(){

          let id = $(this).data('id');
          let title = $(this).data('title');
          let amount = $(this).data('amount');

          $('#update_id').val(id);
          $('#update_expense_title').val(title);
          $('#update_amount').val(amount);
       });

        //___update expense info__

       $(document).on('click','.update_expense',function(paramiter){
        paramiter.preventDefault();
        let update_id = $('#update_id').val();
        let update_title = $('#update_expense_title').val();
        let update_amount = $('#update_amount').val();
        
       $.ajax({
          url:"{{route('expense.update')}}",
          method:'post',
          dataType:'json',
          data: {
                update_id:update_id,
                update_title:update_title,
                update_amount:update_amount
          },
          success:function(res){
            if(res.status=='success'){
              $('#updateExpenseModal').modal('hide');
              $('#update_expense_form')[0].reset();
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

         //__expense delete.....
        $(document).on('click','.delete_expense',function(paramiter){
        paramiter.preventDefault();
        let expense_id = $(this).data('id');
        if(confirm('Are you Sure to Delete expense ??')){

          $.ajax({
          url:"{{route('expense.delete')}}",
          method:'post',
          dataType:'json',
          data: {expense_id:expense_id},
          success:function(res){
            if(res.status=='success'){
              $('.table').load(location.href+' .table');
            }
          }
        });
        }
       })

        // Payment Milestone part ajax........................................
        // milestine added.............
        $(document).on('click','.add_milestone',function(paramiter){
        paramiter.preventDefault();
        let title = $('#milestone_title').val();
        let amount = $('#amount').val();
        let status = $('#status').val();
        let timestamp = $('#timestamp').val();
        let note = $('#note').val();
        let project_code = $('#project_code').val();
        let client_id = $('#client_id').val();
        
        $.ajax({
          url:"{{route('milestone.store')}}",
          method:'post',
          dataType:'json',

          data: {
            title: title,
            project_code: project_code,
            amount:amount,
            status:status,
            timestamp:timestamp,
            note:note,
            client_id:client_id
          },

          success:function(res){
            if(res.status=='success'){
              $('#addMilestoneModal').modal('hide');
              $('#add_milestone_form')[0].reset();
              $('.milestonetable').load(location.href+' .milestonetable');
              $('.viewtable').load(location.href+' .viewtable');
            }

          },error:function(err){
            let error = err.responseJSON;
            $.each(error.errors,function(index, value){
             $('.errMagContainer').append('<span class="text-danger">'+value+'</span>'+'<br>');
            });
          }
        });
       })


        //__View offline payment milestone info in View file.....

       $(document).on('click','.view_payment',function(){

          let id = $(this).data('id');
          let title = $(this).data('title');
          let amount = $(this).data('amount');
          let status = $(this).data('status');
          let timestamp = $(this).data('timestamp');
          let note = $(this).data('note');
          let client_id = $(this).data('client_id');


          $('#view_id').text(id);
          $('#view_milestone_title').text(title);
          $('#view_amount').text(amount);
          $('#view_amount_2').text(amount);
          $('#view_status').text(status);
          $('#view_timestamp').text(timestamp);
          $('#view_client').text(client_id);
       });


         //__View milestone info in View file.....

       $('.view_milestone').click(function(){
        
            
            let id = $(this).data('id');
            let title = $(this).data('title');
            let amount = $(this).data('amount');
            let status = $(this).data('status');
            let timestamp = $(this).data('timestamp');
            let client_id = $(this).data('client_id');

            $('#view_id').text(id);
            $('#view_milestone_title_1').text(title);
            $('#view_amount_1').text(amount);
            $('#view_amount_next').text(amount);
            $('#view_status').text(status);
            $('#view_timestamp_1').text(timestamp);
            $('#view_client').text(client_id);
            $('.test').empty();

            if(status == 0){
              $('.test').append('<span class="eBadge ebg-soft-red ">Unpaid</span>');
            }
            else{
             $('.test').append('<span class="eBadge ebg-soft-success">Paid</span>'); 
             
            }
            
              
            
            

       });

       // $(document).on('click','.view_milestone',function(){

       //    let id = $(this).data('id');
       //    let title = $(this).data('title');
       //    let amount = $(this).data('amount');
       //    let status = $(this).data('status');
       //    let timestamp = $(this).data('timestamp');
       //    let note = $(this).data('note');
       //    let client_id = $(this).data('client_id');
       //      alert();


       //    $('#view_id').text(id);
       //    $('#view_milestone_title_1').text(title);
       //    $('#view_amount_1').text(amount);
       //    $('#view_amount_next').text(amount);
       //    $('#view_status').text(status);
       //    $('#view_timestamp').text(timestamp);
       //    $('#view_client').text(client_id);

       //    let status =  $('#view_status').text(status);

       //    if(status == 0)
       //    {
       //      $('.eBadge').append("<p>Paid</p>");
       //      // $('.eBadge').append('<span class="eBadge ebg-soft-red ">Unpaid</span>');
       //    }else{
       //      $('.eBadge').append("<p>Unpaid</p>");

       //      // $('.eBadge').append('<span class="eBadge ebg-soft-success">Paid</span>');
       //    }

       // });

         //__show milestone info in update form.....

       $(document).on('click','.update_milestone_form',function(){

          let id = $(this).data('id');
          let title = $(this).data('title');
          let amount = $(this).data('amount');
          let status = $(this).data('status');
          let timestamp = $(this).data('timestamp');
          let note = $(this).data('note');

          $('#update_id').val(id);
          $('#update_milestone_title').val(title);
          $('#update_amount').val(amount);
          $('#update_status').val(status);
          $('#update_timestamp').val(timestamp);
          $('#update_note').val(note);
       });

       //___update milestone info__

       $(document).on('click','.update_milestone',function(paramiter){
        paramiter.preventDefault();
        let update_id = $('#update_id').val();
        let update_title = $('#update_milestone_title').val();
        let update_amount = $('#update_amount').val();
        let update_status = $('#update_status').val();
        let update_timestamp = $('#update_timestamp').val();
        let update_note = $('#update_note').val();
        
       $.ajax({
          url:"{{route('milestone.update')}}",
          method:'post',
          dataType:'json',
          data: {
                update_id:update_id,
                update_title:update_title,
                update_amount:update_amount,
                update_status:update_status,
                update_timestamp:update_timestamp,
                update_note:update_note
          },
          success:function(res){
            if(res.status=='success'){
              $('#updateMilestoneModal').modal('hide');
              $('#update_milestone_form')[0].reset();
              $('.viewtable').load(location.href+' .viewtable');
              $('.milestonetable').load(location.href+' .milestonetable');
            }

          },error:function(err){
            let error = err.responseJSON;
            $.each(error.errors,function(index, value){
             $('.errMagContainer').append('<span class="text-danger">'+value+'</span>'+'<br>');
            });
          }
        });
       })

      //__milestone delete.....
        $(document).on('click','.delete_milestone',function(paramiter){
        paramiter.preventDefault();
        let milestone_id = $(this).data('id');
        if(confirm('Are you Sure to Delete milestone ??')){

          $.ajax({
          url:"{{route('milestone.delete')}}",
          method:'post',
          dataType:'json',
          data: {milestone_id:milestone_id},
          success:function(res){
            if(res.status=='success'){
              $('.viewtable').load(location.href+' .viewtable');
              $('.milestonetable').load(location.href+' .milestonetable');

            }
          }
        });
        }
       })


         // TimeSheet part ajax........................................
        // Timesheet added.............
        $(document).on('click','.add_timesheet',function(paramiter){
        paramiter.preventDefault();
        let start_timestamp = $('#start_timestamp').val();
        let end_timestamp = $('#end_timestamp').val();
        let project_code = $('#project_code').val();
        // console.log(title+project_code+amount);
        $.ajax({
          url:"{{route('timesheet.store')}}",
          method:'post',
          dataType:'json',

          data: {
            start_timestamp: start_timestamp,
            project_code: project_code,
            end_timestamp:end_timestamp
            
          },

          success:function(res){
            if(res.status=='success'){
              $('#addTimesheetModal').modal('hide');
              $('#add_timesheet_form')[0].reset();
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

    //Team_Running_Task part..................................................

       // Team_Running_Task added.............
        $(document).on('click','.add_team_running_task',function(paramiter){
        paramiter.preventDefault();
        let title = $('#task_title').val();
        let creation_timestamp = $('#creation_timestamp').val();
        let task_status = $('#task_status').val();
        let assigned_staff = $('#assigned_staff').val();
        let due_timestamp = $('#due_timestamp').val();

        $.ajax({
          url:"{{route('teamtask.store')}}",
          method:'post',
          dataType:'json',

          data: {
            title: title,
            creation_timestamp: creation_timestamp,
            task_status: task_status,
            assigned_staff: assigned_staff,
            due_timestamp: due_timestamp
          },

          success:function(res){
            if(res.status=='success'){
              $('#addteamtaskModal').modal('hide');
              $('#add_teamtask_form')[0].reset();
              $('.table_1').load(location.href+' .table_1');
            }

          },error:function(err){
            let error = err.responseJSON;
            $.each(error.errors,function(index, value){
             $('.errMagContainer').append('<span class="text-danger">'+value+'</span>'+'<br>');
            });
          }
        });
       })


        // team task update note
        $('.team-note-update').click(function(e){
          e.preventDefault();

          var this_id = $(this).attr('id');
          var tasknote = $(this).parent().find('#task_note').val();

          $.ajax({
          url:"{{route('teamtask.update.notes')}}",
          method:'post',
          dataType:'json',

          data: {
            id: this_id,
            tasknote: tasknote
          },

          success:function(res){
            if(res.status == 'success'){
              console.log(res.status);
            }
          }
          });


        })


    //Noticeboard part..................................................

       // Noticeboard added.............
        $(document).on('click','.add_notice',function(paramiter){
        paramiter.preventDefault();
        let title = $('#notice_title').val();
        let description = $('#notice_description').val();
        let visible_for = $('#visible_for').val();
        let user_id = $('#user_id').val();
        //console.log(title+description+visible_for+user_id);
        $.ajax({
          url:"{{route('noticeboard.store')}}",
          method:'post',
          dataType:'json',

          data: {
            title: title,
            description: description,
            visible_for: visible_for,
            user_id: user_id
          },

          success:function(res){
            if(res.status=='success'){
              $('#addNoticeboardModal').modal('hide');
              $('#add_notice_form')[0].reset();
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

        //__View Noticeboard info in view_file.....

       $(document).on('click','.view_notice',function(){

          let id = $(this).data('id');
          let title = $(this).data('title');
          let description = $(this).data('description');
          let published_by = $(this).data('published_by');
          let date_added = $(this).data('date_added');
          let updated_at = $(this).data('updated_at');

          $('#view_id').text(id);
          $('#view_title').text(title);
          $('#view_description').text(description);
          $('#view_published_by').text(published_by);
          $('#view_date_added').text(date_added);
          $('#view_updated_at').text(updated_at);
          
       });

        //__show Noticeboard info in update form.....

       $(document).on('click','.update_notice_form',function(){

          let id = $(this).data('id');
          let title = $(this).data('title');
          let description = $(this).data('description');
          let visible_for = $(this).data('visible_for');

          $('#update_id').val(id);
          $('#update_notice_title').val(title);
          $('#update_notice_description').val(description);
          $('#update_visible_for').val(visible_for);
       });


       //___update noticeboard info__

       $(document).on('click','.update_notice',function(paramiter){
        paramiter.preventDefault();
        let update_id = $('#update_id').val();
        let update_title = $('#update_notice_title').val();
        let update_description = $('#update_notice_description').val();
        let update_visible_for = $('#update_visible_for').val();
        
       $.ajax({
          url:"{{route('noticeboard.update')}}",
          method:'post',
          dataType:'json',
          data: {
                update_id:update_id,
                update_title:update_title,
                update_description:update_description,
                update_visible_for:update_visible_for,
          },
          success:function(res){
            if(res.status=='success'){
              $('#updateNoticeboardModal').modal('hide');
              $('#update_notice_form')[0].reset();
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




    //__Noticeboard delete.....
        $(document).on('click','.delete_notice',function(paramiter){
        paramiter.preventDefault();
        let notice_id = $(this).data('id');
        if(confirm('Are you Sure to Delete Notice ??')){

          $.ajax({
          url:"{{route('noticeboard.delete')}}",
          method:'post',
          dataType:'json',
          data: {notice_id:notice_id},
          success:function(res){
            if(res.status=='success'){
              $('.table').load(location.href+' .table');
            }
          }
        });
        }
       })

        //Project_Note part..................................................

       // project_Note added.............
        $(document).on('click','.add_note',function(paramiter){
        paramiter.preventDefault();
        let project_code = $('#project_code').val();
        let project_note = $('#project_note').val();
        let code = "<?php echo $project_code; ?>";
        code = Number(code);

        $.ajax({
          url:"{{route('projectnote.update', $project_code)}}",
          method:'post',
          dataType:'json',

          data: {
            project_note: project_note,
            project_code: project_code,
            test: code
          },

          success:function(res){
            if(res.status=='success'){
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

        //__show Project_note info in update form.....

       $(document).on('click','.view_note',function(){

          let id = $(this).data('id');
          let project_note = $(this).data('project_note');
          

          $('#update_id').val(id);
          $('#project_note').val(project_note);
          
       });


 });
    </script>
</body>
</html>