{{-- <x-header data="user header component" />
<h2>Custom File</h2> --}}


{{-- @include('header')
@for ($i = 0; $i < 10; $i++)
    <p>{{ $i }}</p>
@endfor

@foreach ($users as $user)
    @if ($user == 'adil')
        <p>
            Welcome {{ $user }}
        </p>
    @elseif ($user == 'raheem')
        <p>
            Hello ! {{ $user }}
        </p>
    @else
        <h2>Chal bhai shat ho</h2>
    @endif
@endforeach

@include('innerview')

<script>
    var data = @json($users);
    console.log(data);
</script> --}}


{{-- Api Data --}}
<h1>User Data</h1>
<table border="1">
    <tr>
        <td>ID</td>
        <td>Name</td>
        <td>Email</td>
        <td>Phone</td>
        <td>Avatar</td>
    </tr>
    @foreach ($collection as $item)
        <tr>
            <td>{{ $item['id'] }}</td>
            <td>{{ $item['first_name'] }}</td>
            <td>{{ $item['last_name'] }}</td>
            <td>{{ $item['email'] }}</td>
            <td><img src={{ $item['avatar'] }} alt=""></td>
        </tr>
    @endforeach
</table>
