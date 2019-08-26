<!-- Modal -->
<div class="modal fade" id="modal-edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle2" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle2">Edit gallery</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <!-- Form diinputkan disini -->
            <form class="form-contact contact_form" action="{{ route('gallery.update') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input name="_method" type="hidden" value="PUT">
                <input name="id" type="hidden" id="id">
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                        <input class="form-control" id="title" name="title" type="text" placeholder="Enter title" required>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <textarea class="form-control w-100" id="description" name="description" cols="30" rows="3" placeholder="Enter description" required></textarea>
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
    
@section('script3')
<script>
$('#modal-edit').on('shown.bs.modal', async function(e) {
    var dataId = $(e.relatedTarget).attr('data-id');
    let data;
    try {
        data = await $.ajax({
            url: '{{url('admin/gallery/show')}}/' + dataId,
            dataType: 'json'
        });
        console.log(dataId);
    } catch (error) {
        alert('error');
        console.log(error);
        return;
    }    

    $("#id").val(dataId);
    $("#title").val(data.title);
    $("#description").val(data.description);
})

$('#modal-edit').on('hidden.bs.modal', function (e) {
    $(this).find('form').trigger('reset');
})

</script>
@endsection