<div class="row">
    <div class="col-sm-8 col-md-6 m-auto">
        <ol class="list-group">
            @forelse ($pasarBuah as $var)
            <li class="list-group-item">{($var)}</li>
            @empty
            <div class="alert alert-dark d-inline-block">Tidak ada data ...</div>
            @endforelse
        </ol>
    </div>
</div>
