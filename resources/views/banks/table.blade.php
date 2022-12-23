<div class="table-responsive-sm">
    <table class="table table-striped" id="banks-table">
        <thead>
            <tr>
                <th>Identifier</th>
        <th>Phone</th>
        <th>Code</th>
        <th>Phone To</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($banks as $bank)
            <tr>
                <td>{{ $bank->identifier }}</td>
            <td>{{ $bank->phone }}</td>
            <td>{{ $bank->code }}</td>
            <td>{{ $bank->phone_to }}</td>
                <td>
                    {!! Form::open(['route' => ['banks.destroy', $bank->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('banks.show', [$bank->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('banks.edit', [$bank->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>