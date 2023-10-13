@include('admin/section/header')
<style>
  .rounded-circle{
    height:55px;
    width:50px;
  }
</style>
<div class="content-wrapper">
  <!-- Content -->

  <div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Tables /</span> Basic Tables</h4>

    <!-- Basic Bootstrap Table -->
    <div class="card">
      <h5 class="card-header">Manage the Resource</h5>
      <div class="table-responsive text-nowrap">
        <table class="table">
          <thead>
            <tr>
              <th>Image</th>
              <th>Heading</th>
              <th>Description</th>
              <!-- <th>Adress</th> -->
              <th>Actions</th>
            </tr>
          </thead>
          <tbody class="table-border-bottom-0">
            @foreach($resources1 as $resource)
            <tr>
               <td>
               <img src="{{ asset('public/upload/' . $resource->image) }}" alt="Service Image" class="rounded-circle">
             </td>
              <td>{{$resource->heading}}</td>
              <td>{{$resource->description}}</td>
             <td>
              <div class="dropdown">
                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                  <i class="bx bx-dots-vertical-rounded"></i>
                </button>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="javascript:void(0);"
                  type="button"
                  class="btn btn-primary"
                  data-bs-toggle="modal"
                  data-bs-target="#Updatemodal{{$resource->id}}"><i class="bx bx-edit-alt me-1"></i> Edit</a
                  >
                  <a class="dropdown-item" href="javascript:void(0);"
                   type="button"
                  class="btn btn-primary"
                  data-bs-toggle="modal"
                  data-bs-target="#Deletemodal{{$resource->id}}"
                  ><i class="bx bx-trash me-1"></i> Delete</a
                  >
                </div>
              </div>
            </td>
            <!-- Modal -->
            <div class="modal fade" id="Updatemodal{{$resource->id}}" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel1">Modal title</h5>
        <button
        type="button"
        class="btn-close"
        data-bs-dismiss="modal"
        aria-label="Close"
        ></button>
      </div>
      <div class="modal-body">
        <form action="{{url('update_resource')}}" method="post" autocomplete="off"  enctype="multipart/form-data">
          @csrf
        <div class="row">
          <div class="col mb-3">
            <label for="nameBasic" class="form-label">Heading</label>
            <input type="text" value="{{$resource->heading}}" name="heading" id="nameBasic" class="form-control" placeholder="Enter Name" />
            <input type="hidden" value="{{$resource->id}}" name="id"/>
          </div>
        </div>
        <div class="row g-2">
          <div class="col mb-0">
            <label for="emailBasic" class="form-label">Description</label>
            <textarea type="text" id="emailBasic" value="{{$resource->description}}" class="form-control" placeholder="Description" name="description" rows="4" cols="50"  />{{$resource->description}}</textarea>
          </div>
        </div>
         <div class="col mb-3">
            <label for="nameBasic" class="form-label">Image</label><br>
            <img src="{{ asset('public/upload/' . $resource->image) }}" alt="Service Image" style="height: 50px;width:50px;"><br>
            <input type="file" id="nameBasic" class="form-control mt-3" name="image" />
          </div>
          
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
          Close
        </button>
        <button type="submit" class="btn btn-primary">Update</button>
        </form>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="Deletemodal{{$resource->id}}" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel1">Modal title</h5>
        <button
        type="button"
        class="btn-close"
        data-bs-dismiss="modal"
        aria-label="Close"
        ></button>
      </div>
      <div class="modal-body">
        <form action="{{url('delete_resource')}}" method="post" autocomplete="off"  enctype="multipart/form-data">
          @csrf
        <div class="row">
          <div class="col mb-3">
            <label for="nameBasic" class="form-label">Heading</label>
            <input type="text" value="{{$resource->heading}}" name="heading" id="nameBasic" class="form-control" placeholder="Enter Name" / readonly>
            <input type="hidden" value="{{$resource->id}}" name="id"/>
          </div>
        </div>
        
         
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
          Close
        </button>
        <button type="submit" class="btn btn-primary">Delete</button>
        </form>
      </div>
    </div>
  </div>
</div>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
  <!--/ Basic Bootstrap Table -->
</div>
</div>

@include('admin/section/session')
@include('admin/section/validation')
@include('admin/section/validation_img')
@include('admin/section/footer')