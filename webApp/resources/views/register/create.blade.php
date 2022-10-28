<x-layout bodyClass="">

    <div>
        <main class="main-content  mt-0">
            <section>
                <div class="page-header min-vh-100">
                    <div class="container">
                        <div class="row">
                            <div
                                class="col-xl-5 col-lg-5 col-md-5 d-flex flex-column ms-auto me-auto ms-lg-auto me-lg-1">
                                <div class="position-relative bg-gradient-primary h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center"
                                    style="background-image: url('../assets/img/illustrations/schedule.jpg'); background-size: cover; background-repeat:no-repeat; object-fit:contain;">
                                </div>
                            </div>
                            <div
                                class="col-xl-5 col-lg-5 col-md-5 d-flex flex-column ms-auto me-auto ms-lg-auto me-lg-1">
                                <div class="card card-plain">
                                    <div class="card-header">
                                        <h4 class="font-weight-bolder">Sign Up</h4>
                                        <p class="mb-0">Enter your name, email and password to register</p>
                                    </div>
                                    <div class="card-body">
                                        <form method="POST" action="{{ route('register') }}">
                                            @csrf

                                            {{-- Get user's name --}}
                                            <div class="input-group input-group-outline mt-3">
                                                <label class="form-label">Name</label>
                                                <input type="text" class="form-control" name="name"
                                                    value="{{ old('name') }}">
                                            </div>
                                            @error('name')
                                                <p class='text-danger inputerror'>{{ $message }} </p>
                                            @enderror


                                            {{-- Get user's surname --}}
                                            <div class="input-group input-group-outline mt-3">
                                                <label class="form-label">Surname</label>
                                                <input type="text" class="form-control" name="surname"
                                                    value="{{ old('surname') }}">
                                            </div>
                                            @error('surname')
                                                <p class='text-danger inputerror'>{{ $message }} </p>
                                            @enderror



                                            <div class="input-group input-group-outline mt-3">
                                                <label class="form-label">Email</label>
                                                <input type="email" class="form-control" name="email"
                                                    value="{{ old('email') }}">
                                            </div>
                                            @error('email')
                                                <p class='text-danger inputerror'>{{ $message }} </p>
                                            @enderror


                                            {{-- Get user's passsword --}}
                                            <div class="input-group input-group-outline mt-3">
                                                <label class="form-label">Password</label>
                                                <input type="password" class="form-control" name="password">
                                            </div>
                                            @error('password')
                                                <p class='text-danger inputerror'>{{ $message }} </p>
                                            @enderror


                                            {{-- Get user's passsword --}}
                                            <div class="input-group input-group-outline mt-3">
                                                <div
                                                    class="form-group pmd-textfield pmd-textfield-outline pmd-textfield-floating-label">

                                                    <select id="outline-select" class="form-control" name="role">
                                                        <option value="">Choose account type</option>
                                                        <option value="student">Student Account</option>
                                                        <option value="lecturer">Lecturer Account</option>
                                                    </select>
                                                </div>
                                            </div>
                                            @error('role')
                                                <p class='text-danger inputerror'>{{ $message }} </p>
                                            @enderror



                                            <div class="form-check form-check-info text-start ps-0 mt-3">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckDefault" checked>
                                                <label data-target="#content-scroll-dialog" data-toggle="modal"
                                                    class="form-check-label" for="flexCheckDefault">
                                                    I agree the <a href="javascript:;"
                                                        class="text-dark font-weight-bolder">Terms and Conditions</a>
                                                </label>
                                            </div>
                                            <div class="text-center">
                                                <button type="submit"
                                                    class="btn btn-lg bg-gradient-primary btn-lg w-100 mt-4 mb-0">Sign
                                                    Up</button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center pt-0 px-lg-2 px-1">
                                        <p class="mb-2 text-sm mx-auto">
                                            Already have an account?
                                            <a href="{{ route('login') }}"
                                                class="text-primary text-gradient font-weight-bold">Sign in</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                {{-- Modal --}}

                <div tabindex="-1" class="modal pmd-modal fade" id="content-scroll-dialog" style="display: none;"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h2 class="modal-title">Terms and Conditions</h2>
                            </div>
                            <div class="modal-body">
                                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac
                                    facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac,
                                    vestibulum at eros.</p>
                                <p>...</p>
                                <p>...</p>
                                <p>...</p>
                            </div>
                            <div class="modal-footer">
                                <button data-dismiss="modal" class="btn pmd-ripple-effect btn-primary pmd-btn-flat"
                                    type="button">OK, GOT IT!</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div tabindex="" class="modal pmd-modal fade" id="vertically-centered" style="display: none;" aria -
                    hidden="false">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h2 class="modal-title"> Use Google 's location service?</h2>
                            </div>
                            <div class="modal-body">
                                <p> Let Google help apps determine location.This means sending anonymous location data
                                    to Google, even when no apps are running. </p>
                            </div>
                            <div class="modal-footer pmd-modal-border text-right">
                                <button data - dismiss="modal" class="btn pmd-btn-flat pmd-ripple-effect btn-dark"
                                    type="button"> Disagree </button>
                                <button data - dismiss="modal" type="button"
                                    class="btn pmd-btn-flat pmd-ripple-effect btn-primary">Agree</button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    </div>

    @push('js')
        <script src="{{ asset('assets') }}/js/jquery.min.js">
        </script>
        <script>
            $(function() {

                var text_val = $(".input-group input").val();
                if (text_val === "") {
                    $(".input-group").removeClass('is-filled');
                } else {
                    $(".input-group").addClass('is-filled');
                }
            });
        </script>
    @endpush
</x-layout>
