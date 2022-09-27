{{-- <x-header data="user header component" />
<h2>Custom File</h2> --}}


@include('header')
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
</script>
