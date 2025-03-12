@extends("layouts.admin-layouts.admin-master")
@section('headlinks')
    <meta name="csrf-token" content="{{ csrf_token() }}">
@endsection
@section("contents")
<div class="container-fluid">

    <div class="row">
        <div class="col">

            <div class="h-100">
                <div class="row mb-3 pb-1">
                    <div class="col-12">
                        <div class="d-flex align-items-lg-center flex-lg-row flex-column">
                            <div class="flex-grow-1">
                                <h4 class="fs-16 mb-1"><b id="greeting"></b>, {{Auth::user()->first_name ?? ""}} {{Auth::user()->last_name ?? ""}}!</h4>
                            </div>
                        </div><!-- end card header -->
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header border-bottom d-flex">
                                <h5 class="card-title mb-0">Cat List</h5>
                                <button type="button" class="btn btn-info add-btn ms-auto" data-bs-toggle="modal"
                                    id="create-btn" data-bs-target="#showskillsModal" style="background-color: rgb(14, 54, 255) !important;"><i
                                        class="ri-add-line align-bottom me-1"></i> Add</button>
                            </div>
                            <div class="card-body">

                            <table
                                            class="table table-bordered dt-responsive nowrap table-striped align-middle data-table1"
                                            style="width:100%">
                                    <thead>
                                        <tr>
                                            <th scope="col" style="width: 10px">
                                                <div class="form-check">
                                                    <input
                                                        class="form-check-input fs-15"
                                                        type="checkbox"
                                                        id="checkAll"
                                                        value="option" />
                                                </div>
                                            </th>
                                            <th data-ordering="false">SR No.</th>
                                            <th data-ordering="false">ID</th>
                                            <th data-ordering="false">Purchase ID</th>
                                            <th data-ordering="false">Title</th>
                                            <th data-ordering="false">User</th>
                                            <th>Assigned To</th>
                                            <th>Created By</th>
                                            <th>Create Date</th>
                                            <th>Status</th>
                                            <th>Priority</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">
                                                <div class="form-check">
                                                    <input
                                                        class="form-check-input fs-15"
                                                        type="checkbox"
                                                        name="checkAll"
                                                        value="option1" />
                                                </div>
                                            </th>
                                            <td>01</td>
                                            <td>VLZ-452</td>
                                            <td>VLZ1400087402</td>
                                            <td>
                                                <a href="#!">Post launch reminder/ post list</a>
                                            </td>
                                            <td>Joseph Parker</td>
                                            <td>Alexis Clarke</td>
                                            <td>Joseph Parker</td>
                                            <td>03 Oct, 2021</td>
                                            <td>
                                                <span class="badge bg-info-subtle text-info">Re-open</span>
                                            </td>
                                            <td><span class="badge bg-danger">High</span></td>
                                            <td>
                                                <div class="dropdown d-inline-block">
                                                    <button
                                                        class="btn btn-soft-secondary btn-sm dropdown"
                                                        type="button"
                                                        data-bs-toggle="dropdown"
                                                        aria-expanded="false">
                                                        <i class="ri-more-fill align-middle"></i>
                                                    </button>
                                                    <ul class="dropdown-menu dropdown-menu-end">
                                                        <li>
                                                            <a href="#!" class="dropdown-item"><i
                                                                    class="ri-eye-fill align-bottom me-2 text-muted"></i>
                                                                View</a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item edit-item-btn"><i
                                                                    class="ri-pencil-fill align-bottom me-2 text-muted"></i>
                                                                Edit</a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item remove-item-btn">
                                                                <i
                                                                    class="ri-delete-bin-fill align-bottom me-2 text-muted"></i>
                                                                Delete
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!--end col-->
                </div>
            </div> <!-- end .h-100-->

        </div> <!-- end col -->
    </div>

</div>
@endsection
@section('scripts')
@endsection