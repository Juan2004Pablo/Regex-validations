
@vite(['resources/js/app.js'])


<div class="bg-white rounded-lg shadow-sn text-center flex-col ml-auto m-6">

    <form action="{{ route('admin.users.store') }}" method="POST">
        @csrf

            <div class="container">

                <h3>User information</h3> <br>

                <div class="form-group">

                    <input type="text" class="form-control" id="name" placeholder="Name" name="name" > <br>

                    @error('name')
                        <span>{{$message}}</span>
                    @enderror
                </div>

                <div class="form-group">

                    <input type="text" class="form-control" id="last_name" placeholder="last_name" name="last_name"> <br>

                    @error('last_name')
                        <span>{{$message}}</span>
                    @enderror
                </div>

                <div class="form-group">

                    <input type="text" class="form-control" id="id_type" placeholder="Id_type" name="id_type" required> <br>

                    @error('id_type')
                        <span>{{$message}}</span>
                    @enderror
                </div>

                <div class="form-group">

                    <input type="number" class="form-control" id="identification" placeholder="Identification" name="identification"> <br>

                    @error('identification')
                        <span>{{$message}}</span>
                    @enderror
                </div>

                <div class="form-group">

                    <input type="text" class="form-control" id="email" placeholder="Email" name="email"> <br>
                
                    @error('email')
                        <span>{{$message}}</span>
                    @enderror
                </div>
                
                <hr>

                <input class="btn btn-primary" type="submit" value="Save"> <br>

            </div>

    </form>

</div>