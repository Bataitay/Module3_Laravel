{{-- add new employee modal start --}}
<div class="modal fade" id="addEmployeeModal" tabindex="-1" aria-labelledby="exampleModalLabel"
data-bs-backdrop="static" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Add New Employee</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="#" method="POST" id="add_employee_form" enctype="multipart/form-data">
            @csrf
            <div class="modal-body p-4 bg-light">
                <div class="row">
                    <div class="col-lg">
                        <label for="fname">First Name</label>
                        <input type="text" name="fname" class="form-control" placeholder="First Name" required>
                    </div>
                    <div class="col-lg">
                        <label for="lname">Last Name</label>
                        <input type="text" name="lname" class="form-control" placeholder="Last Name" required>
                    </div>
                </div>
                <div class="my-2">
                    <label for="email">E-mail</label>
                    <input type="email" name="email" class="form-control" placeholder="E-mail" required>
                </div>
                <div class="my-2">
                    <label for="phone">Phone</label>
                    <input type="tel" name="phone" class="form-control" placeholder="Phone" required>
                </div>
                <div class="my-2">
                    <label for="avatar">Select Avatar</label>
                    <input type="file" name="avatar" class="form-control" required>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" id="add_employee_btn" class="btn btn-primary">Add Employee</button>
            </div>
        </form>
    </div>
</div>
</div>
{{-- add new employee modal end --}}
