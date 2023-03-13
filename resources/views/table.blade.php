<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>

    <div class="container">
        <h2>Basic Table</h2>
        <button><a href="{{ route('admin.certificate.create') }}">Add</a></button>
        <table class="table" id="data">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Sr.No</th>
                    <th>No</th>
                    <th>Rank</th>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Son/Doughter</th>
                    <th>Unit</th>
                    <th>Date Of Birth </th>
                    <th>Group</th>
                    <th>NCC Directorate </th>
                    <th>Year</th>
                    <th>Grade</th>
                    <th>Place</th>
                    <th>Date</th>
                    <th>Commanding Officer</th>
                    <th>Actions</th>
                    <th>Pdf</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($certificate as $d)
                    <tr>
                        <td>{{ $d->id }}</td>
                        <td>{{ $d->ser_no }}</td>
                        <td>{{ $d->no }}</td>
                        <td>{{ $d->rank }}</td>
                        <td><img src="{{ asset('uploads/' . $d->image) }}"width="50px"height="50px" alt="">
                        </td>
                        <td>{{ $d->name }}</td>
                        <td>{{ $d->son_daughter }}</td>
                        <td>{{ $d->unit }}</td>
                        <td>{{ $d->date_of_birth }}</td>
                        <td>{{ $d->group }}</td>
                        <td>{{ $d->ncc_directorate }}</td>
                        <td>{{ $d->year }}</td>
                        <td>{{ $d->grade }}</td>
                        <td>{{ $d->place }}</td>
                        <td>{{ $d->date }}</td>
                        <td>{{ $d->commanding_officer }}</td>
                        <td>
                            <a href="{{ route('admin.certificate.pdf-download', $d->id) }}"><button>Download</button>
                            </a>
                            <a href="{{ route('admin.certificate.destroy', $d->id) }}"><button>delete</button> </a>
                        </td>
                        <td> <a href="{{ route('admin.certificate.viewCertificate', $d->id) }}"><button
                                    class="btn btn-success">View</button>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>


</html>
