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
                                <div class="card-header card-header-primary">
                                    <h4 class="card-title ">Contact inquiry</h4>
                                </div>
                                <div class="card-body">
                                    <!-- <div class="table-responsive"> -->
                                    <table class="table" id="contact_table">
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
                                                Subject
                                            </th>
                                            <th>
                                                Message
                                            </th>
                                        </thead>
                                        <tbody>
                                        </tbody>
                                    </table>
                                    <!-- </div> -->
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
