<div class="modal fade" id="addCategoryModal" tabindex="-1" aria-labelledby="exampleModalLabel"
    data-bs-backdrop="static" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add New Category</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('categories.store') }}" method="POST" id="add_category_form" enctype="multipart/form-data">
                @csrf
                <div class="modal-body p-4 bg-light">
                    <div class="my-2">
                        <label for="name">Name</label>
                        <input type="text" name="name" class="form-control" placeholder="Name category" required>
                    </div>
                    <div class="my-2">
                        <label for="image">Select picture</label>
                        <input type="file" name="image" class="form-control" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" id="add_category_btn" class="btn btn-primary">Add Employee</button>
                </div>
            </form>
        </div>
    </div>
</div>
<script>
// //    function addCategory(){ //


//    }
</script>
