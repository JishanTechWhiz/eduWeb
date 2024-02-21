<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>EduWeb - The Best Program to Enroll for Exchange</title>
    <!--
    - favicon
  -->
    <link rel="shortcut icon" href="{{ url('/fronted/images/favicon.svg') }}" type="image/svg+xml">

    <link rel="stylesheet" href="{{ url('https://fonts.googleapis.com/css?family=Roboto|Varela+Round') }}">
    <link rel="stylesheet" href="{{ url('https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('https://fonts.googleapis.com/icon?family=Material+Icons') }}">
    <link rel="stylesheet"
        href="{{ url('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css') }}">
    <script src="{{ url('https://code.jquery.com/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ url('https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js') }}"></script>
    <script src="{{ url('https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js') }}"></script>
    <style>
        body {
            color: #566787;
            background: #f5f5f5;
            font-family: 'Varela Round', sans-serif;
            font-size: 13px;
        }

        .table-responsive {
            margin: 30px 0;
        }

        .table-wrapper {
            background: #fff;
            padding: 20px 25px;
            border-radius: 3px;
            min-width: 1000px;
            box-shadow: 0 1px 1px rgba(0, 0, 0, .05);
        }

        .table-title {
            padding-bottom: 15px;
            background: #435d7d;
            color: #fff;
            padding: 16px 30px;
            min-width: 100%;
            margin: -20px -25px 10px;
            border-radius: 3px 3px 0 0;
        }

        .table-title h2 {
            margin: 5px 0 0;
            font-size: 24px;
        }

        .table-title .btn-group {
            float: right;
        }

        .table-title .btn {
            color: #fff;
            float: right;
            font-size: 13px;
            border: none;
            min-width: 50px;
            border-radius: 2px;
            border: none;
            outline: none !important;
            margin-left: 10px;
        }

        .table-title .btn i {
            float: left;
            font-size: 21px;
            margin-right: 5px;
        }

        .table-title .btn span {
            float: left;
            margin-top: 2px;
        }

        table.table tr th,
        table.table tr td {
            border-color: #e9e9e9;
            padding: 12px 15px;
            vertical-align: middle;
        }

        table.table tr th:first-child {
            width: 60px;
        }

        table.table tr th:last-child {
            width: 100px;
        }

        table.table-striped tbody tr:nth-of-type(odd) {
            background-color: #fcfcfc;
        }

        table.table-striped.table-hover tbody tr:hover {
            background: #f5f5f5;
        }

        table.table th i {
            font-size: 13px;
            margin: 0 5px;
            cursor: pointer;
        }

        table.table td:last-child i {
            opacity: 0.9;
            font-size: 22px;
            margin: 0 5px;
        }

        table.table td a {
            font-weight: bold;
            color: #566787;
            display: inline-block;
            text-decoration: none;
            outline: none !important;
        }

        table.table td a:hover {
            color: #2196F3;
        }

        table.table td a.edit {
            color: #FFC107;
        }

        table.table td a.delete {
            color: #F44336;
        }

        table.table td i {
            font-size: 19px;
        }

        table.table .avatar {
            border-radius: 50%;
            vertical-align: middle;
            margin-right: 10px;
        }


        /* Modal styles */
        .modal .modal-dialog {
            max-width: 600px;
        }

        .modal .modal-header,
        .modal .modal-body,
        .modal .modal-footer {
            padding: 20px 30px;
        }

        .modal .modal-content {
            border-radius: 3px;
            font-size: 14px;
        }

        .modal .modal-footer {
            background: #ecf0f1;
            border-radius: 0 0 3px 3px;
        }

        .modal .modal-title {
            display: inline-block;
        }

        .modal .form-control {
            border-radius: 2px;
            box-shadow: none;
            border-color: #dddddd;
        }

        .modal textarea.form-control {
            resize: vertical;
        }

        .modal .btn {
            border-radius: 2px;
            min-width: 100px;
        }

        .modal form label {
            font-weight: normal;
        }

        .myHome {
            color: hsl(170, 75%, 41%);
            margin-top: 30px;
            margin-left: 60px;
            font-size: 1.3rem;
        }

        .notFound{
            text-align: center;
            color: #F44336;
            font-size: 1.3rem;
        }
    </style>
</head>

<body>
    <a href="{{ url('/') }}">

        <h4 class="myHome"><i class="fa fa-arrow-left"></i> Back to Home</h4>
    </a>
    <div class="container-xl">
        <div class="table-responsive">
            <div style="text-align: center">
                @if (session()->has('message'))
                    <div id="successMessage" class="alert alert-success">
                        <button class="close" data-dismiss="alert">x</button>
                        {{ session()->get('message') }}
                    </div>
                @endif
            </div>
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-6">
                            <h2>Manage <b>Course</b></h2>
                        </div>
                        <div class="col-sm-6">
                            <a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i
                                    class="material-icons">&#xE147;</i> <span>Add New Course</span></a>
                            <!-- <a href="#deleteEmployeeModal" class="btn btn-danger" data-toggle="modal"><i class="material-icons">&#xE15C;</i> <span>Delete</span></a>
           -->
                        </div>
                    </div>
                </div>
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>

                            </th>
                            <th>Course Title</th>
                            <th>Course Level</th>
                            <th>Course Provider</th>
                            <th>Course Category</th>
                            <th>Course Duration</th>
                            <th>Course Price</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($courses->isEmpty())
                            <tr>
                                <td colspan="9" class="notFound">Data not found</td>
                            </tr>
                        @else
                            @foreach ($courses as $course)
                                <td>

                                </td>
                                <td>{{ $course->course_name }}</td>
                                <td>{{ $course->course_level }}</td>
                                <td>{{ $course->course_provider }}</td>
                                <td>{{ $course->course_category }}</td>
                                <td>{{ $course->course_duration }} weeks</td>
                                <td>{{ $course->price }}$</td>
                                <td>{{ $course->course_rating }}</td>
                                <td>
                                    <a href="#editEmployeeModal{{ $course->course_id }}" class="edit"
                                        data-courseid="{{ $course->course_id }}" data-toggle="modal"><i
                                            class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                                    <a href="#deleteEmployeeModal" class="delete"
                                        data-courseid="{{ $course->course_id }}" data-toggle="modal"><i
                                            class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                                    {{-- <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons"
                                    data-toggle="tooltip" title="Delete">&#xE872;</i></a> --}}
                                </td>
                                </tr>
                            @endforeach
                        @endif
                    </tbody>
                </table>
               
            </div>
        </div>
    </div>
    <!-- Add Modal HTML -->
    <div id="addEmployeeModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <form method="post" action="{{ url('/') }}/manageCourse" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-header">
                        <h4 class="modal-title">Add Course</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="inputField1">Course Title</label>
                                    <input type="text" class="form-control" name="title" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="selectField1">Course Level</label>
                                    <select class="form-control" name="clevel" required>
                                        <option hidden>Level</option>
                                        <option value="Beginner">Beginner Level</option>
                                        <option value="Intermediate">Intermediate Level</option>
                                        <option value="Advanced">Advanced Level </option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <input type="text" name="description" class="form-control" required>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Duration (in weeks):</label>
                                    <input type="number" name="duration" class="form-control" required>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Price ($):</label>
                                    <input type="numbers" step="0.01" name="price" class="form-control"
                                        required>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="selectField1">Course Provider</label>
                                    <select class="form-control" name="provider_name" required>
                                        <option hidden>Select Provider</option>
                                        <option value="Rahul Patel">Rahul Patel</option>
                                        <option value="Rohit Sharma">Rohit Sharma</option>
                                        <option value="Sami Khan">Sami Khan</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="selectField1">Course Category</label>
                                    <select class="form-control" name="category_name" required>
                                        <option hidden>Select Category</option>
                                        <option value="Project Management">Project Management</option>
                                        <option value="Networking">Networking</option>
                                        <option value="Programming">Programming </option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="inputField1">Course Rating</label>
                                    <input type="text" class="form-control" name="course_rating">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="inputField1">Course Start Date</label>
                                    <input type="date" class="form-control" name="start_date">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="inputField1">Course End Date</label>
                                    <input type="date" class="form-control" name="end_date">
                                </div>
                            </div>

                        </div>
                        <div class="form-group">
                            <label>Upload Course Image</label>
                            <input type="file" id="courseImage" name="course_image" accept="image/*">
                        </div>
                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                        <input type="submit" class="btn btn-success" value="Add">


                    </div>



            </div>
            {{-- <div class="modal-footer">
                <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                <input type="submit" class="btn btn-success" value="Add">
            </div> --}}
            </form>
        </div>
    </div>
    </div>
    <!-- Edit Modal HTML -->
    @foreach ($courses as $course)
        <div id="editEmployeeModal{{ $course->course_id }}" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form method="post" action="{{ url('/manageCourse/update') }}/{{ $course->course_id }}"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="modal-header">
                            <h4 class="modal-title">Manage Course</h4>
                            <button type="button" class="close" data-dismiss="modal"
                                aria-hidden="true">&times;</button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="inputField1">Course Title</label>
                                        <input type="text" class="form-control"
                                            value="{{ $course->course_name }}" name="title" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="selectField1">Course Level</label>

                                        <select class="form-control" name="clevel">
                                            <option hidden>Level</option>
                                            <option value="Beginner"
                                                {{ $course->course_level == 'Beginner' ? 'selected' : '' }}>Beginner
                                                Level</option>
                                            <option value="Intermediate"
                                                {{ $course->course_level == 'Intermediate' ? 'selected' : '' }}>
                                                Intermediate Level</option>
                                            <option value="Advanced"
                                                {{ $course->course_level == 'Advanced' ? 'selected' : '' }}>Advanced
                                                Level </option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Description</label>
                                <input type="text" name="description" class="form-control"
                                    value="{{ $course->course_description }} "required>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Duration (in weeks):</label>
                                        <input type="number" value="{{ $course->course_duration }}" name="duration"
                                            class="form-control" required>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Price ($):</label>
                                        <input type="numbers" step="0.01" name="price" class="form-control"
                                            value="{{ $course->price }}" required>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="selectField1">Course Provider</label>
                                        <select class="form-control" name="provider_name" required>
                                            <option hidden>Select Provider</option>
                                            <option value="Rahul Patel"
                                                {{ $course->course_provider == 'Rahul Patel' ? 'selected' : '' }}>Rahul
                                                Patel</option>
                                            <option value="Rohit Sharma"
                                                {{ $course->course_provider == 'Rohit Sharma' ? 'selected' : '' }}>
                                                Rohit Sharma</option>
                                            <option value="Sami Khan"
                                                {{ $course->course_provider == 'Sami Khan' ? 'selected' : '' }}>Sami
                                                Khan</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="selectField1">Course Category</label>
                                        <select class="form-control" name="category_name" required>
                                            <option hidden>Select Category</option>
                                            <option value="Project Management"
                                                {{ $course->course_category == 'Project Management' ? 'selected' : '' }}>
                                                Project Management</option>
                                            <option value="Networking"
                                                {{ $course->course_category == 'Networking' ? 'selected' : '' }}>
                                                Networking</option>
                                            <option value="Programming"
                                                {{ $course->course_category == 'Programming' ? 'selected' : '' }}>
                                                Programming</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="inputField1">Course Rating</label>
                                        <input type="number" class="form-control"
                                            value="{{ $course->course_rating }}" name="course_rating">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="inputField1">Course Start Date</label>
                                        <input type="date" class="form-control" value="{{ $course->start_date }}"
                                            name="start_date">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="inputField1">Course End Date</label>
                                        <input type="date" class="form-control" value="{{ $course->end_date }}"
                                            name="end_date">
                                    </div>
                                </div>

                            </div>
                            <div class="form-group">
                                <label>Upload Course Image</label>
                                <input type="file" id="courseImage" value="{{ $course->image_path }}"
                                    name="course_image" accept="image/*">
                            </div>
                            <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                            <input type="submit" class="btn btn-success" value="Update">


                        </div>



                </div>
                {{-- <div class="modal-footer">
                <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                <input type="submit" class="btn btn-info" value="Save">
            </div> --}}
                </form>
            </div>
        </div>
    @endforeach
    </div>
    <!-- Delete Modal HTML -->
    <div id="deleteEmployeeModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-header">
                    <h4 class="modal-title">Delete Course</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    <p>Are you sure you want to delete these Records?</p>
                    <p class="text-warning"><small>This action cannot be undone.</small></p>
                </div>
                <div class="modal-footer">
                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                    <input type="submit" id="confirmDelete" class="btn btn-danger" value="Delete">
                </div>

            </div>
        </div>
    </div>



<script>
    setTimeout(function() {
        document.getElementById('successMessage').style.display = 'none';
    }, 3000);

    $(document).ready(function() {
        $('.delete').on('click', function(e) {
            e.preventDefault();
            var courseId = $(this).data('courseid'); // Retrieve the unique ID
            var deleteUrl = "{{ url('/manageCourse/delete/') }}/" +
            courseId; // Construct the delete URL
            $('#deleteEmployeeModal').modal('show');

            $('#confirmDelete').off().on('click', function() {
                window.location.href = deleteUrl;
            });
        });
    });
</script>
</body>

</html>
