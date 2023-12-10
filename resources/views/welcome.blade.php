<!doctype html>
<html lang="ar" dir="rtl">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.rtl.min.css" integrity="sha384-nU14brUcp6StFntEOOEBvcJm4huWjB0OcIeQ3fltAfSmuZFrkAif0T+UtNGlKKQv" crossorigin="anonymous">

    <title>relationship</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h2 class="text-center my-3">Eloquent Relationship</h2>
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>Comment</th>
                    <th>Post Title</th>
                </tr>
                </thead>
                <tbody>
                @foreach($comments as $data)
                    <tr>
                        <td>{{ $data->message }}</td>
                        <td>{{ $data->post->title }}</td>
                                </tr>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
