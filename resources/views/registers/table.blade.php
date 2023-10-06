<div class="table-responsive-sm">
    <table class="table table-striped" id="registers-table">
        <thead>
            <tr>
                <th>Bank</th>
                <th>Name</th>
                <th>Phone</th>
                <th>Identifier</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($registers as $register)
                <tr>
                    <td>{{ $register->bank->name }}</td>
                    <td>{{ $register->name }}</td>
                    <td>{{ $register->phone }}</td>
                    <td>{{ $register->identifier }}</td>
                    <td>
                        {!! Form::open(['route' => ['registers.destroy', $register->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('registers.show', [$register->id]) }}" class='btn btn-ghost-success'><i
                                    class="fa fa-eye"></i></a>
                            <a href="{{ route('registers.edit', [$register->id]) }}" class='btn btn-ghost-info'><i
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
