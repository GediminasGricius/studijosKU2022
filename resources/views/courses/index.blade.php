<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12 mt-5">
            <div class="card">
                <div class="card-header">
                    Kursų sąrašas
                </div>
                <div class="card-body">
                    <table class="table" >
                        <thead>
                        <tr>
                            <th>Pavadinimas</th>
                            <th>Kalba</th>
                            <th>Kaina</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($courses as $course )
                            <tr>
                                <td>{{ $course->name }}</td>
                                <td>{{ $course->language }}</td>
                                <td>{{ $course->price }}</td>
                                <td>
                                    <a class="btn btn-success" href="#" >Redaguoti</a>
                                    <a class="btn btn-danger" href="#">Ištrinti</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>


