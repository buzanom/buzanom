<!DOCTYPE html>
<html lang="en">
@include('admin.include.head')
<body class="">
    <div class="wrapper ">
        @include('admin.include.slider')
        <div class="main-panel">
            @include('admin.include.nav')
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header card-header-tabs card-header-primary">
                                    <div class="nav-tabs-navigation">
                                        <div class="nav-tabs-wrapper">
                                            <ul class="nav nav-tabs" data-tabs="tabs">
                                                <li class="nav-item">
                                                    <a class="nav-link active" href="#employee_all" data-toggle="tab">
                                                        <i class="material-icons">done_outline</i> All Employee
                                                        <div class="ripple-container"></div>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#employee_current" data-toggle="tab">
                                                        <i class="material-icons">done</i> Current Employee
                                                        <div class="ripple-container"></div>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#employee_previous" data-toggle="tab">
                                                        <i class="material-icons">done_all</i> Previous Employee
                                                        <div class="ripple-container"></div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="employee_all">
                                            <table class="table" id="employee_all_table">
                                                <thead class=" text-primary">
                                                    <th>
                                                        ID
                                                    </th>
                                                    <th>
                                                        Name
                                                    </th>
                                                    <th>
                                                        Email
                                                    </th>
                                                    <th>
                                                        Username
                                                    </th>
                                                    <th>
                                                        Mobile
                                                    </th>
                                                    <th>
                                                        Department
                                                    </th>
                                                    <th>
                                                        Post
                                                    </th>
                                                    <th>
                                                        Type
                                                    </th>
                                                    <th>
                                                        Level
                                                    </th>
                                                    <th>
                                                        From Career
                                                    </th>
                                                    <th>
                                                        Offer Number
                                                    </th>
                                                    <th>
                                                        Joining Number
                                                    </th>
                                                    <th>
                                                        Profile Number
                                                    </th>
                                                </thead>
                                                <tbody>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="tab-pane" id="employee_current">
                                            <table class="table" id="employee_current_table">
                                                <thead class=" text-primary">
                                                    <th>
                                                        ID
                                                    </th>
                                                    <th>
                                                        Name
                                                    </th>
                                                    <th>
                                                        Email
                                                    </th>
                                                    <th>
                                                        Username
                                                    </th>
                                                    <th>
                                                        Mobile
                                                    </th>
                                                    <th>
                                                        Department
                                                    </th>
                                                    <th>
                                                        Post
                                                    </th>
                                                    <th>
                                                        Type
                                                    </th>
                                                    <th>
                                                        Level
                                                    </th>
                                                    <th>
                                                        From Career
                                                    </th>
                                                    <th>
                                                        Offer Number
                                                    </th>
                                                    <th>
                                                        Joining Number
                                                    </th>
                                                    <th>
                                                        Profile Number
                                                    </th>
                                                </thead>
                                                <tbody>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="tab-pane" id="employee_previous">
                                            <table class="table" id="employee_previous_table">
                                                <thead class=" text-primary">
                                                    <th>
                                                        ID
                                                    </th>
                                                    <th>
                                                        Name
                                                    </th>
                                                    <th>
                                                        Email
                                                    </th>
                                                    <th>
                                                        Username
                                                    </th>
                                                    <th>
                                                        Mobile
                                                    </th>
                                                    <th>
                                                        Department
                                                    </th>
                                                    <th>
                                                        Post
                                                    </th>
                                                    <th>
                                                        Type
                                                    </th>
                                                    <th>
                                                        Level
                                                    </th>
                                                    <th>
                                                        From Career
                                                    </th>
                                                    <th>
                                                        Offer Number
                                                    </th>
                                                    <th>
                                                        Joining Number
                                                    </th>
                                                    <th>
                                                        Profile Number
                                                    </th>
                                                </thead>
                                                <tbody>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @include('admin.include.footer')
            @include('admin.include.script')
</body>

</html>
