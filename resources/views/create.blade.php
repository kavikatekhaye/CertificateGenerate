
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

    <div class="row mb-2 mb-xl-3">
        <div class="col-auto d-none d-sm-block">
            <h3>Add Certificate</h3>
            <hr>
        </div>
        <div class="col-auto ms-auto text-end mt-n1">
            {{-- <a class="btn btn-primary" href="{{ route('admin.commission') }}"><i data-feather="arrow-left"></i>Back</a> --}}
        </div>
    </div>

    <div class="container"  >
        <div class="card-body">
            <form enctype="multipart/form-data" method="POST" action="{{ route('admin.certificate.store') }}"
                class="needs-validation" novalidate>
                @csrf
                <div class="card-body">
                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label class="form-label" for="name">Sr.No<span class="text-danger">
                                    *</span></label>
                            <input type="text" class="form-control" name="ser_no"
                                placeholder="" value="" >
                        </div>

                        <div class="mb-3 col-md-6">
                            <label class="form-label" for="no">No<span class="text-danger">
                                    *</span></label>
                            <input type="text" class="form-control" name="no"
                                placeholder="" value="" >
                        </div>

                        <div class="mb-3 col-md-6">
                            <label class="form-label" for="name">Rank<span class="text-danger">
                                    *</span></label>
                            <input type="text" class="form-control" name="rank"
                                placeholder="" value="" >
                        </div>

                        <div class="mb-3 col-md-6">
                            <label class="form-label" for="image">Image <span class="text-danger">
                                    *</span></label>
                            <input type="file" class="form-control" name="image"
                                placeholder="" value="" >
                        </div>

                        <div class="mb-3 col-md-6">
                            <label class="form-label" for="name">Name <span class="text-danger">
                                    *</span></label>
                            <input type="text" class="form-control" name="name"
                                placeholder="" value="" >
                        </div>

                        <div class="mb-3 col-md-6">
                            <label class="form-label" for="son_daughter">Son/Doughter<span class="text-danger">
                                    *</span></label>
                            <input type="text"  class="form-control" name="son_daughter"
                                placeholder="" value="">
                        </div>

                        <div class="mb-3 col-md-6">
                            <label class="form-label" for="name">Unit <span class="text-danger">
                                    *</span></label>
                            <input type="text"  class="form-control" name="unit"
                                placeholder="" value="" >
                        </div>
                        <div class="mb-3 col-md-6">
                            <label class="form-label" for="name">Date Of Birth <span class="text-danger">
                                    *</span></label>
                            <input type="text" class="form-control" name="date_of_birth"
                                placeholder="" value="">
                        </div>
                        <div class="mb-3 col-md-6">
                            <label class="form-label" for="name">Group <span class="text-danger">
                                    *</span></label>
                            <input type="text"  class="form-control" name="group"
                                placeholder="" value="" >
                        </div>
                        <div class="mb-3 col-md-6">
                            <label class="form-label" for="name">NCC Directorate <span class="text-danger">
                                    *</span></label>
                            <input type="text" class="form-control" name="ncc_directorate"
                                placeholder="" value="">
                        </div>
                        <div class="mb-3 col-md-6">
                            <label class="form-label" for="name">Year <span class="text-danger">
                                    *</span></label>
                            <input type="text" class="form-control" name="year"
                                placeholder="" value="" >
                        </div>
                        <div class="mb-3 col-md-6">
                            <label class="form-label" for="name">Grade <span class="text-danger">
                                    *</span></label>
                            <input type="text" class="form-control" name="grade"
                                placeholder="" value="" >
                        </div>
                        <div class="mb-3 col-md-6">
                            <label class="form-label" for="name">Place <span class="text-danger">
                                    *</span></label>
                            <input type="text"class="form-control" name="place"
                                placeholder="" value="" >
                        </div>
                        <div class="mb-3 col-md-6">
                            <label class="form-label" for="date">Date <span class="text-danger">
                                    *</span></label>
                            <input type="text"  class="form-control" name="date"
                                placeholder="" value="" >
                        </div>

                        <div class="mb-3 col-md-6">
                            <label class="form-label" for="name">Commanding Officer<span class="text-danger">
                                    *</span></label>
                            <input type="text" step="0.01" id="totalAmt" class="form-control" name="commanding_officer"
                                placeholder="" value="" >
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>




