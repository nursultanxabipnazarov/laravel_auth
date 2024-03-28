@extends('admin.layaut')

@section('title', 'ROOM ')


@section('content')

    <!-- Profile 1 - Bootstrap Brain Component -->
    <section class="bg-light py-3 py-md-5 py-xl-8">


        <div class="container">
            <div class="row gy-4 gy-lg-0">

                <div class="col-12 col-lg-8 col-xl-12">
                    <div class="card widget-card border-light shadow-sm">
                        <div class="card-body p-4">
                            <ul class="nav nav-tabs" id="profileTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="overview-tab" data-bs-toggle="tab"
                                        data-bs-target="#overview-tab-pane" type="button" role="tab"
                                        aria-controls="overview-tab-pane" aria-selected="true">Overview</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="profile-tab" data-bs-toggle="tab"
                                        data-bs-target="#profile-tab-pane" type="button" role="tab"
                                        aria-controls="profile-tab-pane" aria-selected="false">Profile</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="email-tab" data-bs-toggle="tab"
                                        data-bs-target="#email-tab-pane" type="button" role="tab"
                                        aria-controls="email-tab-pane" aria-selected="false">Emails</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="password-tab" data-bs-toggle="tab"
                                        data-bs-target="#password-tab-pane" type="button" role="tab"
                                        aria-controls="password-tab-pane" aria-selected="false">Password</button>
                                </li>
                            </ul>
                            <div class="tab-content pt-4" id="profileTabContent">
                                <div class="tab-pane fade show active" id="overview-tab-pane" role="tabpanel"
                                    aria-labelledby="overview-tab" tabindex="0">
                                    <h5 class="mb-3">About</h5>
                                    <p class="lead mb-3">Ethan Leo is a seasoned and results-driven Project Manager who
                                        brings experience and expertise to project management. With a proven track record of
                                        successfully delivering complex projects on time and within budget, Ethan Leo is the
                                        go-to professional for organizations seeking efficient and effective project
                                        leadership.</p>
                                    <h5 class="mb-3">Profile</h5>
                                    <div class="row g-0">
                                        <div class="col-5 col-md-3 bg-light border-bottom border-white border-3">
                                            <div class="p-2">First Name</div>
                                        </div>
                                        <div
                                            class="col-7 col-md-9 bg-light border-start border-bottom border-white border-3">
                                            <div class="p-2"> {{ $app->firstname }} </div>
                                        </div>
                                        <div class="col-5 col-md-3 bg-light border-bottom border-white border-3">
                                            <div class="p-2">Last Name</div>
                                        </div>
                                        <div
                                            class="col-7 col-md-9 bg-light border-start border-bottom border-white border-3">
                                            <div class="p-2"> {{ $app->lastname }} </div>
                                        </div>
                                        <div class="col-5 col-md-3 bg-light border-bottom border-white border-3">
                                            <div class="p-2">Education</div>
                                        </div>
                                        <div
                                            class="col-7 col-md-9 bg-light border-start border-bottom border-white border-3">
                                            <div class="p-2">M.S Computer Science</div>
                                        </div>
                                        <div class="col-5 col-md-3 bg-light border-bottom border-white border-3">
                                            <div class="p-2">Address</div>
                                        </div>
                                        <div
                                            class="col-7 col-md-9 bg-light border-start border-bottom border-white border-3">
                                            <div class="p-2">Mountain View, California</div>
                                        </div>
                                        <div class="col-5 col-md-3 bg-light border-bottom border-white border-3">
                                            <div class="p-2">Country</div>
                                        </div>
                                        <div
                                            class="col-7 col-md-9 bg-light border-start border-bottom border-white border-3">
                                            <div class="p-2">United States</div>
                                        </div>
                                        <div class="col-5 col-md-3 bg-light border-bottom border-white border-3">
                                            <div class="p-2">Job</div>
                                        </div>
                                        <div
                                            class="col-7 col-md-9 bg-light border-start border-bottom border-white border-3">
                                            <div class="p-2">Project Manager</div>
                                        </div>
                                        <div class="col-5 col-md-3 bg-light border-bottom border-white border-3">
                                            <div class="p-2">Company</div>
                                        </div>
                                        <div
                                            class="col-7 col-md-9 bg-light border-start border-bottom border-white border-3">
                                            <div class="p-2">GitHub Inc</div>
                                        </div>
                                        <div class="col-5 col-md-3 bg-light border-bottom border-white border-3">
                                            <div class="p-2">Phone</div>
                                        </div>
                                        <div
                                            class="col-7 col-md-9 bg-light border-start border-bottom border-white border-3">
                                            <div class="p-2">+1 (248) 679-8745</div>
                                        </div>
                                        <div class="col-5 col-md-3 bg-light border-bottom border-white border-3">
                                            <div class="p-2">Email</div>
                                        </div>
                                        <div
                                            class="col-7 col-md-9 bg-light border-start border-bottom border-white border-3">
                                            <div class="p-2">leo@example.com</div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                           
                        </div>
                        @if ($app->status =="proces")  
                        <form action=" {{route('storeMessage')}} " method="post">
                            @csrf
                            <div class="card-body">
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Title</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text"  name="title" class="form-control">
                                    </div>
                                </div>
                                <input type="hidden" name="app_id" value=" {{$app->id}} " >
                                <input type="hidden" name="user_id" value=" {{$app->user_id}} " >

                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Content</label>
                                    <div class="col-sm-12 col-md-7">
                                        <textarea name="body" class="summernote-simple"></textarea>
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                                    <div class="col-sm-12 col-md-7">
                                     
                                                                       
                                        <input class="mx-3 btn btn-danger" name="danger" type="submit"  value="Biykarlaw">
                                        <input class="mx-3 btn btn-success"name = "success"  type="submit"  value="Qabul qiliw">
                                        
                                        

                                    </div>
                                </div>
                            </div>
                        </form>

                        @else

                        <h1 class=" text-center" > <span class=" text-center badge bg-success">Qabillangan</span></h1>
                        @endif
                    </div>
                </div>
            </div>
        </div>



    </section>



@endsection
