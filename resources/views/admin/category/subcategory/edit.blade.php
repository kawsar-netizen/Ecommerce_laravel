 <form action="{{route('subcategory.update')}}" method="post">
        @csrf
      <div class="modal-body">
                <div class="form-group">
                    <label for="category_name">Category Name</label>
                    <select  class = "form-control"name="category_id" id="" requird="">
                        @foreach($category as $row)
                            <option value="{{$row->id}}" @if($row->id == $data->category_id) selected="" @endif>
                            {{$row->category_name}}
                            </option>
                        @endforeach
                    </select>
                    <input type="hidden" name="id" value="{{$data->id}}">
                </div> 

                <div class="form-group">
                    <label for="category_name">Sub Category Name</label>
                    <input type="text" class="form-control" name="subcategory_name"value="{{$data->subcategory_name}}" aria-describedby="textHelp">
                    <small id="textHelp" class="form-text text-muted">This is your sub category.</small>
                </div> 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Update</button>
      </div>
       </form>