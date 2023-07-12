<!DOCTYPE html>
<html>
<head>
    <title>Students List</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"/>
    <link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h2 class="mb-4">Students List</h2>
    <div class="form-row">
        <div class="col">
            <input type="text" class="form-control searchName" placeholder="Name" id="name">
        </div>
        <div class="col">
            <input type="text" class="form-control searchUserName" placeholder="Username" id="username">
        </div>
    </div>
    <br>
    <table class="table table-bordered yajra-datatable">
        <thead>
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Email</th>
            <th>Username</th>
            <th>Phone</th>
            <th>DOB</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
</div>

</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script type="text/javascript">
    $(function () {

        var table = $('.yajra-datatable').DataTable({
            processing: true,
            serverSide: true,
            // ajax: "{{ route('students.list') }}",
            ajax: {
                url: "{{ route('students.list') }}",
                data: function(d) {
                    d.name = $('.searchName').val(),
                    d.userName = $('.searchUserName').val()
                    // d.search = $('input[type="search"]').val()
                }
            },
            columns: [
                {data: 'id', name: 'id'},
                {data: 'name', name: 'name'},
                {data: 'email', name: 'email'},
                {data: 'username', name: 'username'},
                {data: 'phone', name: 'phone'},
                {data: 'dob', name: 'dob'},
                {
                    data: 'action',
                    name: 'action',
                    orderable: true,
                    searchable: true
                },
            ]
        });
        $(".searchName").keyup(function(){
            table.draw();
        });
        $(".searchUserName").keyup(function(){
            table.draw();
        });

    });
</script>
</html>
