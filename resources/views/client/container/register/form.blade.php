<div class="w-full h-screen flex items-center justify-center bg-[#f1f1f1]">
   <div x-data="{ showPassword: false, showConfirmPassword: false }"
      class="w-[50%] h-[80vh] bg-[#04031b] rounded-xl py-5 relative z-[999]">
      <div class="w-full h-full flex justify-between items-center pl-5">
         <div class="w-1/2 h-full pointer-events-none">
            <img src="{{ asset('assets/img.jpg') }}" alt="fromImage" class="w-full h-full object-cover rounded-xl" />
         </div>
         <div class="w-1/2 flex items-center justify-center">
            <div class="w-full px-10 flex justify-center flex-col gap-8">
               <div class="flex flex-col gap-2">
                  <h1 class="text-white text-3xl font-bold leading-tight tracking-tight">Create an Account</h1>
                  <div class="flex items-center gap-2">
                     <p class="text-sm text-[#ADABB8]">Already have an account?</p>
                     <a href={{ route('login') }} class="text-sm text-[#9887c9] underline">Login</a>
                  </div>
               </div>
               <form method="POST" action="{{ url('/api/register') }}" class="flex flex-col gap-5">
                  @csrf
                  <div class="flex flex-col gap-2">
                     <div
                        class="w-full flex items-center bg-[#3c375269] rounded-lg p-4 gap-2 @error('name') border-red-500 border @enderror">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                           stroke="#6D6980" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                           class="lucide lucide-user-round-icon lucide-user-round">
                           <circle cx="12" cy="8" r="5" />
                           <path d="M20 21a8 8 0 0 0-16 0" />
                        </svg>
                        <input type="text" name="name" placeholder="Name" value="{{ old('name') }}"
                           class="bg-transparent text-white placeholder:text-[#6D6980] focus:outline-none w-full" />
                     </div>
                     @error('name')
                   <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
                  </div>
                  <div class="flex flex-col gap-2">
                     <div
                        class="w-full flex items-center bg-[#3c375269] rounded-lg p-4 gap-2 @error('email') border-red-500 border @enderror">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                           stroke="#6D6980" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                           class="lucide lucide-mail-icon lucide-mail">
                           <path d="m22 7-8.991 5.727a2 2 0 0 1-2.009 0L2 7" />
                           <rect x="2" y="4" width="20" height="16" rx="2" />
                        </svg>
                        <input type="email" name="email" placeholder="Email" value="{{ old('email') }}"
                           class="bg-transparent text-white placeholder:text-[#6D6980] focus:outline-none w-full" />
                     </div>
                     @error('email')
                   <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
                  </div>
                  <div class="flex flex-col gap-2">
                     <div
                        class="w-full flex items-center bg-[#3c375269] rounded-lg p-4 gap-2 @error('password') border-red-500 border @enderror">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                           stroke="#6D6980" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                           class="lucide lucide-lock-icon lucide-lock">
                           <rect width="18" height="11" x="3" y="11" rx="2" ry="2" />
                           <path d="M7 11V7a5 5 0 0 1 10 0v4" />
                        </svg>
                        <input :type="showPassword ? 'text' : 'password'" name="password"
                           placeholder="Enter your password"
                           class="bg-transparent text-white placeholder:text-[#6D6980] focus:outline-none w-full" />
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
                   <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
                  </div>
                  <div class="flex flex-col gap-2">
                     <div
                        class="w-full flex items-center bg-[#3c375269] rounded-lg p-4 gap-2 @error('password_confirmation') border-red-500 border @enderror">
                        {{-- Lucide Lock Icon --}}
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                           stroke="#6D6980" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                           class="lucide lucide-lock-icon lucide-lock">
                           <rect width="18" height="11" x="3" y="11" rx="2" ry="2" />
                           <path d="M7 11V7a5 5 0 0 1 10 0v4" />
                        </svg>
                        <input :type="showConfirmPassword ? 'text' : 'password'" name="password_confirmation"
                           placeholder="Confirm your password"
                           class="bg-transparent text-white placeholder:text-[#6D6980] focus:outline-none w-full" />
                        <button type="button" @click="showConfirmPassword = !showConfirmPassword">
                           <svg x-show="!showConfirmPassword" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                              viewBox="0 0 24 24" fill="none" stroke="#6D6980" stroke-width="2" stroke-linecap="round"
                              stroke-linejoin="round" class="lucide lucide-eye-icon lucide-eye">
                              <path
                                 d="M2.062 12.348a1 1 0 0 1 0-.696 10.75 10.75 0 0 1 19.876 0 1 1 0 0 1 0 .696 10.75 10.75 0 0 1-19.876 0" />
                              <circle cx="12" cy="12" r="3" />
                           </svg>
                           <svg x-show="showConfirmPassword" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
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
                     @error('password_confirmation')
                   <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
                  </div>
                  <button type="submit"
                     class="w-full bg-[#2f1d88] rounded-lg p-4 text-[16px] text-white font-normal text-center">
                     Sign Up
                  </button>
               </form>
            </div>
         </div>
      </div>
   </div>
</div>