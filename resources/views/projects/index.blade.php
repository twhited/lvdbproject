<html>
<body>
    <h1>Projects</h1>
    <ul>
        @foreach ($projects as $item)
            <li><a href="/projects/{{$item->id}}/edit">{{ $item->title }} </a></li>
        @endforeach
    </ul>
</body>
</html>