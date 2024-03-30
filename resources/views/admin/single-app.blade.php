@extends('admin.layaut')

@section('title', 'ROOM ')


@section('content')

    <!-- Profile 1 - Bootstrap Brain Component -->
    <section class="bg-light py-3 py-md-5 py-xl-8">


        <div class="container">
            <div class="row gy-4 gy-lg-0">

                <div class="col-12 col-lg-8 col-xl-12">
                    <div class="card widget-card border-light shadow-sm">
                        <div class="card-body ">
                            <div class="tab-content" id="profileTabContent">
                                <div class="tab-pane fade show active" id="overview-tab-pane" role="tabpanel"
                                    aria-labelledby="overview-tab" tabindex="0">
                                    <h3 class="mb-3">Application</h3>
                                    <h5>Personal Information</h5>
                                    <div class="row g-0">
                                        <div class="col-5 col-md-3 bg-light border-bottom border-white border-3">
                                            <div class="p-2">First Name</div>
                                        </div>
                                        <div
                                            class="col-7 col-md-9 bg-light border-start border-bottom border-white border-3">
                                            <div class="p-2"> {{ $userApp->firstname }} </div>
                                        </div>
                                        <div class="col-5 col-md-3 bg-light border-bottom border-white border-3">
                                            <div class="p-2">Last Name</div>
                                        </div>
                                        <div
                                            class="col-7 col-md-9 bg-light border-start border-bottom border-white border-3">
                                            <div class="p-2"> {{ $userApp->lastname }} </div>
                                        </div>
                                        <div class="col-5 col-md-3 bg-light border-bottom border-white border-3">
                                            <div class="p-2">JSHSHIR</div>
                                        </div>
                                        <div
                                            class="col-7 col-md-9 bg-light border-start border-bottom border-white border-3">
                                            <div class="p-2">{{ $userApp->jshshir }}</div>
                                        </div>
                                        <div class="col-5 col-md-3 bg-light border-bottom border-white border-3">
                                            <div class="p-2">Phone</div>
                                        </div>
                                        <div
                                            class="col-7 col-md-9 bg-light border-start border-bottom border-white border-3">
                                            <div class="p-2">{{ $userApp->phone }}</div>
                                        </div>
                                    </div>
                                    <h5 class="mb-3">Life Information</h5>
                                    <div class="row g-0">
                                        <div class="col-5 col-md-3 bg-light border-bottom border-white border-3">
                                            <div class="p-2">Region</div>
                                        </div>
                                        <div
                                            class="col-7 col-md-9 bg-light border-start border-bottom border-white border-3">
                                            <div class="p-2">{{ $userApp->region }}</div>
                                        </div>
                                        <div class="col-5 col-md-3 bg-light border-bottom border-white border-3">
                                            <div class="p-2">District</div>
                                        </div>
                                        <div
                                            class="col-7 col-md-9 bg-light border-start border-bottom border-white border-3">
                                            <div class="p-2">{{ $userApp ->district }}</div>
                                        </div>
                                        <div class="col-5 col-md-3 bg-light border-bottom border-white border-3">
                                            <div class="p-2">Quarter</div>
                                        </div>
                                        <div
                                            class="col-7 col-md-9 bg-light border-start border-bottom border-white border-3">
                                            <div class="p-2">{{ $userApp->quarter }}</div>
                                        </div>
                                        <div class="col-5 col-md-3 bg-light border-bottom border-white border-3">
                                            <div class="p-2">Street</div>
                                        </div>
                                        <div
                                            class="col-7 col-md-9 bg-light border-start border-bottom border-white border-3">
                                            <div class="p-2">{{ $userApp->street }}</div>
                                        </div>
                                    </div>
                                    <h5 class="mb-3">Education Information</h5>
                                    <div class="row g-0">
                                        <div class="col-5 col-md-3 bg-light border-bottom border-white border-3">
                                            <div class="p-2">Faculty</div>
                                        </div>
                                        <div
                                            class="col-7 col-md-9 bg-light border-start border-bottom border-white border-3">
                                            <div class="p-2">{{ $userApp->facultet }}</div>
                                        </div>
                                        <div class="col-5 col-md-3 bg-light border-bottom border-white border-3">
                                            <div class="p-2">Profession</div>
                                        </div>
                                        <div
                                            class="col-7 col-md-9 bg-light border-start border-bottom border-white border-3">
                                            <div class="p-2">{{ $userApp->group }}</div>
                                        </div>
                                        <div class="col-5 col-md-3 bg-light border-bottom border-white border-3">
                                            <div class="p-2">Group</div>
                                        </div>
                                        <div
                                            class="col-7 col-md-9 bg-light border-start border-bottom border-white border-3">
                                            <div class="p-2">{{ $userApp->kurs }}</div>
                                        </div>
                                    </div>
                                    <h5 class="mb-3">Privelege Information</h5>
                                    <div class="row g-0">
                                        <div class="col-5 col-md-3 bg-light border-bottom border-white border-3">
                                            <div class="p-2">Privelege</div>
                                        </div>
                                        <div
                                            class="col-7 col-md-9 bg-light border-start border-bottom border-white border-3">
                                            <div class="p-2">{{ $userApp->privilege }}</div>
                                        </div>
                                        <div class="col-5 col-md-3 bg-light border-bottom border-white border-3">
                                            <div class="p-2">File</div>


                                        </div>
                                        <div
                                            class="col-7 col-md-9 bg-light border-start border-bottom border-white border-3">
                                            <div class="p-2">
                                                <a href="/files/{{$userApp->privilege_file}}"
                                                    class="mx btn btn-success"  download  >Download </a></div>
                                                   
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
                        @if ($userApp->status == 'proces')
                            <form action=" {{ route('storeMessage') }} " method="post">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Title</label>
                                        <div class="col-sm-12 col-md-7">
                                            <input type="text" name="title" class="form-control">
                                        </div>
                                    </div>
                                    <input type="hidden" name="app_id" value=" {{ $userApp->id }} ">
                                    <input type="hidden" name="user_id" value=" {{ $userApp->user_id }} ">

                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Content</label>
                                        <div class="col-sm-12 col-md-7">
                                            <textarea name="body" class="summernote-simple"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                                        <div class="col-sm-12 col-md-7">
                                            <input class="mx-3 btn btn-danger" name="danger" type="submit"
                                                value="Biykarlaw">
                                            <input class="mx-3 btn btn-success"name="success" type="submit"
                                                value="Qabul qiliw">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        @else
                            <h1 class=" text-center"> <span class=" text-center badge bg-success">Qabillangan</span></h1>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>






@endsection
