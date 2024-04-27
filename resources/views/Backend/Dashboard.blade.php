@extends('Backend.Master')
@section('content')
<style>.card-container {
  display: flex;
  flex-wrap: wrap;
  gap: 20px;
  margin: 0 -10px;
}

.card {
  width: 23%;
  padding: 20px;
  border-radius: 5px;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
  transition: all 0.2s ease;
}

.card:hover {
  transform: scale(1.02);
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
}

.card-1 {
  background-color: #f0e6fa; /* Light purple */
}

.card-2 {
  background-color: #e8f0fe; /* Light blue */
}

.card-3 {
  background-color: #fef9e7; /* Light yellow */
}

.card-4 {
  background-color: #fee2e2; /* Light pink */
}

.card-title {
  font-weight: bold;
  margin-bottom: 5px;
  color: #333;
}

.card-text {
  font-size: 18px;
  color: #333;
}

.fs-2 {
  font-size: 2rem;
  color: #fff; /* White for better contrast */
}


</style>
<div class="card-container">
  <div class="card card-1">
    <div class="card-body">
      <h5 class="card-title">Total Request</h5>
      <h5 class="card-title">{{ $leave_request['total_request'] }}</h5>
      <p class="card-text">All Leave Requests</p>
    </div>
  </div>
  <div class="card card-2">
    <div class="card-body">
      <h5 class="card-title">Pending Request</h5>
      <h5 class="card-title">{{ $leave_request['pending_request'] }}</h5>
      <p class="card-text">Waiting for Approval</p>
    </div>
  </div>
  <div class="card card-3">
    <div class="card-body">
      <h5 class="card-title">Accepted Request</h5>
      <h5 class="card-title">{{ $leave_request['accepted_request'] }}</h5>
        <p class="card-text">Approved Leaves</p>
    </div>
  </div>
  <div class="card card-4">
    <div class="card-body">
      <h5 class="card-title">Cancelled Request</h5>
      <h5 class="card-title">{{ $leave_request['cancelled_request'] }}</h5>
        <p class="card-text">Cancelled Leaves</p>
    </div>
  </div>
</div>
<script>const cards = document.querySelectorAll('.card');

cards.forEach(card => {
  card.addEventListener('mouseover', () => {
    card.classList.add('hover');
  });
  card.addEventListener('mouseout', () => {
    card.classList.remove('hover');
  });
});
</script>
 @endsection
