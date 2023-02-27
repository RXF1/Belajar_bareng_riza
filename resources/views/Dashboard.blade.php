@extends('layouts.index')
@section('isi')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa</title>
</head>
<body> 
<h1 class="text-center">DATA SISWA</h1>
    <div class="container d-flex justify-content-center">
        
    <div class="card" style="width: 500rem;">
        <div class="card-body">
            <div class="d-flex justify-content-end mr-3"> <a href="#" class="btn btn-success mb-3 ">Tambah</a></div>
       
        <table class="table text-center">
        <tr >
            <th>NIS</th>
            <th>NAMA</th>
            <th>KELAS</th>
            <th>ACTION</th>
        </tr>
        
        <tr>
            @foreach($siswas as $S)
            <td>{{$S->nis}}</td>
            <td>{{$S->nama}}</td>
            <td>{{$S->kelas}}</td>
            <td>
                <button class="btn btn-success">DETAIL</button>
                <button class="btn btn-warning">EDIT</button>
                <button class="btn btn-danger">DELETE</button>
            </td>
            @endforeach
        </tr>

    </table>
        </div>
    </div>
    </div>
   
    

</body>
</html>

@endsection