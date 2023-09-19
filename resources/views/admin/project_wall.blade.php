@include('admin.project_room')
<div class="container w-50">
  <div class="">
    <div class="eCard eCard-special">
      <div class="eCard-body">
        <h5 class="eCard-title">Project Discussion</h5>
        <form action="" id="add_wall_form" method="Post" accept-charset="utf-8">
          @csrf
          <input type="hidden" id="user_id" name="user_id" value="{{$user_id}}">
          <input type="hidden" id="project_code" name="project_code" value="{{$project_code}}">
          <div class="eCard-text ">
            <div class="row">
              <div class="fpb-7 col-sm-8">
                
                <textarea
                class="form-control eForm-control"
                id="message"
                name="message"
                placeholder="type new message"
                >
                </textarea>
              </div>
              <div class="col-sm-4">
                <button type="submit" class="btn btn-sm btn-primary add_wall">Post Message</button>
              </div>
            </div>
          </div>
          <div class="mb-3 col-sm-4">
            <input
            class="form-control eForm-control-file eForm-control-file-sm"
            id="formFileSm"
            type="file"
            />
          </div>
        </form><hr>
        <div>
          <table class="table table-borderless">
            <tbody>
              @foreach($wall as $row)
              <div >
                <tr class="row">
                  <td class="col-sm-8">
                    <span>{{$row->user_name}} :</span>
                    <span>{{$row->message}}</span>
                  </td>
                  <td class="col-sm-4">
                    {{$row->date}}
                  </td>
                </tr>
                <tr>
                  <td>{{$row->message_file_name}}</td>
                </tr>
              </div>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>