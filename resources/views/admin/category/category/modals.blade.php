<!-- Category insert modal -->
<!-- Modal -->
<div class="modal fade" id="categoryModal" tabindex="-1" aria-labelledby="categoryModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="categoryModalLabel">Add New Category</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{route('category.store')}}" method="post">
        @csrf
      <div class="modal-body">
                <div class="form-group">
                    <label for="category_name">Category Name</label>
                    <input type="text" class="form-control" name="category_name" id="category_name"  aria-describedby="textHelp">
                    <small id="textHelp" class="form-text text-muted">This is your main category.</small>
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

<!-- category edit modal -->

<div class="modal fade" id="categoryEditModal" tabindex="-1" aria-labelledby="categoryEditModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="categoryEditModalLabel">Edit Category</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{route('category.update')}}" method="post">
        @csrf
      <div class="modal-body">
                <div class="form-group">
                    <label for="category_name">Category Name</label>
                    <input type="text" class="form-control" name="category_name" id="e_category_name"  aria-describedby="textHelp">
                    <input type="hidden" class="form-control" name="id" id="e_category_id"  aria-describedby="textHelp">
                    <small id="textHelp" class="form-text text-muted">This is your main category.</small>
                </div> 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Update</button>
      </div>
       </form>
    </div>
  </div>
</div>

<!-- ajax cdn link -->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


<script>

$('body').on('click', '.edit', function(){
    let cat_id = $(this).data('id');
    // alert(cat_id);
    $.get('category/edit/' + cat_id,function(data){

        // console.log(data);
        $('#e_category_name').val(data.category_name);
        $('#e_category_id').val(data.id);
        
    });
});
</script>

