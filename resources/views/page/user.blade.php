
@if ($user->onboardState != App\Models\User::$APPLICATION_COMPLETED)
<section
class="bg-white shadow-lg rounded-xl w-full flex flex-col gap-8 py-10 px-5 xl:px-10"
>
<h1 class="mb-2 text-2xl font-bold">Bio</h1>


<form method="post" action="<?php route("update_account") ?>">
    @csrf
<div
  class="grid grid-cols-1 xl:grid-cols-3 gap-2 xl:gap-10 justify-between"
>
  <img
    class="h-40 w-full rounded-xl self-center"
    src="{{ asset("design/images/bio.png") }}"
    alt=""
  />
  <div class="flex flex-col gap-2">
    <div>
      <label class="block mb-2 text-sm font-medium text-gray-900"
        >Full Name</label
      >
      <input
        type="text"
        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
        value="{{ $user->name }}"
        required
      />
    </div>
    <div>
      <label class="block mb-2 text-sm font-medium text-gray-900"
        >Email</label
      >
      <input
        type="email"
        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
        value="{{ $user->email }}"
        required
        readonly
      />
    </div>
  </div>
  <div class="flex flex-col gap-2">
    <div>
      <label class="block mb-2 text-sm font-medium text-gray-900"
        >Phone Number</label
      >
      <input
        type="text"
        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
        value="{{ $user->phoneNumber }}"
        required
      />
    </div>
    <div>
      <label class="block mb-2 text-sm font-medium text-gray-900"
        >Career</label
      >
      <input
        type="text"
        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
        value="{{ $user->career }}"
        required
      />
    </div>
  </div>
</div>

<br>

<div class="grid grid-cols-3 gap-10 items-center">
    
    <div>
        <label class="block mb-2 text-sm font-medium text-gray-900"
          >Date of Birth</label
        >
        <input
          name="date_of_birth"
          type="date"
          class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
          placeholder="https://youtube.com/uiye+3"
          required
        />
      </div>
      
      <div>
        <label class="block mb-2 text-sm font-medium text-gray-900"
          > Height</label
        >
        <input
          name="height"
          type="text"
          class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
          placeholder="29 inch"
          required
        />
      </div><div>
        <label class="block mb-2 text-sm font-medium text-gray-900"
          >Weight</label
        >
        <input
          name="weight"
          type="text"
          class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
          placeholder="70kg"
          required
        />
      </div>
</div>

<br>

<div class="grid grid-cols-2 gap-10 items-center">
    <div>
        <label class="block mb-2 text-sm font-medium text-gray-900"
          >Upload Profile</label
        >
        <input
          name="image"
          type="file"
          class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
          required
        />
      </div>

      <div>
        <label class="block mb-2 text-sm font-medium text-gray-900"
          >Proof of Address</label
        >
        <input
          name="proof_of_address"
          type="file"
          class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
          placeholder="https://youtube.com/uiye+3"
          required
        />
      </div>
    
</div>

<br>

<div
  class="grid grid-cols-1 xl:grid-cols-2 gap-2 xl:gap-10 justify-between"
>
<div>
    <label class="block mb-2 text-sm font-medium text-gray-900"
      >Scout Video Link</label
    >
    <input
      name="videolink"
      type="text"
      class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
      placeholder="https://youtube.com/uiye+3"
      required
    />
  </div>

  <div>
    <label class="block mb-2 text-sm font-medium text-gray-900"
      >Send Video to WhatsApp</label
    >
     <a href="wa.me/234677900898">
        <button
      class="text-white bg-blue-700 hover:bg-blue-800 rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
    > WhatsApp </button> 
     </a>
    <i style="color:red">If you don't have your scout video uploaded to youtube. Communicate with the adminstration via the whatsapp using the button, then continue with your application.</i>
  </div>

  <br>

</div>
<br>
<div>
  <label
    for="message"
    class="block mb-2 text-sm font-medium text-gray-900"
    >Short Bio</label
  >
  <textarea
    id="messagee"
    name="description"
    rows="4"
    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
    placeholder="Leave a comment..."
  ></textarea>
</div>

<input
  value="Submit"
  type="submit"
  class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mt-10 w-fit self-center"
>
</form>
</section>



@else
   <p>View Application</p>
@endif

