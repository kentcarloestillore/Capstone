<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Baptismal</title>
</head>
<body>
    <div class="">BOOK_NO:{{$baptismal->book_number}}/PAGE_NO:{{$baptismal->page_number}}/SERIAL_NO:{{$baptismal->serial_number}}</div>
    <div class="">Name: {{$baptismal->parishioner->fullname}}</div>
    <div class="">Address: {{$baptismal->parishioner->residence}}</div>
    <div class="">Date Of Birth {{$baptismal->parishioner->date_of_birth}}</div>
    <div class="">Place of Birth: {{$baptismal->parishioner->place_of_birth}}</div>
    <div class="">Officiating Priest: {{$baptismal->officiating_clergy}}</div>
    <div class="">Date of Baptism: {{$baptismal->date_of_baptism}}</div>
    <div class="">Sex: {{$baptismal->parishioner->sex}}</div>
    <div class="">Nationality: {{$baptismal->parishioner->citizenship}}</div>
    <div class="">Name of Church: {{$baptismal->church->name_of_church}}</div>
    <div class="">Place of Baptism: {{$baptismal->place_of_baptism}}</div>
    <div class="">Name of Father: {{$baptismal->parishioner->name_of_father}}</div>
    <div class="">Name of Mother: {{$baptismal->parishioner->name_of_mother}}</div>
    <div class="">Godparent: {{ $baptismal->godparents->first()->fullname }}</div>
</tr>
</body>
</html>
