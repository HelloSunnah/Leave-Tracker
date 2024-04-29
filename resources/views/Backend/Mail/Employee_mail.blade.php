<!DOCTYPE html>
<html>
<head>
    <title>Leave Request Status Update</title>
</head>
<body>
    <h1>Leave Request Status Update</h1>

    <p>Hi {{ $employee->name }},</p>

    <p>Your leave request has been {{ $message }} by Admin</p>

    <p>Details:</p>

    <ul>
        <li>Leave Type: {{ $leave->leave_type }}</li>
        <li>Start Date: {{ $leave->start_date }}</li>
        <li>End Date: {{ $leave->end_date }}</li>
        <li>Reason: {{ $leave->reason }}</li>
    </ul>

    <p>Thank you.</p>
</body>
</html>
