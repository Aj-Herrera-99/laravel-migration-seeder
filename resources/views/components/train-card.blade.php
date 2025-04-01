@props(['train'])


<tr>
    <td>{{ \Carbon\Carbon::parse($train['arrival_time'])->format('H:i') }}</td>
    <td>{{ $train['arrival_station'] }}</td>
    <td>{{ $train['train_code'] }}</td>
    <td>{{ $train['is_on_time'] ? 'on time' : 'cancelled' }}</td>
</tr>
