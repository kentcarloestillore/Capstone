<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Certificate of Death</title>
    <style>
        body {
            font-family: 'Times New Roman', Times, serif;
        }
        .certificate {
            width: 80%;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid black;
            line-height: 1.5;
        }
        h1 {
            text-align: center;
            font-size: 24px;
            font-weight: bold;
        }
        .center {
            text-align: center;
        }
        .section {
            margin: 20px 0;
        }
        .underline {
            border-bottom: 1px solid black;
            width: max-content;
            display: inline-block;
        }
        .checkbox {
            display: inline-block;
            width: 10px;
            height: 10px;
            border: 1px solid black;
            margin-right: 5px;
        }
        .signature {
            text-align: right;
            margin-top: 50px;
        }
        .footer {
            text-align: right;
            margin-top: 30px;
        }
        #fullname{
            align-items: left;
            width: max-content;
        }
        .border_top{
            position: absolute;
            justify-content: space-between;
            width: 100vh;
        }
    </style>
</head>
<body>
    <div class="certificate">
        <div class="border_top">
            <img src="{{ asset('pdf/deathcert-border.jpg') }}" alt="" srcset="">
            <img src="{{ asset('pdf/deathcert-border.jpg') }}" alt="" srcset="">
            <img src="{{ asset('pdf/deathcert-border.jpg') }}" alt="" srcset="">
        </div>
        <h1>Certificate of Death</h1>

        <p class="center">This is to certify that</p>
        <p class="section">
            <span class="underline" id="fullname">{{ $death->parishioner->fullname }}</span><br>
            a resident of Barangay <span class="underline">{{ $death->parishioner->residence}}</span>,<br>
            Municipality of <span class="underline">Tubigon</span>,
            Province of <span class="underline">Bohol</span>,
        </p>

        <p>
            [ ] single, son/daughter of <span class="underline">{{ $death->parishioner->name_of_father ?? '_________________________' }}</span> and
            <span class="underline">{{ $death->parishioner->name_of_mother ?? '_________________________' }}</span><br>
            [ ] husband/wife/widow/er of <span class="underline">{{ $death->partner_name ?? '__________________________' }}</span>
        </p>

        <p>
            died on the <span class="underline">{{ $dateOfDeathDay ?? '______' }}</span> day of
            <span class="underline">{{ $dateOfDeathMonth ?? '_________________' }}</span>,
            <span class="underline">{{ $dateOfDeathYear ?? '____' }}</span>, at the age of
            <span class="underline">{{ $age ?? '____' }}</span> years,
        </p>

        <p>
            [ ] and was buried in the Roman Catholic Cemetery of this Parish<br>
            [ ] Municipal Cemetery of <span class="underline">{{ $death->name_of_cemetery ?? '____________________________' }}</span><br>
            on the <span class="underline">{{ $dateOfBuriedDay ?? '____' }}</span> day of
            <span class="underline">{{ $dateOfBuriedMonth ?? '______________' }}</span>, <span class="underline">{{ $dateOfBuriedYear ?? '____' }}</span>.
        </p>

        <p>The cause of death was <span class="underline">{{ $death->cause_of_death ?? '______________________________________' }}</span>.</p>

        <p>
            [ ] He/she received the last Sacraments of Confession, Extreme Unction and Holy Vaticum before death.<br>
            [ ] He/she was not able to receive any sacraments before death.
        </p>

        <p>
            This is a true copy of the original record as it appears in the Register of Dead of this Parish, Book No.
            <span class="underline">{{ $death->book_number ?? '_______' }}</span>, Folio No. <span class="underline">{{ $death->page_number ?? '_______' }}</span>.
        </p>

        <p class="center">
            In witness whereof, I affix my signature and put the seal of this Parish of
            <span class="underline">{{ Auth::user()->church->name_of_church }}</span>.
        </p>

        <p>
            On this <span class="underline">{{ $dateToday }}</span> day of
            <span class="underline">{{ $dateMonth  }}</span>,
            <span class="underline">{{ $dateYear }}</span>.
        </p>

        <div class="footer">
            <p>
                <span class="underline">{{ Auth::user()->church->name_of_priest}}</span><br>
                <strong>Catholic Priest</strong>
            </p>
        </div>
    </div>
</body>
</html>
