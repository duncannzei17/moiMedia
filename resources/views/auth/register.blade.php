@extends('layouts.auth')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('regNO') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">Reg No</label>

                            <div class="col-md-6">
                                <input id="regNo" type="text" class="form-control" name="regNo" value="{{ old('regNo') }}" required>

                                @if ($errors->has('regNo'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('regNo') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="school" class="col-md-4 control-label">School</label>

                            <div class="col-md-6">
                                 <select class="form-control" name="school">
                                    <option hidden>Select your School</option>
                                        <option value="Biological">Biological</option>
                                        <option value="Engineering">Engineering</option>
                                        <option value="Information Science">Information Science</option>
                                        <option value="Arts">Arts</option>
                                        <option value="Education">Education</option>
                                </select>

                            </div>
                        </div>

                        <div class="form-group">
                        <label for="school" class="col-md-4 control-label">Hostel</label>
                            <div class="col-md-6">
                            <select class="form-control" name="hostel">
                                            <option hidden>Select Your Hostel</option>
                                            <option value="NULL">Non Resident</option>
                                            <option value="A">Hostel A</option>
                                            <option value="B">Hostel B</option>
                                            <option value="C">Hostel C</option>
                                            <option value="D">Hostel D</option>
                                            <option value="E">Hostel E</option>
                                            <option value="F">Hostel F</option>
                                            <option value="G">Hostel G</option>
                                            <option value="H">Hostel H</option>
                                            <option value="J">Hostel J</option>
                                            <option value="K">Hostel K</option>
                                            <option value="L">Hostel L</option>
                                            <option value="M">Hostel M</option>
                            </select>                           
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail </label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
