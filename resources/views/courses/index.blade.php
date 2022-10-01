<h1>Kursų sąrašas</h1>
<table border="1">
    <thead>
        <tr>
            <th>Pavadinimas</th>
            <th>Kalba</th>
            <th>Kaina</th>
        </tr>
    </thead>
    <tbody>
        @foreach($courses as $course )
        <tr>
            <td>{{ $course->name }}</td>
            <td>{{ $course->language }}</td>
            <td>{{ $course->price }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
