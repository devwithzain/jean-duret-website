<div class="w-full h-screen flex items-center justify-center bg-[#f1f1f1] p-5">
   <div x-data="{ showPassword: false, showConfirmPassword: false }"
      class="w-[50%] h-[80vh] bg-[#04031b] rounded-xl py-5 relative z-[999] xm:w-full sm:w-full">
      <button type="button" onclick="window.history.back()"
         class="absolute top-4 right-4 z-[1000] bg-[#2f1d88] hover:bg-[#1a0e4a] text-white rounded-full p-2 shadow-lg">
         <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
         </svg>
      </button>
      <div class="w-full h-full flex justify-between items-center pl-5 xm:pl-0 sm:pl-0">
         <div class="w-1/2 xm:hidden sm:hidden h-full pointer-events-none">
            <img src="{{ asset('assets/img.jpg') }}" alt="fromImage" class="w-full h-full object-cover rounded-xl" />
         </div>
         <div class="w-1/2 xm:w-full sm:w-full flex items-center justify-center">
            <div class="w-full px-10 flex justify-center flex-col gap-8">
               <div class="flex flex-col gap-2">
                  <h1 class="text-white subHeading font-bold ">Login to an Account</h1>
                  <div class="flex items-center gap-2">
                     <p class="paragraph text-[#ADABB8]">Don't' have an account?</p>
                     <a href={{ route('register') }} class="paragraph text-[#9887c9] underline">Register</a>
                  </div>
               </div>
               <form method="POST" action="{{ route('login') }}" class="flex flex-col gap-5">
                  @csrf
                  <div class="flex flex-col gap-2">
                     <div
                        class="w-full flex items-center bg-[#3c375269] rounded-lg px-4 py-2 gap-2 @error('email') border-red-500 border @enderror">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                           stroke="#6D6980" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                           class="lucide lucide-mail-icon lucide-mail">
                           <path d="m22 7-8.991 5.727a2 2 0 0 1-2.009 0L2 7" />
                           <rect x="2" y="4" width="20" height="16" rx="2" />
                        </svg>
                        <input type="email" name="email" placeholder="Email" value="{{ old('email') }}"
                           class="bg-transparent text-white border-none placeholder:text-[#6D6980] focus:outline-none focus:border-none focus:ring-0 w-full" />
                     </div>
                     @error('email')
                        <span class="text-red-500 paragraph">{{ $message }}</span>
                     @enderror
                  </div>
                  <div class="flex flex-col gap-2">
                     <div
                        class="w-full flex items-center bg-[#3c375269] rounded-lg px-4 py-2 gap-2 @error('password') border-red-500 border @enderror">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                           stroke="#6D6980" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                           class="lucide lucide-lock-icon lucide-lock">
                           <rect width="18" height="11" x="3" y="11" rx="2" ry="2" />
                           <path d="M7 11V7a5 5 0 0 1 10 0v4" />
                        </svg>
                        <input :type="showPassword ? 'text' : 'password'" name="password" placeholder="Password"
                           class="bg-transparent text-white placeholder:text-[#6D6980] w-full focus:outline-none focus:border-none focus:ring-0 border-none" />
                        <button type="button" @click="showPassword = !showPassword">
                           <svg x-show="!showPassword" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                              viewBox="0 0 24 24" fill="none" stroke="#6D6980" stroke-width="2" stroke-linecap="round"
                              stroke-linejoin="round" class="lucide lucide-eye-icon lucide-eye">
                              <path
                                 d="M2.062 12.348a1 1 0 0 1 0-.696 10.75 10.75 0 0 1 19.876 0 1 1 0 0 1 0 .696 10.75 10.75 0 0 1-19.876 0" />
                              <circle cx="12" cy="12" r="3" />
                           </svg>
                           <svg x-show="showPassword" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                              viewBox="0 0 24 24" fill="none" stroke="#6D6980" stroke-width="2" stroke-linecap="round"
                              stroke-linejoin="round" class="lucide lucide-eye-off-icon lucide-eye-off">
                              <path
                                 d="M10.733 5.076a10.744 10.744 0 0 1 11.205 6.575 1 1 0 0 1 0 .696 10.747 10.747 0 0 1-1.444 2.49" />
                              <path d="M14.084 14.158a3 3 0 0 1-4.242-4.242" />
                              <path
                                 d="M17.479 17.499a10.75 10.75 0 0 1-15.417-5.151 1 1 0 0 1 0-.696 10.75 10.75 0 0 1 4.446-5.143" />
                              <path d="m2 2 20 20" />
                           </svg>
                        </button>
                     </div>
                     @error('password')
                        <span class="text-red-500 paragraph">{{ $message }}</span>
                     @enderror
                  </div>
                  <button type="submit"
                     class="w-full bg-[#2f1d88] rounded-lg p-4 text-[16px] text-white font-normal text-center">
                     Login
                  </button>
               </form>
            </div>
         </div>
      </div>
   </div>
</div>