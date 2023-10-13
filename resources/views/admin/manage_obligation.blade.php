@include('admin/section/header')
<style>
  .rounded-circle{
    height:55px;
    width:50px;
  }
  .conner {
  position: relative;
  background: linear-gradient(135deg, rgb(179, 208, 253) 0%, rgb(164, 202, 248) 100%);
  border-radius: 1000px;
  padding: 10px;
  display: grid;
  place-content: center;
  z-index: 0;
  max-width: 300px;
}

.search-container {
  position: relative;
  width: 100%;
  height: 35px;
  border-radius: 50px;
  background: linear-gradient(135deg, rgb(218, 232, 247) 0%, rgb(214, 229, 247) 100%);
  padding: 5px;
  display: flex;
  align-items: center;
}

.search-container::after, .search-container::before {
  content: "";
  width: 100%;
  height: 100%;
  border-radius: inherit;
  position: absolute;
}

.search-container::before {
  top: -1px;
  left: -1px;
  background: linear-gradient(0deg, rgb(218, 232, 247) 0%, rgb(255, 255, 255) 100%);
  z-index: -1;
}

.search-container::after {
  bottom: -1px;
  right: -1px;
  background: linear-gradient(0deg, rgb(163, 206, 255) 0%, rgb(211, 232, 255) 100%);
  box-shadow: rgba(79, 156, 232, 0.7019607843) 3px 3px 5px 0px, rgba(79, 156, 232, 0.7019607843) 5px 5px 20px 0px;
  z-index: -2;
}

.input {
  padding: 10px;
  width: 100%;
  height: 35px;
  background: linear-gradient(135deg, rgb(218, 232, 247) 0%, rgb(214, 229, 247) 100%);
  border: none;
  color: #9EBCD9;
  font-size: 20px;
  border-radius: 50px;
}

.input:focus {
  outline: none;
  background: linear-gradient(135deg, rgb(239, 247, 255) 0%, rgb(214, 229, 247) 100%);
}

.search__icon {
  width: 50px;
  aspect-ratio: 1;
  border-left: 2px solid white;
  border-top: 3px solid transparent;
  border-bottom: 3px solid transparent;
  border-radius: 50%;
  padding-left: 12px;
  margin-right: 10px;
}

.search__icon:hover {
  border-left: 3px solid white;
}

.search__icon path {
  fill: white;
}.pad{
  padding: 10px 0 0 0;
}
</style>
<div class="content-wrapper">
  <!-- Content -->

  <div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Tables /</span> Basic Tables</h4>

    <!-- Basic Bootstrap Table -->
    <div class="card">
      
      <div class="row">
        <div class="col-md-6">
          <h5 class="card-header">Manage the Obligation</h5>
        </div>
        <div class="col-md-6 pad">
          <div class="container conner">
            <div class="search-container">
              <input class="input" placeholder="search..." id="myInput" type="text">
              <svg viewBox="0 0 24 24" class="search__icon">
                <g>
                  <path d="M21.53 20.47l-3.66-3.66C19.195 15.24 20 13.214 20 11c0-4.97-4.03-9-9-9s-9 4.03-9 9 4.03 9 9 9c2.215 0 4.24-.804 5.808-2.13l3.66 3.66c.147.146.34.22.53.22s.385-.073.53-.22c.295-.293.295-.767.002-1.06zM3.5 11c0-4.135 3.365-7.5 7.5-7.5s7.5 3.365 7.5 7.5-3.365 7.5-7.5 7.5-7.5-3.365-7.5-7.5z">
                  </path>
                </g>
              </svg>
            </div>
          </div>
        </div>
      </div>
      

      
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
      <div class="table-responsive text-nowrap">
        <table class="table">
          <thead>
            <tr>
              <th>Image</th>
              <th>Heading</th>
              <th>Description</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody class="table-border-bottom-0" id="myTable">
            @foreach($Obligation1 as $obligation)
            <tr>
             <td>
               <img src="{{ asset('public/upload/' . $obligation->image) }}" alt="Service Image" class="rounded-circle">
             </td>
             <td>{{$obligation->heading}}</td>
             <td>{{$obligation->description}}</td>
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
                  data-bs-target="#Updatemodal{{$obligation->id}}"><i class="bx bx-edit-alt me-1"></i> Edit</a
                  >
                  <a class="dropdown-item" href="javascript:void(0);"
                  type="button"
                  class="btn btn-primary"
                  data-bs-toggle="modal"
                  data-bs-target="#Deletemodal{{$obligation->id}}"
                  ><i class="bx bx-trash me-1"></i> Delete</a
                  >
                </div>
              </div>
            </td>
            <!-- Modal -->
            <div class="modal fade" id="Updatemodal{{$obligation->id}}" tabindex="-1" aria-hidden="true">
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
                    <form action="{{url('update_obligation')}}" method="post" autocomplete="off"  enctype="multipart/form-data">
                      @csrf
                      <div class="row">
                        <div class="col mb-3">
                          <label for="nameBasic" class="form-label">Heading</label>
                          <input type="text" value="{{$obligation->heading}}" name="heading" id="nameBasic" class="form-control" placeholder="Enter Name" />
                          <input type="hidden" value="{{$obligation->id}}" name="id"/>
                        </div>
                      </div>
                      <div class="row g-2">
                        <div class="col mb-0">
                          <label for="emailBasic" class="form-label">Description</label>
                          <textarea type="text" id="emailBasic" value="{{$obligation->description}}" class="form-control" placeholder="Description" name="description" rows="4" cols="50"  />{{$obligation->description}}</textarea>
                        </div>
                      </div>
                      <div class="col mb-3">
                        <label for="nameBasic" class="form-label">Image</label><br>
                        <img src="{{ asset('public/upload/' . $obligation->image) }}" alt="Service Image" style="height: 50px;width:50px;"><br>
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

            <div class="modal fade" id="Deletemodal{{$obligation->id}}" tabindex="-1" aria-hidden="true">
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
                    <form action="{{url('delete_obligation')}}" method="post" autocomplete="off"  enctype="multipart/form-data">
                      @csrf
                      <div class="row">
                        <div class="col mb-3">
                          <label for="nameBasic" class="form-label">Heading</label>
                          <input type="text" value="{{$obligation->heading}}" name="heading" id="nameBasic" class="form-control" placeholder="Enter Name" / readonly>
                          <input type="hidden" value="{{$obligation->id}}" name="id"/>
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