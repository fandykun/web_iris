<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Add new gallery</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- Form diinputkan disini -->
          <form class="form-contact contact_form" action="{{ route('gallery.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
              <div class="col-12">
                <div class="form-group">
                  <input class="form-control" name="title"type="text" placeholder="Enter title" required>
                </div>
              </div>
              <div class="col-12">
                <div class="form-group">
                    <textarea class="form-control w-100" name="description" cols="30" rows="3" placeholder="Enter description" required></textarea>
                </div>
              </div>
              <div class="col-12">
                <div class="form-group">
                    <label for="exampleFormControlFile1">Upload Image</label>
                    <input type="file" accept="image/*" name="image" class="form-control-file" id="exampleFormControlFile1" required>
                </div>
              </div>
            </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
    </div>
  </div>
</div>

@section('script2')
<script>
$('#exampleModalCenter').on('hidden.bs.modal', function (e) {
    console.log('hehe');
    $(this).find('form').trigger('reset');
})
</script>
@endsection