@include('partials.panelHeader')

<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="mb-0">Blog Posts</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Blog</a></li>
                                <li class="breadcrumb-item active">Blog Posts</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row mb-2">
                                <div class="col-sm-4">
                                    <div class="search-box me-2 mb-2 d-inline-block">
                                        <div class="position-relative">
                                            <input type="text" class="form-control" placeholder="Search...">
                                            <i class="bx bx-search-alt search-icon"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-8">
                                    <div class="text-sm-end">
                                        <a type="button" href="{{ route('admin/createpost') }}"
                                            class="btn btn-success btn-rounded waves-effect waves-light mb-2 me-2"><i
                                                class="mdi mdi-plus me-1"></i>Add New Post</a>
                                    </div>
                                </div><!-- end col-->
                            </div>

                            <div class="table-responsive">
                                <table class="table align-middle table-nowrap table-check">
                                    <thead class="table-light">
                                        <tr>
                                            <th style="width: 20px;" class="align-middle">
                                                <div class="form-check font-size-16">
                                                    <input class="form-check-input" type="checkbox" id="checkAll">
                                                    <label class="form-check-label" for="checkAll"></label>
                                                </div>
                                            </th>
                                            <th class="align-middle">id</th>
                                            <th class="align-middle">Title</th>
                                            <th class="align-middle">Date</th>

                                            <th class="align-middle">Category</th>

                                            <th class="align-middle">View Post Details</th>
                                            <th class="align-middle">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="form-check font-size-16">
                                                    <input class="form-check-input" type="checkbox" id="orderidcheck01">
                                                    <label class="form-check-label" for="orderidcheck01"></label>
                                                </div>
                                            </td>
                                            <td><a href="javascript: void(0);" class="text-body fw-bold">#SK2540</a>
                                            </td>
                                            <td>Neal Matthews</td>
                                            <td>
                                                07 Oct, 2019
                                            </td>

                                            <td>
                                                <span
                                                    class="badge badge-pill badge-soft-success font-size-12">Nature</span>
                                            </td>

                                            <td>
                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-primary btn-sm btn-rounded"
                                                    data-bs-toggle="modal" data-bs-target=".orderdetailsModal">
                                                    View Details
                                                </button>
                                            </td>

                                            <td><a href="#!"><i
                                                        class="icon feather icon-edit f-w-600 f-16 m-r-15 text-c-green"></i></a><a
                                                    href="#!"><i
                                                        class="feather icon-trash-2 f-w-600 f-16 text-c-red"></i></a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <div class="form-check font-size-16">
                                                    <input class="form-check-input" type="checkbox" id="orderidcheck02">
                                                    <label class="form-check-label" for="orderidcheck02"></label>
                                                </div>
                                            </td>
                                            <td><a href="javascript: void(0);" class="text-body fw-bold">#SK2541</a>
                                            </td>
                                            <td>Jamal Burnett</td>
                                            <td>
                                                07 Oct, 2019
                                            </td>

                                            <td>
                                                <span
                                                    class="badge badge-pill badge-soft-danger font-size-12">Technology</span>
                                            </td>

                                            <td>
                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-primary btn-sm btn-rounded"
                                                    data-bs-toggle="modal" data-bs-target=".orderdetailsModal">
                                                    View Details
                                                </button>
                                            </td>

                                            <td><a href="#!"><i
                                                        class="icon feather icon-edit f-w-600 f-16 m-r-15 text-c-green"></i></a><a
                                                    href="#!"><i
                                                        class="feather icon-trash-2 f-w-600 f-16 text-c-red"></i></a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <div class="form-check font-size-16">
                                                    <input class="form-check-input" type="checkbox" id="orderidcheck03">
                                                    <label class="form-check-label" for="orderidcheck03"></label>
                                                </div>
                                            </td>
                                            <td><a href="javascript: void(0);" class="text-body fw-bold">#SK2542</a>
                                            </td>
                                            <td>Juan Mitchell</td>
                                            <td>
                                                06 Oct, 2019
                                            </td>

                                            <td>
                                                <span
                                                    class="badge badge-pill badge-soft-success font-size-12">Nature</span>
                                            </td>

                                            <td>
                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-primary btn-sm btn-rounded"
                                                    data-bs-toggle="modal" data-bs-target=".orderdetailsModal">
                                                    View Details
                                                </button>
                                            </td>

                                            <td><a href="#!"><i
                                                        class="icon feather icon-edit f-w-600 f-16 m-r-15 text-c-green"></i></a><a
                                                    href="#!"><i
                                                        class="feather icon-trash-2 f-w-600 f-16 text-c-red"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-check font-size-16">
                                                    <input class="form-check-input" type="checkbox"
                                                        id="orderidcheck04">
                                                    <label class="form-check-label" for="orderidcheck04"></label>
                                                </div>
                                            </td>
                                            <td><a href="javascript: void(0);" class="text-body fw-bold">#SK2543</a>
                                            </td>
                                            <td>Barry Dick</td>
                                            <td>
                                                05 Oct, 2019
                                            </td>

                                            <td>
                                                <span
                                                    class="badge badge-pill badge-soft-success font-size-12">Nature</span>
                                            </td>

                                            <td>
                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-primary btn-sm btn-rounded"
                                                    data-bs-toggle="modal" data-bs-target=".orderdetailsModal">
                                                    View Details
                                                </button>
                                            </td>

                                            <td><a href="#!"><i
                                                        class="icon feather icon-edit f-w-600 f-16 m-r-15 text-c-green"></i></a><a
                                                    href="#!"><i
                                                        class="feather icon-trash-2 f-w-600 f-16 text-c-red"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-check font-size-16">
                                                    <input class="form-check-input" type="checkbox"
                                                        id="orderidcheck05">
                                                    <label class="form-check-label" for="orderidcheck05"></label>
                                                </div>
                                            </td>
                                            <td><a href="javascript: void(0);" class="text-body fw-bold">#SK2544</a>
                                            </td>
                                            <td>Ronald Taylor</td>
                                            <td>
                                                04 Oct, 2019
                                            </td>

                                            <td>
                                                <span
                                                    class="badge badge-pill badge-soft-warning font-size-12">Health</span>
                                            </td>

                                            <td>
                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-primary btn-sm btn-rounded"
                                                    data-bs-toggle="modal" data-bs-target=".orderdetailsModal">
                                                    View Details
                                                </button>
                                            </td>

                                            <td><a href="#!"><i
                                                        class="icon feather icon-edit f-w-600 f-16 m-r-15 text-c-green"></i></a><a
                                                    href="#!"><i
                                                        class="feather icon-trash-2 f-w-600 f-16 text-c-red"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-check font-size-16">
                                                    <input class="form-check-input" type="checkbox"
                                                        id="orderidcheck06">
                                                    <label class="form-check-label" for="orderidcheck06"></label>
                                                </div>
                                            </td>
                                            <td><a href="javascript: void(0);" class="text-body fw-bold">#SK2545</a>
                                            </td>
                                            <td>Jacob Hunter</td>
                                            <td>
                                                04 Oct, 2019
                                            </td>

                                            <td>
                                                <span
                                                    class="badge badge-pill badge-soft-success font-size-12">Nature</span>
                                            </td>

                                            <td>
                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-primary btn-sm btn-rounded"
                                                    data-bs-toggle="modal" data-bs-target=".orderdetailsModal">
                                                    View Details
                                                </button>
                                            </td>

                                            <td><a href="#!"><i
                                                        class="icon feather icon-edit f-w-600 f-16 m-r-15 text-c-green"></i></a><a
                                                    href="#!"><i
                                                        class="feather icon-trash-2 f-w-600 f-16 text-c-red"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-check font-size-16">
                                                    <input class="form-check-input" type="checkbox"
                                                        id="orderidcheck07">
                                                    <label class="form-check-label" for="orderidcheck07"></label>
                                                </div>
                                            </td>
                                            <td><a href="javascript: void(0);" class="text-body fw-bold">#SK2546</a>
                                            </td>
                                            <td>William Cruz</td>
                                            <td>
                                                03 Oct, 2019
                                            </td>

                                            <td>
                                                <span
                                                    class="badge badge-pill badge-soft-success font-size-12">Nature</span>
                                            </td>

                                            <td>
                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-primary btn-sm btn-rounded"
                                                    data-bs-toggle="modal" data-bs-target=".orderdetailsModal">
                                                    View Details
                                                </button>
                                            </td>

                                            <td><a href="#!"><i
                                                        class="icon feather icon-edit f-w-600 f-16 m-r-15 text-c-green"></i></a><a
                                                    href="#!"><i
                                                        class="feather icon-trash-2 f-w-600 f-16 text-c-red"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-check font-size-16">
                                                    <input class="form-check-input" type="checkbox"
                                                        id="orderidcheck08">
                                                    <label class="form-check-label" for="orderidcheck08"></label>
                                                </div>
                                            </td>
                                            <td><a href="javascript: void(0);" class="text-body fw-bold">#SK2547</a>
                                            </td>
                                            <td>Dustin Moser</td>
                                            <td>
                                                02 Oct, 2019
                                            </td>

                                            <td>
                                                <span
                                                    class="badge badge-pill badge-soft-success font-size-12">Nature</span>
                                            </td>

                                            <td>
                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-primary btn-sm btn-rounded"
                                                    data-bs-toggle="modal" data-bs-target=".orderdetailsModal">
                                                    View Details
                                                </button>
                                            </td>

                                            <td><a href="#!"><i
                                                        class="icon feather icon-edit f-w-600 f-16 m-r-15 text-c-green"></i></a><a
                                                    href="#!"><i
                                                        class="feather icon-trash-2 f-w-600 f-16 text-c-red"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-check font-size-16">
                                                    <input class="form-check-input" type="checkbox"
                                                        id="orderidcheck09">
                                                    <label class="form-check-label" for="orderidcheck09"></label>
                                                </div>
                                            </td>
                                            <td><a href="javascript: void(0);" class="text-body fw-bold">#SK2548</a>
                                            </td>
                                            <td>Clark Benson</td>
                                            <td>
                                                01 Oct, 2019
                                            </td>

                                            <td>
                                                <span
                                                    class="badge badge-pill badge-soft-warning font-size-12">Health</span>
                                            </td>

                                            <td>
                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-primary btn-sm btn-rounded"
                                                    data-bs-toggle="modal" data-bs-target=".orderdetailsModal">
                                                    View Details
                                                </button>
                                            </td>

                                            <td><a href="#!"><i
                                                        class="icon feather icon-edit f-w-600 f-16 m-r-15 text-c-green"></i></a><a
                                                    href="#!"><i
                                                        class="feather icon-trash-2 f-w-600 f-16 text-c-red"></i></a>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                            <ul class="pagination pagination-rounded justify-content-end mb-2">
                                <li class="page-item disabled">
                                    <a class="page-link" href="javascript: void(0);" aria-label="Previous">
                                        <i class="mdi mdi-chevron-left"></i>
                                    </a>
                                </li>
                                <li class="page-item active"><a class="page-link" href="javascript: void(0);">1</a>
                                </li>
                                <li class="page-item"><a class="page-link" href="javascript: void(0);">2</a></li>
                                <li class="page-item"><a class="page-link" href="javascript: void(0);">3</a></li>
                                <li class="page-item"><a class="page-link" href="javascript: void(0);">4</a></li>
                                <li class="page-item"><a class="page-link" href="javascript: void(0);">5</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="javascript: void(0);" aria-label="Next">
                                        <i class="mdi mdi-chevron-right"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div> <!-- container-fluid -->
    </div>
    <!-- End Page-content -->

    <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <script>
                        document.write(new Date().getFullYear())
                    </script> &copy; Symox.
                </div>
                <div class="col-sm-6">
                    <div class="text-sm-end d-none d-sm-block">
                        Crafted with <i class="mdi mdi-heart text-danger"></i> by <a href="https://themesbrand.com/"
                            target="_blank" class="text-reset">Themesbrand</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>
<!-- end main content-->

@include('partials.panelFooter')
