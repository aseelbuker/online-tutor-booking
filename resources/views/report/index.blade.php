@extends('layouts.app')

@section('title', 'Reports')
@section('content')
<h1>Reports</h1>
<a href="{{ route('report.create') }}" class="btn btn-primary mb-3">Add Report</a>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Reported By</th>
            <th>Type</th>
            <th>Reason</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($reports as $report)
        <tr>
            <td>{{ $report->id }}</td>
            <td>{{ $report->reported_by }}</td>
            <td>{{ $report->reportable_type }}</td>
            <td>{{ $report->reason }}</td>
            <td>
                <a href="{{ route('report.edit', $report->id) }}" class="btn btn-sm btn-warning">Edit</a>
                <form action="{{ route('report.destroy', $report->id) }}" method="POST" style="display:inline-block;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection 