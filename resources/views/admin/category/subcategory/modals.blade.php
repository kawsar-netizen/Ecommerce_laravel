<!-- Category insert modal -->
<!-- Modal -->
<div class="modal fade" id="subcategoryModal" tabindex="-1" aria-labelledby="subcategoryModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="subcategoryModalModalLabel">Add New Sub Category</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{route('subcategory.store')}}" method="post">
        @csrf
      <div class="modal-body">
                <div class="form-group">
                    <label for="category_name">Category Name</label>
                    <select  class = "form-control"name="category_id" id="" requird="">
                        @foreach($category as $row)
                            <option value="{{$row->id}}">
                            {{$row->category_name}}
                            </option>
                        @endforeach
                    </select>
                </div> 

                <div class="form-group">
                    <label for="category_name">Sub Category Name</label>
                    <input type="text" class="form-control" name="subcategory_name" aria-describedby="textHelp">
                    <small id="textHelp" class="form-text text-muted">This is your sub category.</small>
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

<!-- subcategory edit modal -->

<div class="modal fade" id="subcategoryEditModal" tabindex="-1" aria-labelledby="subcategoryEditModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="subcategoryEditModalLabel">Edit Sub Category</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
       <div id ="modal_body">
            
       </div>
    </div>
  </div>
</div>

<!-- ajax cdn link -->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


<script>

$('body').on('click', '.edit', function(){
    let subcat_id = $(this).data('id');
    // alert(subcat_id);
    $.get('subcategory/edit/' + subcat_id,function(data){
        // console.log(data);
        $("#modal_body").html(data);
  
    });
});
</script>

