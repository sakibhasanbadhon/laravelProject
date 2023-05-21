<x-backend>

    <div class="card-header">
        <h4 class="card-title mb-0 d-flex justify-content-between">Personal Information List
            <a href="{{ route('index') }}" class="btn btn-sm btn-outline-danger"> Back</a>
        </h4>
    </div>

    <div class="card-body">

        <form action="{{ route('info/store') }}" method="POST">
            @csrf

            <div class="row">
                <div class="col-md-6">

                    <div class="mb-3">
                      <label for="roll" class="form-label">Student Roll</label>
                      <input type="text" name="roll" class="form-control form-control-sm" id="roll">
                    </div>

                    <div class="mb-3">
                      <label for="firstName" class="form-label">First Name</label>
                      <input type="text" name="firstName" class="form-control form-control-sm" id="firstName">
                    </div>

                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" name="username" class="form-control form-control-sm" id="username">
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">email</label>
                        <input type="email" name="email" class="form-control form-control-sm" id="email">
                    </div>

                    <div class="mb-3">
                        <label for="phone_number" class="form-label">Phone Number</label>
                        <input type="text" name="phone_number" class="form-control form-control-sm" id="phone_number">
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="text" name="password" class="form-control form-control-sm" id="password">
                    </div>

                    <div class="mb-3">
                        <label for="avatar" class="form-label">Avatar</label>
                        <input type="text" name="avatar" class="form-control form-control-sm" id="avatar">
                    </div>

                    <div class="mb-3">
                        <label for="apply" class="form-label">Apply Date</label>
                        <input type="text" name="apply" class="form-control form-control-sm" id="apply">
                    </div>


                </div>


                <div class="col-md-6">

                    <div id="emailHelp" class="form-text">Personal Information</div> <hr>

                    <div class="mb-3">
                        <label for="fatherName" class="form-label">Father Name</label>
                        <input type="text" name="fatherName" class="form-control form-control-sm" id="fatherName">
                    </div>

                    <div class="mb-3">
                        <label for="motherName" class="form-label">Mother Name</label>
                        <input type="text" name="motherName" class="form-control form-control-sm" id="motherName">
                    </div>

                    <div class="mb-3">
                        <label for="nationalId" class="form-label">National ID</label>
                        <input type="text" name="nationalId" class="form-control form-control-sm" id="nationalId">
                    </div>

                    <div class="mb-3">
                        <label for="gender" class="form-label">Gender</label>
                        <input type="text" name="gender" class="form-control form-control-sm" id="gender">
                    </div>

                    <div id="emailHelp" class="form-text">Address</div> <hr>

                    <div class="mb-3">
                        <label for="district" class="form-label">District</label>
                        <input type="text" name="district" class="form-control form-control-sm" id="district">
                    </div>

                    <div class="mb-3">
                        <label for="upazila" class="form-label">Upazila</label>
                        <input type="text" name="upazila" class="form-control form-control-sm" id="upazila">
                    </div>

                    <div class="mb-3">
                        <label for="postalCode" class="form-label">Postal Code</label>
                        <input type="text" name="postalCode" class="form-control form-control-sm" id="postalCode">
                    </div>

                    <div class="mb-3">
                        <label for="address" class="form-label">Address</label>
                        <input type="text" name="address" class="form-control form-control-sm" id="address">
                    </div>


                </div>

            </div>




            <button class="d-block btn btn-primary p-2 bg-primary text-white" type="submit">Submit</button>



        </form>

    </div>



</x-backend>


