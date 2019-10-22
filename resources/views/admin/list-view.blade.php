@extends('admin.layouts.app')


@section('content')
    <div class="container">
        <div class="col-md-12 ">
            <div class="mb-3" style="margin-bottom: 10px;">
                <div class="row">
                    <div class="col-md-2">
                        <strong>Search By :</strong>
                    </div>
                    <div class="col-md-3">
                        <select  class="form-control" id="fileds">
                            <option value="name">Name</option>
                            <option value="category">Category</option>
                        </select>
                    </div>
                    <div class="col-md-7">
                        <input id="target"  type="text" class="form-control" placeholder="Search">
                    </div>
                </div>
            </div>

            <div class="panel panel-default mt-3">
                <div class="panel-body">
                    <div class="row">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Group Type</th>
                                    <th scope="col">Account Name</th>
                                    <th scope="col">Post Text</th>
                                    <th scope="col">Time</th>

                                </tr>
                            </thead>
                            <tbody>
                            @foreach($posts as $post)
                            <tr>
                                <td>{{$post->groupInfo->name}}</td>
                                <td>{{$post->accountInfo->name}}</td>
                                <td>{{$post->post_text}}</td>
                                <td>{{$post->created_at}}</td>

                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                        {{ $posts->links() }}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection\
@section('js')
<script>
    $( "#target" ).change(function() {
        alert( "Handler for .change() called." );
        // here send data via ajax and load this data into dom
    });
</script>
@endsection