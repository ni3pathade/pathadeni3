<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Class</title>
</head>
<body>
    <form action="addclass.php" method="post">
        <table>
            <tr>
                <td>School Id</td>
                <td><input type="text" name="school_id" id="school_id"></td>
            </tr>
            <tr>
                <td>Student Id</td>
                <td><input type="text" name="student_id" id="student_id"></td>
            </tr>
            <tr>
                <td>Assignment</td>
                <td><textarea name="assignment" id="assignment" cols="30" rows="10"></textarea></td>
            </tr>
            <tr>
                <td>Status</td>
                <td><input type="text" name="status" id="status"></td>
            </tr>
            <tr>
                <td colspan="2">
                    <button type="submit">Add Class</button>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>