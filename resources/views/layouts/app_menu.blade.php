@if(Auth::user())
	<li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
            Master <span class="caret"></span>
        </a>

        <ul class="dropdown-menu" role="menu">
            <li><a href="{{ route('gejala.index') }}">Gejala</a></li>
			<li><a href="{{ route('kerusakan.index') }}">Kerusakan</a></li>
			<li><a href="{{ route('solusi.index') }}">Solusi</a></li>
			<li><a href="#">Role CF</a></li>
        </ul>
    </li>
    <li><a href="#">Other Page</a></li>
@else

@endif