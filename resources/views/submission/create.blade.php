@extends('components.main')

@section('title')
    Make New Submission
@endsection

@section('breadcrumb')
    @parent
    <li class="breadcrumb-item">
        <a href={{ route('submission.index') }}>Submission</a>
    </li>
    <li class="breadcrumb-item active">Create Submission</li>
@endsection

@section('body')
<link rel="stylesheet" href="/css/navbar.css">
<link rel="stylesheet" href="/css/style.css">
    <form action={{ route('submission.store') }} method="POST">
        @csrf
        <div class="form-input">
            <p>Region</p>
                <div class="form-group">
                    <div class="form-radio">
                        <input type="radio" class="check-with-label" id="inter" name="region"
                            value="International">
                        <label class="label-for-check" for="inter">International</label><br>
                    </div>
                    <div class="form-radio">
                        <input type="radio" class="check-with-label" id="united" name="region" value="United Kingdom">
                        <label class="label-for-check" for="united">United Kingdom</label>
                    </div>
                </div>
        </div>
        <p style="font-weight: 500">Document Information</p>
        <div class="form-input">
            <label for="file" class="label-file">
                <div class="file-1">
                    <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2" />
                    </svg>
                    <p><strong>Click to upload</strong> or drag and drop</p>
                    <p>PDF Only</p>
                </div>
                <div class="">
                    <input type="file" id="file" name="file">
                </div>
            </label>
        </div>
        <div class="form-input">
            <p>Title</p>
            <div class="">
                <input type="text" id="title" name="title">
            </div>
        </div>
        <div class="form-input">
            <p>Exclusion Option</p>
            <div class="form-group">
                <div class="form-radio">
                    <input type="radio" class="check-with-label" id="bio" name="exclu"
                        value="Exclude Bibliography">
                    <label class="label-for-check" for="bio">Exclude Bibliography</label><br>
                </div>
                <div class="form-radio">
                    <input type="radio" class="check-with-label" id="quoted" name="exclu" value="Exclude Quotes">
                    <label class="label-for-check" for="quoted">Exclude Quotes</label>
                </div>
            </div>
        </div>
        <div class="form-input">
            <p>Exclude small matches method</p>
            <div class="form-group">
                <div class="form-radio">
                    <input id="disabled" type="radio" class="check-with-label" name="small" value="Disabled">
                    <label class="label-for-check" for="disabled">Disabled</label>
                </div>
                <div class="form-radio">
                    <input id="word" type="radio" class="check-with-label" name="small" value="By Word">
                    <label class="label-for-check" for="word">By Word</label>
                </div>
                <div class="form-radio">
                    <input id="percen" type="radio" class="check-with-label" name="small" value="By Percentage">
                    <label class="label-for-check" for="percen">By Percentage</label>
                </div>
            </div>
        </div>
        <button type="submit">Submit</button>
    </form>
@endsection
