<h1>Task list</h1>
<form method="POST">
    @csrf
    <label for="name">Name Task:</label>
    <input id="name" name="name" placeholder="Enter your name" type="text"/>
    <label for="description">Description:</label>
    <input id="description" name="description" placeholder="Enter description" type="text"/>
    <button type="submit">Enter</button>
</form>

<ul>

    @foreach($tasks as $task)
        <li>
            {{ $task->name }}
            <br/>
            {{ $task->description }}
            <br/>
            <ul class="list-group" style="padding: 0">
                <li style="list-style-type: none;">edit
                    <ul class="list-group-item" style="display: none;">
                        <li style="list-style-type: none;">
                            <form action="/task/edit/{{ $task->id }}" method="POST">
                                @method('PUT')
                                @csrf
                                <label for="name">New name:</label>
                                <input id="name" name="name" placeholder="Enter your name" type="text"/>
                                <label for="description">New Description:</label>
                                <input id="description" name="description" placeholder="Enter description" type="text"/>
                                <button type="submit">Enter</button>
                            </form>
                        </li>
                    </ul>
                </li>
            </ul>
            <br/>
            <form action="/task/delete/{{ $task->id }}" method="POST" style="display: inline;">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        </li>

    @endforeach

</ul>
