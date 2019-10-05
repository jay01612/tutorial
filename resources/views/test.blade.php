<table>
	<thead>
		<tr>
			<th>Reference Number</th>
			<th>Date In</th>
			<th>Time in</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			@foreach($jayTable as $result)
				<td>{{ $result->reference_number }}</td>
				<td>{{ $result->date_in }}</td>
				<td>{{ $result->time_in }}</td>
			@endforeach
		</tr>
	</tbody>
</table>