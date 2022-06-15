 {{-- edit employee modal start --}}
 <div class="modal fade" id="editEmployeeModal" tabindex="-1" aria-labelledby="exampleModalLabel"
 data-bs-backdrop="static" aria-hidden="true">
 <div class="modal-dialog modal-dialog-centered">
     <div class="modal-content">
         <div class="modal-header">
             <h5 class="modal-title" id="exampleModalLabel">Edit Employee</h5>
             <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
         </div>
         <form action="#" method="POST" id="edit_employee_form" enctype="multipart/form-data">
             @csrf
             <input type="hidden" name="emp_id" id="emp_id">
             <input type="hidden" name="emp_avatar" id="emp_avatar">
             <div class="modal-body p-4 bg-light">
                 <div class="row">
                     <div class="col-lg">
                         <label for="fname">First Name</label>
                         <input type="text" name="fname" id="fname" class="form-control"
                             placeholder="First Name" required>
                     </div>
                     <div class="col-lg">
                         <label for="lname">Last Name</label>
                         <input type="text" name="lname" id="lname" class="form-control"
                             placeholder="Last Name" required>
                     </div>
                 </div>
                 <div class="my-2">
                     <label for="email">E-mail</label>
                     <input type="email" name="email" id="email" class="form-control" placeholder="E-mail"
                         required>
                 </div>
                 <div class="my-2">
                     <label for="phone">Phone</label>
                     <input type="tel" name="phone" id="phone" class="form-control" placeholder="Phone"
                         required>
                 </div>
                 <div class="my-2">
                     <label for="avatar">Select Avatar</label>
                     <input type="file" name="avatar" class="form-control">
                 </div>
                 <div class="mt-2" id="avatar">

                 </div>
             </div>
             <div class="modal-footer">
                 <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                 <button type="submit" id="edit_employee_btn" class="btn btn-success">Update Employee</button>
             </div>
         </form>
     </div>
 </div>
</div>
{{-- edit employee modal end --}}
<script>
      //function edit employee

      $(document).on('click', '.editIcon', function(e) {
            e.preventDefault();
            let id = $(this).attr('id');
            $.ajax({
                url: '{{ route('employees.edit') }}',
                method: 'get',
                data: {
                    id: id,
                    _token: '{{ csrf_token() }}'
                },
                success: function(res) {
                    $("#fname").val(res.firstname);
                    $("#lname").val(res.lasttname);
                    $("#email").val(res.email);
                    $("#phone").val(res.phone);
                    $("#post").val(res.post);
                    $("#avatar").html(
                        `<img src="storage/images/${res.avatar}" width="100" class="img-fluid img-thumbnail">`
                    );
                    $("#emp_id").val(res.id);
                    $("#emp_avatar").val(res.avatar);
                }
            });
        });

        //function update employee
        $("#edit_employee_form").submit(function(e) {
            e.preventDefault();
            const fd = new FormData(this);
            $("#edit_employee_btn").text('Updating...');
            $.ajax({
                url: '{{ route('employees.update') }}',
                method: 'post',
                data: fd,
                cache: false,
                contentType: false,
                processData: false,
                dataType: 'json',
                success: function(res) {
                    if (res.status == 200) {
                        Swal.fire(
                            'Updated!',
                            'Employee Updated Successfully!',
                            'success'
                        )
                        employeegetAll();
                    }
                    $("#edit_employee_btn").text('Update Employee');
                    $("#edit_employee_form")[0].reset();
                    $("#editEmployeeModal").modal('hide');
                }
            });
        });
</script>

