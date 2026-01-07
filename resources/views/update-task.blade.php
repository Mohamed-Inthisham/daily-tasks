<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Task</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
   <div class="container">
        <div class="text-center">
        <h1>Update Task</h1>
            <div class="row">
                <div class="col-md-12">
                    <form action="/update-task" method="post">
                        @csrf
                        <input type="text" class="form-control" name="task" value="{{$taskData->task}}"/>
                        <input type="hidden" name="id" value="{{$taskData->id}}"/>
                        </br>
                        <input type="submit" value="Update Task" class="btn btn-primary"/>
                        &nbsp; &nbsp;  <input type="button" value="Cancel" class="btn btn-danger"/>
                    </form>
                </div>
            </div>
        </div>
   </div>
    
</body>
</html>