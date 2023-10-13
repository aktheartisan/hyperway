@include('admin/section/header')
<!-- Content wrapper -->
<div class="content-wrapper">
  <!-- Content -->

  <div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Forms /</span> Basic Inputs</h4>
    <div class="row">
      <div class="col-md-6">
        <div class="card mb-4">
          <h5 class="card-header">Add the Videos</h5>
          <div class="card-body">
           <form action="{{ url('submit_gallery1') }}" method="post" enctype="multipart/form-data" autocomplete="off">
            @csrf
            <label class="form-label">Video</label>
            <input type="file" class="form-control" id="videoInput" name="video"/>
            <button type="submit" class="btn btn-primary active mt-2">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@include('admin/section/validation_video')
@include('admin/section/session')
@include('admin/section/footer')