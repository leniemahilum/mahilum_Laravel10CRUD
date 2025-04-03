<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Exam</title>

</head>

<body>

    <h2 style="text-align: center; background-color: gray; color: white;">Customer Records</h2>

    <table class="table table-striped table-bordered table-hover">
        <thead class="table-dark">
            <tr>
                <th>Student Name</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($name as $studentName)
                <tr>

                    <td>
                        @if($studentName->stud_name)
                            {{ $studentName->customer->firstName }} {{ $custstudentNameomer->customer->lastName }}
                        @else
                            <span class="text-danger">No students Found</span>
                        @endif
                    </td>
                    <td>{{ $studentName->address }}</td>
                    <td>{{ $studentName->email }}</td>
                </tr>

            @endforeach
        </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>