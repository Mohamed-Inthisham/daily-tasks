<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class='text-center'>
        <h1>Daily Tasks</h1>
            <div class="row">
                <div class="col-md-12">
                    @foreach ($errors->all() as $error)
                        <div class="alert alert-danger" role="alert">{{ $error }}</div>
                    @endforeach

                    <form action="/save-tasks" method="post">
                        @csrf
                        <input type="text" class="form-control" placeholder="Add a new task" name="task">
                        </br>
                        <input type="submit" value="Save" class="btn btn-primary">
                        <input type="button" value="Clear" class="btn btn-danger">
                    </form>
                                   
                    </br>


                    <table class="table table-dark">
                        <th>ID</th>
                        <th>Task</th>
                        <th>Completed</th>
                        <th>Action</th>

                        @foreach($tasks as $task)
                        <tr>
                            <td>{{$task->id}}</td>
                            <td>{{$task->task}}</td>
                            <td>
                                @if($task->is_completed)
                                    <button class="btn btn-success">Completed</button>
                                @else
                                    <button class="btn btn-secondary">Not Completed</button>
                                @endif
                            </td>
                            <td>
                                @if(!$task->is_completed)
                                <a href="update-as-completed/{{$task->id}}" class="btn btn-primary">Mark as completed</a>
                                @else
                                <a href="update-as-not-completed/{{$task->id}}" class="btn btn-warning">Mark as not completed</a>
                                @endif
                                <a href="update-nav/{{$task->id}}" class="btn btn-info">Update</a>
                                <a href="delete-tasks/{{$task->id}}" class="btn btn-danger">Delete</a>
                            </td>
                            
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>