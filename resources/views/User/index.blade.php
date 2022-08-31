@section('title','Administration of users')

@vite(['resources/js/app.js'])

    <div id="confirmdelete" class="row">

        <div class="col-12">

            <div class="card">

                <div class="card-header">

                    <div class="card-header">
                        
                        <h2>List of users</h2>
                        <a href="{{route('admin.users.create')}}" class="float-left btn btn-primary"> Create </a>
                
                    </div>

                    <div class="card-body">

                        <table class="table table-hover">

                            <thead>

                                <tr>

                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Last name</th>
                                    <th>Identification type</th>
                                    <th>Identification</th>
                                    <th>Email</th>

                                </tr>

                            </thead>

                            <tbody>

                                @foreach($users as $user)

                                    <tr>

                                        <td>{{ $user->id }}</td>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->last_name }}</td>
                                        <td>{{ $user->id_type }}</td>
                                        <td>{{ $user->identification }}</td>
                                        <td>{{ $user->email }}</td>

                                        <td><a href="{{route('admin.users.show', $user)}}" class="float-left btn btn-success"> Show </a></td>

                                    </tr>

                                @endforeach

                            </tbody>

                        </table>

                    </div>

                </div>

            </div>

        </div>

    </div>
    