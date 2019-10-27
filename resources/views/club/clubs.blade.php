@extends("../layouts.master")
@section("content")



@section("title")
CLUBS
@endsection



<br><br>
@if(!Auth::guest())
<a href="/newClub"><button class="myButton">Add new Club</button></a>
@endif
<br><br><br>
<div class="table-responsive">
    <table class="table blueTable">
        <thead>
            <tr>
                <th>No.</th>
                <th>Name</th>
                <th>Address</th>
                <th>E-mail</th>
                <th>Website</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>

        <tbody>
            @foreach($clubs as $club)
            <tr>
                <td>{{$club->id}} </td>
                <td>{{$club->name}}</td>
                <td>{{$club->address}}</td>
                <td>{{$club->email}}</td>
                <td>{{$club->website}}</td>
                @if(!Auth::guest())
                <td><a href="editClub/{{$club->id}}"><button class="myButton">Edit</button></a></td>
                <td><a onclick="return confirm('Are you sure you want to delete this data?')"
                        href="deleteClub/{{$club->id}}"><button class="myButton">Delete</button></a></td>
                @endif
            </tr>

            @endforeach
        </tbody>
    </table>

    @isset($message)
    {{$message}}
    @endisset

</div>



@endsection