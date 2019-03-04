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
                                                    <a class="nav-link active" href="#career_all" data-toggle="tab">
                                                        <i class="material-icons">done_outline</i> All Career
                                                        <div class="ripple-container"></div>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#career_pending" data-toggle="tab">
                                                        <i class="material-icons">done</i> Pending Career
                                                        <div class="ripple-container"></div>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#career_completed" data-toggle="tab">
                                                        <i class="material-icons">done_all</i> Completed Career
                                                        <div class="ripple-container"></div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="career_all">
                                            <table class="table" id="career_all_table">
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
                                                        Phone
                                                    </th>
                                                    <th>
                                                        Address
                                                    </th>
                                                    <th>
                                                        Qualification
                                                    </th>
                                                    <th>
                                                        Grade
                                                    </th>
                                                    <th>
                                                        Posistion
                                                    </th>
                                                    <th>
                                                        Employee
                                                    </th>
                                                </thead>
                                                <tbody>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="tab-pane" id="career_pending">
                                            <table class="table" id="career_pending_table">
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
                                                        Phone
                                                    </th>
                                                    <th>
                                                        Address
                                                    </th>
                                                    <th>
                                                        Qualification
                                                    </th>
                                                    <th>
                                                        Grade
                                                    </th>
                                                    <th>
                                                        Posistion
                                                    </th>
                                                    <th>
                                                        Employee
                                                    </th>
                                                </thead>
                                                <tbody>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="tab-pane" id="career_completed">
                                            <table class="table" id="career_completed_table">
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
                                                        Phone
                                                    </th>
                                                    <th>
                                                        Address
                                                    </th>
                                                    <th>
                                                        Qualification
                                                    </th>
                                                    <th>
                                                        Grade
                                                    </th>
                                                    <th>
                                                        Posistion
                                                    </th>
                                                    <th>
                                                        Employee
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
