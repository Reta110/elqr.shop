<div class="table-responsive-sm">
    <table class="table table-striped" id="banks-table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Code</th>
                <th>Phone</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($banks as $bank)
                <tr>
                    <td>{{ $bank->name }}</td>
                    <td>{{ $bank->code }}</td>
                    <td>{{ $bank->phone }}</td>
                    <td>
                        {!! Form::open(['route' => ['banks.destroy', $bank->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('banks.edit', [$bank->id]) }}" class='btn btn-ghost-info'><i
                                    class="fa fa-edit"></i></a>
                            {!! Form::button('<i class="fa fa-trash"></i>', [
                                'type' => 'submit',
                                'class' => 'btn btn-ghost-danger',
                                'onclick' => "return confirm('Are you sure?')",
                            ]) !!}
                        </div>
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
