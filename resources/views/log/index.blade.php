@extends('layouts.admin_dashboard')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Smart Library Assuit University</h2>
            </div>
            
        </div>
    </div>

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Admin name </th>
            <th>Activity log</th>
            <th> log Time </th>
            
        </tr>
    @foreach ($logs as $log)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $log->admin_name}}</td>
        <td>{{ $log->logActivity}}</td>
        <td>{{ $log->created_at}}</td>
    
    </tr>
    @endforeach
    </table>


    {!! $logs->links() !!}
@endsection