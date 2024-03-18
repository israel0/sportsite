@extends("layouts.auth")

@section('content')

<section
class="bg-[url('images/register_img.JPG')] bg-cover bg-center bg-no-repeat min-h-screen flex flex-col items-center justify-center"
>
<form method="POST" action="{{url('auth/register')}}"
 class="bg-white shadow-lg bg-opacity-95 dark:bg-opacity-95 p-5 py-8 rounded-xl w-[80%] xl:w-[35%] shadow-lg"
 >
    @csrf

    @if(session('error'))
    <div style="margin-bottom: 1rem;" class="label label-danger">
        {{ session('error') }}
    </div>
    @endif
    @if(session('success'))
    <div style="margin-bottom: 1rem;" class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

  <div class="mb-5">
    <label
      for="name"
      class="block mb-2 text-sm font-medium text-gray-900"
      >Athlete's Name:</label
    >
    <div class="flex items-center gap-4">
      <input
        type="text"
        name="name"
        id="fullname"
        value="{{old('name')}}"
        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
        placeholder="i.e Adewale Uscout"
        required
      />

      @error('name')
      <span class="invalid-feedback" role="alert">
          <strong style=color:red;>{{ $message }}</strong>
      </span>
  @enderror

    </div>
  </div>
  {{-- <div class="mb-5">
    <label
      for="dob"
      class="block mb-2 text-sm font-medium text-gray-900"
      >DOB:</label
    >
    <input
      type="date"
      id="dob"
      class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
      required
    />
  </div> --}}
  <div class="mb-5">
    <label
      for="phoneNumber"
      class="block mb-2 text-sm font-medium text-gray-900"
      >Phone No:</label
    >
    <input
      type="text"
      id="phoneNumber"
      name="phoneNumber"
      value="{{old('phoneNumber')}}"
      class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
      required
    />
    @error('phoneNumber')
    <span class="invalid-feedback" role="alert">
        <strong style=color:red;>{{ $message }}</strong>
    </span>
@enderror
  </div>
  <div class="mb-5">
    <label
      for="email"
      class="block mb-2 text-sm font-medium text-gray-900"
      >Email:</label
    >
    <input
      type="email"
      name="email"
      value="{{old('email')}}"
      class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
      required
    />
    @error('email')
    <span class="invalid-feedback" role="alert">
        <strong style=color:red;>{{ $message }}</strong>
    </span>
@enderror
  </div>
  <div class="mb-5">
    <label
      for="password"
      class="block mb-2 text-sm font-medium text-gray-900"
      >Password</label
    >
    <input
      type="password"
      name="password",
      value="{{old('password')}}"
      id="password"
      class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
      required
    />
    @error('password')
    <span class="invalid-feedback" role="alert">
        <strong style=color:red;>{{ $message }}</strong>
    </span>
    @enderror
  </div>

  <div class="mb-5">
    <label
      for="confirm_password"
      class="block mb-2 text-sm font-medium text-gray-900"
      >Confirm Password</label
    >
    <input
      type="password"
      name="confirmPassword",
      value="{{old('confirmPassword')}}"
      id="confirmPassword"
      class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
      required
    />
    @error('password_confirmation')
    <span class="invalid-feedback" role="alert">
        <strong style=color:red;>{{ $message }}</strong>
    </span>
@enderror
  </div>


  <div class="mb-5">
    <label
      for="career"
      class="block mb-2 text-sm font-medium text-gray-900"
      >Career:</label>
    <input
      type="text"
      id="career"
      name="career"
      value="{{old('career')}}"
      class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
      placeholder="E.g Basketball"
      required
    />
    @error('career')
    <span class="invalid-feedback" role="alert">
        <strong style=color:red;>{{ $message }}</strong>
    </span>
@enderror
  </div>



  <input
    value="{{ __('Proceed') }}"
    type="submit"
    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center"
  />


</form>
</section>

@endsection





