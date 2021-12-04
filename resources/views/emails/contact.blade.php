<h2><strong>{{ $name }} sent an appointment</strong></h2>
<p>
    <strong>Email:</strong> {{ $email }}<br>
    {!! isset($date) ? "<strong>Date: </strong>$date<br>" : '' !!}
    {!! isset($time) ? "<strong>Time: </strong>$time<br>" : '' !!}
    <strong>Subject:</strong> {{ $subject }}<br>
    <strong>Description:</strong><br>{{ $description }}
</p>



