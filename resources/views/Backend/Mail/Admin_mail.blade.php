<!DOCTYPE html>
<html>
<head>
    <title>Leave Request Notification</title>
</head>
<body>
    <h1>New Leave Request</h1>

    <p>Hi Admin,</p>

    <p>A new leave request has been submitted by {{ $employee->name}} ( Employee ID:$employee->id )</p>

    <p>Details:</p>

    <ul>
        <li>Leave Type: {{ $leaveRequest->leave_type }}</li>
        <li>Start Date: {{ $leaveRequest->start_date }}</li>
        <li>End Date: {{ $leaveRequest->end_date }}</li>
        <li>Reason: {{ $leaveRequest->reason }}</li>
    </ul>

    <p>Please login to the application to review and manage this request.</p>

    <p>Thanks,</p>

    <p>Leave Tracker System</p>
</body>
</html>
