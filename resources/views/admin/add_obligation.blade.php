@include('admin/section/header')
<!-- Content wrapper -->
<div class="content-wrapper">
  <!-- Content -->

  <div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Forms /</span> Basic Inputs</h4>
    <div class="row">
      <div class="col-md-6">
        <div class="card mb-4">
          <h5 class="card-header">Add Obligation Content</h5>
          <div class="card-body">
            <form action="{{url('submit_obligation')}}" method="post"  enctype="multipart/form-data" autocomplete="off">
              @csrf
              <label class="form-label">Image</label>
              <input type="file" class="form-control" id="defaultFormControlInput" name="image"/>
              <label class="form-label">Heading</label>
              <input type="text" class="form-control" id="defaultFormControlInput"  placeholder="Heading" name="heading" />
              <label class="form-label">Description</label>
              <textarea type="text" class="form-control" id="defaultFormControlInput"  placeholder="Description"  rows="4" cols="40" name="description"/></textarea>
              <button type="submit" class="btn btn-primary active mt-2">Submit</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  @include('admin/section/validation')
  @include('admin/section/session')
  @include('admin/section/validation_img')
  @include('admin/section/footer')