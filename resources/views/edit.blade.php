<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        .container {
            position: relative;
            text-align: center;
            color: black;
            /* font-weight: 545; */
            font-weight: bold;

            font-size: 15px;
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
            top: 5.3%;
            left: 73%;
                        transform: translate(-50%, -50%);
        }

        .no {
            position: absolute;
            top: 39%;
            left: 27%;
            transform: translate(-50%, -50%);
        }

        .rank {
            position: absolute;
            top: 39%;
            left: 64%;
            transform: translate(-50%, -50%);
        }

        .name {
            position: absolute;
            top: 43.9%;
            left: 25%;
            transform: translate(-50%, -50%);
        }

        .son_daughter {
            position: absolute;
            top: 43.9%;
            left: 66%;
            transform: translate(-50%, -50%);
        }

        .unit {
            position: absolute;
            top: 48.7%;
            left: 30%;
            transform: translate(-50%, -50%);
        }

        .date_of_birth {
            position: absolute;
            top: 48.7%;
            left: 66%;
            transform: translate(-50%, -50%);
        }

        .group {
            position: absolute;
            top: 53.4%;
            left: 25%;
            transform: translate(-50%, -50%);
        }

        .ncc_directorate {
            position: absolute;
            top: 53.4%;
            left: 66%;
            transform: translate(-50%, -50%);
        }

        .year {
            position: absolute;
            top: 64.3%;
            left: 47.8%;
            transform: translate(-50%, -50%);
        }

        .grade {
            position: absolute;
            top: 64.3%;
            left: 74%;
            transform: translate(-50%, -50%);
        }

        .place {
            position: absolute;
            top: 73.3%;
            left: 24%;
            transform: translate(-50%, -50%);
        }

        .date {
            position: absolute;
            top: 77.5%;
            left: 24%;
            transform: translate(-50%, -50%);
        }

        .commanding_officer {
            position: absolute;
            top: 78.7%;
            left: 69%;
            transform: translate(-50%, -50%);
        }

        .right_image {
            position: absolute;
            top: 17.5%;
            left: 83.8%;
            transform: translate(-50%, -50%);
        }

        .left_image {
            position: absolute;
            top:17.5%;
            left: 15.9%;
            transform: translate(-50%, -50%);
        }

        .bottom-right {
            position: absolute;
            top: 5px;
            left: 78.4%;
        }
    </style>
</head>

<body>

    <div class="container">
        <img src="{{ public_path('hi.png') }}" alt="Snow"style="width:100%;">
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
        <div class="right_image"> <img src="{{ public_path('uploads/' . $certificate['image']) }}" width="127"
                height="127">
        </div>
        <div class="left_image"> <img src="{{ public_path('uploads/' . $certificate['image']) }}" width="127"
                height="127"></div>

    </div>

</body>

</html>
