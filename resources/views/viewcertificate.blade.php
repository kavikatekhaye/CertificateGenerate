<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        .container {
            position: relative;
            text-align: center;
            color: black;
            font-weight: 545;
            font-size: 22px;
            size: A4;

        }

        /*.bottom-left {
  position: absolute;
  bottom: 8px;
  left: 16px;
  visibility: hidden;

}

.top-left {
  position: absolute;
  top: 8px;
  left: 16px;
}

.top-right {
  position: absolute;
  top: 8px;
  right: 16px;
}

 .bottom-right {
  position: absolute;
  bottom: 8px;
  right: 16px;
}*/



        .serial {
            position: absolute;
            top: 6.1%;
            left: 65%;
            transform: translate(-50%, -50%);
        }

        .no {
            position: absolute;
            top: 45.5%;
            left: 36%;
            transform: translate(-50%, -50%);
        }

        .rank {
            position: absolute;
            top: 45.5%;
            left: 59%;
            transform: translate(-50%, -50%);
        }

        .name {
            position: absolute;
            top: 51.1%;
            left: 36%;
            transform: translate(-50%, -50%);
        }

        .son_daughter {
            position: absolute;
            top: 51.1%;
            left: 59%;
            transform: translate(-50%, -50%);
        }

        .unit {
            position: absolute;
            top: 56.6%;
            left: 38%;
            transform: translate(-50%, -50%);
        }

        .date_of_birth {
            position: absolute;
            top: 56.6%;
            left: 59%;
            transform: translate(-50%, -50%);
        }

        .group {
            position: absolute;
            top: 62.1%;
            left: 35%;
            transform: translate(-50%, -50%);
        }

        .ncc_directorate {
            position: absolute;
            top: 62.1%;
            left: 59%;
            transform: translate(-50%, -50%);
        }

        .year {
            position: absolute;
            top: 75%;
            left: 49%;
            transform: translate(-50%, -50%);
        }

        .grade {
            position: absolute;
            top: 75%;
            left: 63%;
            transform: translate(-50%, -50%);
        }

        .place {
            position: absolute;
            top: 85.5%;
            left: 37.5%;
            transform: translate(-50%, -50%);
        }

        .date {
            position: absolute;
            top: 90.5%;
            left: 38.5%;
            transform: translate(-50%, -50%);
        }

        .commanding_officer {
            position: absolute;
            top: 92.3%;
            left: 61.1%;
            transform: translate(-50%, -50%);
        }

        .right_image {
            position: absolute;
            top: 20.8%;
            left: 70.4%;
            transform: translate(-50%, -50%);
        }

        .left_image {
            position: absolute;
            top: 20.8%;
            left: 29.5%;
            transform: translate(-50%, -50%);
        }

        .bottom-right {
            position: absolute;
            top: 5px;
            left: 10.4%;
        }

        .top-left {
            position: absolute;
            top: 4%;
            left: 10%;
        }

        .top-left .download:hover {
            color: rgb(42, 42, 172);
            background-color: rgb(34, 255, 0);
        }
    </style>
</head>

<body>

    <div class="container">
        <img src="{{ asset('hi.png') }}" alt="Snow" style="width:60%;">
        <div class="serial">{{ $certificate['ser_no'] }}</div>
        <div class="no">{{ $certificate['no'] }}</div>
        <div class="rank">{{ $certificate['rank'] }}</div>
        <div class="name">{{ $certificate['name'] }}</div>
        <div class="son_daughter">{{ $certificate['son_daughter'] }}</div>
        <div class="unit">{{ $certificate['unit'] }}</div>
        <div class="date_of_birth">{{ $certificate['date_of_birth'] }}</div>
        <div class="group">{{ $certificate['group'] }}</div>
        <div class="ncc_directorate">{{ $certificate['ncc_directorate'] }}</div>
        <div class="year">{{ $certificate['year'] }}</div>
        <div class="grade">{{ $certificate['grade'] }}</div>
        <div class="place">{{ $certificate['place'] }}</div>
        <div class="date">{{ $certificate['date'] }}</div>
        <div class="commanding_officer">{{ $certificate['commanding_officer'] }}</div>
        <div class="right_image"> <img src="{{ asset('uploads/' . $certificate['image']) }}" width="148"
                height="148"></div>
        <div class="left_image"> <img src="{{ asset('uploads/' . $certificate['image']) }}" width="148"
                height="148"></div>

        <div class="top-left"> <a href="{{ route('admin.certificate.pdf-download', $certificate->id) }}"><button
                    class="download">Download Certificate</button>
        </div>
    </div>

</body>

</html>
