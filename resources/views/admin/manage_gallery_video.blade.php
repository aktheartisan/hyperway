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
      <h5 class="card-header">Manage the Videos</h5>
      <div class="table-responsive text-nowrap">
        <table class="table">
          <thead>
            <tr>
              <th>Image</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody class="table-border-bottom-0">
            @foreach($gallerys1 as $gallery)
            <tr>
              <td>
                <video width="300" height="200" controls>
                  <source src="{{ asset('public/upload/' . $gallery->video) }}" type="video/mp4">
                    Your browser does not support the video tag.
                  </video>
                </td>
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
                      data-bs-target="#Updatemodal{{$gallery->id}}"><i class="bx bx-edit-alt me-1"></i> Edit</a
                      >
                      <a class="dropdown-item" href="javascript:void(0);"
                      type="button"
                      class="btn btn-primary"
                      data-bs-toggle="modal"
                      data-bs-target="#Deletemodal{{$gallery->id}}"
                      ><i class="bx bx-trash me-1"></i> Delete</a
                      >
                    </div>
                  </div>
                </td>
                <!-- Modal -->
                <div class="modal fade" id="Updatemodal{{$gallery->id}}" tabindex="-1" aria-hidden="true">
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
                        <form action="{{url('update_gallery_video')}}" method="post" autocomplete="off"  enctype="multipart/form-data">
                          @csrf
                          <div class="col mb-3">
                            <label for="nameBasic" class="form-label">Video</label><br>
                            <video id="videoPlayer{{$gallery->id}}" data-gallery-id="{{$gallery->id}}" width="300" height="200" controls>
                              <source src="{{ asset('public/upload/' . $gallery->video) }}" type="video/mp4">
                                Your browser does not support the video tag.
                              </video>
                              <br>
                              <input type="file" id="videoInput" class="form-control mt-3" name="image" />
                              <input type="hidden" value="{{$gallery->id}}" name="id"/>
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

                  <div class="modal fade" id="Deletemodal{{$gallery->id}}" tabindex="-1" aria-hidden="true">
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
                          <form action="{{url('delete_gallery_video')}}" method="post" autocomplete="off"  enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                              <div class="col mb-3">
                                <label for="nameBasic" class="form-label">Video</label><br>
                                <!-- <video width="300" height="200" controls>
                                  <source src="{{ asset('public/upload/' . $gallery->video) }}" type="video/mp4">
                                    Your browser does not support the video tag.
                                  </video> -->
                                  <video id="videoPlayer{{$gallery->id}}" width="300" height="200">
                                    <source src="{{ asset('public/upload/' . $gallery->video) }}" type="video/mp4">
                                      Your browser does not support the video tag.
                                    </video>
                                    <br>
                                    <input type="hidden" value="{{$gallery->id}}" name="id"/>
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
        <script>
          $(document).ready(function () {
        // Get a reference to the video element
            var videoElements = document.querySelectorAll('[data-gallery-id]');

        // Loop through each video element
            videoElements.forEach(function (videoElement) {
              var galleryId = videoElement.getAttribute('data-gallery-id');
              var video = document.getElementById('videoPlayer' + galleryId);

            // Pause the video at the starting point
              video.currentTime = 0;

            // Add an event listener to pause the video when the delete modal is shown
              $('#Deletemodal' + galleryId).on('show.bs.modal', function () {
                // Pause the video
                video.pause();
              });
            });
          });
        </script>
        @include('admin/section/session')
        @include('admin/section/validation')
        @include('admin/section/validation_video')
        @include('admin/section/footer')