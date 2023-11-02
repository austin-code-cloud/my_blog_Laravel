@include('partials.panelHeader')

<div class="pcoded-content">

    <div class="page-header card">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <i class="feather icon-watch bg-c-blue"></i>
                    <div class="d-inline">
                        <h5>Sample page</h5>
                        <span>lorem ipsum dolor sit amet, consectetur adipisicing elit</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="page-header-breadcrumb">
                    <ul class=" breadcrumb breadcrumb-title">
                        <li class="breadcrumb-item">
                            <a href="../index.html"><i class="feather icon-home"></i></a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="#!">Add New Tag</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">
                <div class="page-body">
                    <form action="{{ route('admin/tag/createtag') }}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h5>Add New Tag</h5>
                                        <div class="card-header-right">
                                            <ul class="list-unstyled card-option">
                                                <li class="first-opt"><i
                                                        class="feather icon-chevron-left open-card-option"></i></li>
                                                <li><i class="feather icon-maximize full-card"></i></li>
                                                <li><i class="feather icon-minus minimize-card"></i></li>
                                                <li><i class="feather icon-refresh-cw reload-card"></i></li>
                                                <li><i class="feather icon-trash close-card"></i></li>
                                                <li><i class="feather icon-chevron-left open-card-option"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="card-block">
                                        <p>
                                            "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                            tempor
                                            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                            nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                            consequat.
                                            Duis aute irure dolor
                                            in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                                            pariatur.
                                            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                                            deserunt mollit anim id est laborum."
                                        </p>
                                    </div>
                                </div>
                            </div>


                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h5>Tag Details</h5>
                                        <span>Add class of <code>.form-control</code> with <code>&lt;input&gt;</code>
                                            tag</span>
                                    </div>
                                    <div class="card-block">
                                        <div class="row">
                                            <div class="col-md-12">


                                                <fieldset>
                                                    <div class="form-group row">
                                                        <div class="col-sm-12">
                                                            <label for="userName-2" class="block">Tag Name
                                                            </label>
                                                        </div>
                                                        <div class="col-sm-12">
                                                            <input id="userName-2a" name="category_name" type="text"
                                                                class=" form-control">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-sm-12">
                                                            <label for="email-2" class="block">Description
                                                            </label>
                                                        </div>
                                                        <div class="col-sm-12">
                                                            <textarea name="description" class="col-sm-12"></textarea>
                                                        </div>
                                                    </div>

                                                </fieldset>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col text-center">

                            <button class="btn waves-effect waves-light btn-success"><i
                                    class="icofont icofont-check-circled"></i>Create Tag</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@include('partials.panelFooter')