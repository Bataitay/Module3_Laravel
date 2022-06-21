
    <div class="container">
        <div class="row my-5">
            <div class="col-lg-12">
                <div class="card shadow">
                    <div class="card-header bg-danger d-flex justify-content-between align-items-center">
                        <h3 class="text-light">Manage Employees</h3>
                        <button class="btn btn-light" data-bs-toggle="modal" data-bs-target="#addEmployeeModal"><i
                                class="bi-plus-circle me-2"></i>Add New Employee</button>
                    </div>
                    <div class="card-body" id="show_all_employees">
                        <h1 class="text-center text-secondary my-5">Loading...</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script>
  employeegetAll();

function employeegetAll() {
    $.ajax({
        url: '{{ route('employees.getAll') }}',
        method: 'get',
        success: function(res) {
            $('#show_all_employees').html(res);
            $('table').DataTable({
                order: [3, 'DESC'],

            })
        }
    })
}
</script>
