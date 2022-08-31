
@vite(['resources/js/app.js'])

<div class="bg-white rounded-lg shadow-sn text-center flex-col ml-auto m-6">

    <div class="card">

        <div class="card-body">

                <div class="container">

                    <h3>Show User information</h3> <br>

                    <div class="form-group">

                        <input type="text" class="form-control" id="name" placeholder="Name" name="name" value="{{ $user->name }}" disabled>
                            
                        <br>

                        <input type="text" class="form-control" id="last_name" placeholder="Last Name" name="last_name" value="{{ $user->last_name }}" disabled>
                            
                        <br>

                        <input type="text" class="form-control" id="id_type" placeholder="ID_type" name="id_type" value="{{ $user->id_type}}" disabled>
                            
                        <br>
                            
                        <input type="number" class="form-control" id="identification" placeholder="Identification" name="identification" value="{{ $user->identification }}" disabled>
                            
                        <br>
                            
                        <input type="text" class="form-control" id="email" placeholder="email" name="email" value="{{ $user->email }}" disabled >
                            
                        <br>

                    </div>

                    <hr>

                    <a class="btn btn-danger" href="{{route('admin.users.index')}}">Back</a>

                </div>

            </form>

        </div>

    </div>

</div>