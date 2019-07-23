<html>
<body>
    <h1>Projects</h1>
    <ul>
        @foreach ($projects as $item)
            <li><a href="/projects/edit/{{$item->id}}">{{ $item->title }} </a></li>
        @endforeach
    </ul>
</body>
</html>