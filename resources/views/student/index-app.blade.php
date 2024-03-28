@extends('student.layaut')

@section('title', 'INDEX|AP')

@section('content')

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>Advanced Table</h4>
                    <div class="card-header-form">
                        <form>
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search">
                                <div class="input-group-btn">
                                    <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <tr>
                                <th class="text-center">
                                    <div class="custom-checkbox custom-checkbox-table custom-control">
                                        <input type="checkbox" data-checkboxes="mygroup" data-checkbox-role="dad"
                                            class="custom-control-input" id="checkbox-all">
                                        <label for="checkbox-all" class="custom-control-label">&nbsp;</label>
                                    </div>
                                </th>
                                <th>Task Name</th>
                                <th>Progress</th>
                                <th>Members</th>
                                <th>Due Date</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            @foreach ($applications as $application)
                                <tr>
                                    <td class="p-0 text-center">
                                        <div class="custom-checkbox custom-control">
                                            <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input"
                                                id="checkbox-1">
                                            <label for="checkbox-1" class="custom-control-label">&nbsp;</label>
                                        </div>
                                    </td>
                                    <td> {{ $application->lastname }} </td>
                                    <td class="align-middle">
                                        <div class="progress" data-height="4" data-toggle="tooltip" title="100%">
                                            <div class="progress-bar bg-success" data-width="100"></div>
                                        </div>
                                    </td>
                                    <td>
                                        <img alt="image" src="assets/img/users/user-5.png" class="rounded-circle"
                                            width="35" data-toggle="tooltip" title="Wildan Ahdian">
                                    </td>
                                    <td>2018-01-20</td>
                                    <td>
                                        @if ($application->status == 'proces')
                                            <div class="badge badge-warning">Proces</div>
                                          @elseif ($application->status == 'success')
                                          <div class="badge badge-success">Completed</div>
                                          @else
                                          <div class="badge badge-danger">Not accepted</div>

                                        @endif
                                    </td>


                                    <td><a href="{{route('showApp',$application->id)}}" class="btn btn-primary">Detail</a></td>
                                </tr>
                            @endforeach

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
