<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Certificate of Confirmation</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .certificate {
            width: 80%;
            margin: 0 auto;
            border: 1px solid #f00;
            padding: 20px;
        }
        h1 {
            text-align: center;
            color: red;
        }
        .info {
            text-align: center;
        }
        .signature {
            margin-top: 50px;
            text-align: right;
        }
        .border-decor {
            width: 100%;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="certificate">
        <h1>Certificate of Confirmation</h1>
        <p class="info">
            This is to certify that <strong>{{ $confirmation->parishioner->fullname }}</strong>,<br>
            child of <strong>{{$confirmation->parishioner->name_of_father}} and {{$confirmation->parishioner->name_of_mother}}</strong><br>
            was solemnly confirmed on the <strong>{{ $confirmation->date_of_confirmation }}</strong><br>
            according to the Rite of the Roman Catholic Church.
        </p>

        <p class="info">
            By <strong>{{ $confirmation->officiating_clergy }}</strong>,<br>
            Sponsors being <strong>{{ $confirmation->sponsors->first()->fullname }}</strong><br>
            and as appears in the Confirmation Register No. <strong>{{ $confirmation->serial_number }}</strong>.
        </p>

        <div class="signature">
            Given at the Parish Rectory this {{ $dateToday }} day of {{ $dateYear }}<br>
            <br>
            <br>
            <p>{{ Auth::user()->church->name_of_priest }}</p>
            <hr>
            <strong>Parish Priest</strong>
        </div>
    </div>
</body>
</html>
