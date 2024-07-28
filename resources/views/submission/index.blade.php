@extends('components.main')

@section('title')
    Submission
@endsection

@section('body')
    <style>
        th,
        td {
            padding: 1rem 0;
            min-width: 180px;
        }

        table {
            display: block;
            width: 100%;
            max-width: -moz-fit-content;
            max-width: fit-content;
            margin: 0 auto;
            overflow-x: auto;
            white-space: nowrap;
        }
    </style>
    <div class="header-2">
        <p>Task status will refresh automatically</p>
        <a href={{ route('submission.create') }} class="add-button"><i class="fa-solid fa-file-circle-plus"></i> New
            Submission</a>
    </div>
    <table width="100%">
        <thead>
            <tr>
                <th>Title</th>
                <th>Word Count</th>
                <th>Similarity</th>
                <th>Ai Writing</th>
                <th>Status</th>
                <th>Start At</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Submission 1</td>
                <td>4012</td>
                <td>3%</td>
                <td>0%</td>
                <td>
                    <div class="badge-success">Success</div>
                </td>
                <td>23/7/2024</td>
                <td style="display: flex; gap:1rem; justify-content: center;align-items:center">
                    <div class="detail-button"><i class="fa-solid fa-eye"></i> Detail</div>
                    <div class="delete-button"><i class="fa-solid fa-trash"></i> Delete</div>
                </td>
            </tr>
        </tbody>
    </table>
@endsection
