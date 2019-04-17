<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>My Library</title>
    <style>
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
                font-size: 84px;
                position:relative;
                left: 150px
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

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
</head>
<body>
<div class="content">
                <div class="title m-b-md" style="align-self:center;">
                    My Library
                </div>

<div class="container">
    <div class="row">
   <div class="col-md-6">
    <form method="POST"action="{{route('posts.store')}}" >
      {{csrf_field()}}
    <div class="form-group">
    <label>Judul Buku</label>
    <input class="form-control" type="text" name="judul">
 
    </div>   

    <div class="form-group">
    <label>Tahun Terbit</label>
    <input class="form-control" type="text" name="tahun_terbit">
  
    </div>   

    <div class="form-group">
    <label>Pengarang</label>
    <input class="form-control" type="text" name="pengarang">
  
    </div>
    
    <button class="btn btn-primary">Submit</button>
</form>
<div>
<div>
</div>
</body>
</html>