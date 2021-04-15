
        @foreach ($students as $student)
            <tr>
                <td>{{ $student->first_name }}</td>
                <td>{{ $student->last_name }}</td>
                <td>{{ $student->address }}</td>
              
            </tr>
        @endforeach