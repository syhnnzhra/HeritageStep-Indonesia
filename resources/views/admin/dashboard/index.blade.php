@extends('admin.layouts.main')
@section('container')
<div class="uk-child-width-1-4@s uk-grid-match" uk-grid>
    <div>
        <div class="uk-card uk-card-hover uk-card-body">
            <h3 class="uk-card-title">Hover</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
        </div>
    </div>
    <div>
        <div class="uk-card uk-card-default uk-card-hover uk-card-body">
            <h3 class="uk-card-title">Default</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
        </div>
    </div>
    <div>
        <div class="uk-card uk-card-primary uk-card-hover uk-card-body uk-light">
            <h3 class="uk-card-title">Primary</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
        </div>
    </div>
    <div>
        <div class="uk-card uk-card-secondary uk-card-hover uk-card-body uk-light">
            <h3 class="uk-card-title">Secondary</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
        </div>
    </div>
</div>

<div class="uk-card uk-card-default uk-card-body uk-width-1-1@m my-10">
<table class="uk-table uk-table-justify uk-table-divider">
    <thead>
        <tr>
            <th class="uk-width-small">tanggal</th>
            <th>Table Heading</th>
            <th>Table Heading</th>
            <th>Table Heading</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Table Data</td>
            <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</td>
            <td><button class="uk-button uk-button-default" type="button">Button</button></td>
        </tr>
        <tr>
            <td>Table Data</td>
            <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</td>
            <td><button class="uk-button uk-button-default" type="button">Button</button></td>
        </tr>
    </tbody>
</table>
  </div>


@endsection
