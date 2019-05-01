<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>My Table</title>
    <style>
    .table{
        width:70%;
        position:relative;
        top:100px;
        left:100px;
    }
    html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }
            .invalid-feedback{
                display:block;
            }
            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

           
            .title {
                font-size: 74px;
                position:relative;
                left: 100px
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

          
    </style>
  </head>
  <body>
  <div class="content">
                <div class="title m-b-md" style="align-self:center;">
                    My Table
                </div>
                <a href="<?php echo url('posts') ?>"class="btn btn-primary" style="left:100px;position:relative;top:50px">Kembali</a>
  <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Judul Buku</th>
      <th scope="col">Penerbit</th>
      <th scope="col">Tahun Terbit</th>
      <th scope="col">Pengarang</th>
      <th scope="col">Aksi</th>
     
      
    </tr>
  </thead>
  <tbody>
      
  @foreach($posts as $row)
    <tr>
     
      <td>{{$row['id']}}</td> 
      <td >{{$row['judul']}}</td>
      <td >{{$row['penerbit']}}</td>
      <td >{{$row['tahun_terbit']}}</td>
      <td >{{$row['pengarang']}}</td>
      <td>
      <form method="POST"action= "{{action('Postscontroller@destroy',
      $row['id'])}}" >
     
      {{method_field('DELETE')}}
      {{csrf_field()}}
      <input type="hidden" name="_method" value="DELETE">
      <button class="btn btn-primary">Hapus</button>
      </form>
        <td>
    </tr>
    @endforeach()
    <tr>
     
  </tbody>

</table>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
